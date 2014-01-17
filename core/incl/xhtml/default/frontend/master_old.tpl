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

	<title>{block name="title"}{'title'|s}{if 'title'|p} - {'title'|p}{/if}{/block}</title>

	<meta name="title" content="{'title'|s} - {'meta_title'|p}">
	<meta name="description" content="{'meta_description'|p}The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="{'meta_keywords'|p}">
	<meta name="google-site-verification" content="{'google_site_verification'|s}">
	<meta name="author" content="{'title'|s}">
	<meta name="Copyright" content="Copyright &copy; {$yr} {'author'|s}. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<link rel="schema.DC" href="http://purl.org/dc/terms/">
	<meta name="DC.title" content="{'title'|s}{if 'title'|p} - {'title'|p}{/if}">
	<meta name="DC.subject" content="{'dublin_subject'|p}">
	<meta name="DC.creator" content="{'dublin_creator'|p}">
	
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

	<link rel="stylesheet" href="/_/css/style.css">
	<link href="/_/js/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css">
	{block "headerincludes"}{/block}

	<script src="/_/js/modernizr-1.7.min.js"></script>
	<script src="//cufon.shoqolate.com/js/cufon-yui.js" type="text/javascript"></script>
	<script src="/_/js/dymaxion-script.cufonfonts.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('.dymaxionscript', { fontFamily: 'DymaxionScript', hover: true }); 
	</script>
</head>

<body>

<div class="wrapper">

	<header>
		{block "topleft"}<h1 class="dymaxionscript"><a href="/">{'title'|s}</a></h1>{/block}
		<nav>
			<ul>
				{block "menubar"}
				<li{if $category == "spaces"} class="active"{/if}><a href="{$langprefix}spaces" rel="spaces">{'spaces'|l}</a></li>
				<li{if $category == "homes"} class="active"{/if}><a href="{$langprefix}homes" rel="homes">{'homes'|l}</a>
					<ul>
						<li><a href="{$langprefix}homes/for-sale" rel="for-sales">{'for sale'|l}</a></li>
					</ul>
				</li>
				<li{if $category == "pros"} class="active"{/if}><a href="{$langprefix}pros">{'professionals'|l}</a>
					<ul>
						<li><a href="{$langprefix}pros/dealers" rel="dealers">{'dealers'|l}</a></li>
						<li><a href="{$langprefix}pros/agents" rel="agents">{'licensed agents'|l}</a></li>
						<li class="end"></li>
						<li><a href="{$langprefix}pros/inspectors" rel="inspectors">{'safety inspectors'|l}</a></li>
						<li><a href="{$langprefix}pros/builders" rel="builders">{'builders'|l}</a></li>
						<li><a href="{$langprefix}pros/transporters" rel="transporters">{'transporters'|l}</a></li>
					</ul>
				</li>
				<li class="end"></li>
				{/block}
				<li class="right{if $category == "login"} active{/if}"><a href="/{$langprefix}login">{'log in'|l}</a></li>
				<li class="right{if $category == "register"} active{/if}"><a href="/{$langprefix}register">{'register'|l}</a></li>
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
{block "content"}
	<section id="greeter">
		<div id="greeter-wrapper">
			<h1 class="dymaxionscript">{'title'|s}</h1>
			<h2 class="home-subtitle">&quot;{'tagline'|s}&quot;</h2>
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
		</div>
	</section>
	
	<section id="us-map-alt">
		<div id="vmap" style="position:static !important;width:98%;height:600px;padding:1%;"></div>
		<div id="advert-back"><img src="/_/images/big_ben.jpg" alt="Initializing Advertisement..." style="width:100%;height:auto;display:none;"/></div>
	</section>
	<article>
		
		<h1>Article Header</h1>

		<p>Etiam pretium odio eu mi convallis vitae varius neque pharetra. Nulla vestibulum nisi ut sem cursus sed mattis nisi egestas.</p>
		
		<h2>Article Subhead</h2>
		
		<p>Vestibulum lacus erat, volutpat vel dignissim at, fringilla ut felis.</p>
	
	</article>
	
	<aside>
	
		<h2>Sidebar Content</h2>
	
	</aside>
{/block}
	<div class="clearfix"></div>	
		<footer><form action="/contactmail.php" method="GET">
		<div class="wrapper">
			<div class="grid">
				<div class="g3">
					<h3>{'navigation'|l}</h3>
					<ul>
						<li><a href="/{$langprefix}">{'home'|l}</a></li>
						<li><a href="/{$langprefix}spaces">{'spaces'|l}</a></li>
						<li><a href="/{$langprefix}homes">{'homes'|l}</a></li>
						<li><a href="/{$langprefix}pros">{'professionals'|l}</a></li>
					</ul>
				</div>
				<div class="g3">
					<h3>{'my account'|l}</h3>
					<ul>
						<li><a href="/{$langprefix}login">{'log in'|l}</a></li>
						<li><a href="/{$langprefix}register">{'register'|l}</a></li>
					</ul>
				</div>
				<div class="g3"><h3>&nbsp;</h3>
					<p>&nbsp;</p>
				</div>
				<div class="g3"><h3>&nbsp;</h3><p><small>{'copyright'|l} &copy; {$yr} {'author'|s}.<br/>{'allrightsreserved'|l}.</small></p></div>
				<div class="clearfix"></div>
			</div>
		</div>
		</form>
	</footer>
</div>
<!-- Javascript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='/_/js/jquery-1.7.2.min.js'>\x3C/script>")</script>
{block "endscripts"}
<script src="/_/js/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="/_/js/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script> 
<script src="/_/js/jquery.anystretch.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$('#advert-back').anystretch("/_/images/big_ben.jpg");
</script>   
<script type="text/javascript">
jQuery('#vmap').vectorMap({
    map: 'usa_en',
    backgroundColor: null,
    color: 'rgba(64,86,255,0.5)',
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
<script src="/_/js/functions.js"></script>
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>  
</body>
</html>
