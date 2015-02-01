<?php
/**
 * Example Application
 *
 * @package Example-application
 */
header('Content-Type: text/html; charset=UTF-8');

date_default_timezone_set('Europe/Berlin');
//error_reporting(0);
require '../libs/Smarty.class.php';
require 'inc/ConfigYourSelf.php';
require 'inc/FeelConnected.php';
require 'inc/Navigation.php';
require 'core/Controller/ApplicationController.php';
//require 'core/system.class.php';

if( !DEBUG ) {
    error_reporting(0);
} else {
    error_reporting(E_ALL);
}

$smarty = new Smarty;
//$sys = new System;

//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;


switch (_PAGE)
{
    case "levels":
        require 'core/Controller/LevelsController.php';
        $template = 'templates/levels.tpl';
        break;
    case "learning":
        require 'core/Controller/LearningController.php';
//        $template = 'templates/LearningView.php';
        break;
    case "editing":
        require 'core/Controller/EditingController.php';
        $template = 'templates/EditingView.php';
        break;
    case "adding":
        require 'core/Controller/AddingController.php';
        $template = 'templates/AddingView.php';
        break;
    case "language":
        require 'core/Controller/LanguageController.php';
        switch (_ACTION)
        {
            case "edit":
                break;
            default:
//                $Controller->DisplayDisplayLanguagePairsToLearn();
        }
        $template = 'templates/LanguageView.php';
        break;
    case "cards":
        require 'core/Controller/CardsController.php';
        $template = 'templates/cards.tpl';
        break;
    case "boxes":
        require 'core/Controller/BoxController.php';
        $template = 'templates/BoxView.php';
        break;
    case "edit":
        require 'core/Controller/EditController.php';
        break;
    default:
        require 'core/Controller/StartController.php';
        $template = 'templates/StartView.php';
}

$smarty->display($template);
