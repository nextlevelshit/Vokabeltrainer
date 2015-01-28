<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-28 19:12:37
         compiled from "./templates/includes/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:710017874544ce9230bbbc7-84290681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23d02edc097dbd918438562cf36a6ac9cf146dc6' => 
    array (
      0 => './templates/includes/footer.tpl',
      1 => 1422465898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '710017874544ce9230bbbc7-84290681',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544ce9230bd0c4_28214079',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544ce9230bd0c4_28214079')) {function content_544ce9230bd0c4_28214079($_smarty_tpl) {?></div>
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
