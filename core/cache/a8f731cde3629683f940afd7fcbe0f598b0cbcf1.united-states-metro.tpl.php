<?php /*%%SmartyHeaderCode:1006809224529be668ddf9b3-27094559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8f731cde3629683f940afd7fcbe0f598b0cbcf1' => 
    array (
      0 => './incl/xhtml/default/united-states-metro.tpl',
      1 => 1383631153,
      2 => 'file',
    ),
    '32d6388b39598793f7b0b3bbd08b665147d4be4d' => 
    array (
      0 => './incl/xhtml/default/master.tpl',
      1 => 1385847734,
      2 => 'file',
    ),
    'fdab7abc8a294973bf474634150700d10a7095dc' => 
    array (
      0 => './incl/xhtml/default/ads-four-square.tpl',
      1 => 1383628110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1006809224529be668ddf9b3-27094559',
  'variables' => 
  array (
    'yr' => 0,
    'page' => 1,
    'bodyclasses' => 0,
    'category' => 0,
    'langprefix' => 0,
    'isUserLoggedIn' => 0,
    'opt' => 1,
    'article' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_529be66a220eb8_52564438',
  'cache_lifetime' => 20,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529be66a220eb8_52564438')) {function content_529be66a220eb8_52564438($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>The Inland Empire  :: MHS America</title>

	<meta name="title" content="MHS America - ">
	<meta name="description" content="The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="">
	<meta name="google-site-verification" content="">
	<meta name="author" content="MHS America">
	<meta name="Copyright" content="Copyright &copy; 2013 MHS America. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<link rel="schema.DC" href="http://purl.org/dc/terms/">
	<meta name="DC.title" content="MHS America - The Inland Empire ">
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
<link rel="stylesheet" href="/_/css/counties.css" media="all">
</head>

<body class="page_region">

<div class="wrapper">
	<header>
		<h1 class="dymaxionscript"><a href="/" title="To the front page">MHS America</a></h1>
		<nav>
			<ul>
				<li id="page-direction">Select a city below for spaces and homes or browse professionals by clicking above</li>
				
				<li class="active"><a href="/region/inlandempire/communities" rel="spaces">Communities</a></li>
								<li><a href="/region/inlandempire/pros" aria-haspopup="true">Professionals</a>
									</li>
				<li class="end"></li>
				
								<li class="right"><a href="/account/login">Log In / Register</a>
				<div class="drop">
					<div class="account-box guest-box">
						<h2><strong><span>Log In</span></strong></h2>
						<form action="/account/login" method="POST">
						<input type="hidden" name="rqst" value="global">
						<p><input type="text" name="username" placeholder="Username"></p>
						<p><input type="password" name="password" placeholder="Password"></p>
						<a href="http://beta.mhsamerica.com/account/register" class="zocial secondary r">New Account</a> <a href="#" class="zocial primary" onclick="$('#loginSubmit').click();">Login</a><input type="submit" id="loginSubmit" style="display:none;" value="Login">
						</form>
					</div>
				</div></li>
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
</div>
<div id="content">
<section id="us-county">
<div class="county-content">
	<div class="content-box">
		<?php if ($_smarty_tpl->tpl_vars['page']->value['success']=="no"){?>
			<div><h1>This area is not established on our site</h1></div>
		<?php }else{ ?>
		<h1><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</h1>
		<?php if ($_smarty_tpl->tpl_vars['category']->value=="pros"){?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['selec']){?>
				CATEGORY
			<?php }else{ ?>
				<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
					<a class="probox pro_<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
" href="<?php echo s('domain');?>
/region/<?php echo $_smarty_tpl->tpl_vars['page']->value['metro']['name'];?>
/pros/<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
"><?php echo l($_smarty_tpl->tpl_vars['cat']->value['langname_plural']);?>
</a>
				<?php } ?>
			<?php }?>
			<div class="clearfix"></div>
		<?php }else{ ?>
			<?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value){
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
				<div class="city-box"><a href="<?php echo s('domain');?>
/locale/<?php echo $_smarty_tpl->tpl_vars['city']->value['stateabbr'];?>
/<?php echo $_smarty_tpl->tpl_vars['city']->value['countyname'];?>
/<?php echo $_smarty_tpl->tpl_vars['city']->value['name'];?>
"><span class="city-title"><?php echo $_smarty_tpl->tpl_vars['city']->value['title'];?>
</span>
				<p><span title="Homes" class="tidbit-homes"><?php echo $_smarty_tpl->tpl_vars['city']->value['homecount'];?>
</span>
				<span title="Spaces" class="tidbit-lots"><?php echo $_smarty_tpl->tpl_vars['city']->value['lotcount'];?>
</span>
				<span title="Professionals" class="tidbit-pros"><?php echo $_smarty_tpl->tpl_vars['city']->value['procount'];?>
</span></p></a>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['city']->value['tick']==$_smarty_tpl->tpl_vars['page']->value['adsstart']&&$_smarty_tpl->tpl_vars['page']->value['adspresent']){?>
				<div class="clearfix"></div>
				<?php echo $_smarty_tpl->getSubTemplate ("ads-four-square.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php }?>
			<?php }
if (!$_smarty_tpl->tpl_vars['city']->_loop) {
?>
				<div><h1>This area is currently not covered by our site.</h1></div>
			<?php } ?>
			<div class="clearfix"></div>
			<?php if (count($_smarty_tpl->tpl_vars['page']->value['cities'])<$_smarty_tpl->tpl_vars['page']->value['adsstart']&&$_smarty_tpl->tpl_vars['page']->value['adspresent']){?>
			<?php echo $_smarty_tpl->getSubTemplate ("ads-four-square.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
			<?php }?>
		<?php }?>
	</div>
</div>
</section>

	<footer><form action="/contactmail.php" method="GET">
		<div class="wrapper">
			<div class="grid">
				<div class="g3">
					<h3 class="padded">Navigation</h3>
					<ul>
						<li><a href="/">Homepage</a></li>
						<li><a href="/region/inlandempire/spaces">Spaces</a></li>
						<li><a href="/region/inlandempire/homes">Homes</a></li>
						<li><a href="/region/inlandempire/pros">Professionals</a></li>
					</ul>
				</div>
				<div class="g4">
					<h3 class="padded">My Account</h3>
					<ul>
						<li class="lifloat"><a href="/account/login">Log In</a></li>
						<li class="lifloat">- or -</li>
						<li class="lishift"><a href="/account/register">Register</a></li>
					</ul>				</div>
				<div class="g5 ticker">
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
<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']){?></a><?php }?><?php }?>.</span><br><?php }?>Copyright &copy; 2013 MHS America.<br>All Rights Reserved.</small></p></div>
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
</script><?php }?><!-- Piwik -->
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
<noscript><p><img src="http://piwik.mhsamerica.com/piwik.php?idsite=1&rec=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Code -->
</body>
</html>
<?php }} ?>