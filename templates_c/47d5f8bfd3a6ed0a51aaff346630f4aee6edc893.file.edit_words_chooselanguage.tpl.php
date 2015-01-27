<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-22 21:32:40
         compiled from "templates/edit_words_chooselanguage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1695915739545b97009b7d77-86734620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47d5f8bfd3a6ed0a51aaff346630f4aee6edc893' => 
    array (
      0 => 'templates/edit_words_chooselanguage.tpl',
      1 => 1421514287,
      2 => 'file',
    ),
    'ebfc53871d7e8f4ec0f2f455926384d80be09f3c' => 
    array (
      0 => './templates/_layout.tpl',
      1 => 1421954687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1695915739545b97009b7d77-86734620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_545b9700a247c2_72719185',
  'variables' => 
  array (
    'alert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b9700a247c2_72719185')) {function content_545b9700a247c2_72719185($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="de">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/GGS.css"/>
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
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
    <!--<?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>-->
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
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
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
                <a href="#">test</a>
                <ul>
                    <li><a href="#">test</a></li>
                    <li><a href="#">test</a></li>
                    <li><a href="#">test</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


<div class="header__band">
    <header>
    <div class="wrapper">
        <h1><span class="glyphicon glyphicon-inbox"></span> Mein Vokabeltrainer</h1>
    </div>
    </header>
</div>
<div class="header__shadow">
    <header>
        <div class="wrapper">
            <h3>
    Karteikarten bearbeitern &raquo; Sprachwahl
</h3>
        </div>
    </header>
</div>

<article id="oneway">
    <p>
    Wähle eine Sprache aus, in der du die Karteikarten bearbeiten möchtest
</p>

    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
    <div class="doublemargin"></div>
</article>


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

    <footer>
        <article id="oneway">
            <section class="wrapper">
                
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

            </section>
        </article>
    </footer>

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>