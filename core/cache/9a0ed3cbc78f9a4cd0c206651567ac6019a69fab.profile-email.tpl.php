<?php /*%%SmartyHeaderCode:81569013352ca1e2e6932b3-73213955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0ed3cbc78f9a4cd0c206651567ac6019a69fab' => 
    array (
      0 => './incl/xhtml/default/frontend/profile-email.tpl',
      1 => 1388201656,
      2 => 'file',
    ),
    '7ed0bd03d771761c7c5f33c327229cb1d136b7d4' => 
    array (
      0 => './incl/xhtml/default/frontend/master.tpl',
      1 => 1388288299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81569013352ca1e2e6932b3-73213955',
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
  'unifunc' => 'content_52ca1e2f0faae8_75861944',
  'cache_lifetime' => 900,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ca1e2f0faae8_75861944')) {function content_52ca1e2f0faae8_75861944($_smarty_tpl) {?><!DOCTYPE html>
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
	<style type="text/css">
body {padding-top:42px;}
div#content {background:#fff;}
section#us-county {background:none;}
footer .wrapper {width:790px;margin:0 auto;}
#submenu {display:none;}
</style>
</head>

<body itemscope itemtype="http://schema.org/WebPage" class="page_profile">

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
<section id="us-county">
<div class="county-content">
	<div itemprop="about" itemscope itemtype="http://schema.org/Organization/MobileHomeCommunity" class="content-box profile"><link itemprop="additionalType" href="http://schema.org/Residence">
	<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['pro_profile']==1){?><div id="<?php if ($_smarty_tpl->tpl_vars['page']->value['plan_info']['id']==4){?>premier<?php }else{ ?>premium<?php }?>-tag"><a href="<?php echo s('domain');?>
" target="_blank" title="Click for more info"><?php if ($_smarty_tpl->tpl_vars['page']->value['plan_info']['id']==4){?>Premier<?php }else{ ?>Premium<?php }?><br/>Partner</a></div><?php }?><h1><span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['title'];?>
</span><small><a href="/locale/<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['abbr'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['county']['name'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['city']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['city']['title'];?>
, <?php echo $_smarty_tpl->tpl_vars['page']->value['state']['title'];?>
</a></small></h1>
		<div class="clearfix"></div>
		<div class="g6">
			<label for="fullname">Full Name</label> <input type="text" id="fullname" name="fullname">
		</div>
		<div class="g6">
			<label for="email">Email Address</label> <input type="text" id="email" name="email"><br>
		</div>
		<div class="g6">
			<label for="message">Message</label>
			<textarea name="message" style="width:80%;min-width:80%;max-width:80%;min-height:129px;max-height:400px;background:#fff;"></textarea>
		</div>
		<div class="g6">
			<label>&nbsp;</label>
			<span class="red">All fields are required.</span>
			<input type="submit" class="zocial primary" value="Submit">
		</div>
		<div class="clearfix"></div>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['logo_emblem']){?><div style="text-align:center;margin:1em 0;"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['logo_emblem'];?>
"></div><?php }?>
	</div>
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


<style type="text/css">
	.content-box input[type="text"] {
		background:#fff;
		padding:0.6em;
		font-size:114%;
		line-height:1em;
		vertical-align:middle;
		width:80%;
	}
	.content-box label {
		font-size:120%;
		line-height:2.2em;
		padding:0 0.6em;
		vertical-align:middle;
		display:block;
	}
	span.red {
		font-size:120%;
		color:#c00;
		line-height:2.2em;
		margin-right:1em;
	}
	.k-widget {
		font-size:120%;
	}
	.plist p {padding:0 0 1em;}
	.plist p span {font-size:80%;}
</style>

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