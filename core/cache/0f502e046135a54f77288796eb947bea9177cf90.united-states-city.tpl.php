<?php /*%%SmartyHeaderCode:113164022152d60a4ebf0d22-34865236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f502e046135a54f77288796eb947bea9177cf90' => 
    array (
      0 => './incl/xhtml/default/frontend/united-states-city.tpl',
      1 => 1388276169,
      2 => 'file',
    ),
    '7ed0bd03d771761c7c5f33c327229cb1d136b7d4' => 
    array (
      0 => './incl/xhtml/default/frontend/master.tpl',
      1 => 1388288299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113164022152d60a4ebf0d22-34865236',
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
  'unifunc' => 'content_52d60a4f54c5e1_51025965',
  'cache_lifetime' => 900,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d60a4f54c5e1_51025965')) {function content_52d60a4f54c5e1_51025965($_smarty_tpl) {?><!DOCTYPE html>
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
	
</head>

<body itemscope itemtype="http://schema.org/WebPage" class="page_city">

<div class="wrapper">
	<header>
		<h1 class="dymaxionscript"><a href="/" title="To the front page">MHS America</a></h1>
		<nav>
			<ul>
				
				
				<li class="active"><a href="/locale/nv/elko/wells/" rel="spaces">Communities</a></li>
								<li><a href="/locale/nv/elko/wells/pros" aria-haspopup="true">Professionals</a>
									</li>
				<li class="end"></li>
				
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
	<p id="watermark"><?php echo strtolower($_smarty_tpl->tpl_vars['page']->value['city']['title']);?>
</p>
<div class="county-content">
	<div class="content-box">
		<h1><a href="http://mhsamerica.com/state/<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['abbr'];?>
/county/<?php echo $_smarty_tpl->tpl_vars['page']->value['county']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['county']['title'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['county']['hidesuffix']!=1){?> <?php if ($_smarty_tpl->tpl_vars['page']->value['state']['suffix']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['state']['suffix'];?>
<?php }else{ ?><?php echo l('county');?>
<?php }?><?php }?>, <?php echo $_smarty_tpl->tpl_vars['page']->value['state']['title'];?>
</a> &raquo; <?php echo $_smarty_tpl->tpl_vars['page']->value['city']['title'];?>
</h1>
		<?php  $_smarty_tpl->tpl_vars['park'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['park']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['parks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['park']->key => $_smarty_tpl->tpl_vars['park']->value){
$_smarty_tpl->tpl_vars['park']->_loop = true;
?>
			<section class="community<?php if ($_smarty_tpl->tpl_vars['park']->value['plan']['pro_profile']==1){?> premium-basic<?php }?>">
<?php if (1==2){?>				<a href="<?php echo s('domain');?>
/<?php echo $_smarty_tpl->tpl_vars['park']->value['profid'];?>
/<?php echo $_smarty_tpl->tpl_vars['park']->value['username'];?>
"><img src="http://bdbud.com/wp-content/uploads/2009/11/5silver-spur-rv-park-palmdesert.jpg" class="community-image"/></a><?php }?>
				<header><?php if ($_smarty_tpl->tpl_vars['park']->value['plan']['pro_profile']==1){?><a href="#<?php if (1==2){?>/account/register<?php }?>" title="Premium Partner" class="plan"></a><?php }?><a href="<?php echo s('domain');?>
/<?php echo $_smarty_tpl->tpl_vars['park']->value['profid'];?>
/<?php echo $_smarty_tpl->tpl_vars['park']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['park']->value['title'];?>
</a><a href="#" class="push"></a></header>
				<div class="image-box">
					<p><a href="<?php echo s('domain');?>
/<?php echo $_smarty_tpl->tpl_vars['park']->value['profid'];?>
/<?php echo $_smarty_tpl->tpl_vars['park']->value['username'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['park']->value['cover'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['park']->value['title'];?>
"></a></p>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['park']->value['plan']['com_homes']==1){?><p class="list-item"><span><?php echo $_smarty_tpl->tpl_vars['park']->value['home_count'];?>
</span><strong>Homes</strong></p><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['park']->value['plan']['com_spaces']==1){?><p class="list-item"><span><?php echo $_smarty_tpl->tpl_vars['park']->value['space_count'];?>
</span><strong>Spaces</strong></p><?php }?>
				<p class="list-item"><span><?php echo $_smarty_tpl->tpl_vars['park']->value['kudos_count'];?>
</span><strong>Kudos</strong></p>
				<p class="props-box">&nbsp;</p>
			</section>
		<?php }
if (!$_smarty_tpl->tpl_vars['park']->_loop) {
?>
			<div class="wblock g6 badmessage">
				<p>No data available for the selected area</p>
				<br>
				<p>Please try again later</p>
			</div>
		<?php } ?>
		<div class="clearfix"></div>
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