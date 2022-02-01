<?php /*%%SmartyHeaderCode:151551066352bcf8fba917a3-32698614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f28faa531abceabdaacc62f8f063d68b46dcfe72' => 
    array (
      0 => './incl/xhtml/default/frontend/order-details.tpl',
      1 => 1386736015,
      2 => 'file',
    ),
    'dde8d407a3573d5d186b8a7d81df0bc241f4958d' => 
    array (
      0 => './incl/xhtml/default/frontend/order-master.tpl',
      1 => 1386734192,
      2 => 'file',
    ),
    '7ed0bd03d771761c7c5f33c327229cb1d136b7d4' => 
    array (
      0 => './incl/xhtml/default/frontend/master.tpl',
      1 => 1387587693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151551066352bcf8fba917a3-32698614',
  'variables' => 
  array (
    'yr' => 0,
    'page' => 1,
    'bodyclasses' => 0,
    'category' => 0,
    'langprefix' => 0,
    'isUserLoggedIn' => 0,
    'opt' => 1,
    'is_search' => 0,
    'state' => 1,
    'article' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52bcf8fc9ba546_91981626',
  'cache_lifetime' => 20,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bcf8fc9ba546_91981626')) {function content_52bcf8fc9ba546_91981626($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>MHS America</title>

	<meta name="title" content="MHS America - ">
	<meta name="description" content="The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="">
	<meta name="google-site-verification" content="">
	<meta name="author" content="MHS America">
	<meta name="Copyright" content="Copyright &copy; 2013 MHS America. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<link rel="schema.DC" href="http://purl.org/dc/terms/">
	<meta name="DC.title" content="MHS America">
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
	<link href='//fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/_/css/style.css">
	<link rel="stylesheet" href="/_/kendo/styles/kendo.common.min.css">
    <link rel="stylesheet" href="/_/kendo/styles/kendo.default.min.css">
	<link rel="stylesheet" type="text/css" href="/_/css/zocial.css">
	<link rel="stylesheet" type="text/css" media="screen" href="/_/js/jqvmap/jqvmap.css">
		
	<script src="/_/js/<?php if ($_smarty_tpl->tpl_vars['page']->value['jquery']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['jquery'];?>
<?php }else{ ?>jquery-1.10.2.min.js<?php }?>"></script>
    <script src="/_/kendo/js/kendo.web.min.js"></script>
	<script src="/_/js/modernizr-1.7.min.js"></script>
	
	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script type="text/javascript" href="//code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="/_/css/dashboard.css" type="text/css">
<link rel="stylesheet" href="/_/css/font-awesome.min.css" type="text/css">
<!-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Poiret+One" type="text/css"> -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Pontano+Sans" type="text/css">
<link rel="stylesheet" href="/_/css/orders.css" type="text/css">

</head>

<body itemscope itemtype="http://schema.org/WebPage" class="page_order">

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
		<h1><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</h1>
		<div class="dashboard-box">
			<div class="clearfix"></div>
			<div class="process<?php if ($_smarty_tpl->tpl_vars['page']->value['tab']=="payment"){?> dark<?php }?>">
				<ul>
					<li<?php if ($_smarty_tpl->tpl_vars['page']->value['tab']=="confirmation"||$_smarty_tpl->tpl_vars['page']->value['tab']=="payment"||$_smarty_tpl->tpl_vars['page']->value['tab']=="details"){?> class="previous"<?php }elseif($_smarty_tpl->tpl_vars['page']->value['tab']=="login"){?> class="current"<?php }?>>Login<i class="fa fa-sign-in"></i></li>
					<li<?php if ($_smarty_tpl->tpl_vars['page']->value['tab']=="confirmation"||$_smarty_tpl->tpl_vars['page']->value['tab']=="payment"){?> class="previous"<?php }elseif($_smarty_tpl->tpl_vars['page']->value['tab']=="details"){?> class="current"<?php }?>>Details<i class="fa fa-list-alt"></i></li>
					<li<?php if ($_smarty_tpl->tpl_vars['page']->value['tab']=="confirmation"){?> class="previous"<?php }elseif($_smarty_tpl->tpl_vars['page']->value['tab']=="payment"){?> class="current"<?php }?>>Payment<i class="fa fa-credit-card"></i></li>
					<li<?php if ($_smarty_tpl->tpl_vars['page']->value['tab']=="confirmation"){?> class="current finish"<?php }?>>Confirmation<i class="fa fa-check"></i></li>
				</ul>
				<div class="clearfix"></div>
				<hr>
			</div>
			<div class="clearfix"></div>
			
<section id="business-wizard" class="order_details"><h1 class="rarity">List a new business</h1><br><?php if ($_smarty_tpl->tpl_vars['page']->value['action']=="new"){?><form method="post" action="/order/payment">
	<input type="hidden" name="plan" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['plan'];?>
">
	<p>Let's start with the most important parts...</p>
	<div class="grid">
		<div class="g12"><label for="business-name" class="full"><h3><?php if ($_smarty_tpl->tpl_vars['page']->value['businesstype']=="community"){?>Community<?php }elseif($_smarty_tpl->tpl_vars['page']->value['businesstype']=="professional"){?>Business<?php }?> Name:</h3><input type="text" class="textbox" id="business-name" name="title" style="width:400px;"></label></div>
		<?php if (1==2){?><div class="g6">
			<label for="business-type" class="full"><h3>The type of business:&nbsp;&nbsp;</h3>
				<select id="business-type" name="type">
					<option value="community">Mobile Community</option>
					<option value="professional">Service Contractor</option>
				</select>
			</label>
		</div><?php }?>
		<div class="g12">
			<label class="full">
				<h3>Business Location:</h3>
				<input id="bsnsstate" name="state">
				<input id="bsnscounty" name="county">
				<input id="bsnscity" name="city">
			</label>
		</div>
	</div>
	<p>&nbsp;</p>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['businesstype']=="community"){?>
	<div class="checks grid">
		<h3 class="floating">Age</h3>
		<label for="audience-1" class="full l"><input type="radio" id="audience-1" name="agerestrict" value="family"><label for="audience-1" class="chk"> Family</label></label>
		<label for="audience-2" class="full l"><input type="radio" id="audience-2" name="agerestrict" value="senior"><label for="audience-2" class="chk"> Senior</label></label>
		<div class="clearfix"></div>
	</div>
	<div class="checks grid">
		<h3>About Your Community &amp; Area</h3><br>
		<div class="g6">
			<strong class="form-strong">Attributes</strong>
			<label for="chk-gated"><input type="checkbox" name="gated" id="chk-gated" value="yep"><label for="chk-gated" class="chk"> Gated Community</label></label>
			<label for="chk-pets"><input type="checkbox" name="pets" id="chk-pets" value="yep"><label for="chk-pets" class="chk"> Pets Allowed</label></label>
			<label for="chk-acc"><input type="checkbox" name="acc" id="chk-acc" value="yep"><label for="chk-acc" class="chk"> Accessibility for Disabled</label></label>
			<div class="clearfix"></div>
		</div>
		<div class="g6">
			<strong class="form-strong">Amenities</strong>
			<div class="grid">
				<div class="g5">
					<label for="chk-pool"><input type="checkbox" name="pool" id="chk-pool" value="yep"> <label for="chk-pool" class="chk">Pool / Spa</label></label>
					<label for="chk-rec"><input type="checkbox" name="rec" id="chk-rec" value="yep"> <label for="chk-rec" class="chk">Clubhouse</label></label>
					<label for="chk-laundry"><input type="checkbox" name="laundry" id="chk-laundry" value="yep"> <label for="chk-laundry" class="chk">Laundromat</label></label>
				</div>
				<div class="g7">
					<label for="chk-playground"><input type="checkbox" name="playground" id="chk-playground" value="yep"> <label for="chk-playground" class="chk">Playground</label></label>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="g12">
			<strong class="form-strong" style="padding-top:0.5em;width:auto;">Would you consider your location scenic or a tourist attraction?</strong>
			<div class="clearfix"></div>
			<label for="scenic-1" class="full l"><input type="radio" id="scenic-1" name="scenic" value="1"><label for="scenic-1" class="chk"> Yes</label></label>
			<label for="scenic-2" class="full l"><input type="radio" id="scenic-2" name="scenic" value="0"><label for="scenic-2" class="chk"> No</label></label>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="checks grid">
		<h3>On-site / Nearby Attractions</h3><br>
		<div class="g6">
			<strong class="form-strong">Sports</strong>
			<div class="grid">
				<div class="g5">
					<label for="chk-golf"><input type="checkbox" name="golf" id="chk-golf" value="yep"> <label for="chk-golf" class="chk">Golf</label></label>
					<label for="chk-tennis"><input type="checkbox" name="tennis" id="chk-tennis" value="yep"> <label for="chk-tennis" class="chk">Tennis</label></label>
					<label for="chk-basketball"><input type="checkbox" name="basketball" id="chk-basketball" value="yep"> <label for="chk-basketball" class="chk">Basketball</label></label>
					<label for="chk-baseball"><input type="checkbox" name="baseball" id="chk-baseball" value="yep"> <label for="chk-baseball" class="chk">Baseball</label></label>
				</div>
				<div class="g7">
					<label for="chk-badminton"><input type="checkbox" name="badminton" id="chk-badminton" value="yep"> <label for="chk-badminton" class="chk">Badminton</label></label>
					<label for="chk-shuffleboard"><input type="checkbox" name="shuffleboard" id="chk-shuffleboard" value="yep"> <label for="chk-shuffleboard" class="chk">Shuffleboard</label></label>
					<label for="chk-polo"><input type="checkbox" name="polo" id="chk-polo" value="yep"> <label for="chk-polo" class="chk">Polo</label></label>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="g6">
			<strong class="form-strong">Activities</strong>
			<div class="grid">
				<div class="g5">
					<label for="chk-bingo"><input type="checkbox" name="bingo" id="chk-bingo" value="yep"> <label for="chk-bingo" class="chk">Bingo</label></label>
					<label for="chk-casino"><input type="checkbox" name="casino" id="chk-casino" value="yep"> <label for="chk-casino" class="chk">Casino</label></label>
					<label for="chk-billiards"><input type="checkbox" name="billiards" id="chk-billiards" value="yep"> <label for="chk-billiards" class="chk">Billiards</label></label>
					<label for="chk-trails"><input type="checkbox" name="trails" id="chk-trails" value="yep"> <label for="chk-trails" class="chk">Hiking / Trails</label></label>
				</div>
				<div class="g7">
					<label for="chk-horsey"><input type="checkbox" name="horsey" id="chk-horsey" value="yep"> <label for="chk-horsey" class="chk">Horseriding</label></label>
					<label for="chk-resort"><input type="checkbox" name="resort" id="chk-resort" value="yep"> <label for="chk-resort" class="chk">Resorts, Theme Parks</label></label>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
	<?php }else{ ?>
	No profile wizard for professionals yet.
	<?php }?>
	<hr>
	<p align="right"><input type="submit" value="Continue" class="zocial primary"></p>
</form>
<?php }else{ ?>
<div class="grid">
	<div class="g6">
		<a href="/order/details?action=new&type=community&plan=<?php echo $_smarty_tpl->tpl_vars['page']->value['plan'];?>
" class="tile-link">New Community</a>
	</div>
	<div class="g6">
		<a href="/order/details?action=new&type=professional&plan=<?php echo $_smarty_tpl->tpl_vars['page']->value['plan'];?>
" class="tile-link">New Professional</a>
	</div>
</div>
<div>&nbsp;</div>
<h1 class="rarity">Choose a current profile</h1>
<div class="grid" id="current_profiles">
	<div class="g12">
		<?php  $_smarty_tpl->tpl_vars['prof'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prof']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['profiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prof']->key => $_smarty_tpl->tpl_vars['prof']->value){
$_smarty_tpl->tpl_vars['prof']->_loop = true;
?>
		<div class="profile-card">
			<div class="grid">
				<div class="g6"><header><input type="radio" name="pid" id="pidbox<?php echo $_smarty_tpl->tpl_vars['prof']->value['id'];?>
"><label for="pidbox<?php echo $_smarty_tpl->tpl_vars['prof']->value['id'];?>
" class="chk"><?php echo $_smarty_tpl->tpl_vars['prof']->value['data']['title'];?>
</label></header></div>
				<div class="g3">
					<?php echo $_smarty_tpl->tpl_vars['prof']->value['planinfo']['title'];?>

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<?php } ?>
	</div>
	<div class="clearfix"></div>
</div>
<?php }?></section>

		</div>
	</div>
</div>
</section>

	<footer><form action="/contactmail.php" method="GET">
		<div class="wrapper">
			<div class="grid">
								<div class="g6">
					<h3 class="padded">My Account</h3>
					<div class="account-box">
						<span style="float:right;margin:-0.4em;"><img src="http://gravatar.com/avatar/5346bb08332c326da043e8046be4fc70?s=40&d=mm"></span>
						<strong>Logged in as <span>Keystroke</span></strong><br/>
						<a href="/account">Go to Dashboard</a> | <a href="/account/logout">Log out</a>
					</div>				</div>
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