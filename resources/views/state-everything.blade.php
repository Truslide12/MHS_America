@extends('layouts.master')
@use-navbar-divider
@fix-navbar

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/js/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/welcome.css">
@stop

@section('content')
	<div class="row clearfix slicetab">
		<div class="col-md-12">
			<div class="page-header">
			  <h1>{{ $state->title }} <small>Explore the local manufactured housing industry</small></h1>
			</div>
		</div>
	</div>
	<div class="row clearfix white">
		<div class="col-md-12">
			<div class="page-header header-links no-push">
			  <h1>
			  	<small>
			  		@if($spotlight)<a href="#spotlight" id="spotlight-button" class="scroll-to featured" data-container="body" data-toggle="popover" data-placement="right" data-trigger="hover focus" data-content="Featured businesses in California">Spotlight</a>@endif
			  		<span class="links-text">Search in:</span>
			  		<a class="scroll-to" href="{{ URL::route('state-everything', array('state' => $state->abbr)) }}">Entire state</a>
			  		@if($region_count > 0)<a class="scroll-to" href="{{ URL::route('state', array('state' => $state->abbr)) }}#areas">General area</a>@endif
			  		<a class="scroll-to" href="{{ URL::route('state', array('state' => $state->abbr)) }}#counties">County</a>
			  		<a class="scroll-to" href="{{ URL::route('state', array('state' => $state->abbr)) }}#cities">City</a>
			  	</small>
			  </h1>
			</div>
		</div>
	</div>
@stop