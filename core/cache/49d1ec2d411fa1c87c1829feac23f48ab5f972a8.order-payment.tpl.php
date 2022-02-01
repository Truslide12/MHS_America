<?php /*%%SmartyHeaderCode:13355202552ae64e369f960-47721825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49d1ec2d411fa1c87c1829feac23f48ab5f972a8' => 
    array (
      0 => './incl/xhtml/default/frontend/order-payment.tpl',
      1 => 1386468544,
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
      1 => 1386912564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13355202552ae64e369f960-47721825',
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
  'unifunc' => 'content_52ae64e44f14b6_79290619',
  'cache_lifetime' => 20,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ae64e44f14b6_79290619')) {function content_52ae64e44f14b6_79290619($_smarty_tpl) {?><!DOCTYPE html>
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

<body class="page_order">

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
			
<h1>Payment details</h1>
<div>
	<div class="profile-card">
		<header><?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['data']['title'];?>
</header>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['profile']['data']['cover']){?><div class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['data']['cover'];?>
" width="228" height="80" alt=""></div><?php }?>
		<footer><a class="zocial secondary" href="/order/payment?pid=<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['id'];?>
&plan=<?php echo $_smarty_tpl->tpl_vars['page']->value['plan'];?>
">Choose Profile</a>&nbsp;
		<a class="zocial primary" href="/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['username'];?>
" target="_blank">View Profile</a></footer>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
</div>

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


<script src="/_/js/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="/_/js/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script> 
<script src="/_/js/jquery.anystretch.min.js" type="text/javascript"></script>
<script type="text/javascript">
	//$('#advert-back').anystretch("/adspace/0/0/backdrop-2.jpg");
</script>   
<script type="text/javascript">
jQuery('#vmap').vectorMap({
    map: 'usa_en',
    backgroundColor: null,
    color: 'rgba(64,86,255,0.5)',
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
        $('body').append($('<form>').attr('method',"GET").attr('id','link-'+code).attr('action','http://beta.mhsamerica.com/state/' + code));
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