<?php /* Smarty version Smarty-3.1.8, created on 2013-11-30 14:13:44
         compiled from "./incl/xhtml/default/profile-community.tpl" */ ?>
<?php /*%%SmartyHeaderCode:946084120529a46f900a719-87559328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dc33413c4c4f26fd71b857ec1a8e86e39946bc3' => 
    array (
      0 => './incl/xhtml/default/profile-community.tpl',
      1 => 1385529516,
      2 => 'file',
    ),
    '9ac6e6c131a45150ab8ddbf64d470fe16d2ccaa3' => 
    array (
      0 => './incl/xhtml/default/profile-master.tpl',
      1 => 1385529503,
      2 => 'file',
    ),
    '32d6388b39598793f7b0b3bbd08b665147d4be4d' => 
    array (
      0 => './incl/xhtml/default/master.tpl',
      1 => 1384841929,
      2 => 'file',
    ),
    'e730628291f51922737aee96c7ede4362328b3dd' => 
    array (
      0 => './incl/xhtml/default/profile-section-contact-edithours.tpl',
      1 => 1383628116,
      2 => 'file',
    ),
    'c6d462c906a4742ed4dc6e674324de6c82475010' => 
    array (
      0 => './incl/xhtml/default/profile-section-contact.tpl',
      1 => 1383628116,
      2 => 'file',
    ),
    '6138d96c06dc7123de3c83a1d112eac4ca037a8b' => 
    array (
      0 => './incl/xhtml/default/profile-section-info.tpl',
      1 => 1385837868,
      2 => 'file',
    ),
    '9dd4af8c914fb154dee5bd1af5dfbf80c2de63c8' => 
    array (
      0 => './incl/xhtml/default/profile-section-homes.tpl',
      1 => 1383628116,
      2 => 'file',
    ),
    '6027210bb543fe28baf70332fd803736abcf078d' => 
    array (
      0 => './incl/xhtml/default/profile-section-contact-mini.tpl',
      1 => 1383628115,
      2 => 'file',
    ),
    'dfbba7d343d6df29e1e2b5595b53e0e38ad12524' => 
    array (
      0 => './incl/xhtml/default/profile-section-amenities.tpl',
      1 => 1385838426,
      2 => 'file',
    ),
    '5a9d2a0676c6e12238438895b5be8721513dee4e' => 
    array (
      0 => './incl/xhtml/default/profile-section-spaces.tpl',
      1 => 1383628116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '946084120529a46f900a719-87559328',
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
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_529a46fb803b80_90242593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529a46fb803b80_90242593')) {function content_529a46fb803b80_90242593($_smarty_tpl) {?><!DOCTYPE html>

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
	<?php if ((u('user_name'))=="keystroke"){?>
	<link rel="stylesheet" href="/_/css/keystroke.css" type="text/css">
	<?php }?>
	
	<script src="/_/js/<?php if ($_smarty_tpl->tpl_vars['page']->value['jquery']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['jquery'];?>
<?php }else{ ?>jquery-1.10.2.min.js<?php }?>"></script>
	<?php if (1==2){?><script>window.jQuery || document.write("<script src='/_/js/jquery-1.7.2.min.js'>\x3C/script>")</script><?php }?>
    <script src="/_/kendo/js/kendo.web.min.js"></script>
	<script src="/_/js/modernizr-1.7.min.js"></script>
	
<script type="text/javascript" src="/_/js/jquery-ui-1.10.3.custom.min.js"></script>
<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><link rel="stylesheet" href="/_/css/coverphoto.css" type="text/css"><?php }?>
<script type="text/javascript" src="/_/js/jquery.roundabout.min.js"></script>
<script type="text/javascript" src="/_/js/plugins/jquery.event.drag.live-2.2.js"></script>
<script type="text/javascript" src="/_/js/plugins/jquery.event.drop.live-2.2.js"></script>
<script type="text/javascript" src="/_/js/plugins/jquery.easing.1.3.js"></script>

<?php if (1==2){?>	<script src="//cufon.shoqolate.com/js/cufon-yui.js" type="text/javascript"></script>
	<script src="/_/js/dymaxion-script.cufonfonts.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('.dymaxionscript', { fontFamily: 'DymaxionScript', hover: true }); 
	</script>
<?php }?>	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<style type="text/css">
body {padding-top:42px;}
div#content {width:auto;background:none;border-left:none;border-right:none;}
section#us-county {background:none;}
footer .wrapper {width:790px;margin:0 auto;}
#submenu {display:none;}
</style>
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
	<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']){?><style type="text/css">
		div#submenu { border-color:#545454; }
	</style><img src="/_/images/backdrops/<?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['file'];?>
" alt="" id="pagecanvas"<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['heightstretch']==1){?> style="height:100%;width:auto;max-width:none;min-width:100%;"<?php }?>><?php }?>
<?php if ((p('advert'))==true){?><aside class="advertisement" id="backdrop"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['backdrop']['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['backdrop']['image'];?>
"/></a><?php }?></div>
<div id="content">
<?php if ((p('advert'))==true){?><span class="ad-notice<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['blacknotices']==1){?> black<?php }?>" id="advertisement-notice-right">Sponsored Ad</span><span class="ad-notice<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['blacknotices']==1){?> black<?php }?>" id="advertisement-notice">Sponsored Ad</span>
<?php }?>
<section id="us-county">
<div class="county-content">
	<div class="content-box profile"><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><form action="<?php echo s('domain');?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['prof_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['username'];?>
/edit" method="POST"><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['pro_profile']==1){?><div id="<?php if ($_smarty_tpl->tpl_vars['page']->value['plan_info']['id']==4){?>premier<?php }else{ ?>premium<?php }?>-tag"><a href="<?php echo s('domain');?>
/account/register" target="_blank" title="Click for more info"><?php if ($_smarty_tpl->tpl_vars['page']->value['plan_info']['id']==4){?>Premier<?php }else{ ?>Premium<?php }?><br/>Partner</a></div><?php }?><h1><?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['title'];?>
<small><a href="/locale/<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['abbr'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['county']['name'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['city']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['city']['title'];?>
, <?php echo $_smarty_tpl->tpl_vars['page']->value['state']['title'];?>
</a></small></h1>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['cover']&&$_smarty_tpl->tpl_vars['page']->value['data']['cover_position']&&$_smarty_tpl->tpl_vars['page']->value['plan']['misc_banner']==1&&!$_smarty_tpl->tpl_vars['page']->value['slides']){?><div id="head-banner"></div>
		<style>
			div.wrapper > header {-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;box-shadow:0 0 10px #000;}
			#us-county .county-content h1 {color:#dedede;}
			#us-county h1 small a {color:#999999;}
			#premier-tag {-moz-box-shadow:0 0 4em #999;-webkit-box-shadow:0 0 4em #999;box-shadow:0 0 4em #999;}
			#head-banner {
				background-image:url(<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['cover'];?>
);
				background-position:<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['cover_position'];?>
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
			
		</style><div id="datcinema"></div><?php }elseif($_smarty_tpl->tpl_vars['page']->value['slides']&&$_smarty_tpl->tpl_vars['page']->value['plan']['misc_banner']==1){?>
		<style>
			div.wrapper > header {-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;box-shadow:0 0 10px #000;}
			#us-county .county-content h1 {color:#dedede;}
			#us-county h1 small a {color:#999999;}
			#premier-tag {-moz-box-shadow:0 0 4em #999;-webkit-box-shadow:0 0 4em #999;box-shadow:0 0 4em #999;}
			#datcinema {
				background:#242424 url(/_/images/patterns/skewed_print.png) top left repeat;
				position:absolute;
				top:0;left:0;right:0;
				height:<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>370<?php }else{ ?>350<?php }?>px;
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
				<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>
				-moz-box-shadow: 0 0 50px #000;
				-webkit-box-shadow: 0 0 50px #000;
				box-shadow: 0 0 50px #000;
				background:rgba(0,0,0,0.5);
				z-index: 280;
				<?php }else{ ?>
				-moz-box-shadow: 0 0 10px #fff;
				-webkit-box-shadow: 0 0 10px #fff;
				box-shadow: 0 0 10px #fff;
				z-index: 279;
				display:none;
				<?php }?>
			}
			#profile-sheet {margin-top:50px;}
			li#photo1 {
				background-image:url(<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][0]['cover'];?>
);
				background-position:<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][0]['cover_position'];?>
;
			}
			li#photo2 {
				background-image:url(<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][1]['cover'];?>
);
				background-position:<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][1]['cover_position'];?>
;
			}
			li#photo3 {
				background-image:url(<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][2]['cover'];?>
);
				background-position:<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][2]['cover_position'];?>
;
			}<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>
			.roundabout-moveable-item .coverphoto-container {width:440px;height:154px;}
			.roundabout-in-focus .coverphoto-container, .roundabout-in-focus .coverphoto-container canvas {width:800px;height:280px;}
			.roundabout-in-focus .coverphoto-container .coverphoto-photo-container img {width:800px !important;}
			.roundabout-moveable-item .coverphoto-container .actions .chooser {display:none;}
			.roundabout-in-focus .coverphoto-container .actions .chooser {display:block;}
			.headerslides .coverphoto-container, .headerslides > li > img {display:none;}
			ul.editmode li .coverphoto-container, ul.editmode > li > img {display:block;}
			<?php }?>
			li.roundabout-in-focus {cursor: default;}
			.roundabout-holder {list-style: none;padding: 0;margin:4px 0 0 1em;height:280px;width:100%;}
			.roundabout-moveable-item {width:600px;height: 210px;cursor: pointer;background-color: #ccc;border: none;}
			.roundabout-in-focus {width:800px;height: 280px;margin: 0 -10px;cursor: auto;}
		</style>
		<ul id="headbannerset" class="headerslides">
			<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']||$_smarty_tpl->tpl_vars['page']->value['slides'][0]['cover']){?><li id="photo1"><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][0]['cover'];?>
" class="stubimg"><?php }?></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']||$_smarty_tpl->tpl_vars['page']->value['slides'][1]['cover']){?><li id="photo2"><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][1]['cover'];?>
" class="stubimg"><?php }?></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']||$_smarty_tpl->tpl_vars['page']->value['slides'][2]['cover']){?><li id="photo3"><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][2]['cover'];?>
" class="stubimg"><?php }?></li><?php }?>
		</ul><div id="datcinema"></div><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><input type="hidden" id="inputphoto1" name="photo1" value=""><input type="hidden" id="inputphoto2" name="photo2" value=""><input type="hidden" id="inputphoto3" name="photo3" value=""><div id="current-glow"><a href="#" class="zocial secondary" id="photoman" style="font-size:120%;margin:122px 299px;">Manage Cover Photos</a></div><?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?><div id="profile-buttonset<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['cover']&&$_smarty_tpl->tpl_vars['page']->value['data']['cover_position']&&$_smarty_tpl->tpl_vars['page']->value['plan']['misc_banner']==1&&(!$_smarty_tpl->tpl_vars['page']->value['slides']||1==1)){?><?php }else{ ?>-nobanner<?php }?>"><?php if (!$_smarty_tpl->tpl_vars['page']->value['editmode']){?><a class="zocial follow<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['cover']&&$_smarty_tpl->tpl_vars['page']->value['data']['cover_position']&&$_smarty_tpl->tpl_vars['page']->value['plan']['misc_banner']==1){?>-red<?php }?>" href="<?php echo s('domain');?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['prof_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['username'];?>
/<?php if ($_smarty_tpl->tpl_vars['page']->value['watched']){?>un<?php }?>watch"><?php if ($_smarty_tpl->tpl_vars['page']->value['watched']){?>Unwatch<?php }else{ ?>Watch<?php }?> Community</a><?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['misc_kudos']==1&&!$_smarty_tpl->tpl_vars['page']->value['isowner']){?> &nbsp; <a class="zocial primary<?php if (!$_smarty_tpl->tpl_vars['page']->value['kudoed']){?> kudos<?php }?>" href="<?php echo s('domain');?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['prof_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['username'];?>
/<?php if ($_smarty_tpl->tpl_vars['page']->value['kudoed']){?>no<?php }?>kudos"><?php if ($_smarty_tpl->tpl_vars['page']->value['kudoed']){?>Take Away <?php }?>Kudos</a><?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['isowner']){?><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?> &nbsp; <button type="submit" class="zocial follow" id="mainsubmit">Save Changes</button><?php }?> &nbsp; <a class="zocial primary" href="<?php echo s('domain');?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['prof_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['username'];?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['editmode']){?>/edit<?php }?>"><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>Exit Editor<?php }else{ ?>Edit Profile<?php }?></a><?php }?></div><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><p class="ribbon"<?php if ($_smarty_tpl->tpl_vars['page']->value['slides']){?> style="margin:20px -9px -28px -11px;z-index:280;position:relative;"<?php }?>>The profile is currently in edit mode. Changes will only be applied after clicking <strong>Save Changes</strong> above.</p>
		<a href="#" class="zocial secondary kudos" style="font-size:120%;display:block;top:-159px;position:relative;z-index:290;left:353px;margin:-35px 0;display:none;" id="nophotoman">Done</a><?php }?>
		<div id="profile-sheet">
		<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['pro_profile']==1){?><?php /*  Call merged included template "profile-section-contact.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("profile-section-contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '946084120529a46f900a719-87559328');
content_529a46f9ebaab6_13589037($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "profile-section-contact.tpl" */?><?php }else{ ?><style type="text/css">div.profile {padding:10px 24px 14em;background:#efefef;}</style><?php }?>
		<div class="col2 l">
			<?php /*  Call merged included template "profile-section-info.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("profile-section-info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '946084120529a46f900a719-87559328');
content_529a46fa478ad5_66006685($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "profile-section-info.tpl" */?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['pro_profile']==1){?>
			<section<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?> style="padding:2em 0 0;"<?php }?>>
				<header>About Our Community</header>
				<p><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><textarea style="max-width:100%;min-width:100%;" name="description" class="fancy"><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['description'];?>
</textarea><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['description']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['description'];?>
<?php }else{ ?><h3><em>No description available</em></h3><?php }?><?php }?></p>
			</section><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['com_homes']==1&&$_smarty_tpl->tpl_vars['page']->value['space_count']>20){?><?php /*  Call merged included template "profile-section-homes.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("profile-section-homes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '946084120529a46f900a719-87559328');
content_529a46fa7e77a4_97312756($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "profile-section-homes.tpl" */?><?php }?>
		</div>
		<div class="col2 r">
			<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['pro_profile']!=1){?><?php /*  Call merged included template "profile-section-contact-mini.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("profile-section-contact-mini.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '946084120529a46f900a719-87559328');
content_529a46faa409f2_23521711($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "profile-section-contact-mini.tpl" */?><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['pro_profile']==1){?><?php /*  Call merged included template "profile-section-amenities.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("profile-section-amenities.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '946084120529a46f900a719-87559328');
content_529a46fac1c9f9_49385904($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "profile-section-amenities.tpl" */?><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['com_spaces']==1){?><?php /*  Call merged included template "profile-section-spaces.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("profile-section-spaces.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '946084120529a46f900a719-87559328');
content_529a46faed6575_25352635($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "profile-section-spaces.tpl" */?><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['com_homes']==1&&$_smarty_tpl->tpl_vars['page']->value['space_count']<21){?><?php /*  Call merged included template "profile-section-homes.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("profile-section-homes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '946084120529a46f900a719-87559328');
content_529a46fa7e77a4_97312756($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "profile-section-homes.tpl" */?><?php }?>
		</div>
		<div class="clearfix"></div><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?></form><?php }?>
		</div><!-- End of sheet -->
	</div>
</div>
</section>

	<footer><form action="/contactmail.php" method="GET">
		<div class="wrapper">
			<div class="grid">
				<div class="g3">
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
				</div>
				<div class="g4">
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
				<div class="g5 ticker">
					<?php if ((s('footerticker'))==1){?><h3 class="padded"><kbd>234</kbd> Communities</h3>
					<h3><kbd>3,442</kbd> Spaces</h3>
					<h3><kbd>453</kbd> Homes</h3>
					<h3><kbd>1,203</kbd> Professionals</h3><?php }?>
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
				<div class="g3"><hr><h3>&middot; &middot; &middot;</h3><p><small><?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['credit']){?><span style="font-style:italic;">Background image by <?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']&&!$_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy']){?><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['link'];?>
" target="_blank" rel="noindex,nofollow"><?php }?><?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['credit'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']&&!$_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy']){?></a><?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy']){?><br>Courtesy of <?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']){?><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['link'];?>
" target="_blank" rel="noindex,nofollow"><?php }?><?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']){?></a><?php }?><?php }?>.</span><br><?php }?><?php echo l('copyright');?>
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
		enableDrag:false, autoplay: true, autoplayDuration: 5000<?php if (!$_smarty_tpl->tpl_vars['page']->value['editmode']){?>, easing: "easeOutQuad"<?php }?>});
});
</script>
<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><script type="text/javascript" src="/_/markitup/jquery.markitup.js"></script>
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
						value: "<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['id'];?>
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
						value: "<?php echo $_smarty_tpl->tpl_vars['page']->value['county']['id'];?>
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
						value: "<?php echo $_smarty_tpl->tpl_vars['page']->value['city']['id'];?>
"
                    }).data("kendoDropDownList");
					var countyid = <?php echo $_smarty_tpl->tpl_vars['page']->value['state']['id'];?>
;
					var countyid = <?php echo $_smarty_tpl->tpl_vars['page']->value['county']['id'];?>
;
					var cityid = <?php echo $_smarty_tpl->tpl_vars['page']->value['city']['id'];?>
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
					state.value(<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['id'];?>
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
						if(!curcount) {curcount = <?php echo $_smarty_tpl->tpl_vars['page']->value['lastspace'];?>
;}
						curcount = curcount.toString();
						spcc.addClass('spaceitem').attr('id','spacebox' + curcount);
						var spcnewe = $('#spc_new').val();
						spcc.html('<label for="spc'+curcount+'">Space #: </label><input type="text" name="spc['+curcount+']" id="spc'+curcount+'" value="' + spcnewe + '"><a id="delete_'+curcount+'" class="zocial secondary deletebtn" onclick="$(\'#spacebox'+curcount+'\').remove();">X</a>' + <?php if ($_smarty_tpl->tpl_vars['page']->value['data']['simple_spaces']){?>'<select id="newspace_' + curcount + '" name="spcsize[' + curcount + ']"><option value="1">Single</option><option value="2">Double</option><option value="3">Triple</option></select>'<?php }else{ ?><?php }?>);
						$('#spaceslist').append(spcc);
						spcc.show();
						<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['simple_spaces']){?>$("select#newspace_"+curcount).width('80px').kendoDropDownList();
						cursel = $("select#newspace_"+curcount).data("kendoDropDownList");
						cursel.value(newsel.value());<?php }?>
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
</script><?php }?><?php if ((s('googleanalytics'))==1){?><script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script><?php }elseif(1==2){?>
<!-- Start Open Web Analytics Tracker -->
<script type="text/javascript">
//<![CDATA[
var owa_baseUrl = 'http://beta.mhsamerica.com/owa/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', 'c4a98502d9645e90bba8dfcdc97554ba']);
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);

(function() {
	var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
	owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
	_owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
	var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
//]]>
</script>
<!-- End Open Web Analytics Code --><?php }else{ ?>
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
<noscript><p><img src="http://piwik.mhsamerica.com/piwik.php?idsite=1&rec=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Code -->
<?php }?>
</body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-11-30 14:13:45
         compiled from "./incl/xhtml/default/profile-section-contact.tpl" */ ?>
<?php if ($_valid && !is_callable('content_529a46f9ebaab6_13589037')) {function content_529a46f9ebaab6_13589037($_smarty_tpl) {?><div id="profile-info">
			<div>
				<strong>Address</strong>
				<ul>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['address']||$_smarty_tpl->tpl_vars['page']->value['editmode']){?><li><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>Street Address<br><input type="text" name="data[address]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['address'];?>
"><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['address'];?>
<?php }?></li><?php }?>
				<li><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>
				State<br><input id="bsnsstate" name="state"><br>
				County<br><input id="bsnscounty" name="county"><br>
				City<br><input id="bsnscity" name="city"><br>
				Postal Code<br><input type="text" name="data[zipcode]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['zipcode'];?>
"><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value['city']['title'];?>
, <?php echo strtoupper($_smarty_tpl->tpl_vars['page']->value['state']['abbr']);?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['zipcode']){?> <?php echo $_smarty_tpl->tpl_vars['page']->value['data']['zipcode'];?>
<?php }?><?php }?></li>
				</ul>
			</div>
			<div<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?> style="width:344px;"<?php }?>>
				<strong>Office Hours</strong>
				<ul><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>
					<?php /*  Call merged included template "profile-section-contact-edithours.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("profile-section-contact-edithours.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '946084120529a46f900a719-87559328');
content_529a46fa0482d1_36871045($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "profile-section-contact-edithours.tpl" */?>
				<?php }else{ ?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['hourspresent']){?><?php  $_smarty_tpl->tpl_vars['trange'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trange']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['profile']['hours']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trange']->key => $_smarty_tpl->tpl_vars['trange']->value){
$_smarty_tpl->tpl_vars['trange']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['trange']->value['start']!=7){?>				<li><strong><?php if ($_smarty_tpl->tpl_vars['trange']->value['end']==0){?><?php echo $_smarty_tpl->tpl_vars['page']->value['longdays'][$_smarty_tpl->tpl_vars['trange']->value['start']];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value['shortdays'][$_smarty_tpl->tpl_vars['trange']->value['start']];?>
 - <?php echo $_smarty_tpl->tpl_vars['page']->value['shortdays'][$_smarty_tpl->tpl_vars['trange']->value['end']];?>
<?php }?></strong> <span><?php if ($_smarty_tpl->tpl_vars['trange']->value['time']==0){?>Closed<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['trange']->value['time'];?>
 - <?php echo $_smarty_tpl->tpl_vars['trange']->value['endtime'];?>
<?php }?></span></li>
<?php }?><?php } ?><?php }else{ ?><span style="font-style:italic;">No office hours available</span><?php }?>
<?php }?>
				</ul>
			</div>
			<?php if (!$_smarty_tpl->tpl_vars['page']->value['editmode']){?><div class="header-carry">
				<strong>&nbsp;</strong>
				<ul>
<?php if ($_smarty_tpl->tpl_vars['page']->value['hourspresent']){?><?php  $_smarty_tpl->tpl_vars['trange'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trange']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['profile']['hours']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trange']->key => $_smarty_tpl->tpl_vars['trange']->value){
$_smarty_tpl->tpl_vars['trange']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['trange']->value['start']==7){?>				<li><strong><?php echo $_smarty_tpl->tpl_vars['page']->value['longdays'][$_smarty_tpl->tpl_vars['trange']->value['start']];?>
<?php if ($_smarty_tpl->tpl_vars['trange']->value['end']){?> - <?php echo $_smarty_tpl->tpl_vars['page']->value['shortdays'][$_smarty_tpl->tpl_vars['trange']->value['end']];?>
<?php }?></strong> <span><?php if ($_smarty_tpl->tpl_vars['trange']->value['time']==0){?>Closed<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['trange']->value['time'];?>
 - <?php echo $_smarty_tpl->tpl_vars['trange']->value['endtime'];?>
<?php }?></span></li>
<?php }?><?php } ?><?php }?>
				<li>&nbsp;</li>
				</ul>
			</div><?php }?>
			<div>
				<strong>Contact Details</strong>
				<ul><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['manager']||$_smarty_tpl->tpl_vars['page']->value['editmode']){?>
				<li><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>Manager Name<br><input type="text" name="manager" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['manager'];?>
"><?php }else{ ?>Mgr. <?php echo $_smarty_tpl->tpl_vars['page']->value['data']['manager'];?>
<?php }?></li><?php }?>
				<li><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>Phone<br><input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['phone'];?>
"><?php }else{ ?><strong>Phone</strong> <span class="c"><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['phone']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['phone'];?>
<?php }else{ ?>&mdash;<?php }?></span><?php }?></li>
				<li><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>Fax<br><input type="text" name="fax" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['fax'];?>
"><?php }else{ ?><strong>Fax</strong> <span class="c"><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['fax']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['fax'];?>
<?php }else{ ?>&mdash;<?php }?></span><?php }?></li><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['email']||$_smarty_tpl->tpl_vars['page']->value['editmode']){?>
				<li><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>Email<br><input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['email'];?>
"><?php }else{ ?><strong>Email</strong> <span class="c"><a href="/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['prof_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['username'];?>
/email">Send Message</a></span><?php }?></li><?php }?>
				</ul>
			</div>
			<p class="clearfix"></p>
		</div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-11-30 14:13:46
         compiled from "./incl/xhtml/default/profile-section-contact-edithours.tpl" */ ?>
<?php if ($_valid && !is_callable('content_529a46fa0482d1_36871045')) {function content_529a46fa0482d1_36871045($_smarty_tpl) {?><span class="week"><input type="checkbox" name="daysopen[1]" id="openmonday" checked><label class="chk" for="openmonday"></label> Monday</span>
					<span id="hoursmonday"><select name="hoursfrom[1]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select>
					to
					<select name="hoursto[1]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select></span><span id="closedmonday" style="display:none;">CLOSED</span>
					<!-- Tuesday -->
					<span class="week"><input type="checkbox" name="daysopen[2]" id="opentuesday" checked><label class="chk" for="opentuesday"></label> Tuesday</span>
					<span id="hourstuesday"><select name="hoursfrom[2]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select>
					to
					<select name="hoursto[2]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select></span><span id="closedtuesday" style="display:none;">CLOSED</span>
					 <!-- Wednesday -->
					<span class="week"><input type="checkbox" name="daysopen[3]" id="openwednesday" checked><label class="chk" for="openwednesday"></label> Wednesday</span>
					<span id="hourswednesday"><select name="hoursfrom[3]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select>
					to
					<select name="hoursto[3]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select></span><span id="closedwednesday" style="display:none;">CLOSED</span>
					 <!-- Thursday -->
					<span class="week"><input type="checkbox" name="daysopen[4]" id="openthursday" checked><label class="chk" for="openthursday"></label> Thursday</span>
					<span id="hoursthursday"><select name="hoursfrom[4]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select>
					to
					<select name="hoursto[4]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select></span><span id="closedthursday" style="display:none;">CLOSED</span>
					 <!-- Friday -->
					<span class="week"><input type="checkbox" name="daysopen[5]" id="openfriday" checked><label class="chk" for="openfriday"></label> Friday</span>
					<span id="hoursfriday"><select name="hoursfrom[5]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select>
					to
					<select name="hoursto[5]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select></span><span id="closedfriday" style="display:none;">CLOSED</span>
					 <!-- Saturday -->
					<span class="week"><input type="checkbox" name="daysopen[6]" id="opensaturday" checked><label class="chk" for="opensaturday"></label> Saturday</span>
					<span id="hourssaturday"><select name="hoursfrom[6]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select>
					to
					<select name="hoursto[6]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select></span><span id="closedsaturday" style="display:none;">CLOSED</span>
					 <!-- Sunday -->
					<span class="week"><input type="checkbox" name="daysopen[7]" id="opensunday" checked><label class="chk" for="opensunday"></label> Sunday</span>
					<span id="hourssunday"><select name="hoursfrom[7]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select>
					to
					<select name="hoursto[7]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select></span><span id="closedsunday" style="display:none;">CLOSED</span><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-11-30 14:13:46
         compiled from "./incl/xhtml/default/profile-section-info.tpl" */ ?>
<?php if ($_valid && !is_callable('content_529a46fa478ad5_66006685')) {function content_529a46fa478ad5_66006685($_smarty_tpl) {?><section class="tiled blue">
				<header>Community Information</header><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><div id="cominfo">
					<strong>Community Type: </strong><select name="data[senior]">
						<option value="0"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['senior']!=1){?> selected<?php }?>>Open Community</option>
						<option value="1"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['senior']==1){?> selected<?php }?>>Senior Community</option>
					</select><br>
					<input type="checkbox" name="data[accessible]" id="info_access"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['handicap']==1){?> checked<?php }?> value="1"><label for="info_access" class="chk"> Good Accessible (Handicap)</label> 
					<input type="checkbox" name="data[neighborhood]" id="info_neighborhood"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['neighborhood']==1){?> checked<?php }?> value="1"><label for="info_neighborhood" class="chk"> Neighborhood Watch</label><br>
					<input type="checkbox" name="data[gated]" id="info_gated"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['gated']==1){?> checked<?php }?> value="1"><label for="info_gated" class="chk"> Gated Community</label> 
					<input type="checkbox" name="data[pets]" id="info_pets"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['pets']==1){?> checked<?php }?> value="1"><label for="info_pets" class="chk"> Pets Allowed</label> 
					<input type="checkbox" name="data[scenic]" id="info_scenic"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['scenic']==1){?> checked<?php }?> value="1"><label for="info_scenic" class="chk"> Scenic Area</label>
					<div class="clearfix">&nbsp;</div>
					<label for="info_spacecount"><strong>Spaces Total:</strong><br><input type="text" name="spacecount" id="info_spacecount" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['spaces'];?>
"></label>
					<div class="clearfix">&nbsp;</div>
					<label for="info_spacerent"><strong>Average Space Rent:</strong><br><input type="text" name="rent" id="info_rent" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['rent'];?>
"> /mo</label>
					<div class="clearfix">&nbsp;</div>
				</div><?php }else{ ?><div id="cominfo">
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['senior']==1){?><div class="info-tile fiftyfive tilesort">55+</div><?php }else{ ?><div class="info-tile fiftyfive dbl-tile">Family</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['handicap']==1){?><div class="info-tile fiftyfive handicap tilesort" title="Good Accesibility">&nbsp;</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['neighborhood']==1){?><div class="info-tile fiftyfive neighborhood tilesort" title="Neighborhood Watch">&nbsp;</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['spaces']){?><div class="info-tile dbl-tile tilesort"><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['spaces'];?>
<span>&nbsp;spaces</span></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['rent']){?><div class="info-tile tpl-tile tilesort"><span><small>Starting at</small> </span>$<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['rent'];?>
<span>&nbsp;/mo</span></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['gated']==1){?><div class="info-tile property dbl-tile tilesort">Gated</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['pets']==1){?><div class="info-tile property dbl-tile tilesort">Pets<span class="check"></span></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['scenic']==1){?><div class="info-tile property dbl-tile tilesort">Scenic</div><?php }?>
				<div class="clearfix"></div></div><div class="clearfix"></div><?php }?>
			</section><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-11-30 14:13:46
         compiled from "./incl/xhtml/default/profile-section-homes.tpl" */ ?>
<?php if ($_valid && !is_callable('content_529a46fa7e77a4_97312756')) {function content_529a46fa7e77a4_97312756($_smarty_tpl) {?><section class="h3-list premium-box">
				<header>Homes Available<?php if ($_smarty_tpl->tpl_vars['page']->value['homes']&&!$_smarty_tpl->tpl_vars['page']->value['editmode']){?> (<?php echo $_smarty_tpl->tpl_vars['page']->value['home_count'];?>
)<?php }?></header>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><a href="<?php echo s('domain');?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['prof_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['username'];?>
/edithomes" class="zocial primary" target="_blank">Manage Listed Homes</a> <?php if ($_smarty_tpl->tpl_vars['page']->value['home_count']==0){?>No homes<?php }elseif($_smarty_tpl->tpl_vars['page']->value['home_count']==1){?>1 home<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value['home_count'];?>
 homes<?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['page']->value['homes']){?>
					<?php  $_smarty_tpl->tpl_vars['home'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['home']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['homes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['home']->key => $_smarty_tpl->tpl_vars['home']->value){
$_smarty_tpl->tpl_vars['home']->_loop = true;
?>
					<div class="homeh3"><span class="r red">$<?php echo $_smarty_tpl->tpl_vars['home']->value['price'];?>
</span><a href="/home/<?php echo $_smarty_tpl->tpl_vars['home']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['home']->value['year'];?>
 <?php echo $_smarty_tpl->tpl_vars['home']->value['brand'];?>
</a> - <small><?php echo $_smarty_tpl->tpl_vars['home']->value['width'];?>
&times;<?php echo $_smarty_tpl->tpl_vars['home']->value['length'];?>
</small></div>
					<?php }
if (!$_smarty_tpl->tpl_vars['home']->_loop) {
?>
					<p>Error</p>
					<?php } ?>
				<?php }else{ ?>
					<div><h3>No homes listed</h3></div>
				<?php }?><?php }?>
			</section><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-11-30 14:13:46
         compiled from "./incl/xhtml/default/profile-section-contact-mini.tpl" */ ?>
<?php if ($_valid && !is_callable('content_529a46faa409f2_23521711')) {function content_529a46faa409f2_23521711($_smarty_tpl) {?><div id="profile-info">
			<div>
				<strong>Address</strong>
				<ul>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['address']){?><li><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['address'];?>
</li><?php }?>
				<li><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>State<br>
				<input id="bsnsstate" name="state"><br>
				County<br>
				<input id="bsnscounty" name="county"><br>
				City<br>
				<input id="bsnscity" name="city"><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value['city']['title'];?>
, <?php echo strtoupper($_smarty_tpl->tpl_vars['page']->value['state']['abbr']);?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['zipcode']){?> <?php echo $_smarty_tpl->tpl_vars['page']->value['data']['zipcode'];?>
<?php }?><?php }?></li>
				</ul>
			</div>
			<div>
				<strong>Contact Details</strong>
				<ul><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['manager']&&1==2){?>
				<li><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['manager'];?>
</li><?php }?>
				<li><strong>Phone</strong> <span class="c"><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['phone']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['phone'];?>
<?php }else{ ?>&mdash;<?php }?></span></li>
				<li><strong>Fax</strong> <span class="c"><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['fax']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['fax'];?>
<?php }else{ ?>&mdash;<?php }?></span></li><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['email']){?>
				<li><strong>Email</strong> <span class="c"><a href="/email/community/<?php echo $_smarty_tpl->tpl_vars['profile']->value['id'];?>
">Send Message</a></span></li><?php }?>
				</ul>
			</div>
			<p class="clearfix"></p>
		</div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-11-30 14:13:46
         compiled from "./incl/xhtml/default/profile-section-amenities.tpl" */ ?>
<?php if ($_valid && !is_callable('content_529a46fac1c9f9_49385904')) {function content_529a46fac1c9f9_49385904($_smarty_tpl) {?><section class="tiled red">
				<header>Community Amenities</header>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>
				<input type="hidden" name="data[pool]" value="0">
				<input type="hidden" name="data[clubhouse]" value="0">
				<input type="hidden" name="data[laundry]" value="0">
				<input type="hidden" name="data[playground]" value="0">
				<input type="hidden" name="data[basketball]" value="0">
				<div class="editboxes">
				<input type="checkbox" id="pool" name="data[pool]"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['pool']==1){?> checked<?php }?> value="1"><label class="chk" for="pool"> Pool</label>
				<input type="checkbox" id="clubhouse" name="data[clubhouse]"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['rec']==1){?> checked<?php }?> value="1"><label class="chk" for="clubhouse"> Clubhouse</label>
				<input type="checkbox" id="laundry" name="data[laundry]"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['laundry']==1){?> checked<?php }?> value="1"><label class="chk" for="laundry"> Laundry</label>
				<input type="checkbox" id="playground" name="data[playground]"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['playground']==1){?> checked<?php }?> value="1"><label class="chk" for="playground"> Playground</label>
				<input type="checkbox" id="basketball" name="data[basketball]"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['basketball']==1){?> checked<?php }?> value="1"><label class="chk" for="basketball"> Basketball</label>
				</div>
			<?php }else{ ?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['pool']==1){?><div class="info-tile dbl-tile">Pool</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['rec']==1){?><div class="info-tile dbl-tile">Clubhouse</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['laundry']==1){?><div class="info-tile dbl-tile">Laundry</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['playground']==1){?><div class="info-tile dbl-tile">Playground</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['basketball']==1){?><div class="info-tile dbl-tile">Basketball</div><?php }?>
			<?php }?>
				<div class="clearfix"></div>
			</section><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-11-30 14:13:46
         compiled from "./incl/xhtml/default/profile-section-spaces.tpl" */ ?>
<?php if ($_valid && !is_callable('content_529a46faed6575_25352635')) {function content_529a46faed6575_25352635($_smarty_tpl) {?><section class="<?php if ($_smarty_tpl->tpl_vars['page']->value['spaces']){?>tiled <?php }?>premium-box">
				<header>Spaces available<?php if ($_smarty_tpl->tpl_vars['page']->value['spaces']&&!$_smarty_tpl->tpl_vars['page']->value['editmode']){?> (<?php echo $_smarty_tpl->tpl_vars['page']->value['space_count'];?>
)<?php }?></header>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['spaces']){?>
				<div class="p-<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>edit<?php }?>mosaic"><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>
					<div id="spaceslist"><?php }?>
					<?php  $_smarty_tpl->tpl_vars['space'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['space']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['spaces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['space']->key => $_smarty_tpl->tpl_vars['space']->value){
$_smarty_tpl->tpl_vars['space']->_loop = true;
?>
					<p id="spacebox<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
" class="spaceitem"><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><label for="spc<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
">Space #: </label><input type="text" name="spc[<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
]" id="spc<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
" value="<?php }?><?php echo $_smarty_tpl->tpl_vars['space']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>"><a id="delete_<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
" class="zocial secondary deletebtn" onclick="$('#spacebox<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
').remove();">X</a><?php }?><span><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['simple_spaces']||($_smarty_tpl->tpl_vars['space']->value['width']==0&&$_smarty_tpl->tpl_vars['space']->value['height']==0)){?><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><select name="spcsize[<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
]"><option value="1" <?php if ($_smarty_tpl->tpl_vars['space']->value['shape']==1){?> selected="selected"<?php }?>>Single</option><option value="2" <?php if ($_smarty_tpl->tpl_vars['space']->value['shape']==2){?> selected="selected"<?php }?>>Double</option><option value="3" <?php if ($_smarty_tpl->tpl_vars['space']->value['shape']==3){?> selected="selected"<?php }?>>Triple</option></select><?php }else{ ?><?php echo howwide($_smarty_tpl->tpl_vars['space']->value['shape']);?>
<?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><input type="text" name="spcwd[<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
]" style="width:40px;" value="<?php echo $_smarty_tpl->tpl_vars['space']->value['width'];?>
"> &multi; <input type="text" name="spcht[<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
]" style="width:40px;" value="<?php echo $_smarty_tpl->tpl_vars['space']->value['height'];?>
"><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['space']->value['width'];?>
&times;<?php echo $_smarty_tpl->tpl_vars['space']->value['height'];?>
<?php }?><?php }?></span></p>
					<?php }
if (!$_smarty_tpl->tpl_vars['space']->_loop) {
?>
					<p>Error</p>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>
						</div>
						<p id="spaceboxnew">
							<label for="spc_new">Space #: </label>
							<input type="text" id="spc_new" value=""><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['simple_spaces']==1||($_smarty_tpl->tpl_vars['space']->value['width']==0&&$_smarty_tpl->tpl_vars['space']->value['height']==0)){?><select id="spacenewsize" name="spcsize[]"><option value="1">Single</option><option value="2">Double</option><option value="3">Triple</option></select><?php }else{ ?><input type="text" name="spcwd[]" style="width:40px;" value="24"> &multi; <input type="text" name="spcht[]" style="width:40px;" value="48"><?php }?>
						</p>
						<div class="clearfix"></div>
						<div class="cornerbuttons">
							<input type="reset" class="zocial secondary" value="Clear"><input type="button" class="zocial primary" id="newspcbtn" value="Add Space">
						</div>
					<?php }?>
					<div class="clearfix"></div>
				</div>
				<?php }else{ ?>
				<div><h3>No spaces listed</h3></div>
				<?php }?>
			</section><?php }} ?>