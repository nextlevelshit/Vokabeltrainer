{extends file="_layout.tpl"}

{block name="content"}
    <section class="languages">
        <div class="panel-group greybox" id="accordion_pairs" role="tablist" aria-multiselectable="true">
            {*
             *
             * Language Pairs
             *
             *}
            {foreach from=$language_pairs key=i item=language_pair name=language_pair}
                {assign var="isFirst" value=false}
                {if $smarty.foreach.language_pair.first}
                    {assign var="isFirst" value=true}
                {/if}
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading_pair_{$i}">
                        <a data-toggle="collapse" data-parent="#accordion_pairs" href="#collapse_pair_{$i}" aria-expanded="{if $isFirst}true{else}false{/if}" aria-controls="collapse_pair_{$i}">
                        <div class="row">
                            <div class="col-xs-6 text-right">
                            {$language_pair.language}
                                <img src="{$language_pair.language_flag}" />
                            </div>
                            <div class="col-xs-6">
                                <img src="{$language_pair.translation_flag}" />
                                {$language_pair.translation_language}
                            </div>
                        </div>
                        </a>
                    </div>
                    <div id="collapse_pair_{$i}" class="panel-collapse collapse {if $isFirst}in{/if}" role="tabpanel" aria-labelledby="heading_pair_{$i}">
                        <div class="panel-body list-group">
                            <div class="panel-group" id="accordion_boxes" role="tablist" aria-multiselectable="true">
                            {*
                             *
                             * Boxes
                             *
                             *}
                            {foreach from=$boxes key=j item=box name=box}
                                {assign var="isFirst" value=false}
                                {if $smarty.foreach.box.first}
                                    {assign var="isFirst" value=true}
                                {/if}
                                {if $box.box_id == 0 OR $box.language_pair_id == $language_pair.language_pair_id}
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading_box_{$j}">
                                        <a data-toggle="collapse" data-parent="#accordion_boxes" href="#collapse_box_{$j}" aria-expanded="{if $isFirst}true{else}false{/if}" aria-controls="collapse_box_{$j}">
                                            {$box.name}
                                        </a>
                                    </div>
                                    <div id="collapse_box_{$j}" class="panel-collapse collapse {if $isFirst}in{/if}" role="tabpanel" aria-labelledby="heading_box_{$j}">
                                        <div class="panel-body">
                                            {*
                                             *
                                             * Words
                                             *
                                             *}
                                            <ul class="row list__sortable">
                                                {foreach from=$words key=k item=word name=word}
                                                    {if $word.box == $box.box_id AND $word.language == $pair.language_id_1}
                                                        <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-draggable>
                                                            <a class="greybox text-small">
                                                                {$word.word}
                                                                <input type="checkbox" class="pull-right" />
                                                            </a>
                                                        </li>
                                                    {/if}
                                                {/foreach}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {/if}
                            {/foreach}
                            </div>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </section>
    {literal}
        <script>
            $(document).ready(function(){
                //$('ul.list__sortable').sortable();

                var selectedClass = 'ui-sortable-helper',
                    clickDelay = 1000, // click time (milliseconds)
                    droppableClass = 'ul.list__sortable',
                    draggableClass = 'ul.list__sortable',
                    lastClick, diffClick; // timestamps

                $("ul.list__sortable li")
                    // Script to deferentiate a click from a mousedown for drag event
                        .bind('mousedown mouseup', function(e) {
                            if (e.type == "mousedown") {
                                lastClick = e.timeStamp; // get mousedown time
                            } else {
                                diffClick = e.timeStamp - lastClick;
                                if (diffClick < clickDelay) {
                                    // add selected class to group draggable objects
                                    $(this).toggleClass(selectedClass);
                                    $('.' + selectedClass).parent().addClass('active');
                                }
                            }
                        })
                        .draggable({
                            revertDuration: 100,
                            // grouped items animate separately, so leave this number low
                            containment: '.panel-group.greybox',
                            start: function(e, ui) {
                                ui.helper.addClass(selectedClass);
                                // open hovered panel while dragging

                                $(e.currentTarget.parentNode).addClass('active');
//                                console.log();
                            },
                            stop: function(e, ui) {
                                ui.helper.removeClass(selectedClass);
                                ui.helper.css({
                                    top: 0,
                                    left: 0
                                });
                                // reset group positions
                                $('.' + selectedClass).css({
                                    top: 0,
                                    left: 0
                                });

                                $('ul.list__sortable.active').removeClass('active');
                                // unbind opening panel while hovering
                                $('[aria-controls]').unbind();
                                $('ul.list__sortable:not(.active)').unbind();
                            },
                            drag: function(e, ui) {
                                // set selected group position to main dragged object
                                // this works because the position is relative to the starting position
                                $('.' + selectedClass).css({
                                    top: ui.position.top,
                                    left: ui.position.left
                                });

                                $('[aria-controls]').bind('mouseover', function() {
                                    $('#' + $(this).attr('aria-controls')).collapse('show');
                                });

                                $('ul.list__sortable:not(.active)').bind('mouseenter mouseleave', function(e) {
                                    console.log(e.type);
                                    $(this).toggleClass('list__sortable__hover');
                                });
                            }
                        });

                $("ul.list__sortable:not(.active)").sortable().droppable({
                    drop: function(e, ui) {
                        $('.' + selectedClass).appendTo($(this)).add(ui.draggable) // ui.draggable is appended by the script, so add it after
                                .removeClass(selectedClass).css({
                                    top: 0,
                                    left: 0
                                });
                        $(this).removeClass('list__sortable__hover');
                    }
                });

                /*$('.list__sortable li').click(function(){
                    $(this).find('input').attr('checked', function(index, attr){
                        return attr == 'checked' ? null : 'checked';
                    });
                });*/


            });

        </script>
    {/literal}
{/block}

{block name='footer'}
    <ul>
        <li>
            <a href="#">
                <span class="glyphicon glyphicon-inbox"></span>
                Karteikästen bearbeiten
            </a>
        </li>
        <li>
            <a href="">
                <span class="glyphicon glyphicon-inbox"></span>
                Neuen Karteikasten
            </a>
        </li>
    </ul>
{/block}