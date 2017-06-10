<?php
/* Smarty version 3.1.31, created on 2017-06-06 22:58:54
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/ajax.lightbox.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593733ae66d019_26368177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1004d72d05408b6c5496caa4ef174aa41d872420' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/ajax.lightbox.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.comments.tpl' => 1,
    'file:__feeds_photo.comments.tpl' => 1,
  ),
),false)) {
function content_593733ae66d019_26368177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('post', $_smarty_tpl->tpl_vars['photo']->value['post']);
?>

<div class="lightbox-post" <?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {?> data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" <?php } else { ?> data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" <?php }?>>
	<div class="js_scroller js_scroller-lightbox" data-slimScroll-height="100%">
		<div class="post-body">
			<div class="mb10 post-header">
				<!-- post picture -->
				<div class="post-avatar">
					<a class="post-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_picture'];?>
);">
                    </a>
				</div>
				<!-- post picture -->

				<!-- post meta -->
				<div class="post-meta">
					<!-- post author name & menu -->
					<div>
                        <!-- post author name -->
						<span class="js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['post']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['post']->value['user_id'];?>
">
							<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_name'];?>
</a>
						</span>
						<!-- post author name -->
					</div>
					<!-- post author name & menu -->

					<!-- post time & location & privacy -->
					<div class="post-time">
						<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
</a>

						<?php if ($_smarty_tpl->tpl_vars['post']->value['location']) {?>
						·
						<i class="fa fa-map-marker"></i> <span><?php echo $_smarty_tpl->tpl_vars['post']->value['location'];?>
</span>
						<?php }?>

						- 
						<?php if ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "me") {?>
                            <i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
: <?php echo __("Only Me");?>
'></i>
                        <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "friends") {?>
                            <i class="fa fa-users" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
: <?php echo __("Friends");?>
'></i>
                        <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "public") {?>
                            <i class="fa fa-globe" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
: <?php echo __("Public");?>
'></i>
                        <?php }?>
					</div>
					<!-- post time & location & privacy -->
				</div>
				<!-- post meta -->
			</div>
			<!-- post header -->
			
			<!-- post actions -->
            <div class="post-actions">
                <?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['photo']->value['i_like']) {?>
                        <span class="text-link js_unlike-post"><?php echo __("Unlike");?>
</span> - 
                    <?php } else { ?>
                        <span class="text-link js_like-post"><?php echo __("Like");?>
</span> - 
                    <?php }?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['photo']->value['i_like']) {?>
                        <span class="text-link js_unlike-photo"><?php echo __("Unlike");?>
</span> - 
                    <?php } else { ?>
                        <span class="text-link js_like-photo"><?php echo __("Like");?>
</span> - 
                    <?php }?>
                <?php }?>
                <span class="text-link js_comment"><?php echo __("Comment");?>
</span>
            </div>
            <!-- post actions -->

		</div>
		
		<!-- post footer -->
		<div class="post-footer">
            <?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {?>
                <!-- post stats -->
                <div class="post-stats <?php ob_start();
echo $_smarty_tpl->tpl_vars['post']->value['likes'];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == 0) {?>x-hidden<?php }?>">
                    <!-- likes -->
                    <span class="js_post-likes <?php ob_start();
echo $_smarty_tpl->tpl_vars['post']->value['likes'];
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 == 0) {?>x-hidden<?php }?>">
                        <i class="fa fa-thumbs-o-up"></i> <span class="text-link" data-toggle="modal" data-url="posts/who_likes.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
"><span class="js_post-likes-num"><?php echo $_smarty_tpl->tpl_vars['post']->value['likes'];?>
</span> <?php echo __("people");?>
</span> <?php echo __("like this");?>

                    </span>
                    <!-- likes -->
                </div>
                <!-- post stats -->

                <!-- comments -->
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- comments -->
            <?php } else { ?>
                <!-- post stats -->
                <div class="post-stats <?php ob_start();
echo $_smarty_tpl->tpl_vars['photo']->value['likes'];
$_prefixVariable3=ob_get_clean();
if ($_prefixVariable3 == 0) {?>x-hidden<?php }?>">
                    <!-- likes -->
                    <span class="js_post-likes <?php if ($_smarty_tpl->tpl_vars['photo']->value['likes']) {?> == 0}x-hidden<?php }?>">
                        <i class="fa fa-thumbs-o-up"></i> <span class="text-link" data-toggle="modal" data-url="posts/who_likes.php?photo_id=<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
"><span class="js_post-likes-num"><?php echo $_smarty_tpl->tpl_vars['photo']->value['likes'];?>
</span> <?php echo __("people");?>
</span> <?php echo __("like this");?>

                    </span>
                    <!-- likes -->
                </div>
                <!-- post stats -->

                <!-- comments -->
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- comments -->
            <?php }?>
        </div>
		<!-- post footer -->

	</div>
</div><?php }
}
