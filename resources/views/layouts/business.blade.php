@extends('layouts.master')
@fix-navbar
@show-navbar-divider

@section('content')
<div class="row white">
	<div class="col-md-12">
		<span class="hidden-xs pull-right push-down">
			@if(Route::currentRouteNamed('account-business'))
			<a href="{{ URL::route('account') }}" class="btn btn-default">Personal Dashboard</a>
			@else
			<a href="{{ URL::route('account-business') }}" class="btn btn-default">Back to Business Center</a>
			@endif
			 @if(!isset($hide_sign_out))
			 <a href="{{ URL::route('account-logout') }}" class="btn btn-default">Sign out</a>
			 @endif
		</span>
		<h1>
			@yield('heading')
		</h1>
		<hr>
	</div>
</div>
@yield('businesscontent')
<div class="clearfix"></div>
@stop