<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-23 10:23:55
         compiled from "./templates/includes/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:710017874544ce9230bbbc7-84290681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23d02edc097dbd918438562cf36a6ac9cf146dc6' => 
    array (
      0 => './templates/includes/footer.tpl',
      1 => 1422004989,
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
<?php if ($_valid && !is_callable('content_544ce9230bd0c4_28214079')) {function content_544ce9230bd0c4_28214079($_smarty_tpl) {?>    <article id="oneway">
        <section class="wrapper" style="opacity: 0; padding-bottom: 100px;">

            <div class="doublemargin"></div>
            Programmiert und gestaltet von Michael Czechowski
            <div class="doublemargin"></div>
        </section>
    </article>
</div>
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
                fixedElements: {
                    fixedTop: ".header__band"
                }
            });
            $("#sidebar").mmenu().open();
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
