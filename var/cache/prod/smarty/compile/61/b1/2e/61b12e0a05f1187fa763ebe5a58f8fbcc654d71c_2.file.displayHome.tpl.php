<?php
/* Smarty version 3.1.33, created on 2020-08-12 14:21:13
  from 'C:\wamp64\www\prestashop\modules\gradi\views\templates\hook\displayHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f34412918a056_26385810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61b12e0a05f1187fa763ebe5a58f8fbcc654d71c' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\gradi\\views\\templates\\hook\\displayHome.tpl',
      1 => 1597254847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f34412918a056_26385810 (Smarty_Internal_Template $_smarty_tpl) {
?>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>

    <div class="container">
        <h2>Carousel Example</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['id_GradiAdsense'], ENT_QUOTES, 'UTF-8');?>
" class="active"></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
?>
                    <div class="item active">
                        
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="Los Angeles" style="width:100%; height: 100%;">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>LA is always so much fun!</p>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</body>
<?php }
}
