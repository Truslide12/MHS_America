<?php /*%%SmartyHeaderCode:39954061752a01404e2f1a4-10722869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a21b3466bc9df4a1bfb287b163ee061fe7ad3e7' => 
    array (
      0 => './incl/xhtml/default/united-states-state.tpl',
      1 => 1385792866,
      2 => 'file',
    ),
    '32d6388b39598793f7b0b3bbd08b665147d4be4d' => 
    array (
      0 => './incl/xhtml/default/master.tpl',
      1 => 1386222573,
      2 => 'file',
    ),
    'fdab7abc8a294973bf474634150700d10a7095dc' => 
    array (
      0 => './incl/xhtml/default/ads-four-square.tpl',
      1 => 1383628110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39954061752a01404e2f1a4-10722869',
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
  'unifunc' => 'content_52a0140635fed9_17951942',
  'cache_lifetime' => 20,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a0140635fed9_17951942')) {function content_52a0140635fed9_17951942($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Oregon :: MHS America</title>

	<meta name="title" content="MHS America - Search Available Spaces and Services">
	<meta name="description" content="The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="mobile home spaces, mobile home lots, mobile home movers, mobile home specialists, mobile home experts, mobile home parks, mobile home vacancy, mobile home land, mobile home electricians, mobile home technicians, mobile home spaces california, mobile home lots california, mobile home movers california, mobile home specialists california, mobile home experts california, mobile home parks california, mobile home vacancy california, mobile home land california, mobile home electricians california, mobile home technicians">
	<meta name="google-site-verification" content="">
	<meta name="author" content="MHS America">
	<meta name="Copyright" content="Copyright &copy; 2013 MHS America. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<link rel="schema.DC" href="http://purl.org/dc/terms/">
	<meta name="DC.title" content="MHS America - Oregon">
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
		
<!-- Generated by OpenX 2.8.10 -->
<script type='text/javascript'><!--// <![CDATA[
    var OA_zones = {"zone_2_1":2,"zone_2_2":2,"zone_2_3":2,"zone_2_4":2}    
// ]]> --></script>
<script type='text/javascript' src='http://mhsamerica.metachrys.com/openx/www/delivery/spcjs.php?id=2'></script>

	<script src="/_/js/<?php if ($_smarty_tpl->tpl_vars['page']->value['jquery']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['jquery'];?>
<?php }else{ ?>jquery-1.10.2.min.js<?php }?>"></script>
	    <script src="/_/kendo/js/kendo.web.min.js"></script>
	<script src="/_/js/modernizr-1.7.min.js"></script>
	
	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body class="page_state">

<div class="wrapper">
	<header>
		<h1 class="dymaxionscript"><a href="/" title="To the front page">MHS America</a></h1>
		<nav>
			<ul>
				<li class="active"><a href="#">Search Method</a><ul><li><a href="#map">County Map</a></li><?php if ((s('usemetros'))==1&&$_smarty_tpl->tpl_vars['page']->value['metrocount']!=0){?><li><a href="#area">General Area</a></li><?php }?><li><a href="#counties">County Names</a></li><li><a href="#city">City Name</a></li></ul></li><li id="page-direction"></li>
				
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
<a name="map" id="map_a" style="display:block;width:0;height:0;position:absolute;top:-100px;"></a>
<style type="text/css">
#label-state { 
<?php if (($_smarty_tpl->tpl_vars['page']->value['state']['labelmargins'])!=''){?>
	margin:<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['labelmargins'];?>
;
<?php }?><?php if (($_smarty_tpl->tpl_vars['page']->value['state']['labelwidth'])!=''){?>
	width:<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['labelwidth'];?>
;
<?php }?> 
}
<?php if (($_smarty_tpl->tpl_vars['page']->value['state']['custommargin'])!=''){?>
div#vmap {
	margin:<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['custommargin'];?>
;
}
<?php }?>
<?php if (($_smarty_tpl->tpl_vars['page']->value['state']['customheight'])!=''){?>
div#vmap {
	min-height:<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['customheight'];?>
 !important;
}
<?php }?>
</style>
<section id="us-map-state">
	<a name="top" id="top_a">&nbsp;</a>
	<span id="label-state"><?php echo $_smarty_tpl->tpl_vars['page']->value['state']['title'];?>
</span>
	<div id="vmap"></div>	
</section>
<section id="business-tiles"><?php if ($_smarty_tpl->tpl_vars['page']->value['pragpage']=="state"){?><?php if ((s('usemetros'))==1&&$_smarty_tpl->tpl_vars['page']->value['metrocount']!=0){?><a name="area" id="area_a"></a><?php }else{ ?><a name="counties" id="counties_a"></a><?php }?><?php }?>
<header<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['blacknotices']==1){?> class="black"<?php }?>>Sponsored Advertisements</header>
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][0]['id']==0){?><div id="advert-a"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-a"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['image'];?>
" width="0" height="0"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['hover'];?>
" width="0" height="0"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][0]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][1]['id']==0){?><div id="advert-b"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-b"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['image'];?>
" width="0" height="0"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['hover'];?>
" width="0" height="0"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][1]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][2]['id']==0){?><div id="advert-c"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-c"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['image'];?>
" width="0" height="0"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['hover'];?>
" width="0" height="0"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][2]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][3]['id']==0){?><div id="advert-d"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-d"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['image'];?>
" width="0" height="0"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['hover'];?>
" width="0" height="0"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][3]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?>
</section>
<style type="text/css">
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][0]['id']!=0){?>
#advert-a a {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['image'];?>
) center center no-repeat;
}
#advert-a a:hover {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['hover'];?>
) center center no-repeat;
}<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][1]['id']!=0){?>
#advert-b a {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['image'];?>
) center center no-repeat;
}
#advert-b a:hover {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['hover'];?>
) center center no-repeat;
}<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][2]['id']!=0){?>
#advert-c a {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['image'];?>
) center center no-repeat;
}
#advert-c a:hover {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['hover'];?>
) center center no-repeat;
}<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][3]['id']!=0){?>
#advert-d a {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['image'];?>
) center center no-repeat;
}
#advert-d a:hover {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['hover'];?>
) center center no-repeat;
}<?php }?>
</style><section id="us-county">
<h1>By City Name</h1>
<div class="padded-cell city-form">
<form action="/query" method="GET">
	<input type="text" name="city" id="citytext">
	<input type="hidden" name="state" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['id'];?>
">
	<input type="submit" value="Search" class="zocial primary" id="citysubmit">
	<style type="text/css">
		.city-form {padding-top:2em;padding-bottom:2em;text-align:center;}
		#citytext {font-size:200%;margin:0 0.5em;}
		#citysubmit {width:120px;height:55px;font-size:160%;margin:0 0.5em;}
	</style>
</form>
</div>
<?php if ((s('usemetros'))==1&&$_smarty_tpl->tpl_vars['page']->value['metrocount']!=0){?><h1><?php echo l('by area');?>
</h1>
<div class="padded-cell">
	<?php  $_smarty_tpl->tpl_vars['county'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['county']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['metros']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['county']->key => $_smarty_tpl->tpl_vars['county']->value){
$_smarty_tpl->tpl_vars['county']->_loop = true;
?>
		<div class="city-box">
			<a href="<?php echo s('domain');?>
/region/<?php echo $_smarty_tpl->tpl_vars['county']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['county']->value['homecount']==0&&$_smarty_tpl->tpl_vars['county']->value['lotcount']==0&&$_smarty_tpl->tpl_vars['county']->value['procount']==0){?> class="light"<?php }?>><span class="city-title"><?php echo $_smarty_tpl->tpl_vars['county']->value['title'];?>
</span><?php if ((s('tidbits'))==1){?><p><span title="Homes" class="tidbit-homes"><?php echo $_smarty_tpl->tpl_vars['county']->value['homecount'];?>
</span><span title="Spaces" class="tidbit-lots"><?php echo $_smarty_tpl->tpl_vars['county']->value['lotcount'];?>
</span><span title="Professionals" class="tidbit-pros"><?php echo $_smarty_tpl->tpl_vars['county']->value['procount'];?>
</span></p><?php }?></a>
		</div>
	<?php } ?><a name="counties" id="counties_a"></a>
<div class="clearfix"></div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php }?><h1>By County</h1>
<div class="padded-cell">
	<?php  $_smarty_tpl->tpl_vars['county'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['county']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['counties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['county']->key => $_smarty_tpl->tpl_vars['county']->value){
$_smarty_tpl->tpl_vars['county']->_loop = true;
?>
		<div class="city-box">
			<a href="<?php echo s('domain');?>
/state/<?php echo $_smarty_tpl->tpl_vars['county']->value['stateabbr'];?>
/county/<?php echo $_smarty_tpl->tpl_vars['county']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['county']->value['homecount']==0&&$_smarty_tpl->tpl_vars['county']->value['lotcount']==0&&$_smarty_tpl->tpl_vars['county']->value['procount']==0){?> class="light"<?php }?>><span class="city-title"><?php echo $_smarty_tpl->tpl_vars['county']->value['title'];?>
</span><?php if ((s('tidbits'))==1){?><p><span title="Homes" class="tidbit-homes"><?php echo $_smarty_tpl->tpl_vars['county']->value['homecount'];?>
</span><span title="Spaces" class="tidbit-lots"><?php echo $_smarty_tpl->tpl_vars['county']->value['lotcount'];?>
</span><span title="Professionals" class="tidbit-pros"><?php echo $_smarty_tpl->tpl_vars['county']->value['procount'];?>
</span></p><?php }?></a>
		</div>
	<?php } ?>
<div class="clearfix"></div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
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

	
<script src="/_/js/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="/_/js/jqvmap/maps/united-states/jquery.vmap.<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['name'];?>
.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery('#vmap').vectorMap({
    map: '<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['name'];?>
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
        $('body').append($('<form>').attr('method',"GET").attr('id','link-'+code).attr('action','http://beta.mhsamerica.com/state/<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['abbr'];?>
/county/' + code));
		$('#link-'+code).submit();
    }
});
</script>

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