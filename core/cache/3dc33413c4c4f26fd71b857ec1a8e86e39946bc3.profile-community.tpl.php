<?php /*%%SmartyHeaderCode:40052087652a16330a11c56-08441989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dc33413c4c4f26fd71b857ec1a8e86e39946bc3' => 
    array (
      0 => './incl/xhtml/default/profile-community.tpl',
      1 => 1386223333,
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
      1 => 1386308398,
      2 => 'file',
    ),
    '6138d96c06dc7123de3c83a1d112eac4ca037a8b' => 
    array (
      0 => './incl/xhtml/default/profile-section-info.tpl',
      1 => 1385837868,
      2 => 'file',
    ),
    'c6d462c906a4742ed4dc6e674324de6c82475010' => 
    array (
      0 => './incl/xhtml/default/profile-section-contact.tpl',
      1 => 1383628116,
      2 => 'file',
    ),
    'e730628291f51922737aee96c7ede4362328b3dd' => 
    array (
      0 => './incl/xhtml/default/profile-section-contact-edithours.tpl',
      1 => 1383628116,
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
    '9dd4af8c914fb154dee5bd1af5dfbf80c2de63c8' => 
    array (
      0 => './incl/xhtml/default/profile-section-homes.tpl',
      1 => 1386100462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40052087652a16330a11c56-08441989',
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
  'unifunc' => 'content_52a16334bcbdf3_91648590',
  'cache_lifetime' => 20,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a16334bcbdf3_91648590')) {function content_52a16334bcbdf3_91648590($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Lamplighter Ontario :: MHS America</title>

	<meta name="title" content="MHS America - ">
	<meta name="description" content="The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="">
	<meta name="google-site-verification" content="">
	<meta name="author" content="MHS America">
	<meta name="Copyright" content="Copyright &copy; 2013 MHS America. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<link rel="schema.DC" href="http://purl.org/dc/terms/">
	<meta name="DC.title" content="MHS America - Lamplighter Ontario">
	<meta name="DC.subject" content="">
	<meta name="DC.creator" content="">
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
	
<script type="text/javascript" src="/_/js/jquery-ui-1.10.3.custom.min.js"></script>
<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><link rel="stylesheet" href="/_/css/coverphoto.css" type="text/css"><?php }?>
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

<body class="page_profile">

<div class="wrapper">
	<header>
		<h1 class="dymaxionscript"><a href="/" title="To the front page">MHS America</a></h1>
		<nav>
			<ul>
				
				
								<li class="right"><a href="/account/login">Log In / Register</a>
				<div class="drop">
					<div class="account-box guest-box">
						<h2><strong><span>Log In</span></strong></h2>
						<form action="/account/login" method="POST">
						<input type="hidden" name="rqst" value="global">
						<p><input type="text" name="username" placeholder="Username"></p>
						<p><input type="password" name="password" placeholder="Password"></p>
						<a href="http://beta.mhsamerica.com/account/register" class="zocial secondary r">New Account</a> <a href="#" class="zocial primary" onclick="$('#loginSubmit').click();">Login</a><input type="submit" id="loginSubmit" style="display:none;" value="Login">
						</form>
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
				<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><p class="ribbon"<?php if ($_smarty_tpl->tpl_vars['page']->value['slides']){?> style="margin:20px -9px -28px -11px;z-index:280;position:relative;"<?php }?>>The profile is currently in edit mode. Changes will only be applied after clicking <strong>Save Changes</strong> above.</p>
		<a href="#" class="zocial secondary kudos" style="font-size:120%;display:block;top:-159px;position:relative;z-index:290;left:353px;margin:-35px 0;display:none;" id="nophotoman">Done</a><?php }?>
		<div id="profile-sheet">
		<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['pro_profile']==1){?><?php echo $_smarty_tpl->getSubTemplate ("profile-section-contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }else{ ?><style type="text/css">div.profile {padding:10px 24px 14em;background:#efefef;}</style><?php }?>
		<div class="col2 l">
			<section class="tiled blue">
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
			</section>			<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['pro_profile']==1){?>
			<section<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?> style="padding:2em 0 0;"<?php }?>>
				<header>About Our Community</header>
				<p><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><textarea style="max-width:100%;min-width:100%;" name="description" class="fancy"><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['description'];?>
</textarea><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['description']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['description'];?>
<?php }else{ ?><h3><em>No description available</em></h3><?php }?><?php }?></p>
			</section><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['com_homes']==1&&$_smarty_tpl->tpl_vars['page']->value['space_count']>20){?><?php echo $_smarty_tpl->getSubTemplate ("profile-section-homes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
		</div>
		<div class="col2 r">
			<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['pro_profile']!=1){?><?php echo $_smarty_tpl->getSubTemplate ("profile-section-contact-mini.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['pro_profile']==1){?><?php echo $_smarty_tpl->getSubTemplate ("profile-section-amenities.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['com_spaces']==1){?><?php echo $_smarty_tpl->getSubTemplate ("profile-section-spaces.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['plan']['com_homes']==1&&$_smarty_tpl->tpl_vars['page']->value['space_count']<21){?><?php echo $_smarty_tpl->getSubTemplate ("profile-section-homes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
		</div>
		<div class="clearfix"></div><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?></form><?php }?>
		</div><!-- End of sheet -->
		<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['logo_emblem']){?><div style="text-align:center;margin:1em 0;"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['logo_emblem'];?>
"></div><?php }?>
	</div>
</div>
</section>

	<footer><form action="/contactmail.php" method="GET">
		<div class="wrapper">
			<div class="grid">
								<div class="g6">
					<h3 class="padded">My Account</h3>
					<ul>
						<li class="lifloat"><a href="/account/login">Log In</a></li>
						<li class="lifloat">- or -</li>
						<li class="lishift"><a href="/account/register">Register</a></li>
					</ul>				</div>
				<div class="g6 ticker">
										<h3 id="slogan">Finding spaces for mobile home buyers<br>Filling spaces for mobile home park owners</h3>
					<!-- Thanks Jimmy! -->
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
</script><?php }?>

<!-- Piwik -->
<script type="text/javascript"> 
  var _paq = _paq || [];
  _paq.push(['setRequestMethod', 'POST']);
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