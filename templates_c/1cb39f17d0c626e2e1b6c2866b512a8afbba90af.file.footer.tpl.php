<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-24 18:30:42
         compiled from "./templates/includes/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38525473554c21453036d66-77804942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cb39f17d0c626e2e1b6c2866b512a8afbba90af' => 
    array (
      0 => './templates/includes/footer.tpl',
      1 => 1422120639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38525473554c21453036d66-77804942',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c2145303bd41_36404413',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c2145303bd41_36404413')) {function content_54c2145303bd41_36404413($_smarty_tpl) {?></div>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mmenu({
                // options
                //classes			: 'mm-white mm-slide',
                header			: {
                    add		: true,
                    update	: true,
                    title	: 'Navigation'
                }
            }, {
                // configuration
                classNames: {
                    fixedElements: {
                        fixedTop: "header",
                        fixedBottom: "footer"
                    }
                }
            });
//            $("#sidebar").mmenu().open();

            $("#footer__menu").mmenu({

                // options
                //classes			: 'mm-white mm-slide',
                header			: {
                    add		: true,
                    update	: true,
                    title	: 'Optionen'
                }
            }, {
                // configuration
                fixedElements: {
                    fixedTop: "header"
                }
            });
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
