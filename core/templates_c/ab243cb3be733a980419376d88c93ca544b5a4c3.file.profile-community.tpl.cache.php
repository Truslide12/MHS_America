<?php /* Smarty version Smarty-3.1.8, created on 2014-01-15 22:08:43
         compiled from "./incl/xhtml/metro/frontend/profile-community.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188411282852d75b4ba105c4-38464834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab243cb3be733a980419376d88c93ca544b5a4c3' => 
    array (
      0 => './incl/xhtml/metro/frontend/profile-community.tpl',
      1 => 1389677544,
      2 => 'file',
    ),
    '8588bc97dffb04ef34f8bd0204873b24dc678f47' => 
    array (
      0 => './incl/xhtml/metro/frontend/master.tpl',
      1 => 1389757845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188411282852d75b4ba105c4-38464834',
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
  'unifunc' => 'content_52d75b4c2bc0a0_40089657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d75b4c2bc0a0_40089657')) {function content_52d75b4c2bc0a0_40089657($_smarty_tpl) {?><!DOCTYPE html>
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
    <meta name="description" content="<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'meta_description\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
">
    <meta name="author" content="MHS America">
	
	<title><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'title\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'title\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 :: <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
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
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][0][\'cover\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

#photo1 .container .photo{ background-image:url(<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][0][\'cover\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
);background-position:<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][0][\'cover_position\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 }
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][1][\'cover\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

#photo2 .container .photo{ background-image:url(<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][1][\'cover\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
);background-position:<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][1][\'cover_position\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 }
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][2][\'cover\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

#photo3 .container .photo{ background-image:url(<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][2][\'cover\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
);background-position:<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][2][\'cover_position\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 }
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</style>

</head>
<body itemscope itemtype="http://schema.org/WebPage" class="<?php echo $_smarty_tpl->tpl_vars['bodyclasses']->value;?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'nobar\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 no_submenu<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
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
				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']!="welcome"){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<a class="navbar-brand" href="/"><img src="/_/images/elias/mhs-header-logo-mini.png"></a><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'pragpage\']=="welcome"&&1==2){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<li class="active"><a href="#">Home</a></li><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
						<ul class="dropdown-menu">
<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?>							<li class="dropdown-header"><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'user\']->value[\'display_name\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
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
        </div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if (!$_smarty_tpl->tpl_vars[\'page\']->value[\'nobar\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

		<div id="main-submenu" class="hidden-sm hidden-xs"><div class="container center"><p>Select a state from the map below:</p></div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

	</div>

<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<img src="/_/images/backdrops/<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'file\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
" alt="" id="pagecanvas"<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'heightstretch\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 style="height:100%;width:auto;max-width:none;min-width:100%;" class="hidden-xs"<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>


	<div class="container" id="carousel-container"><!-- Carousel
    ================================================== -->
    <div id="myCarousel"<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][0][\'cover\']||$_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][1][\'cover\']||$_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][2][\'cover\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 class="carousel slide" data-ride="carousel"<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }else{ ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 class="nameblock"<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
>
      <?php if (1==2){?><!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol><?php }?>
	  <div id="name-wrapper"><div class="container">
		<p class="h1 hidden-xs"><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'title\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 <small><a href="<?php echo s('domain');?>
/locale/<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo strtolower($_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'abbr\']);?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
/<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'county\'][\'name\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
/<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'city\'][\'name\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
"><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'city\'][\'title\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
, <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo strtoupper($_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'abbr\']);?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</a></small></p>
		<p class="h2 visible-xs"><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'title\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</p>
	  </div></div>
	  <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][0][\'cover\']||$_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][1][\'cover\']||$_smarty_tpl->tpl_vars[\'page\']->value[\'slides\'][2][\'cover\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

      <div class="carousel-inner">
        <div class="item active" id="photo1">
          <div class="container">
			<div class="photo"></div>
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item" id="photo2">
          <div class="container">
            <div class="photo"></div>
			<div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item" id="photo3">
		  <div class="container">
			<div class="photo"></div>
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

    </div><!-- /.carousel --></div>
	<div class="container" id="main-container">
		<div <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan_info\'][\'name\']=="free"){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
class="<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'command\']->value!=\'\'){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
col-md-offset-3 <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
col-md-6"<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }else{ ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
class="col-md-12"<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
>
			<div class="panel panel-default" id="profile-data">
			  <div class="panel-body">
				<div <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan_info\'][\'name\']=="free"){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
class="col-md-6"<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }else{ ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
class="col-md-3"<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
>
					<strong>Address</strong>
					<hr>
					<p class="hidden-xs hidden-sm"><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'address\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</p>
					<p class="hidden-xs hidden-sm"><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'city\'][\'title\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
, <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo strtoupper($_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'abbr\']);?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'zipcode\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</p>
					<p class="visible-xs visible-sm"><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'address\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
, <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'city\'][\'title\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
, <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo strtoupper($_smarty_tpl->tpl_vars[\'page\']->value[\'state\'][\'abbr\']);?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'zipcode\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</p>
					<p class="visible-xs visible-sm">&nbsp;</p>
				</div>
				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan_info\'][\'name\']!="free"){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-6 panel-body">
					<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan_info\'][\'name\']!="free"){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<strong>Office Hours</strong>
					<hr>
					<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'hourspresent\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

					<div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
						<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php  $_smarty_tpl->tpl_vars[\'trange\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'trange\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'hours\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'trange\']->key => $_smarty_tpl->tpl_vars[\'trange\']->value){
$_smarty_tpl->tpl_vars[\'trange\']->_loop = true;
?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'trange\']->value[\'start\']!=7){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

						<p class="two-col"><span>
						<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'trange\']->value[\'end\']==0){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

							<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'longdays\'][$_smarty_tpl->tpl_vars[\'trange\']->value[\'start\']];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

						<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }else{ ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

							<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'shortdays\'][$_smarty_tpl->tpl_vars[\'trange\']->value[\'start\']];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 - <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'shortdays\'][$_smarty_tpl->tpl_vars[\'trange\']->value[\'end\']];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

						<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</span><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'trange\']->value[\'time\']==0){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
Closed<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }else{ ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'trange\']->value[\'time\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 - <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'trange\']->value[\'endtime\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</p>
						<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php } ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

					</div>
					<div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
						<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'trange\']->value[\'start\']==7){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

						<p class="two-col"><span>
						<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'trange\']->value[\'end\']==0){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

							<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'longdays\'][$_smarty_tpl->tpl_vars[\'trange\']->value[\'start\']];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

						<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }else{ ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

							<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'shortdays\'][$_smarty_tpl->tpl_vars[\'trange\']->value[\'start\']];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 - <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'shortdays\'][$_smarty_tpl->tpl_vars[\'trange\']->value[\'end\']];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

						<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</span><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'trange\']->value[\'time\']==0){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
Closed<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }else{ ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'trange\']->value[\'time\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 - <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'trange\']->value[\'endtime\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</p>
						<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

					</div>
					<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }else{ ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

					<div class="col-md-12">
						<span style="font-style:italic;">No office hours available</span>
					</div>
					<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

					<p class="visible-xs visible-sm">&nbsp;</p><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				</div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<div <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan_info\'][\'name\']=="free"){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
class="col-md-6"<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }else{ ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
class="col-md-3"<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
>
					<strong>Contact Details</strong>
					<hr>
					<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'manager\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<p class="two-col"><span>Mgr. <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'manager\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</span>&nbsp;</p><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

					<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'phone\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<p class="two-col"><span>Phone</span><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'phone\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</p><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

					<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'fax\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<p class="two-col"><span>Fax</span><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'fax\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</p><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

					<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'email\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<p class="two-col"><span>Email</span><a href="/<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'prof_id\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
/<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'profile\'][\'name\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
/email">Send Message</a></p><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

					<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'website\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<p class="two-col"><span>Website</span><a href="<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'website\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
">Homepage</a></p><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				</div>
			  </div>
			</div>
		</div>
		<div class="col-md-6" id="left-col">
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">Community Information</h3>
			  </div>
			  <div class="panel-body tile-container">
				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'senior\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3"><div class="info-tile"><strong>Senior</strong></div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }else{ ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3"><div class="info-tile"><strong>Family</strong></div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'handicap\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-2 col-xs-6"><div class="info-tile handicap" title="Good Accesibility">&nbsp;</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'neighborhood\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-2 col-xs-6"><div class="info-tile neighborhood" title="Neighborhood Watch">&nbsp;</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'spaces\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-4 col-xs-6"><div class="info-tile"><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'spaces\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<span>&nbsp;spaces</span></div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'rent\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="clearfix visible-xs"></div><div class="col-md-5 col-xs-12"><div class="info-tile"><span><small>Starting at</small> </span>$<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'rent\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<span>&nbsp;/mo</span></div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'gated\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3 col-xs-6"><div class="info-tile">Gated</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'pets\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3 col-xs-6"><div class="info-tile">Pets <i class="glyphicon glyphicon-ok"></i></div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'scenic\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3 col-xs-6"><div class="info-tile">Scenic</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

			  </div>
			</div>
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">About Our Community</h3>
			  </div>
			  <div class="panel-body">
				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'description\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'description\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }else{ ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<em>No description available</em><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

			  </div>
			</div>
		</div>
		<div class="col-md-6" id="right-col">
			<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'plan_info\'][\'name\']!="free"){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">Community Amenities</h3>
			  </div>
			  <div class="panel-body tile-container">
				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'pool\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3"><div class="info-tile">Pool</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'rec\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3"><div class="info-tile">Clubhouse</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'laundry\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3"><div class="info-tile">Laundry</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'playground\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3"><div class="info-tile">Playground</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'basketball\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3"><div class="info-tile">Basketball</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'soccer\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3"><div class="info-tile">Soccer</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'football\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3"><div class="info-tile">Football</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'badminton\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3"><div class="info-tile">Badminton</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'tennis\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3"><div class="info-tile">Tennis</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'casino\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3"><div class="info-tile">Casino</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'data\'][\'hiking\']==1){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<div class="col-md-3"><div class="info-tile">Hiking</div></div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

			  </div>
			</div>
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">Spaces Available<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'spaces\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 (<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo count($_smarty_tpl->tpl_vars[\'page\']->value[\'spaces\']);?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
)<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</h3>
			  </div>
			  <div class="panel-body tile-container space-container">
				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php  $_smarty_tpl->tpl_vars[\'space\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'space\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'spaces\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'space\']->key => $_smarty_tpl->tpl_vars[\'space\']->value){
$_smarty_tpl->tpl_vars[\'space\']->_loop = true;
?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<div class="col-xs-6 col-sm-3 col-md-2">
					<div class="info-tile">
					<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'space\']->value[\'name\']&&$_smarty_tpl->tpl_vars[\'space\']->value[\'name\']!="_"&&$_smarty_tpl->tpl_vars[\'space\']->value[\'width\']==0&&$_smarty_tpl->tpl_vars[\'space\']->value[\'height\']==0){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

						<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'space\']->value[\'name\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<br><small><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo howwide($_smarty_tpl->tpl_vars[\'space\']->value[\'shape\']);?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</small>
					<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }else{ ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

						<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo howwide($_smarty_tpl->tpl_vars[\'space\']->value[\'shape\']);?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<br><small><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'space\']->value[\'width\']!=0&&$_smarty_tpl->tpl_vars[\'space\']->value[\'height\']!=0){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'space\']->value[\'width\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 &times; <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'space\']->value[\'height\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }else{ ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</small>
					<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

					</div>
				</div>
				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'space\']->_loop) {
?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<em>No spaces listed. Contact management for current availability.</em>
				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php } ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

			  </div>
			</div>
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">Homes Available<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'homes\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'editmode\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 (<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'home_count\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
)<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</h3>
			  </div>
			  <div class="panel-body home-container">
				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php  $_smarty_tpl->tpl_vars[\'home\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'home\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'homes\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'home\']->key => $_smarty_tpl->tpl_vars[\'home\']->value){
$_smarty_tpl->tpl_vars[\'home\']->_loop = true;
?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<div class="col-md-6"><div class="home-block">
					<div class="image image-wide hidden-xs hidden-sm"><img src="/imgstorage/home/covers/<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo alphaID($_smarty_tpl->tpl_vars[\'home\']->value[\'id\']);?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
.jpg">
					<p class="home-price"><span class="pull-right"><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo showprice($_smarty_tpl->tpl_vars[\'home\']->value[\'price\']);?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</span><strong>Price</strong></p></div>
					<div class="col-xs-6 image pull-right visible-xs visible-sm">
						<img src="/imgstorage/home/covers/<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo alphaID($_smarty_tpl->tpl_vars[\'home\']->value[\'id\']);?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
.jpg">
					</div>
					<div class="title"><a href="/home/<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo alphaID($_smarty_tpl->tpl_vars[\'home\']->value[\'id\']);?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
" class="h4"><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'home\']->value[\'year\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
 <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'home\']->value[\'brand\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</a></div>
					<p class="visible-xs visible-sm"><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo showprice($_smarty_tpl->tpl_vars[\'home\']->value[\'price\']);?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</p>
					<div class="clearfix"></div>
				</div></div>
				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'home\']->_loop) {
?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

				<em>No homes listed.</em>
				<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php } ?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

			  </div>
			</div><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>

		</div>	
		
		</div>
	</div>


</div>
<div id="footer">
	<div class="container">
		<div class="col-md-6">
			<div class="panel panel-account">
				<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?><img src="<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo get_gravatar($_smarty_tpl->tpl_vars[\'user\']->value[\'email\'],48);?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
" class="pull-right">
				<p class="h4"><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'user\']->value[\'display_name\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
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
		<p class="text-muted"><small><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<span style="font-style:italic;" class="hidden-xs">Background image by <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'credit\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']&&!$_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</a><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
, courtesy of <?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
" target="_blank" rel="noindex,nofollow"><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'courtesy\'];?>
/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'canvas\'][\'link\']){?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
</a><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
<?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
.</span><?php echo '/*%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/<?php }?>/*/%%SmartyNocache:188411282852d75b4ba105c4-38464834%%*/';?>
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