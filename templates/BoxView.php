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
                                                            <a href="#" class="greybox text-small">
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
                $('[data-draggable]').sortable();

                $(document).mousedown(function(){
                    console.log("mousedown");
                    $('[aria-controls]').mouseover(function() {
                        console.log("mousehover " + $(this).attr('aria-controls'));
                        $('#' + $(this).attr('aria-controls')).collapse('show');
                    });
                });


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