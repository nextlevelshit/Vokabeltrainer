<?php
/**
 * Vokabeltrainer v0.1
 * User: nextlevelshit
 * Date: 28.01.15
 * Time: 19:52
 */

$sql = new sql();

$languages = array();

$sql->query("
SELECT
	lp.`language_pair_id`,
	concat(l.`language_id`) as 'language_id',
    l.`language`,
    concat(l.`flag`) as 'language_flag',
    concat(t.`language`) as 'translation_language',
    concat(t.`language_id`) as 'translation_id',
    concat(t.`flag`) as 'translation_flag'
FROM `language_pairs` lp
    LEFT JOIN `languages` l
    	ON ( lp.`language_id_1` = l.`language_id` OR lp.`language_id_2` = l.`language_id` )
    LEFT JOIN `languages` t
    	ON ( lp.`language_id_2` = t.`language_id` OR lp.`language_id_1` = t.`language_id` )
WHERE l.`language_id` != t.`language_id`
");
$i = 0;

foreach($sql->data as $key => $value)
{
    $language_pairs[$i]['language_pair_id'] = $value['language_pair_id'];
    $language_pairs[$i]['language_id'] = $value['language_id'];
    $language_pairs[$i]['language'] = $value['language'];
    $language_pairs[$i]['language_flag'] = $value['language_flag'];
    $language_pairs[$i]['translation'] = $value['translation_language'];
    $language_pairs[$i]['translation_flag'] = $value['translation_flag'];
    $i++;
}

$smarty->assign("language_pairs", $language_pairs);




//$smarty->assign("boxes", $boxes);