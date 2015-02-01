<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 27.01.15
 * Time: 16:53
 */

require_once 'ApplicationController.php';
//require_once '../../../libs/Smarty.class.php';

class LanguageController extends ApplicationController {
    protected $page = 'language';

    function __construct () {

    }

    public function DisplayLanguagePairsToLearn() {
//        $smarty = new Smarty;
//
//        $smarty->display('../../templates/LanguageView.php');
        return;
    }

    public function DisplayLanguagePairsToEdit() {
        return;
    }

    public function EditLanguagePairs() {
        return;
    }

    public function SaveLanguagePairsToLearn() {
        return;
    }
}

$Controller = new LanguageController();


//$Controller->sqlGetLanguagePairs();
//$smarty->assign('all_language_pairs', $Controller->GetLanguagePairs());