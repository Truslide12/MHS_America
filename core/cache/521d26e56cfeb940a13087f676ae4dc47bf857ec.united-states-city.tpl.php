<?php /*%%SmartyHeaderCode:145338752352d85b543c51c6-14867149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '145338752352d85b543c51c6-14867149',
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
  'unifunc' => 'content_52d85b547947e6_77739648',
  'cache_lifetime' => 900,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d85b547947e6_77739648')) {function content_52d85b547947e6_77739648($_smarty_tpl) {?><!DOCTYPE html>
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
	
<link rel="stylesheet" href="/_/metro/css/locale.css" type="text/css">

</head>
<body itemscope itemtype="http://schema.org/WebPage" class="page_city<?php if ($_smarty_tpl->tpl_vars['page']->value['nobar']){?> no_submenu<?php }?> ">
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
			<div class="collapse navbar-collapse">
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
	<p class="h2 hidden-xs hidden-sm">
		<a href="http://mhsamerica.com/state/<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['abbr'];?>
/county/<?php echo $_smarty_tpl->tpl_vars['page']->value['county']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['county']['title'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['county']['hidesuffix']!=1){?> <?php if ($_smarty_tpl->tpl_vars['page']->value['state']['suffix']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['state']['suffix'];?>
<?php }else{ ?><?php echo l('county');?>
<?php }?><?php }?>, <?php echo $_smarty_tpl->tpl_vars['page']->value['state']['title'];?>
</a>
		&raquo; <?php echo $_smarty_tpl->tpl_vars['page']->value['city']['title'];?>

	</p>
	<p class="h2 visible-xs visible-sm">
		<a href="http://mhsamerica.com/state/<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['abbr'];?>
/county/<?php echo $_smarty_tpl->tpl_vars['page']->value['county']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['county']['title'];?>
</a>
		&raquo; <?php echo $_smarty_tpl->tpl_vars['page']->value['city']['title'];?>

	</p>
	<div class="well well-primary">
	<?php  $_smarty_tpl->tpl_vars['park'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['park']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['parks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['park']->key => $_smarty_tpl->tpl_vars['park']->value){
$_smarty_tpl->tpl_vars['park']->_loop = true;
?>
		<div class="col-md-6">
		<div class="panel panel-default">
			<p class="h3"><?php if ($_smarty_tpl->tpl_vars['park']->value['plan']['pro_profile']==1){?><a href="#<?php if (1==2){?>/account/register<?php }?>" title="Premium Partner" class="plan pull-right"><span class="glyphicon glyphicon-star"></span></a><?php }?><?php echo $_smarty_tpl->tpl_vars['park']->value['title'];?>
</p>
			<div class="col-xs-6 image-box">
				<a href="<?php echo s('domain');?>
/<?php echo $_smarty_tpl->tpl_vars['park']->value['profid'];?>
/<?php echo $_smarty_tpl->tpl_vars['park']->value['username'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['park']->value['cover'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['park']->value['title'];?>
"></a>
			</div>
			<div class="col-xs-6 list-box">
				<ul class="list-group">
					<?php if ($_smarty_tpl->tpl_vars['park']->value['plan']['com_homes']==1){?><li class="list-group-item"><span><strong>Homes</strong></span><?php echo $_smarty_tpl->tpl_vars['park']->value['home_count'];?>
</li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['park']->value['plan']['com_spaces']==1){?><li class="list-group-item"><span><strong>Spaces</strong></span><?php echo $_smarty_tpl->tpl_vars['park']->value['space_count'];?>
</li><?php }?>
					<li class="list-group-item"><span><strong>Kudos</strong></span><?php echo $_smarty_tpl->tpl_vars['park']->value['kudos_count'];?>
</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
	<?php }
if (!$_smarty_tpl->tpl_vars['park']->_loop) {
?>
		
	<?php } ?>
	<div class="clearfix"></div>
	</div>
</div>


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

<script src="/_/js/modernizr-1.7.min.js" type="text/javascript"></script>
</body>
</html><?php }} ?>