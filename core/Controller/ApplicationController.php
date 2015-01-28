<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 27.01.15
 * Time: 16:48
 */


class ApplicationController {
//    protected $sql = new sql();

    public function GetLanguagePairs() {
        $sql = new sql();
        $sql->query("SELECT lp.`language_pair_id`, concat(lp.`language_id_1`) as 'language_id', l.`language`, concat(l.`flag`) as 'language_flag', concat(t.`language`) as 'translation_language', concat(t.`flag`) as 'translation_flag' FROM `language_pairs` lp LEFT JOIN `languages` l ON ( lp.`language_id_1` = l.`language_id` ) LEFT JOIN `languages` t ON ( lp.`language_id_2` = t.`language_id` )");
        return $sql->data;
    }

    public function GetLanguagePairById() {
        $sql = new sql();
//        $sql->query("SELECT lp.`language_pair_id`, concat(lp.`language_id_1`) as 'language_id', l.`language`, concat(l.`flag`) as 'language_flag', concat(t.`language`) as 'translation_language', concat(t.`flag`) as 'translation_flag' FROM `language_pairs` lp LEFT JOIN `languages` l ON ( lp.`language_id_1` = l.`language_id` ) LEFT JOIN `languages` t ON ( lp.`language_id_2` = t.`language_id` )");
        return $sql->data;
    }
}