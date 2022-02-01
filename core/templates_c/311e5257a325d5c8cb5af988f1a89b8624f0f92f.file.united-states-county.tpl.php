<?php /* Smarty version Smarty-3.1.8, created on 2013-11-01 17:50:43
         compiled from "./incl/xhtml/united-states-county.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1743811321527430437ad441-71944803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '311e5257a325d5c8cb5af988f1a89b8624f0f92f' => 
    array (
      0 => './incl/xhtml/united-states-county.tpl',
      1 => 1381797552,
      2 => 'file',
    ),
    'cd6a059b2ef40a6eae655b7128ad8cef03032fdc' => 
    array (
      0 => './incl/xhtml/master_alt.tpl',
      1 => 1382937467,
      2 => 'file',
    ),
    'a7ce3c0d6a16088d79f929ef5f7d33bd6480d35f' => 
    array (
      0 => './incl/xhtml/ads-four-square.tpl',
      1 => 1382417159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1743811321527430437ad441-71944803',
  'function' => 
  array (
  ),
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
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52743044073692_05739900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52743044073692_05739900')) {function content_52743044073692_05739900($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head id="www-mhsamerica-com" data-template-set="html5-reset">
	<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php if (p('title')){?><?php echo p('title');?>
 :: <?php }?><?php echo s('title');?>
</title>

	<meta name="title" content="<?php echo s('title');?>
 - <?php echo p('meta_title');?>
">
	<meta name="description" content="<?php echo p('meta_description');?>
The leading search engine for finding vacant spaces as well as services and contractors.">
	<meta name="keywords" content="<?php echo p('meta_keywords');?>
">
	<meta name="google-site-verification" content="<?php echo s('google_site_verification');?>
">
	<meta name="author" content="<?php echo s('title');?>
">
	<meta name="Copyright" content="Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['yr']->value;?>
 <?php echo s('author');?>
. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<link rel="schema.DC" href="http://purl.org/dc/terms/">
	<meta name="DC.title" content="<?php echo s('title');?>
<?php if (p('title')){?> - <?php echo p('title');?>
<?php }?>">
	<meta name="DC.subject" content="<?php echo p('dublin_subject');?>
">
	<meta name="DC.creator" content="<?php echo p('dublin_creator');?>
">
	
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
	
	<script src="/_/js/<?php if ($_smarty_tpl->tpl_vars['page']->value['jquery']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['jquery'];?>
<?php }else{ ?>jquery-1.10.2.min.js<?php }?>"></script>
	<?php if (1==2){?><script>window.jQuery || document.write("<script src='/_/js/jquery-1.7.2.min.js'>\x3C/script>")</script><?php }?>
    <script src="/_/kendo/js/kendo.web.min.js"></script>
	<script src="/_/js/modernizr-1.7.min.js"></script>
	
<?php if (1==2){?>	<script src="//cufon.shoqolate.com/js/cufon-yui.js" type="text/javascript"></script>
	<script src="/_/js/dymaxion-script.cufonfonts.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('.dymaxionscript', { fontFamily: 'DymaxionScript', hover: true }); 
	</script>
<?php }?>	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body class="<?php echo $_smarty_tpl->tpl_vars['bodyclasses']->value;?>
">

<div class="wrapper">
	<header>
		<h1 class="dymaxionscript"><a href="/" title="To the front page"><?php echo s('title');?>
</a></h1>
		<nav>
			<ul>
				<li id="page-direction"><?php if ($_smarty_tpl->tpl_vars['category']->value=="pros"){?>Select a sub-category:<?php }else{ ?>Select a city below for spaces and homes or browse professionals by clicking above<?php }?></li>
				
				<li<?php if ($_smarty_tpl->tpl_vars['category']->value=="communities"||$_smarty_tpl->tpl_vars['category']->value==''){?> class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
<?php if ($_smarty_tpl->tpl_vars['category']->value!="communities"){?>communities<?php }?>" rel="spaces"><?php echo l('communities');?>
</a></li>
				<?php if (1==2){?>
				<li<?php if ($_smarty_tpl->tpl_vars['category']->value=="spaces"){?> class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
<?php if ($_smarty_tpl->tpl_vars['category']->value!="spaces"){?>spaces<?php }?>" rel="spaces"><?php echo l('spaces');?>
</a></li>
				<li<?php if ($_smarty_tpl->tpl_vars['category']->value=="homes"){?> class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
<?php if ($_smarty_tpl->tpl_vars['category']->value!="homes"){?>homes<?php }?>" rel="homes" aria-haspopup="true"><?php echo l('homes');?>
</a>
					<ul>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
homes/for-sale" rel="for-sales"><?php echo l('for sale');?>
</a></li>
					</ul>
				</li>
				<?php }?>
				<li<?php if ($_smarty_tpl->tpl_vars['category']->value=="pros"){?> class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
<?php if ($_smarty_tpl->tpl_vars['category']->value!="pros"){?>pros<?php }?>" aria-haspopup="true"><?php echo l('professionals');?>
</a>
					<?php if (1==2){?>
					<ul>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
pros/dealers" rel="dealers"><?php echo l('dealers');?>
</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
pros/agents" rel="agents"><?php echo l('licensed agents');?>
</a></li>
						<li class="end"></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
pros/inspectors" rel="inspectors"><?php echo l('safety inspectors');?>
</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
pros/builders" rel="builders"><?php echo l('builders');?>
</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
pros/transporters" rel="transporters"><?php echo l('transporters');?>
</a></li>
					</ul>
					<?php }?>
				</li>
				<li class="end"></li>
				
				<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?>
				<li class="right<?php if ($_smarty_tpl->tpl_vars['category']->value=="account"){?> active<?php }?>"><a class="dashie" href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
account"><span class="r"><img src="<?php echo get_gravatar(u('email'),32);?>
&d=mm"></span><span style="line-height:2.5;padding:0 1em 0 0;"><?php echo u('display_name');?>
</span></a>
				<div class="drop">
					<div class="account-box">
						<span class="r"><img src="<?php echo get_gravatar(u('email'),32);?>
&d=mm"></span>
						<h2><strong><span><?php echo u('display_name');?>
</span></strong></h2>
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
				<?php }else{ ?>
				<li class="right<?php if ($_smarty_tpl->tpl_vars['category']->value=="login"){?> active<?php }?>"><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
account/login"><?php echo l('log in');?>
 / <?php echo l('register');?>
</a>
				<div class="drop">
					<div class="account-box guest-box">
						<h2><strong><span><?php echo l('log in');?>
</span></strong></h2>
						<form action="/account/login" method="POST">
						<input type="hidden" name="rqst" value="global">
						<p><input type="text" name="username" placeholder="Username"></p>
						<p><input type="password" name="password" placeholder="Password"></p>
						<a href="<?php echo s('domain');?>
/account/register" class="zocial secondary r">New Account</a> <a href="#" class="zocial primary" onclick="$('#loginSubmit').click();">Login</a><input type="submit" id="loginSubmit" style="display:none;" value="Login">
						</form>
					</div>
				</div></li>
				<?php }?>
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
" alt="" id="pagecanvas"<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['heightstretch']==1){?>style="height:100%;width:auto;max-width:none;"<?php }?>><?php }?>
<?php if ((p('advert'))==true){?><aside class="advertisement" id="backdrop"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['backdrop']['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['backdrop']['image'];?>
"/></a><?php }?></div>
<div id="content">
<?php if ((p('advert'))==true){?><span class="ad-notice<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['blacknotices']==1){?> black<?php }?>" id="advertisement-notice-right">Sponsored Ad</span><span class="ad-notice<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['blacknotices']==1){?> black<?php }?>" id="advertisement-notice">Sponsored Ad</span>
<?php }?>
<section id="us-county">
<div class="county-content">
	<div class="content-box">
		<?php if ($_smarty_tpl->tpl_vars['page']->value['success']=="no"){?>
			<div><h1>This county does exist</h1></div>
		<?php }else{ ?>
		<h1><a href="<?php echo s('domain');?>
/state/<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['abbr'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['state']['title'];?>
</a> &raquo; <?php echo $_smarty_tpl->tpl_vars['page']->value['county']['title'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['county']['hidesuffix']!=1){?> <?php if ($_smarty_tpl->tpl_vars['page']->value['state']['suffix']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['state']['suffix'];?>
<?php }else{ ?><?php echo l('county');?>
<?php }?><?php }?></h1>
			<?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value){
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
				<div class="city-box"><a href="<?php echo s('domain');?>
/locale/<?php echo $_smarty_tpl->tpl_vars['page']->value['state']['abbr'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['county']['name'];?>
/<?php echo $_smarty_tpl->tpl_vars['city']->value['name'];?>
"><span class="city-title"><?php echo $_smarty_tpl->tpl_vars['city']->value['title'];?>
</span>
				<p><span title="Homes" class="tidbit-homes"><?php echo $_smarty_tpl->tpl_vars['city']->value['homecount'];?>
</span>
				<span title="Spaces" class="tidbit-lots"><?php echo $_smarty_tpl->tpl_vars['city']->value['lotcount'];?>
</span>
				<span title="Professionals" class="tidbit-pros"><?php echo $_smarty_tpl->tpl_vars['city']->value['procount'];?>
</span></p></a>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['city']->value['tick']==$_smarty_tpl->tpl_vars['page']->value['adsstart']&&$_smarty_tpl->tpl_vars['page']->value['adspresent']){?>
				<div class="clearfix"></div>
				<?php /*  Call merged included template "ads-four-square.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ads-four-square.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1743811321527430437ad441-71944803');
content_52743043c1d897_53280323($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ads-four-square.tpl" */?>
				<?php }?>
			<?php }
if (!$_smarty_tpl->tpl_vars['city']->_loop) {
?>
				<div class="wblock g6 badmessage">
				<p>No data available for the selected area</p>
				<br>
				<p>Please try again later</p>
				</div>
			<?php } ?>
			<div class="clearfix"></div>
			<?php if (count($_smarty_tpl->tpl_vars['page']->value['cities'])<$_smarty_tpl->tpl_vars['page']->value['adsstart']&&$_smarty_tpl->tpl_vars['page']->value['adspresent']){?>
			<?php /*  Call merged included template "ads-four-square.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ads-four-square.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1743811321527430437ad441-71944803');
content_52743043c1d897_53280323($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ads-four-square.tpl" */?>
			<?php }?>
		<?php }?>
	</div>
</div>
</section>

	<footer><form action="/contactmail.php" method="GET">
		<div class="wrapper">
			<div class="grid">
				<div class="g3">
					<h3 class="padded"><?php echo l('navigation');?>
</h3>
					<ul>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
">Homepage</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
spaces"><?php echo l('spaces');?>
</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
homes"><?php echo l('homes');?>
</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
<?php echo p('hierarchy');?>
pros"><?php echo l('professionals');?>
</a></li>
					</ul>
				</div>
				<div class="g4">
					<h3 class="padded"><?php echo l('my account');?>
</h3>
					<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?><div class="account-box">
						<span style="float:right;margin:-0.4em;"><img src="http://gravatar.com/avatar/<?php echo md5(u('email'));?>
?s=40&d=mm"></span>
						<strong>Logged in as <span><?php echo u('display_name');?>
</span></strong><br/>
						<a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
account">Go to Dashboard</a> | <a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
account/logout">Log out</a>
					</div><?php }else{ ?><ul>
						<li class="lifloat"><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
account/login"><?php echo l('log in');?>
</a></li>
						<li class="lifloat">- or -</li>
						<li class="lishift"><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
account/register"><?php echo l('register');?>
</a></li>
					</ul><?php }?>
				</div>
				<div class="g5 ticker">
					<?php if ((s('footerticker'))==1){?><h3 class="padded"><kbd>234</kbd> Communities</h3>
					<h3><kbd>3,442</kbd> Spaces</h3>
					<h3><kbd>453</kbd> Homes</h3>
					<h3><kbd>1,203</kbd> Professionals</h3><?php }?>
				</div>
				<div class="clearfix"></div>
				<div class="g3"><hr><h3>Company</h3>
					<ul>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
news">News</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
about">About Us</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
contact">Contact</a></li>
					</ul>
				</div>
				<div class="g3"><hr><h3>Legal</h3>
					<ul>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
privacy">Privacy Policy</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
legal">Terms of Use</a></li>
					</ul>
				</div>
				<div class="g3"><hr><h3>Community</h3>
					<ul>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
ideas">Ideas and Suggestions</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
discuss">Discussions</a></li>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['langprefix']->value;?>
connected">Connected</a></li>
					</ul>
				</div>
				<div class="g3"><hr><h3>&middot; &middot; &middot;</h3><p><small><?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['credit']){?><span style="font-style:italic;">Background image by <?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']&&!$_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy']){?><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['link'];?>
" target="_blank" rel="noindex,nofollow"><?php }?><?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['credit'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']&&!$_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy']){?></a><?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy']){?><br>Courtesy of <?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']){?><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['link'];?>
" target="_blank" rel="noindex,nofollow"><?php }?><?php echo $_smarty_tpl->tpl_vars['page']->value['canvas']['courtesy'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['link']){?></a><?php }?><?php }?>.</span><br><?php }?><?php echo l('copyright');?>
 &copy; <?php echo $_smarty_tpl->tpl_vars['yr']->value;?>
 <?php echo s('author');?>
.<br><?php echo l('allrightsreserved');?>
.</small></p></div>
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
</script><?php }?><script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>  
</body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-11-01 17:50:43
         compiled from "./incl/xhtml/ads-four-square.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52743043c1d897_53280323')) {function content_52743043c1d897_53280323($_smarty_tpl) {?><section id="business-tiles"><?php if ($_smarty_tpl->tpl_vars['page']->value['pragpage']=="state"){?><?php if ((s('usemetros'))==1&&$_smarty_tpl->tpl_vars['page']->value['metrocount']!=0){?><a name="area" id="area_a"></a><?php }else{ ?><a name="counties" id="counties_a"></a><?php }?><?php }?>
<header<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['blacknotices']==1){?> class="black"<?php }?>>Sponsored Advertisements</header>
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][0]['id']==0){?><div id="advert-a"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-a"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['image'];?>
" width="0" height="0"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['hover'];?>
" width="0" height="0"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][0]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][1]['id']==0){?><div id="advert-b"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-b"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['image'];?>
" width="0" height="0"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['hover'];?>
" width="0" height="0"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][1]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][2]['id']==0){?><div id="advert-c"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-c"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['image'];?>
" width="0" height="0"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['hover'];?>
" width="0" height="0"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][2]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][3]['id']==0){?><div id="advert-d"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-d"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['image'];?>
" width="0" height="0"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['hover'];?>
" width="0" height="0"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][3]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?>
</section>
<style type="text/css">
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][0]['id']!=0){?>
#advert-a a {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['image'];?>
) center center no-repeat;
}
#advert-a a:hover {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['hover'];?>
) center center no-repeat;
}<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][1]['id']!=0){?>
#advert-b a {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['image'];?>
) center center no-repeat;
}
#advert-b a:hover {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['hover'];?>
) center center no-repeat;
}<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][2]['id']!=0){?>
#advert-c a {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['image'];?>
) center center no-repeat;
}
#advert-c a:hover {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['hover'];?>
) center center no-repeat;
}<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][3]['id']!=0){?>
#advert-d a {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['image'];?>
) center center no-repeat;
}
#advert-d a:hover {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['hover'];?>
) center center no-repeat;
}<?php }?>
</style><?php }} ?>