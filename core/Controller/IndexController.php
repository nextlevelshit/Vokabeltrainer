<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 30.10.14
 * Time: 19:35
 */

$sql = new sql();

$languages = array();

//$sql->query("SELECT * FROM `languages` ORDER BY `language`");
$sql->query("
SELECT
	lp.`language_pair_id`,
    concat(lp.`language_id_1`) as 'language_id',
    l.`language`,
    concat(l.`flag`) as 'language_flag',
    concat(t.`language`) as 'translation_language',
    concat(t.`flag`) as 'translation_flag'
FROM `language_pairs` lp
    LEFT JOIN `languages` l
    	ON ( lp.`language_id_1` = l.`language_id` )
    LEFT JOIN `languages` t
    	ON ( lp.`language_id_2` = t.`language_id` )
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