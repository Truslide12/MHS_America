<!DOCTYPE html>
<html lang="en">
<head>{* Twilight is best pony *}
	<title>{if ('title'|p)}{'title'|p} :: {/if}{$admintitle}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
	<link href="/_/css/global.css" rel="stylesheet" media="screen">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<header class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand">{$admintitle}</a>
		</div>
		<div class="navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Dashboard</a></li>
				<li><a href="#">Analytics</a></li>
				<li><a href="#">Users &amp; Profiles</a></li>
				<li><a href="#">Maintenance</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="http://www.gravatar.com/avatar/5346bb08332c326da043e8046be4fc70?s=32&d=mm" class="avatar"> Keystroke <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li class="dropdown-header full-size">Keystroke</li>
						<li class="dropdown-divider"></li>
						<li><a href="#">Preferences</a></li>
						<li class="divider"></li>
						<li><a href="#">Log out</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	</header>
	<div class="jumbotron">
	  <div class="container">
		<h1>Welcome!</h1>
		<p></p>
	  </div>
	</div>
	<div class="container" id="content">
		<h1>Users</h1>
		<div class="table-responsive">
		  <table class="table">
			<tr>
				<th>&nbsp;</th>
				<th>ID</th>
				<th>Username</th>
				<th>Name</th>
				<th>Email</th>
				<th>Status</th>
				<th>Actions</th>
			</tr>
			<tr>
				<td><input type="checkbox" name="sel[0]"></td>
				<td>1</td>
				<td>keystroke</td>
				<td>Keystroke</td>
				<td>kage@derpymail.com</td>
				<td><span class="label label-success">Admirable</span></td>
				<td>
					<div class="btn-group">
						<button type="button" class="btn btn-primary btn-xs">View</button>
						<div class="btn-group">
							<button type="button" class="btn btn-default btn-xs">Edit</button>
							<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
								<span class="sr-only">More options</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#" role="menuitem">Suspend</a></li>
								<li><a href="#" role="menuitem">Delete</a></li>
							</ul>
						</div>
					</div>
				</td>
			</tr>
		  </table>
		</div>
	</div>
	<footer>
	<div class="container">
		<small>Copyright &copy; {$page.year} MHS America{* and Kage :3 *}. All Rights Reserved.</small>
	</div>
	</footer>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>