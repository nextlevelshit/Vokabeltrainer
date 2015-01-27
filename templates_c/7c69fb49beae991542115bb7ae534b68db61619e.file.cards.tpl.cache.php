<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-10-26 12:20:43
         compiled from "./templates/cards.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1218301346544cc1a92ca354-19992244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c69fb49beae991542115bb7ae534b68db61619e' => 
    array (
      0 => './templates/cards.tpl',
      1 => 1414326036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1218301346544cc1a92ca354-19992244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544cc1a930b860_32462073',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544cc1a930b860_32462073')) {function content_544cc1a930b860_32462073($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>


<article id="twoway">
    <section class="wrapper">
        
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper card">
                <div class="front">
                    <h3>dort</h3>
                    <p>
                        These two blocks of text will float side by side with some empty columns on the sides on large screens. On medium-sized screens the empty columns will disappear, and on small screens the blocks will be stacked vertically.
                    </p>
                </div>
                <div class="back">
                    <h3>burda</h3>
                    <p>
                        These two blocks of text will float side by side with some empty columns on the sides on large screens. On medium-sized screens the empty columns will disappear, and on small screens the blocks will be stacked vertically.
                    </p>
                </div>
            </div>
        </div>
        
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

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
