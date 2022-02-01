{extends file="master.tpl"}
{block "head_end"}
<link rel="stylesheet" href="/_/metro/css/locale.css" type="text/css">
{/block}
{block "bodyclass"}state_{$page.state.name}{/block}
{block "content"}
<div class="container" id="main-container">
<a name="map" id="map_a" style="display:block;width:0;height:0;position:absolute;top:-100px;"></a>
<style type="text/css">
{literal}#label-state { {/literal}
{if ($page.state.labelmargins) != ''}
	margin:{$page.state.labelmargins};
{/if}{if ($page.state.labelwidth) != ''}
	width:{$page.state.labelwidth};
{/if} 
{literal}}{/literal}
{if ($page.state.custommargin) != ''}
{literal}div#vmap {{/literal}
	margin:{$page.state.custommargin};
{literal}}{/literal}
{/if}
{if ($page.state.customheight) != ''}
{literal}div#vmap {{/literal}
	min-height:{$page.state.customheight} !important;
	height:auto
{literal}}{/literal}
{/if}
</style>
<section id="us-map-state">
	<span id="label-state" class="hidden-xs">{$page.state.title}</span>
	<div id="vmap"></div>
</section>
{include "ads-four-square.tpl"}
{if ('usemetros'|s) == 1 && $page.metrocount != 0}<div class="container"><p class="h3">{'by area'|l}</p>
{foreach from=$page.metros item=metro}
<div class="col-xs-12 col-sm-6 col-lg-2 col-md-3 loctile"><a href="{'domain'|s}/region/{$metro.name}">{$metro.title}</a></div>
{/foreach}
</div>
{/if}
<div class="container">
<p class="h3">{'by county'|l}</p>
{foreach from=$page.counties item=county}
<div class="col-xs-12 col-sm-6 col-lg-2 col-md-3 loctile"><a href="{'domain'|s}/state/{$page.state.abbr}/county/{$county.name}">{$county.title}</a></div>
{/foreach}
</div><!-- End #main-container -->
{/block}
{block "endscripts"}
<style type="text/css">
#main-container{ background:rgba(255,255,255,0.85) }
#us-map-state { background:#fff;margin:-15px -15px 0;padding:15px }
</style>
<script src="/_/js/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="/_/js/jqvmap/maps/united-states/jquery.vmap.{$page.state.name}.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery('#vmap').vectorMap({
    map: '{$page.state.name}',
    backgroundColor: null,
    color: '#7f8efe',
    hoverColor: '#2233aa',
    selectedColor: '#00b7ea',
	borderColor: '#ffffff',
	borderWidth: 1,
	borderOpacity: 0.65,
    enableZoom: false,
    showTooltip: true,
    selectedRegion: null,
	onRegionClick: function(element, code, region)
    {
        $('body').append($('<form>').attr('method',"GET").attr('id','link-'+code).attr('action','{'domain'|s}/state/{$page.state.abbr}/county/' + code));
		$('#link-'+code).submit();
    }
});
</script>
{/block}
