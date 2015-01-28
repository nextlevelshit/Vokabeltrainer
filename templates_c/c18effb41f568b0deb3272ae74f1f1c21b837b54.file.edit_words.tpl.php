<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-28 21:49:49
         compiled from "templates/edit_words.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8455973785453764483bb48-72162109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c18effb41f568b0deb3272ae74f1f1c21b837b54' => 
    array (
      0 => 'templates/edit_words.tpl',
      1 => 1422465898,
      2 => 'file',
    ),
    'ebfc53871d7e8f4ec0f2f455926384d80be09f3c' => 
    array (
      0 => './templates/_layout.tpl',
      1 => 1422470425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8455973785453764483bb48-72162109',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_545376448bcfb7_36603032',
  'variables' => 
  array (
    'alert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545376448bcfb7_36603032')) {function content_545376448bcfb7_36603032($_smarty_tpl) {?><!DOCTYPE html>
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
            <a class="toggle_synonyms">
                <span class="glyphicon glyphicon-link"></span>
                Synonyme ein/ausblenden
            </a>
        </li>
        <li>
            <a class="toggle_antonyms">
                <span class="glyphicon glyphicon-flash"></span>
                Antonym ein/ausblenden
            </a>
        </li>
    </ul>
    <?php echo '<script'; ?>
 language="JavaScript">
        
            $('.toggle_synonyms').click(function(){
                $('.input__synonyms').fadeToggle();
            });

            $('.toggle_antonyms').click(function(){
                $('.input__antonyms').fadeToggle();
            });
        
    <?php echo '</script'; ?>
>

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
    Karteikarten bearbeiten
</h3>
            </div>
        </div>
    </div>
</header>

<article class="container">
    <div class="row">
            <div class="col-xs-12">
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
        </div>
    </div>

    
    <form action="index.php?page=edit" method="post" class="editwords">
        <input type="hidden" name="table" value="words" />
        <input type="hidden" name="func" value="save_edit" />

        <article id="onlytwoway" class="edit">
            <section class="wrapper">
                <p class="head">Deutsch</p>
            </section>
            <section class="wrapper">
                <p class="head">Türkisch</p>
            </section>
        </article>
        <article id="onlytwoway">
        <?php  $_smarty_tpl->tpl_vars['card'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['card']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['card']->key => $_smarty_tpl->tpl_vars['card']->value) {
$_smarty_tpl->tpl_vars['card']->_loop = true;
?>
            <div class="wrapper">
                <div class="doublemargin"></div>
                <input type="text" name="word[<?php echo $_smarty_tpl->tpl_vars['card']->value['word_id'];?>
][word]" value="<?php echo $_smarty_tpl->tpl_vars['card']->value['word'];?>
" />
            </div>
            <div class="wrapper">
                <div class="doublemargin"></div>
                <input type="text" name="word[<?php echo $_smarty_tpl->tpl_vars['card']->value['word_id'];?>
][translation]" value="<?php echo $_smarty_tpl->tpl_vars['card']->value['translation'];?>
" />
                <input type="hidden" name="word[<?php echo $_smarty_tpl->tpl_vars['card']->value['word_id'];?>
][translation_id]" value="<?php echo $_smarty_tpl->tpl_vars['card']->value['translation_id'];?>
" />
            </div>
            <div class="wrapper input__additional input__synonyms">
                <span class="glyphicon glyphicon-link"></span>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['card']->value['synonym_id'];?>
"  name="word[<?php echo $_smarty_tpl->tpl_vars['card']->value['word_id'];?>
][synonym_id]">
                <input class="additional" placeholder="Synonym" type="text" name="word[<?php echo $_smarty_tpl->tpl_vars['card']->value['word_id'];?>
][synonym]" value="<?php echo $_smarty_tpl->tpl_vars['card']->value['synonym'];?>
" />
            </div>
            <div class="wrapper input__additional input__synonyms">
                <span class="glyphicon glyphicon-link"></span>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['card']->value['synonym_translation_id'];?>
"  name="word[<?php echo $_smarty_tpl->tpl_vars['card']->value['word_id'];?>
][synonym_translation_id]">
                <input class="additional" placeholder="Synonym" type="text" name="word[<?php echo $_smarty_tpl->tpl_vars['card']->value['word_id'];?>
][synonym_translation]" value="<?php echo $_smarty_tpl->tpl_vars['card']->value['synonym_translation'];?>
" />
            </div>
            <div class="wrapper input__additional input__antonyms">
                <span class="glyphicon glyphicon-flash"></span>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['card']->value['antonym_id'];?>
"  name="word[<?php echo $_smarty_tpl->tpl_vars['card']->value['word_id'];?>
][antonym_id]">
                <input class="additional" placeholder="Antonym" type="text" name="word[<?php echo $_smarty_tpl->tpl_vars['card']->value['word_id'];?>
][synonym]" value="<?php echo $_smarty_tpl->tpl_vars['card']->value['antonym'];?>
" />
            </div>
            <div class="wrapper input__additional input__antonyms">
                <span class="glyphicon glyphicon-flash"></span>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['card']->value['antonym_translation_id'];?>
"  name="word[<?php echo $_smarty_tpl->tpl_vars['card']->value['word_id'];?>
][antonym_translation_id]">
                <input class="additional" placeholder="Antonym" type="text" name="word[<?php echo $_smarty_tpl->tpl_vars['card']->value['word_id'];?>
][antonym_translation]" value="<?php echo $_smarty_tpl->tpl_vars['card']->value['antonym_translation'];?>
" />

            </div>

        <?php } ?>
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
    <ul class="search__list">TEST</ul>

</article>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 hidden-xs">
                
    <ul>
        <li>
            <a class="toggle_synonyms">
                <span class="glyphicon glyphicon-link"></span>
                Synonyme ein/ausblenden
            </a>
        </li>
        <li>
            <a class="toggle_antonyms">
                <span class="glyphicon glyphicon-flash"></span>
                Antonym ein/ausblenden
            </a>
        </li>
    </ul>
    <?php echo '<script'; ?>
 language="JavaScript">
        
            $('.toggle_synonyms').click(function(){
                $('.input__synonyms').fadeToggle();
            });

            $('.toggle_antonyms').click(function(){
                $('.input__antonyms').fadeToggle();
            });
        
    <?php echo '</script'; ?>
>

            </div>
            
                
                    
                
                
                    
                
            
        </div>
    </div>
</footer>

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
