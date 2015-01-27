<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 30.10.14
 * Time: 19:25
 */

class System
{
    public $view = null;
    private $view_dir = "/templates/";
    private $view_suffix = "View.tpl";

    public $controller = null;
    private $controller_dir = "core/Controller";
    private $controller_suffix = "Controller.php";

    function __construct ()
    {

    }

    function setController ($component)
    {
        //require $this->$controller_dir . $component . $this->$controller_suffix;

        $this->$controller;
    }

    function setTemplate($template)
    {
        $this->$view = $this->$view_dir . $template . $this->$view_suffix;
    }
} 