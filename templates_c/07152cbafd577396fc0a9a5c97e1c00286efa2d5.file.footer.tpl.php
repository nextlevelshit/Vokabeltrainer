<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-27 13:18:39
         compiled from "./templates/includes/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29992642854c62aff6af902-49859128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07152cbafd577396fc0a9a5c97e1c00286efa2d5' => 
    array (
      0 => './templates/includes/footer.tpl',
      1 => 1422361098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29992642854c62aff6af902-49859128',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c62aff6bf7d0_41633284',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c62aff6bf7d0_41633284')) {function content_54c62aff6bf7d0_41633284($_smarty_tpl) {?></div>
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
