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


		@include("account.menu")

	</div>
	<div class="col-sm-9">
		@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
		@endif


		@if($user->business == 1)
			<div class="margin-b">
				<div class="pull-right">
					<a href="{{ URL::route('account-business-company-create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Create</a>
					<a href="{{ URL::route('account-business-company-link') }}" class="btn btn-default"><i class="fa fa-plug"></i> Connect</a>
				</div>
				<h3 class="no-margin-t">Companies</h3>
				<hr>
			</div>

			@if(count($companies) > 0 )
				@foreach($companies as $company)

				<div class="panel panel-default">
					<div class="panel-body">
						<div class="pull-right">
							<a href="{{ URL::route('account-business-company', array('company' => $company->id)) }}" class="btn btn-default btn-sm">Manage</a>
						</div>
						<h4>{{ $company->title }}<br><small>@if ($company->is_private) (Personal Business Account) @endif</small></h4>
					</div>
					<?php $profiles = $user->profiles($company)->get(); ?>
					@foreach($profiles as $profile)
					<ul class="list-group">
						<li class="list-group-item">
							<span class="pull-right"><small>
								<a href="{{ route('profile', ['profile' => $profile->id]) }}" class="btn btn-xs btn-info margin-b">View</a> 
								<a href="{{ route('editor', ['profile' => $profile->id]) }}" class="btn btn-xs btn-warning margin-b">Edit</a>
							</small></span>
							{{ $profile->title }}
						</li>
					</ul>
					@endforeach
				</div>
				@endforeach
			@else
				<div class="panel panel-default">
					<div class="panel-body text-center">
						<h4 class="text-muted">
							<em>You have no companies</em>
						</h4>
						<p>
							<a href="{{ URL::route('account-business-company-create') }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Create Company</a>
							<a href="{{ URL::route('account-business-company-link') }}" class="btn btn-sm btn-info"><i class="fa fa-link"></i> Link Company</a>
						</p>
					</div>
				</div>
			@endif
		@else
		<div class="alert alert-error">
			Error: you have not activated business features on this account.
		</div>
		@endif
	</div>
</div>
@stop