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
			  <h1><a href="{{ URL::route('state', array('state' => $state->abbr)) }}">{{ $state->title }}</a> <small>Spotlight Businesses</small></h1>
			</div>
		</div>
	</div>
	<div class="row clearfix white">
		<div class="col-md-12">
			<div class="page-header header-links no-push">
			  <h1>
			  	<small>
			  		<span class="links-text">Search in:</span>
			  		<a class="scroll-to" href="{{ URL::route('state-everything', array('state' => $state->abbr)) }}">Entire state</a>
			  		<a class="scroll-to" href="#counties">County</a>
			  		<a class="scroll-to" href="#cities">City</a>
			  	</small>
			  </h1>
			</div>
		</div>
	</div>
@stop