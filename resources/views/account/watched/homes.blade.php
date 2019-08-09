@extends('layouts.master')
@fix-navbar
@use-navbar-divider

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

		@include("account.menu")
		
	</div>
	<div class="col-sm-9">
		<a href="{{ URL::route('account') }}" class="btn btn-default pull-right visible-xs">Back</a>
		<h3 class="no-margin-t">Watched Homes</h3>
	@if(count($homes) > 0)
		<div class="row watch-home-all-unwatch-remove">
		@foreach($homes as $home)
		<div class="col-md-6 watch-home-unwatch-remove watch-home-{{ $home->id }}-unwatch-remove">
				@include('layouts.partial.home-block-small')
		</div>
		@endforeach
		</div>
	@endif
		<div class="panel panel-default watch-home-no-results @if(count($homes) > 0)hidden @endif">
			<div class="panel-body">
				<h4>
					<em>You haven't added any homes to your watchlist.</em>
				</h4>
			</div>
		</div>
	</div>
</div>
@stop

@section('incls-body')
<script type="text/javascript" src="/js/mhs.interface.js"></script>
@stop