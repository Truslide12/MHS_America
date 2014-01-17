<?php /* Smarty version Smarty-3.1.8, created on 2014-01-08 14:43:33
         compiled from "./incl/xhtml/default/frontend/profile-community.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26333346152cdb8759d3956-35071236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8516907eba28a242ffb799b9c9d30a914e605b25' => 
    array (
      0 => './incl/xhtml/default/frontend/profile-community.tpl',
      1 => 1389070070,
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
    '348bae9a8b65389ee0b60dfd27912093ddeeec24' => 
    array (
      0 => './incl/xhtml/default/frontend/profile-section-info.tpl',
      1 => 1388815728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26333346152cdb8759d3956-35071236',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_52cdb877eebd47_13187078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cdb877eebd47_13187078')) {function content_52cdb877eebd47_13187078($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'title\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'title\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 :: <?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo s('title');?>
</title>

	<meta name="title" content="<?php echo s('title');?>
 - <?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_title\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
">
	<meta name="description" content="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_description\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_keywords\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
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
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'title\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 - <?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'title\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
">
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
	<link href='//fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/_/css/style.css">
	<link rel="stylesheet" href="/_/kendo/styles/kendo.common.min.css">
    <link rel="stylesheet" href="/_/kendo/styles/kendo.default.min.css">
	<link rel="stylesheet" type="text/css" href="/_/css/zocial.css">
	<link rel="stylesheet" type="text/css" media="screen" href="/_/js/jqvmap/jqvmap.css">
	<?php if ((u('user_name'))=="keystroke"&&1==2){?>
	<link rel="stylesheet" href="/_/css/keystroke.css" type="text/css">
	<?php }?>
	
	<script src="/_/js/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
jquery-1.10.2.min.js<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
"></script>
    <script src="/_/kendo/js/kendo.web.min.js"></script>
	<script src="/_/js/modernizr-1.7.min.js"></script>
	
<script type="text/javascript" src="/_/js/jquery-ui-1.10.3.custom.min.js"></script>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<link rel="stylesheet" href="/_/css/coverphoto.css" type="text/css"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

<script type="text/javascript" src="/_/js/jquery.roundabout.min.js"></script>
<script type="text/javascript" src="/_/js/plugins/jquery.event.drag.live-2.2.js"></script>
<script type="text/javascript" src="/_/js/plugins/jquery.event.drop.live-2.2.js"></script>
<script type="text/javascript" src="/_/js/plugins/jquery.easing.1.3.js"></script>

	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<style type="text/css">
body {padding-top:42px;}
div#content {width:auto;background:none;border-left:none;border-right:none;}
section#us-county {background:none;}
footer .wrapper {width:790px;margin:0 auto;}
#submenu {display:none;}
</style>
</head>

<body itemscope itemtype="http://schema.org/WebPage" class="<?php echo $_smarty_tpl->tpl_vars['bodyclasses']->value;?>
">

<div class="wrapper">
	<header>
		<h1 class="dymaxionscript"><a href="/" title="To the front page"><?php echo s('title');?>
</a></h1>
		<nav>
			<ul>
				
				
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
							<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

							<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php  $_smarty_tpl->tpl_vars[\'opt\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'opt\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'opt\']->key => $_smarty_tpl->tpl_vars[\'opt\']->value){
$_smarty_tpl->tpl_vars[\'opt\']->_loop = true;
?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

							<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'separator\'){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<li><hr></li><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'title\'){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<li><strong><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</strong></li><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<li><a href="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[0];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

							<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php } ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

							<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

							<li><hr></li>
							<li><a href="/account/logout">Log out</a></li>
						</ul>
					</div>
				</div></li>
				<?php }elseif(1==2){?>
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
						<p><input type="text" name="username" placeholder="Username" onkeydown="if (event.keyCode == 13) $('#loginSubmit').click();"></p>
						<p><input type="password" name="password" placeholder="Password" onkeydown="if (event.keyCode == 13) $('#loginSubmit').click();"></p>
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
	<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<style type="text/css">
		div#submenu { border-color:#545454; }
	</style><img src="/_/images/backdrops/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'file\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
" alt="" id="pagecanvas"<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'heightstretch\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 style="height:100%;width:auto;max-width:none;min-width:100%;"<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'advert\']==true){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<aside class="advertisement" id="backdrop"><a href="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'url\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'image\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
"/></a><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</div>
<div id="content">
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'advert\']==true){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<span class="ad-notice<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 black<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
" id="advertisement-notice-right">Sponsored Ad</span><span class="ad-notice<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 black<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
" id="advertisement-notice">Sponsored Ad</span>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

<section id="us-county">
<div class="county-content">
	<div itemprop="about" itemscope itemtype="http://schema.org/LocalBusiness" class="content-box profile"><link itemprop="additionalType" href="http://schema.org/MobileHomeCommunity"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<form action="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo s(\'domain\');?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'prof_id\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'username\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
/edit" method="POST"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

		<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'][\'pro_profile\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<div id="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan_info\'][\'id\']==4){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
premier<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
premium<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
-tag"><a href="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo s(\'domain\');?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
" target="_blank" title="Click for more info"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan_info\'][\'id\']==4){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
Premier<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
Premium<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<br/>Partner</a></div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<h1><span itemprop="name"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'title\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</span><small><a href="/locale/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'abbr\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'county\'][\'name\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'city\'][\'name\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'city\'][\'title\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
, <?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'title\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</a></small></h1>
		<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'cover\']&&$_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'cover_position\']&&$_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'][\'misc_banner\']==1&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'slides\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<div id="head-banner"></div>
		<style>
			div.wrapper > header {-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;box-shadow:0 0 10px #000;}
			#us-county .county-content h1 {color:#dedede;}
			#us-county h1 small a {color:#999999;}
			#premier-tag {-moz-box-shadow:0 0 4em #999;-webkit-box-shadow:0 0 4em #999;box-shadow:0 0 4em #999;}
			#head-banner {
				background-image:url(<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'cover\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
);
				background-position:<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'cover_position\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
;
				background-repeat:no-repeat;
				box-shadow:0 0 10px rgba(224,224,224,0.65) inset;
				border:none;
			}
			#datcinema {
				background:#242424 url(/_/images/patterns/skewed_print.png) top left repeat;
				position:absolute;
				top:0;left:0;right:0;
				height:350px;
				z-index:-10000;
				box-shadow:0 -3em 4em #191919 inset;
			}
			
		</style><div id="datcinema"></div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'page\']->value[\'slides\']&&$_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'][\'misc_banner\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

		<style>
			div.wrapper > header {-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;box-shadow:0 0 10px #000;}
			#us-county .county-content h1 {color:#dedede;}
			#us-county h1 small a {color:#999999;}
			#premier-tag {-moz-box-shadow:0 0 4em #999;-webkit-box-shadow:0 0 4em #999;box-shadow:0 0 4em #999;}
			#datcinema {
				background:#242424 url(/_/images/patterns/skewed_print.png) top left repeat;
				position:absolute;
				top:0;left:0;right:0;
				height:<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
370<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
350<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
px;
				z-index:-10000;
				box-shadow:0 -3em 4em #191919 inset;
			}
			#profile-buttonset{margin:-52px 10px 0;position:relative;z-index:281;}
			ul#headbannerset > li {
				background-repeat:no-repeat;
				box-shadow:0 0 10px rgba(224,224,224,0.65) inset;
				border:none;
				display:block;
				width:800px;
				height:280px;
			}
			#current-glow {
				width: 800px;
				height: 280px;
				margin: -281px -9px 0 -11px;
				position: relative;
				<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

				-moz-box-shadow: 0 0 50px #000;
				-webkit-box-shadow: 0 0 50px #000;
				box-shadow: 0 0 50px #000;
				background:rgba(0,0,0,0.5);
				z-index: 280;
				<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

				-moz-box-shadow: 0 0 10px #fff;
				-webkit-box-shadow: 0 0 10px #fff;
				box-shadow: 0 0 10px #fff;
				z-index: 279;
				display:none;
				<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

			}
			#profile-sheet {margin-top:50px;}
			li#photo1 {
				background-image:url(<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][0][\'cover\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
);
				background-position:<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][0][\'cover_position\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
;
			}
			li#photo2 {
				background-image:url(<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][1][\'cover\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
);
				background-position:<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][1][\'cover_position\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
;
			}
			li#photo3 {
				background-image:url(<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][2][\'cover\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
);
				background-position:<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][2][\'cover_position\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
;
			}<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

			.roundabout-moveable-item .coverphoto-container {width:440px;height:154px;}
			.roundabout-in-focus .coverphoto-container, .roundabout-in-focus .coverphoto-container canvas {width:800px;height:280px;}
			.roundabout-in-focus .coverphoto-container .coverphoto-photo-container img {width:800px !important;}
			.roundabout-moveable-item .coverphoto-container .actions .chooser {display:none;}
			.roundabout-in-focus .coverphoto-container .actions .chooser {display:block;}
			.headerslides .coverphoto-container, .headerslides > li > img {display:none;}
			ul.editmode li .coverphoto-container, ul.editmode > li > img {display:block;}
			<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

			li.roundabout-in-focus {cursor: default;}
			.roundabout-holder {list-style: none;padding: 0;margin:4px 0 0 1em;height:280px;width:100%;}
			.roundabout-moveable-item {width:600px;height: 210px;cursor: pointer;background-color: #ccc;border: none;}
			.roundabout-in-focus {width:800px;height: 280px;margin: 0 -10px;cursor: auto;}
		</style>
		<ul id="headbannerset" class="headerslides">
			<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']||$_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][0][\'cover\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<li id="photo1"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<img src="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][0][\'cover\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
" class="stubimg"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</li><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

			<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']||$_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][1][\'cover\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<li id="photo2"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<img src="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][1][\'cover\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
" class="stubimg"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</li><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

			<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']||$_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][2][\'cover\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<li id="photo3"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<img src="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][2][\'cover\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
" class="stubimg"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</li><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

		</ul><div id="datcinema"></div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<input type="hidden" id="inputphoto1" name="photo1" value=""><input type="hidden" id="inputphoto2" name="photo2" value=""><input type="hidden" id="inputphoto3" name="photo3" value=""><div id="current-glow"><a href="#" class="zocial secondary" id="photoman" style="font-size:120%;margin:122px 299px;">Manage Cover Photos</a></div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

		<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

		<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?><div id="profile-buttonset<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'][\'misc_banner\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
-nobanner<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if (!$_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<a class="zocial follow<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'watched\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
-red<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
" href="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo s(\'domain\');?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'prof_id\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'username\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'watched\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
un<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
watch"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'watched\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
Unwatch<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
Watch<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 Community</a><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'][\'misc_kudos\']==1&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'isowner\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 &nbsp; <a class="zocial primary<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if (!$_smarty_tpl->tpl_vars[\'page\']->value[\'kudoed\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 kudos<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
" href="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo s(\'domain\');?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'prof_id\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'username\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'kudoed\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
no<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
kudos"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'kudoed\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
Take Away <?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
Kudos</a><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'isowner\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 &nbsp; <button type="submit" class="zocial follow" id="mainsubmit">Save Changes</button><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 &nbsp; <a class="zocial primary" href="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo s(\'domain\');?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'prof_id\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
/<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'username\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if (!$_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
/edit<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
Exit Editor<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
Edit Profile<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</a><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</div><?php }?>
		<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<p class="ribbon"<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'slides\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 style="margin:20px -9px -28px -11px;z-index:280;position:relative;"<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
>The profile is currently in edit mode. Changes will only be applied after clicking <strong>Save Changes</strong> above.</p>
		<a href="#" class="zocial secondary kudos" style="font-size:120%;display:block;top:-159px;position:relative;z-index:290;left:353px;margin:-35px 0;display:none;" id="nophotoman">Done</a><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

		<div id="profile-sheet">
		<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'][\'pro_profile\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->getSubTemplate ("profile-section-contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<style type="text/css">div.profile {padding:10px 24px 14em;background:#efefef;}</style><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

		<div class="col2 l">
			<?php /*  Call merged included template "profile-section-info.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("profile-section-info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '26333346152cdb8759d3956-35071236');
content_52cdb877444699_09264994($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "profile-section-info.tpl" */?>
			<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'][\'pro_profile\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

			<section<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 style="padding:2em 0 0;"<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
>
				<header>About Our Community</header>
				<p><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<textarea style="max-width:100%;min-width:100%;" name="description" class="fancy"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'description\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</textarea><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'description\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'description\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<h3><em>No description available</em></h3><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</p>
			</section><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

			<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'][\'com_homes\']==1&&$_smarty_tpl->tpl_vars[\'page\']->value[\'space_count\']>20){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->getSubTemplate ("profile-section-homes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

		</div>
		<div class="col2 r">
			<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'][\'pro_profile\']!=1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->getSubTemplate ("profile-section-contact-mini.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

			<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'][\'pro_profile\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->getSubTemplate ("profile-section-amenities.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

			<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'][\'com_spaces\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->getSubTemplate ("profile-section-spaces.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

			<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'][\'com_homes\']==1&&$_smarty_tpl->tpl_vars[\'page\']->value[\'space_count\']<21){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->getSubTemplate ("profile-section-homes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

		</div>
		<div class="clearfix"></div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</form><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

		</div><!-- End of sheet -->
		<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'name\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<div style="text-align:center;margin:1em 0;"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'logo_emblem\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<img src="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'logo_emblem\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
A <?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'title\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 Community<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

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
					<h3 class="padded"><?php if (1==2||$_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?><?php echo l('my account');?>
<?php }?></h3>
					<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?><div class="account-box">
						<span style="float:right;margin:-0.4em;"><img src="http://gravatar.com/avatar/<?php echo md5(u('email'));?>
?s=40&d=mm"></span>
						<strong>Logged in as <span><?php echo u('display_name');?>
</span></strong><br/>
						<a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
account">Go to Dashboard</a> | <a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
account/logout">Log out</a>
					</div><?php }elseif(1==2){?><ul>
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
				<div class="g3"><hr><h3>&middot; &middot; &middot;</h3><p><small><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<span style="font-style:italic;">Background image by <?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</a><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<br>Courtesy of <?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
</a><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
.</span><br><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
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


<script type="text/javascript">
$(document).ready(function(){
  $('#headbannerset').roundabout({
		enableDrag:false, autoplay: true, autoplayDuration: 5000<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if (!$_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
, easing: "easeOutQuad"<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
});
});
</script>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<script type="text/javascript" src="/_/markitup/jquery.markitup.js"></script>
<script type="text/javascript" src="/_/markitup/sets/bbcode/set.js"></script>
<link rel="stylesheet" type="text/css" href="/_/markitup/skins/markitup/style.css" />
<link rel="stylesheet" type="text/css" href="/_/markitup/sets/bbcode/style.css" />
<script type="text/javascript" src="/_/js/plugins/coverphoto.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
                    var state = $("#bsnsstate").kendoDropDownList({
                        placeholder: "Select state...",
                        dataTextField: "title",
                        dataValueField: "id",
						serverFiltering: true,
                        dataSource: {
                            transport: {
                                read: "../../../derpy/states"
                            },
							schema: {
								data: "data"
							}
                        },
						value: "<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'id\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
"
                    }).data("kendoDropDownList");

                    var county = $("#bsnscounty").kendoDropDownList({
                        autoBind: true,
                        cascadeFrom: "state",
                        placeholder: "Select county...",
                        dataTextField: "title",
                        dataValueField: "id",
                        serverFiltering: true,
						dataSource: {
                            transport: {
                                read: {
									url: "../../../derpy/counties",
									data: {
										state: function() {return $("#bsnsstate").val()}
									}
								}
                            },
							schema: {
								data: "data"
							}
                        },
						value: "<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'county\'][\'id\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
"
                    }).data("kendoDropDownList");
					
                    var city = $("#bsnscity").kendoDropDownList({
                        autoBind: true,
                        cascadeFrom: "county",
                        placeholder: "Select city...",
                        dataTextField: "title",
                        dataValueField: "id",
						serverFiltering: true,
                        dataSource: {
                            transport: {
                                read: {
									url: "../../../derpy/cities",
									data: {
										county: function() {return $("#bsnscounty").val()},
										state: function() {return $("#bsnsstate").val()}
									}
								}
                            },
							schema: {
								data: "data"
							}
                        },
						value: "<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'city\'][\'id\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
"
                    }).data("kendoDropDownList");
					var countyid = <?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'id\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
;
					var countyid = <?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'county\'][\'id\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
;
					var cityid = <?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'city\'][\'id\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
;
					var inited = false;
					var statefunc = function(e) {
						county.setDataSource(new kendo.data.DataSource({transport:{read:{url: "../../../derpy/counties",data:{state: function() {return $("#bsnsstate").val()}}}},schema:{data: "data"}}));
						if(inited == true) {
						county.refresh();
						county.text('');
						county.value(countyid);
						city.setDataSource({data:[]});
						city.refresh();
						city.text('');
						city.value(cityid);
						}
					};
					var countyfunc = function(e) {
						city.setDataSource(new kendo.data.DataSource({transport:{read:{url: "../../derpy/cities",data: {county: function() {return $("#bsnscounty").val()},state: function() {return $("#bsnsstate").val()}}}},schema:{data: "data"}}));
						if(inited == true) {
						city.refresh();
						city.text('');
						city.value(0);
						} else {
							countyid = 0;
							cityid = 0;
						}
					};
					state.text('');
					state.value(<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'id\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
);
					statefunc(true);
					//county.refresh();
					 
					state.bind('close', statefunc);
					state.bind('dataBound', statefunc);
					state.bind('change', statefunc);
					 
					county.bind('close', countyfunc);
					county.bind('dataBound', countyfunc);
					county.bind('change', countyfunc);
					$('#profile-info select').width('80px').kendoDropDownList();
					$('.p-editmosaic select').width('80px').kendoDropDownList();
					$(".fancy").markItUp(markitupSets);
					var curcount = $('div#spaceslist > p').size() + 1;
					var spaceAdd = function() {
						newsel = $("select#spacenewsize").data("kendoDropDownList");
						spcc = $('<p>');
						if(!curcount) {curcount = <?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'lastspace\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
;}
						curcount = curcount.toString();
						spcc.addClass('spaceitem').attr('id','spacebox' + curcount);
						var spcnewe = $('#spc_new').val();
						spcc.html('<label for="spc'+curcount+'">Space #: </label><input type="text" name="spc['+curcount+']" id="spc'+curcount+'" value="' + spcnewe + '"><a id="delete_'+curcount+'" class="zocial secondary deletebtn" onclick="$(\'#spacebox'+curcount+'\').remove();">X</a>' + <?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'simple_spaces\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
'<select id="newspace_' + curcount + '" name="spcsize[' + curcount + ']"><option value="1">Single</option><option value="2">Double</option><option value="3">Triple</option></select>'<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
);
						$('#spaceslist').append(spcc);
						spcc.show();
						<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'simple_spaces\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
$("select#newspace_"+curcount).width('80px').kendoDropDownList();
						cursel = $("select#newspace_"+curcount).data("kendoDropDownList");
						cursel.value(newsel.value());<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

						curcount = +curcount;
						curcount++;
						newsel.value('1');
						$('#spc_new').val('');
					}
					$('input#newspcbtn').click(function(){spaceAdd();});
					$('#openmonday').change(function() {
						if(this.checked) {$('#hoursmonday').show();$('#closedmonday').hide();}else{$('#hoursmonday').hide();$('#closedmonday').css('display','block');}
					});
					$('#opentuesday').change(function() {
						if(this.checked) {$('#hourstuesday').show();$('#closedtuesday').hide();}else{$('#hourstuesday').hide();$('#closedtuesday').css('display','block');}
					});
					$('#openwednesday').change(function() {
						if(this.checked) {$('#hourswednesday').show();$('#closedwednesday').hide();}else{$('#hourswednesday').hide();$('#closedwednesday').css('display','block');}
					});
					$('#openthursday').change(function() {
						if(this.checked) {$('#hoursthursday').show();$('#closedthursday').hide();}else{$('#hoursthursday').hide();$('#closedthursday').css('display','block');}
					});
					$('#openfriday').change(function() {
						if(this.checked) {$('#hoursfriday').show();$('#closedfriday').hide();}else{$('#hoursfriday').hide();$('#closedfriday').css('display','block');}
					});
					$('#opensaturday').change(function() {
						if(this.checked) {$('#hourssaturday').show();$('#closedsaturday').hide();}else{$('#hourssaturday').hide();$('#closedsaturday').css('display','block');}
					});
					$('#opensunday').change(function() {
						if(this.checked) {$('#hourssunday').show();$('#closedsunday').hide();}else{$('#hourssunday').hide();$('#closedsunday').css('display','block');}
					});
					$('#headbannerset li').each(function() {
						$(this).CoverPhoto({currentImage: $(this).children('.stubimg').attr('src'), editable: true});
						$(this).children('.stubimg').hide();
						$(this).bind('coverPhotoUpdated', function(evt, dataUrl) {
							$('#input' + $(this).attr('id')).attr("value", dataUrl);
						});
					});
					$('#photoman').click(function() {
						$('#current-glow').hide();
						$('#headbannerset').addClass('editmode').roundabout("stopAutoplay");
						$('#mainsubmit').hide();
						$('#profile-buttonset').css('margin','-52px 10px 0 660px');
						$('#nophotoman').show();
					});
					$('#nophotoman').click(function(){
						$('#current-glow').show();
						$('#headbannerset').removeClass('editmode').roundabout("startAutoplay");
						$('#profile-buttonset').css('margin','-52px 10px 0');
						$('#nophotoman').hide();
						$('#mainsubmit').show();
					});
		});
</script><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>


<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']=="state"){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
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
</script><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>


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
<?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2014-01-08 14:43:35
         compiled from "./incl/xhtml/default/frontend/profile-section-info.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52cdb877444699_09264994')) {function content_52cdb877444699_09264994($_smarty_tpl) {?><section class="tiled blue">
				<header>Community Information</header><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<div id="cominfo">
					<strong>Community Type: </strong><select name="data[senior]">
						<option value="0"<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'senior\']!=1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 selected<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
>Open Community</option>
						<option value="1"<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'senior\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 selected<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
>Senior Community</option>
					</select><br>
					<input type="checkbox" name="data[accessible]" id="info_access"<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'handicap\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 checked<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 value="1"><label for="info_access" class="chk"> Good Accessible (Handicap)</label> 
					<input type="checkbox" name="data[neighborhood]" id="info_neighborhood"<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'neighborhood\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 checked<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 value="1"><label for="info_neighborhood" class="chk"> Neighborhood Watch</label><br>
					<input type="checkbox" name="data[gated]" id="info_gated"<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'gated\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 checked<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 value="1"><label for="info_gated" class="chk"> Gated Community</label> 
					<input type="checkbox" name="data[pets]" id="info_pets"<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'pets\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 checked<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 value="1"><label for="info_pets" class="chk"> Pets Allowed</label> 
					<input type="checkbox" name="data[scenic]" id="info_scenic"<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'scenic\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 checked<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
 value="1"><label for="info_scenic" class="chk"> Scenic Area</label>
					<div class="clearfix">&nbsp;</div>
					<label for="info_spacecount"><strong>Spaces Total:</strong><br><input type="text" name="spacecount" id="info_spacecount" value="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'spaces\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
"></label>
					<div class="clearfix">&nbsp;</div>
					<label for="info_spacerent"><strong>Average Space Rent:</strong><br><input type="text" name="rent" id="info_rent" value="<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'rent\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
"> /mo</label>
					<div class="clearfix">&nbsp;</div>
				</div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<div id="cominfo">
				<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'senior\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<div class="info-tile fiftyfive dbl-tile">Senior</div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }else{ ?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<div class="info-tile fiftyfive dbl-tile">Family</div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

				<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'handicap\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<div class="info-tile fiftyfive handicap tilesort" title="Good Accesibility">&nbsp;</div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

				<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'neighborhood\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<div class="info-tile fiftyfive neighborhood tilesort" title="Neighborhood Watch">&nbsp;</div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

				<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'spaces\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<div class="info-tile dbl-tile tilesort"><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'spaces\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<span>&nbsp;spaces</span></div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

				<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'rent\']){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<div class="info-tile tpl-tile tilesort"><span><small>Starting at</small> </span>$<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'rent\'];?>
/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<span>&nbsp;/mo</span></div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

				<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'gated\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<div class="info-tile property dbl-tile tilesort">Gated</div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

				<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'pets\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<div class="info-tile property dbl-tile tilesort">Pets<span class="check"></span></div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

				<?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'scenic\']==1){?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>
<div class="info-tile property dbl-tile tilesort">Scenic</div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

				<div class="clearfix"></div></div><div class="clearfix"></div><?php echo '/*%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/<?php }?>/*/%%SmartyNocache:26333346152cdb8759d3956-35071236%%*/';?>

			</section><?php }} ?>