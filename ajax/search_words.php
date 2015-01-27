<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 26.10.14
 * Time: 10:44
 */
    require("../inc/ConfigYourSelf.php");
    require("../inc/FeelConnected.php");
    //foreach($_GET

    $sql = new sql();

    $search = (string) $_GET['search'];

    $sql->query("SELECT `word_id`, `word` FROM `words` WHERE `word` LIKE '%$search%'");

    foreach($sql->data as $key => $value){
        $word_id = $value['word_id'];
        $word = $value['word'];
        echo "<li data-word-id=\"$word_id\">$word</li>";
    }

?>