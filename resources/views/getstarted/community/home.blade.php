@extends('layouts.master')
@fix-navbar

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/profile.css">
	<link rel="stylesheet" type="text/css" href="/css/ticketsystem.css">
	<style type="text/css">
		.form-control {
			margin-bottom: 10px;
		}
		.form-group {
			text-align: right;
			font-size: 1.25em;
		}
		.control-label {
			padding-top: 2px;
		}
	</style>
@stop

@section('content-above')
@include('getstarted.community.partial.header')
@stop

@section('content')
<div class="row white mb-0" >
	<div class="col-md-12">


			<div class="panel heavypad">
				<!-- <div class="panel-heading">Current Location</div> -->
				<div class="panel-body">



	            home


				</div>
			</div>


	</div>
</div>
@stop