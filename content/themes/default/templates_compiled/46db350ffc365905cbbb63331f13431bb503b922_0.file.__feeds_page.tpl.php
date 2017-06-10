<?php
/* Smarty version 3.1.31, created on 2017-06-06 22:27:33
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/__feeds_page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59372c55c9fcf9_77498671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46db350ffc365905cbbb63331f13431bb503b922' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/__feeds_page.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59372c55c9fcf9_77498671 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_parent']->value == "profile") {?><li class="col-sm-12 col-md-6"><div class="box-container"><?php } else { ?><li class="feeds-item"><?php }?>
    <div class="data-container">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];?>
">
            <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
">
        </a>
        <div class="data-content">
            <div class="pull-right flip">
                <?php if ($_smarty_tpl->tpl_vars['_page']->value['i_like']) {?>
                <button type="button" class="btn btn-default js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
">
                    <i class="fa fa-thumbs-o-up"></i>
                    <?php echo __("Unlike");?>

                </button>
                <?php } else { ?>
                <button type="button" class="btn btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
">
                    <i class="fa fa-thumbs-o-up"></i>
                    <?php echo __("Like");?>

                </button>
                <?php }?>
            </div>
            <div>
                <span class="name js_user-popover" data-uid="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
" data-type="page">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
</a>
                </span>
                <?php if ($_smarty_tpl->tpl_vars['_page']->value['page_verified']) {?>
                <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                <?php }?>
                <div><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_likes'];?>
 <?php echo __("Likes");?>
</div>
            </div>
        </div>
    </div>
<?php if ($_smarty_tpl->tpl_vars['_parent']->value == "profile") {?></div></li><?php } else { ?></li><?php }
}
}
