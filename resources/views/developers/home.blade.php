@extends('layouts.master')
@show-navbar-divider
@section('incls-head')
<style type="text/css">
	#header-wrapper {margin-bottom:0;}
</style>
@stop

@section('content')
<div class="row glass">
	<div class="col-md-12">
		@if(Auth::check())
		<div class="pull-right margin-t no-margin-xs">
			<a href="{{ URL::route('account-business') }}" class="btn btn-default margin-r no-margin-xs">Business Center</a>
			<a href="{{ URL::route('account-settings') }}" class="btn btn-default margin-r hidden-xs">Account Settings</a>
		</div>
		@endif
		<h1 class="margin-b">Developers' Circle</h1>
	</div>
</div>
<div class="row glass">
	<div class="col-md-10 col-md-offset-1 padding-y">
		<div class="panel panel-primary">
			<ul class="list-group">
				<li class="list-group-item">
					<h2 class="margin-t-10"><a href="#" class="text-pink">Go to the Developers' Forums</a></h2>
					<p class="text-muted">Join your fellow members of the MHS community in the official developers' forum</p>
					<img src="/img/banner-forum.jpg" class="img-responsive img-border">
				</li>
				<li class="list-group-item">
					<h2 class="margin-t-10"><a href="{{ URL::route('docs-page', array('page' => 'Start')) }}" class="text-blue">Study the API Documentation</a></h2>
					<p class="text-muted">Brush up on your understanding of our API and what it provides</p>
				</li>
				@if(Auth::check())
				<li class="list-group-item">
					<h2 class="margin-t-10"><a href="" class="text-blue">Manage Developer Settings</a></h2>
				</li>
				@endif
			</ul>
		</div>
	</div>
</div>
@stop