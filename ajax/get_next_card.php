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

    $answer = $_GET['answer'];
    $word_id = (int) $_GET['word_id'];
    $level = (int) $_GET['level'];

    if($answer == "correct") { // Put word to the next level
        $level++;
        // Todo: What to do at the last level?
    } elseif($answer == "false") { // Put word back to the beginning
        $level = 0;
    }



    $sql->update("UPDATE `words` SET `level` = '$level' WHERE `word_id` = $word_id;");

    echo "#$answer $word_id $level";
    //echo "UPDATE `words` SET `level` = '$level' WHERE `word_id` = $word_id;";
?>