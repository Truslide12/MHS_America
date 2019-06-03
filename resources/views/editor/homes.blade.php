@extends('layouts.master')
@fix-navbar
@use-navbar-divider

@section('incls-head-early')
<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
@stop

@section('content')
<div class="row white">
	<div class="col-md-12">
		<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="btn btn-default pull-right visible-xs visible-sm">Go back</a>
		<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="btn btn-default pull-right push-down hidden-xs hidden-sm">Go back</a>
		<h3>Profile manager</h3>
		<h4>
			<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}">{{ $profile->title }}</a> <small><i class="fa fa-chevron-right"></i></small> 
			Homes
		</h4>
		<hr>
	</div>
</div>
<div class="row white">
	<div class="col-md-offset-2 col-md-8">
		<form class="form-horizontal" action="" method="POST">
			<div class="panel panel-default shadow">
				<div class="panel-body">
					<p class="pull-right">
						<a href="{{ URL::route('editor-addhome', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="btn btn-lg btn-primary">Create a listing</a>
						<!-- <a href="#" class="btn btn-lg btn-info">Manage campaigns</a> -->
					</p>
					<p class="text-muted">
						Currently {{ $homes->count() }} park-owned {{ $homes->count() == 1 ? 'home' : 'homes' }} in this community.
					</p>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="row white">
	<div class="col-md-offset-2 col-md-8">
		@foreach($homes as $home)
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<img src="{{ URL::route('welcome') }}/img/icons/home.png" style="width: 10rem;height: 7rem;float: left;margin-right: 5px;">
						<a class="btn btn-xs btn-default pull-right" href="{{ URL::route('editor-edithome', array('profile' => $profile->id, 'home' => $home->id)) }}">Edit / Remove</a>
						<h4 class="no-margin-t">
							<a href="{{ URL::route('home', array('home' => $home->id)) }}" target="_blank">{{ $home->beds }} Bed {{ $home->baths }} Bath {{ $home->size() }}-wide</a><br>
							<small>{{ $home->year }} {{ $home->brand }} {{ $home->model }} | {{ $home->sn() }}</small>
						</h4>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@stop