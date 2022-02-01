<?php /*%%SmartyHeaderCode:7341127352d4bdc59727a4-06102548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2218fc041c9d66d475cfaa661eedeb829a8da97' => 
    array (
      0 => './incl/xhtml/default/frontend/frontend_home.tpl',
      1 => 1388279424,
      2 => 'file',
    ),
    '3f2cd56d6bacd9d838c642d0cc16b45c1d40bf0d' => 
    array (
      0 => './incl/xhtml/default/frontend/profile-master.tpl',
      1 => 1385529503,
      2 => 'file',
    ),
    '7ed0bd03d771761c7c5f33c327229cb1d136b7d4' => 
    array (
      0 => './incl/xhtml/default/frontend/master.tpl',
      1 => 1388288299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7341127352d4bdc59727a4-06102548',
  'variables' => 
  array (
    'page' => 1,
    'yr' => 0,
    'bodyclasses' => 0,
    'category' => 0,
    'langprefix' => 0,
    'isUserLoggedIn' => 0,
    'opt' => 1,
    'is_search' => 0,
    'stateitem' => 1,
    'article' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52d4bdc7157ec8_56688553',
  'cache_lifetime' => 900,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d4bdc7157ec8_56688553')) {function content_52d4bdc7157ec8_56688553($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php if ($_smarty_tpl->tpl_vars['page']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
 :: <?php }?>MHS America</title>

	<meta name="title" content="MHS America - <?php echo $_smarty_tpl->tpl_vars['page']->value['meta_title'];?>
">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['meta_description'];?>
The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['meta_keywords'];?>
">
	<meta name="google-site-verification" content="">
	<meta name="author" content="MHS America">
	<meta name="Copyright" content="Copyright &copy; 2014 MHS America. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<link rel="schema.DC" href="http://purl.org/dc/terms/">
	<meta name="DC.title" content="MHS America<?php if ($_smarty_tpl->tpl_vars['page']->value['title']){?> - <?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
<?php }?>">
	<meta name="DC.subject" content="">
	<meta name="DC.creator" content="">
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
		
	<script src="/_/js/<?php if ($_smarty_tpl->tpl_vars['page']->value['jquery']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['jquery'];?>
<?php }else{ ?>jquery-1.10.2.min.js<?php }?>"></script>
    <script src="/_/kendo/js/kendo.web.min.js"></script>
	<script src="/_/js/modernizr-1.7.min.js"></script>
	
	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
<?php if ($_smarty_tpl->tpl_vars['page']->value['slides']){?><link rel="stylesheet" href="/_/css/nivo-slider.css" type="text/css" media="screen">
<link rel="stylesheet" href="/_/css/themes/default/default.css" type="text/css" media="screen"><?php }?>
<style type="text/css">
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
</style>

</head>

<body itemscope itemtype="http://schema.org/WebPage" class="page_home">

<div class="wrapper">
	<header>
		<h1 class="dymaxionscript"><a href="/" title="To the front page">MHS America</a></h1>
		<nav>
			<ul>
				
				
							</ul>
		</nav>
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
		</script>
	</header>

	<div id="submenu"></div>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']){?><style type="text/css">
		div#submenu { border-color:#545454; }
	</style><img src="/_/images/backdrops/<?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['file'];?>
" alt="" id="pagecanvas"<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['heightstretch']==1){?> style="height:100%;width:auto;max-width:none;min-width:100%;"<?php }?>><?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['advert']==true){?><aside class="advertisement" id="backdrop"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['backdrop']['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['backdrop']['image'];?>
"/></a><?php }?></div>
<div id="content">
<?php if ($_smarty_tpl->tpl_vars['page']->value['advert']==true){?><span class="ad-notice<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['blacknotices']==1){?> black<?php }?>" id="advertisement-notice-right">Sponsored Ad</span><span class="ad-notice<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['blacknotices']==1){?> black<?php }?>" id="advertisement-notice">Sponsored Ad</span>
<?php }?>
<div style="position:relative;z-index:-1;">
	<?php if ($_smarty_tpl->tpl_vars['page']->value['slides']){?>
	<section id="parallax">
	<div class="slider-wrapper theme-default">
		<div id="slider" class="nivoSlider">
			<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?><img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" data-thumb="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" alt="" title="<?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
" /><?php } ?>
		</div>
	</div>
</section><div class="dotgrid full"></div>
	<?php }elseif($_smarty_tpl->tpl_vars['page']->value['home']['image_backdrop']){?><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['home']['image_backdrop'];?>
" id="parallax">
	<div class="dotgrid full"></div><?php }?>
</div>
<section id="home-buttons">
	<a href="/home/<?php echo $_smarty_tpl->tpl_vars['page']->value['home']['id'];?>
/contact" class="zocial primary kudos l">Contact Seller</a>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['watched']){?>
	<a href="/home/<?php echo $_smarty_tpl->tpl_vars['page']->value['home']['id'];?>
/unwatch" class="zocial primary follow-red l">Unwatch Home</a>
	<?php }else{ ?>
	<a href="/home/<?php echo $_smarty_tpl->tpl_vars['page']->value['home']['id'];?>
/watch" class="zocial primary follow l">Watch Home</a>
	<?php }?>
	<span><?php if ($_smarty_tpl->tpl_vars['page']->value['watchers']==0){?>Nobody watching :)<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value['watchers'];?>
 watching<?php }?></span>
</section>
<section id="home-info">
<div class="box">
	<h1><?php echo $_smarty_tpl->tpl_vars['page']->value['home']['beds'];?>
 Bedroom &middot; <?php echo $_smarty_tpl->tpl_vars['page']->value['home']['baths'];?>
 Bath</h1>
	<h2 class="l"><a href="/<?php echo $_smarty_tpl->tpl_vars['page']->value['community']['profile']['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['community']['profile']['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['community']['title'];?>
</a></h2><a href="http://mhsamerica.com/locale/<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['abbr'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['county']['name'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['city']['name'];?>
" class="l"style="display:block;padding:0.325em 1em;"><?php echo $_smarty_tpl->tpl_vars['page']->value['city']['title'];?>
, <?php echo strtoupper($_smarty_tpl->tpl_vars['page']->value['state']['abbr']);?>
</a>
	<div class="clearfix"></div>
	<p>
	<?php echo $_smarty_tpl->tpl_vars['page']->value['home']['description'];?>

	</p>
	<div class="clearfix"></div>
	<h3 class="red"><?php echo showprice($_smarty_tpl->tpl_vars['page']->value['home']['price']);?>
</h3>
</div>
<?php if ($_smarty_tpl->tpl_vars['page']->value['home']['image_floorplan']){?><div class="box">
	<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['home']['image_floorplan'];?>
"></a>
</div><?php }?>
<div class="box">
	
	<h2>Home Specifications</h2>
	<p>Year / Brand: <?php echo $_smarty_tpl->tpl_vars['page']->value['home']['year'];?>
 <?php echo $_smarty_tpl->tpl_vars['page']->value['home']['brand'];?>
</p>
	<p>Dimensions: <?php echo $_smarty_tpl->tpl_vars['page']->value['home']['width'];?>
&times;<?php echo $_smarty_tpl->tpl_vars['page']->value['home']['length'];?>
</p>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['home']['model']){?><p>Model #: <?php echo $_smarty_tpl->tpl_vars['page']->value['home']['model'];?>
</p><?php }?>
	<p>Serial #: <?php echo $_smarty_tpl->tpl_vars['page']->value['home']['serial'];?>
</p>
</div>
</section>

	<footer><form action="/contactmail.php" method="GET">
		<div class="wrapper">
			<div class="grid">
								<div class="g6">
					<h3 class="padded"></h3>
									</div>
				<div class="g6 ticker">
										<h3 id="slogan">Finding spaces for mobile home buyers<br>Filling spaces for mobile home park owners</h3>
					<!-- Thanks Jimmy! -->
									</div>
				<div class="clearfix"></div>
				<div class="g3"><hr><h3>Company</h3>
					<ul>
						<li><a href="/news">News</a></li>
						<li><a href="/about">About Us</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				</div>
				<div class="g3"><hr><h3>Legal</h3>
					<ul>
						<li><a href="/privacy">Privacy Policy</a></li>
						<li><a href="/legal">Terms of Use</a></li>
					</ul>
				</div>
				<div class="g3"><hr><h3>Community</h3>
					<ul>
						<li><a href="/ideas">Ideas and Suggestions</a></li>
						<li><a href="/discuss">Discussions</a></li>
						<li><a href="/connected">Connected</a></li>
					</ul>
				</div>
				<div class="g3"><hr><h3>&middot; &middot; &middot;</h3><p><small><?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['credit']){?><span style="font-style:italic;">Background image by <?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']&&!$_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy']){?><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['link'];?>
" target="_blank" rel="noindex,nofollow"><?php }?><?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['credit'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']&&!$_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy']){?></a><?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy']){?><br>Courtesy of <?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']){?><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['link'];?>
" target="_blank" rel="noindex,nofollow"><?php }?><?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']){?></a><?php }?><?php }?>.</span><br><?php }?>Copyright &copy; 2014 MHS America.<br>All Rights Reserved.</small></p></div>
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


<?php if ($_smarty_tpl->tpl_vars['page']->value['slides']){?><script type="text/javascript" src="/_/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider({ controlNav: false, pauseOnHover: false });
	});
</script><?php }?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['pragpage']=="state"){?><script type="text/javascript">
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
</script><?php }?>

<!-- Piwik -->
<script type="text/javascript"> 
  var _paq = _paq || [];
  _paq.push(['setRequestMethod', 'POST']);
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

</body>
</html>
<?php }} ?>