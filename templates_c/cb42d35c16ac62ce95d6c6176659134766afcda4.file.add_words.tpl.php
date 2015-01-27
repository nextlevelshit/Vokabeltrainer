<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-22 21:33:16
         compiled from "templates/add_words.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1382736191545b9560ba7640-74570018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb42d35c16ac62ce95d6c6176659134766afcda4' => 
    array (
      0 => 'templates/add_words.tpl',
      1 => 1415977919,
      2 => 'file',
    ),
    'ebfc53871d7e8f4ec0f2f455926384d80be09f3c' => 
    array (
      0 => './templates/_layout.tpl',
      1 => 1421954687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1382736191545b9560ba7640-74570018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_545b9560c6ba76_82926040',
  'variables' => 
  array (
    'alert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b9560c6ba76_82926040')) {function content_545b9560c6ba76_82926040($_smarty_tpl) {?><!DOCTYPE html>
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
            <h3>Sprachwahl</h3>
        </div>
    </header>
</div>

<article id="oneway">
    <p>
    <?php if ($_smarty_tpl->tpl_vars['alert']->value) {?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
        <?php echo '<script'; ?>
>$('.alert').fadeIn();<?php echo '</script'; ?>
>
    <?php }?>
</p>

    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
    <div class="doublemargin"></div>
</article>


    <form action="index.php?page=edit&table=words&func=save_add" method="post" class="addwords">
        <input type="hidden" name="table" value="words" />
        <input type="hidden" name="func" value="save_add" />

        <article id="onlytwoway" class="edit">
            <section class="wrapper">
                <select name="language_word" id="language_word">
                    <option value="0">Bitte wählen...</option>
                    <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

                        </option>
                    <?php } ?>
                </select>
            </section>
            <section class="wrapper">
                <select name="language_translation" id="language_translation">
                    <option value="0">Bitte wählen...</option>
                    <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

                        </option>
                    <?php } ?>
                </select>
            </section>
        </article>
        <article id="onlytwoway">
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 20+1 - (0) : 0-(20)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <div class="wrapper">
                <input type="text" name="word[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['words']->value[$_smarty_tpl->tpl_vars['i']->value];?>
" />
            </div>
            <div class="wrapper">
                <input type="text" name="translation[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value[$_smarty_tpl->tpl_vars['i']->value];?>
" />
            </div>
        <?php }} ?>
        </article>
        <article id="twoway">
            <section class="wrapper">
                <div class="doublemargin"></div>
                <!--<button class="btn btn-transparent" onclick="window.history.back();">Abbrechen</button>-->
            </section>
            <section class="wrapper">
                <div class="doublemargin"></div>
                <input type="submit" class="btn btn-transparent selected submit" value="Speichern" />
            </section>
        </article>
    </form>

    <footer>
        <article id="oneway">
            <section class="wrapper">
                
            </section>
        </article>
    </footer>

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
