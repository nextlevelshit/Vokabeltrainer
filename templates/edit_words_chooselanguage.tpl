{extends file="_layout.tpl"}

{block name="headline"}
    Karteikarten bearbeitern &raquo; Sprachwahl
{/block}

{block name="text"}
    Wähle eine Sprache aus, in der du die Karteikarten bearbeiten möchtest
{/block}

{block name="content"}
    <article id="twoway" class="languages">
        {foreach from=$language_pairs item=pair name=pair}
            <section class="wrapper">
                <div>
                    <a href="?page=edit&table=words&func=edit&language_pair={$pair.language_pair_id}" class="btn btn-transparent">
                        <img src="{$pair.language_flag}" />
                        {$pair.language}
                        &rsaquo;
                        <img src="{$pair.translation_flag}" />
                        {$pair.translation}
                    </a>
                </div>
                <div class="margin"></div>{*{if !$smarty.foreach.language.last}<hr>{/if}</div>*}
            </section>
        {/foreach}
        {*<section class="wrapper wrapper-box">
        {foreach from=$languages item=language name=language}
            <div>
            <a href="?page=edit&table=words&func=edit&lang={$language.id}">
                <img src="{$language.flag}" />
                {$language.name}
            </a>
            </div>
            <div class="margin">{if !$smarty.foreach.language.last}<hr>{/if}</div>
        {/foreach}
        </section>*}

        <!--<section class="wrapper">
            <form action="index.php" method="get">
                <input type="hidden" name="page" value="edit" />
                <input type="hidden" name="table" value="languages" />
                <button class="btn btn-transparent" name="func" value="add">Sprache hinzufügen</button>
                <div class="margin"></div>
                <button class="btn btn-transparent" name="func" value="edit">Sprachen bearbeiten</button>
            </form>
        </section>-->
    </article>
{/block}

{block name='footer'}
    <ul>
        <li>
            <a href="#">
                <span class="glyphicon glyphicon-globe"></span>
                Sprachen bearbeiten
            </a>
        </li>
        <li>
            <a href="">
                <span class="glyphicon glyphicon-globe"></span>
                Neue Sprache
            </a>
        </li>
        <li>
            <a href="#">
                <span class="glyphicon glyphicon-inbox"></span>
                Karteikästen bearbeiten
            </a>
        </li>
        <li>
            <a href="#">
                <span class="glyphicon glyphicon-inbox"></span>
                Neuer Karteikasten
            </a>
        </li>
    </ul>
{/block}