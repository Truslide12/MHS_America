{extends "profile-master.tpl"}
{block "headerinclude"}
{if $page.slides}<link rel="stylesheet" href="/_/css/nivo-slider.css" type="text/css" media="screen">
<link rel="stylesheet" href="/_/css/themes/default/default.css" type="text/css" media="screen">{/if}
<style type="text/css">{literal}
body {padding-top:42px;}
div#content {width:auto;background:none;border:0;}
section#us-county {background:none;}
footer .wrapper {width:790px;margin:0 auto;}
#submenu {display:none;}
div#content>footer{border-top:4px solid #fff;margin-top:-4px;position:relative;z-index:1;background:#141414}
div#content>footer ul>li>a{color:#999}
div#content>footer ul>li>a:hover{color:#fff;background:0 0}
#parallax{max-width:none;max-height:none;min-width:100%;min-height:100%}
.dotgrid{position:absolute;top:0;left:0;right:0;bottom:2px;background:url(/_/images/patterns/dot-grid-3.png) top left repeat;z-index:20}
#home-info{position:absolute;width:25%;top:2em;right:2em}
#home-buttons{position:absolute;top:1.625em;left:1.5em;font-size:120%;border:1px solid #000;border-left:0;background:#fff;padding:2em 1em 2em 2em}
#home-buttons a{margin:auto 1.5em 0 0;line-height:2.25em;padding:0 1em}
#home-buttons span{line-height:2.625em;padding-right:1em;color:#999;font-size:90%}
#home-info div.box{border:1px solid #000;background:#fff;padding:1em;line-height:1.5;margin:0 0 1.5em}
#home-info h1,#home-info h2,#home-info h3{font-weight:400}
#home-info h1{font-size:200%}
#home-info h2{font-size:120%;margin:0 0 .625em}
#home-info h3{color:#de0000;font-size:200%;padding:.325em 0 0}
#home-info p{line-height:1.625em}
#home-info a{color:#545454;text-decoration:none}
#home-info a:hover{text-decoration:underline}
#slideshow {width:50%;position:absolute;top:14%;left:2em;overflow:hidden;padding:1em;background:#fff;}
{/literal}</style>
{/block}
{block "endscripts"}
{if $page.slides}<script type="text/javascript" src="/_/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider({ controlNav: false, pauseOnHover: false });
	});
</script>{/if}
{/block}
{block "content"}
<div style="position:relative;z-index:-1;">
	{if $page.slides}
	<section id="parallax">
	<div class="slider-wrapper theme-default">
		<div id="slider" class="nivoSlider">
			{foreach from=$page.slides item=slide}<img src="{$slide.image}" data-thumb="{$slide.image}" alt="" title="{$slide.title}" />{/foreach}
		</div>
	</div>
</section><div class="dotgrid full"></div>
	{elseif $page.home.image_backdrop}<img src="{$page.home.image_backdrop}" id="parallax">
	<div class="dotgrid full"></div>{/if}
</div>
<section id="home-buttons">
	<a href="/home/{$page.home.id}/contact" class="zocial primary kudos l">Contact Seller</a>
	{if $page.watched}
	<a href="/home/{$page.home.id}/unwatch" class="zocial primary follow-red l">Unwatch Home</a>
	{else}
	<a href="/home/{$page.home.id}/watch" class="zocial primary follow l">Watch Home</a>
	{/if}
	<span>{if $page.watchers == 0}Nobody watching :){else}{$page.watchers} watching{/if}</span>
</section>
<section id="home-info">
<div class="box">
	<h1>{$page.home.beds} Bedroom &middot; {$page.home.baths} Bath</h1>
	<h2 class="l"><a href="/{$page.community.profile.id}/{$page.community.profile.username}">{$page.community.title}</a></h2><a href="{'domain'|s}/locale/{$page.state.abbr}/{$page.county.name}/{$page.city.name}" class="l"style="display:block;padding:0.325em 1em;">{$page.city.title}, {$page.state.abbr|strtoupper}</a>
	<div class="clearfix"></div>
	<p>
	{$page.home.description}
	</p>
	<div class="clearfix"></div>
	<h3 class="red">{$page.home.price|showprice}</h3>
</div>
{if $page.home.image_floorplan}<div class="box">
	<a href="#"><img src="{$page.home.image_floorplan}"></a>
</div>{/if}
<div class="box">
	
	<h2>Home Specifications</h2>
	<p>Year / Brand: {$page.home.year} {$page.home.brand}</p>
	<p>Dimensions: {$page.home.width}&times;{$page.home.length}</p>
	{if $page.home.model}<p>Model #: {$page.home.model}</p>{/if}
	<p>Serial #: {$page.home.serial}</p>
</div>
</section>
{/block}