<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>{block name="title"}{if $page.title}{$page.title} :: {/if}{'title'|s}{/block}</title>

	<meta name="title" content="{'title'|s} - {$page.meta_title}">
	<meta name="description" content="{$page.meta_description}The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="{$page.meta_keywords}">
	<meta name="google-site-verification" content="{'google_site_verification'|s}">
	<meta name="author" content="{'title'|s}">
	<meta name="Copyright" content="Copyright &copy; {$yr} {'author'|s}. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<link rel="schema.DC" href="http://purl.org/dc/terms/">
	<meta name="DC.title" content="{'title'|s}{if $page.title} - {$page.title}{/if}">
	<meta name="DC.subject" content="{'dublin_subject'|p}">
	<meta name="DC.creator" content="{'dublin_creator'|p}">
	<meta name="viewport" content="width=device-width">
	<!--  Mobile Viewport Fix
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
	-->
	<!-- Uncomment to use; use thoughtfully!
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->

	<link rel="shortcut icon" href="/_/img/favicon.ico">
	<link rel="apple-touch-icon" href="/_/img/apple-touch-icon.png">
	<link href='//fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/_/css/style.css">
	<link rel="stylesheet" href="/_/kendo/styles/kendo.common.min.css">
    <link rel="stylesheet" href="/_/kendo/styles/kendo.default.min.css">
	<link rel="stylesheet" type="text/css" href="/_/css/zocial.css">
	<link rel="stylesheet" type="text/css" media="screen" href="/_/js/jqvmap/jqvmap.css">
	{if ('user_name'|u) == "keystroke" && 1 == 2}
	<link rel="stylesheet" href="/_/css/keystroke.css" type="text/css">
	{/if}
	{block "headerincludes"}{/block}
	<script src="/_/js/{if $page.jquery}{$page.jquery}{else}jquery-1.10.2.min.js{/if}"></script>
    {block "jquery_kendo"}<script src="/_/kendo/js/kendo.web.min.js"></script>{/block}
	<script src="/_/js/modernizr-1.7.min.js"></script>
	{block "jquery_extras"}{/block}
	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	{block "headerinclude"}{/block}
</head>

<body itemscope itemtype="http://schema.org/WebPage" class="{$bodyclasses}">

<div class="wrapper">
	<header>
		{block "topleft"}<h1 class="dymaxionscript">{block "homeoverride"}<a href="/" title="To the front page">{'title'|s}</a>{/block}</h1>{/block}
		<nav>
			<ul>
				{block "pagedir"}<li id="page-direction">Select your state from the map below:</li>{/block}
				{block "menubar"}
				<li{if $category == "communities" || $category == ""} class="active"{/if}><a href="/{$langprefix}{'hierarchy'|p}{if $category != "communities"}communities{/if}" rel="spaces">{'communities'|l}</a></li>
				{if 1==2}
				<li{if $category == "spaces"} class="active"{/if}><a href="/{$langprefix}{'hierarchy'|p}{if $category != "spaces"}spaces{/if}" rel="spaces">{'spaces'|l}</a></li>
				<li{if $category == "homes"} class="active"{/if}><a href="/{$langprefix}{'hierarchy'|p}{if $category != "homes"}homes{/if}" rel="homes" aria-haspopup="true">{'homes'|l}</a>
					<ul>
						<li><a href="/{$langprefix}{'hierarchy'|p}homes/for-sale" rel="for-sales">{'for sale'|l}</a></li>
					</ul>
				</li>
				{/if}
				<li{if $category == "pros"} class="active"{/if}><a href="/{$langprefix}{'hierarchy'|p}{if $category != "pros"}pros{/if}" aria-haspopup="true">{'professionals'|l}</a>
					{if 1==2}
					<ul>
						<li><a href="/{$langprefix}{'hierarchy'|p}pros/dealers" rel="dealers">{'dealers'|l}</a></li>
						<li><a href="/{$langprefix}{'hierarchy'|p}pros/agents" rel="agents">{'licensed agents'|l}</a></li>
						<li class="end"></li>
						<li><a href="/{$langprefix}{'hierarchy'|p}pros/inspectors" rel="inspectors">{'safety inspectors'|l}</a></li>
						<li><a href="/{$langprefix}{'hierarchy'|p}pros/builders" rel="builders">{'builders'|l}</a></li>
						<li><a href="/{$langprefix}{'hierarchy'|p}pros/transporters" rel="transporters">{'transporters'|l}</a></li>
					</ul>
					{/if}
				</li>
				<li class="end"></li>
				{/block}
				{if $isUserLoggedIn}
				<li class="right{if $category == "account"} active{/if}"><a class="dashie" href="/{$langprefix}account"><span class="r"><img src="{'email'|u|get_gravatar:32}&d=mm"></span><span style="line-height:2.5;padding:0 1em 0 0;">{if ('user_name'|u) == "keystroke"}Greetings, Master {/if}{'display_name'|u}</span></a>
				<div class="drop">
					<div class="account-box">
						<span class="r"><img src="{'email'|u|get_gravatar:32}&d=mm"></span>
						<h2><strong><span>{'display_name'|u}</span></strong></h2>
						<ul class="action-list">
							<li><a href="/account">Dashboard</a></li>
							<li><a href="/account/settings">Settings</a></li>
							{if $page.useritems}
							{foreach from=$page.useritems item=opt}
							{if $opt[0] == 'separator'}<li><hr></li>{elseif $opt[0] == 'title'}<li><strong>{$opt[1]}</strong></li>{else}<li><a href="{$opt[0]}">{$opt[1]}</a></li>{/if}
							{/foreach}
							{/if}
							<li><hr></li>
							<li><a href="/account/logout">Log out</a></li>
						</ul>
					</div>
				</div></li>
				{elseif 1==2}
				<li class="right{if $category == "login"} active{/if}"><a href="/{$langprefix}account/login">{'log in'|l} / {'register'|l}</a>
				<div class="drop">
					<div class="account-box guest-box">
						<h2><strong><span>{'log in'|l}</span></strong></h2>
						<form action="/account/login" method="POST">
						<input type="hidden" name="rqst" value="global">
						<p><input type="text" name="username" placeholder="Username" onkeydown="if (event.keyCode == 13) $('#loginSubmit').click();"></p>
						<p><input type="password" name="password" placeholder="Password" onkeydown="if (event.keyCode == 13) $('#loginSubmit').click();"></p>
						<a href="{'domain'|s}/account/register" class="zocial secondary r">New Account</a> <a href="#" class="zocial primary" onclick="$('#loginSubmit').click();">Login</a><input type="submit" id="loginSubmit" style="display:none;" value="Login">
						</form>
					</div>
				</div></li>
				{/if}
			</ul>
		</nav>{literal}
		<script type="text/javascript">
			$(document).ready(function(){
				$("nav ul li a").click(function(){
					if($(this).attr("rel")) {
						$("#srcinput").val($(this).attr("rel"));
						$("nav ul li").removeClass("active");
						$(this).parent().addClass("active");
					}
				});
			});
		</script>{/literal}
	</header>

	<div id="submenu"></div>
	{if $page.canvas}<style type="text/css">
		div#submenu { border-color:#545454; }
	</style><img src="/_/images/backdrops/{$page.canvas.file}" alt="" id="pagecanvas"{if $page.canvas.heightstretch == 1} style="height:100%;width:auto;max-width:none;min-width:100%;"{/if}>{/if}
{if $page.advert == true}<aside class="advertisement" id="backdrop"><a href="{$page.backdrop.url}"><img src="{$page.backdrop.image}"/></a>{/if}</div>
<div id="content">
{if $page.advert == true}<span class="ad-notice{if $page.canvas.blacknotices == 1} black{/if}" id="advertisement-notice-right">Sponsored Ad</span><span class="ad-notice{if $page.canvas.blacknotices == 1} black{/if}" id="advertisement-notice">Sponsored Ad</span>
{/if}{block "content"}
<style type="text/css">
div#vmap {
margin:0 !important;
min-height:600px !important;
}
#vmap > svg {
height:600px !important;
}
</style>
	<section id="greeter">
		<div id="greeter-wrapper">
			<h1 class="dymaxionscript"><img src="/_/images/elias/mhs-logo.png">{'title'|s}</h1><sup>BETA</sup>
			<h2 class="home-subtitle">&quot;{'tagline'|s}&quot;</h2>
			{if 1==2}
			<aside id="search-form">
				<div>
					<p>{'select location'|l}:</p>
					<form action="/search" method="POST">
						<input type="hidden" name="searchtype" value="0-0">
						<input type="text" name="query" value="" placeholder="Enter a city..." class="search"> 
						California 
						<input type="submit" value="Search" class="search-btn">
					</form>
				</div>
			</aside>
			{/if}
		</div>
	</section>
	<section id="map-box">
		<div id="vmap" style="width:98%;height:500px;padding:1%;min-height:500px !important;"></div>
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
	<section class="container">
		<header><h1>News</h1></header>
		{foreach from=$page.news item=article}
			<aside>
			
				<h2>{$article.fancydate}</h2>
			
			</aside>
			<article>
				
				<h1>{$article.title}</h1>

				<p>{$article.summary}</p>

				<footer><a href="/news/{$article.id}" class="zocial secondary">Read more</a></footer>
			
			</article>
		{foreachelse}
			<div>
				<h1>No news is good news?</h1>
			</div>
		{/foreach}
	</section>
<div class="clearfix"></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
{/block}
	<footer><form action="/contactmail.php" method="GET">
		<div class="wrapper">
			<div class="grid">
				{if 1==2}<div class="g3">
					<h3 class="padded">{'navigation'|l}</h3>
					<ul>
						<li><a href="/{$langprefix}">Homepage</a></li>
						<li><a href="/{$langprefix}{'hierarchy'|p}spaces">{'spaces'|l}</a></li>
						<li><a href="/{$langprefix}{'hierarchy'|p}homes">{'homes'|l}</a></li>
						<li><a href="/{$langprefix}{'hierarchy'|p}pros">{'professionals'|l}</a></li>
					</ul>
				</div>{/if}
				<div class="g6">
					<h3 class="padded">{if 1==2 || $isUserLoggedIn}{'my account'|l}{/if}</h3>
					{if $isUserLoggedIn}<div class="account-box">
						<span style="float:right;margin:-0.4em;"><img src="http://gravatar.com/avatar/{'email'|u|md5}?s=40&d=mm"></span>
						<strong>Logged in as <span>{'display_name'|u}</span></strong><br/>
						<a href="/{$langprefix}account">Go to Dashboard</a> | <a href="/{$langprefix}account/logout">Log out</a>
					</div>{elseif 1==2}<ul>
						<li class="lifloat"><a href="/{$langprefix}account/login">{'log in'|l}</a></li>
						<li class="lifloat">- or -</li>
						<li class="lishift"><a href="/{$langprefix}account/register">{'register'|l}</a></li>
					</ul>{/if}
				</div>
				<div class="g6 ticker">
					{if ('footerticker'|s) == 1}<h3 class="padded"><kbd>234</kbd> Communities</h3>
					<h3><kbd>3,442</kbd> Spaces</h3>
					<h3><kbd>453</kbd> Homes</h3>
					<h3><kbd>1,203</kbd> Professionals</h3>{else}
					<h3 id="slogan">Finding spaces for mobile home buyers<br>Filling spaces for mobile home park owners</h3>
					<!-- Thanks Jimmy! -->
					{/if}
				</div>
				<div class="clearfix"></div>
				<div class="g3"><hr><h3>Company</h3>
					<ul>
						<li><a href="/{$langprefix}news">News</a></li>
						<li><a href="/{$langprefix}about">About Us</a></li>
						<li><a href="/{$langprefix}contact">Contact</a></li>
					</ul>
				</div>
				<div class="g3"><hr><h3>Legal</h3>
					<ul>
						<li><a href="/{$langprefix}privacy">Privacy Policy</a></li>
						<li><a href="/{$langprefix}legal">Terms of Use</a></li>
					</ul>
				</div>
				<div class="g3"><hr><h3>Community</h3>
					<ul>
						<li><a href="/{$langprefix}ideas">Ideas and Suggestions</a></li>
						<li><a href="/{$langprefix}discuss">Discussions</a></li>
						<li><a href="/{$langprefix}connected">Connected</a></li>
					</ul>
				</div>
				<div class="g3"><hr><h3>&middot; &middot; &middot;</h3><p><small>{if $page.canvas.credit}<span style="font-style:italic;">Background image by {if $page.canvas.link && !$page.canvas.courtesy}<a href="{$page.canvas.link}" target="_blank" rel="noindex,nofollow">{/if}{$page.canvas.credit}{if $page.canvas.link && !$page.canvas.courtesy}</a>{/if}{if $page.canvas.courtesy}<br>Courtesy of {if $page.canvas.link}<a href="{$page.canvas.link}" target="_blank" rel="noindex,nofollow">{/if}{$page.canvas.courtesy}{if $page.canvas.link}</a>{/if}{/if}.</span><br>{/if}{'copyright'|l} &copy; {$yr} {'author'|s}.<br>{'allrightsreserved'|l}.</small></p></div>
				<div class="clearfix"></div>
				&nbsp;<br>&nbsp;
			</div>
		</div>
		</form>
	</footer>

</div>
	<div class="clearfix"></div>	
</div>
<!-- Javascript -->
{block "jquerybottom"}{/block}
{block "endscripts"}
<script src="/_/js/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
<script src="/_/js/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script> 
<script type="text/javascript">
jQuery('#vmap').vectorMap({
    map: 'usa_en',
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
        $('body').append($('<form>').attr('method',"GET").attr('id','link-'+code).attr('action','{'domain'|s}/state/' + code));
		$('#link-'+code).submit();
    }
});
</script>
{/block}
{if $page.pragpage == "state"}<script type="text/javascript">
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target+'_a');

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});
</script>{/if}
{block "piwik"}
<!-- Piwik -->
<script type="text/javascript"> 
  var _paq = _paq || [];
  _paq.push(['setRequestMethod', 'POST']);
{if $isUserLoggedIn}  _paq.push(['setCustomVariable',1,"Username","{'user_name'|u}","visit"]);{/if}
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://piwik.mhsamerica.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();

</script>
<noscript><p><img src="//piwik.mhsamerica.com/piwik.php?idsite=1&rec=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Code -->
{/block}
</body>
</html>
