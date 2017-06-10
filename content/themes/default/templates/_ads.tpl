{if $ads}
<!-- Ads -->
{foreach $ads as $ads_unit}
	<div class="panel panel-default panel-widget">
	    <div class="panel-heading">
	        <strong>{__("Sponsored")}</strong>
	    </div>
	    <div class="panel-body">{$ads_unit['code']}</div>
	</div>
{/foreach}
<!-- Ads -->
{/if}