<?php /* Smarty version Smarty-3.1.8, created on 2014-01-15 20:19:22
         compiled from "./incl/xhtml/default/frontend/frontend_connected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169570071152d741aa3fbe21-30797819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cb0d5798704a96cd5435586e3bc4b6db4cbfc77' => 
    array (
      0 => './incl/xhtml/default/frontend/frontend_connected.tpl',
      1 => 1383630391,
      2 => 'file',
    ),
    '7ed0bd03d771761c7c5f33c327229cb1d136b7d4' => 
    array (
      0 => './incl/xhtml/default/frontend/master.tpl',
      1 => 1388288299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169570071152d741aa3fbe21-30797819',
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
  'unifunc' => 'content_52d741ab0c30a1_77121699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d741ab0c30a1_77121699')) {function content_52d741ab0c30a1_77121699($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo s('title');?>
 Connected</title>

	<meta name="title" content="<?php echo s('title');?>
 - <?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_title\'];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
">
	<meta name="description" content="<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_description\'];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_keywords\'];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
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
<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'title\']){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
 - <?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'title\'];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
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
	
	<script src="/_/js/<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\']){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\'];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }else{ ?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
jquery-1.10.2.min.js<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
"></script>
    <script src="/_/kendo/js/kendo.web.min.js"></script>
	<script src="/_/js/modernizr-1.7.min.js"></script>
	
	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
</head>

<body itemscope itemtype="http://schema.org/WebPage" class="<?php echo $_smarty_tpl->tpl_vars['bodyclasses']->value;?>
">

<div class="wrapper">
	<header>
		<h1 class="dymaxionscript"><a href="<?php echo s('domain');?>
/connected"><?php echo s('title');?>
</a></h1>
		<nav>
			<ul>
				
				<li id="mhslabel">Connected</li>
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
							<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>

							<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php  $_smarty_tpl->tpl_vars[\'opt\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'opt\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'opt\']->key => $_smarty_tpl->tpl_vars[\'opt\']->value){
$_smarty_tpl->tpl_vars[\'opt\']->_loop = true;
?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>

							<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'separator\'){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<li><hr></li><?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'title\'){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<li><strong><?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
</strong></li><?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }else{ ?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<li><a href="<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[0];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
"><?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>

							<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php } ?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>

							<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>

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
	<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\']){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<style type="text/css">
		div#submenu { border-color:#545454; }
	</style><img src="/_/images/backdrops/<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'file\'];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
" alt="" id="pagecanvas"<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'heightstretch\']==1){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
 style="height:100%;width:auto;max-width:none;min-width:100%;"<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
><?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>

<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'advert\']==true){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<aside class="advertisement" id="backdrop"><a href="<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'url\'];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'image\'];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
"/></a><?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
</div>
<div id="content">
<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'advert\']==true){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<span class="ad-notice<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
 black<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
" id="advertisement-notice-right">Sponsored Ad</span><span class="ad-notice<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
 black<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
" id="advertisement-notice">Sponsored Ad</span>
<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>

<section id="us-county">
<div class="county-content">
	<div class="content-box">
			<section class="container">
		</section><style type="text/css">div#content section.container aside {background:#fff;} div#content section.container aside h2 {background:#f9f9f9;} div#content section.container aside:after {display:none;}</style>
		<div class="grid" style="margin-left:0;width:100%;">
				<div class="wblock" style="height:auto;padding-top:0;">
					<h1 style="border-color:#09f;line-height:1.5em;">Forging a new path...</h1>
					<p style="float:left;padding:0 1em 0 0;margin:0 0 -1em -10px;"><img src="/_/images/connected/aside-the-push-2.jpg" alt="The Walkway" width="300"></p>
					<p style="padding:1em;text-indent:0.5em;font-size:110%;">We've made it our mission to continually form bold, new ideas. Always on the creative edge, we are redefining the manufactured housing industry. Thanks to the unity we offer to the industry, all parties benefit from a vast network of professional contractors and community staff.</p>
					<p style="padding:1em;text-indent:0.5em;font-size:110%;">One of the most crucial elements of this new path is integration. There are several ways that you can become an active part of the journey. For more information, read on...</p>
					<p style="font-size:80%;color:#ccc;margin:0 0 -1em;">Image courtesy of suwatpo / FreeDigitalPhotos.net</p>
					<div class="clearfix"></div>
				</div>
				<div class="g4">
					<div class="wblock">
						<strong>Consumers</strong><br>&nbsp;
						<p>
						<?php echo s('title');?>
 aims to be as simple and versatile as possible. For more information, choose your platform:<br>
						<a class="hl" href="/connected/mobile/ios"><img src="/_/images/icons/platforms/apple.png" alt="iOS" class="emblem"><span>iOS</span></a><a class="hl" href="/connected/mobile/android"><img src="/_/images/icons/platforms/android.png" alt="Android" class="emblem"><span>Android</span></a><a class="hl" href="/connected/mobile/ubuntu"><img src="/_/images/icons/platforms/ubuntu.png" alt="Ubuntu" class="emblem"><span>Ubuntu</span></a>
						</p>
					</div>
				</div>
				<div class="g4">
					<div class="wblock">
						<strong>Partners</strong><br>&nbsp;
						<p>Want to promote your presence in the <?php echo s('title');?>
 community? You can embed a profile badge in your website.</p>
						<p>&nbsp;</p>
						<p><a href="/connected/web">More Information</a></p>
					</div>
				</div>
				<div class="g4">
					<div class="wblock">
						<strong>Developers</strong><br>&nbsp;
						<p>We know what you're going to ask, and Yes! We have a fully-functional API available to the public.</p>
						<p>&nbsp;</p>
						<p><a href="/connected/integration">Developers' Circle</a></p>
					</div>
				</div>
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
				<div class="g3"><hr><h3>&middot; &middot; &middot;</h3><p><small><?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\']){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<span style="font-style:italic;">Background image by <?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\'];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
</a><?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<br>Courtesy of <?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\'];?>
/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
</a><?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
.</span><br><?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
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


<style type="text/css">
div.wrapper > header {
	background: #0000cc; /* Old browsers */
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pg0KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCAxIDEiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPg0KICA8bGluZWFyR3JhZGllbnQgaWQ9ImdyYWQtdWNnZy1nZW5lcmF0ZWQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMCUiIHkxPSIwJSIgeDI9IjAlIiB5Mj0iMTAwJSI+DQogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwMDBjYyIgc3RvcC1vcGFjaXR5PSIxIi8+DQogICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjMDAwMDk5IiBzdG9wLW9wYWNpdHk9IjEiLz4NCiAgPC9saW5lYXJHcmFkaWVudD4NCiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4NCjwvc3ZnPg==);
	background: -moz-linear-gradient(top,  #0000cc 0%, #000099 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#0000cc), color-stop(100%,#000099)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #0000cc 0%,#000099 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #0000cc 0%,#000099 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #0000cc 0%,#000099 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #0000cc 0%,#000099 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0000cc', endColorstr='#000099',GradientType=0 ); /* IE6-8 */
}
div#submenu {
	background:#fff;
	height:4px;
}
body {padding-top:45px;}
div.wrapper > header > h1 {width:290px;z-index:2;}
#mhslabel {
	line-height:43px;
	font-size:150%;
	color:#fff;
	margin-left:-120px;
}
</style>

<?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']=="state"){?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>
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
</script><?php echo '/*%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/<?php }?>/*/%%SmartyNocache:169570071152d741aa3fbe21-30797819%%*/';?>


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