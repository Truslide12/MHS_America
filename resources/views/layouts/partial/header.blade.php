<div id="header-wrapper" {{ $navbarclass or '' }}>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-collapse"> <span class="sr-only-dis">MENU</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
					 @if(!Route::currentRouteNamed('welcome'))
					 <a class="navbar-brand{{ (Request::is('developers*') || Request::is('page*')) ? ' active' : '' }}" href="{{ URL::route('welcome') }}">
					 	<img src="{{ URL::route('welcome') }}/img/logo-2014-mini.png" alt="MHS America">
					 </a>
					 @endif
				</div>
				
				<div class="navbar-collapse collapse" id="main-collapse" style="height: 0;">
					<ul class="nav navbar-nav hidden">
						<li @if(Request::is('explore*')) class="active"@endif>
							<a href="{{ URL::route('explore') }}">Explore</a>
						</li>
						<li class="divider hidden-xs hidden-sm"></li>
					</ul>
					@if(Request::is('search*'))
					<ul class="nav navbar-nav hidden-xs">
						<li data-action="mode" data-mode="1">
							<a style="cursor: pointer;" class="searchcolor1">Homes</a>
						</li>
						<li data-action="mode" data-mode="2">
							<a style="cursor: pointer;" class="searchcolor2">Spaces</a>
						</li>
						<li data-action="mode" data-mode="0">
							<a style="cursor: pointer;" class="searchcolor0">Communities</a>
						</li>
						<li class="divider hidden-xs hidden-sm hidden"></li>
					</ul>
					@endif
					@if(!Route::currentRouteNamed('welcome') && !Request::is('search*'))
					<ul class="nav navbar-nav hidden-xs">
						<li data-action="mode" data-mode="homes" @if(Request::is('homes*')) class="active"@endif>
							<a href="{{ URL::route('homes') }}">Homes</a>
						</li>
						<li data-action="mode" data-mode="spaces" @if(Request::is('spaces*')) class="active"@endif>
							<a href="{{ URL::route('spaces') }}">Spaces</a>
						</li>
						<li data-action="mode" data-mode="communities" @if(Request::is('communities*')) class="active"@endif>
							<a href="{{ URL::route('communities') }}">Communities</a>
						</li>
						<li class="divider hidden-xs hidden-sm hidden"></li>
					</ul>
					<ul class="nav navbar-nav hidden-xs">
						@if(1==2)<li @if(Request::is('pros*')) class="active"@endif>
							<a href="{{ URL::route('professionals') }}">Services</a>
						</li>
						<li @if(Request::is('network*')) class="active"@endif>
							<a href="{{ URL::route('professionals') }}">People</a>
						</li>@endif
					</ul>
					@endif
					@if( !Route::currentRouteNamed('account-login') && !Route::currentRouteNamed('account-register'))
					<ul class="nav navbar-nav navbar-right">
					@if(!Auth::guest())
						@include('layouts.partial.usermenu')
					@else
						@include('layouts.partial.guestmenu')
					@endif
					</ul>
					@endif
					<ul class="nav navbar-nav hidden-sm hidden-md hidden-lg">
						<li @if(Request::is('page/about*')) class="active"@endif>
							<a href="{{ URL::route('page', ['slug' => 'about']) }}">About MHS</a>
						</li>
						<li @if(Request::is('page/contact*')) class="active"@endif>
							<a href="{{ URL::route('page', ['slug' => 'contact']) }}">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	@yield('navbar-after')
	@if-navbar-fixed
		@if(isset($show_navbar_divider))
		<div class="row divider blue hidden-xs"></div>
		@endif
	@endif
</div>
</div>
