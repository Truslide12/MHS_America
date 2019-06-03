@extends('layouts.master')
@fix-navbar
@use-navbar-divider

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
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
			<li class="list-group-item active">
				<h4 class="list-group-item-heading">Communities</h4>
			</li>
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-homes') }}">Homes</a></h4>
			</li>
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-spaces') }}">Spaces</a></h4>
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
		<h3 class="no-margin-t">Watched Communities</h3>
	@if(count($communities) > 0)
		<div class="row watch-profile-all-unwatch-remove">
		@foreach($communities as $community)
		<div class="col-md-6 watch-profile-unwatch-remove watch-profile-{{ $community->id }}-unwatch-remove">
			<div class="panel panel-default panel-flat">
				<div class="panel-body font-bump-xs">
					<h5 class="no-margin-t margin-b">
						<a href="#" class="btn btn-sm btn-danger pull-right hidden-xs" style="margin:-5px"><i class="fa fa-times"></i></a>
						<a href="{{ URL::route('profile', array('profile' => $community->id)) }}">
							{{ $community->title }}
						</a>
					</h5>
					<ul class="list-unstyled">
						@foreach($community->updates()->orderBy('updated_at', 'desc')->get() as $update)
						<li>
							<small>
								<small style="line-height:2;vertical-align:middle;"><span class="text-muted pull-right">{{ $update->updated_at->format('m/d/y G:ia') }}</span></small> 
								{{ $update->text() }}
							</small>
						</li>
						@endforeach
					</ul>
					<a href="#"><small>&raquo; View more</small></a>
				</div>
			</div>
		</div>
		@endforeach
		</div>
	@endif
		<div class="panel panel-default watch-profile-no-results @if(count($communities) > 0)hidden @endif">
			<div class="panel-body">
				<h4>
					<em>You haven't added any communities to your watchlist.</em>
				</h4>
			</div>
		</div>
	</div>
</div>
@stop