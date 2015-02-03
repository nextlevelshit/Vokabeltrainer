{extends file="_layout.tpl"}

{block name="headline"}
    {$breadcrumb}
{/block}

{block name="text"}{/block}

{block name="content"}
    <section class="row languages">
        {foreach from=$languagePairs item=pair name=pair}
            <div class="col-sm-6 col-xs-12" >
                <div class="greybox" data-match-height>
                    <div class="row">
                        <div class="col-xs-6 text-right greybox__title">
                            {$pair.language}
                            <img src="{$pair.language_flag}" />
                        </div>
                        <div class="col-xs-6 greybox__title">
                            <img src="{$pair.translation_flag}" />
                            {$pair.translation_language}
                        </div>
                        <hr>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-xs-12 levels">
                            <ul class="">
                                <li><a href="?page={$currentController}&target=languages&action=edit&languagePair={$pair.language_pair_id}"><span class="glyphicon glyphicon-globe"></span>&nbsp;Sprachpaar bearbeiten</a></li>
                                <li><a href="?page={$currentController}&target=boxes&action=edit&languagePair={$pair.language_pair_id}"><span class="glyphicon glyphicon-inbox"></span> Karteikästen bearbeiten</a></li>
                                <li><a href="?page=adding&target=boxes&action=add&languagePair={$pair.language_pair_id}"><span class="glyphicon glyphicon-inbox"></span> Karteikasten hinzufügen</a></li>
                                <li><a href="?page={$currentController}&target=cards&action=edit&languagePair={$pair.language_pair_id}"><span class="glyphicon glyphicon-pencil"></span> Karteikarten bearbeiten</a></li>
                                <li><a href="?page=adding&target=cards&action=add&languagePair={$pair.language_pair_id}"><span class="glyphicon glyphicon-pencil"></span> Karteikarten hinzufügen</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="margin"></div>
            </div>
        {/foreach}
            <div class="col-sm-6 col-xs-12">
                <div class="greybox" data-match-height>
                    <a href="?page={$currentController}&target=languages&action=add">
                        <h3 class="text-center"><span class="glyphicon glyphicon-plus-sign"></span> Sprachpaar hinzufügen</h3>
                    </a>
                </div>
            </div>
    </section>
    {literal}
        <script>
            $(function() {
                $('[data-match-height]').matchHeight();
            });
        </script>
    {/literal}
{/block}

{block name='footer'}
{/block}