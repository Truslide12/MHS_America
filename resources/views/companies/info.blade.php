@extends('layouts.master')
@fix-navbar

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/profile.css">
	<link rel="stylesheet" type="text/css" href="/css/company.css">
@stop

@section('content-above')
@include('companies.partial.header')
@stop

@section('content')
<div class="row">
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="row">
					@include('companies.partial.info-block')
					<div class="col-xs-6 col-sm-12">
						<div class="list-group list-group-minimal">
							<a href="{{ URL::route('company', array('company' => $company->id)) }}" class="list-group-item">Latest News</a>
							<a href="#" class="list-group-item active">Information</a>
							@if($company->showcommunities == 1 || 1==1)
							<a href="{{ URL::route('company-communities', array('company' => $company->id, 'ref' => 'company')) }}" class="list-group-item">Communities</a>
							@endif
							@if($company->showprofiles == 1 || 1==2)
							<a href="{{ URL::route('company-profiles', array('company' => $company->id)) }}" class="list-group-item">{{ $company->profiletext ? $company->profiletext : 'Profiles' }}</a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-9">
		<div class="row padding-y">
			<div class="col-md-12">
				@include('companies.partial.company-buttons')
			</div>
		</div>
		@if($company->verified == 0)
		<div class="alert alert-warning" role="alert">
			This company is not yet verified.
		</div>
		@endif
		<div class="row">
		@if($company->about_us == '' && $company->mission == '')
			<div class="col-md-12">
				<div class="panel panel-defalut">
					<div class="panel-body">
						<h4>
							<em>No information available.</em>
						</h4>
					</div>
				</div>
			</div>
		@else
			@if($company->about_us)
			<div class="col-md-6">
				<h3>About our company</h3>
				<p>{{ $company->about_us }}</p>
			</div>
			@endif
			@if($company->mission)
			<div class="col-md-6">
				<h3>Our mission</h3>
				<p>{{ $company->mission }}</p>
			</div>
			@endif
		@endif
		</div>
	</div>
</div>
@stop