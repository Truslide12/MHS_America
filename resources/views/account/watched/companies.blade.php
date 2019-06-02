@extends('layouts.master')
@fix-navbar
@show-navbar-divider

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('content')
<div class="row white">
	<div class="col-md-12">
		<span class="pull-right push-down">
			<a href="{{ URL::route('account-settings') }}" class="btn btn-default">Account Settings</a> <a href="{{ URL::route('account-logout') }}" class="btn btn-default">Sign out</a>
		</span>
		<h1>Dashboard&nbsp;&nbsp;&nbsp;<p class="visible-xs"></p><small><img src="{{ $user->gravatar(25) }}" class="img-thumbnail user-image-tiny"> {{ ($user->first_name =='' || $user->last_name == '') ? $user->username : $user->first_name . ' ' . $user->last_name }}</small></h1>
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
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-spaces') }}">Spaces</a></h4>
			</li>
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-professionals') }}">Professionals</a></h4>
			</li>
			<li class="list-group-item active">
				<h4 class="list-group-item-heading">Companies</h4>
			</li>
		</ul>
	</div>
	<div class="col-sm-9">
		<h3 class="no-margin-t">Watched Companies</h3>
	@if(count($companies) > 0)
		<div class="row">
		@foreach($companies as $company)
		<div class="col-md-12">
			<div class="panel panel-default panel-flat">
				<div class="panel-body">
					<h5 class="">
						<form action="{{ URL::route('company-cmd-watch-post', array('company' => $company->id)) }}" method="POST" class="pull-right">
							{{ csrf_token_field() }}
							<input type="hidden" name="ref" value="account-watched">
							<button type="submit" class="btn btn-xs btn-info" style="margin:-5px">Unwatch</button>
						</form>
						<a href="{{ URL::route('company', array('company' => $company->id)) }}">
							{{ $company->title }}
						</a>
					</h5>
				</div>
			</div>
		</div>
		@endforeach
		</div>
	@else
		<div class="panel panel-default">
			<div class="panel-body">
				<h4>
					<em>You haven't added any companies to your watchlist.</em>
				</h4>
			</div>
		</div>
	@endif
	</div>
</div>
@stop