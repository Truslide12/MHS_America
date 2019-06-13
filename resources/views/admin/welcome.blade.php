@extends('admin.layouts.master')

@section('stylesheets')
	<link rel="stylesheet" href="/metis/assets/lib/fullcalendar/fullcalendar.css">
@stop

@section('sidemenu')
@include('admin.layouts.partial.side-dashboard')
@stop

@section('content')
<?php 
	$latest_user	= \App\Models\User::take(1)->orderBy('id','desc')->first();
	$latest_company = \App\Models\Company::take(1)->orderBy('id','desc')->first();
	$latest_profile = \App\Models\Profile::take(1)->orderBy('id','desc')->first();
?>
<div class="row">
	<div class="col-md-4">
		<div class="text-center">
			<ul class="stats_box">
				@if(App::isDownForMaintenance())
				<li>
					<div class="sparkline"><i class="fa fa-2x fa-wrench"></i></div>
					<div class="stat_text text-left" style="left:-20px;top:-5px">
						<span class="percent text-yellow"> Maintenance<br>Mode</span> 
					</div>
				</li>
				@else
				<li>
					<div class="sparkline"><i class="fa fa-2x fa-play"></i></div>
					<div class="stat_text text-left" style="left:0;top:3px">
						<span class="percent text-green"> Site Active</span> 
					</div>
				</li>
				@endif
				<li>
					<div class="sparkline"><i class="fa fa-2x fa-laptop"></i></div>
					<div class="stat_text">
						<strong>165</strong> Daily Visit
						<span class="percent up"> <i class="fa fa-caret-up"></i> +23%</span> 
					</div>
				</li>
				<li>
					<div class="sparkline"><i class="fa fa-2x fa-tags"></i></div>
					<div class="stat_text">
						<strong>$2,345.00</strong> Weekly Sale
						<span class="percent"> 0%</span> 
					</div>
				</li>
				<li>
					<div class="sparkline"><i class="fa fa-2x fa-tags"></i></div>
					<div class="stat_text">
						<strong>$678.00</strong> Monthly Sale
						<span class="percent down"> <i class="fa fa-caret-down"></i> -10%</span> 
					</div>
				</li>
			</ul>
		</div>
		<hr>
	</div>
	<div class="col-md-8">


		<div class="box">
			<header>
				<h5>What's new</h5>
			</header>
			<div class="body">
				<div class="row">
					<div class="col-sm-6">
						<strong>Latest user</strong>
					</div>
					<div class="col-sm-6 text-right">
						<a href="{{ URL::route('admin-browse-users-view', array('user' => $latest_user->id)) }}">{{ ($latest_user->first_name == '' || $latest_user->last_name == '') ? $latest_user->username : $latest_user->first_name. ' ' . $latest_user->last_name }}</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<strong>Latest company</strong>
					</div>
					<div class="col-sm-6 text-right">
						<a href="{{ URL::route('admin-browse-companies-view', array('company' => $latest_company->id)) }}">{{ $latest_company->title }}</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<strong>Latest profile</strong>
					</div>
					<div class="col-sm-6 text-right">
						@if(is_object($latest_profile))
						<a href="#">{{ $latest_profile->title }}</a>
						@else
						<em class="text-muted">None</em>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop