<?php /* Smarty version Smarty-3.1.8, created on 2014-01-14 12:45:41
         compiled from "./incl/xhtml/metro/frontend/profile-email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21516419852d585d5768049-35507401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36c2980cc5056791e5aac2a73762ed5fec828ce3' => 
    array (
      0 => './incl/xhtml/metro/frontend/profile-email.tpl',
      1 => 1389677448,
      2 => 'file',
    ),
    'ab243cb3be733a980419376d88c93ca544b5a4c3' => 
    array (
      0 => './incl/xhtml/metro/frontend/profile-community.tpl',
      1 => 1389677544,
      2 => 'file',
    ),
    '8588bc97dffb04ef34f8bd0204873b24dc678f47' => 
    array (
      0 => './incl/xhtml/metro/frontend/master.tpl',
      1 => 1388901208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21516419852d585d5768049-35507401',
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
  'unifunc' => 'content_52d585d6651509_71014868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d585d6651509_71014868')) {function content_52d585d6651509_71014868($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_description\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
">
    <meta name="author" content="MHS America">
	
	<title><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'title\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'title\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
 :: <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
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
	
<link rel="stylesheet" href="/_/metro/css/profile.css" type="text/css">
<style type="text/css">
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][0][\'cover\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

#photo1 .container .photo{ background-image:url(<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][0][\'cover\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
);background-position:<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][0][\'cover_position\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
 }
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][1][\'cover\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

#photo2 .container .photo{ background-image:url(<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][1][\'cover\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
);background-position:<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][1][\'cover_position\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
 }
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][2][\'cover\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

#photo3 .container .photo{ background-image:url(<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][2][\'cover\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
);background-position:<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][2][\'cover_position\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
 }
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</style>

</head>
<body itemscope itemtype="http://schema.org/WebPage" class="<?php echo $_smarty_tpl->tpl_vars['bodyclasses']->value;?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'nobar\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
 no_submenu<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
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
				<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']!="welcome"){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<a class="navbar-brand" href="/"><img src="/_/images/elias/mhs-header-logo-mini.png"></a><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']=="welcome"){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<li class="active"><a href="#">Home</a></li><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
						<ul class="dropdown-menu">
<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?>							<li class="dropdown-header"><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'user\']->value[\'display_name\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
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
        </div><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if (!$_smarty_tpl->tpl_vars[\'page\']->value[\'nobar\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

		<div id="main-submenu" class="hidden-sm hidden-xs"><div class="container center"><p>Select a state from the map below:</p></div></div><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

	</div>

<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<img src="/_/images/backdrops/<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'file\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
" alt="" id="pagecanvas"<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'heightstretch\']==1){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
 style="height:100%;width:auto;max-width:none;min-width:100%;" class="hidden-xs"<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>


	<div class="container" id="carousel-container">
	<div id="myCarousel" class="nameblock">
	  <div id="name-wrapper"><div class="container">
		<p class="h1 hidden-xs"><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'title\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</p>
		<p class="h2 visible-xs"><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'title\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</p>
	  </div></div>
	</div>

	<div class="container" id="main-container">
		<div <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan_info\'][\'name\']=="free"){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
class="<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'command\']->value!=\'\'){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
col-md-offset-3 <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
col-md-6"<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }else{ ?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
class="col-md-12"<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
>
			<div class="panel panel-default" id="profile-data">
			  <div class="panel-body">
				<div <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan_info\'][\'name\']=="free"){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
class="col-md-6"<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }else{ ?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
class="col-md-3"<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
>
					<strong>Address</strong>
					<hr>
					<p class="hidden-xs hidden-sm"><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'address\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</p>
					<p class="hidden-xs hidden-sm"><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'city\'][\'title\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
, <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo strtoupper($_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'abbr\']);?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
 <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'zipcode\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</p>
					<p class="visible-xs visible-sm"><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'address\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
, <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'city\'][\'title\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
, <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo strtoupper($_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'abbr\']);?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
 <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'zipcode\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</p>
					<p class="visible-xs visible-sm">&nbsp;</p>
				</div>
				<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan_info\'][\'name\']!="free"){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<div class="col-md-6 panel-body">
					<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan_info\'][\'name\']!="free"){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<strong>Office Hours</strong>
					<hr>
					<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'hourspresent\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

					<div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
						<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php  $_smarty_tpl->tpl_vars[\'trange\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'trange\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'hours\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'trange\']->key => $_smarty_tpl->tpl_vars[\'trange\']->value){
$_smarty_tpl->tpl_vars[\'trange\']->_loop = true;
?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'trange\']->value[\'start\']!=7){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

						<p class="two-col"><span>
						<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'trange\']->value[\'end\']==0){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

							<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'longdays\'][$_smarty_tpl->tpl_vars[\'trange\']->value[\'start\']];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

						<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }else{ ?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

							<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'shortdays\'][$_smarty_tpl->tpl_vars[\'trange\']->value[\'start\']];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
 - <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'shortdays\'][$_smarty_tpl->tpl_vars[\'trange\']->value[\'end\']];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

						<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</span><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'trange\']->value[\'time\']==0){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
Closed<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }else{ ?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'trange\']->value[\'time\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
 - <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'trange\']->value[\'endtime\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</p>
						<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php } ?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

					</div>
					<div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
						<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'trange\']->value[\'start\']==7){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

						<p class="two-col"><span>
						<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'trange\']->value[\'end\']==0){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

							<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'longdays\'][$_smarty_tpl->tpl_vars[\'trange\']->value[\'start\']];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

						<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }else{ ?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

							<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'shortdays\'][$_smarty_tpl->tpl_vars[\'trange\']->value[\'start\']];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
 - <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'shortdays\'][$_smarty_tpl->tpl_vars[\'trange\']->value[\'end\']];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

						<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</span><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'trange\']->value[\'time\']==0){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
Closed<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }else{ ?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'trange\']->value[\'time\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
 - <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'trange\']->value[\'endtime\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</p>
						<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

					</div>
					<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }else{ ?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

					<div class="col-md-12">
						<span style="font-style:italic;">No office hours available</span>
					</div>
					<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

					<p class="visible-xs visible-sm">&nbsp;</p><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

				</div><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

				<div <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan_info\'][\'name\']=="free"){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
class="col-md-6"<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }else{ ?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
class="col-md-3"<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
>
					<strong>Contact Details</strong>
					<hr>
					<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'manager\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<p class="two-col"><span>Mgr. <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'manager\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</span>&nbsp;</p><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

					<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'phone\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<p class="two-col"><span>Phone</span><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'phone\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</p><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

					<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'fax\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<p class="two-col"><span>Fax</span><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'fax\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</p><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

					<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'email\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<p class="two-col"><span>Email</span><a href="/<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'prof_id\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
/<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'name\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
/email">Send Message</a></p><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

					<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'website\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<p class="two-col"><span>Website</span><a href="<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'website\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
">Homepage</a></p><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>

				</div>
			  </div>
			</div>
		</div>
		
		<div class="col-md-offset-3 col-md-6">
	   <!-- Form itself -->
          <form name="sentMessage" class="well" method="POST" action="/profile_contact.php" id="contactForm" novalidate><input type="hidden" name="profile" id="profileid" value="<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'prof_id\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
">
	       <legend>Send Message</legend>
		 <div class="control-group">
                    <div class="controls">
			<input type="text" name="name" class="form-control" 
			   	   placeholder="Full Name" id="name" required
			           data-validation-required-message="Please enter your name">
			  <p class="help-block"></p>
		   </div>
	         </div> 	
                <div class="control-group">
                  <div class="controls">
			<input type="email" name="email" class="form-control" placeholder="Email" 
			   	            id="email" required
			   		   data-validation-required-message="Please enter your email">
			  <p class="help-block"></p>
		</div>
	    </div> 	
			  
               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" name="message" class="form-control" 
                       placeholder="Message" id="message" required
		       data-validation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
			  <p class="help-block"></p>
		</div>
               </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
	</div>

		</div>
	</div>


</div>
<div id="footer">
	<div class="container">
		<div class="col-md-6">
			<div class="panel panel-account">
				<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?><img src="<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo get_gravatar($_smarty_tpl->tpl_vars[\'user\']->value[\'email\'],48);?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
" class="pull-right">
				<p class="h4"><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'user\']->value[\'display_name\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
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
		<p class="text-muted"><small><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<span style="font-style:italic;" class="hidden-xs">Background image by <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</a><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
, courtesy of <?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\'];?>
/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
</a><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
<?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
.</span><?php echo '/*%%SmartyNocache:21516419852d585d5768049-35507401%%*/<?php }?>/*/%%SmartyNocache:21516419852d585d5768049-35507401%%*/';?>
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

<script src="/_/metro/js/jqBootstrapValidation.js"></script>
<script src="/_/metro/js/contact.js"></script>

<script src="/_/js/modernizr-1.7.min.js" type="text/javascript"></script>
</body>
</html><?php }} ?>