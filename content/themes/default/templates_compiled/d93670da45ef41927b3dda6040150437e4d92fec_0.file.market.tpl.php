<?php
/* Smarty version 3.1.31, created on 2017-06-06 22:00:50
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/market.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59372612567b06_04626481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd93670da45ef41927b3dda6040150437e4d92fec' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/market.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_59372612567b06_04626481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="market-header">
	<div class="container">
	    <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 <strong><?php echo __("Market");?>
</strong>
	    <div class="row mt20">
	    	<div class="col-sm-6 col-sm-offset-3">
	    		<form class="js_search-form" data-handle="market">
	    			<div class="input-group">
		    			<input name="query" type="text" class="form-control input-lg" placeholder='<?php echo __("Search for products");?>
'>
		    			<span class="input-group-btn">
		    				<button class="btn btn-lg btn-danger" type="submit"><?php echo __("Search");?>
</button>
		    			</span>
		    		</div>
	    		</form>
	    	</div>
	    </div>
    </div>
</div>

<div class="container offcanvas">
	<div class="row">

		<!-- left panel -->
		<div class="col-sm-3 offcanvas-sidebar">
			<div class="panel panel-default">
				<div class="panel-body with-nav">
					<ul class="side-nav">
						<li <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "search") {?>class="active"<?php }?>>
							<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market">
                                <?php echo __("All");?>

                            </a>
						</li>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
							<li <?php if ($_smarty_tpl->tpl_vars['view']->value == "category" && $_smarty_tpl->tpl_vars['category_id']->value == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>class="active"<?php }?>>
								<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
">
	                                <?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>

	                            </a>
							</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

					</ul>
				</div>
			</div>
		</div>
		<!-- left panel -->

		<!-- right panel -->
		<div class="col-sm-9 offcanvas-mainbar">

			<?php if ($_smarty_tpl->tpl_vars['view']->value == "search") {?>
				<div class="alert alert-warning">
					<!-- results counter -->
		            <strong class="text-primary"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</strong> 
		            <?php echo __("results were found for the search for");?>
 
		            <strong class="text-primary"><?php echo $_smarty_tpl->tpl_vars['query']->value;?>
</strong>
		            <!-- results counter -->
				</div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['view']->value == '' && $_smarty_tpl->tpl_vars['promoted_products']->value) {?>
				<h4 class="mt0 mb20"><?php echo __("Promoted Products");?>
</h4>
				<div class="row mb20" style="border-bottom: 1px solid #ddd">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promoted_products']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
						<div class="col-md-4 col-sm-6">
							<div class="thumbnail boosted">
								<div class="boosted-icon" data-toggle="tooltip" title="<?php echo __('Promoted');?>
">
					                <i class="fa fa-bullhorn"></i>
					            </div>
								<?php if ($_smarty_tpl->tpl_vars['post']->value['photos_num'] > 0) {?>
									<a class="thumbnail-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['source'];?>
);"></a>
								<?php } else { ?>
									<a class="thumbnail-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/blank_product.png');"></a>
								<?php }?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['post']->value['product']['name'];?>
</a>
								<div class="text" data-more="false" dir="auto"><?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
</div>
								<div class="thumbnail-footer">
									<div class="row">
										<div class="col-xs-5 price">
											<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['post']->value['product']['price'];?>

										</div>
										<div class="col-xs-7 info">
											<a class="btn btn-primary btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
												<i class="fa fa-info-circle"></i> <?php echo __("More info");?>

											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				</div>
            <?php }?>
			
			<div class="row">
				<?php if (count($_smarty_tpl->tpl_vars['rows']->value) > 0) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
						<div class="col-md-4 col-sm-6">
							<div class="thumbnail">
								<?php if ($_smarty_tpl->tpl_vars['post']->value['photos_num'] > 0) {?>
									<a class="thumbnail-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['source'];?>
);"></a>
								<?php } else { ?>
									<a class="thumbnail-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/blank_product.png');"></a>
								<?php }?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['post']->value['product']['name'];?>
</a>
								<div class="text" data-more="false" dir="auto"><?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
</div>
								<div class="thumbnail-footer">
									<div class="row">
										<div class="col-xs-5 price">
											<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['post']->value['product']['price'];?>

										</div>
										<div class="col-xs-7 info">
											<a class="btn btn-primary btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
												<i class="fa fa-info-circle"></i> <?php echo __("More info");?>

											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				<?php } else { ?>
					<p class="text-center text-muted">
						<?php echo __("No data available");?>

					</p>
				<?php }?>
			</div>

	        <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

		</div>
		<!-- right panel -->

	</div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
