<?php /* Smarty version Smarty-3.1.8, created on 2014-01-15 22:22:56
         compiled from "./incl/xhtml/default/frontend/united-states-state.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51559262152d75ea048f532-53505410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dfde8e6f0d2939bafae209365617e82615eb8c3' => 
    array (
      0 => './incl/xhtml/default/frontend/united-states-state.tpl',
      1 => 1389072664,
      2 => 'file',
    ),
    '7ed0bd03d771761c7c5f33c327229cb1d136b7d4' => 
    array (
      0 => './incl/xhtml/default/frontend/master.tpl',
      1 => 1388288299,
      2 => 'file',
    ),
    '77288c39bae634b208d74410502963c105e4a942' => 
    array (
      0 => './incl/xhtml/default/frontend/ads-four-square.tpl',
      1 => 1383628110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51559262152d75ea048f532-53505410',
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
  'unifunc' => 'content_52d75ea15f7079_36455054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d75ea15f7079_36455054')) {function content_52d75ea15f7079_36455054($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'title\']){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'title\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
 :: <?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo s('title');?>
</title>

	<meta name="title" content="<?php echo s('title');?>
 - <?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_title\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
">
	<meta name="description" content="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_description\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_keywords\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
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
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'title\']){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
 - <?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'title\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
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
	
<!-- Generated by OpenX 2.8.10 -->
<script type='text/javascript'><!--// <![CDATA[
    var OA_zones = {"zone_2_1":2,"zone_2_2":2,"zone_2_3":2,"zone_2_4":2}    
// ]]> --></script>
<script type='text/javascript' src='http://mhsamerica.metachrys.com/openx/www/delivery/spcjs.php?id=2'></script>

	<script src="/_/js/<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\']){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }else{ ?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
jquery-1.10.2.min.js<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
"></script>
    <script src="/_/kendo/js/kendo.web.min.js"></script>
	<script src="/_/js/modernizr-1.7.min.js"></script>
	
	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
</head>

<body itemscope itemtype="http://schema.org/WebPage" class="<?php echo $_smarty_tpl->tpl_vars['bodyclasses']->value;?>
">

<div class="wrapper">
	<header>
		<h1 class="dymaxionscript"><a href="/" title="To the front page"><?php echo s('title');?>
</a></h1>
		<nav>
			<ul>
				<li class="active"><a href="#">Search Method</a><ul><li><a href="#map">County Map</a></li><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ((s(\'usemetros\'))==1&&$_smarty_tpl->tpl_vars[\'page\']->value[\'metrocount\']!=0){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<li><a href="#area">General Area</a></li><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<li><a href="#counties">County Names</a></li><li><a href="#city">City Name</a></li></ul></li><li id="page-direction"></li>
				
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
							<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

							<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php  $_smarty_tpl->tpl_vars[\'opt\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'opt\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'opt\']->key => $_smarty_tpl->tpl_vars[\'opt\']->value){
$_smarty_tpl->tpl_vars[\'opt\']->_loop = true;
?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

							<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'separator\'){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<li><hr></li><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'title\'){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<li><strong><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</strong></li><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }else{ ?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<li><a href="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[0];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

							<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php } ?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

							<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

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
	<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\']){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<style type="text/css">
		div#submenu { border-color:#545454; }
	</style><img src="/_/images/backdrops/<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'file\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" alt="" id="pagecanvas"<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'heightstretch\']==1){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
 style="height:100%;width:auto;max-width:none;min-width:100%;"<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'advert\']==true){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<aside class="advertisement" id="backdrop"><a href="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'url\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'image\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
"/></a><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</div>
<div id="content">
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'advert\']==true){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<span class="ad-notice<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
 black<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" id="advertisement-notice-right">Sponsored Ad</span><span class="ad-notice<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
 black<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" id="advertisement-notice">Sponsored Ad</span>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

<a name="map" id="map_a" style="display:block;width:0;height:0;position:absolute;top:-100px;"></a>
<style type="text/css">
#label-state { 
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if (($_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'labelmargins\'])!=\'\'){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

	margin:<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'labelmargins\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
;
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if (($_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'labelwidth\'])!=\'\'){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

	width:<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'labelwidth\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
;
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
 
}
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if (($_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'custommargin\'])!=\'\'){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

div#vmap {
	margin:<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'custommargin\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
;
}
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if (($_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'customheight\'])!=\'\'){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

div#vmap {
	min-height:<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'customheight\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
 !important;
}
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

</style>
<section id="us-map-state">
	<a name="top" id="top_a">&nbsp;</a>
	<span id="label-state"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'title\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</span>
	<div id="vmap"></div>	
</section>
<?php /*  Call merged included template "ads-four-square.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ads-four-square.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '51559262152d75ea048f532-53505410');
content_52d75ea0c850f3_76274624($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ads-four-square.tpl" */?>
<section id="us-county">
<h1><?php echo l('by city name');?>
</h1>
<div class="padded-cell city-form">
<form action="/query" method="GET">
	<input type="text" name="city" id="citytext">
	<input type="hidden" name="state" value="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'id\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
">
	<input type="submit" value="Search" class="zocial primary" id="citysubmit">
	<style type="text/css">
		.city-form {padding-top:2em;padding-bottom:2em;text-align:center;}
		#citytext {font-size:200%;margin:0 0.5em;}
		#citysubmit {width:120px;height:55px;font-size:160%;margin:0 0.5em;}
	</style>
</form>
</div>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ((s(\'usemetros\'))==1&&$_smarty_tpl->tpl_vars[\'page\']->value[\'metrocount\']!=0){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<h1><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo l(\'by area\');?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</h1>
<div class="padded-cell">
	<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php  $_smarty_tpl->tpl_vars[\'county\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'county\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'metros\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'county\']->key => $_smarty_tpl->tpl_vars[\'county\']->value){
$_smarty_tpl->tpl_vars[\'county\']->_loop = true;
?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

		<div class="city-box">
			<a href="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo s(\'domain\');?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
/region/<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'county\']->value[\'name\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
"<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'county\']->value[\'commcount\']==0&&$_smarty_tpl->tpl_vars[\'county\']->value[\'procount\']==0){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
 class="light"<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
><span class="city-title"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'county\']->value[\'title\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</span><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ((s(\'tidbits\'))==1){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<p><span title="Homes" class="tidbit-homes"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'county\']->value[\'homecount\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</span><span title="Spaces" class="tidbit-lots"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'county\']->value[\'lotcount\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</span><span title="Professionals" class="tidbit-pros"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'county\']->value[\'procount\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</span></p><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</a>
		</div>
	<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php } ?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<a name="counties" id="counties_a"></a>
<div class="clearfix"></div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<h1><?php echo l('by county');?>
</h1>
<div class="padded-cell">
	<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php  $_smarty_tpl->tpl_vars[\'county\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'county\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'counties\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'county\']->key => $_smarty_tpl->tpl_vars[\'county\']->value){
$_smarty_tpl->tpl_vars[\'county\']->_loop = true;
?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

		<div class="city-box">
			<a href="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo s(\'domain\');?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
/state/<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'county\']->value[\'stateabbr\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
/county/<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'county\']->value[\'name\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
"<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'county\']->value[\'commcount\']==0&&$_smarty_tpl->tpl_vars[\'county\']->value[\'procount\']==0){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
 class="light"<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
><span class="city-title"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'county\']->value[\'title\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</span><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ((s(\'tidbits\'))==1){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<p><span title="Homes" class="tidbit-homes"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'county\']->value[\'homecount\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</span><span title="Spaces" class="tidbit-lots"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'county\']->value[\'lotcount\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</span><span title="Professionals" class="tidbit-pros"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'county\']->value[\'procount\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</span></p><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</a>
		</div>
	<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php } ?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

<div class="clearfix"></div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
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
				<div class="g3"><hr><h3>&middot; &middot; &middot;</h3><p><small><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\']){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<span style="font-style:italic;">Background image by <?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</a><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<br>Courtesy of <?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</a><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
.</span><br><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
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

	
<script src="/_/js/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="/_/js/jqvmap/maps/united-states/jquery.vmap.<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'name\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery('#vmap').vectorMap({
    map: '<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'name\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
',
    backgroundColor: null,
    color: 'rgba(74,96,255,0.7)',
    hoverColor: '#2233aa',
    selectedColor: '#00b7ea',
	borderColor: '#ffffff',
	borderWidth: 1,
	borderOpacity: 0.65,
    enableZoom: false,
    showTooltip: true,
    selectedRegion: null,
	onRegionClick: function(element, code, region)
    {
        $('body').append($('<form>').attr('method',"GET").attr('id','link-'+code).attr('action','<?php echo s('domain');?>
/state/<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'abbr\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
/county/' + code));
		$('#link-'+code).submit();
    }
});
</script>

<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']=="state"){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
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
</script><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>


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
<?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2014-01-15 22:22:56
         compiled from "./incl/xhtml/default/frontend/ads-four-square.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52d75ea0c850f3_76274624')) {function content_52d75ea0c850f3_76274624($_smarty_tpl) {?><section id="business-tiles"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']=="state"){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ((s(\'usemetros\'))==1&&$_smarty_tpl->tpl_vars[\'page\']->value[\'metrocount\']!=0){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<a name="area" id="area_a"></a><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }else{ ?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<a name="counties" id="counties_a"></a><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

<header<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
 class="black"<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
>Sponsored Advertisements</header>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][0][\'id\']==0){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<div id="advert-a"><a class="please-add-your-ad-here">Please :3</a></div>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }else{ ?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<div id="advert-a"><img src="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][0][\'image\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" width="0" height="0"><img src="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][0][\'hover\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" width="0" height="0"><a href="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][0][\'url\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" target="_blank"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][0][\'title\']!=\'\'){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][0][\'title\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }else{ ?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</a></div>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][1][\'id\']==0){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<div id="advert-b"><a class="please-add-your-ad-here">Please :3</a></div>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }else{ ?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<div id="advert-b"><img src="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][1][\'image\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" width="0" height="0"><img src="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][1][\'hover\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" width="0" height="0"><a href="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][1][\'url\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" target="_blank"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][1][\'title\']!=\'\'){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][1][\'title\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }else{ ?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</a></div>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][2][\'id\']==0){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<div id="advert-c"><a class="please-add-your-ad-here">Please :3</a></div>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }else{ ?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<div id="advert-c"><img src="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][2][\'image\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" width="0" height="0"><img src="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][2][\'hover\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" width="0" height="0"><a href="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][2][\'url\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" target="_blank"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][2][\'title\']!=\'\'){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][2][\'title\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }else{ ?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</a></div>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][3][\'id\']==0){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<div id="advert-d"><a class="please-add-your-ad-here">Please :3</a></div>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }else{ ?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<div id="advert-d"><img src="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][3][\'image\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" width="0" height="0"><img src="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][3][\'hover\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" width="0" height="0"><a href="<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][3][\'url\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
" target="_blank"><?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][3][\'title\']!=\'\'){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][3][\'title\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }else{ ?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
</a></div>
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

</section>
<style type="text/css">
<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][0][\'id\']!=0){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

#advert-a a {
  background: url(<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][0][\'image\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
) center center no-repeat;
}
#advert-a a:hover {
  background: url(<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][0][\'hover\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
) center center no-repeat;
}<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][1][\'id\']!=0){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

#advert-b a {
  background: url(<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][1][\'image\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
) center center no-repeat;
}
#advert-b a:hover {
  background: url(<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][1][\'hover\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
) center center no-repeat;
}<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][2][\'id\']!=0){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

#advert-c a {
  background: url(<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][2][\'image\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
) center center no-repeat;
}
#advert-c a:hover {
  background: url(<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][2][\'hover\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
) center center no-repeat;
}<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][3][\'id\']!=0){?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

#advert-d a {
  background: url(<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][3][\'image\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
) center center no-repeat;
}
#advert-d a:hover {
  background: url(<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'ads\'][3][\'hover\'];?>
/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>
) center center no-repeat;
}<?php echo '/*%%SmartyNocache:51559262152d75ea048f532-53505410%%*/<?php }?>/*/%%SmartyNocache:51559262152d75ea048f532-53505410%%*/';?>

</style><?php }} ?>