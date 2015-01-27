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
    '157f45fd78ca2060b0c99d15ce53fac6947667ee' => 
    array (
      0 => './templates/includes/header.tpl',
      1 => 1414316340,
      2 => 'file',
    ),
    '23d02edc097dbd918438562cf36a6ac9cf146dc6' => 
    array (
      0 => './templates/includes/footer.tpl',
      1 => 1414316357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1218301346544cc1a92ca354-19992244',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544ce83f4eed25_25315608',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544ce83f4eed25_25315608')) {function content_544ce83f4eed25_25315608($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="de">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/GGS.css"/>
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="assets/css/styles.css"/>
    <!-- JS -->
    <script src="assets/js/GGS.js"></script>
    <script src="assets/js/jquery-2.1.1.min.js"></script>
    <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
    <script src="assets/js/scripts.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <div class="wrapper">
        <h1>Mein Vokabeltrainer</h1>

        <h2>
            Türkisch A1 &raquo; 1x gelernt
        </h2>
        <div class="doublemargin"></div>
    </div>
</header>

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

</body>
</html>
<?php }} ?>
