@extends('layouts.master')
@fix-navbar
@show-navbar-divider

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/errors.css">
@stop

@section('content')
	<div class="row white">
		<div class="col-md-12">
			  <h1 class="error">
			  	4<span class="sr-only">0</span><i class="fa fa-frown-o"></i>4
			  	<small>File Not Found</small>
			  </h1>
		</div>
	</div>
@stop