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

                //$levels[$i]['link'] = "?page=cards&languagePair=$languagePairId&lang=$languageId&box=$boxId&level=$i";

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
                $boxId = $box['box_id'];
                $levels[$i]['num'] = $this->sql->get("NumberOfCards", "SELECT COUNT(`word`) AS `NumberOfCards` FROM `words` WHERE `language`=$languageId AND `level`=$i AND `box` = '$boxId'");
            }

            $boxes[$key]['levels'] = $levels;
        }

        /* Adding elements to View */
        $this->view->assign("boxes", $boxes);
        $this->view->assign("languageId", $languageId);
        $this->view->assign("languagePairId", $languagePairId);
        $this->SetBreadcrumb("Lernen &raquo; " . $this->MakeHeadlineByLanguagePair($languagePairId, $languageId));
        $this->Display("templates/learning/BoxesView.php");
    }

    function DisplayCards($languagePairId, $languageId, $boxId, $level) {

        $this->sql->query("SELECT w.`word_id`, w.`word`, w.`level`, w.`box`, Concat (t.`word`) AS 'translation', Concat(s.`word`) AS 'synonym', Concat(s_t.`word`) AS 'synonym_translation', Concat(a.`word`) AS 'antonym', Concat(a_t.`word`) AS 'antonym_translation' FROM `words` w INNER JOIN `words` t ON ( w.`translation` = t.`word_id` ) LEFT JOIN `words` s ON ( w.`synonym` = s.`word_id` ) LEFT JOIN `words` s_t ON ( s.`translation` = s_t.`word_id` ) LEFT JOIN `words` a ON ( w.`antonym` = a.`word_id` ) LEFT JOIN `words` a_t ON ( a.`translation` = a_t.`word_id` ) WHERE w.`language` = $languageId AND w.`box` = '$boxId' AND w.`level` = '$level' ORDER BY Rand()");
        $words_data = $this->sql->data;

        /* Generiere Link zur nächsten Stufe, falls die Stufe leer ist  */
        /*$next_level = $level + 1;
        $this->view->assign('next_level_link', "?page=cards&lang=$lang&level=$next_level");*/

        /* Generiere Überschrift/Breadcrumb */
        /*$language_name = $this->sql->get("language", "SELECT `language` FROM `languages` WHERE `language_id` = $lang");
        $this->view->assign('language_id', $lang);
        $this->view->assign('language_name', $language_name);
        $this->view->assign('level', $level);*/

        $this->view->assign('data', $words_data);
        $this->view->assign('cards_num', count($words_data));

        $this->SetBreadcrumb("Lernen &raquo; " . $this->MakeHeadlineByLanguagePair($languagePairId, $languageId) . " &raquo; " . $this->GetBoxNameById($boxId));
        $this->Display("templates/learning/CardsView.php");
    }

    function DisplayLanguages () {
        $this->view->assign("languagePairs", $this->GetLanguages());
        $this->Display("templates/learning/LanguagesView.php");
    }

}

$Controller = new LearningController();

if(_LANGUAGE) {
    if(_ACTION == "show") {
        $Controller->DisplayCards(_LANGUAGE_PAIR, _LANGUAGE, _BOX, _LEVEL);
    } else {
        $Controller->DisplayBoxesByLanguage(_LANGUAGE_PAIR, _LANGUAGE);
    }
} else {
    $Controller->SetHeadline("Leck die Wurst");
    $Controller->DisplayLanguages();
}

