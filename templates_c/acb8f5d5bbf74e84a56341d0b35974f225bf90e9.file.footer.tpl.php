<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-28 19:29:29
         compiled from "./templates/includes/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83746937954c92a896d5393-48901627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acb8f5d5bbf74e84a56341d0b35974f225bf90e9' => 
    array (
      0 => './templates/includes/footer.tpl',
      1 => 1422361098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83746937954c92a896d5393-48901627',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c92a896e7879_62196331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c92a896e7879_62196331')) {function content_54c92a896e7879_62196331($_smarty_tpl) {?></div>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mmenu({
                offCanvas: {
                    position  : "right",
                    zposition : "front"
                },
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
                offCanvas: {
                    position  : "bottom",
                    zposition : "front"
                },
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
                    fixedTop: "header",
                    fixedBottom: "footer"
                }
            });
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
