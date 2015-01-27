<?php
/**
 * Example Application
 *
 * @package Example-application
 */
header('Content-Type: text/html; charset=UTF-8');
error_reporting(E_ALL);

date_default_timezone_set('Europe/Berlin');
//error_reporting(0);
require '../libs/Smarty.class.php';
require 'inc/ConfigYourSelf.php';
require 'inc/FeelConnected.php';
require 'inc/Navigation.php';
//require 'core/system.class.php';

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
    case "cards":
        require 'core/Controller/CardsController.php';
        $template = 'templates/cards.tpl';
        break;
    case "edit":
        require 'core/Controller/EditController.php';
        break;
    default:
        require 'core/Controller/IndexController.php';
        $template = 'templates/index.tpl';
}

$smarty->display($template);
