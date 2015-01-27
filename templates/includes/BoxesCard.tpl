{extends file="../cards.tpl"}

{block name="cards"}
    {*{$data|var_dump}*}
    {foreach from=$data item=item key=key}
        {if $key == 0}
            {assign var="class" value="active"}
        {else}
            {assign var="class" value=""}
        {/if}

        <div class="flipper card {$class}" data-word-level="{$item.level}" data-word-id="{$item.word_id}" id="card_{$key}">
            <div class="front">
                <h3>{$item.front}</h3>
                <p>test</p>
            </div>
            <div class="back">
                <h3>{$item.back}</h3>
                <p>test</p>
                <button type="button" id="correct" class="btn btn-transparent btn-lg next">
                    <span class="glyphicon glyphicon-ok-sign"></span>
                </button>
                <div class="margin"></div>
                <button type="button" id="false" class="btn btn-transparent btn-lg next">
                    <span class="glyphicon glyphicon-remove-sign"></span>
                </button>
            </div>
        </div>

    {/foreach}
{/block}