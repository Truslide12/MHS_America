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
		<h1>Dashboard&nbsp;&nbsp;&nbsp;<p class="visible-xs"></p><small><img src="{!! $user->gravatar(25) !!}" class="img-thumbnail" style="vertical-align:bottom;width:32px"> {{ ($user->first_name =='' || $user->last_name == '') ? $user->username : $user->first_name . ' ' . $user->last_name }}</small></h1>
		<hr>
	</div>
</div>
<div class="row white">
	<div class="col-sm-3">
		<ul class="list-group margin-b">
			<li class="list-group-item active hidden-xs">
				<h4 class="list-group-item-heading">Dashboard Home</h4>
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
			@if(1==2)<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-companies') }}">Companies</a></h4>
			</li>@endif
		</ul>
	</div>
	<div class="col-sm-9">
		@if($user->created_at->diffInMinutes() > 0 && $user->created_at->diffInMinutes() < 30)
		<div class="alert">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4>Hello, {{ ($user->first_name == '') ? $user->username : $user->first_name }}.</h4>
					<p>Welcome aboard! Now when you <strong>watch</strong> a mobile home for sale, an available space, a community, or professional, you'll be able to see the latest information or news on them from your account.</p>
				</div>
			</div>
		</div>
		@endif
		@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
		@endif
		<h3>Latest MHS News</h3>
		@if(count($news) == 0)
		<div class="panel panel-default">
			<div class="panel-body">
				<h4 class="text-muted">
					<em>No news is good news.</em>
				</h4>
			</div>
		</div>
		@else
		@foreach($news as $newsitem)
		<div class="media">
			<div class="pull-left h1 no-margin-t">
				<i class="fa fa-newspaper-o"></i>
			</div>
			<div class="media-body">
				<h4 class="media-heading">
					<a href="#">{{ $newsitem->title }}</a><br>
					<small>Updated: {{ $newsitem->updated_at->format('M d, Y g:ia') }}</small>
				</h4>
			</div>
		</div>

		@endforeach
		@if(count($news) > 5)
		<div>
			<a href="#"><small>&raquo; view all</small></a>
		</div>
		@endif
		<p>&nbsp;</p>
		@endif
	</div>
</div>
@stop