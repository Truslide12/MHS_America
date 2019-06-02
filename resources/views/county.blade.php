@extends('layouts.master')
@show-navbar-divider
@fix-navbar

@section('incls-head-early')
<link rel="stylesheet" type="text/css" href="/css/widgets.css">
@stop

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/js/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/welcome.css">
	<style type="text/css">
		.space-block-large {
			margin: 1px;
			border-bottom: 1px solid silver;
			margin-bottom: 10px;
			padding-bottom: 5px;
		}
	</style>
	<script type="text/javascript">
		var stateabbr = "{{ $state->abbr }}";
		var countyslug = "{{ $county->name }}";
	</script>
@stop

@section('attrs-body')ng-controller="CountyController"@stop

@section('content')
	<div class="row clearfix slicetab">
		<div class="col-md-12">
			<div class="page-header-dis">
			  <a class="btn btn-default pull-right margin-r-wide" href="{{ URL::route('state', array('state' => $state->abbr)) }}">Back to {{ $state->title }}</a>
			  <h1>
			  	{{ $county->title }}@if($county->hidesuffix != 1)<span class="hidden-inline-xs"> County</span>, {{ strtoupper($state->abbr) }} @endif
			  </h1>
			  <p class="text-muted">The local manufactured housing industry</p>
			</div>
		</div>
	</div>
	<div class="row clearfix nudge gray stamped">
		<div class="col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form class="form-inline">
						<div class="form-group">
							<label for="citySelect" class="padding-r">Locality</label>
							<select class="form-control margin-r" id="citySelect">
								<option value=""></option>
								@if(Config::get('app.angular') == true)
								<option ng-repeat="city in cities" itemscope itemtype="http://schema.org/AdministrativeArea/City" value="{[city.name]}">
									<span itemprop="name">{[city.title]}</span>
								</option>
								@else
								@foreach($county->cities as $city)
								<option itemscope itemtype="http://schema.org/AdministrativeArea/City" value="{{ $city->id }}">
									<span itemprop="name">{{ $city->title }}</span>
								</option>
								@endforeach
								@endif
							</select>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-info" id="cityFilter">Filter</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		@if(1==2)
		@if(Config::get('app.angular') == true)
		<div ng-repeat="city in cities" itemscope itemtype="http://schema.org/AdministrativeArea/City" class="col-xs-12 col-sm-6 col-lg-3 col-md-3 loctile">
			<a itemprop="url" href="/explore/{{ $state->abbr }}/{{ $county->name }}/{[city.name]}">
				<span itemprop="name" ng-bind-html="city.title | unsafe"></span>
			</a>
		</div>
		@else
		@foreach($county->cities as $city)
		<div itemscope itemtype="http://schema.org/AdministrativeArea/City" class="col-xs-12 col-sm-6 col-lg-3 col-md-3 loctile">
			<a itemprop="url" href="{{ URL::route('city', array('state' => $state->abbr, 'county' => $county->name, 'city' => $city->name)) }}">
				<span itemprop="name">{{ $city->title }}</span>
			</a>
		</div>
		@endforeach
		@endif
		@endif
		<div class="col-xs-12">
			<div class="row">
				<div class="col-sm-3">
					<ul class="list-group margin-b">
						@foreach($modes as $key => $title)
						<li class="list-group-item @if($mode == $key) active @endif">
							<h4 class="list-group-item-heading">
								@if($mode != $key)<a href="{{ URL::route('county', array('state' => $state->abbr, 'county' => $county->name, 'mode' => $key)) }}">@endif
									{{ $title }}
								@if($mode != $key)</a>@endif
							</h4>
						</li>
						@endforeach
					</ul>
				</div>
				<div class="col-sm-9">
					@if($mode == 'c')
					@include('citymodes.communities')
					@elseif($mode == 'p')
					@include('citymodes.professionals')
					@elseif($mode == 'h')
					@include('citymodes.homes')
					@elseif($mode == 's')
					@include('citymodes.spaces')
					@endif
				</div>
			</div>
		</div>
	</div>
@stop

@section('incls-body')
	<script type="text/javascript">
		$(function() {

			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html,body').animate({scrollTop: target.offset().top}, 1000);
						return false;
					}
				}
			});

			$(document).on('click', '#cityFilter', function() {
				if($('#citySelect').val() != ''){
					window.location.href = '{{ URL::route('city', array('state' => $state->abbr, 'county' => $county->name, 'city' => '')) }}/'+$('#citySelect').val();
				}
			});

		});
	</script>
@stop