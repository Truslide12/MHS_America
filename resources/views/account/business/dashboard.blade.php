@extends('layouts.business')

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('heading')
Business Center&nbsp;&nbsp;&nbsp;<p class="visible-xs"></p><small><img src="{{ $user->gravatar(25) }}" class="img-thumbnail" style="vertical-align:bottom;width:32px;"> {{ ($user->first_name =='' || $user->last_name == '') ? $user->username : $user->first_name . ' ' . $user->last_name }}</small>
@stop

@section('businesscontent')
<div class="row white">
	<div class="col-sm-8">

				<style>
					.profile_banner {
						background: url('{{ URL::route('welcome') }}/img/stockphotos/company.jpeg');
						background-size:     cover;
					    background-repeat:   no-repeat;
					    background-position: center 10%;
					    height: 200px;
					    border: 1px solid #143366;
					}
					.profile_banner > .caption-bg{
						background-color: #143366;
						width: 100%;
						margin: 0px 0px;
						z-index: 2;
						position: absolute;
						bottom: 0;
						left: 0;
						opacity: 0.8;
						min-height: 2.2em;
						max-height: 2.2em;
					}
					.profile_banner>.caption{
						background-color: none;
						color: snow;
						width: 100%;
						margin: 0px 0px;
						padding: 5px 10px;
						z-index: 3;
						position: absolute;
						bottom: 0;
						left: 0;
						min-height: 2em;
						max-height: 2em;
						font-weight: bold;
						font-size: 1.3em;

					}
					.profile_banner>.prof-quote{
						background-color: none;
						color: #143366;
						width: 40%;
						margin: 0px 0px;
						padding: 5px 10px;
						z-index: 3;
						position: absolute;
						top: 0;
						right: 0;
						text-align: right;
						font-weight: bold;
						font-style: italic;
						overflow: hidden;
					}
				</style>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12 profile_banner">
							<div class="caption-bg">&nbsp;</div>
							<span class="caption">Welcome to the business center, {{ ($user->first_name =='') ? $user->username : $user->first_name }}</span>
							<span class="prof-quote">Create your company and make yourself known to the industry.</span>
						</div>
					</div>
				</div>

		<div class="row">
			<div class="col-md-12">
			@include('layouts.partial.errors')

			@if(count($companies) > 0 && 1==2)
				@foreach($companies as $company)
				@if ( $company->is_personal)
					<div class="margin-b">
						<h3 class="no-margin-t">Personal Business Account</h3>
						<hr>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="pull-right">
								<a href="{{ URL::route('account-business-company', array('company' => $company->id)) }}" class="btn btn-default btn-sm">Manage</a>
							</div>
							<h4>{{ $company->title }}<br><small>(Personal Business Account)</small></h4>
						</div>
					</div>
				@endif
				@endforeach
			@endif


			<div class="margin-b">
				<div class="pull-right">
					<a href="{{ URL::route('account-business-company-create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Create</a>
					<a href="{{ URL::route('account-business-company-link') }}" class="btn btn-default"><i class="fa fa-plug"></i> Connect</a>
				</div>
				<h3 class="no-margin-t">Companies</h3>
				<hr>
			</div>

			@if(count($companies) > 0)
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
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<!--
		<video style="margin-top: 15px;" width="100%" controls>
		  <source src="{{ URL::route('welcome') }}/video/commercial/original.mp4" type="video/mp4">
		  <source src="{{ URL::route('welcome') }}/video/commercial/original.ogg" type="video/ogg">
		  Your browser does not support HTML5 video.
		</video>
		-->
		<ul class="list-group">
			<li class="list-group-item">
				<h5 class="list-group-item-heading">
					<a href="{{ URL::route('account-business-guide') }}" target="_blank">Beginner's Guide</a>
				</h5>
			</li>
			<!--
			<li class="list-group-item">
				<h5 class="list-group-item-heading">
					<a href="#">Community Forum</a>
				</h5>
			</li>
			-->
			<li class="list-group-item">
				<h5 class="list-group-item-heading">
					<a href="{{ URL::route('developers') }}">Developers' Center</a>
				</h5>
			</li>
		</ul>
		<!--
		<ul class="list-group">
			<li class="list-group-item">
				<h5 class="list-group-item-heading">
					<a href="{{ URL::route('developers') }}">Developers' Center</a>
				</h5>
			</li>
			<li class="list-group-item">
				<h5 class="list-group-item-heading">
					<a href="#">Goodies and Resources</a>
				</h5>
			</li>
		</ul>
		-->
	</div>
</div>
@stop