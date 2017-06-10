<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:54:20
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/__feeds_post.comment_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5937248c297372_91324973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b4b9a25370bb175b8d10226fff133a7f2032f9c' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/__feeds_post.comment_form.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_emoji-menu.tpl' => 1,
  ),
),false)) {
function content_5937248c297372_91324973 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
    <div class="comment" data-handle="<?php echo $_smarty_tpl->tpl_vars['_handle']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
">
        <div class="comment-avatar">
            <a class="comment-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
);">
                </a>
        </div>
        <div class="comment-data">
            <div class="x-form comment-form">
                <textarea dir="auto" class="js_autosize js_mention js_post-comment" rows="1" placeholder='<?php echo __("Write a comment");?>
'></textarea>
                <div class="x-form-tools">
                    <div class="x-form-tools-attach">
                        <i class="fa fa-camera js_x-uploader" data-handle="comment"></i>
                    </div>
                    <div class="x-form-tools-emoji js_emoji-menu-toggle">
                        <i class="fa fa-smile-o fa-lg"></i>
                    </div>
                    <?php $_smarty_tpl->_subTemplateRender('file:_emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
            </div>
            <div class="comment-attachments attachments clearfix x-hidden">
                <ul>
                    <li class="loading">
                        <div class="loader loader_small"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php }
}
}
