/**
 * Created by nextlevelshit on 25.10.14.
 */
$(function() {
    $("li.dropdown").hover(function(){
        $(this).find("ul").addClass("active");
    });

    $("li.dropdown").mouseleave(function(){
        $(this).find("ul").removeClass("active");
    });

    card_flipped = false;
    stats_false = 0;
    stats_correct = 0;
    //stats_total = 0;
    status_current = 0;

    $(document).keyup(function( event ){

        /*if($(".card.active").hasClass('hover')) {
            card_flipped = true;
        } else {
            var card_flipped = false;
        }*/

        if(event.keyCode == 13) { // Press Return
            if(card_flipped) { // Card has already flipped
                //$(".card:first-child").removeClass('hover');
                // Correct Answer
                $(".card.active > .back > #correct").addClass('hover').click();
                //$(".card:first-child > .back > #correct").click();
                card_flipped = false;
            } else { // Card has not flipped yet
                //console.log("flipped");
                $(".card.active").addClass('hover');
                card_flipped = true;
            }
        }

        if(event.keyCode == 8) { // Press Backspace
            if(card_flipped) { // Card has already flipped
                //$(".card:first-child").removeClass('hover');
                $(".card.active > .back > #false").addClass('hover').click();
                card_flipped = false;
            } else {
                $(".card.active").addClass('hover');
                card_flipped = true;
            }
        }
    });

    $("button.next").click(function(){
        var c = $(".card.active");
        var answer = $(this).attr("id");
        var level = c.attr("data-word-level");
        var word_id = c.attr("data-word-id");
        var current_id =  c.attr("id");
        var current_num  = Number(current_id.replace( /^\D+/g, ''));
        var next_num = current_num + 1;


        // Hide card and show new one
        $("#"+current_id).removeClass("active").addClass("hidden").addClass(answer);
        $("#card_"+next_num).removeClass("hidden").addClass("active");
        //$("#current_card_num").html(next_num + 1);


        // Save answer to card
        $("#"+current_id).attr("data-word-answer", answer);

        //$("#puffer").removeClass("fade");

        // Update stats


        // SQL Request
        $.ajax({
            url: "ajax/get_next_card.php?word_id="+word_id+"&answer="+answer+"&level="+level,
            context: document.body
        }).done(function(data) {
            console.log(data);
            if (answer == "correct") stats_correct += 1;
            if (answer == "false") stats_false += 1;
            console.log("STATS: false " + stats_false + "/ correct " + stats_correct + " / current " + current_num + " of " + stats_total);

            // Show puffer
            //$("#puffer")

            //$("#puffer").addClass("fade");

            /*setTimeout(function(){
                // Hide puffer
                $("#puffer").addClass("hidden");
            }, 2000);*/
        }).error(function() {
            alert("Es ist ein Fehler beim Speichern deiner Ergebnisse aufgetreten. Bitte lade die Seite neu");
        });

        if (stats_total > next_num) {
            updateProgressBar (next_num, stats_total, stats_correct, stats_false);
        } else {
            displayStats (stats_total, stats_correct, stats_false);
        }

        function updateProgressBar(current, total, correct, wrong) {
            $("#stats_current").html(current + 1);
        }

        function displayStats (total, correct, wrong) {
            $("#stats").fadeIn();
            var percent = Math.floor((correct/total)*100)/100;
            randomize (percent);
            //console.log("STATS: false " + wrong + "/ correct " + correct + " / total " + total);

            //console.log(Math.floor((correct/total)*100)/100);
        }

        function randomize (percent) {
            var transform_styles = ['-webkit-transform', '-ms-transform', 'transform'];
            var percent_floor = Math.floor(percent * 100);
            var rotation = Math.floor(percent * 180);
            var fill_rotation = rotation;
            var fix_rotation = rotation * 2;

            delay(0, percent_floor);

            function delay(percent_current, percent_floor) {

                $('.inset__percent').html(percent_current + "%");
                if (percent_current < percent_floor) {
                    setTimeout(function() { delay(percent_current + 1, percent_floor); }, 10);
                }
            }

            for (i in transform_styles) {
                $('.circle .fill, .circle .mask.full').css(transform_styles[i], 'rotate(' + fill_rotation + 'deg)');
                $('.circle .fill.fix').css(transform_styles[i], 'rotate(' + fix_rotation + 'deg)');
            }
        }

        //console.log(level);

        //if($("#card_"+next_num).length <= 0) alert("fertig!");

        //console.log(next_num);

        //var answer = this.id;
        //var card_id = $(".card").attr("id");
        //var box_id = $(".box").attr("id");



        //cardBox.answer = answer;
        //cardBox.loadNextCard();
        //console.log(cardBox.returnCard());

        //console.log(answer + card_id + box_id);
    });


    // Submit new cards
    $("form.addwords").submit(function(e){
        var l_words = $("#language_word").val();
        var l_translation = $("#language_translation").val();

        //console.log(l_words + l_translation);

        // Did not set two different languages
        if (l_words == l_translation)
        {
            $(".alert").html( "Bitte wähle zwei <b>unterschiedliche</b> Sprachen aus" ).fadeIn(500);
            e.preventDefault();
        }

        if (l_words == 0 ||  l_translation == 0 )
        {
            $(".alert").html( "Bitte wähle <b>zwei</b> Sprachen aus" ).fadeIn(500);
            e.preventDefault();
        }


        // Forgot to fill all pairs
        $("input[name^=word]").each(function(i){

            var word_element            = $(this);
            var word_value              = word_element.val();
            var translation_element     = $("input[name='translation["+i+"]']");
            var translation_value        = translation_element.val();


            if (word_value + translation_value != "" && (word_value == "" || translation_value == "")) {
                $(".alert").html( "Bitte überprüfe deine Eingaben. Einige Paare sind unvollständig." ).fadeIn(500);
                word_element.addClass("error");
                translation_element.addClass("error");
                e.preventDefault();
            }
        });

        // Nothing to do
        if( $("input[name='word[0]']").val() == "" ) {
            $(".alert").html( "Es wurden keine Wörter eingegeben." ).fadeIn(500);
            e.preventDefault();
        }


        //return false;
    });

    $(".additional").keyup(function( event ){
        var selected_field = $(this);
        var selected_field_value = $(this).val();

        if(selected_field.length > 0) {
            $.ajax({
                url: "ajax/search_words.php?search="+selected_field_value,
                context: document.body
            }).done(function(data) {
                if(data) {
                    console.log(data);
                    //var x = $(document).scrollLeft() + $(selected_field).offset().left;
                    var x = $(document).scrollLeft() + $(selected_field).offset().left;
                    //var y = $(document).scrollTop() + selected_field.offset().top + selected_field.outerHeight();
                    var y = selected_field.offset().top + selected_field.outerHeight();
                    var w = selected_field.width();
                    $(".search__list").css('display','block').offset({ top: y, left: x }).width(w).html(data);
                    console.log(x + " " + y);
                }
            });
        } else {
            $(".search__list").css('display', 'none');
        }
    });

    $(".search__list li").click(function(){
        $(".search__list").css('display', 'none');
    });
});




/*var cardBox =  {
    card: "",
    box: "",
    answer: "",
    loadNextCard: function(){
        $.ajax({
            url: "ajax/get_next_card.php?card=1&box=1",
            context: document.body
        }).done(function(data) {
            console.log(data);
        });
    },
    returnCard: function(){
        return this.card;
    }
};*/




