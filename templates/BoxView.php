{extends file="_layout.tpl"}

{block name="content"}
    <section class="languages">
        <div class="panel-group greybox" id="accordion" role="tablist" aria-multiselectable="true">
            {foreach from=$language_pairs key=i item=pair name=pair}
                {assign var="isFirst" value=""}
                {if $smarty.foreach.pair.first}
                    {assign var="isFirst" value="in"}
                {/if}

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading_{$i}">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_{$i}" aria-expanded="true" aria-controls="collapse_{$i}">

                        <div class="row">
                            <div class="col-xs-6 text-right">
                                {$pair.language}
                                <img src="{$pair.language_flag}" />
                            </div>
                            <div class="col-xs-6">
                                <img src="{$pair.translation_flag}" />
                                {$pair.translation}
                            </div>
                        </div>
                        </a>
                    </div>
                    <div id="collapse_{$i}" class="panel-collapse collapse {$isFirst}" role="tabpanel" aria-labelledby="heading_{$i}">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
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