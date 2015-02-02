<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 01.02.15
 * Time: 15:48
 */

//

class LearningController extends ApplicationController {

//    public static $test = "hallo";
    protected $currentController = "learning";
    protected $breadcrumb = "Lernen &raquo; Sprachwahl";
    protected $test = 0;
//    protected $templatePath = "templates/LearningView.php";

    /*function DisplayLearningCards () {
        $this->view->display("templates/LearningView.php");
    }*/

    function DisplayBoxesByLanguage ($languagePairId, $languageId) {

        /* Setting up Boxes and adding unsorted Box (id = 0)*/
        $boxes = $this->GetBoxesByLanguagePair($languagePairId);
        $box_unsorted = array("name" => "Unsortiert", "box_id" => 0);
        array_unshift($boxes, $box_unsorted);

        foreach ($boxes as $key => $box) {
            for ($i=0; CONF_LEVELS >= $i; $i++) {
                $boxId = $box['box_id'];
                $levels[$i]['link'] = "?page=cards&languagePair=$languagePairId&lang=$languageId&box=$boxId&level=$i";

                switch ($i) {
                    case 0:
                        $text = "Alles auf Anfang";
                        break;
                    case CONF_LEVELS:
                        $text = "Langzeitgedächtnis";
                        break;
                    default:
                        $text = $i . "x wiederholt";
                }
                $levels[$i]['text'] = $text;

                /* Karteikarten in der Sprache in der Stufe zählen */
                $levels[$i]['num'] = $this->sql->get("NumberOfCards", "SELECT COUNT(`word`) AS `NumberOfCards` FROM `words` WHERE `language`=$languageId AND `level`=$i AND `box` = '$boxId'");
            }

            $boxes[$key]['levels'] = $levels;
        }

        /* Adding elements to View */
        $this->view->assign("boxes", $boxes);
        $this->SetHeadline($this->MakeHeadlineByLanguagePair($languagePairId, $languageId));
        $this->Display("templates/common/BoxesView.php");
    }

    function DisplayCards($languagePairId, $languageId, $boxId, $level) {
        return;
    }

}

$Controller = new LearningController();

if(_LANGUAGE) {
    if(_BOX AND _LEVEL) {
        $Controller->DisplayCards(_LANGUAGE_PAIR, _LANGUAGE, _BOX, _LEVEL);
    } else {
        $Controller->DisplayBoxesByLanguage(_LANGUAGE_PAIR, _LANGUAGE);
    }
} else {
    $Controller->SetHeadline("Leck die Wurst");
    $Controller->DisplayLanguages();
}


