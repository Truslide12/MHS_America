<?php /* Smarty version Smarty-3.1.8, created on 2013-12-14 22:21:48
         compiled from "./incl/xhtml/default/admin/configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81323904752ad2e5c189127-88785969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed6c4a979a2212f02d258c019a45a77ebac7a397' => 
    array (
      0 => './incl/xhtml/default/admin/configuration.tpl',
      1 => 1385441207,
      2 => 'file',
    ),
    '92d671474e9346b8f1f9af96445809ebcedcdb4a' => 
    array (
      0 => './incl/xhtml/default/admin/master_full.tpl',
      1 => 1385845792,
      2 => 'file',
    ),
    '1149c59eac59034e9b3cafe1fa6d85e7e372593d' => 
    array (
      0 => './incl/xhtml/default/admin/master.tpl',
      1 => 1383863707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81323904752ad2e5c189127-88785969',
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
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52ad2e5c7af0b6_52272213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ad2e5c7af0b6_52272213')) {function content_52ad2e5c7af0b6_52272213($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/spaces/public_html/core/incl/classes/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html<?php if (!$_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?> class="login-bg"<?php }?>>
<head>
	<title><?php if ((p('title'))){?><?php echo p('title');?>
 :: <?php }?><?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->tpl_vars[\'admintitle\']->value;?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- bootstrap -->
    <link href="/detail/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/detail/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries --><?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php  $_smarty_tpl->tpl_vars[\'lib\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'lib\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'libraries\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'lib\']->key => $_smarty_tpl->tpl_vars[\'lib\']->value){
$_smarty_tpl->tpl_vars[\'lib\']->_loop = true;
?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>

	<link rel="stylesheet" type="text/css" href="/detail/css/lib/<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->tpl_vars[\'lib\']->value;?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
.css"><?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php } ?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>


    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/detail/css/compiled/layout.css">
    <link rel="stylesheet" type="text/css" href="/detail/css/compiled/elements.css">
    <link rel="stylesheet" type="text/css" href="/detail/css/compiled/icons.css">
	<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'stylesheet\']){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>

    <!-- this page specific styles -->
    <link rel="stylesheet" href="/detail/css/compiled/<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value[\'stylesheet\'];?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
.css" type="text/css" media="screen">
	<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>

	<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value){?><link rel="stylesheet" type="text/css" href="/detail/css/compiled/skins/dark.css">
	<link rel="stylesheet" type="text/css" href="/_/css/global.css"><?php }?>

    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- lato font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<?php if ((u('user_name'))=="keystroke"){?>
	<link rel="stylesheet" href="/_/css/keystroke.css" type="text/css">
	<?php }?>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

    <!-- navbar -->
    <header class="navbar navbar-inverse" role="banner">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" id="menu-toggler">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/_/images/elias/mhs-header-logo-solid-2.png" height="21"></a>
        </div>
        <ul class="nav navbar-nav pull-right hidden-xs">
            <li class="hidden-xs hidden-sm">
                <input class="search" type="text" />
            </li>
            <li class="notification-dropdown hidden-xs hidden-sm removed-element">
                <a href="#" class="trigger">
                    <i class="icon-warning-sign"></i>
                    <span class="count">8</span>
                </a>
                <div class="pop-dialog">
                    <div class="pointer right">
                        <div class="arrow"></div>
                        <div class="arrow_border"></div>
                    </div>
                    <div class="body">
                        <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                        <div class="notifications">
                            <h3>You have 6 new notifications</h3>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 13 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 18 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-envelope-alt"></i> New message from Alejandra
                                <span class="time"><i class="icon-time"></i> 28 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 49 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-download-alt"></i> New order placed
                                <span class="time"><i class="icon-time"></i> 1 day.</span>
                            </a>
                            <div class="footer">
                                <a href="#" class="logout">View all notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="notification-dropdown hidden-xs hidden-sm">
                <a href="#" class="trigger">
                    <i class="icon-envelope"></i>
                </a>
                <div class="pop-dialog">
                    <div class="pointer right">
                        <div class="arrow"></div>
                        <div class="arrow_border"></div>
                    </div>
                    <div class="body">
                        <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                        <div class="messages">
                            <a href="#" class="item">
                                <img src="/detail/img/contact-img.png" class="display" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, but the majority have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 13 min.</span>
                            </a>
                            <a href="#" class="item">
                                <img src="/detail/img/contact-img2.png" class="display" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 26 min.</span>
                            </a>
                            <a href="#" class="item last">
                                <img src="/detail/img/contact-img.png" class="display" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, but the majority have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 48 min.</span>
                            </a>
                            <div class="footer">
                                <a href="#" class="logout">View all messages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle hidden-xs hidden-sm" data-toggle="dropdown">
                    <img src="<?php echo get_gravatar(u('email'),32);?>
&d=mm" class="nav-avatar"><?php echo u('display_name');?>

                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
					<li><a href="http://mhsamerica.com" target="_blank">View the site</a></li>
                    <li><a href="/account/settings">Account settings</a></li>
					<li class="divider"></li>
					<li><a href="/account/logout">Log out</a></li>
                </ul>
            </li>
            <li class="settings hidden-xs hidden-sm removed-element">
                <a href="/account/preferences" role="button">
                    <i class="icon-cog"></i>
                </a>
            </li>
            <li class="settings hidden-xs hidden-sm removed-element">
                <a href="/account/logout" role="button">
                    <i class="icon-share-alt"></i>
                </a>
            </li>
        </ul>
    </header>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'page\']=="welcome"){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
 class="active"<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
>
                <?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'page\']=="welcome"){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->getSubTemplate ("misc-arrow-pointer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>

                <a href="/welcome">
                    <i class="icon-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'page\']=="users"){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
 class="active"<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
>
				<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'page\']=="users"){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->getSubTemplate ("misc-arrow-pointer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>

                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>Users</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'page\']=="users"){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
active <?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
submenu">
                    <li><a href="/users"<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'command\']=="list"){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
 class="active"<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
>Browse users</a></li>
                    <li><a href="/users/new"<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'command\']=="new"){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
 class="active"<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
>New user</a></li>
                </ul>
            </li>
			<li<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'page\']=="orders"){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
 class="active"<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
>
                <?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'page\']=="orders"){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->getSubTemplate ("misc-arrow-pointer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>

                <a href="/orders">
                    <i class="icon-shopping-cart"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'page\']=="configuration"){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
 class="active"<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
>
				<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value[\'page\']=="configuration"){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->getSubTemplate ("misc-arrow-pointer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>

                <a href="/configuration">
                    <i class="icon-cog"></i>
                    <span>Site Settings</span>
                </a>
            </li>
        </ul>
		<?php if ((u('user_name'))=="keystroke"){?>
		<img src="/_/images/twilight-vector.png" style="margin-top:40px;">
		<?php }?>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">

		<form method="POST" action="/configuration">
		<div id="pad-wrapper" class="form-page">
			<div class="row header">
				<h3>Site Configuration</h3>
				<button type="submit" class="btn-flat success pull-right">
					<span class="icon-ok"></span>
					SAVE CHANGES
                </button>
			</div>
			<div class="row form-wrapper">
				<div class="col-md-8 column">
							<input type="hidden" name="submitted" value="true">
							<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php  $_smarty_tpl->tpl_vars[\'setting\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'setting\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'page\']->value[\'settings\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'setting\']->key => $_smarty_tpl->tpl_vars[\'setting\']->value){
$_smarty_tpl->tpl_vars[\'setting\']->_loop = true;
?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>

							<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'setting\']->value[\'name\']=="shutdown"){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>

							<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'setting\']->value[\'name\']=="domain"){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>

							<div class="field-box">
								<label><?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->tpl_vars[\'setting\']->value[\'title\'];?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
</label>
								<div class="col-md-7">
									<div class="predefined">
										<span class="value">http://</span>
										<input class="form-control inline-input" type="text" name="<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->tpl_vars[\'setting\']->value[\'name\'];?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
" value="<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->tpl_vars[\'setting\']->value[\'value\'];?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
">
									</div>
								</div>
							</div>
							<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'setting\']->value[\'type\']==0){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>

							<div class="field-box">
								<label><?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->tpl_vars[\'setting\']->value[\'title\'];?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
</label>
								<div class="col-md-7">
									<input class="form-control inline-input" type="text" name="<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->tpl_vars[\'setting\']->value[\'name\'];?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
" value="<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->tpl_vars[\'setting\']->value[\'value\'];?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
"<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'setting\']->value[\'readonly\']==1){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
 readonly="readonly"<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
>
								</div>                            
							</div>
							<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'setting\']->value[\'type\']==1){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>

							<div class="field-box">
								<label><?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->tpl_vars[\'setting\']->value[\'title\'];?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
</label>
								<div class="col-md-8">
									<label class="radio">
										<input type="radio" name="<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->tpl_vars[\'setting\']->value[\'name\'];?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
" id="<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->tpl_vars[\'setting\']->value[\'name\'];?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
1" value="1"<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'setting\']->value[\'value\']==1){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
 checked<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
>
										On
									</label>
									<label class="radio">
										<input type="radio" name="<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->tpl_vars[\'setting\']->value[\'name\'];?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
" id="<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php echo $_smarty_tpl->tpl_vars[\'setting\']->value[\'name\'];?>
/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
2" value="0"<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php if ($_smarty_tpl->tpl_vars[\'setting\']->value[\'value\']==0){?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
 checked<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>
>
										Off
									</label>
								</div>
							</div>
							<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php }?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>

							<?php echo '/*%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/<?php } ?>/*/%%SmartyNocache:81323904752ad2e5c189127-88785969%%*/';?>

					</div>
				</div>
		</div>
		</form>

    </div>


<script src="/detail/js/wysihtml5-0.3.0.js"></script>
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="/detail/js/bootstrap.min.js"></script>
    <script src="/detail/js/bootstrap.datepicker.js"></script>
    <script src="/detail/js/jquery.uniform.min.js"></script>
    <script src="/detail/js/select2.min.js"></script>
	<script src="/detail/js/theme.js"></script>
	<script type="text/javascript">
        $(function () {
            // add uniform plugin styles to html elements
            $("input:checkbox, input:radio").uniform();
            // select2 plugin for select elements
            $(".select2").select2({
                placeholder: "Select a State"
            });
            // 	datepicker plugin
            $('.input-datepicker').datepicker().on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });
        });
    </script>


</body>
</html><?php }} ?>