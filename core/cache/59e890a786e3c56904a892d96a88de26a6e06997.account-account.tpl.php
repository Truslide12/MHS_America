<?php /*%%SmartyHeaderCode:2435266952c8c573e22c07-74103691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59e890a786e3c56904a892d96a88de26a6e06997' => 
    array (
      0 => './incl/xhtml/default/frontend/account-account.tpl',
      1 => 1385850092,
      2 => 'file',
    ),
    '7ed0bd03d771761c7c5f33c327229cb1d136b7d4' => 
    array (
      0 => './incl/xhtml/default/frontend/master.tpl',
      1 => 1388288299,
      2 => 'file',
    ),
    'b65717798301c450abcbe02263b8e2c10c06e826' => 
    array (
      0 => './incl/xhtml/default/frontend/account-company-colors.tpl',
      1 => 1385852772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2435266952c8c573e22c07-74103691',
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
  'unifunc' => 'content_52c8c5748b9398_75711892',
  'cache_lifetime' => 900,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c8c5748b9398_75711892')) {function content_52c8c5748b9398_75711892($_smarty_tpl) {?><!DOCTYPE html>
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
	<meta name="DC.subject" content="Mobile home spaces, contractors, and services">
	<meta name="DC.creator" content="Kage-Mykel Edwards">
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
	<script type="text/javascript" href="//code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="/_/css/dashboard.css" type="text/css">
<style type="text/css">
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_backdrop']!=''){?>
	body { background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_backdrop'];?>
) <?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_backdrop_align']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_backdrop_align'];?>
<?php }else{ ?>center top no-repeat<?php }?>; }
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_container_backcolor']!=''){?>
	section#us-county { background:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_container_backcolor'];?>
; }
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_banner_backcolor']!=''){?>
	#<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['name'];?>
-banner { height:80px; background:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_banner_backcolor'];?>
; margin:-1em -1em -60px; }
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_banner_linkcolor']!=''){?>
	#dashboard .mini-menu a { color:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_banner_linkcolor'];?>
; }
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_backcolor']!=''){?>
	div#content > footer { border:none; background:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_backcolor'];?>
; }
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_headcolor']!=''){?>
	div#content > footer h3 { color:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_headcolor'];?>
; }
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_bodycolor']!=''){?>
	div#content > footer { color:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_bodycolor'];?>
; }
	div#content > footer ul > li > a { color:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_bodycolor'];?>
; background:none; text-decoration:none; }
	div#content > footer ul > li > a:hover { color:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_bodycolor'];?>
; background:none; text-decoration:underline; }
	div.account-box { color:#333; }
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_lightheaders']==1){?>
	.grid h3 { font-size:120%;font-weight:normal; }
<?php }?>
</style></head>

<body itemscope itemtype="http://schema.org/WebPage" class="page_account">

<div class="wrapper">
	<header>
		<h1 class="dymaxionscript"><a href="/" title="To the front page">MHS America</a></h1>
		<nav>
			<ul>
				
				
								<li class="right"><a class="dashie" href="/account"><span class="r"><img src="http://www.gravatar.com/avatar/5346bb08332c326da043e8046be4fc70?s=32&d=mm"></span><span style="line-height:2.5;padding:0 1em 0 0;">Greetings, Master Keystroke</span></a>
				<div class="drop">
					<div class="account-box">
						<span class="r"><img src="http://www.gravatar.com/avatar/5346bb08332c326da043e8046be4fc70?s=32&d=mm"></span>
						<h2><strong><span>Keystroke</span></strong></h2>
						<ul class="action-list">
							<li><a href="/account">Dashboard</a></li>
							<li><a href="/account/settings">Settings</a></li>
							<?php if ($_smarty_tpl->tpl_vars['page']->value['useritems']){?>
							<?php  $_smarty_tpl->tpl_vars['opt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['useritems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opt']->key => $_smarty_tpl->tpl_vars['opt']->value){
$_smarty_tpl->tpl_vars['opt']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['opt']->value[0]=='separator'){?><li><hr></li><?php }elseif($_smarty_tpl->tpl_vars['opt']->value[0]=='title'){?><li><strong><?php echo $_smarty_tpl->tpl_vars['opt']->value[1];?>
</strong></li><?php }else{ ?><li><a href="<?php echo $_smarty_tpl->tpl_vars['opt']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['opt']->value[1];?>
</a></li><?php }?>
							<?php } ?>
							<?php }?>
							<li><hr></li>
							<li><a href="/account/logout">Log out</a></li>
						</ul>
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
<?php if ($_smarty_tpl->tpl_vars['page']->value['advert']==true){?><aside class="advertisement" id="backdrop"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['backdrop']['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['backdrop']['image'];?>
"/></a><?php }?></div>
<div id="content">
<?php if ($_smarty_tpl->tpl_vars['page']->value['advert']==true){?><span class="ad-notice<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['blacknotices']==1){?> black<?php }?>" id="advertisement-notice-right">Sponsored Ad</span><span class="ad-notice<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['blacknotices']==1){?> black<?php }?>" id="advertisement-notice">Sponsored Ad</span>
<?php }?>
<section id="us-county">
<div class="county-content">
	<div class="content-box" id="dashboard">
		<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_banner_backcolor']!=''){?><div id="<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['name'];?>
-banner"></div><?php }?>
		<div class="mini-menu"><a href="/account/settings">Settings</a> | <a href="/account/logout">Log out</a></div>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['is_company_user']){?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['logo'];?>
">
		<?php }else{ ?><h1>Dashboard</h1>
		<h2>Aloha, <?php echo u('display_name');?>
!</h2><?php }?>
		<div class="dashboard-box">
			<aside class="right-sidebar">
				<div class="account-box">
					<span class="r"><img src="http://gravatar.com/avatar/5346bb08332c326da043e8046be4fc70?s=40&d=mm"></span>
					<h2><strong><span>Keystroke</span></strong></h2>
					<ul class="action-list">
						<li><a href="/account/settings">Change settings</a></li>
						<li><hr></li>
						<li><a href="/account/profile"><?php if ($_smarty_tpl->tpl_vars['page']->value['profiles']){?>Manage business profiles<?php }else{ ?>Establish a business profile<?php }?></a></li>
						<li><a href="/account/ads">Manage advertising</a></li>
						<li><a href="/account/billing">Manage billing</a></li>
						
					</ul>
				</div>
			</aside>
			<h1>Bookmarks</h1>
			<section>
				<h2>Homes</h2>
				<p>
					<?php  $_smarty_tpl->tpl_vars['hbook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hbook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['homebooks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hbook']->key => $_smarty_tpl->tpl_vars['hbook']->value){
$_smarty_tpl->tpl_vars['hbook']->_loop = true;
?>
						
					<?php }
if (!$_smarty_tpl->tpl_vars['hbook']->_loop) {
?>
						<p align="center">No bookmarks to list here ;-;</p>
					<?php } ?>
				</p>
			</section>
			<section>
				<h2>Spaces</h2>
				<p>
					<?php  $_smarty_tpl->tpl_vars['sbook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sbook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['spacebooks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sbook']->key => $_smarty_tpl->tpl_vars['sbook']->value){
$_smarty_tpl->tpl_vars['sbook']->_loop = true;
?>
						
					<?php }
if (!$_smarty_tpl->tpl_vars['sbook']->_loop) {
?>
						<p align="center">There's nothing to display ;-;</p>
					<?php } ?>
				</p>
			</section>
			&nbsp;
			<h1>Watched Communities</h1>
			<section>
				<div<?php if ($_smarty_tpl->tpl_vars['page']->value['combooks']){?> id="comm-list"<?php }?>>
					<?php  $_smarty_tpl->tpl_vars['cbook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cbook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['combooks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cbook']->key => $_smarty_tpl->tpl_vars['cbook']->value){
$_smarty_tpl->tpl_vars['cbook']->_loop = true;
?>
						<p>
							<a href="<?php echo s('domain');?>
/<?php echo $_smarty_tpl->tpl_vars['cbook']->value['profile']['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['cbook']->value['profile']['username'];?>
/unwatch?return=account" class="r"><small>Unwatch</small></a>
							<a href="<?php echo s('domain');?>
/<?php echo $_smarty_tpl->tpl_vars['cbook']->value['profile']['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['cbook']->value['profile']['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['cbook']->value['title'];?>
</a>
							<?php if (1==2){?><br>
							<span><?php if ($_smarty_tpl->tpl_vars['cbook']->value['new']['homes']>0){?><?php echo $_smarty_tpl->tpl_vars['cbook']->value['new']['homes'];?>
 homes<?php }else{ if (!isset($_smarty_tpl->tpl_vars['cbook']) || !is_array($_smarty_tpl->tpl_vars['cbook']->value)) $_smarty_tpl->createLocalArrayVariable('cbook',true);
if ($_smarty_tpl->tpl_vars['cbook']->value['new']['homes'] = -1){?>No homes<?php }}?></span><?php }?>
						</p>
					<?php }
if (!$_smarty_tpl->tpl_vars['cbook']->_loop) {
?>
						<p align="center">You're not watching any communities ;-;</p>
					<?php } ?>
				</div>
			</section>
			&nbsp;
			<h1>Watched Professionals</h1>
			<section>
				<div<?php if ($_smarty_tpl->tpl_vars['page']->value['probooks']){?> id="comm-list"<?php }?>>
					<?php  $_smarty_tpl->tpl_vars['pbook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pbook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['probooks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pbook']->key => $_smarty_tpl->tpl_vars['pbook']->value){
$_smarty_tpl->tpl_vars['pbook']->_loop = true;
?>
						<p><a href="<?php echo s('domain');?>
/<?php echo $_smarty_tpl->tpl_vars['pbook']->value['profile']['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['pbook']->value['profile']['username'];?>
/unwatch?return=account" class="r"><small>Unwatch</small></a><a href="<?php echo s('domain');?>
/<?php echo $_smarty_tpl->tpl_vars['pbook']->value['profile']['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['pbook']->value['profile']['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['pbook']->value['title'];?>
</a></p>
					<?php }
if (!$_smarty_tpl->tpl_vars['pbook']->_loop) {
?>
						<p align="center">You're not watching anybody ;-;</p>
					<?php } ?>
				</div>
			</section>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</section>

	<footer><form action="/contactmail.php" method="GET">
		<div class="wrapper">
			<div class="grid">
								<div class="g6">
					<h3 class="padded">My Account</h3>
					<div class="account-box">
						<span style="float:right;margin:-0.4em;"><img src="http://gravatar.com/avatar/5346bb08332c326da043e8046be4fc70?s=40&d=mm"></span>
						<strong>Logged in as <span>Keystroke</span></strong><br/>
						<a href="/account">Go to Dashboard</a> | <a href="/account/logout">Log out</a>
					</div>				</div>
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
  _paq.push(['setCustomVariable',1,"Username","keystroke","visit"]);  _paq.push(['trackPageView']);
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