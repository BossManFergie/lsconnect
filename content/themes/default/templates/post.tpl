{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
<div class="container mt20 offcanvas">
	<div class="row">

		<!-- side panel -->
        <div class="col-xs-12 visible-xs-block offcanvas-sidebar">
            {include file='_sidebar.tpl'}
        </div>
        <!-- side panel -->
		
        <div class="col-xs-12 offcanvas-mainbar">
        	<div class="row">
        		<!-- left panel -->
				<div class="col-sm-8">
				{include file='__feeds_post.tpl' standalone=true}
				</div>
				<!-- left panel -->

				<!-- right panel -->
				<div class="col-sm-4">
				{include file='_ads.tpl'}
				{include file='_widget.tpl'}
				</div>
				<!-- right panel -->
        	</div>
        </div>

	</div>
</div>
<!-- page content -->

{include file='_footer.tpl'}