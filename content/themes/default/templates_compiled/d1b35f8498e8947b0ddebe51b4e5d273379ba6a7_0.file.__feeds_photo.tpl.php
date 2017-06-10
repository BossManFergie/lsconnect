<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:56:47
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/__feeds_photo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5937251f90abc6_93617890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1b35f8498e8947b0ddebe51b4e5d273379ba6a7' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/__feeds_photo.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5937251f90abc6_93617890 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="<?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>col-xs-6 col-sm-4<?php } else { ?>col-xs-6 col-sm-2<?php }?>">
    <a class="pg_photo <?php if (!$_smarty_tpl->tpl_vars['_small']->value) {?>large<?php }?> js_lightbox" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
" data-context="<?php echo $_smarty_tpl->tpl_vars['_context']->value;?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
);">
    	<?php if ($_smarty_tpl->tpl_vars['_manage']->value) {?>
	    	<div class="pg_photo-btn">
	            <button type="button" class="close js_delete-photo" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
'>
	                <span aria-hidden="true">&times;</span>
	            </button>
	        </div>
        <?php }?>
    </a>
</div><?php }
}
