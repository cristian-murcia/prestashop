<?php
/* Smarty version 3.1.33, created on 2020-08-12 13:11:55
  from 'C:\wamp64\www\prestashop\admin751ecrjcw\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f3430eba422c5_04831108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a82b033a731a701ebc3c7cf838d558d29e63a756' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin751ecrjcw\\themes\\default\\template\\content.tpl',
      1 => 1597102274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3430eba422c5_04831108 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
