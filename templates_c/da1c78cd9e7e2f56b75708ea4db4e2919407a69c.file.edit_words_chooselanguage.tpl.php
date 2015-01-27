<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-26 21:51:15
         compiled from "templates/edit_words_chooselanguage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7172573954c6a8c31492e0-49795789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da1c78cd9e7e2f56b75708ea4db4e2919407a69c' => 
    array (
      0 => 'templates/edit_words_chooselanguage.tpl',
      1 => 1422267236,
      2 => 'file',
    ),
    '668cd478807930eebf914750a6b91e89b370d67f' => 
    array (
      0 => './templates/_layout.tpl',
      1 => 1422267237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7172573954c6a8c31492e0-49795789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c6a8c329b2a0_37375365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c6a8c329b2a0_37375365')) {function content_54c6a8c329b2a0_37375365($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="de">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css"/>
    <link rel="stylesheet" href="assets/css/jquery.mmenu.all.css"/>
    <!-- JS -->
    <!--<?php echo '<script'; ?>
 src="assets/js/GGS.js"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 src="assets/js/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/scripts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.mmenu.min.js"><?php echo '</script'; ?>
>
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
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
                    
                </ul>
            </li>
        </ul>
    </div>
</nav>
<nav id="footer__menu">
    <div clas="wrapper">
        
    <ul>
        <li>
            <a href="#">
                <span class="glyphicon glyphicon-globe"></span>
                Sprachen bearbeiten
            </a>
        </li>
        <li>
            <a href="">
                <span class="glyphicon glyphicon-globe"></span>
                Neue Sprache
            </a>
        </li>
        <li>
            <a href="#">
                <span class="glyphicon glyphicon-inbox"></span>
                Karteikästen bearbeiten
            </a>
        </li>
        <li>
            <a href="#">
                <span class="glyphicon glyphicon-inbox"></span>
                Neuer Karteikasten
            </a>
        </li>
    </ul>

    </div>
</nav>

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
                <h3>
    Karteikarten bearbeitern &raquo; Sprachwahl
</h3>
            </div>
        </div>
    </div>
</header>

<article class="container">
    <div class="row">
            <div class="col-xs-12">
            <p>
    Wähle eine Sprache aus, in der du die Karteikarten bearbeiten möchtest
</p>

            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
            <div class="doublemargin"></div>
        </div>
    </div>

    
    <article id="twoway" class="languages">
        <?php  $_smarty_tpl->tpl_vars['pair'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pair']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['language_pairs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pair']->key => $_smarty_tpl->tpl_vars['pair']->value) {
$_smarty_tpl->tpl_vars['pair']->_loop = true;
?>
            <section class="wrapper">
                <div>
                    <a href="?page=edit&table=words&func=edit&language_pair=<?php echo $_smarty_tpl->tpl_vars['pair']->value['language_pair_id'];?>
" class="btn btn-transparent">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['pair']->value['language_flag'];?>
" />
                        <?php echo $_smarty_tpl->tpl_vars['pair']->value['language'];?>

                        &rsaquo;
                        <img src="<?php echo $_smarty_tpl->tpl_vars['pair']->value['translation_flag'];?>
" />
                        <?php echo $_smarty_tpl->tpl_vars['pair']->value['translation'];?>

                    </a>
                </div>
                <div class="margin"></div>
            </section>
        <?php } ?>
        

        <!--<section class="wrapper">
            <form action="index.php" method="get">
                <input type="hidden" name="page" value="edit" />
                <input type="hidden" name="table" value="languages" />
                <button class="btn btn-transparent" name="func" value="add">Sprache hinzufügen</button>
                <div class="margin"></div>
                <button class="btn btn-transparent" name="func" value="edit">Sprachen bearbeiten</button>
            </form>
        </section>-->
    </article>

</article>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 hidden-xs">
                
    <ul>
        <li>
            <a href="#">
                <span class="glyphicon glyphicon-globe"></span>
                Sprachen bearbeiten
            </a>
        </li>
        <li>
            <a href="">
                <span class="glyphicon glyphicon-globe"></span>
                Neue Sprache
            </a>
        </li>
        <li>
            <a href="#">
                <span class="glyphicon glyphicon-inbox"></span>
                Karteikästen bearbeiten
            </a>
        </li>
        <li>
            <a href="#">
                <span class="glyphicon glyphicon-inbox"></span>
                Neuer Karteikasten
            </a>
        </li>
    </ul>

            </div>
            <div class="visible-xs">
                <ul>
                    <li><a href="#footer__menu">Optionen</a></li>
                </ul>

            </div>
        </div>
    </div>
</footer>

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
