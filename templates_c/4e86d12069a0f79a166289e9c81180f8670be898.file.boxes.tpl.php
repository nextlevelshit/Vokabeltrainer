<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-10-30 21:14:00
         compiled from "templates/boxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139895215954529947221ea4-20478711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e86d12069a0f79a166289e9c81180f8670be898' => 
    array (
      0 => 'templates/boxes.tpl',
      1 => 1414700038,
      2 => 'file',
    ),
    'ebfc53871d7e8f4ec0f2f455926384d80be09f3c' => 
    array (
      0 => './templates/_layout.tpl',
      1 => 1414696898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139895215954529947221ea4-20478711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5452994728a8a5_39114879',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5452994728a8a5_39114879')) {function content_5452994728a8a5_39114879($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>



    <article id="twoway" class="boxes">
        <section class="wrapper">
            <ul>
            <?php  $_smarty_tpl->tpl_vars['box'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['box']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['boxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['box']->key => $_smarty_tpl->tpl_vars['box']->value) {
$_smarty_tpl->tpl_vars['box']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['box']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['box']->value['text'];?>
</a>
                </li>
            <?php } ?>
            </ul>
        </section>
    </article>


<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
