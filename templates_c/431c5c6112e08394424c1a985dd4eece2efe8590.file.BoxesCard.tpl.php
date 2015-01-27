<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-10-30 21:23:17
         compiled from "./templates/includes/BoxesCard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118953703544ceab942d484-07820262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '431c5c6112e08394424c1a985dd4eece2efe8590' => 
    array (
      0 => './templates/includes/BoxesCard.tpl',
      1 => 1414700382,
      2 => 'file',
    ),
    '7c69fb49beae991542115bb7ae534b68db61619e' => 
    array (
      0 => '/opt/lampp/htdocs/smarty/Vokabeltrainer/templates/cards.tpl',
      1 => 1414697964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118953703544ceab942d484-07820262',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544ceab9483fd2_96569518',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544ceab9483fd2_96569518')) {function content_544ceab9483fd2_96569518($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>


<article id="twoway" class="cards">
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

        <div class="flipper card <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" data-word-level="<?php echo $_smarty_tpl->tpl_vars['item']->value['level'];?>
" data-word-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['word_id'];?>
" id="card_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
            <div class="front">
                <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['front'];?>
</h3>
                <p>test</p>
            </div>
            <div class="back">
                <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['back'];?>
</h3>
                <p>test</p>
                <button type="button" id="correct" class="btn btn-transparent btn-lg next">
                    <span class="glyphicon glyphicon-ok-sign"></span>
                </button>
                <div class="margin"></div>
                <button type="button" id="false" class="btn btn-transparent btn-lg next">
                    <span class="glyphicon glyphicon-remove-sign"></span>
                </button>
            </div>
        </div>

    <?php } ?>





    </section>
    <section class="wrapper">
        <button type="button" id="correct" class="btn btn-transparent btn-lg next">
            <span class="glyphicon glyphicon-ok-sign"></span> Korrekt
        </button>
        <div class="margin"></div>
        <button type="button" id="false" class="btn btn-transparent btn-lg next">
            <span class="glyphicon glyphicon-remove-sign"></span> Falsch
        </button>
    </section>
</article>

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
