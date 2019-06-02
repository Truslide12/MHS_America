@extends('layouts.master')
@fix-navbar
@show-navbar-divider

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/widgets.css">
@stop

@section('content')
<div class="row white">
	<div class="col-md-12">
		<span class="pull-right push-down">
			<a href="{{ URL::route('account-settings') }}" class="btn btn-default">Account Settings</a> <a href="{{ URL::route('account-logout') }}" class="btn btn-default">Sign out</a>
		</span>
		<h1>Dashboard&nbsp;&nbsp;&nbsp;<p class="visible-xs"></p><small><img src="{{ $user->gravatar(25) }}" class="img-thumbnail image-user-tiny"> {{ ($user->first_name =='' || $user->last_name == '') ? $user->username : $user->first_name . ' ' . $user->last_name }}</small></h1>
		<hr>
	</div>
</div>
<div class="row white">
	<div class="col-sm-3 hidden-xs">
		<ul class="list-group margin-b">
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account') }}">Dashboard Home</a></h4>
			</li>
			@if($user->business == 1)
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-business') }}">Business Center</a></h4>
			</li>
			@endif
		</ul>
		@if($user->business != 1 && 1==2)
		<h3>What to do next...</h3>
		<ul class="list-group">
			<li class="list-group-item list-item-info">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-business') }}">Activate business features</a></h4>
				<p class="list-group-item-text">
					If you're going to be managing profiles or listings, you'll need to activate this functionality.
				</p>
			</li>
		</ul>
		@endif
		<h4>My watchlists</h4>
		<ul class="list-group">
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-communities') }}">Communities</a></h4>
			</li>
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-homes') }}">Homes</a></h4>
			</li>
			<li class="list-group-item active">
				<h4 class="list-group-item-heading">Spaces</h4>
			</li>
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-professionals') }}">Professionals</a></h4>
			</li>
			@if(1==2)<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-companies') }}">Companies</a></h4>
			</li>@endif
		</ul>
	</div>
	<div class="col-sm-9">
		<a href="{{ URL::route('account') }}" class="btn btn-default pull-right visible-xs">Back</a>
		<h3 class="no-margin-t">Watched Spaces</h3>
	@if(count($spaces) > 0)
		<div class="row watch-space-all-unwatch-remove">
		@foreach($spaces as $space)
		<div class="col-md-6 watch-space-unwatch-remove watch-space-{{ $space->id }}-unwatch-remove">
				@include('layouts.partial.space-block')
		</div>
		@endforeach
		</div>
	@endif
		<div class="panel panel-default watch-space-no-results @if(count($spaces) > 0)hidden @endif">
			<div class="panel-body">
				<h4>
					<em>You haven't added any spaces to your watchlist.</em>
				</h4>
			</div>
		</div>
	</div>
</div>
@stop

@section('incls-body')
<script type="text/javascript" src="/js/mhs.interface.js"></script>
@stop