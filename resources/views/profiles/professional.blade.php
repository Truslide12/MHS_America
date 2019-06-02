@extends('layouts.master')


@section('incls-head')
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/profile.css">
@stop

@section('content-above')
<div class="container texture-1-dis profile-header" style="border-bottom:4px solid #999;">
	<div class="row">
		<div class="col-md-12">
			<h2>
				<span class="premium"><i class="glyphicon glyphicon-star"></i></span>
				<p class="pull-right license">Lic. 00322134</p>
				{{ $profile->title }} 
				<small>
					<a href="{{ URL::route('city', array('state' => $state->abbr, 'county' => $county->name, 'city' => $city->name)) }}">
						{{ $city->place_name }}, {{ strtoupper($state->abbr) }}
					</a>
				</small>
			</h2>
			@if($profile->slogan)<p class="lead">{{ $profile->slogan }}</p>@endif
		</div>
	</div>
</div>
<div class="container" style="border-bottom:4px solid #999;">
	<div class="row user-menu-container square">
        <div class="col-md-6 user-details">
            <div class="row white">
                <div class="col-md-12 no-pad">
                    <div class="user-pad user-data">
                        @if($profile->address)<h4><i class="fa fa-check-circle-o"></i>
                        	<strong>Address</strong><br>
                        	{{ $profile->address }}, {{ $city->place_name }}, {{ strtoupper($state->abbr) }} {{ $city->zipcode }}
                        </h4>@endif
                        @if($profile->manager)<h4>
                        <i class="fa fa-user"></i>
                        <strong>Manager</strong><br>
                        {{ $profile->manager }}</h4>@endif
                        @if($profile->phone)<h4><i class="fa fa-phone"></i> <strong>Phone</strong> {{ "(".substr($profile->phone, 0, 3).") ".substr($profile->phone, 3, 3)."-".substr($profile->phone,6) }}</h4>@endif
                        @if($profile->fax)<h4><i class="fa fa-fax"></i> <strong>Fax</strong> {{ $profile->fax }}</h4>@endif
                        @if($profile->email)<h4><i class="fa fa-phone"></i> <strong>Email</strong> {{ $profile->email }}</h4>@endif
                        @if($profile->twitter)<h4><i class="fa fa-twitter"></i> {{ $profile->twitter }}</h4>@endif
                        &nbsp;<br>
                        <a href="#" class="btn btn-labeled btn-primary">
                            <span class="btn-label"><i class="fa fa-search"></i></span>Watch Profile</a>
						<a href="#" class="btn btn-labeled btn-success">
                            <span class="btn-label"><i class="fa fa-star"></i></span>Give Kudos</a>
                    </div>
                </div>
            </div>
            <div class="row overview">
                <div class="col-xs-6 user-pad text-center">
                    <h3>WATCHERS</h3>
                    <h4>2,784</h4>
                </div>
                <div class="col-xs-6 user-pad text-center">
                    <h3>KUDOS</h3>
                    <h4>456</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 no-pad">
			<div class="user-image">
				<img src="http://www.homeinspectionestate.com/wp-content/uploads/2013/08/Inspection-pic-22.jpg" class="img-responsive thumbnail">
        	</div>
        </div>
        
        <div class="clearfix"></div>
    </div>
</div>
@stop

@section('content')
	<div class="row clearfix white">
		<div class="col-md-6" id="left-col">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						Introduction
					</div>
				</div>
				<div class="panel-body">
					<p class="company-copy">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed egestas felis. Aenean sed dolor nisi. Integer pharetra pulvinar lectus, sed posuere lectus pellentesque vel. Praesent tristique porttitor pulvinar. Vestibulum vitae congue dui. Etiam elit urna, sodales nec aliquam sit amet, finibus et ex. Donec eu vehicula orci. Proin vitae bibendum lorem, vitae luctus massa. Nulla vulputate, sem faucibus dictum sodales, elit ex rutrum orci, at mattis nisl tellus vitae odio. Proin id urna blandit nisi accumsan lobortis. Aliquam erat volutpat. Mauris vel diam at ex vestibulum pellentesque et ut enim.
					</p>
				</div>
			</div>
			@yield('left_column')
		</div>
		<div class="col-md-6" id="right-col">
			<div class="panel panel-default">
				<div class="panel-body">
					<iframe width="423" height="315" src="//www.youtube.com/embed/u6_ubGlXmjg" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			@yield('right_column')
		</div>
	</div>
@stop