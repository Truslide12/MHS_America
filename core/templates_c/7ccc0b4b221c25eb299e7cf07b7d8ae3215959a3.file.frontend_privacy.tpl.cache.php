<?php /* Smarty version Smarty-3.1.8, created on 2014-01-15 20:19:17
         compiled from "./incl/xhtml/default/frontend/frontend_privacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126870531252d741a5742fb2-56976238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ccc0b4b221c25eb299e7cf07b7d8ae3215959a3' => 
    array (
      0 => './incl/xhtml/default/frontend/frontend_privacy.tpl',
      1 => 1383630400,
      2 => 'file',
    ),
    '7ed0bd03d771761c7c5f33c327229cb1d136b7d4' => 
    array (
      0 => './incl/xhtml/default/frontend/master.tpl',
      1 => 1388288299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126870531252d741a5742fb2-56976238',
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
  'unifunc' => 'content_52d741a648e541_69417644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d741a648e541_69417644')) {function content_52d741a648e541_69417644($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Privacy Policy :: <?php echo s('title');?>
</title>

	<meta name="title" content="<?php echo s('title');?>
 - <?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_title\'];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
">
	<meta name="description" content="<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_description\'];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_keywords\'];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
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
<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'title\']){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
 - <?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'title\'];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
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
	
	<script src="/_/js/<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\']){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'jquery\'];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }else{ ?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
jquery-1.10.2.min.js<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
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
							<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>

							<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php  $_smarty_tpl->tpl_vars[\'opt\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'opt\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'useritems\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'opt\']->key => $_smarty_tpl->tpl_vars[\'opt\']->value){
$_smarty_tpl->tpl_vars[\'opt\']->_loop = true;
?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>

							<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'separator\'){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<li><hr></li><?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'opt\']->value[0]==\'title\'){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<li><strong><?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
</strong></li><?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }else{ ?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<li><a href="<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[0];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
"><?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'opt\']->value[1];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>

							<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php } ?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>

							<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>

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
	<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\']){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<style type="text/css">
		div#submenu { border-color:#545454; }
	</style><img src="/_/images/backdrops/<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'file\'];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
" alt="" id="pagecanvas"<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'heightstretch\']==1){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
 style="height:100%;width:auto;max-width:none;min-width:100%;"<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
><?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>

<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'advert\']==true){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<aside class="advertisement" id="backdrop"><a href="<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'url\'];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'backdrop\'][\'image\'];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
"/></a><?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
</div>
<div id="content">
<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'advert\']==true){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<span class="ad-notice<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
 black<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
" id="advertisement-notice-right">Sponsored Ad</span><span class="ad-notice<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'blacknotices\']==1){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
 black<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
" id="advertisement-notice">Sponsored Ad</span>
<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>

<section id="us-county">
<div class="county-content">
	<div class="content-box body-text">
		<h1>Privacy Policy</h1><br>
		<p>We provide a variety of services as well as share many services provided by others. We also allow you to be involved in the growth and development of our systems and to collect and monitor information you find interest in. As you use our services, we'd like to extend a warm welcome to you on behalf of the MHS America community and provide the following clarification on our data use policies, so you may better understand our relationship with both our partners and the public.</p>

<ul>
<li>What information we collect and why we collect it</li>
<li>How we use the information we collect</li>
<li>How you may access and update information</li>
</ul>

<h2>Information we collect</h2>
<p class="indent1"><strong>Information you give us</strong><br>
At registration, we require some basic information, including name, email address, and desired password.</p>

<p class="indent1"><strong>Information we gather with permission</strong><br>If you participate in our Business Profiles system, we may also collect information both that you give to us and that we find online in public domain. This may include phone numbers, fax numbers, email addresses, store / office hours, physical addresses, etc. that apply to the entity represented by each profile you do create.</p>

<p class="indent1"><strong>Information on your site activity</strong><br>
We collect information of your activity on our website such as when registered users "watch" a community / professional or give a "Kudos" to a profile. The user's generated unique ID number is attached to such data for data integrity, but it is relayed anonymously to the communities / professionals to which it applies. This anonymous data provides analytical insight to business owners to the success of their campaign on MHS America.</p>

<h2>How we use the information we collect</h2>
<p class="indent1"><strong>Analytics</strong><br>
As mentioned above, data useful to businesses is collected and shared with them in a manner which does not reveal the identity of the individual users or reveal any data not separable from users' identities.</p>

<p class="indent1"><strong>Troubleshooting</strong><br>
Data may or may not be used for troubleshooting issues with the site's functionality.</p>
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
				<div class="g3"><hr><h3>&middot; &middot; &middot;</h3><p><small><?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\']){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<span style="font-style:italic;">Background image by <?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\'];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
</a><?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<br>Courtesy of <?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\'];?>
/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
</a><?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
.</span><br><?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
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




<?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']=="state"){?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>
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
</script><?php echo '/*%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/<?php }?>/*/%%SmartyNocache:126870531252d741a5742fb2-56976238%%*/';?>


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