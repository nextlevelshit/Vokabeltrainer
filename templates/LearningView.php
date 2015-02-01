{extends file="_layout.tpl"}

{block name="headline"}
    Startbildschirm
{/block}

{block name="text"}{/block}

{block name="content"}
    <section class="row">
        <div class="col-sm-4 col-xs-12">
            <a href="?page=learning" class="greybox" data-match-height>
                <div class="row">
                    <div class="col-xs-3">
                        <h1 class="text-center">
                            <span class="glyphicon glyphicon-inbox"></span>
                        </h1>
                    </div>
                    <div class="col-xs-9">
                        <h3>Lernen</h3>
                        <p>
                            Wähle im Anschluss eine Sprache und entscheide selbst welche Lektion du heute gerne wiederholen möchtest.
                        </p>
                    </div>
                </div>
            </a>
            <div class="margin"></div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <a href="?page=editing" class="greybox" data-match-height>
                <div class="row">
                    <div class="col-xs-3">
                        <h1 class="text-center">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </h1>
                    </div>
                    <div class="col-xs-9">
                        <h3>Bearbeiten</h3>
                        <p>
                            Bearbeite deine vorhanden Vokabelkarten, Karteikästen und Sprachen.
                        </p>
                    </div>
                </div>
            </a>
            <div class="margin"></div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <a href="?page=adding" class="greybox" data-match-height>
                <div class="row">
                    <div class="col-xs-3">
                        <h1 class="text-center">
                            <span class="glyphicon glyphicon-plus-sign"></span>
                        </h1>
                    </div>
                    <div class="col-xs-9">
                        <h3>Hinzufügen</h3>
                        <p>
                            Füge neue Vokabelkarten, Karteikästen oder Sprachen hinzu.
                        </p>
                    </div>
                </div>
            </a>
            <div class="margin"></div>
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