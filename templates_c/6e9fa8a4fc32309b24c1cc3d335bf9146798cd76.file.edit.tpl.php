<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-10-31 12:34:38
         compiled from "templates/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1271473523545373ce220dd6-92464442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e9fa8a4fc32309b24c1cc3d335bf9146798cd76' => 
    array (
      0 => 'templates/edit.tpl',
      1 => 1414755085,
      2 => 'file',
    ),
    'ebfc53871d7e8f4ec0f2f455926384d80be09f3c' => 
    array (
      0 => './templates/_layout.tpl',
      1 => 1414750349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1271473523545373ce220dd6-92464442',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_545373ce2979b2_01144569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545373ce2979b2_01144569')) {function content_545373ce2979b2_01144569($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="de">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/GGS.css"/>
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="assets/css/styles.css"/>
    <!-- JS -->
    <?php echo '<script'; ?>
 src="assets/js/GGS.js"><?php echo '</script'; ?>
>
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
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <title>Mein Vokabeltrainer</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700&subset=latin,latin-ext" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <div class="wrapper">
        <h1>Mein Vokabeltrainer</h1>
        <h2></h2>

        <p>Hallo</p>

        <div class="doublemargin"></div>
    </div>
</header>


    <article id="twoway" class="languages">

        <section class="wrapper">
        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
            <div>
            <a href="?page=levels&lang=<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['language']->value['flag'];?>
" />
                <?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

            </a>
            </div>
            <div class="margin"></div>
        <?php } ?>
        </section>

        <section class="wrapper">
            <div class="margin"></div>
            <form action="?page=edit&table=language">
                <button class="btn btn-transparent" name="func" value="add">Sprache hinzufügen</button>
                <div class="margin"></div>
                <button class="btn btn-transparent" name="func" value="edit">Sprachen bearbeiten</button>
            </form>
            <div class="doublemargin"></div>
            <form action="?page=edit&table=language">
                <button class="btn btn-transparent" name="func" value="add">Karteikarten hinzufügen</button>
                <div class="margin"></div>
                <button class="btn btn-transparent" name="func" value="edit">Karteikarten bearbeiten</button>
            </form>
        </section>
    </article>


<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
