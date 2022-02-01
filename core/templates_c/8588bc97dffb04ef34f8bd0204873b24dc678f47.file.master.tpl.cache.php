<?php /* Smarty version Smarty-3.1.8, created on 2014-01-14 13:21:11
         compiled from "./incl/xhtml/metro/frontend/master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116041842552d58e273c2681-00349246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8588bc97dffb04ef34f8bd0204873b24dc678f47' => 
    array (
      0 => './incl/xhtml/metro/frontend/master.tpl',
      1 => 1389726692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116041842552d58e273c2681-00349246',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_52d58e2797fe95_15142623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d58e2797fe95_15142623')) {function content_52d58e2797fe95_15142623($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_description\'];?>
/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
">
    <meta name="author" content="MHS America">
	
	<title><?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'title\']){?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'title\'];?>
/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
 :: <?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php }?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
<?php echo s('title');?>
</title>
	<link rel="stylesheet" href="/_/metro/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="/_/metro/css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="/_/js/jqvmap/jqvmap.css">
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
</head>
<body itemscope itemtype="http://schema.org/WebPage" class="<?php echo $_smarty_tpl->tpl_vars['bodyclasses']->value;?>
<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'nobar\']){?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
 no_submenu<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php }?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
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
				<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']!="welcome"){?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
<a class="navbar-brand" href="/"><img src="/_/images/elias/mhs-header-logo-mini.png"></a><?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php }?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>

			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']=="welcome"&&1==2){?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
<li class="active"><a href="#">Home</a></li><?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php }?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
						<ul class="dropdown-menu">
<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?>							<li class="dropdown-header"><?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php echo $_smarty_tpl->tpl_vars[\'user\']->value[\'display_name\'];?>
/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
</li>
							<li><a href="<?php echo s('domain');?>
/account">Dashboard</a></li>
							<li><a href="<?php echo s('domain');?>
/account/settings">Settings</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo s('domain');?>
/account/logout">Logout</a></li><?php }else{ ?>
							<li class="divider"></li>
							<li class="dropdown-header">Login</li>
							<li class="divider"></li>
							<li><a href="/account/register">Separated link</a></li><?php }?>
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
        </div><?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php if (!$_smarty_tpl->tpl_vars[\'page\']->value[\'nobar\']){?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>

		<div id="main-submenu" class="hidden-sm hidden-xs"><div class="container center"><p>Select a state from the map below:</p></div></div><?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php }?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>

	</div>

<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\']){?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
<img src="/_/images/backdrops/<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'file\'];?>
/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
" alt="" id="pagecanvas"<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'heightstretch\']==1){?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
 style="height:100%;width:auto;max-width:none;min-width:100%;" class="hidden-xs"<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php }?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
><?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php }?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>


<div class="container" id="main-container">
	<div class="col-md-12 center" id="logo-container">
		<p class="lead hidden-xs hidden-sm">&quot;Mobile Home Spaces Across America&quot;</p>
		<img src="/_/images/elias/mhs-logo.png" id="logo">
		<p class="lead hidden-md hidden-lg">&quot;Mobile Home Spaces Across America&quot;</p>
	</div>
	<div class="col-md-12">
		<div id="vmap"></div>
	</div>
</div>


</div>
<div id="footer">
	<div class="container">
		<div class="col-md-6">
			<div class="panel panel-account">
				<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?><img src="<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php echo get_gravatar($_smarty_tpl->tpl_vars[\'user\']->value[\'email\'],48);?>
/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
" class="pull-right">
				<p class="h4"><?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php echo $_smarty_tpl->tpl_vars[\'user\']->value[\'display_name\'];?>
/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
</p>
				<p><a href="<?php echo s('domain');?>
/account">Dashboard</a> | <a href="<?php echo s('domain');?>
/account/logout">Log out</a></p><div class="clearfix"></div><?php }else{ ?>
				<a href="<?php echo s('domain');?>
/account/login">Login</a> -or- <a href="<?php echo s('domain');?>
/account/register">Register</a>
				<?php }?>
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
			  <li><a href="<?php echo s('domain');?>
/news">News</a></li>
			  <li><a href="<?php echo s('domain');?>
/about">About Us</a></li>
			  <li><a href="<?php echo s('domain');?>
/contact">Contact</a></li>
			</ul>
		</div>
		<div class="hidden-xs col-sm-4 col-md-3">
			<h4 class="h4">Legal</h4>
			<ul>
			  <li><a href="<?php echo s('domain');?>
/privacy">Privacy Policy</a></li>
			  <li><a href="<?php echo s('domain');?>
/legal">Terms of Use</a></li>
			</ul>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<h4 class="h4">Community</h4>
			<ul>
			  <li><a href="<?php echo s('domain');?>
/ideas">Ideas &amp; Suggestions</a></li>
			  <li><a href="<?php echo s('domain');?>
/discuss">Discussions</a></li>
			  <li><a href="<?php echo s('domain');?>
/connected">Connected</a></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<p class="text-muted"><small><?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\']){?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
<span style="font-style:italic;" class="hidden-xs">Background image by <?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php }?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\'];?>
/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
</a><?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php }?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
, courtesy of <?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php }?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\'];?>
/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
</a><?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php }?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
<?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php }?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
.</span><?php echo '/*%%SmartyNocache:116041842552d58e273c2681-00349246%%*/<?php }?>/*/%%SmartyNocache:116041842552d58e273c2681-00349246%%*/';?>
 <span class="hidden-md hidden-lg"><br></span><?php echo l('copyright');?>
 &copy; <?php echo $_smarty_tpl->tpl_vars['yr']->value;?>
 <?php echo s('author');?>
. <?php echo l('allrightsreserved');?>
.<span class="visible-xs"> <a href="<?php echo s('domain');?>
/privacy">Privacy Policy</a> - <a href="<?php echo s('domain');?>
/legal">Terms of Use</a></span></small></p>
	</div>
</div>
<script src="/_/metro/js/jquery-1.10.2.min.js"></script>
<script src="/_/metro/js/bootstrap.min.js"></script>

<script src="/_/js/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="/_/js/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function(){
		jQuery('#vmap').vectorMap({
			map: 'usa_en',
			backgroundColor: null,
			color: '#7f8efe',
			hoverColor: '#2233aa',
			selectedColor: '#00b7ea',
			borderColor: '#cccccc',
			borderWidth: 1,
			borderOpacity: 0.85,
			enableZoom: false,
			showTooltip: true,
			selectedRegion: null,
			onRegionClick: function(element, code, region)
				{
					$('body').append($('<form>').attr('method',"GET").attr('id','link-'+code).attr('action','http://mhsamerica.com/state/' + code + '/'));
					$('#link-'+code).append($("#srcinput")).submit();
				}
		});
	});
</script>

<script src="/_/js/modernizr-1.7.min.js" type="text/javascript"></script>
</body>
</html><?php }} ?>