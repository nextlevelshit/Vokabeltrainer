<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-22 20:24:48
         compiled from "templates/cards.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8205595254529fa7b3fe66-66301835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c69fb49beae991542115bb7ae534b68db61619e' => 
    array (
      0 => 'templates/cards.tpl',
      1 => 1421674527,
      2 => 'file',
    ),
    'ebfc53871d7e8f4ec0f2f455926384d80be09f3c' => 
    array (
      0 => './templates/_layout.tpl',
      1 => 1421954687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8205595254529fa7b3fe66-66301835',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54529fa7bbccc7_47623367',
  'variables' => 
  array (
    'alert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54529fa7bbccc7_47623367')) {function content_54529fa7bbccc7_47623367($_smarty_tpl) {?><!DOCTYPE html>
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
    <a href="?page=levels&lang=<?php echo $_smarty_tpl->tpl_vars['language_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['language_name']->value;?>
</a> &raquo; <?php echo $_smarty_tpl->tpl_vars['level']->value;?>
x gelernt
</h3>
        </div>
    </header>
</div>

<article id="oneway">
    <p>
    <?php if (!count($_smarty_tpl->tpl_vars['data']->value)) {?>
        <p>In dieser Stufe sind keine Karteikarten mehr. Hier geht's zur nächst höheren Stufe: <a href="<?php echo $_smarty_tpl->tpl_vars['next_level_link']->value;?>
">Weiter &raquo;</a>
    <?php }?>
</p>

    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
    <div class="doublemargin"></div>
</article>


    <article id="twoway" class="">
        <section class="wrapper">

            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                
                <?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?>
                    <?php $_smarty_tpl->tpl_vars["class"] = new Smarty_variable("active", null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["class"] = new Smarty_variable('', null, 0);?>
                <?php }?>
                <!--
                <div id="puffer" class="fade">
                    <div class="spinner5"></div>
                </div>
                -->
                <div class="flipper card <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" data-word-level="<?php echo $_smarty_tpl->tpl_vars['item']->value['level'];?>
" data-word-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['word_id'];?>
" id="card_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                    <div class="card__shadow"></div>
                    <div class="lined front">
                        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['front'];?>
</h3>
                        <p></p>
                    </div>
                    <div class="lined back">
                        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['back'];?>
</h3>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['synonym']) {?>
                        <p class="synonym">
                            <span class="glyphicon glyphicon-link"></span>
                            <!--<span>[syn.]</span>-->
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['synonym'];?>

                        </p>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['antonym']) {?>
                            <p class="antonym">
                                <span class="glyphicon glyphicon-flash"></span>
                                <!--<span>[ant.]</span>-->
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['antonym'];?>

                            </p>
                        <?php }?>
                        <button type="button" id="correct" class="btn btn-transparent btn-lg next">
                            <span class="glyphicon glyphicon-ok-circle"></span>
                        </button>
                        <div class="margin"></div>
                        <button type="button" id="false" class="btn btn-transparent btn-lg next">
                            <span class="glyphicon glyphicon-remove-circle"></span>
                        </button>
                    </div>
                </div>
            <?php } ?>
                <?php $_smarty_tpl->tpl_vars["last_card"] = new Smarty_variable($_smarty_tpl->tpl_vars['key']->value+1, null, 0);?>
                <div class="flipper card" id="card_<?php echo $_smarty_tpl->tpl_vars['last_card']->value;?>
" data-word-level="0" data-word-id="0">
                    <div class="front">
                        <h3>Herzlichen Glückwunsch!</h3>
                        <center>
                            <p>
                                <i>Du hast alle Karten gemeistert</i>
                            </p>
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['next_level_link']->value;?>
">Hier gelangst du zur nächsten Box</a></p>
                        </center>
                    </div>
                    <div class="back">
                        <h3>Herzlichen Glückwunsch!</h3>
                        <center>
                            <p>
                                <i>Du hast alle Karten gemeistert</i>
                            </p>
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['next_level_link']->value;?>
">Hier gelangst du zur nächsten Box</a></p>
                        </center>
                    </div>
                </div>
            </div>
        </section>
    </article>

    <footer>
        <article id="oneway">
            <section class="wrapper">
                
    <ul>
        <li>
            <a id="card_stats"><?php echo $_smarty_tpl->tpl_vars['language_name']->value;?>
 &raquo; <span id="current_card_num">1</span> / <?php echo $_smarty_tpl->tpl_vars['cards_num']->value;?>
</a>
        </li>
    </ul>

            </section>
        </article>
    </footer>

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
