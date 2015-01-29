<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-28 19:44:45
         compiled from "templates/levels.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114605665654529ebc0138e8-22222221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee90374cb33c33194cc739e7d2407230c09fd0ed' => 
    array (
      0 => 'templates/levels.tpl',
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
  'nocache_hash' => '114605665654529ebc0138e8-22222221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54529ebc074441_55717201',
  'variables' => 
  array (
    'alert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54529ebc074441_55717201')) {function content_54529ebc074441_55717201($_smarty_tpl) {?><!DOCTYPE html>
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
    <a href="?page=languages">&laquo; Zurück zur Sprachwahl</a>
</h3>
            </div>
        </div>
    </div>
</header>

<article class="container">
    <div class="row">
            <div class="col-xs-12">
            <p>
    Bitte wähle eine Stufe, die du gerne üben möchtest.
</p>

            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
            <div class="doublemargin"></div>
        </div>
    </div>

    
    <section class="row levels">
        <div class="col-sm-6">
            <ul class="levels__list">
            <?php  $_smarty_tpl->tpl_vars['box'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['box']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['boxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['box']->key => $_smarty_tpl->tpl_vars['box']->value) {
$_smarty_tpl->tpl_vars['box']->_loop = true;
?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['box']->value['link'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['box']->value['text'];?>

                        <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['box']->value['num'];?>
</span>
                    </a>
                </li>
            <?php } ?>
            </ul>
        </div>
        <div class="col-sm-6">
            <button class="btn btn-transparent">Neue Karteikarten hinzufügen</button>
            <div class="margin"></div>
            <button class="btn btn-transparent">Karteikarten bearbeiten</button>
        </div>
    </section>

</article>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 hidden-xs">
                
            </div>
            
                
                    
                
                
                    
                
            
        </div>
    </div>
</footer>

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
