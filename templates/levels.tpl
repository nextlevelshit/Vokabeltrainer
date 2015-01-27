{extends file="_layout.tpl"}

{block name="headline"}
    <a href="?page=languages">&laquo; Zurück zur Sprachwahl</a>
{/block}

{block name="text"}
    Bitte wähle eine Stufe, die du gerne üben möchtest.
{/block}

{block name="content"}
    <section class="row levels">
        <div class="col-sm-6">
            <ul class="levels__list">
            {foreach from=$boxes item=box}
                <li>
                    <a href="{$box.link}">
                        {$box.text}
                        <span class="pull-right">{$box.num}</span>
                    </a>
                </li>
            {/foreach}
            </ul>
        </div>
        <div class="col-sm-6">
            <button class="btn btn-transparent">Neue Karteikarten hinzufügen</button>
            <div class="margin"></div>
            <button class="btn btn-transparent">Karteikarten bearbeiten</button>
        </div>
    </section>
{/block}