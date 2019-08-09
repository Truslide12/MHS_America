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

		@include("account.menu")
		
	</div>
	<div class="col-sm-9">
		<a href="{{ URL::route('account') }}" class="btn btn-default pull-right visible-xs">Back</a>
		<h3 class="no-margin-t">Watched Professionals</h3>
	@if(count($professionals) > 0)
		<div class="row">
		@foreach($professionals as $professional)
		<div class="col-md-6">
			<div class="panel panel-default panel-flat">
				<div class="panel-body">
					<h5 class="no-margin-t margin-b">
						<a href="#" data-action="watch" data-relation="profile" data-id="{{ $professional->id }}" class="btn btn-sm btn-danger pull-right" style="margin:-5px"><i class="fa fa-times"></i></a>
						<a href="{{ URL::route('profile', array('profile' => $professional->id)) }}">
							{{ $professional->title }}
						</a>
					</h5>
					<ul class="list-unstyled">
						<li>
							<small>
								<small style="line-height:2;vertical-align:middle;"><span class="text-muted pull-right">01/12/15 12:30pm</span></small> 
								4 new spaces are available
							</small>
						</li>
						<li>
							<small>
								<small style="line-height:2;vertical-align:middle;"><span class="text-muted pull-right">01/04/15 6:13pm</span></small> 
								"Summer discounts!"
							</small>
						</li>
					</ul>
					<a href="#"><small>&raquo; View more</small></a>
				</div>
			</div>
		</div>
		@endforeach
		</div>
	@else
		<div class="panel panel-default">
			<div class="panel-body">
				<h4>
					<em>You haven't added any professionals to your watchlist.</em>
				</h4>
			</div>
		</div>
	@endif
	</div>
</div>
@stop

@section('incls-body')
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/mhs.interface.js"></script>
@stop