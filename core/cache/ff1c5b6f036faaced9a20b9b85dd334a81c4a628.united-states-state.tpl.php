<?php /*%%SmartyHeaderCode:190605733152d591b87eb1f5-92641591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff1c5b6f036faaced9a20b9b85dd334a81c4a628' => 
    array (
      0 => './incl/xhtml/metro/frontend/united-states-state.tpl',
      1 => 1388443344,
      2 => 'file',
    ),
    '8588bc97dffb04ef34f8bd0204873b24dc678f47' => 
    array (
      0 => './incl/xhtml/metro/frontend/master.tpl',
      1 => 1389728137,
      2 => 'file',
    ),
    'b6efb46070473d4b44a50af1401d2634b31f61ce' => 
    array (
      0 => './incl/xhtml/metro/frontend/ads-four-square.tpl',
      1 => 1388436453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190605733152d591b87eb1f5-92641591',
  'variables' => 
  array (
    'page' => 1,
    'bodyclasses' => 0,
    'isUserLoggedIn' => 0,
    'user' => 1,
    'yr' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52d591b8d98b45_50826826',
  'cache_lifetime' => 900,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d591b8d98b45_50826826')) {function content_52d591b8d98b45_50826826($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en-US"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en-US"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en-US"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
	<meta http-equiv="Content-Language" content="en-US">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['meta_description'];?>
">
    <meta name="author" content="MHS America">
	
	<title><?php if ($_smarty_tpl->tpl_vars['page']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
 :: <?php }?>MHS America</title>
	<link rel="stylesheet" href="/_/metro/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="/_/metro/css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="/_/js/jqvmap/jqvmap.css">
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
</head>
<body itemscope itemtype="http://schema.org/WebPage" class="page_state<?php if ($_smarty_tpl->tpl_vars['page']->value['nobar']){?> no_submenu<?php }?> state_<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['name'];?>
">
<div class="wrapper" id="wrap">
	<!-- Fixed navbar -->
	<div class="navbar navbar-default navbar-fixed-top" id="main-header" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['pragpage']!="welcome"){?><a class="navbar-brand" href="/"><img src="/_/images/elias/mhs-header-logo-mini.png"></a><?php }?>
			</div>
			<div class="collapse">
				<ul class="nav navbar-nav">
					<?php if ($_smarty_tpl->tpl_vars['page']->value['pragpage']=="welcome"&&1==2){?><li class="active"><a href="#">Home</a></li><?php }?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="divider"></li>
							<li class="dropdown-header">Login</li>
							<li class="divider"></li>
							<li><a href="/account/register">Separated link</a></li>						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
        </div><?php if (!$_smarty_tpl->tpl_vars['page']->value['nobar']){?>
		<div id="main-submenu" class="hidden-sm hidden-xs"><div class="container center"><p>Select a state from the map below:</p></div></div><?php }?>
	</div>

<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']){?><img src="/_/images/backdrops/<?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['file'];?>
" alt="" id="pagecanvas"<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['heightstretch']==1){?> style="height:100%;width:auto;max-width:none;min-width:100%;" class="hidden-xs"<?php }?>><?php }?>

<div class="container" id="main-container">
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
	height:auto
}
<?php }?>
</style>
<section id="us-map-state">
	<span id="label-state" class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['page']->value['state']['title'];?>
</span>
	<div id="vmap"></div>
</section>
<section id="business-tiles" class="hidden-xs"><?php if ($_smarty_tpl->tpl_vars['page']->value['pragpage']=="state"){?><?php if ((s('usemetros'))==1&&$_smarty_tpl->tpl_vars['page']->value['metrocount']!=0){?><a name="area" id="area_a"></a><?php }else{ ?><a name="counties" id="counties_a"></a><?php }?><?php }?>
<header<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['blacknotices']==1){?> class="black"<?php }?>>Sponsored Advertisements</header>
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][0]['id']==0){?><div id="advert-a"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-a"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['image'];?>
" class="static"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['hover'];?>
" class="hover"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][0]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][1]['id']==0){?><div id="advert-b"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-b"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['image'];?>
" class="static"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['hover'];?>
" class="hover"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][1]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][2]['id']==0){?><div id="advert-c"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-c"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['image'];?>
" class="static"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['hover'];?>
" class="hover"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][2]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][3]['id']==0){?><div id="advert-d"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-d"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['image'];?>
" class="static"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['hover'];?>
" class="hover"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][3]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?>
</section><?php if ((s('usemetros'))==1&&$_smarty_tpl->tpl_vars['page']->value['metrocount']!=0){?><div class="container"><p class="h3"><?php echo l('by area');?>
</p>
<?php  $_smarty_tpl->tpl_vars['metro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['metro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['metros']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['metro']->key => $_smarty_tpl->tpl_vars['metro']->value){
$_smarty_tpl->tpl_vars['metro']->_loop = true;
?>
<div class="col-xs-12 col-sm-6 col-lg-2 col-md-3 loctile"><a href="<?php echo s('domain');?>
/region/<?php echo $_smarty_tpl->tpl_vars['metro']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['metro']->value['title'];?>
</a></div>
<?php } ?>
</div>
<?php }?>
<div class="container">
<p class="h3">By County</p>
<?php  $_smarty_tpl->tpl_vars['county'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['county']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['counties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['county']->key => $_smarty_tpl->tpl_vars['county']->value){
$_smarty_tpl->tpl_vars['county']->_loop = true;
?>
<div class="col-xs-12 col-sm-6 col-lg-2 col-md-3 loctile"><a href="<?php echo s('domain');?>
/state/<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['abbr'];?>
/county/<?php echo $_smarty_tpl->tpl_vars['county']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['county']->value['title'];?>
</a></div>
<?php } ?>
</div><!-- End #main-container -->


</div>
<div id="footer">
	<div class="container">
		<div class="col-md-6">
			<div class="panel panel-account">
								<a href="http://mhsamerica.com/account/login">Login</a> -or- <a href="http://mhsamerica.com/account/register">Register</a>
							</div>
		</div>
		<div class="col-md-6 hidden-xs">
			<p class="h4 slogan"><em>Finding spaces for mobile home buyers</em><br><em>Filling spaces for mobile home park owners</em></p>
		</div>
	</div>
	<div class="container" id="footer-menu" role="navigation">
		<div class="col-xs-6 col-sm-4 col-md-3">
			<h4 class="h4">Company</h4>
			<ul>
			  <li><a href="http://mhsamerica.com/news">News</a></li>
			  <li><a href="http://mhsamerica.com/about">About Us</a></li>
			  <li><a href="http://mhsamerica.com/contact">Contact</a></li>
			</ul>
		</div>
		<div class="hidden-xs col-sm-4 col-md-3">
			<h4 class="h4">Legal</h4>
			<ul>
			  <li><a href="http://mhsamerica.com/privacy">Privacy Policy</a></li>
			  <li><a href="http://mhsamerica.com/legal">Terms of Use</a></li>
			</ul>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<h4 class="h4">Community</h4>
			<ul>
			  <li><a href="http://mhsamerica.com/ideas">Ideas &amp; Suggestions</a></li>
			  <li><a href="http://mhsamerica.com/discuss">Discussions</a></li>
			  <li><a href="http://mhsamerica.com/connected">Connected</a></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<p class="text-muted"><small><?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['credit']){?><span style="font-style:italic;" class="hidden-xs">Background image by <?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']&&!$_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy']){?><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['link'];?>
" target="_blank" rel="noindex,nofollow"><?php }?><?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['credit'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']&&!$_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy']){?></a><?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy']){?>, courtesy of <?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']){?><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['link'];?>
" target="_blank" rel="noindex,nofollow"><?php }?><?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']){?></a><?php }?><?php }?>.</span><?php }?> <span class="hidden-md hidden-lg"><br></span>Copyright &copy; 2014 MHS America. All Rights Reserved.<span class="visible-xs"> <a href="http://mhsamerica.com/privacy">Privacy Policy</a> - <a href="http://mhsamerica.com/legal">Terms of Use</a></span></small></p>
	</div>
</div>
<script src="/_/metro/js/jquery-1.10.2.min.js"></script>
<script src="/_/metro/js/bootstrap.min.js"></script>

<style type="text/css">
#main-container{ background:rgba(255,255,255,0.85) }
#us-map-state { background:#fff;margin:-15px -15px 0;padding:15px }
</style>
<script src="/_/js/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="/_/js/jqvmap/maps/united-states/jquery.vmap.<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['name'];?>
.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery('#vmap').vectorMap({
    map: '<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['name'];?>
',
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
        $('body').append($('<form>').attr('method',"GET").attr('id','link-'+code).attr('action','http://mhsamerica.com/state/<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['abbr'];?>
/county/' + code));
		$('#link-'+code).submit();
    }
});
</script>

<script src="/_/js/modernizr-1.7.min.js" type="text/javascript"></script>
</body>
</html><?php }} ?>