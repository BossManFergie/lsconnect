<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:54:20
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/__feeds_post.comments.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5937248c267b92_90416047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08d1cf0c6903672d50da515cfbf133def9563fd0' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/__feeds_post.comments.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.comment.tpl' => 1,
    'file:__feeds_post.comment_form.tpl' => 1,
  ),
),false)) {
function content_5937248c267b92_90416047 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="post-comments">

    <!-- previous comments -->
    <?php if ($_smarty_tpl->tpl_vars['post']->value['comments'] >= $_smarty_tpl->tpl_vars['system']->value['min_results']) {?>
    <div class="pb10 js_see-more" data-get="post_comments" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" data-remove="true">
        <span class="text-link">
            <i class="fa fa-comment-o"></i>
            <?php echo __("View previous comments");?>

        </span>
        <div class="loader loader_small x-hidden"></div>
    </div>
    <?php }?>
    <!-- previous comments -->

    <!-- comments -->
    <ul>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['comments'] > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['post_comments'], 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        <?php }?>
    </ul>
    <!-- comments -->

    <!-- post a comment -->
    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.comment_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>'post','_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id']), 0, false);
?>

    <!-- post a comment -->
    
</div><?php }
}
