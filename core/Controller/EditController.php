<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 30.10.14
 * Time: 19:35
 */

$sql = new sql();

$table = _TABLE;
$function = _FUNC;
$language = _LANGUAGE;
$language_pair = _LANGUAGE_PAIR;

$error = "";
$language_word = $_REQUEST['language_word'];
$language_translation = $_REQUEST['language_translation'];
$languages = array();
$language_pairs = array();
$i = 0;

$sql->query("SELECT * FROM `languages` ORDER BY `language`");
//$sql->query("SELECT  l.language_id, l.language, l.flag, p.language_id_2 FROM language_pairs p LEFT JOIN languages l ON (p.language_id_1 = l.language_id OR p.language_id_2 = l.language_id) ORDER BY `language`");

foreach($sql->data as $key => $value)
{
    $languages[$i]['id'] = $value['language_id'];
    $languages[$i]['id2'] = $value['language_id_2'];
    $languages[$i]['name'] = $value['language'];
    $languages[$i]['flag'] = $value['flag'];

    $i++;
}

$sql->query("
SELECT
	lp.`language_pair_id`,
    CONCAT (lp.language_id_1) as 'language_id',
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

switch ($table)
{
    case "languages":
        break;
    case "words":
        switch ($function)
        {
            case "add":
                $template = 'templates/add_words.tpl';
                break;

            case "save_add":
                $words = $_REQUEST['word'];
                $translations = $_REQUEST['translation'];

                for ($i=0; $i < count($words); $i++)
                {
                    $word = htmlentities($words[$i]);
                    $translation = htmlentities($translations[$i]);

                    #echo htmlspecialchars_decode($translations[$i]);

                    //echo "<script>console.log('$translation&uuml');</script>";

                    if (strlen($word)>0 AND strlen($translation)>0)
                    {
                        #echo $word;
                        $sql->query("INSERT INTO `words` (`word`, `language`) VALUES ('$word', $language_word)", false);
                        $word_id = $sql->insert_id;
                        $sql->query("INSERT INTO `words` (`translation`, `word`, `language`) VALUES ($word_id, '$translation', $language_translation)", false);
                        $translation_id = $sql->insert_id;
                        $sql->query("UPDATE `words` SET `translation` = '$translation_id' WHERE `word_id` = $word_id;",false);

                        #echo $translation_id;
                    }
                }
                $smarty->assign("alert", "Wörter wurden erfolgreich hinzugefügt");
                $smarty->assign("words", $words);
                $smarty->assign("translations", $translations);

                $template = 'templates/add_words.tpl';
                break;

            case "save_edit":
                $update_query = "";
                $cards = $_REQUEST['word'];
                //$translations = $_REQUEST['translation'];

                //var_dump($words);
                foreach ($cards as $key => $card)
                {
                    $update_query = "";

                    $word = htmlentities($card['word']);
                    $word_id = $key;
                    $translation = htmlentities($card['translation']);
                    $translation_id = $card['translation_id'];

                    $update_query = "UPDATE `words` SET `word` = '$word' WHERE `word_id` = $word_id; ";
                    $sql->query($update_query, false);
                    $update_query = "UPDATE `words` SET `word` = '$translation' WHERE `word_id` = $translation_id; ";
                    $sql->query($update_query, false);

                }

                //echo $update_query;

                //$sql->query($update_query, false);

                $smarty->assign("alert", "Wörter wurden erfolgreich bearbeitet");

                //$template = 'templates/edit_words.tpl';

                $function = 'edit';
                $language = 1;

            case "edit":
                //if (strlen($language_word) == 0 OR strlen($language_translation) == 0 )
                if ($language_pair == 0)
                {
                    $template = 'templates/edit_words_chooselanguage.tpl';
                } else {
                    //$sql->query("SELECT w.language, w.word_id, w.word, CONCAT (t.word_id) AS 'translation_id', CONCAT (t.word) AS 'translation' FROM words w INNER JOIN words t ON w.translation = t.word_id WHERE w.language = $language ORDER by w.word ");
                    $sql->query("
                    SELECT 
                        w.language, 
                        w.word_id, 
                        w.word, 
                        CONCAT (t.word_id) AS 'translation_id',
                        CONCAT (t.word) AS 'translation',
                        CONCAT (s.word)  AS 'synonym',
                        CONCAT (s.word_id)  AS 'synonym_id',
                        CONCAT (s_t.word) AS 'synonym_translation',
                        CONCAT (s_t.word_id) AS 'synonym_translation_id',
                        CONCAT (a.word)  AS 'antonym',
                        CONCAT (a.word_id)  AS 'antonym_id',
                        CONCAT (a_t.word) AS 'antonym_translation',
                        CONCAT (a_t.word_id) AS 'antonym_translation_id'
                    FROM
                        language_pairs lp
                        INNER JOIN words w ON w.language = lp.language_id_1
                        INNER JOIN words t ON w.translation = t.word_id 
                        LEFT JOIN words s ON ( w.synonym = s.word_id )
                        LEFT JOIN words s_t ON ( s.translation = s_t.word_id )
                        LEFT JOIN words a ON ( w.antonym = a.word_id )
                        LEFT JOIN words a_t ON ( a.translation = a_t.word_id )
                    WHERE lp.language_pair_id = $language_pair
                    ORDER by w.word 
                    ");    
                    
                    $smarty->assign("cards", $sql->data);
                    $template = 'templates/edit_words.tpl';
                }
                break;
        }

        $smarty->assign("function", $function);


        break;
}


$smarty->assign("languages", $languages);
$smarty->assign("language_pairs", $language_pairs);