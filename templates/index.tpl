{extends file="_layout.tpl"}

{block name="content"}
    <section class="row languages">

        {foreach from=$language_pairs item=pair name=pair}
        <div class="col-sm-6 col-xs-12">
            <div>
                <a href="?page=levels&lang={$pair.language_id}" class="greybox text-center{*btn btn-transparent*}">
                    <img src="{$pair.language_flag}" />
                    {$pair.language}
                    &rsaquo;
                    <img src="{$pair.translation_flag}" />
                    {$pair.translation}
                </a>
            </div>
            <div class="margin"></div>{*{if !$smarty.foreach.language.last}<hr>{/if}</div>*}
        </div>
        {/foreach}


        <!--<section class="wrapper">
            <form action="index.php" method="get">
                <input type="hidden" name="page" value="edit" />
                <input type="hidden" name="table" value="languages" />
                <button class="btn btn-transparent" name="func" value="add">Sprache hinzufügen</button>
                <div class="margin"></div>
                <button class="btn btn-transparent" name="func" value="edit">Sprachen bearbeiten</button>
            </form>
            <div class="doublemargin"></div>
            <form action="index.php" method="get">
                <input type="hidden" name="page" value="edit" />
                <input type="hidden" name="table" value="words" />
                <button class="btn btn-transparent" name="func" value="add">Karteikarten hinzufügen</button>
                <div class="margin"></div>
                <button class="btn btn-transparent" name="func" value="edit">Karteikarten bearbeiten</button>
            </form>
        </section>-->
    </section>
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
            <a href="?page=edit&table=words&func=edit">
                <span class="glyphicon glyphicon-folder-open"></span>
                Karteikarten bearbeiten
            </a>
        </li>
        <li>
            <a href="?page=edit&table=words&func=add">
                <span class="glyphicon glyphicon-folder-open"></span>
                Neue Karteikarten
            </a>
        </li>
    </ul>
{/block}