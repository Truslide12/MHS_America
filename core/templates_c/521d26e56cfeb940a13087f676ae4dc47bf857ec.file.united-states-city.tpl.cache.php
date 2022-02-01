<?php /* Smarty version Smarty-3.1.8, created on 2014-01-16 16:27:43
         compiled from "./incl/xhtml/metro/frontend/united-states-city.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203478267152d85cdf7f3a22-89733064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '521d26e56cfeb940a13087f676ae4dc47bf857ec' => 
    array (
      0 => './incl/xhtml/metro/frontend/united-states-city.tpl',
      1 => 1389759640,
      2 => 'file',
    ),
    '8588bc97dffb04ef34f8bd0204873b24dc678f47' => 
    array (
      0 => './incl/xhtml/metro/frontend/master.tpl',
      1 => 1389757845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203478267152d85cdf7f3a22-89733064',
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
  'unifunc' => 'content_52d85cdfad0017_12879502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d85cdfad0017_12879502')) {function content_52d85cdfad0017_12879502($_smarty_tpl) {?><!DOCTYPE html>
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
    <meta name="description" content="<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_description\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
">
    <meta name="author" content="MHS America">
	
	<title><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'title\']){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'title\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
 :: <?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
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
	
<link rel="stylesheet" href="/_/metro/css/locale.css" type="text/css">

</head>
<body itemscope itemtype="http://schema.org/WebPage" class="<?php echo $_smarty_tpl->tpl_vars['bodyclasses']->value;?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'nobar\']){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
 no_submenu<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
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
				<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']!="welcome"){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<a class="navbar-brand" href="/"><img src="/_/images/elias/mhs-header-logo-mini.png"></a><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>

			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']=="welcome"&&1==2){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<li class="active"><a href="#">Home</a></li><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
						<ul class="dropdown-menu">
<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?>							<li class="dropdown-header"><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'user\']->value[\'display_name\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
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
        </div><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if (!$_smarty_tpl->tpl_vars[\'page\']->value[\'nobar\']){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>

		<div id="main-submenu" class="hidden-sm hidden-xs"><div class="container center"><p>Select a state from the map below:</p></div></div><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>

	</div>

<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\']){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<img src="/_/images/backdrops/<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'file\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
" alt="" id="pagecanvas"<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'heightstretch\']==1){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
 style="height:100%;width:auto;max-width:none;min-width:100%;" class="hidden-xs"<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>


<div class="container" id="main-container">
	<p class="h2 hidden-xs hidden-sm">
		<a href="<?php echo s('domain');?>
/state/<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'abbr\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
/county/<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'county\'][\'name\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
"><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'county\'][\'title\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'county\'][\'hidesuffix\']!=1){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
 <?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'suffix\']!=\'\'){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'suffix\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }else{ ?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo l(\'county\');?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
, <?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'title\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
</a>
		&raquo; <?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'city\'][\'title\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>

	</p>
	<p class="h2 visible-xs visible-sm">
		<a href="<?php echo s('domain');?>
/state/<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'abbr\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
/county/<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'county\'][\'name\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
"><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'county\'][\'title\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
</a>
		&raquo; <?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'city\'][\'title\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>

	</p>
	<div class="well well-primary">
	<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php  $_smarty_tpl->tpl_vars[\'park\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'park\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'parks\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'park\']->key => $_smarty_tpl->tpl_vars[\'park\']->value){
$_smarty_tpl->tpl_vars[\'park\']->_loop = true;
?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>

		<div class="col-md-6">
		<div class="panel panel-default">
			<p class="h3"><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'park\']->value[\'plan\'][\'pro_profile\']==1){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<a href="#<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if (1==2){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
/account/register<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
" title="Premium Partner" class="plan pull-right"><span class="glyphicon glyphicon-star"></span></a><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'park\']->value[\'title\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
</p>
			<div class="col-xs-6 image-box">
				<a href="<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo s(\'domain\');?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
/<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'park\']->value[\'profid\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
/<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'park\']->value[\'username\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'park\']->value[\'cover\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
" alt="<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'park\']->value[\'title\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
"></a>
			</div>
			<div class="col-xs-6 list-box">
				<ul class="list-group">
					<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'park\']->value[\'plan\'][\'com_homes\']==1){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<li class="list-group-item"><span><strong>Homes</strong></span><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'park\']->value[\'home_count\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
</li><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>

					<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'park\']->value[\'plan\'][\'com_spaces\']==1){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<li class="list-group-item"><span><strong>Spaces</strong></span><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'park\']->value[\'space_count\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
</li><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>

					<li class="list-group-item"><span><strong>Kudos</strong></span><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'park\']->value[\'kudos_count\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
	<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'park\']->_loop) {
?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>

		
	<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php } ?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>

	<div class="clearfix"></div>
	</div>
</div>


</div>
<div id="footer">
	<div class="container">
		<div class="col-md-6">
			<div class="panel panel-account">
				<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?><img src="<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo get_gravatar($_smarty_tpl->tpl_vars[\'user\']->value[\'email\'],48);?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
" class="pull-right">
				<p class="h4"><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'user\']->value[\'display_name\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
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
		<p class="text-muted"><small><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\']){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<span style="font-style:italic;" class="hidden-xs">Background image by <?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
</a><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
, courtesy of <?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\'];?>
/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
</a><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
<?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
.</span><?php echo '/*%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/<?php }?>/*/%%SmartyNocache:203478267152d85cdf7f3a22-89733064%%*/';?>
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

<script src="/_/js/modernizr-1.7.min.js" type="text/javascript"></script>
</body>
</html><?php }} ?>