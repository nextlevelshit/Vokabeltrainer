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
//    protected $template;

    public function __construct () {
        $this->view = new Smarty;
        $this->sql = new sql();
    }

    public function Display ($template) {
        $this->view->assign("breadcrumb", $this->breadcrumb);
        $this->view->assign("currentController", $this->currentController);
        $this->view->display($template);
    }

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

    public function SetBreadcrumb ($breadcrumb) {
        $this->breadcrumb = $breadcrumb;
    }

    function DisplayLanguages () {
        $this->view->assign("languagePairs", $this->GetLanguages());
        $this->Display("templates/common/LanguagesView.php");
    }

    function DisplayLanguagePairs () {
        $this->view->assign("languagePairs", $this->GetLanguagePairs());
        $this->Display("templates/common/LanguagePairsView.php");
    }

}