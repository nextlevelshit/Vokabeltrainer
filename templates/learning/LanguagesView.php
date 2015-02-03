{extends file="_layout.tpl"}

{block name="headline"}
    {$breadcrumb}
{/block}

{block name="text"}{/block}

{block name="content"}
    <section class="row languages">
        {foreach from=$languagePairs item=pair name=pair}
            <div class="col-sm-6 col-xs-12">
                <a href="?page={$currentController}&languagePair={$pair.language_pair_id}&lang={$pair.language_id}" class="greybox {*btn btn-transparent*}">
                    <div class="row">
                        <div class="col-xs-6 text-right">
                            {$pair.language}
                            <img src="{$pair.language_flag}" />
                        </div>
                        <div class="col-xs-6">
                            <img src="{$pair.translation_flag}" />
                            {$pair.translation_language}
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-xs-12">
                            <span class="text-small text-secondary">Karteikarten: 60 </span>
                            <span class="text-small text-secondary pull-right">zuletzt gelernt am 20.10.2014</span>
                        </div>
                    </div>
                </a>
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
{/block}