<?php /* Smarty version Smarty-3.1.8, created on 2013-11-23 17:21:51
         compiled from "./incl/xhtml/default/admin/users-view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5575391195291388fa05342-16110673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '030ff97374606789b3dccb0f24d54ff6d573248e' => 
    array (
      0 => './incl/xhtml/default/admin/users-view.tpl',
      1 => 1385245260,
      2 => 'file',
    ),
    '92d671474e9346b8f1f9af96445809ebcedcdb4a' => 
    array (
      0 => './incl/xhtml/default/admin/master_full.tpl',
      1 => 1385086998,
      2 => 'file',
    ),
    '1149c59eac59034e9b3cafe1fa6d85e7e372593d' => 
    array (
      0 => './incl/xhtml/default/admin/master.tpl',
      1 => 1383863707,
      2 => 'file',
    ),
    'f08caaaed570976f7493b4bef88c6f924adcdaf4' => 
    array (
      0 => './incl/xhtml/default/admin/misc-arrow-pointer.tpl',
      1 => 1383978862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5575391195291388fa05342-16110673',
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
  'unifunc' => 'content_529138901db562_00329083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529138901db562_00329083')) {function content_529138901db562_00329083($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/spaces/public_html/core/incl/classes/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_capitalize')) include '/home/spaces/public_html/core/incl/classes/plugins/modifier.capitalize.php';
?><!DOCTYPE html>
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
            <li<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=="welcome"){?> class="active"<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page']=="welcome"){?><?php /*  Call merged included template "misc-arrow-pointer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("misc-arrow-pointer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5575391195291388fa05342-16110673');
content_5291388fdeb786_99158451($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "misc-arrow-pointer.tpl" */?><?php }?>
                <a href="/welcome">
                    <i class="icon-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=="users"){?> class="active"<?php }?>>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=="users"){?><?php /*  Call merged included template "misc-arrow-pointer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("misc-arrow-pointer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5575391195291388fa05342-16110673');
content_5291388fdeb786_99158451($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "misc-arrow-pointer.tpl" */?><?php }?>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>Users</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=="users"){?>active <?php }?>submenu">
                    <li><a href="/users"<?php if ($_smarty_tpl->tpl_vars['page']->value['command']=="list"){?> class="active"<?php }?>>Browse users</a></li>
                    <li><a href="/users/new"<?php if ($_smarty_tpl->tpl_vars['page']->value['command']=="new"){?> class="active"<?php }?>>New user</a></li>
                </ul>
            </li>
			<li<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=="orders"){?> class="active"<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page']=="orders"){?><?php /*  Call merged included template "misc-arrow-pointer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("misc-arrow-pointer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5575391195291388fa05342-16110673');
content_5291388fdeb786_99158451($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "misc-arrow-pointer.tpl" */?><?php }?>
                <a href="/orders">
                    <i class="icon-shopping-cart"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=="configuration"){?> class="active"<?php }?>>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=="configuration"){?><?php /*  Call merged included template "misc-arrow-pointer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("misc-arrow-pointer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5575391195291388fa05342-16110673');
content_5291388fdeb786_99158451($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "misc-arrow-pointer.tpl" */?><?php }?>
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

<div id="pad-wrapper" class="user-profile">
            <!-- header -->
            <div class="row header">
                <div class="col-md-8">
                    <img src="<?php echo get_gravatar($_smarty_tpl->tpl_vars['profile']->value['email'],74);?>
&d=mm" class="avatar img-circle">
                    <h3 class="name"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['profile']->value['display_name']);?>
</h3>
                    <span class="area"><?php echo $_smarty_tpl->tpl_vars['profile']->value['title'];?>
</span>
                </div>
                <a class="btn-flat icon pull-right delete-user" data-toggle="tooltip" title="Delete user" data-placement="top">
                    <i class="icon-trash"></i>
                </a>
                 <a class="btn-flat icon large pull-right edit">
                    Edit user
                </a>
            </div>

            <div class="row profile">
                <!-- bio, new note & orders column -->
                <div class="col-md-9 bio">
                    <div class="profile-box">
                        <!-- biography -->
                        <div class="col-md-12 section">
                            <h6>Biography</h6>
                            <p>There are many variations of passages of Lorem Ipsum available but the majority have humour suffered alteration in believable some formhumour , by injected humour, or randomised words which don't look even slightly believable. </p>
                        </div>

                        <h6>Recent orders</h6>
                        <br>
                        <!-- recent orders table -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="col-md-2">
                                        Order ID
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Date
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Items
                                    </th>
                                    <th class="col-md-3">
                                        <span class="line"></span>
                                        Total amount
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row -->
                                <tr class="first">
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Jan 03, 2013
                                    </td>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        $ 3,500.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">#510</a>
                                    </td>
                                    <td>
                                        Feb 22, 2013
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        $ 800.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">#618</a>
                                    </td>
                                    <td>
                                        Jan 03, 2013
                                    </td>
                                    <td>
                                        8
                                    </td>
                                    <td>
                                        $ 3,499.99
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- new comment form -->
                        <div class="col-md-12 section comment">
                            <h6>Add a quick note</h6>
                            <p>Add a note about this user to keep a history of your interactions.</p>
                            <textarea></textarea>
                            <a href="#">Attach files</a>
                            <div class="col-md-12 submit-box pull-right">
                                <input type="submit" class="btn-glow primary" value="Add Note">
                                <span>OR</span>
                                <input type="reset" value="Cancel" class="reset">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- side address column -->
                <div class="col-md-3 col-xs-12 address pull-right">
                    <h6>Address</h6>
                    <iframe width="300" height="133" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/?ie=UTF8&amp;t=m&amp;ll=19.715081,-155.071421&amp;spn=0.010746,0.025749&amp;z=14&amp;output=embed"></iframe>
                    <ul>
                        <li><?php echo $_smarty_tpl->tpl_vars['profile']->value['address'];?>
</li>
                        <li><?php echo $_smarty_tpl->tpl_vars['profile']->value['city_info']['title'];?>
, <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['profile']->value['state_info']['abbr'], 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['zipcode'];?>
</li>
                        <li class="ico-li">
                            <i class="ico-phone"></i>
                            <?php echo $_smarty_tpl->tpl_vars['profile']->value['phone'];?>

                        </li>
                         <li class="ico-li">
                            <i class="ico-mail"></i>
                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['profile']->value['email'];?>
</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>


	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="/detail/js/bootstrap.min.js"></script>
    <script src="/detail/js/jquery-ui-1.10.2.custom.min.js"></script>
    <!-- knob -->
    <script src="/detail/js/jquery.knob.js"></script>
	<!-- morris.js -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="/detail/js/morris.min.js"></script>
	    <!-- flot charts -->
    <script src="/detail/js/jquery.flot.js"></script>
    <script src="/detail/js/jquery.flot.stack.js"></script>
    <script src="/detail/js/jquery.flot.resize.js"></script>
    <script src="/detail/js/theme.js"></script>

    <script type="text/javascript">
        $(function () {

            // jQuery Flot Chart
            var signups = [[1, <?php echo $_smarty_tpl->tpl_vars['page']->value['signups_day_before_5'];?>
], [2, <?php echo $_smarty_tpl->tpl_vars['page']->value['signups_day_before_4'];?>
], [3, <?php echo $_smarty_tpl->tpl_vars['page']->value['signups_day_before_3'];?>
], [4, <?php echo $_smarty_tpl->tpl_vars['page']->value['signups_day_before_2'];?>
],[5, <?php echo $_smarty_tpl->tpl_vars['page']->value['signups_day_before_1'];?>
],[6, <?php echo $_smarty_tpl->tpl_vars['page']->value['signups_yesterday'];?>
],[7, <?php echo $_smarty_tpl->tpl_vars['page']->value['signups_today'];?>
]];
            var visitors = [[1, <?php echo $_smarty_tpl->tpl_vars['page']->value['visits_day_before_5'];?>
], [2, <?php echo $_smarty_tpl->tpl_vars['page']->value['visits_day_before_4'];?>
], [3, <?php echo $_smarty_tpl->tpl_vars['page']->value['visits_day_before_3'];?>
], [4, <?php echo $_smarty_tpl->tpl_vars['page']->value['visits_day_before_2'];?>
],[5, <?php echo $_smarty_tpl->tpl_vars['page']->value['visits_day_before_1'];?>
],[6, <?php echo $_smarty_tpl->tpl_vars['page']->value['visits_yesterday'];?>
],[7, <?php echo $_smarty_tpl->tpl_vars['page']->value['visits_today'];?>
]];

            var plot = $.plot($("#statsChart"),
                [ { data: signups, label: "Signups"},
                 { data: visitors, label: "Visits" }], {
                    series: {
                        lines: { show: true,
                                lineWidth: 1,
                                fill: true, 
                                fillColor: { colors: [ { opacity: 0.1 }, { opacity: 0.13 } ] }
                             },
                        points: { show: true, 
                                 lineWidth: 2,
                                 radius: 3
                             },
                        shadowSize: 0,
                        stack: true
                    },
                    grid: { hoverable: true, 
                           clickable: true, 
                           tickColor: "#f9f9f9",
                           borderWidth: 0
                        },
                    legend: {
                            // show: false
                            labelBoxBorderColor: "#fff"
                        },  
                    colors: ["#a7b5c5", "#30a0eb"],
                    xaxis: {
                        ticks: [[1, "<?php echo $_smarty_tpl->tpl_vars['page']->value['visits_day_before_5_label'];?>
"], [2, "<?php echo $_smarty_tpl->tpl_vars['page']->value['visits_day_before_4_label'];?>
"], [3, "<?php echo $_smarty_tpl->tpl_vars['page']->value['visits_day_before_3_label'];?>
"], [4,"<?php echo $_smarty_tpl->tpl_vars['page']->value['visits_day_before_2_label'];?>
"], [5,"<?php echo $_smarty_tpl->tpl_vars['page']->value['visits_day_before_1_label'];?>
"], [6,"Yesterday"], 
                               [7,"Today"]],
                        font: {
                            size: 12,
                            family: "Open Sans, Arial",
                            variant: "small-caps",
                            color: "#697695"
                        }
                    },
                    yaxis: {
                        ticks:3, 
                        tickDecimals: 0,
                        font: {size:12, color: "#9da3a9"}
                    }
                 });

            function showTooltip(x, y, contents) {
                $('<div id="tooltip">' + contents + '</div>').css( {
                    position: 'absolute',
                    display: 'none',
                    top: y - 30,
                    left: x - 50,
                    color: "#fff",
                    padding: '2px 5px',
                    'border-radius': '6px',
                    'background-color': '#000',
                    opacity: 0.80
                }).appendTo("body").fadeIn(200);
            }

            var previousPoint = null;
            $("#statsChart").bind("plothover", function (event, pos, item) {
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(0),
                            y = item.datapoint[1].toFixed(0);

                        var day = item.series.xaxis.ticks[item.dataIndex].label;

                        showTooltip(item.pageX, item.pageY,
                                    item.series.label + " on " + day + ": " + y);
					}
				}
				else {
					$("#tooltip").remove();
					previousPoint = null;
				}
			});
			
			// Morris Donut Chart
			Morris.Donut({
				element: 'hero-donut',
				data: [
					<?php  $_smarty_tpl->tpl_vars['origin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['origin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['visits_origin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['origin']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['origin']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['origin']->key => $_smarty_tpl->tpl_vars['origin']->value){
$_smarty_tpl->tpl_vars['origin']->_loop = true;
 $_smarty_tpl->tpl_vars['origin']->iteration++;
 $_smarty_tpl->tpl_vars['origin']->last = $_smarty_tpl->tpl_vars['origin']->iteration === $_smarty_tpl->tpl_vars['origin']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['origins']['last'] = $_smarty_tpl->tpl_vars['origin']->last;
?><?php if ($_smarty_tpl->tpl_vars['origin']->value['label']){?>
					{ label: '<?php echo $_smarty_tpl->tpl_vars['origin']->value['label'];?>
', value: <?php echo $_smarty_tpl->tpl_vars['origin']->value['visits'];?>
 }<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['origins']['last']!=true){?>,<?php }?>
					<?php }?><?php } ?>
				],
				colors: ["#30a1ec", "#76bdee", "#c4dafe"],
				formatter: function (y) { return y + "%" }
			});
			
        });
    </script>

</body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-11-23 17:21:51
         compiled from "./incl/xhtml/default/admin/misc-arrow-pointer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5291388fdeb786_99158451')) {function content_5291388fdeb786_99158451($_smarty_tpl) {?><div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div><?php }} ?>