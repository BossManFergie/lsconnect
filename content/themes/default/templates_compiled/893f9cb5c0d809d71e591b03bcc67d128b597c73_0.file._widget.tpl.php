<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:54:20
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/_widget.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5937248c2b8144_28567146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '893f9cb5c0d809d71e591b03bcc67d128b597c73' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/_widget.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5937248c2b8144_28567146 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['widgets']->value) {?>
<!-- Widgets -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
?>
	<div class="panel panel-default panel-widget">
	    <div class="panel-heading">
	        <strong><?php echo $_smarty_tpl->tpl_vars['widget']->value['title'];?>
</strong>
	    </div>
	    <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['widget']->value['code'];?>
</div>
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<!-- Widgets -->
<?php }
}
}
