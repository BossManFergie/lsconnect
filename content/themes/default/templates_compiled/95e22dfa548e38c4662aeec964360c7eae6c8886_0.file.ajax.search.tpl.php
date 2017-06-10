<?php
/* Smarty version 3.1.31, created on 2017-06-06 22:20:12
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/ajax.search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59372a9c9d3676_25439279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95e22dfa548e38c4662aeec964360c7eae6c8886' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/ajax.search.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
  ),
),false)) {
function content_59372a9c9d3676_25439279 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="js_scroller">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['result']->value['type'] == "user") {?>
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_user'=>$_smarty_tpl->tpl_vars['result']->value,'_connection'=>$_smarty_tpl->tpl_vars['result']->value['connection']), 0, true);
?>

            
            <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type'] == "page") {?>
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_page'=>$_smarty_tpl->tpl_vars['result']->value), 0, true);
?>

            
            <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type'] == "group") {?>
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_group'=>$_smarty_tpl->tpl_vars['result']->value), 0, true);
?>


            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </ul>
</div><?php }
}
