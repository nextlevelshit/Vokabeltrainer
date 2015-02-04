{extends file="_layout.tpl"}

{block name="headline"}
    {*{$breadcrumb}*}
{/block}

{block name="text"}
    {if !count($data)}
        <p>In dieser Stufe sind keine Karteikarten mehr. Hier geht's zur nächst höheren Stufe: <a href="{$next_level_link}">Weiter &raquo;</a>
    {/if}
{/block}

{block name="text"}{/block}

{block name="content"}
    <section class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                {foreach from=$data item=item key=key}
                    {* TODO: Use Smarty first item instead key == 0 *}
                    {if $key == 0}
                        {assign var="class" value="active"}
                    {else}
                        {assign var="class" value="hidden"}
                    {/if}
                    <!--
                    <div id="puffer" class="fade">
                        <div class="spinner5"></div>
                    </div>
                    -->
                    <div class="flipper card {$class}" data-word-level="{$item.level}" data-word-id="{$item.word_id}" id="card_{$key}">
                        <div class="card__shadow"></div>
                        <div class="lined front">
                            <h3>{$item.word}</h3>
                            {if $item.synonym}
                                <p class="synonym">
                                    <span class="glyphicon glyphicon-link"></span>
                                    <!--<span>[syn.]</span>-->
                                    {$item.synonym}
                                </p>
                            {/if}
                            {if $item.antonym}
                                <p class="antonym">
                                    <span class="glyphicon glyphicon-flash"></span>
                                    <!--<span>[ant.]</span>-->
                                    {$item.antonym}
                                </p>
                            {/if}
                            <span class="glyphicon glyphicon-share-alt flip"></span>
                        </div>
                        <div class="lined back">
                            <h3>{$item.translation}</h3>
                            {if $item.synonym_translation}
                                <p class="synonym">
                                    <span class="glyphicon glyphicon-link"></span>
                                    <!--<span>[syn.]</span>-->
                                    {$item.synonym_translation}
                                </p>
                            {/if}
                            {if $item.bbantonym_translation}
                                <p class="antonym">
                                    <span class="glyphicon glyphicon-flash"></span>
                                    <!--<span>[ant.]</span>-->
                                    {$item.antonym_translation}
                                </p>
                            {/if}
                            <button type="button" id="correct" class="btn btn-transparent btn-lg next">
                                <span class="glyphicon glyphicon-ok-circle"></span>
                            </button>
                            <div class="margin"></div>
                            <button type="button" id="false" class="btn btn-transparent btn-lg next">
                                <span class="glyphicon glyphicon-remove-circle"></span>
                            </button>
                        </div>
                    </div>
                {/foreach}
                {assign var="last_card" value=$key+1}
                {*<div class="flipper card" id="card_{$last_card}" data-word-level="0" data-word-id="0">
                    <div class="front">
                        <h3>Herzlichen Glückwunsch!</h3>
                        <center>
                            <p>
                                <i>Du hast alle Karten gemeistert</i>
                            </p>
                            <p><a href="{$next_level_link}">Hier gelangst du zur nächsten Box</a></p>
                        </center>
                    </div>
                    <div class="back">
                        <h3>Herzlichen Glückwunsch!</h3>
                        <center>
                            <p>
                                <i>Du hast alle Karten gemeistert</i>
                            </p>
                            <p><a href="{$next_level_link}">Hier gelangst du zur nächsten Box</a></p>
                        </center>
                    </div>
                </div>*}
            </div>
            <div class="col-xs-12">
                <div id="stats" style="display: none;">
                    <h2 class="text-center result"></h2>
                    <div class="doublemargin"></div>
                    <div class="radial-progress">
                        <div class="circle">
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            <div class="mask half">
                                <div class="fill"></div>
                                <div class="fill fix"></div>
                            </div>
                            <div class="shadow"></div>
                        </div>
                        <div class="inset">
                            <div class="inset__percent">test</div>
                        </div>
                    </div>
                    <div class="doublemargin"></div>
                    <p class="text-center">
                        Du hast <strong class="correct">0</strong> von <strong class="sum">0</strong> Karten richtig beantwortet.
                    </p>
                </div>

            </div>
            <div id="options">
                <div class="doublemargin"></div>
                <div class="text-center"><span id="stats_current">1</span> von <span id="stats_total">{$cards_num}</span></div>
                <div class="doublemargin"></div>
                <button id="abort" class="btn btn-transparent" >Abbrechen</button>
            </div>
        </div>
    </section>
    <script language="JavaScript">
        stats_total = {$cards_num};
    </script>
{/block}

{block name="footer"}
{/block}