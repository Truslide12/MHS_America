@extends('layouts.master')
@use-navbar-divider
@fix-navbar

@section('incls-head-early')
<link rel="stylesheet" type="text/css" href="/css/widgets.css">
@stop

@section('incls-head')
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/profile.css">
@stop

@section('content')
	<div class="row clearfix">
		<div class="col-md-12">
			<div class="page-header"@if($company->about_us == '') style="border:none;" @endif>
			  @if(Input::get('ref', '') == 'company')
			  <div class="pull-right">
			  	<a href="{{ URL::route('company', array('company' => $company->id)) }}" class="btn btn-primary">Back<span class="hidden-xs"> to company</span></a>
			  </div>
			  @endif
			  <h1>
			  	{{ $company->title }} Communities
			  </h1>
			</div>
		</div>
	</div>
	<div class="row clearfix white">
		<div class="col-md-12">
			@if($company->about_us != '')
			<p>{{ $company->about_us }}</p>
			@endif
		</div>
	</div>
	<div class="row clearfix nudge gray">
		<div class="col-md-12">
		@if(is_populated($communities))
			@foreach($communities as $community)
			@include('layouts.partial.community-block')
			@endforeach
		@else
			<div class="padding-y-wide text-center">
				<h2>No communities to show</h2>
			</div>
		@endif
		</div>
	</div>
	<div class="row grayend"></div>
@stop

@section('content-below')
<style type="text/css">
	#footer-wrapper{margin-top:45px;}
</style>
@stop