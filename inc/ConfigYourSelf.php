<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 29.10.14
 * Time: 01:33
 */

define("DEBUG", (boolean) $_REQUEST['debug']);

define("_PAGE",             (string) $_REQUEST['page']);
define("_LANGUAGE",         (int) $_REQUEST['lang']);
define("_LANGUAGE_PAIR",    (int) $_REQUEST['language_pair']);
define("_LEVEL",            (int) $_REQUEST['level']);
define("_FUNC",             (string) $_REQUEST['func']);
define("_TABLE",            (string) $_REQUEST['table']);
define("_BOX",              (int) $_REQUEST['box']);

define("CONF_LEVELS",       5); /* How many Learning Levels do you need? */

/* SQL Stuff */
define("SQL_USERNAME",      "mwc");
define("SQL_PASSWORD",      "Phlyritcykcopurt");
define("SQL_HOSTNAME",      "localhost:3306");
define("SQL_TABLE",         "mwc_trainer");

?>