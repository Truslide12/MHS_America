<?php /* Smarty version Smarty-3.1.8, created on 2013-11-30 19:34:37
         compiled from "./incl/xhtml/default/admin/master_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1487998738529a3dcdc8ad09-35783640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cda93d617f4ee7a83f3e72d2602054dd9b3e86a7' => 
    array (
      0 => './incl/xhtml/default/admin/master_login.tpl',
      1 => 1383973894,
      2 => 'file',
    ),
    '1149c59eac59034e9b3cafe1fa6d85e7e372593d' => 
    array (
      0 => './incl/xhtml/default/admin/master.tpl',
      1 => 1383863707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1487998738529a3dcdc8ad09-35783640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isUserLoggedIn' => 0,
    'admintitle' => 1,
    'page' => 1,
    'lib' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_529a3dcde73f87_76261744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529a3dcde73f87_76261744')) {function content_529a3dcde73f87_76261744($_smarty_tpl) {?><!DOCTYPE html>
<html<?php if (!$_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?> class="login-bg"<?php }?>>
<head>
	<title><?php if ((p('title'))){?><?php echo p('title');?>
 :: <?php }?><?php echo $_smarty_tpl->tpl_vars['admintitle']->value;?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- bootstrap -->
    <link href="/detail/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/detail/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries --><?php  $_smarty_tpl->tpl_vars['lib'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lib']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['libraries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lib']->key => $_smarty_tpl->tpl_vars['lib']->value){
$_smarty_tpl->tpl_vars['lib']->_loop = true;
?>
	<link rel="stylesheet" type="text/css" href="/detail/css/lib/<?php echo $_smarty_tpl->tpl_vars['lib']->value;?>
.css"><?php } ?>

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/detail/css/compiled/layout.css">
    <link rel="stylesheet" type="text/css" href="/detail/css/compiled/elements.css">
    <link rel="stylesheet" type="text/css" href="/detail/css/compiled/icons.css">
	<?php if ($_smarty_tpl->tpl_vars['page']->value['stylesheet']){?>
    <!-- this page specific styles -->
    <link rel="stylesheet" href="/detail/css/compiled/<?php echo $_smarty_tpl->tpl_vars['page']->value['stylesheet'];?>
.css" type="text/css" media="screen">
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?><link rel="stylesheet" type="text/css" href="/detail/css/compiled/skins/dark.css">
	<link rel="stylesheet" type="text/css" href="/_/css/global.css"><?php }?>

	<!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<style type="text/css"> .login-bg  .alert-danger {width:400px;margin:-2em auto 2em;} </style>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

    <div class="login-wrapper">
        <img class="logo" src="/_/images/elias/mhs-header-logo-solid-2.png">
		<?php  $_smarty_tpl->tpl_vars['err'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['err']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['err']->key => $_smarty_tpl->tpl_vars['err']->value){
$_smarty_tpl->tpl_vars['err']->_loop = true;
?><div class="alert alert-danger">
			<i class="icon-remove-sign"></i>
			<?php echo $_smarty_tpl->tpl_vars['err']->value;?>

		</div><?php } ?>
        <div class="box">
            <div class="content-wrap">
                <h6>Log in</h6><form action="/account/login" method="POST">
				<input type="hidden" name="rqst" value="global">
                <input class="form-control" type="text" name="username" placeholder="Username">
                <input class="form-control" type="password" name="password" placeholder="Your password">
                <?php if (1==2){?><a href="#" class="forgot">Forgot password?</a><?php }?>
                <div class="remember">
                    <input id="remember-me" type="checkbox">
                    <label for="remember-me">Remember me</label>
                </div>
                <button type="submit" class="btn-glow primary login">Log in</button>
				</form>
            </div>
        </div>

        <div class="no-account" style="display:none;">
            <p>Don't have an account?</p>
            <a href="signup.html">Sign up</a>
        </div>
    </div>

	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="/detail/js/bootstrap.min.js"></script>
    <script src="/detail/js/theme.js"></script>

</body>
</html><?php }} ?>