{extends file="_layout.tpl"}


{block name="text"}
    {if $alert}
        <div class="alert alert-danger">{$alert}</div>
        <script>$('.alert').fadeIn();</script>
    {/if}
{/block}

{block name="content"}
    <form action="index.php?page=edit&table=words&func=save_add" method="post" class="addwords">
        <input type="hidden" name="table" value="words" />
        <input type="hidden" name="func" value="save_add" />

        <section class="row edit">
            <div class="col-sm-6">
                <select name="language_word" id="language_word">
                    <option value="0">Bitte wählen...</option>
                    {foreach from=$languages item=language}
                        <option value="{$language.id}">
                            {$language.name}
                        </option>
                    {/foreach}
                </select>
            </div>
            <div class="col-sm-6">
                <select name="language_translation" id="language_translation">
                    <option value="0">Bitte wählen...</option>
                    {foreach from=$languages item=language}
                        <option value="{$language.id}">
                            {$language.name}
                        </option>
                    {/foreach}
                </select>
            </div>
        </section>
        <div class="doublemargin"></div>

        {for $i=0 to 20}
        <section class="row">
            <div class="col-sm-6">
                <input type="text" name="word[{$i}]" value="{$words.$i}" />
            </div>
            <div class="col-sm-6">
                <input type="text" name="translation[{$i}]" value="{$translations.$i}" />
            </div>
        </section>
        <div class="doublemargin"></div>
        {/for}
        <section class="row">
            <div class="col-sm-6">
                <div class="doublemargin"></div>
                <!--<button class="btn btn-transparent" onclick="window.history.back();">Abbrechen</button>-->
            </div>
            <div class="col-sm-6">
                <div class="doublemargin"></div>
                <input type="submit" class="btn btn-transparent selected submit" value="Speichern" />
            </div>
        </section>
    </form>
{/block}