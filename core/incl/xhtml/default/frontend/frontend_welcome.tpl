{extends file="master.tpl"}
{block "topleft"}{/block}
{block "menubar"}{/block}
{block "content_hello"}
<style type="text/css">
.jqvmap-zoomin, .jqvmap-zoomout {
	position:relative;
}
.jqvmap-zoomin {
	top:-560px;
	left:376px;	
}
.jqvmap-zoomout {
	left:408px;
	top:-576px;
}
</style>
	<section id="greeter" style="width:401px;">
		<div id="greeter-wrapper">
			<h1 class="dymaxionscript">{'title'|s}</h1>
			<h2 class="home-subtitle">&quot;{'tagline'|s}&quot;</h2>
		</div>
	</section>
	<section id="map-box">
		<div style="position:absolute;top:0px;background-position:center top;background-repeat:no-repeat;z-index:2" id="advert-back"></div>
		<div style="margin-left:50%;width:401px;">
			<div style="width:800px;margin-left:-401px;padding:0px;border-left:1px solid #333333;border-right:1px solid #333333;background:rgba(255,255,255,0.75);">
				<div id="vmap" style="position:static !important;width:800px;height:600px;"></div>
			</div>
		</div>
	</section>
	{if $is_search}
	<section>
		{foreach from=$page.stateitems item=stateitem}
		<div class="city-box">
			<a href="{'domain'|s}/state/{$stateitem.abbr}" class="light"><span class="city-title">{$stateitem.title}</span></a>
		</div>
		{/foreach}
	</section>
	{/if}
{/block}
{block "endscripts"}
{if !$is_search || 1==1}<script src="/_/js/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="/_/js/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery('#vmap').vectorMap({
    map: 'usa_en',
    backgroundColor: null,
    color: '#7f8efe',
    hoverColor: '#2233aa',
    selectedColor: '#00b7ea',
	borderColor: '#cccccc',
	borderWidth: 1,
	borderOpacity: 0.85,
    enableZoom: false,
    showTooltip: true,
    selectedRegion: null,
	onRegionClick: function(element, code, region)
    {
        $('body').append($('<form>').attr('method',"GET").attr('id','link-'+code).attr('action','{'domain'|s}/state/' + code + '/'));
		$('#link-'+code).append($("#srcinput")).submit();
    }
});
</script>{/if}
{/block}