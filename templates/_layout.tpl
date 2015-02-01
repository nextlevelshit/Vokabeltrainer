<!DOCTYPE html>
<html>
<head lang="de">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    {*<link rel="stylesheet" href="assets/css/bootstrap.css"/>*}
    {*<link rel="stylesheet" href="assets/css/GGS.css"/>*}
    <link rel="stylesheet" href="assets/css/bootstrap.3.2.0.min.css">
    <link rel="stylesheet" href="assets/css/jquery.mmenu.all.css"/>
    <link rel="stylesheet" href="assets/css/styles.css"/>
    <!-- JS -->
    <!--<script src="assets/js/GGS.js"></script>-->
    <script src="assets/js/jquery-2.1.1.min.js"></script>
    <script src="assets/js/jquery.1.12.0-pre.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <!--<script src="assets/js/bootstrap.min.js"></script>-->
    <script src="assets/js/bootstrap.3.2.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>jquery
    <script src="assets/js/jquery.mmenu.min.js"></script>
    <script src="assets/js/jquery.matchHeight.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>Mein Vokabeltrainer</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700|Pacifico&subset=latin,greek-ext,greek,latin-ext,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>

<div>
    <a id="hamburger" href="#sidebar"><span></span></a>

<nav id="sidebar">
    <div class="wrapper">
        <ul>
            <li><a href="index.php">&laquo; Zurück zur Übersicht</a></li>
            <li class="dropdown">
                <span><a href="#">Lernen</a></span>
                <ul>
                    <li><a href="#">Türkisch &raquo; Deutsch</a></li>
                    <li><a href="#">Deutsch &raquo; Türkisch</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <span><a href="#">Bearbeiten</a></span>
                <ul>
                    <li><a href="?page=edit&table=words&func=add">Neue Karteikarten</a></li>
                    <li><a href="?page=edit&table=words&func=edit">Karteikarten bearbeiten</a></li>
                    {*<li><a href="#">test</a></li>*}
                </ul>
            </li>
        </ul>
    </div>
</nav>
<nav id="footer__menu">
    <div clas="wrapper">
        {block name="footer"}{/block}
    </div>
</nav>
{*<header>
    <div class="wrapper">
        <h1 class="logo"><span class="glyphicon glyphicon-inbox"></span> Vokabeltrainer</h1>
    </div>
</header>*}
<header>
    <div class="header__band">
        <div class="container">
            <div class="row">
                <h1>
                    <a href="index.php">
                        <span class="glyphicon glyphicon-inbox"></span> Mein Vokabeltrainer
                    </a>
                </h1>
            </div>
        </div>
    </div>
    <div class="header__shadow">
        <div class="container">
            <div class="row">
                <h3>{block name="headline"}Sprachwahl{/block}</h3>
            </div>
        </div>
    </div>
</header>

<article class="container">
    <div class="row">
            <div class="col-xs-12">
            <p>{block name="text"}Willkommen bei deinem Vokabeltrainer. Links gelangst du gleich zu deinen Karteikarten und rechts kannst du sie bearbeiten oder neue hinzufügen. {/block}</p>

            <div class="alert alert-danger">{$alert}</div>
            <div class="doublemargin"></div>
        </div>
    </div>

    {block name="content"}
          test
    {/block}
</article>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 hidden-xs">
                {block name="footer"}{/block}
            </div>
            {*<div class="visible-xs">*}
                {*<ul>*}
                    {*<li><a href="#footer__menu" class="footer__menu__open">Optionen</a></li>*}
                {*</ul>*}
                {*<ul id="footer__menu">*}
                    {*{block name="footer"}{/block}*}
                {*</ul>*}
            {*</div>*}
        </div>
    </div>
</footer>

{include file="includes/footer.tpl"}
