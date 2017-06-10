<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:53:27
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/_footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59372457a49ea7_44898725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc3105f4f04a1ea64e3feadd6311e1420f57fd0f' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/_footer.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_js_files.tpl' => 1,
    'file:_js_templates.tpl' => 1,
  ),
),false)) {
function content_59372457a49ea7_44898725 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- footer -->
<div class="container">
	<div class="row footer">
		<div class="col-lg-6 col-md-6 col-sm-6">
			&copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 · <span class="text-link" data-toggle="modal" data-url="#translator"><?php echo $_smarty_tpl->tpl_vars['system']->value['language']['title'];?>
</span>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 links">
			<?php if (count($_smarty_tpl->tpl_vars['static_pages']->value) > 0) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static_pages']->value, 'static_page', true);
$_smarty_tpl->tpl_vars['static_page']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['static_page']->value) {
$_smarty_tpl->tpl_vars['static_page']->iteration++;
$_smarty_tpl->tpl_vars['static_page']->last = $_smarty_tpl->tpl_vars['static_page']->iteration == $_smarty_tpl->tpl_vars['static_page']->total;
$__foreach_static_page_11_saved = $_smarty_tpl->tpl_vars['static_page'];
?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_url'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_title'];?>

					</a><?php if (!$_smarty_tpl->tpl_vars['static_page']->last) {?> · <?php }?>
				<?php
$_smarty_tpl->tpl_vars['static_page'] = $__foreach_static_page_11_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>
				 · 
				<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/contacts">
					<?php echo __("Contacts");?>

				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
				 · 
				<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory">
					<?php echo __("Directory");?>

				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
				 · 
				<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market">
					<?php echo __("Market");?>

				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['system']->value['system_public']) {?>
				 · 
				<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search">
					<?php echo __("Search");?>

				</a>
			<?php }?>
		</div>
	</div>
</div>
<!-- footer -->

</div>
<!-- main wrapper -->

<!-- Dependencies CSS [Twemoji-Awesome|Flag-Icon] -->
<?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/css/font-awesome/css/font-awesome.min.css">
<?php }?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/css/twemoji-awesome/twemoji-awesome.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/css/flag-icon/css/flag-icon.min.css">
<!-- Dependencies CSS [Twemoji-Awesome|Flag-Icon] -->

<!-- JS Files -->
<?php $_smarty_tpl->_subTemplateRender('file:_js_files.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- JS Files -->

<!-- JS Templates -->
<?php $_smarty_tpl->_subTemplateRender('file:_js_templates.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- JS Templates -->

<!-- Analytics Code -->
<?php if ($_smarty_tpl->tpl_vars['system']->value['analytics_code']) {
echo html_entity_decode($_smarty_tpl->tpl_vars['system']->value['analytics_code'],ENT_QUOTES);
}?>
<!-- Analytics Code -->

<?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
	<!-- Notification -->
	<audio id="notification_sound">
		<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/notification.mp3" type="audio/mpeg">
	</audio>
	<!-- Notification -->
	<!-- Chat -->
	<audio id="chat_sound">
		<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/chat.mp3" type="audio/mpeg">
	</audio>
	<!-- Chat -->
	<!-- Call -->
	<audio id="call_sound">
		<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/call.mp3" type="audio/mpeg">
	</audio>
	<!-- Call -->
	<!-- Video -->
	<audio id="video_sound">
		<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/video.mp3" type="audio/mpeg">
	</audio>
	<!-- Video -->
<?php }?>

</body>
</html><?php }
}
