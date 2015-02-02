{extends file="_layout.tpl"}

{block name="headline"}
    {$breadcrumb}
{/block}

{block name="text"}
    <h3>{$headline}</h3>

{/block}

{block name="content"}
    <section class="languages">
        <div class="row">
            <div class="col-md-6">
                <div class="panel-group greybox" id="" role="tablist" aria-multiselectable="true">
                    {*
                     *
                     * Boxes
                     *
                     *}
                    {foreach from=$boxes key=i item=box name=box}
                        {assign var="isFirst" value=false}
                        {if $smarty.foreach.box.first}
                            {assign var="isFirst" value=true}
                        {/if}
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading_pair_{$i}">
                                <a data-toggle="collapse" data-parent="#accordion_boxes" href="#collapse_pair_{$i}" aria-expanded="{if $isFirst}true{else}false{/if}" aria-controls="collapse_pair_{$i}">
                                    {$box.name}
                                </a>
                            </div>
                        </div>
                    {/foreach}
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel-group greybox" id="accordion_boxes" role="tablist" aria-multiselectable="true">
                {foreach from=$boxes key=i item=box name=box}
                    {assign var="isFirst" value=false}
                    {if $smarty.foreach.box.first}
                        {assign var="isFirst" value=true}
                    {/if}
                    <div class="panel panel-default">
                        <div id="collapse_pair_{$i}" class="panel-collapse collapse {if $isFirst}in{/if}" role="tabpanel" aria-labelledby="heading_pair_{$i}">
                            <div class="panel-body list-group">
                                <div class="panel-group levels" id="accordion_boxes" role="tablist" aria-multiselectable="true">
                                    {*<h3>{$box.name}</h3>*}
                                    <ul class="levels__list">
                                    {foreach from=$box.levels item=level}
                                        <li>
                                            <a href="{$level.link}">
                                                {$level.text}
                                                <span class="pull-right">{$level.num}</span>
                                            </a>
                                        </li>
                                    {/foreach}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                {/foreach}
                </div>
            </div>
        </div>
    </section>
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
                Neuen Karteikasten hinzufügen
            </a>
        </li>
    </ul>
{/block}