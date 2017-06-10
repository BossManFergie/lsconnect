<?php
/* Smarty version 3.1.31, created on 2017-06-06 22:47:55
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/ajax.live.requests.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5937311be2fdc7_40154354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24a73e5aa08a196c53cedb2ec925f0993ee8b76a' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/ajax.live.requests.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
  ),
),false)) {
function content_5937311be2fdc7_40154354 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['requests']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"request"), 0, true);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
