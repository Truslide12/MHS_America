<?php /*%%SmartyHeaderCode:206529263852a6aca9ac6100-83347440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06e45feb28bb66b772715a519993c01df983793e' => 
    array (
      0 => './incl/xhtml/default/frontend/account-billing.tpl',
      1 => 1385853844,
      2 => 'file',
    ),
    '7ed0bd03d771761c7c5f33c327229cb1d136b7d4' => 
    array (
      0 => './incl/xhtml/default/frontend/master.tpl',
      1 => 1386308398,
      2 => 'file',
    ),
    'b65717798301c450abcbe02263b8e2c10c06e826' => 
    array (
      0 => './incl/xhtml/default/frontend/account-company-colors.tpl',
      1 => 1385852772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206529263852a6aca9ac6100-83347440',
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
  'unifunc' => 'content_52a6acaa406e44_76484556',
  'cache_lifetime' => 20,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a6acaa406e44_76484556')) {function content_52a6acaa406e44_76484556($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Manage Profile Billing :: MHS America</title>

	<meta name="title" content="MHS America - Search Available Spaces and Services">
	<meta name="description" content="The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="mobile home spaces, mobile home lots, mobile home movers, mobile home specialists, mobile home experts, mobile home parks, mobile home vacancy, mobile home land, mobile home electricians, mobile home technicians">
	<meta name="google-site-verification" content="">
	<meta name="author" content="MHS America">
	<meta name="Copyright" content="Copyright &copy; 2013 MHS America. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<link rel="schema.DC" href="http://purl.org/dc/terms/">
	<meta name="DC.title" content="MHS America - Manage Profile Billing">
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
		
	<script src="/_/js/<?php if ($_smarty_tpl->tpl_vars['page']->value['jquery']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['jquery'];?>
<?php }else{ ?>jquery-1.10.2.min.js<?php }?>"></script>
	    <script src="/_/kendo/js/kendo.web.min.js"></script>
	<script src="/_/js/modernizr-1.7.min.js"></script>
	
	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" href="//code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="/_/css/dashboard.css" type="text/css">
<style type="text/css">
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_backdrop']!=''){?>
	body { background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_backdrop'];?>
) <?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_backdrop_align']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_backdrop_align'];?>
<?php }else{ ?>center top no-repeat<?php }?>; }
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_container_backcolor']!=''){?>
	section#us-county { background:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_container_backcolor'];?>
; }
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_banner_backcolor']!=''){?>
	#<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['name'];?>
-banner { height:80px; background:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_banner_backcolor'];?>
; margin:-1em -1em -60px; }
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_banner_linkcolor']!=''){?>
	#dashboard .mini-menu a { color:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_banner_linkcolor'];?>
; }
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_backcolor']!=''){?>
	div#content > footer { border:none; background:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_backcolor'];?>
; }
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_headcolor']!=''){?>
	div#content > footer h3 { color:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_headcolor'];?>
; }
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_bodycolor']!=''){?>
	div#content > footer { color:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_bodycolor'];?>
; }
	div#content > footer ul > li > a { color:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_bodycolor'];?>
; background:none; text-decoration:none; }
	div#content > footer ul > li > a:hover { color:<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_bodycolor'];?>
; background:none; text-decoration:underline; }
	div.account-box { color:#333; }
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_footer_lightheaders']==1){?>
	.grid h3 { font-size:120%;font-weight:normal; }
<?php }?>
</style></head>

<body class="page_account">

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
		<?php if ($_smarty_tpl->tpl_vars['page']->value['company']['data']['dashboard_banner_backcolor']!=''){?><div id="<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['name'];?>
-banner"></div><?php }?>
		<div class="mini-menu"><a href="/account/settings">Settings</a> | <a href="/account/logout">Log out</a></div>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['is_company_user']){?>
		<a href="/account"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['company']['data']['logo'];?>
"></a>
		<?php }else{ ?><h1>Dashboard</h1>
		<h2>Aloha, <?php echo u('display_name');?>
!</h2><?php }?>
		<div class="dashboard-box">
			<aside class="right-sidebar"><?php if ($_smarty_tpl->tpl_vars['page']->value['landing']=='renew'||$_smarty_tpl->tpl_vars['page']->value['landing']=='methods'){?>
				<a href="/account/profile">Back to profile billing...</a><br/><?php }?>
				<a href="/account">Go home...</a>
			</aside>
			<h1><?php if ($_smarty_tpl->tpl_vars['page']->value['landing']=='wizard'){?><?php if ($_smarty_tpl->tpl_vars['page']->value['businesstype']){?><?php echo ucfirst($_smarty_tpl->tpl_vars['page']->value['businesstype']);?>
<?php }else{ ?>Business<?php }?> Profile Wizard<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value['headline'];?>
<?php }?></h1>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['landing']=='manage'){?>
			<section id="business-manager">
				<?php  $_smarty_tpl->tpl_vars['prof'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prof']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['profiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prof']->key => $_smarty_tpl->tpl_vars['prof']->value){
$_smarty_tpl->tpl_vars['prof']->_loop = true;
?>
					<div class="profile-card">
						<header><?php echo $_smarty_tpl->tpl_vars['prof']->value['data']['title'];?>
</header>
						<div class="clearfix"></div>
						<div class="plans-mini">
							<div><span class="r"><?php if ($_smarty_tpl->tpl_vars['prof']->value['plandata']['name']!='free'){?><a href="/account/billing?action=renew&profile=<?php echo $_smarty_tpl->tpl_vars['prof']->value['id'];?>
" class="zocial primary">Renew</a> &nbsp; <?php }?><a href="/account/profile?action=plan&profile=<?php echo $_smarty_tpl->tpl_vars['prof']->value['id'];?>
&rtn=billing" class="zocial secondary"><?php if ($_smarty_tpl->tpl_vars['prof']->value['plandata']['name']=='free'){?>Upgrade<?php }else{ ?>Switch<?php }?></a></span><strong><?php echo $_smarty_tpl->tpl_vars['prof']->value['plandata']['title'];?>
</strong></div>
						</div>
					</div>
				<?php } ?>
			</section>
		<?php }elseif($_smarty_tpl->tpl_vars['page']->value['landing']=='edit'){?>
			<h2><a href="/account/profile">Profiles</a> &raquo; <?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['data']['title'];?>
</h2>
			<a class="zocial primary" href="/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['username'];?>
/edit">Continue to Editor</a>
		<?php }elseif($_smarty_tpl->tpl_vars['page']->value['landing']=='plan'){?>
			<h2><a href="/account/profile">Profiles</a> &raquo; <?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['data']['title'];?>
</h2>
			<div class="clearfix"></div>
			&nbsp;<div class="clearfix"></div>
			<div class="planlist">
				<?php  $_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['planlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->key => $_smarty_tpl->tpl_vars['plan']->value){
$_smarty_tpl->tpl_vars['plan']->_loop = true;
?><div<?php if ($_smarty_tpl->tpl_vars['plan']->value['id']==$_smarty_tpl->tpl_vars['page']->value['profile']['plan']){?> class="current"<?php }elseif($_smarty_tpl->tpl_vars['plan']->value['id']>$_smarty_tpl->tpl_vars['page']->value['profile']['plan']){?> class="after<?php if ($_smarty_tpl->tpl_vars['plan']->value['id']==$_smarty_tpl->tpl_vars['page']->value['profile']['plan']+1){?> rightafter<?php }?>"<?php }?>>
					<p class="title"><?php echo $_smarty_tpl->tpl_vars['plan']->value['title'];?>
</p>
					<p class="text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin felis odio, mattis sit amet nunc nec, gravida auctor nisl. Nam tincidunt enim odio, vitae ultricies tellus adipiscing et. Quisque aliquet mattis dolor, lobortis pellentesque metus tincidunt quis. Ut vel orci commodo, sodales odio quis, congue quam. Curabitur mollis posuere urna quis fermentum. Duis ornare, nulla at dictum molestie, ante dui convallis augue, at porta neque odio vel odio. Nulla et cursus nisi. Aliquam fermentum nibh ut tellus auctor, vel mattis ipsum pretium. Integer sagittis nulla arcu, non tincidunt justo consectetur quis. Fusce quis porta tellus, ut vulputate mauris.
					</p>
					<p class="switchbtn"><?php if ($_smarty_tpl->tpl_vars['plan']->value['id']!=$_smarty_tpl->tpl_vars['page']->value['profile']['plan']){?><a class="zocial <?php if ($_smarty_tpl->tpl_vars['plan']->value['name']=='free'){?>secondary<?php }else{ ?>primary<?php }?>" href="/account/profile?action=switchplan&profile=<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['id'];?>
&plan=<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['plan']->value['name']=='free'){?>Downgrade<?php }else{ ?>Switch<?php }?></a><?php }else{ ?><strong>Current Plan</strong><?php }?></p>
					<div class="clearfix"></div>
				</div><?php } ?>
				&nbsp;<p class="clearfix"></p>
			</div>
			<div class="clearfix"></div>
		<?php }elseif($_smarty_tpl->tpl_vars['page']->value['landing']=='analytics'){?>
			<div class="wblock">
			
			</div>
		<?php }?>
			<div class="clearfix"></div>
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


<style type="text/css">

.profile-card {
	height:auto;
}
.plans-mini div {
float:left;
padding:1em;
margin:1em;
background:#efefef;
border:1px solid #ccc;
width:400px;
}
.plans-mini div strong {
font-size:120%;
}

</style>

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