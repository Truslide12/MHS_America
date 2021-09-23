@extends('layouts.master')
@fix-navbar
@use-navbar-divider

@section('incls-head-early')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
@stop

@section('incls-head')
	<link href="{{ URL::route('welcome') }}/css/font-awesome.min.css" rel="stylesheet">
  	<link href="{{ URL::route('welcome') }}/css/awesome-bootstrap-checkbox.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/search.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/badges.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-slider.min.css">
@stop

@section('content')
	<div class="row white">
		<div class="col-md-12">
			<h1 class="text-center">
				<span class="hidden-xs">&nbsp;<br></span>
				<img src="/img/logo-2014-rooftop.png" alt="MHS America" id="logo">
			</h1>
			@yield('search-above')
		</div>
	</div>
	@yield('search')
@stop