{extends file="_layout.tpl"}


{block name="headline"}
    Karteikarten bearbeiten
{/block}

{block name="text"}
    {if $alert}
        <div class="alert alert-danger">{$alert}</div>
        <script>$('.alert').fadeIn();</script>
    {/if}
{/block}

{block name="content"}
    <form action="index.php?page=edit" method="post" class="editwords">
        <input type="hidden" name="table" value="words" />
        <input type="hidden" name="func" value="save_edit" />

        <article id="onlytwoway" class="edit">
            <section class="wrapper">
                <p class="head">Deutsch</p>
            </section>
            <section class="wrapper">
                <p class="head">Türkisch</p>
            </section>
        </article>
        <article id="onlytwoway">
        {foreach from=$cards item=card name=card}
            <div class="wrapper">
                <div class="doublemargin"></div>
                <input type="text" name="word[{$card['word_id']}][word]" value="{$card['word']}" />
            </div>
            <div class="wrapper">
                <div class="doublemargin"></div>
                <input type="text" name="word[{$card['word_id']}][translation]" value="{$card['translation']}" />
                <input type="hidden" name="word[{$card['word_id']}][translation_id]" value="{$card['translation_id']}" />
            </div>
            <div class="wrapper input__additional input__synonyms">
                <span class="glyphicon glyphicon-link"></span>
                <input type="hidden" value="{$card['synonym_id']}"  name="word[{$card['word_id']}][synonym_id]">
                <input class="additional" placeholder="Synonym" type="text" name="word[{$card['word_id']}][synonym]" value="{$card['synonym']}" />
            </div>
            <div class="wrapper input__additional input__synonyms">
                <span class="glyphicon glyphicon-link"></span>
                <input type="hidden" value="{$card['synonym_translation_id']}"  name="word[{$card['word_id']}][synonym_translation_id]">
                <input class="additional" placeholder="Synonym" type="text" name="word[{$card['word_id']}][synonym_translation]" value="{$card['synonym_translation']}" />
            </div>
            <div class="wrapper input__additional input__antonyms">
                <span class="glyphicon glyphicon-flash"></span>
                <input type="hidden" value="{$card['antonym_id']}"  name="word[{$card['word_id']}][antonym_id]">
                <input class="additional" placeholder="Antonym" type="text" name="word[{$card['word_id']}][synonym]" value="{$card['antonym']}" />
            </div>
            <div class="wrapper input__additional input__antonyms">
                <span class="glyphicon glyphicon-flash"></span>
                <input type="hidden" value="{$card['antonym_translation_id']}"  name="word[{$card['word_id']}][antonym_translation_id]">
                <input class="additional" placeholder="Antonym" type="text" name="word[{$card['word_id']}][antonym_translation]" value="{$card['antonym_translation']}" />

            </div>

        {/foreach}
        </article>
        <article id="twoway">
            <section class="wrapper">
                <div class="doublemargin"></div>
                <!--<button class="btn btn-transparent" onclick="window.history.back();">Abbrechen</button>-->
            </section>
            <section class="wrapper">
                <div class="doublemargin"></div>
                <input type="submit" class="btn btn-transparent selected submit" value="Speichern" />
            </section>
        </article>
    </form>
    <ul class="search__list">TEST</ul>
{/block}

{block name="footer"}
    <ul>
        <li>
            <a class="toggle_synonyms">
                <span class="glyphicon glyphicon-link"></span>
                Synonyme ein/ausblenden
            </a>
        </li>
        <li>
            <a class="toggle_antonyms">
                <span class="glyphicon glyphicon-flash"></span>
                Antonym ein/ausblenden
            </a>
        </li>
    </ul>
    <script language="JavaScript">
        {literal}
            $('.toggle_synonyms').click(function(){
                $('.input__synonyms').fadeToggle();
            });

            $('.toggle_antonyms').click(function(){
                $('.input__antonyms').fadeToggle();
            });
        {/literal}
    </script>
{/block}