@extends('layouts.master')
@fix-navbar
@use-navbar-divider

@section('incls-head-early')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
@stop

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/badges.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
	<style type="text/css">
		.profile-panel {
			font-size:0.85em;
		}
		.profile-panel .img-thumbnail {
			max-width:100px;
			height:auto;
		}
		.page-header h3, .page-header h5 {
			margin-bottom:-5px;
			font-weight:bold;
		}
	</style>
@stop

@section('content')
	<div class="row clearfix slicetab">
		<div class="col-md-12">
			<div class="page-header">
			  <h1>Explore <small>The national manufactured housing industry</small></h1>
			</div>
		</div>
	</div>
	<div class="row clearfix nudge white">
		<div class="col-md-6">
			<div class="page-header no-push">
				<h3>Latest communities</h3>
			</div>
			@foreach($latest_communities as $community)
			@include('layouts.partial.community-block')
			@endforeach
		</div>
		<div class="col-md-6">
			<div class="page-header no-push">
				<h3>Latest homes</h3>
			</div>
			@foreach($latest_homes as $home)
			@include('layouts.partial.home-block-mini')
			@endforeach
			<div class="page-header no-push no-border no-margin-b">
				<h5 class="text-muted">Advertisement</h5>
			</div>
			<div class="panel panel-primary">
				<div class="panel-body">
					<div class="media">
						<div class="pull-left">
							<img src="//placehold.it/100x100">
						</div>
						<div class="media-body">
							<h4>Profile title here</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adeliscing elit...</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix nudge gray stamped">
		<div class="col-md-8">
			<div class="page-header no-push no-border">
				<h3>Explore the industry by state</h3>
			</div>
			<div class="row">
				@foreach($states as $state)
				<div class="col-xs-12 col-sm-3 col-lg-3 col-md-3 loctile">
					<a href="{{ URL::route('state', array('state' => $state->abbr)) }}">
						<span>{{ $state->title }}</span>
					</a>
				</div>
				@endforeach
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="page-header no-push no-border">
				<h5 class="pull-left">SPONSORED</h5><h3>&nbsp;</h3>
			</div>
			<div class="row" style="background:#efefef;margin-top:-15px;padding-top:15px;">
				<div class="col-sm-4 col-md-12">
					<img src="//placehold.it/292x268/dedede" class="img-responsive img-prv">
				</div>
				<div class="col-sm-4 col-md-12">
					<img src="//placehold.it/292x127/dedede" class="img-responsive img-prv">

					<img src="//placehold.it/292x127/dedede" class="img-responsive img-prv">
				</div>
				<div class="col-sm-2 col-md-6">
					<img src="//placehold.it/126x122/dedede" class="img-responsive img-prv">
				</div>
				<div class="col-sm-2 col-md-6">
					<img src="//placehold.it/126x122/dedede" class="img-responsive img-prv">
				</div>
				<div class="col-sm-2 col-md-6">
					<img src="//placehold.it/126x122/dedede" class="img-responsive img-prv">
				</div>
				<div class="col-sm-2 col-md-6">
					<img src="//placehold.it/126x122/dedede" class="img-responsive img-prv">
				</div>
			</div>
		</div>
	</div>
@stop