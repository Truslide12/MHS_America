<?php /*%%SmartyHeaderCode:105178252152a0e670ec3fc9-78969264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e71659f33d97d952ad77b72845736500060ae95c' => 
    array (
      0 => './incl/xhtml/default/account-profile.tpl',
      1 => 1386213506,
      2 => 'file',
    ),
    '32d6388b39598793f7b0b3bbd08b665147d4be4d' => 
    array (
      0 => './incl/xhtml/default/master.tpl',
      1 => 1386222573,
      2 => 'file',
    ),
    'cc1cd0b7b61c1e6daafbed1622ea2bf4ff7017ef' => 
    array (
      0 => './incl/xhtml/default/account-company-colors.tpl',
      1 => 1385852772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105178252152a0e670ec3fc9-78969264',
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
  'unifunc' => 'content_52a0e67285e871_59795698',
  'cache_lifetime' => 20,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a0e67285e871_59795698')) {function content_52a0e67285e871_59795698($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Front Page :: MHS America</title>

	<meta name="title" content="MHS America - Search Available Spaces and Services">
	<meta name="description" content="The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="mobile home spaces, mobile home lots, mobile home movers, mobile home specialists, mobile home experts, mobile home parks, mobile home vacancy, mobile home land, mobile home electricians, mobile home technicians">
	<meta name="google-site-verification" content="">
	<meta name="author" content="MHS America">
	<meta name="Copyright" content="Copyright &copy; 2013 MHS America. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<link rel="schema.DC" href="http://purl.org/dc/terms/">
	<meta name="DC.title" content="MHS America - Front Page">
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
	<link rel="stylesheet" href="/_/css/style.css">
	<link rel="stylesheet" href="/_/kendo/styles/kendo.common.min.css">
    <link rel="stylesheet" href="/_/kendo/styles/kendo.default.min.css">
	<link rel="stylesheet" type="text/css" href="/_/css/zocial.css">
	<link rel="stylesheet" type="text/css" media="screen" href="/_/js/jqvmap/jqvmap.css">
	<!-- <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'> -->
		
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

<body class="page_account">

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
</div>
<div id="content">
<section id="us-county">
<div class="county-content">
	<div class="content-box" id="dashboard">
		<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_banner_backcolor']!=''){?><div id="<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['name'];?>
-banner"></div><?php }?>
		<div class="mini-menu"><a href="/account/settings">Settings</a> | <a href="/account/logout">Log out</a></div>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['is_company_user']){?>
		<a href="/account"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['logo'];?>
"></a>
		<?php }else{ ?><h1>Dashboard</h1>
		<h2>Aloha, <?php echo u('display_name');?>
!</h2><?php }?>
		<div class="dashboard-box">
			<aside class="right-sidebar">
				<div class="account-box">
					<span class="r"><img src="http://gravatar.com/avatar/5346bb08332c326da043e8046be4fc70?s=40&d=mm"></span>
					<h2><strong><span>Keystroke</span></strong></h2>
					<ul class="action-list">
						<?php if ($_smarty_tpl->tpl_vars['page']->value['landing']!='plan'&&$_smarty_tpl->tpl_vars['page']->value['landing']!='edit'){?><li><a href="/account/settings">Change settings</a></li>
						<li><hr></li><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['page']->value['landing']=='plan'||$_smarty_tpl->tpl_vars['page']->value['landing']=='edit'){?>
						<li><?php if ($_smarty_tpl->tpl_vars['page']->value['returnpage']=='billing'){?><a href="/account/billing">Back to billing...</a><?php }else{ ?><a href="/account/profile">Back to profiles...</a><?php }?></li><?php }?>
						<li><a href="/account"><?php if ($_smarty_tpl->tpl_vars['page']->value['landing']=='wizard'){?><strong>Cancel process</strong><?php }else{ ?>Return to dashboard...<?php }?></a></li>
						<?php if ($_smarty_tpl->tpl_vars['page']->value['landing']!='plan'&&$_smarty_tpl->tpl_vars['page']->value['landing']!='edit'){?><li><hr></li>
						<li><a href="/account/ads">Manage advertising</a></li>
						<li><a href="/account/billing">Manage billing</a></li><?php }?>
					</ul>
				</div>
			</aside>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['landing']=='manage'){?><span class="r"><a href="<?php echo s('domain');?>
/account/profile?action=new" class="zocial primary" style="margin-right:1em;">New Profile</a></span><?php }?><h1><?php if ($_smarty_tpl->tpl_vars['page']->value['landing']=='wizard'){?><?php if ($_smarty_tpl->tpl_vars['page']->value['businesstype']){?><?php echo ucfirst($_smarty_tpl->tpl_vars['page']->value['businesstype']);?>
<?php }else{ ?>Business<?php }?> Profile Wizard<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value['headline'];?>
<?php }?></h1>
			<hr>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['landing']=='wizard'){?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['step']==1){?>
			<section id="business-wizard"><form method="post" action="/account/profile?action=new">
				<input type="hidden" name="step" value="2">
				<input type="hidden" name="action" value="new">
				<p>Let's start with the most important parts...</p>
				<label for="business-name"><h3>Your name!</h3><input type="text" class="textbox" id="business-name" name="title"></label>
				<hr/>
				<p>...and now...</p>
				<label for="business-type"><h3 style="float:left;">The type of business:&nbsp;&nbsp;</h3>
						<select id="business-type" name="type">
							<option value="community">Mobile Community</option>
							<option value="professional">Service Contractor</option>
						</select>
				</label>
				<hr/>
				<h3>Business Location:</h3>
				<input id="bsnsstate" name="state">
				<input id="bsnscounty" name="county">
				<input id="bsnscity" name="city">
				<p>&nbsp;</p>
				<p align="right"><input type="submit" value="Continue" class="zocial primary"></p>
			</form></section>
			<?php }elseif($_smarty_tpl->tpl_vars['page']->value['step']==2){?>
			<section id="business-wizard"><form method="post" action="/account/profile" id="step-two">
				<input type="hidden" name="step" value="3">
				<input type="hidden" name="action" value="new">
				<h2><?php echo ucwords(stripslashes($_smarty_tpl->tpl_vars['page']->value['businessname']));?>
, <?php echo $_smarty_tpl->tpl_vars['page']->value['city']['title'];?>
, <?php echo $_smarty_tpl->tpl_vars['page']->value['county']['title'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['county']['hidesuffix']!=1){?> <?php if ($_smarty_tpl->tpl_vars['page']->value['state']['suffix']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['state']['suffix'];?>
<?php }else{ ?><?php echo l('county');?>
<?php }?><?php }?>, <?php echo strtoupper($_smarty_tpl->tpl_vars['page']->value['state']['abbr']);?>
</h2>
				<input type="hidden" name="business-name" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['businessname'];?>
">
				<input type="hidden" name="business-type" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['businesstype'];?>
">
				<input type="hidden" name="bsnsstate" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['bsnsstate'];?>
">
				<input type="hidden" name="bsnscounty" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['bsnscounty'];?>
">
				<input type="hidden" name="bsnscity" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['bsnscity'];?>
">
				<?php if ($_smarty_tpl->tpl_vars['page']->value['businesstype']=="community"){?>
				<h3 class="floating">Age</h3>
				<label for="audience-1"><input type="radio" id="audience-1" name="agerestrict" value="family"><label class="chk"> Family</label></label>
				<label for="audience-2"><input type="radio" id="audience-2" name="agerestrict" value="senior"><label class="chk"> Senior</label></label>
				<hr>
				<h3>About Your Community &amp; Area</h3><br>
				<div class="checks">
				<strong class="form-strong">Attributes</strong>
				<label for="chk-gated"><input type="checkbox" name="gated" id="chk-gated" value="yep"> <label class="chk">Gated Community</label></label>
				<label for="chk-pets"><input type="checkbox" name="pets" id="chk-pets" value="yep"> <label class="chk">Pets Allowed</label></label>
				<label for="chk-acc"><input type="checkbox" name="acc" id="chk-acc" value="yep"> <label class="chk">Accessibility for Disabled</label></label>
				<div class="clearfix"></div>
				<strong class="form-strong">Amenities</strong>
				<label for="chk-pool"><input type="checkbox" name="pool" id="chk-pool" value="yep"> <label class="chk">Pool / Spa</label></label>
				<label for="chk-rec"><input type="checkbox" name="rec" id="chk-rec" value="yep"> <label class="chk">Clubhouse / Recreation</label></label>
				<label for="chk-laundry"><input type="checkbox" name="laundry" id="chk-laundry" value="yep"> <label class="chk">Laundromat</label></label>
				<label for="chk-playground"><input type="checkbox" name="playground" id="chk-playground" value="yep"> <label class="chk">Playground</label></label>
				<div class="clearfix"></div>
				<strong class="form-strong" style="padding-top:0.5em;width:auto;">Would you consider your location scenic<br>or a tourist attraction?</strong>
				<label for="scenic-1"><input type="radio" id="scenic-1" name="scenic" value="1"><label class="chk"> Yes</label></label>
				<label for="scenic-2"><input type="radio" id="scenic-2" name="scenic" value="0"><label class="chk"> No</label></label>
				<div class="clearfix"></div>
				<hr>
				<h3>On-site / Nearby Attractions</h3><span style="float:left;">(optional)</span><br><br>
				<div class="clearfix"></div>
				<strong class="form-strong">Sports</strong>
				<label for="chk-golf"><input type="checkbox" name="golf" id="chk-golf" value="yep"> <label class="chk">Golf</label></label>
				<label for="chk-tennis"><input type="checkbox" name="tennis" id="chk-tennis" value="yep"> <label class="chk">Tennis</label></label>
				<label for="chk-basketball"><input type="checkbox" name="basketball" id="chk-basketball" value="yep"> <label class="chk">Basketball</label></label>
				<label for="chk-baseball"><input type="checkbox" name="baseball" id="chk-baseball" value="yep"> <label class="chk">Baseball</label></label>
				<label for="chk-badminton"><input type="checkbox" name="badminton" id="chk-badminton" value="yep"> <label class="chk">Badminton</label></label>
				<br><label for="chk-shuffleboard"><input type="checkbox" name="shuffleboard" id="chk-shuffleboard" value="yep"> <label class="chk">Shuffleboard</label></label>
				<label for="chk-polo"><input type="checkbox" name="polo" id="chk-polo" value="yep"> <label class="chk">Polo</label></label>
				<div class="clearfix"></div><br>&nbsp;
				<strong class="form-strong">Activities</strong>
				<label for="chk-bingo"><input type="checkbox" name="bingo" id="chk-bingo" value="yep"> <label class="chk">Bingo</label></label>
				<label for="chk-casino"><input type="checkbox" name="casino" id="chk-casino" value="yep"> <label class="chk">Casino</label></label>
				<label for="chk-billiards"><input type="checkbox" name="billiards" id="chk-billiards" value="yep"> <label class="chk">Billiards</label></label>
				<label for="chk-trails"><input type="checkbox" name="trails" id="chk-trails" value="yep"> <label class="chk">Hiking / Trails</label></label>
				<label for="chk-horsey"><input type="checkbox" name="horsey" id="chk-horsey" value="yep"> <label class="chk">Horseriding</label></label>
				<label for="chk-resort"><input type="checkbox" name="resort" id="chk-resort" value="yep"> <label class="chk">Resorts, Theme Parks, etc</label></label>
				<div class="clearfix"></div>
				</div>
				<?php }else{ ?>
				No profile wizard for professionals yet.
				<?php }?>
				<hr>
				<p align="right"><input type="submit" value="Continue" class="zocial primary"></p>
			</form></section>
			<?php }elseif($_smarty_tpl->tpl_vars['page']->value['step']==3){?>
			<section id="business-wizard"><form method="post" action="/account/profile" id="step-two">
				<input type="hidden" name="step" value="3">
				<input type="hidden" name="action" value="new">
				<h2><?php echo ucwords(stripslashes($_smarty_tpl->tpl_vars['page']->value['businessname']));?>
</h2>
				<input type="hidden" name="business-name" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['businessname'];?>
">
				<input type="hidden" name="business-type" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['businesstype'];?>
">
				<?php if ($_smarty_tpl->tpl_vars['page']->value['businesstype']=="community"){?>
				
				<?php }else{ ?>
				No profile wizard for professionals yet.
				<?php }?>
				<hr>
				<p align="right"><input type="submit" value="Continue" class="zocial primary"></p>
			</form></section>
			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['page']->value['landing']=='manage'){?>
			<section id="business-manager">
				<?php  $_smarty_tpl->tpl_vars['prof'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prof']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['profiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prof']->key => $_smarty_tpl->tpl_vars['prof']->value){
$_smarty_tpl->tpl_vars['prof']->_loop = true;
?>
					<div class="profile-card">
						<?php if ($_smarty_tpl->tpl_vars['prof']->value['data']['cover']){?><div class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['prof']->value['data']['cover'];?>
" width="228" height="80" alt=""></div><?php }?>
						<footer><a class="zocial secondary" href="/<?php echo $_smarty_tpl->tpl_vars['prof']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['prof']->value['username'];?>
/edit">Edit Profile</a>&nbsp;
						<a class="zocial primary" href="/<?php echo $_smarty_tpl->tpl_vars['prof']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['prof']->value['username'];?>
" target="_blank">View Profile</a>
						<a class="zocial secondary" href="/account/profile?action=plan&profile=<?php echo $_smarty_tpl->tpl_vars['prof']->value['id'];?>
">Plan Details</a>&nbsp;
						<?php if ($_smarty_tpl->tpl_vars['prof']->value['planfeatures']['analytics_basic']||$_smarty_tpl->tpl_vars['prof']->value['planfeatures']['analytics_detail']||$_smarty_tpl->tpl_vars['prof']->value['planfeatures']['analytics_advanced']){?><a class="zocial secondary" href="/account/profile?action=analytics&profile=<?php echo $_smarty_tpl->tpl_vars['prof']->value['id'];?>
">Analytics</a><?php }else{ ?><a class="zocial secondary disabledwhite">Analytics</a><?php }?></footer>
						<div class="clearfix"></div>
						<header><?php echo $_smarty_tpl->tpl_vars['prof']->value['data']['title'];?>
</header>
					</div>
				<?php } ?>
			</section>
		<?php }elseif($_smarty_tpl->tpl_vars['page']->value['landing']=='edit'){?>
			<h2><a href="/account/profile">Profiles</a> &raquo; <?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['data']['title'];?>
</h2>
			<a class="zocial primary" href="/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['username'];?>
/edit">Continue to Editor</a>
		<?php }elseif($_smarty_tpl->tpl_vars['page']->value['landing']=='plan'){?>
			<h2><a href="/account/profile">Profiles</a> &raquo; <?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['data']['title'];?>
</h2>
			<div class="clearfix"></div>
			&nbsp;<div class="clearfix"></div>
			<div class="planlist">
				<?php  $_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['planlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->key => $_smarty_tpl->tpl_vars['plan']->value){
$_smarty_tpl->tpl_vars['plan']->_loop = true;
?><div<?php if ($_smarty_tpl->tpl_vars['plan']->value['id']==$_smarty_tpl->tpl_vars['page']->value['profile']['plan']){?> class="current"<?php }elseif($_smarty_tpl->tpl_vars['plan']->value['id']>$_smarty_tpl->tpl_vars['page']->value['profile']['plan']){?> class="after<?php if ($_smarty_tpl->tpl_vars['plan']->value['id']==$_smarty_tpl->tpl_vars['page']->value['profile']['plan']+1){?> rightafter<?php }?>"<?php }?>>
					<p class="title"><?php echo $_smarty_tpl->tpl_vars['plan']->value['title'];?>
</p>
					<p class="text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin felis odio, mattis sit amet nunc nec, gravida auctor nisl. Nam tincidunt enim odio, vitae ultricies tellus adipiscing et.
					</p>
					<ul>
						<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plan']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['feature']->value['title'];?>
</li>
						<?php } ?>
					</ul>
					<p class="switchbtn"><?php if ($_smarty_tpl->tpl_vars['plan']->value['id']!=$_smarty_tpl->tpl_vars['page']->value['profile']['plan']){?><a class="zocial <?php if ($_smarty_tpl->tpl_vars['plan']->value['name']=='free'){?>secondary<?php }else{ ?>primary<?php }?>" href="/account/profile?action=switchplan&profile=<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['id'];?>
&plan=<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['plan']->value['name']=='free'){?>Downgrade<?php }else{ ?>Switch<?php }?></a><?php }else{ ?><strong>Current Plan</strong><?php }?></p>
					<div class="clearfix"></div>
				</div><?php } ?>
				&nbsp;<p class="clearfix"></p>
			</div>
			<div class="clearfix"></div>
		<?php }elseif($_smarty_tpl->tpl_vars['page']->value['landing']=='analytics'){?>
			<div class="wblock">
			
			</div>
		<?php }?>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</section>

	<footer><form action="/contactmail.php" method="GET">
		<div class="wrapper">
			<div class="grid">
				<div class="g3">
					<h3 class="padded">Navigation</h3>
					<ul>
						<li><a href="/">Homepage</a></li>
						<li><a href="/spaces">Spaces</a></li>
						<li><a href="/homes">Homes</a></li>
						<li><a href="/pros">Professionals</a></li>
					</ul>
				</div>
				<div class="g4">
					<h3 class="padded">My Account</h3>
					<div class="account-box">
						<span style="float:right;margin:-0.4em;"><img src="http://gravatar.com/avatar/5346bb08332c326da043e8046be4fc70?s=40&d=mm"></span>
						<strong>Logged in as <span>Keystroke</span></strong><br/>
						<a href="/account">Go to Dashboard</a> | <a href="/account/logout">Log out</a>
					</div>				</div>
				<div class="g5 ticker">
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
<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']){?></a><?php }?><?php }?>.</span><br><?php }?>Copyright &copy; 2013 MHS America.<br>All Rights Reserved.</small></p></div>
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


<?php if ($_smarty_tpl->tpl_vars['page']->value['landing']=='wizard'&&$_smarty_tpl->tpl_vars['page']->value['step']==1){?><script type="text/javascript">
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