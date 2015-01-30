<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 30.10.14
 * Time: 19:35
 */

$language_pairs = array();
$boxes = array();
$words = array();

$sql = new sql();

/*
 * Fetching data from database
 */
$sql->query("SELECT lp.`language_pair_id`, concat(lp.`language_id_1`) as 'language_id', l.`language`, concat(l.`flag`) as 'language_flag', concat(t.`language`) as 'translation_language', concat(t.`flag`) as 'translation_flag' FROM `language_pairs` lp LEFT JOIN `languages` l ON ( lp.`language_id_1` = l.`language_id` ) LEFT JOIN `languages` t ON ( lp.`language_id_2` = t.`language_id` )");
$language_pairs = $sql->data;

$sql->query("SELECT b.`box_id`, b.`name`, b.`language_pair_id` FROM `boxes` b INNER JOIN `language_pairs` lp ON (b.`language_pair_id` = lp.`language_pair_id`)");
$boxes = $sql->data;

$sql->query("SELECT w.`box`, w.`word_id`, w.`word`, Concat (t.`word_id`) AS 'translation_id', Concat (t.`word`) AS 'translation' FROM `words` w INNER JOIN `words` t ON ( w.`translation` = t.`word_id` ) ORDER BY w.`word` ASC");
$words = $sql->data;

/*
 * Add box with uncategorized cards
 */
//
/*$boxes[-1]['box_id'] = 0;
$boxes[-1]['name'] = "Unsortiert";*/
$box_unsorted = array("name" => "Unsortiert", "box_id" => 0);
array_push($boxes, $box_unsorted);
/*
 * Assign Data to Presentation Layer
 */
$smarty->assign("language_pairs", $language_pairs);
$smarty->assign("boxes", $boxes);
$smarty->assign("words", $words);