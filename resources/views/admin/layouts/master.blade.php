@extends('admin.layouts.boilerplate')

@section('body')
    <div id="wrap">
      <div id="top">

        <!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <header class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
              </button>
              <div class="topnav visible-xs">
                <div class="btn-group">
                  <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm hidden" id="toggleFullScreen">
                    <i class="glyphicon glyphicon-fullscreen"></i>
                  </a> 
                </div>
                <div class="btn-group">
                  <a href="{{ URL::route('admin-messages') }}" data-placement="bottom" data-original-title="Messages" data-toggle="tooltip" class="btn btn-default btn-sm">
                    <i class="fa fa-envelope"></i>
                    <span class="label label-warning">5</span> 
                  </a> 
                  <a href="{{ URL::route('admin-reports') }}" data-placement="bottom" data-original-title="Bug Reports" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                    <i class="fa fa-comments"></i>
                    <span class="label label-danger">4</span> 
                  </a>
                  <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip" class="btn btn-default btn-sm toggle-right"> <span class="fa fa-tasks"></span>  </a> 
                </div>
                <div class="btn-group">
                  <a href="{{ URL::route('welcome') }}" class="btn btn-metis-6 btn-sm" target="_blank">
                    Site
                  </a> 
                </div>
                <div class="btn-group">
                  <a href="{{ URL::route('account-logout') }}" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                    <i class="fa fa-power-off"></i>
                  </a> 
                </div>
              </div>
              <a href="{{ URL::route('admin-welcome') }}" class="navbar-brand">
                <img src="{{ URL::route('welcome') }}/img/logo-2014-mini.png" alt="">
              </a> 
            </header>
            <div class="topnav hidden-xs">
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm hidden" id="toggleFullScreen">
                  <i class="glyphicon glyphicon-fullscreen"></i>
                </a> 
              </div>
              <div class="btn-group">
                <a href="{{ URL::route('admin-messages') }}" data-placement="bottom" data-original-title="Messages" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-envelope"></i>
                  <span class="label label-warning">5</span> 
                </a> 
                <a href="{{ URL::route('admin-reports') }}" data-placement="bottom" data-original-title="Bug Reports" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-comments"></i>
                  <span class="label label-danger">4</span> 
                </a>
              </div>
              <div class="btn-group">
                <a href="{{ URL::route('welcome') }}" class="btn btn-metis-6 btn-sm" target="_blank">
                  View site
                </a> 
              </div>
              <div class="btn-group">
                <a href="{{ URL::route('account-logout') }}" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                  <i class="fa fa-power-off"></i> Logout
                </a> 
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip" class="btn btn-default btn-sm toggle-left" id="menu-toggle">
                  <i class="fa fa-bars"></i>
                </a> 
                <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip" class="btn btn-default btn-sm toggle-right"> <span class="fa fa-tasks"></span>  </a> 
              </div>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

              <!-- .nav -->
              <ul class="nav navbar-nav">
                <li> <a href="{{ URL::route('admin-welcome') }}">Dashboard</a>  </li>
                <li class='dropdown '>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Browse
                    <b class="caret"></b>
                  </a> 
                  <ul class="dropdown-menu">
                    <li> <a href="{{ URL::route('admin-browse-users') }}">Users</a>  </li>
                    <li> <a href="{{ URL::route('admin-browse-profiles') }}">Profiles</a>  </li>
                    <li> <a href="{{ URL::route('admin-browse-companies') }}">Companies</a>  </li>
                  </ul>
                </li>
                <li>
                	<a href="{{ URL::route('admin-moderation') }}">
                		Moderation 
                		<span class="label label-danger">20</span>
                	</a>
            	</li>
              </ul><!-- /.nav -->
            </div>
          </div><!-- /.container-fluid -->
        </nav><!-- /.navbar -->
        <header class="head">
          <div class="search-bar hidden-xs">
            <form class="main-search" action="">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Live Search ...">
                <span class="input-group-btn">
            <button class="btn btn-primary btn-sm text-muted" type="button">
                <i class="fa fa-search"></i>
            </button>
        </span> 
              </div>
            </form><!-- /.main-search -->
          </div><!-- /.search-bar -->
          <div class="main-bar">
            <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip" class="btn btn-default btn-sm toggle-left pull-left visible-xs" id="menu-toggle">
                    <i class="fa fa-bars"></i>
                  </a>
            <h3>
              {{ $title }}</h3>
          </div><!-- /.main-bar -->
        </header><!-- /.head -->
      </div><!-- /#top -->
      <div id="left">
        <div class="media user-media">
          <div class="user-media-toggleHover">
            <img src="{{ $user->gravatar(64) }}" class="img-responsive">
          </div>
          <div class="user-wrapper">
            <a class="user-link" href="">
              <img class="media-object img-thumbnail user-img" alt="User Picture" src="{{ $user->gravatar(64) }}"> 
            </a> 
            <div class="media-body">
              <h5 class="media-heading">{{ ($user->first_name == '' || $user->last_name == '') ? $user->username : $user->first_name. ' ' . $user->last_name }}</h5>
              <ul class="list-unstyled user-info">
                <li>
                  <small>
                  Last Access:
                  <br>
                    <i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small> 
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- #menu -->
        <ul id="menu" class="">
          <li class="nav-header">{{ $menutitle ?? $title.' Menu' }}</li>
          <li class="nav-divider"></li>
          @yield('sidemenu')
        </ul><!-- /#menu -->
      </div><!-- /#left -->
      <div id="content">
        <div class="outer">
          <div class="inner">
            @yield('content')
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
      <div id="right">
        <!-- .well well-small -->
        <h3>Quick stats</h3>
        <div class="well well-small dark">
          <ul class="list-unstyled">
            <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span> 
            </li>
            <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span> 
            </li>
            <li>Popularity <span class="dynamicbar pull-right">Loading..</span> 
            </li>
            <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span> 
            </li>
          </ul>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <span>Default</span> <span class="pull-right"><small>20%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-info" style="width: 20%"></div>
          </div>
          <span>Success</span> <span class="pull-right"><small>40%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-success" style="width: 40%"></div>
          </div>
          <span>warning</span> <span class="pull-right"><small>60%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
          </div>
          <span>Danger</span> <span class="pull-right"><small>80%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
          </div>
        </div>
      </div><!-- /#right -->
    </div><!-- /#wrap -->
    <footer id="footer">
      <p class="text-muted">Copyright &copy; {{ date('Y') }} Mobile Home Spaces Across America. All rights reserved.</p>
    </footer><!-- /#footer -->
@stop