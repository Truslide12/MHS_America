<?php /* Smarty version Smarty-3.1.8, created on 2014-01-15 20:20:08
         compiled from "./incl/xhtml/default/frontend/master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47469038052d741d804aed1-42351382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ed0bd03d771761c7c5f33c327229cb1d136b7d4' => 
    array (
      0 => './incl/xhtml/default/frontend/master.tpl',
      1 => 1388288299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47469038052d741d804aed1-42351382',
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
  'unifunc' => 'content_52d741d8a08d90_92682099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d741d8a08d90_92682099')) {function content_52d741d8a08d90_92682099($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'title\']){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'title\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
 :: <?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<?php echo s('title');?>
</title>

	<meta name="title" content="<?php echo s('title');?>
 - <?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_title\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
">
	<meta name="description" content="<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_description\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_keywords\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
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
<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'title\']){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
 - <?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'title\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
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
	
	<script src="/_/js/<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\']){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }else{ ?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
jquery-1.10.2.min.js<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
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
				<li id="page-direction">Select your state from the map below:</li>
				
				<li<?php if ($_smarty_tpl->tpl_vars['category']->value=="communities"||$_smarty_tpl->tpl_vars['category']->value==''){?> class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
<?php if ($_smarty_tpl->tpl_vars['category']->value!="communities"){?>communities<?php }?>" rel="spaces"><?php echo l('communities');?>
</a></li>
				<?php if (1==2){?>
				<li<?php if ($_smarty_tpl->tpl_vars['category']->value=="spaces"){?> class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
<?php if ($_smarty_tpl->tpl_vars['category']->value!="spaces"){?>spaces<?php }?>" rel="spaces"><?php echo l('spaces');?>
</a></li>
				<li<?php if ($_smarty_tpl->tpl_vars['category']->value=="homes"){?> class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
<?php if ($_smarty_tpl->tpl_vars['category']->value!="homes"){?>homes<?php }?>" rel="homes" aria-haspopup="true"><?php echo l('homes');?>
</a>
					<ul>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
homes/for-sale" rel="for-sales"><?php echo l('for sale');?>
</a></li>
					</ul>
				</li>
				<?php }?>
				<li<?php if ($_smarty_tpl->tpl_vars['category']->value=="pros"){?> class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
<?php if ($_smarty_tpl->tpl_vars['category']->value!="pros"){?>pros<?php }?>" aria-haspopup="true"><?php echo l('professionals');?>
</a>
					<?php if (1==2){?>
					<ul>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
pros/dealers" rel="dealers"><?php echo l('dealers');?>
</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
pros/agents" rel="agents"><?php echo l('licensed agents');?>
</a></li>
						<li class="end"></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
pros/inspectors" rel="inspectors"><?php echo l('safety inspectors');?>
</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
pros/builders" rel="builders"><?php echo l('builders');?>
</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
pros/transporters" rel="transporters"><?php echo l('transporters');?>
</a></li>
					</ul>
					<?php }?>
				</li>
				<li class="end"></li>
				
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
							<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>

							<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php  $_smarty_tpl->tpl_vars[\'opt\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'opt\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'opt\']->key => $_smarty_tpl->tpl_vars[\'opt\']->value){
$_smarty_tpl->tpl_vars[\'opt\']->_loop = true;
?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>

							<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'separator\'){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<li><hr></li><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'title\'){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<li><strong><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
</strong></li><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }else{ ?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<li><a href="<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[0];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
"><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>

							<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php } ?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>

							<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>

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
	<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\']){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<style type="text/css">
		div#submenu { border-color:#545454; }
	</style><img src="/_/images/backdrops/<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'file\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
" alt="" id="pagecanvas"<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'heightstretch\']==1){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
 style="height:100%;width:auto;max-width:none;min-width:100%;"<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>

<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'advert\']==true){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<aside class="advertisement" id="backdrop"><a href="<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'url\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'image\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
"/></a><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
</div>
<div id="content">
<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'advert\']==true){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<span class="ad-notice<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
 black<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
" id="advertisement-notice-right">Sponsored Ad</span><span class="ad-notice<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
 black<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
" id="advertisement-notice">Sponsored Ad</span>
<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>

<style type="text/css">
div#vmap {
margin:0 !important;
min-height:600px !important;
}
#vmap > svg {
height:600px !important;
}
</style>
	<section id="greeter">
		<div id="greeter-wrapper">
			<h1 class="dymaxionscript"><img src="/_/images/elias/mhs-logo.png"><?php echo s('title');?>
</h1><sup>BETA</sup>
			<h2 class="home-subtitle">&quot;<?php echo s('tagline');?>
&quot;</h2>
			<?php if (1==2){?>
			<aside id="search-form">
				<div>
					<p><?php echo l('select location');?>
:</p>
					<form action="/search" method="POST">
						<input type="hidden" name="searchtype" value="0-0">
						<input type="text" name="query" value="" placeholder="Enter a city..." class="search"> 
						California 
						<input type="submit" value="Search" class="search-btn">
					</form>
				</div>
			</aside>
			<?php }?>
		</div>
	</section>
	<section id="map-box">
		<div id="vmap" style="width:98%;height:500px;padding:1%;min-height:500px !important;"></div>
	</section>
	<?php if ($_smarty_tpl->tpl_vars['is_search']->value){?>
	<section>
		<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php  $_smarty_tpl->tpl_vars[\'stateitem\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'stateitem\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'stateitems\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'stateitem\']->key => $_smarty_tpl->tpl_vars[\'stateitem\']->value){
$_smarty_tpl->tpl_vars[\'stateitem\']->_loop = true;
?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>

		<div class="city-box">
			<a href="<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo s(\'domain\');?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
/state/<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'stateitem\']->value[\'abbr\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
" class="light"><span class="city-title"><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'stateitem\']->value[\'title\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
</span></a>
		</div>
		<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php } ?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>

	</section>
	<?php }?>
	<section class="container">
		<header><h1>News</h1></header>
		<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php  $_smarty_tpl->tpl_vars[\'article\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'article\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'news\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'article\']->key => $_smarty_tpl->tpl_vars[\'article\']->value){
$_smarty_tpl->tpl_vars[\'article\']->_loop = true;
?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>

			<aside>
			
				<h2><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'article\']->value[\'fancydate\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
</h2>
			
			</aside>
			<article>
				
				<h1><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'article\']->value[\'title\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
</h1>

				<p><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'article\']->value[\'summary\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
</p>

				<footer><a href="/news/<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'article\']->value[\'id\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
" class="zocial secondary">Read more</a></footer>
			
			</article>
		<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'article\']->_loop) {
?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>

			<div>
				<h1>No news is good news?</h1>
			</div>
		<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php } ?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>

	</section>
<div class="clearfix"></div>
<p>&nbsp;</p>
<p>&nbsp;</p>

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
				<div class="g3"><hr><h3>&middot; &middot; &middot;</h3><p><small><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\']){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<span style="font-style:italic;">Background image by <?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
</a><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<br>Courtesy of <?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\'];?>
/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
</a><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
.</span><br><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
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


<script src="/_/js/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
<script src="/_/js/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script> 
<script type="text/javascript">
jQuery('#vmap').vectorMap({
    map: 'usa_en',
    backgroundColor: null,
    color: '#7f8efe',
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
/state/' + code));
		$('#link-'+code).submit();
    }
});
</script>

<?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']=="state"){?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>
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
</script><?php echo '/*%%SmartyNocache:47469038052d741d804aed1-42351382%%*/<?php }?>/*/%%SmartyNocache:47469038052d741d804aed1-42351382%%*/';?>


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