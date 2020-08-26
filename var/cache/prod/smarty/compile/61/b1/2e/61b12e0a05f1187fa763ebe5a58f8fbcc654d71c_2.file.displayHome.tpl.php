<?php
/* Smarty version 3.1.33, created on 2020-08-26 01:16:50
  from 'C:\wamp64\www\prestashop\modules\gradi\views\templates\hook\displayHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f45fe522e40a5_95240316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61b12e0a05f1187fa763ebe5a58f8fbcc654d71c' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\gradi\\views\\templates\\hook\\displayHome.tpl',
      1 => 1597279961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f45fe522e40a5_95240316 (Smarty_Internal_Template $_smarty_tpl) {
?>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <?php if ($_smarty_tpl->tpl_vars['banners']->value != null) {?>
        <div class="container container-obj">
            <div id="myCarousel" class="carousel slide slide-obj" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner', false, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value => $_smarty_tpl->tpl_vars['banner']->value) {
?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['b']->value == 0) {?>active<?php }?>"></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner', false, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value => $_smarty_tpl->tpl_vars['banner']->value) {
?>
                        <div class="item <?php if ($_smarty_tpl->tpl_vars['b']->value == 0) {?>active<?php }?>">
                            <img id="img-obj" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['label'], ENT_QUOTES, 'UTF-8');?>
">

                            <div class="carousel-caption">
                                <h3 id="title-obj"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h3>
                                <p  id="description-obj"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
                                <a  id="url-obj" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['url'], ENT_QUOTES, 'UTF-8');?>
" >¡A por ello tio!</a>
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
    <?php }?>
</body>
<?php }
}
