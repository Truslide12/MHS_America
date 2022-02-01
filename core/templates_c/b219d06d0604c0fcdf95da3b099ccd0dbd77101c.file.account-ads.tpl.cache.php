<?php /* Smarty version Smarty-3.1.8, created on 2013-12-09 23:54:45
         compiled from "./incl/xhtml/default/frontend/account-ads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162613720252a6aca5c690e7-08613860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b219d06d0604c0fcdf95da3b099ccd0dbd77101c' => 
    array (
      0 => './incl/xhtml/default/frontend/account-ads.tpl',
      1 => 1385853845,
      2 => 'file',
    ),
    '7ed0bd03d771761c7c5f33c327229cb1d136b7d4' => 
    array (
      0 => './incl/xhtml/default/frontend/master.tpl',
      1 => 1386308398,
      2 => 'file',
    ),
    'b65717798301c450abcbe02263b8e2c10c06e826' => 
    array (
      0 => './incl/xhtml/default/frontend/account-company-colors.tpl',
      1 => 1385852772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162613720252a6aca5c690e7-08613860',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_52a6aca6c28f53_06152673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a6aca6c28f53_06152673')) {function content_52a6aca6c28f53_06152673($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php if (p('title')){?><?php echo p('title');?>
 :: <?php }?><?php echo s('title');?>
</title>

	<meta name="title" content="<?php echo s('title');?>
 - <?php echo p('meta_title');?>
">
	<meta name="description" content="<?php echo p('meta_description');?>
The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="<?php echo p('meta_keywords');?>
">
	<meta name="google-site-verification" content="<?php echo s('google_site_verification');?>
">
	<meta name="author" content="<?php echo s('title');?>
">
	<meta name="Copyright" content="Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['yr']->value;?>
 <?php echo s('author');?>
. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<link rel="schema.DC" href="http://purl.org/dc/terms/">
	<meta name="DC.title" content="<?php echo s('title');?>
<?php if (p('title')){?> - <?php echo p('title');?>
<?php }?>">
	<meta name="DC.subject" content="<?php echo p('dublin_subject');?>
">
	<meta name="DC.creator" content="<?php echo p('dublin_creator');?>
">
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
	<!-- <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'> -->
	<?php if ((u('user_name'))=="keystroke"&&1==2){?>
	<link rel="stylesheet" href="/_/css/keystroke.css" type="text/css">
	<?php }?>
	
	<script src="/_/js/<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\']){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }else{ ?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
jquery-1.10.2.min.js<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
"></script>
	<?php if (1==2){?><script>window.jQuery || document.write("<script src='/_/js/jquery-1.7.2.min.js'>\x3C/script>")</script><?php }?>
    <script src="/_/kendo/js/kendo.web.min.js"></script>
	<script src="/_/js/modernizr-1.7.min.js"></script>
	
<?php if (1==2){?>	<script src="//cufon.shoqolate.com/js/cufon-yui.js" type="text/javascript"></script>
	<script src="/_/js/dymaxion-script.cufonfonts.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('.dymaxionscript', { fontFamily: 'DymaxionScript', hover: true }); 
	</script>
<?php }?>	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" href="//code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="/_/css/dashboard.css" type="text/css">
<?php /*  Call merged included template "account-company-colors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("account-company-colors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '162613720252a6aca5c690e7-08613860');
content_52a6aca5ef0da1_87972845($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "account-company-colors.tpl" */?>
</head>

<body class="<?php echo $_smarty_tpl->tpl_vars['bodyclasses']->value;?>
">

<div class="wrapper">
	<header>
		<h1 class="dymaxionscript"><a href="/" title="To the front page"><?php echo s('title');?>
</a></h1>
		<nav>
			<ul>
				<li id="page-direction">Select your state from the map below:</li>
				
				<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?>
				<li class="right<?php if ($_smarty_tpl->tpl_vars['category']->value=="account"){?> active<?php }?>"><a class="dashie" href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
account"><span class="r"><img src="<?php echo get_gravatar(u('email'),32);?>
&d=mm"></span><span style="line-height:2.5;padding:0 1em 0 0;"><?php if ((u('user_name'))=="keystroke"){?>Greetings, Master <?php }?><?php echo u('display_name');?>
</span></a>
				<div class="drop">
					<div class="account-box">
						<span class="r"><img src="<?php echo get_gravatar(u('email'),32);?>
&d=mm"></span>
						<h2><strong><span><?php echo u('display_name');?>
</span></strong></h2>
						<ul class="action-list">
							<li><a href="/account">Dashboard</a></li>
							<li><a href="/account/settings">Settings</a></li>
							<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

							<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php  $_smarty_tpl->tpl_vars[\'opt\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'opt\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'opt\']->key => $_smarty_tpl->tpl_vars[\'opt\']->value){
$_smarty_tpl->tpl_vars[\'opt\']->_loop = true;
?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

							<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'separator\'){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<li><hr></li><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'title\'){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<li><strong><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
</strong></li><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }else{ ?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<li><a href="<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[0];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
"><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

							<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php } ?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

							<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

							<li><hr></li>
							<li><a href="/account/logout">Log out</a></li>
						</ul>
					</div>
				</div></li>
				<?php }else{ ?>
				<li class="right<?php if ($_smarty_tpl->tpl_vars['category']->value=="login"){?> active<?php }?>"><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
account/login"><?php echo l('log in');?>
 / <?php echo l('register');?>
</a>
				<div class="drop">
					<div class="account-box guest-box">
						<h2><strong><span><?php echo l('log in');?>
</span></strong></h2>
						<form action="/account/login" method="POST">
						<input type="hidden" name="rqst" value="global">
						<p><input type="text" name="username" placeholder="Username"></p>
						<p><input type="password" name="password" placeholder="Password"></p>
						<a href="<?php echo s('domain');?>
/account/register" class="zocial secondary r">New Account</a> <a href="#" class="zocial primary" onclick="$('#loginSubmit').click();">Login</a><input type="submit" id="loginSubmit" style="display:none;" value="Login">
						</form>
					</div>
				</div></li>
				<?php }?>
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
	<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\']){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<style type="text/css">
		div#submenu { border-color:#545454; }
	</style><img src="/_/images/backdrops/<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'file\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
" alt="" id="pagecanvas"<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'heightstretch\']==1){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
 style="height:100%;width:auto;max-width:none;min-width:100%;"<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

<?php if ((p('advert'))==true){?><aside class="advertisement" id="backdrop"><a href="<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'url\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'image\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
"/></a><?php }?></div>
<div id="content">
<?php if ((p('advert'))==true){?><span class="ad-notice<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
 black<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
" id="advertisement-notice-right">Sponsored Ad</span><span class="ad-notice<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
 black<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
" id="advertisement-notice">Sponsored Ad</span>
<?php }?>
<section id="us-county">
<div class="county-content">
	<div class="content-box" id="dashboard">
		<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_banner_backcolor\']!=\'\'){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<div id="<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'name\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
-banner"></div><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

		<div class="mini-menu"><a href="/account/settings">Settings</a> | <a href="/account/logout">Log out</a></div>
		<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'is_company_user\']){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

		<a href="/account"><img src="<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'logo\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
"></a>
		<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }else{ ?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<h1>Dashboard</h1>
		<h2>Aloha, <?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo u(\'display_name\');?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
!</h2><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

		<div class="dashboard-box">
			<aside class="right-sidebar">
				<div class="account-box">
					<span class="r"><img src="http://gravatar.com/avatar/<?php echo md5(u('email'));?>
?s=40&d=mm"></span>
					<h2><strong><span><?php echo u('display_name');?>
</span></strong></h2>
					<ul class="action-list">
						<li><a href="/account/settings">Change settings</a></li>
						<li><hr></li>
						<li><a href="/account">Return to dashboard...</a></li>
						<li><hr></li>
						<li><a href="/account/profile"><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'profiles\']){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
Manage business profiles<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }else{ ?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
Establish a business profile<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
</a></li>
						<li><a href="/account/billing">Manage billing</a></li>
						
					</ul>
				</div>
			</aside>
			<h1>Current campaigns</h1>
			<section>
				There will be ad campaigns showing here! :D
			</section>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</section>

	<footer><form action="/contactmail.php" method="GET">
		<div class="wrapper">
			<div class="grid">
				<?php if (1==2){?><div class="g3">
					<h3 class="padded"><?php echo l('navigation');?>
</h3>
					<ul>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
">Homepage</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
spaces"><?php echo l('spaces');?>
</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
homes"><?php echo l('homes');?>
</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
pros"><?php echo l('professionals');?>
</a></li>
					</ul>
				</div><?php }?>
				<div class="g6">
					<h3 class="padded"><?php echo l('my account');?>
</h3>
					<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?><div class="account-box">
						<span style="float:right;margin:-0.4em;"><img src="http://gravatar.com/avatar/<?php echo md5(u('email'));?>
?s=40&d=mm"></span>
						<strong>Logged in as <span><?php echo u('display_name');?>
</span></strong><br/>
						<a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
account">Go to Dashboard</a> | <a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
account/logout">Log out</a>
					</div><?php }else{ ?><ul>
						<li class="lifloat"><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
account/login"><?php echo l('log in');?>
</a></li>
						<li class="lifloat">- or -</li>
						<li class="lishift"><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
account/register"><?php echo l('register');?>
</a></li>
					</ul><?php }?>
				</div>
				<div class="g6 ticker">
					<?php if ((s('footerticker'))==1){?><h3 class="padded"><kbd>234</kbd> Communities</h3>
					<h3><kbd>3,442</kbd> Spaces</h3>
					<h3><kbd>453</kbd> Homes</h3>
					<h3><kbd>1,203</kbd> Professionals</h3><?php }else{ ?>
					<h3 id="slogan">Finding spaces for mobile home buyers<br>Filling spaces for mobile home park owners</h3>
					<!-- Thanks Jimmy! -->
					<?php }?>
				</div>
				<div class="clearfix"></div>
				<div class="g3"><hr><h3>Company</h3>
					<ul>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
news">News</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
about">About Us</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
contact">Contact</a></li>
					</ul>
				</div>
				<div class="g3"><hr><h3>Legal</h3>
					<ul>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
privacy">Privacy Policy</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
legal">Terms of Use</a></li>
					</ul>
				</div>
				<div class="g3"><hr><h3>Community</h3>
					<ul>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
ideas">Ideas and Suggestions</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
discuss">Discussions</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
connected">Connected</a></li>
					</ul>
				</div>
				<div class="g3"><hr><h3>&middot; &middot; &middot;</h3><p><small><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\']){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<span style="font-style:italic;">Background image by <?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
</a><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<br>Courtesy of <?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
</a><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
.</span><br><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<?php echo l('copyright');?>
 &copy; <?php echo $_smarty_tpl->tpl_vars['yr']->value;?>
 <?php echo s('author');?>
.<br><?php echo l('allrightsreserved');?>
.</small></p></div>
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




<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']=="state"){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<script type="text/javascript">
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
</script><?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>


<!-- Piwik -->
<script type="text/javascript"> 
  var _paq = _paq || [];
  _paq.push(['setRequestMethod', 'POST']);
<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?>  _paq.push(['setCustomVariable',1,"Username","<?php echo u('user_name');?>
","visit"]);<?php }?>
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
<?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-12-09 23:54:45
         compiled from "./incl/xhtml/default/frontend/account-company-colors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52a6aca5ef0da1_87972845')) {function content_52a6aca5ef0da1_87972845($_smarty_tpl) {?><style type="text/css">
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_backdrop\']!=\'\'){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

	body { background: url(<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_backdrop\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
) <?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_backdrop_align\']){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_backdrop_align\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }else{ ?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
center top no-repeat<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
; }
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_container_backcolor\']!=\'\'){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

	section#us-county { background:<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_container_backcolor\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
; }
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_banner_backcolor\']!=\'\'){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

	#<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'name\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
-banner { height:80px; background:<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_banner_backcolor\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
; margin:-1em -1em -60px; }
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_banner_linkcolor\']!=\'\'){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

	#dashboard .mini-menu a { color:<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_banner_linkcolor\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
; }
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_backcolor\']!=\'\'){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

	div#content > footer { border:none; background:<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_backcolor\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
; }
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_headcolor\']!=\'\'){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

	div#content > footer h3 { color:<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_headcolor\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
; }
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_bodycolor\']!=\'\'){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

	div#content > footer { color:<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_bodycolor\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
; }
	div#content > footer ul > li > a { color:<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_bodycolor\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
; background:none; text-decoration:none; }
	div#content > footer ul > li > a:hover { color:<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_bodycolor\'];?>
/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>
; background:none; text-decoration:underline; }
	div.account-box { color:#333; }
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_lightheaders\']==1){?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

	.grid h3 { font-size:120%;font-weight:normal; }
<?php echo '/*%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/<?php }?>/*/%%SmartyNocache:162613720252a6aca5c690e7-08613860%%*/';?>

</style><?php }} ?>