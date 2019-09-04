@extends('layouts.boilerplate')

@section('body')
<a name="top" id="top-anchor"></a>
@yield('content-canvas')
@if(isset($canvas) && is_object($canvas) && 1==2)
<div id="canvas-wrapper">
<div class="container-fluid">
	<img src="{{ URL::route('welcome') }}/img/backdrops/{{ $canvas->file ?? '' }}" id="pagecanvas" class="img-fill hidden-xs">
</div>
</div>
@endif
@if(!isset($noheader))
@include('layouts.partial.header')
@endif
@yield('content-above')

<div class="container content {{ $contentclass ?? '' }}">
	@when-navbar-static
		@if(isset($show_navbar_divider))
		<div class="row divider blue hidden-xs"></div>
		@endif
	@endif
	@yield('content')
</div>

@yield('content-below')

@if(!isset($nofooter))
<div class="clearfix" id="footer-wrapper">
<div class="container">
	<div class="row flexrow clearfix">
		@if(isset($use_slim_footer))
		<div class="col-sm-12 column">
			@if(Route::currentRouteNamed('search*'))
			<div class="footmodes" style="background: none;width: 100%;">
				<a class="btn btn-default mode0" data-action="mode" data-mode="0" style="float:right;width:calc(30vw - 4px);height:auto;"><i class="fas fa-users"></i><br> Communities</a>
				<a class="btn btn-default mode1" data-action="mode" data-mode="1" style="float:right;width:calc(30vw - 4px);height:auto;"><i class="fas fa-home"></i><br> Homes</a>
				<a class="btn btn-default mode2" data-action="mode" data-mode="2" style="float:right;width:calc(30vw - 4px);height:auto;"><i class="fas fa-sign"></i><br> Spaces</a>
			</div>
			<p class="text-muted text-center searchcopy">
				<small>Copyright &copy; {{ date('Y') }} MHS America. All rights reserved.</small>
			</p>
			@else
			<p class="text-muted text-center">
				<small>Copyright &copy; {{ date('Y') }} MHS America. All rights reserved.</small>
			</p>
			@endif
		</div>
		@else
		<div class="col-sm-4 col-md-2 column hidden-xs">
			<ul class="list-unstyled list-menu">
				<li>
					<a href="{{ URL::route('page', array('slug' => 'about')) }}">About MHS</a>
				</li>
				<li>
					<a href="{{ URL::route('page', array('slug' => 'contact')) }}">Contact</a>
				</li>
				<li>
					<a href="{{ URL::route('page', array('slug' => 'privacy')) }}">Privacy Policy</a>
				</li>
				<li>
					<a href="{{ URL::route('page', array('slug' => 'terms')) }}">Terms of Use</a>
				</li>
			</ul>
		</div>
		<div class="col-sm-8 col-md-6 column">
			<div class="row flexrow">
				<div class="col-sm-3" id="footerAvatarContainer">
					<img src="{!! Auth::check() ? $user->gravatar(100) : '//www.gravatar.com/avatar/?s=100&amp;f=y&amp;d=mm' !!}" class="img-responsive img-thumbnail pull-right" id="footerAvatar">
				</div>
				<div class="col-xs-12 col-sm-9">
					@if(Auth::check())
					<p class="lead">{{ ($user->first_name =='' || $user->last_name == '') ? $user->username : $user->first_name . ' ' . $user->last_name }}</p>
					<p>
						<a href="{{ URL::route('account') }}">Dashboard</a> - 
						@if($user->business == 1)
						<a href="{{ URL::route('account-business') }}">Business Center</a> - 
						@endif
						<a href="{{ URL::route('account-logout') }}">Logout</a>
					</p>
					@else
					<p>
						<a href="{{ URL::route('account-login') }}">Login</a> - 
						<a href="{{ URL::route('account-register') }}">Register</a>
					</p>
					@endif
				</div>
			</div>
		</div>
		<div class="col-sm-8 col-md-4 column">
					<p class="text-muted">
						<p class="visible-sm">&nbsp;</p>
						<small>Copyright &copy; {{ date('Y') }} Mobile Home Spaces Across America. All rights reserved.<br>
							<span class="visible-xs">
								<a href="{{ URL::route('page', ['slug' => 'privacy']) }}">Privacy Policy</a> | <a href="{{ URL::route('page', ['slug' => 'terms']) }}">Terms of Use</a>
							</span>
						</small>
					</p>
			<img src="{{ URL::route('welcome') }}/img/equal-housing-opportunity-logo-png-13.png" 
			style="margin:auto auto;max-width: 60px;margin-bottom: 0;margin-right: 0;">
		</div>
		@endif
	</div>
</div>
<div class="clearfix"></div>
</div>
@endif

@stop