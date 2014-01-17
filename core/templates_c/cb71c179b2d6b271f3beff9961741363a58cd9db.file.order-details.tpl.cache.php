<?php /* Smarty version Smarty-3.1.8, created on 2013-12-07 17:53:12
         compiled from "./incl/xhtml/default/order-details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144040469152a3b4e834b141-45465038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb71c179b2d6b271f3beff9961741363a58cd9db' => 
    array (
      0 => './incl/xhtml/default/order-details.tpl',
      1 => 1386276279,
      2 => 'file',
    ),
    'bce41376d27c536b3726410bc8f0ead421943888' => 
    array (
      0 => './incl/xhtml/default/order-master.tpl',
      1 => 1386222546,
      2 => 'file',
    ),
    '32d6388b39598793f7b0b3bbd08b665147d4be4d' => 
    array (
      0 => './incl/xhtml/default/master.tpl',
      1 => 1386308398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144040469152a3b4e834b141-45465038',
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
  'unifunc' => 'content_52a3b4ea0dbdb9_27025553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a3b4ea0dbdb9_27025553')) {function content_52a3b4ea0dbdb9_27025553($_smarty_tpl) {?><!DOCTYPE html>
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
	
	<script src="/_/js/<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\']){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }else{ ?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
jquery-1.10.2.min.js<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
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
<link rel="stylesheet" href="/_/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="/_/css/orders.css" type="text/css">

</head>

<body class="<?php echo $_smarty_tpl->tpl_vars['bodyclasses']->value;?>
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
							<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>

							<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php  $_smarty_tpl->tpl_vars[\'opt\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'opt\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'opt\']->key => $_smarty_tpl->tpl_vars[\'opt\']->value){
$_smarty_tpl->tpl_vars[\'opt\']->_loop = true;
?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>

							<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'separator\'){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<li><hr></li><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'title\'){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<li><strong><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
</strong></li><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }else{ ?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<li><a href="<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[0];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
"><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>

							<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php } ?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>

							<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>

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
	<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\']){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<style type="text/css">
		div#submenu { border-color:#545454; }
	</style><img src="/_/images/backdrops/<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'file\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
" alt="" id="pagecanvas"<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'heightstretch\']==1){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
 style="height:100%;width:auto;max-width:none;min-width:100%;"<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>

<?php if ((p('advert'))==true){?><aside class="advertisement" id="backdrop"><a href="<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'url\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'image\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
"/></a><?php }?></div>
<div id="content">
<?php if ((p('advert'))==true){?><span class="ad-notice<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
 black<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
" id="advertisement-notice-right">Sponsored Ad</span><span class="ad-notice<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
 black<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
" id="advertisement-notice">Sponsored Ad</span>
<?php }?>
<section id="us-county">
<div class="county-content">
	<div class="content-box" id="dashboard">
		<h1><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'title\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
</h1>
		<div class="dashboard-box">
			<div class="clearfix"></div>
			<div class="process<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'tab\']=="payment"){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
 dark<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
">
				<ul>
					<li<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'tab\']=="confirmation"||$_smarty_tpl->tpl_vars[\'page\']->value[\'tab\']=="payment"||$_smarty_tpl->tpl_vars[\'page\']->value[\'tab\']=="details"){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
 class="previous"<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'page\']->value[\'tab\']=="login"){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
 class="current"<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
>Login<i class="fa fa-sign-in"></i></li>
					<li<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'tab\']=="confirmation"||$_smarty_tpl->tpl_vars[\'page\']->value[\'tab\']=="payment"){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
 class="previous"<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'page\']->value[\'tab\']=="details"){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
 class="current"<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
>Details<i class="fa fa-list-alt"></i></li>
					<li<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'tab\']=="confirmation"){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
 class="previous"<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'page\']->value[\'tab\']=="payment"){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
 class="current"<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
>Payment<i class="fa fa-credit-card"></i></li>
					<li<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'tab\']=="confirmation"){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
 class="current finish"<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
>Confirmation<i class="fa fa-check"></i></li>
				</ul>
				<div class="clearfix"></div>
				<hr>
			</div>
			<div class="clearfix"></div>
			
<h1>Business details</h1>
<section id="business-wizard"><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'action\']=="new"){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<form method="post" action="/order/payment">
	<input type="hidden" name="plan" value="<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
">
	<p>Let's start with the most important parts...</p>
	<div class="grid">
		<div class="g12"><label for="business-name" class="full"><h3><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'businesstype\']=="community"){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
Community<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'page\']->value[\'businesstype\']=="professional"){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
Business<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
 Name:</h3><input type="text" class="textbox" id="business-name" name="title" style="width:400px;"></label></div>
		<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if (1==2){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<div class="g6">
			<label for="business-type" class="full"><h3>The type of business:&nbsp;&nbsp;</h3>
				<select id="business-type" name="type">
					<option value="community">Mobile Community</option>
					<option value="professional">Service Contractor</option>
				</select>
			</label>
		</div><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>

		<div class="g12">
			<label class="full">
				<h3>Business Location:</h3>
				<input id="bsnsstate" name="state">
				<input id="bsnscounty" name="county">
				<input id="bsnscity" name="city">
			</label>
		</div>
	</div>
	<p>&nbsp;</p>
	<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'businesstype\']=="community"){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>

	<div class="checks grid">
		<h3 class="floating">Age</h3>
		<label for="audience-1" class="full l"><input type="radio" id="audience-1" name="agerestrict" value="family"><label for="audience-1" class="chk"> Family</label></label>
		<label for="audience-2" class="full l"><input type="radio" id="audience-2" name="agerestrict" value="senior"><label for="audience-2" class="chk"> Senior</label></label>
		<div class="clearfix"></div>
	</div>
	<div class="checks grid">
		<h3>About Your Community &amp; Area</h3><br>
		<div class="g6">
			<strong class="form-strong">Attributes</strong>
			<label for="chk-gated"><input type="checkbox" name="gated" id="chk-gated" value="yep"><label for="chk-gated" class="chk"> Gated Community</label></label>
			<label for="chk-pets"><input type="checkbox" name="pets" id="chk-pets" value="yep"><label for="chk-pets" class="chk"> Pets Allowed</label></label>
			<label for="chk-acc"><input type="checkbox" name="acc" id="chk-acc" value="yep"><label for="chk-acc" class="chk"> Accessibility for Disabled</label></label>
			<div class="clearfix"></div>
		</div>
		<div class="g6">
			<strong class="form-strong">Amenities</strong>
			<div class="grid">
				<div class="g5">
					<label for="chk-pool"><input type="checkbox" name="pool" id="chk-pool" value="yep"> <label for="chk-pool" class="chk">Pool / Spa</label></label>
					<label for="chk-rec"><input type="checkbox" name="rec" id="chk-rec" value="yep"> <label for="chk-rec" class="chk">Clubhouse</label></label>
					<label for="chk-laundry"><input type="checkbox" name="laundry" id="chk-laundry" value="yep"> <label for="chk-laundry" class="chk">Laundromat</label></label>
				</div>
				<div class="g7">
					<label for="chk-playground"><input type="checkbox" name="playground" id="chk-playground" value="yep"> <label for="chk-playground" class="chk">Playground</label></label>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="g12">
			<strong class="form-strong" style="padding-top:0.5em;width:auto;">Would you consider your location scenic or a tourist attraction?</strong>
			<div class="clearfix"></div>
			<label for="scenic-1" class="full l"><input type="radio" id="scenic-1" name="scenic" value="1"><label for="scenic-1" class="chk"> Yes</label></label>
			<label for="scenic-2" class="full l"><input type="radio" id="scenic-2" name="scenic" value="0"><label for="scenic-2" class="chk"> No</label></label>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="checks grid">
		<h3>On-site / Nearby Attractions</h3><br>
		<div class="g6">
			<strong class="form-strong">Sports</strong>
			<div class="grid">
				<div class="g5">
					<label for="chk-golf"><input type="checkbox" name="golf" id="chk-golf" value="yep"> <label for="chk-golf" class="chk">Golf</label></label>
					<label for="chk-tennis"><input type="checkbox" name="tennis" id="chk-tennis" value="yep"> <label for="chk-tennis" class="chk">Tennis</label></label>
					<label for="chk-basketball"><input type="checkbox" name="basketball" id="chk-basketball" value="yep"> <label for="chk-basketball" class="chk">Basketball</label></label>
					<label for="chk-baseball"><input type="checkbox" name="baseball" id="chk-baseball" value="yep"> <label for="chk-baseball" class="chk">Baseball</label></label>
				</div>
				<div class="g7">
					<label for="chk-badminton"><input type="checkbox" name="badminton" id="chk-badminton" value="yep"> <label for="chk-badminton" class="chk">Badminton</label></label>
					<label for="chk-shuffleboard"><input type="checkbox" name="shuffleboard" id="chk-shuffleboard" value="yep"> <label for="chk-shuffleboard" class="chk">Shuffleboard</label></label>
					<label for="chk-polo"><input type="checkbox" name="polo" id="chk-polo" value="yep"> <label for="chk-polo" class="chk">Polo</label></label>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="g6">
			<strong class="form-strong">Activities</strong>
			<div class="grid">
				<div class="g5">
					<label for="chk-bingo"><input type="checkbox" name="bingo" id="chk-bingo" value="yep"> <label for="chk-bingo" class="chk">Bingo</label></label>
					<label for="chk-casino"><input type="checkbox" name="casino" id="chk-casino" value="yep"> <label for="chk-casino" class="chk">Casino</label></label>
					<label for="chk-billiards"><input type="checkbox" name="billiards" id="chk-billiards" value="yep"> <label for="chk-billiards" class="chk">Billiards</label></label>
					<label for="chk-trails"><input type="checkbox" name="trails" id="chk-trails" value="yep"> <label for="chk-trails" class="chk">Hiking / Trails</label></label>
				</div>
				<div class="g7">
					<label for="chk-horsey"><input type="checkbox" name="horsey" id="chk-horsey" value="yep"> <label for="chk-horsey" class="chk">Horseriding</label></label>
					<label for="chk-resort"><input type="checkbox" name="resort" id="chk-resort" value="yep"> <label for="chk-resort" class="chk">Resorts, Theme Parks</label></label>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
	<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }else{ ?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>

	No profile wizard for professionals yet.
	<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>

	<hr>
	<p align="right"><input type="submit" value="Continue" class="zocial primary"></p>
</form>
<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }else{ ?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>

<div class="grid">
	<div class="g6">
		<a href="/order/details?action=new&type=community&plan=<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
" class="tile-link">New Community</a>
	</div>
	<div class="g6">
		<a href="/order/details?action=new&type=professional&plan=<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
" class="tile-link">New Professional</a>
	</div>
	<div class="g12">
		<h3>Existing profiles</h3>
		<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php  $_smarty_tpl->tpl_vars[\'prof\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'prof\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'profiles\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'prof\']->key => $_smarty_tpl->tpl_vars[\'prof\']->value){
$_smarty_tpl->tpl_vars[\'prof\']->_loop = true;
?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>

		<div class="profile-card">
			<header><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'prof\']->value[\'data\'][\'title\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
</header>
			<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'prof\']->value[\'data\'][\'cover\']){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<div class="image"><img src="<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'prof\']->value[\'data\'][\'cover\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
" width="228" height="80" alt=""></div><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>

			<footer><a class="zocial secondary" href="/order/payment?pid=<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'prof\']->value[\'id\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
&plan=<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'plan\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
">Choose Profile</a>&nbsp;
			<a class="zocial primary" href="/<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'prof\']->value[\'id\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
/<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'prof\']->value[\'username\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
" target="_blank">View Profile</a></footer>
			<div class="clearfix"></div>
		</div>
		<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php } ?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>

	</div>
	<div class="clearfix"></div>
</div>
<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
</section>

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
				<div class="g3"><hr><h3>&middot; &middot; &middot;</h3><p><small><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\']){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<span style="font-style:italic;">Background image by <?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
</a><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<br>Courtesy of <?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\'];?>
/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
</a><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
.</span><br><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
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
		$(document).ready(function() {
                    var state = $("#bsnsstate").kendoDropDownList({
                        placeholder: "Select state...",
                        dataTextField: "title",
                        dataValueField: "id",
						serverFiltering: true,
                        dataSource: {
                            transport: {
                                read: "../../derpy/states"
                            },
							schema: {
								data: "data"
							}
                        }
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
									url: "../../derpy/counties",
									data: {
										state: function() {return $("#bsnsstate").val()}
									}
								}
                            },
							schema: {
								data: "data"
							}
                        }
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
									url: "../../derpy/cities",
									data: {
										county: function() {return $("#bsnscounty").val()},
										state: function() {return $("#bsnsstate").val()}
									}
								}
                            },
							schema: {
								data: "data"
							}
                        }
                    }).data("kendoDropDownList");
					state.text('');state.value(0);county.refresh();county.text('');county.value(0);
					var statefunc = function(e) {
						county.setDataSource(new kendo.data.DataSource({transport:{read:{url: "../../derpy/counties",data:{state: function() {return $("#bsnsstate").val()}}}},schema:{data: "data"}}));
						county.refresh();
						county.text('');
						county.value(0);
						city.setDataSource({data:[]});
						city.refresh();
						city.text('');
						city.value(0);
					};
					state.bind('close', statefunc);
					state.bind('dataBound', statefunc);
					state.bind('change', statefunc);
					var countyfunc = function(e) {
						city.setDataSource(new kendo.data.DataSource({transport:{read:{url: "../../derpy/cities",data: {county: function() {return $("#bsnscounty").val()},state: function() {return $("#bsnsstate").val()}}}},schema:{data: "data"}}));
						city.refresh();
						city.text('');
						city.value(0);
					};
					county.bind('close', countyfunc);
					county.bind('dataBound', countyfunc);
					county.bind('change', countyfunc);
		});
</script>

<?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']=="state"){?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>
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
</script><?php echo '/*%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/<?php }?>/*/%%SmartyNocache:144040469152a3b4e834b141-45465038%%*/';?>


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
<?php }} ?>