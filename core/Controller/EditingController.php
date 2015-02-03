<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 01.02.15
 * Time: 15:48
 */

//

class EditingController extends ApplicationController {

    protected $currentController = "editing";
    protected $breadcrumb = "Bearbeiten &raquo; Optionen";

    function DisplayBoxesByLanguage ($languagePairId, $languageId) {
        $this->SetBreadcrumb("<a href=\"?page=editing\">Bearbeiten</a> &raquo; Karteikästen");

        $this->Display("templates/common/BoxesView.php");
    }

    function DisplayCards($languagePairId, $languageId, $boxId, $level) {
        return;
    }

    function DisplayLanguagePairs () {
        $this->view->assign("languagePairs", $this->GetLanguagePairs());
        $this->SetHeadline("Bearbeiten");
        $this->Display("templates/editing/LanguagePairsView.php");
    }

    function DisplayCardsToAdd() {
        $this->SetHeadline("Neue Karteikarten hinzufügen");
        $this->Display("templates//LanguagePairsView.php");
    }

}

$Controller = new EditingController();

if(_TARGET) {
    if(_TARGET == "cards") {
        if (_ACTION == "edit") {

        } elseif (_ACTION == "save") {

        }
//        $Controller->DisplayCards(_LANGUAGE_PAIR, _LANGUAGE, _BOX, _LEVEL);
    } elseif (_TARGET == "boxes") {
//        $Controller->DisplayBoxesByLanguage(_LANGUAGE_PAIR, _LANGUAGE);
    }
} else {
    $Controller->DisplayLanguagePairs();
}


