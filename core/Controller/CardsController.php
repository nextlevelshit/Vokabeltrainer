<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 30.10.14
 * Time: 19:35
 */

$sql = new sql();

$box = _BOX;
$level = _LEVEL;
$lang = _LANGUAGE;

$sql->query("SELECT w.`word_id`, w.`word`, w.`level`, w.`box`, Concat (t.`word`) AS 'translation', Concat(s.`word`) AS 'synonym', Concat(s_t.`word`) AS 'synonym_translation', Concat(a.`word`) AS 'antonym', Concat(a_t.`word`) AS 'antonym_translation' FROM `words` w INNER JOIN `words` t ON ( w.`translation` = t.`word_id` ) LEFT JOIN `words` s ON ( w.`synonym` = s.`word_id` ) LEFT JOIN `words` s_t ON ( s.`translation` = s_t.`word_id` ) LEFT JOIN `words` a ON ( w.`antonym` = a.`word_id` ) LEFT JOIN `words` a_t ON ( a.`translation` = a_t.`word_id` ) WHERE w.`language` = $lang AND w.`box` = $box AND w.`level` = $level ORDER BY Rand()");

$words_data = $sql->data;
//$cards_data = [];
$i = 0;

foreach($words_data as $key => $value) {
    $word = $value['word'];
    //$translation_id = $value['translation'];

    //$sql -> query("SELECT `word` FROM `words` WHERE `word_id` = $translation_id");

    //$translation = $sql->data[0]['word'];

    $cards_data[$i]['front']    = $word;
    $cards_data[$i]['word_id']  = $value['word_id'];
    $cards_data[$i]['back']     = $value['translation'];
    $cards_data[$i]['level']    = $value['level'];
    $cards_data[$i]['antonym']  = $value['antonym_translation'];
    $cards_data[$i]['synonym']  = $value['synonym_translation'];

    $i++;
}

/* Generiere Link zur nächsten Stufe, falls die Stufe leer ist  */
$next_level = $level + 1;
$smarty->assign('next_level_link', "?page=cards&lang=$lang&level=$next_level");


/* Generiere Überschrift/Breadcrumb */
$language_name = $sql->get("language", "SELECT `language` FROM `languages` WHERE `language_id` = $lang");
$smarty->assign('language_id', $lang);
$smarty->assign('language_name', $language_name);
$smarty->assign('level', $level);

$smarty->assign('data', $cards_data);
$smarty->assign('cards_num', count($cards_data));
