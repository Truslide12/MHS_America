@extends('layouts.master')

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/home.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/cardscroller.css">
@stop



@section('content-above')
<div id="profile-header" class="container content" style="border-bottom:0px;">


</div>
@stop


@section('content')
<div class="row texture-1" style="padding-top: 0;">
	<div class="col-sm-12">
		<style type="text/css">
		.cotw-under {
			/*
			-webkit-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.75);
			box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.75);
			*/
		}
		.cotw-img {
			width: 292px;
			height: 268px;
			border-radius: 10px!important;
			
			-webkit-box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.75);

		}
		.about {
			font-family: Voltaire;
			color: #545454;
		}
		.about ul {
			list-style-type: none;
		}
		.about ul li:before {    
		    font-family: 'FontAwesome';
		    content: '\f00c';
		    margin:0 5px 0 -15px;
		    color: #4a879e;
		    font-size: 1em;
		}
		.build-opts li:before {
			display: none;
		}
		.build-opts li {
			text-align: right;
			border-bottom: 1px solid #cecece;
			padding: 5px 0px 0px 0px;
			margin-bottom: 5px;
		}
		.build-opts strong {
			color: #4a879e;
			float: left;
		}
		.about h3 {
			font-family: Lato;
			color: #147aba;
			font-weight: 900;
			border-bottom: 1px solid #147aba;
			padding-bottom: 2px;
			margin-bottom: 18px;
		}
		.backdrop {
			position: fixed;
			top: 0;
			left: 0;
			width: 100vw;
			height: 100vh;
			z-index: 500;
			display: flex;
			align-content: center;
			align-items: center;
			justify-content: center;
		}
		.backdrop::before {
			content: "";
			position: fixed;
			top: 0;
			left: 0;
			width: 100vw;
			height: 100vh;
			z-index: -1;
			background: rgba(0,0,0,.95);
		}
		.card-content {
			display: none;
			border: 1px solid black;
			background: #fff!important;
			position: absolute;
			bottom: -10px;
			left: 5px;
			width: calc(100% - 10px);
		}
		.card { box-shadow: none!important; }
		.backdropimg {
			position: relative;
		}
		.backdropimg::before {
			font-family: fontawesome;
			content: "\f053";
			width: 50px;
			height: 50px;
			background: snow;
			position: absolute;
			top: calc(50% - 25px);
			left: -55px;
			z-index: 1;
			border-radius: 25px;
			display: flex;
			align-items: center;
			align-content: center;
			justify-content: center;
			cursor: pointer;
		}
		.backdropimg::after {
			font-family: fontawesome;
			content: "\f054";
			width: 50px;
			height: 50px;
			background: snow;
			position: absolute;
			top: calc(50% - 25px);
			right: -55px;
			z-index: 1;
			border-radius: 25px;
			display: flex;
			align-items: center;
			align-content: center;
			justify-content: center;
			cursor: pointer;
		}
		</style>

	</div>
</div><div class="row about texture-1" style="padding-top: 20px;">

	<div class="col-lg-12"  style="min-height: 500px;padding-top: 45px;">

		<div class="alert alert-danger">
			<strong>Error:</strong> This home is set to private. <br><small>If this is your home, you can change it's status from Private to Active in the <a href="/{{$homeid}}/edit">Home Editor</a>.</small>
		</div>

	</div>


</div>
@stop

@section('incls-body')

@stop