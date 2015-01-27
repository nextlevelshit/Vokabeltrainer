<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 29.10.14
 * Time: 00:45
 */

$sql = new sql();
$nav = "<ul><li><a href=\"#\">Sprachen</a><ul>";

$sql->query("SELECT * FROM `languages` ORDER BY `language`");

foreach ($sql->data as $lang) {

   // $a =  $lang['language_id'];
   // $nav[$a] = $lang['language'];

    $id =  $lang['language_id'];
    $language = $lang['language'];

    $nav .= "<li><a href=\"?lang=$id\">$language</a></li>";

}

$nav .= "</ul></li></ul>";

//echo "<pre>$nav</pre>";

unset($sql);
?>