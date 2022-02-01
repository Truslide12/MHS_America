<?php /* Smarty version Smarty-3.1.8, created on 2013-12-27 13:00:46
         compiled from "./incl/xhtml/default/frontend/account-settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32685998752bdce5ed756e2-53881222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77ea9c0a109cb8b555f7fb3e36fdeabeee17f2ff' => 
    array (
      0 => './incl/xhtml/default/frontend/account-settings.tpl',
      1 => 1385853845,
      2 => 'file',
    ),
    '7ed0bd03d771761c7c5f33c327229cb1d136b7d4' => 
    array (
      0 => './incl/xhtml/default/frontend/master.tpl',
      1 => 1387587693,
      2 => 'file',
    ),
    'b65717798301c450abcbe02263b8e2c10c06e826' => 
    array (
      0 => './incl/xhtml/default/frontend/account-company-colors.tpl',
      1 => 1385852772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32685998752bdce5ed756e2-53881222',
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
    'is_search' => 0,
    'state' => 1,
    'article' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52bdce602d2ff3_26986985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bdce602d2ff3_26986985')) {function content_52bdce602d2ff3_26986985($_smarty_tpl) {?><!DOCTYPE html>
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
	<link href='//fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/_/css/style.css">
	<link rel="stylesheet" href="/_/kendo/styles/kendo.common.min.css">
    <link rel="stylesheet" href="/_/kendo/styles/kendo.default.min.css">
	<link rel="stylesheet" type="text/css" href="/_/css/zocial.css">
	<link rel="stylesheet" type="text/css" media="screen" href="/_/js/jqvmap/jqvmap.css">
	<?php if ((u('user_name'))=="keystroke"&&1==2){?>
	<link rel="stylesheet" href="/_/css/keystroke.css" type="text/css">
	<?php }?>
	
	<script src="/_/js/<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\']){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }else{ ?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
jquery-1.10.2.min.js<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
"></script>
    <script src="/_/kendo/js/kendo.web.min.js"></script>
	<script src="/_/js/modernizr-1.7.min.js"></script>
	
	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script type="text/javascript" href="//code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="/_/css/dashboard.css" type="text/css">
<?php /*  Call merged included template "account-company-colors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("account-company-colors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '32685998752bdce5ed756e2-53881222');
content_52bdce5f20ada4_29493267($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "account-company-colors.tpl" */?>
</head>

<body itemscope itemtype="http://schema.org/WebPage" class="<?php echo $_smarty_tpl->tpl_vars['bodyclasses']->value;?>
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
							<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

							<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php  $_smarty_tpl->tpl_vars[\'opt\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'opt\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'opt\']->key => $_smarty_tpl->tpl_vars[\'opt\']->value){
$_smarty_tpl->tpl_vars[\'opt\']->_loop = true;
?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

							<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'separator\'){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<li><hr></li><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'title\'){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<li><strong><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
</strong></li><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }else{ ?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<li><a href="<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[0];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
"><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

							<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php } ?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

							<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

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
	<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\']){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<style type="text/css">
		div#submenu { border-color:#545454; }
	</style><img src="/_/images/backdrops/<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'file\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
" alt="" id="pagecanvas"<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'heightstretch\']==1){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
 style="height:100%;width:auto;max-width:none;min-width:100%;"<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

<?php if ((p('advert'))==true){?><aside class="advertisement" id="backdrop"><a href="<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'url\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'image\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
"/></a><?php }?></div>
<div id="content">
<?php if ((p('advert'))==true){?><span class="ad-notice<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
 black<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
" id="advertisement-notice-right">Sponsored Ad</span><span class="ad-notice<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
 black<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
" id="advertisement-notice">Sponsored Ad</span>
<?php }?>
<section id="us-county">
<div class="county-content">
	<div class="content-box" id="dashboard">
		<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_banner_backcolor\']!=\'\'){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<div id="<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'name\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
-banner"></div><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

		<div class="mini-menu"><a href="/account/logout">Log out</a></div>
		<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'is_company_user\']){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

		<a href="/account"><img src="<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'logo\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
"></a>
		<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }else{ ?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<h1><a href="/account">Dashboard</a> &raquo; Settings</h1>
		<h2>Aloha, <?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo u(\'display_name\');?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
!</h2><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

		<div class="dashboard-box" id="settings-form">
			<aside class="right-sidebar">
				<h2>Account</h2>
				<ul id="action-list">
				<li><a href="/account">Return to dashboard...</a></li>
				</ul>
			</aside>
			<form name="settings" action="/account/settings" method="POST">
			<span class="r"><a href="#" class="zocial primary" style="margin-right:1em;" onclick="$('#settingsSubmit').click();">Save Changes</a><input type="submit" id="settingsSubmit" value="Save Changes" style="display:none;"></span><h1>Personal account settings</h1>
			<section>
					<hr>
					<h3>Your username</h3>
					<div class="pp">
						<label>Username<br><input type="text" class="textbox" disabled="disabled" value="<?php echo u('user_name');?>
" style="background:#efefef;cursor:default;"></label>
					</div>
					<hr>
					<h3>Change associated email</h3>
					<div class="pp">
						<label for="set_email">Email address<br><input type="text"  name="email" id="set_email" value="<?php echo u('email');?>
" class="textbox"></label>
					</div>
					<hr>
					<h3>Change password</h3>
					<div class="pp">
						<label for="set_password">Current Password<br><input type="password" name="password" id="set_password" class="textbox"></label><br>
						<label for="set_passwordc">New Password<br><input type="password" name="passwordc" id="set_passwordc" class="textbox"></label><br>
						<label for="set_passwordcheck">Confirm Password<br><input type="password" name="passwordcheck" id="set_passwordcheck" class="textbox"></label>
					</div>
					<hr>
					<h3>Avatar</h3>
					<div class="pp">
						<p style="float:right; width:269px;padding:1em;"><small>To keep the small things simple and secure, avatars on the site are provided through the gravatar system.<br><a href="http://www.gravatar.com" target="_blank">more info</a></small></p>
						<img src="<?php echo get_gravatar(u('email'),175);?>
&d=mm" alt="avatar">
					</div>
					<hr>
					<div style="padding:1em 0;">
						<input type="reset" id="settingsReset" style="display:none;" value="Reset Form">
						<a href="#" class="zocial secondary" onclick="$('#settingsReset').click();">Reset Form</a>
						<span class="r"><a href="#" class="zocial primary" onclick="$('#settingsSubmit').click();">Save Changes</a></span>
					</div>
			</section>
			</form>
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
				<div class="g3"><hr><h3>&middot; &middot; &middot;</h3><p><small><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\']){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<span style="font-style:italic;">Background image by <?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
</a><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<br>Courtesy of <?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
</a><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
.</span><br><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
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




<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']=="state"){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
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
</script><?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>


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
<?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-12-27 13:00:47
         compiled from "./incl/xhtml/default/frontend/account-company-colors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52bdce5f20ada4_29493267')) {function content_52bdce5f20ada4_29493267($_smarty_tpl) {?><style type="text/css">
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_backdrop\']!=\'\'){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

	body { background: url(<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_backdrop\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
) <?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_backdrop_align\']){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_backdrop_align\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }else{ ?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
center top no-repeat<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
; }
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_container_backcolor\']!=\'\'){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

	section#us-county { background:<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_container_backcolor\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
; }
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_banner_backcolor\']!=\'\'){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

	#<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'name\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
-banner { height:80px; background:<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_banner_backcolor\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
; margin:-1em -1em -60px; }
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_banner_linkcolor\']!=\'\'){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

	#dashboard .mini-menu a { color:<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_banner_linkcolor\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
; }
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_backcolor\']!=\'\'){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

	div#content > footer { border:none; background:<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_backcolor\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
; }
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_headcolor\']!=\'\'){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

	div#content > footer h3 { color:<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_headcolor\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
; }
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_bodycolor\']!=\'\'){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

	div#content > footer { color:<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_bodycolor\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
; }
	div#content > footer ul > li > a { color:<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_bodycolor\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
; background:none; text-decoration:none; }
	div#content > footer ul > li > a:hover { color:<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_bodycolor\'];?>
/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>
; background:none; text-decoration:underline; }
	div.account-box { color:#333; }
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'company\'][\'data\'][\'dashboard_footer_lightheaders\']==1){?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

	.grid h3 { font-size:120%;font-weight:normal; }
<?php echo '/*%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/<?php }?>/*/%%SmartyNocache:32685998752bdce5ed756e2-53881222%%*/';?>

</style><?php }} ?>