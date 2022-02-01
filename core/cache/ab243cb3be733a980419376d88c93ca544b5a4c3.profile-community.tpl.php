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
  'unifunc' => 'content_52d75b4c2e4911_10874760',
  'cache_lifetime' => 900,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d75b4c2e4911_10874760')) {function content_52d75b4c2e4911_10874760($_smarty_tpl) {?><!DOCTYPE html>
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
	
<link rel="stylesheet" href="/_/metro/css/profile.css" type="text/css">
<style type="text/css">
<?php if ($_smarty_tpl->tpl_vars['page']->value['slides'][0]['cover']){?>
#photo1 .container .photo{ background-image:url(<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][0]['cover'];?>
);background-position:<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][0]['cover_position'];?>
 }
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['slides'][1]['cover']){?>
#photo2 .container .photo{ background-image:url(<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][1]['cover'];?>
);background-position:<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][1]['cover_position'];?>
 }
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['slides'][2]['cover']){?>
#photo3 .container .photo{ background-image:url(<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][2]['cover'];?>
);background-position:<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][2]['cover_position'];?>
 }
<?php }?></style>

</head>
<body itemscope itemtype="http://schema.org/WebPage" class="page_profile<?php if ($_smarty_tpl->tpl_vars['page']->value['nobar']){?> no_submenu<?php }?> ">
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

	<div class="container" id="carousel-container"><!-- Carousel
    ================================================== -->
    <div id="myCarousel"<?php if ($_smarty_tpl->tpl_vars['page']->value['slides'][0]['cover']||$_smarty_tpl->tpl_vars['page']->value['slides'][1]['cover']||$_smarty_tpl->tpl_vars['page']->value['slides'][2]['cover']){?> class="carousel slide" data-ride="carousel"<?php }else{ ?> class="nameblock"<?php }?>>
      	  <div id="name-wrapper"><div class="container">
		<p class="h1 hidden-xs"><?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['title'];?>
 <small><a href="http://mhsamerica.com/locale/<?php echo strtolower($_smarty_tpl->tpl_vars['page']->value['state']['abbr']);?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['county']['name'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['city']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['city']['title'];?>
, <?php echo strtoupper($_smarty_tpl->tpl_vars['page']->value['state']['abbr']);?>
</a></small></p>
		<p class="h2 visible-xs"><?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['title'];?>
</p>
	  </div></div>
	  <?php if ($_smarty_tpl->tpl_vars['page']->value['slides'][0]['cover']||$_smarty_tpl->tpl_vars['page']->value['slides'][1]['cover']||$_smarty_tpl->tpl_vars['page']->value['slides'][2]['cover']){?>
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
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a><?php }?>
    </div><!-- /.carousel --></div>
	<div class="container" id="main-container">
		<div <?php if ($_smarty_tpl->tpl_vars['page']->value['plan_info']['name']=="free"){?>class="<?php if ($_smarty_tpl->tpl_vars['command']->value!=''){?>col-md-offset-3 <?php }?>col-md-6"<?php }else{ ?>class="col-md-12"<?php }?>>
			<div class="panel panel-default" id="profile-data">
			  <div class="panel-body">
				<div <?php if ($_smarty_tpl->tpl_vars['page']->value['plan_info']['name']=="free"){?>class="col-md-6"<?php }else{ ?>class="col-md-3"<?php }?>>
					<strong>Address</strong>
					<hr>
					<p class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['address'];?>
</p>
					<p class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['page']->value['city']['title'];?>
, <?php echo strtoupper($_smarty_tpl->tpl_vars['page']->value['state']['abbr']);?>
 <?php echo $_smarty_tpl->tpl_vars['page']->value['data']['zipcode'];?>
</p>
					<p class="visible-xs visible-sm"><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['address'];?>
, <?php echo $_smarty_tpl->tpl_vars['page']->value['city']['title'];?>
, <?php echo strtoupper($_smarty_tpl->tpl_vars['page']->value['state']['abbr']);?>
 <?php echo $_smarty_tpl->tpl_vars['page']->value['data']['zipcode'];?>
</p>
					<p class="visible-xs visible-sm">&nbsp;</p>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['plan_info']['name']!="free"){?><div class="col-md-6 panel-body">
					<?php if ($_smarty_tpl->tpl_vars['page']->value['plan_info']['name']!="free"){?><strong>Office Hours</strong>
					<hr>
					<?php if ($_smarty_tpl->tpl_vars['page']->value['hourspresent']){?>
					<div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
						<?php  $_smarty_tpl->tpl_vars['trange'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trange']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['profile']['hours']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trange']->key => $_smarty_tpl->tpl_vars['trange']->value){
$_smarty_tpl->tpl_vars['trange']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['trange']->value['start']!=7){?>
						<p class="two-col"><span>
						<?php if ($_smarty_tpl->tpl_vars['trange']->value['end']==0){?>
							<?php echo $_smarty_tpl->tpl_vars['page']->value['longdays'][$_smarty_tpl->tpl_vars['trange']->value['start']];?>

						<?php }else{ ?>
							<?php echo $_smarty_tpl->tpl_vars['page']->value['shortdays'][$_smarty_tpl->tpl_vars['trange']->value['start']];?>
 - <?php echo $_smarty_tpl->tpl_vars['page']->value['shortdays'][$_smarty_tpl->tpl_vars['trange']->value['end']];?>

						<?php }?></span><?php if ($_smarty_tpl->tpl_vars['trange']->value['time']==0){?>Closed<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['trange']->value['time'];?>
 - <?php echo $_smarty_tpl->tpl_vars['trange']->value['endtime'];?>
<?php }?></p>
						<?php }?><?php } ?>
					</div>
					<div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
						<?php if ($_smarty_tpl->tpl_vars['trange']->value['start']==7){?>
						<p class="two-col"><span>
						<?php if ($_smarty_tpl->tpl_vars['trange']->value['end']==0){?>
							<?php echo $_smarty_tpl->tpl_vars['page']->value['longdays'][$_smarty_tpl->tpl_vars['trange']->value['start']];?>

						<?php }else{ ?>
							<?php echo $_smarty_tpl->tpl_vars['page']->value['shortdays'][$_smarty_tpl->tpl_vars['trange']->value['start']];?>
 - <?php echo $_smarty_tpl->tpl_vars['page']->value['shortdays'][$_smarty_tpl->tpl_vars['trange']->value['end']];?>

						<?php }?></span><?php if ($_smarty_tpl->tpl_vars['trange']->value['time']==0){?>Closed<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['trange']->value['time'];?>
 - <?php echo $_smarty_tpl->tpl_vars['trange']->value['endtime'];?>
<?php }?></p>
						<?php }?>
					</div>
					<?php }else{ ?>
					<div class="col-md-12">
						<span style="font-style:italic;">No office hours available</span>
					</div>
					<?php }?>
					<p class="visible-xs visible-sm">&nbsp;</p><?php }?>
				</div><?php }?>
				<div <?php if ($_smarty_tpl->tpl_vars['page']->value['plan_info']['name']=="free"){?>class="col-md-6"<?php }else{ ?>class="col-md-3"<?php }?>>
					<strong>Contact Details</strong>
					<hr>
					<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['manager']){?><p class="two-col"><span>Mgr. <?php echo $_smarty_tpl->tpl_vars['page']->value['data']['manager'];?>
</span>&nbsp;</p><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['phone']){?><p class="two-col"><span>Phone</span><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['phone'];?>
</p><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['fax']){?><p class="two-col"><span>Fax</span><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['fax'];?>
</p><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['email']){?><p class="two-col"><span>Email</span><a href="/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['prof_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['name'];?>
/email">Send Message</a></p><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['website']){?><p class="two-col"><span>Website</span><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['website'];?>
">Homepage</a></p><?php }?>
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
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['senior']==1){?><div class="col-md-3"><div class="info-tile"><strong>Senior</strong></div></div><?php }else{ ?><div class="col-md-3"><div class="info-tile"><strong>Family</strong></div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['handicap']==1){?><div class="col-md-2 col-xs-6"><div class="info-tile handicap" title="Good Accesibility">&nbsp;</div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['neighborhood']==1){?><div class="col-md-2 col-xs-6"><div class="info-tile neighborhood" title="Neighborhood Watch">&nbsp;</div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['spaces']){?><div class="col-md-4 col-xs-6"><div class="info-tile"><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['spaces'];?>
<span>&nbsp;spaces</span></div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['rent']){?><div class="clearfix visible-xs"></div><div class="col-md-5 col-xs-12"><div class="info-tile"><span><small>Starting at</small> </span>$<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['rent'];?>
<span>&nbsp;/mo</span></div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['gated']==1){?><div class="col-md-3 col-xs-6"><div class="info-tile">Gated</div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['pets']==1){?><div class="col-md-3 col-xs-6"><div class="info-tile">Pets <i class="glyphicon glyphicon-ok"></i></div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['scenic']==1){?><div class="col-md-3 col-xs-6"><div class="info-tile">Scenic</div></div><?php }?>
			  </div>
			</div>
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">About Our Community</h3>
			  </div>
			  <div class="panel-body">
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['description']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['description'];?>
<?php }else{ ?><em>No description available</em><?php }?>
			  </div>
			</div>
		</div>
		<div class="col-md-6" id="right-col">
			<?php if ($_smarty_tpl->tpl_vars['page']->value['plan_info']['name']!="free"){?><div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">Community Amenities</h3>
			  </div>
			  <div class="panel-body tile-container">
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['pool']==1){?><div class="col-md-3"><div class="info-tile">Pool</div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['rec']==1){?><div class="col-md-3"><div class="info-tile">Clubhouse</div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['laundry']==1){?><div class="col-md-3"><div class="info-tile">Laundry</div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['playground']==1){?><div class="col-md-3"><div class="info-tile">Playground</div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['basketball']==1){?><div class="col-md-3"><div class="info-tile">Basketball</div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['soccer']==1){?><div class="col-md-3"><div class="info-tile">Soccer</div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['football']==1){?><div class="col-md-3"><div class="info-tile">Football</div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['badminton']==1){?><div class="col-md-3"><div class="info-tile">Badminton</div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['tennis']==1){?><div class="col-md-3"><div class="info-tile">Tennis</div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['casino']==1){?><div class="col-md-3"><div class="info-tile">Casino</div></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['hiking']==1){?><div class="col-md-3"><div class="info-tile">Hiking</div></div><?php }?>
			  </div>
			</div>
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">Spaces Available<?php if ($_smarty_tpl->tpl_vars['page']->value['spaces']){?> (<?php echo count($_smarty_tpl->tpl_vars['page']->value['spaces']);?>
)<?php }?></h3>
			  </div>
			  <div class="panel-body tile-container space-container">
				<?php  $_smarty_tpl->tpl_vars['space'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['space']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['spaces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['space']->key => $_smarty_tpl->tpl_vars['space']->value){
$_smarty_tpl->tpl_vars['space']->_loop = true;
?>
				<div class="col-xs-6 col-sm-3 col-md-2">
					<div class="info-tile">
					<?php if ($_smarty_tpl->tpl_vars['space']->value['name']&&$_smarty_tpl->tpl_vars['space']->value['name']!="_"&&$_smarty_tpl->tpl_vars['space']->value['width']==0&&$_smarty_tpl->tpl_vars['space']->value['height']==0){?>
						<?php echo $_smarty_tpl->tpl_vars['space']->value['name'];?>
<br><small><?php echo howwide($_smarty_tpl->tpl_vars['space']->value['shape']);?>
</small>
					<?php }else{ ?>
						<?php echo howwide($_smarty_tpl->tpl_vars['space']->value['shape']);?>
<br><small><?php if ($_smarty_tpl->tpl_vars['space']->value['width']!=0&&$_smarty_tpl->tpl_vars['space']->value['height']!=0){?><?php echo $_smarty_tpl->tpl_vars['space']->value['width'];?>
 &times; <?php echo $_smarty_tpl->tpl_vars['space']->value['height'];?>
<?php }else{ ?>&nbsp;<?php }?></small>
					<?php }?>
					</div>
				</div>
				<?php }
if (!$_smarty_tpl->tpl_vars['space']->_loop) {
?>
				<em>No spaces listed. Contact management for current availability.</em>
				<?php } ?>
			  </div>
			</div>
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">Homes Available<?php if ($_smarty_tpl->tpl_vars['page']->value['homes']&&!$_smarty_tpl->tpl_vars['page']->value['editmode']){?> (<?php echo $_smarty_tpl->tpl_vars['page']->value['home_count'];?>
)<?php }?></h3>
			  </div>
			  <div class="panel-body home-container">
				<?php  $_smarty_tpl->tpl_vars['home'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['home']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['homes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['home']->key => $_smarty_tpl->tpl_vars['home']->value){
$_smarty_tpl->tpl_vars['home']->_loop = true;
?>
				<div class="col-md-6"><div class="home-block">
					<div class="image image-wide hidden-xs hidden-sm"><img src="/imgstorage/home/covers/<?php echo alphaID($_smarty_tpl->tpl_vars['home']->value['id']);?>
.jpg">
					<p class="home-price"><span class="pull-right"><?php echo showprice($_smarty_tpl->tpl_vars['home']->value['price']);?>
</span><strong>Price</strong></p></div>
					<div class="col-xs-6 image pull-right visible-xs visible-sm">
						<img src="/imgstorage/home/covers/<?php echo alphaID($_smarty_tpl->tpl_vars['home']->value['id']);?>
.jpg">
					</div>
					<div class="title"><a href="/home/<?php echo alphaID($_smarty_tpl->tpl_vars['home']->value['id']);?>
" class="h4"><?php echo $_smarty_tpl->tpl_vars['home']->value['year'];?>
 <?php echo $_smarty_tpl->tpl_vars['home']->value['brand'];?>
</a></div>
					<p class="visible-xs visible-sm"><?php echo showprice($_smarty_tpl->tpl_vars['home']->value['price']);?>
</p>
					<div class="clearfix"></div>
				</div></div>
				<?php }
if (!$_smarty_tpl->tpl_vars['home']->_loop) {
?>
				<em>No homes listed.</em>
				<?php } ?>
			  </div>
			</div><?php }?>
		</div>	
		
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