<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 27.01.15
 * Time: 16:48
 */


class ApplicationController {
//    protected $sql = new sql();

    public $view;
    public $sql;
    protected $breadcrumb;
    protected $currentController;
    protected $headline;
//    protected $template;

    public function __construct () {
        $this->view = new Smarty;
        $this->sql = new sql();
    }

    /*
     *
     * GET
     *
     */

    public function GetLanguagePairs () {
        $this->sql->query("SELECT lp.`language_pair_id`, concat(lp.`language_id_1`) as 'language_id', l.`language`, concat(l.`flag`) as 'language_flag', concat(t.`language`) as 'translation_language', concat(t.`flag`) as 'translation_flag' FROM `language_pairs` lp LEFT JOIN `languages` l ON ( lp.`language_id_1` = l.`language_id` ) LEFT JOIN `languages` t ON ( lp.`language_id_2` = t.`language_id` )");
        return $this->sql->data;
    }

    public function GetLanguagePairById () {
        $this->sql->query("SELECT lp.`language_pair_id`, concat(lp.`language_id_1`) as 'language_id', l.`language`, concat(l.`flag`) as 'language_flag', concat(t.`language`) as 'translation_language', concat(t.`flag`) as 'translation_flag' FROM `language_pairs` lp LEFT JOIN `languages` l ON ( lp.`language_id_1` = l.`language_id` ) LEFT JOIN `languages` t ON ( lp.`language_id_2` = t.`language_id` )");
        return $this->sql->data;
    }

    public function GetLanguages () {
        $this->sql->query("SELECT lp.`language_pair_id`, concat(l.`language_id`) as 'language_id', l.`language`, concat(l.`flag`) as 'language_flag', concat(t.`language`) as 'translation_language', concat(t.`language_id`) as 'translation_id', concat(t.`flag`) as 'translation_flag' FROM `language_pairs` lp LEFT JOIN `languages` l ON ( lp.`language_id_1` = l.`language_id` OR lp.`language_id_2` = l.`language_id` ) LEFT JOIN `languages` t ON ( lp.`language_id_2` = t.`language_id` OR lp.`language_id_1` = t.`language_id` ) WHERE l.`language_id` != t.`language_id`");
        return $this->sql->data;
    }

    public function GetBoxesByLanguagePair ($languagePairId) {
        $this->sql->query("SELECT b.`box_id`, b.`name`, b.`language_pair_id` FROM `boxes` b INNER JOIN `language_pairs` lp ON (b.`language_pair_id` = lp.`language_pair_id`) WHERE lp.`language_pair_id` = '$languagePairId'");
        return $this->sql->data;
    }

    /*
     *
     * SET
     *
     */

    public function SetBreadcrumb ($breadcrumb) {
        $this->breadcrumb = $breadcrumb;
    }

    public function SetHeadline ($headline) {
        $this->headline = $headline;
    }

    /*
     *
     * DISPLAY
     *
     */

    public function Display ($template) {
        $this->view->assign("breadcrumb", $this->breadcrumb);
        $this->view->assign("headline", $this->headline);
        $this->view->assign("currentController", $this->currentController);
        $this->view->display($template);
    }

    function DisplayLanguages () {
        $this->view->assign("languagePairs", $this->GetLanguages());
        $this->Display("templates/common/LanguagesView.php");
    }

    function DisplayLanguagePairs () {
        $this->view->assign("languagePairs", $this->GetLanguagePairs());
        $this->Display("templates/common/LanguagePairsView.php");
    }

    /*
     *
     * MAKE
     *
     */

    public function MakeHeadlineByLanguagePair($languagePairId, $languageId) {
        $this->sql->query("SELECT lp.`language_pair_id`, CONCAT (l.`language_id`) AS `language_id`, CONCAT (l.`language`) AS `language_name`, CONCAT (l.`flag`) AS `language_flag`, CONCAT (t.`language_id`) AS `translation_id`, CONCAT (t.`language`) AS `translation_name`, CONCAT (t.`flag`) AS `translation_flag` FROM `language_pairs` lp LEFT JOIN `languages` l ON (l.`language_id` = '$languageId') LEFT JOIN `languages` t ON (lp.`language_id_1` = t.`language_id` AND t.language_id != '$languageId' OR lp.`language_id_2` = t.`language_id` AND t.language_id != '$languageId') WHERE lp.`language_pair_id` = '$languagePairId'");
        $languagePair = $this->sql->data;
        $languageName = $languagePair[0]['language_name'];
        $languageFlag = $languagePair[0]['language_flag'];
        $translationName = $languagePair[0]['translation_name'];
        $translationFlag = $languagePair[0]['translation_flag'];

        return "<img src=\"$languageFlag\"> $languageName / $translationName <img src=\"$translationFlag\">";
    }
}