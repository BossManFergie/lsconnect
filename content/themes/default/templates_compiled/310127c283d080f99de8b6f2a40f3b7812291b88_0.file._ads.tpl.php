<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:54:20
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/_ads.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5937248c2a97d6_46855906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '310127c283d080f99de8b6f2a40f3b7812291b88' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/_ads.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5937248c2a97d6_46855906 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ads']->value) {?>
<!-- Ads -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ads']->value, 'ads_unit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ads_unit']->value) {
?>
	<div class="panel panel-default panel-widget">
	    <div class="panel-heading">
	        <strong><?php echo __("Sponsored");?>
</strong>
	    </div>
	    <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['ads_unit']->value['code'];?>
</div>
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<!-- Ads -->
<?php }
}
}
