<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 30.10.14
 * Time: 19:35
 */

$sql = new sql();

$boxes = array();
$language_id = _LANGUAGE;
$language_pair_id = _LANGUAGE_PAIR;
$level = _LEVEL;
$levels = CONF_LEVELS;

for($i=0; $levels >= $i; $i++)
{
    $text = "";
    $boxes[$i]['link'] = "?page=cards&lang=$language_id&level=$i";

    switch ($i)
    {
        case 0:
            $text = "Alles auf Anfang";

        case $levels:
            $text = "Langzeitgedächtnis";

        default:
            $text = $i . "x gelernt";
    }
    $boxes[$i]['text'] = $text;

    /* Karteikarten in der Sprache in der Stufe zählen */
    $boxes[$i]['num'] = $sql->get("NumberOfWords", "SELECT COUNT(`word`) AS `NumberOfWords` FROM `words` WHERE `language`=$language_id AND `level`=$i");
}





$smarty->assign("boxes", $boxes);