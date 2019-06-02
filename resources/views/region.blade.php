@extends('layouts.master')
@show-navbar-divider
@fix-navbar

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/js/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/welcome.css">
@stop

@section('content')
	<div class="row clearfix slicetab">
		<div class="col-md-12">
			<div class="page-header">
			  <h1>
			  	<a href="{{ URL::route('state', array('state' => $state->abbr)) }}">{{ $state->title }}</a> 
			  	&raquo; {{ $region->prefix }} {{ $region->title }}@if($region->hidesuffix != 1)<span class="hidden-inline-xs"> {{ ($region->micro == 1) ? 'Micropolitan' : 'Metropolitan' }} Area</span>@endif {{ $region->suffix }}
			  </h1>
			</div>
		</div>
	</div>
	<div class="row clearfix nudge gray">
		@foreach($cities->get() as $city)
		<div itemscope itemtype="http://schema.org/AdministrativeArea/City" class="col-xs-12 col-sm-6 col-lg-3 col-md-3 loctile">
			<a itemprop="url" href="{{ URL::route('city', array('state' => $state->abbr, 'county' => $city->county->name, 'city' => $city->name)) }}">
				<span itemprop="name">{{ $city->place_name }}</span>
			</a>
		</div>
		@endforeach
	</div>
	<div class="row clearfix nudge gray">
		@foreach($homes->paginate(20) as $home)
		@include('layouts.partial.home-block')
		@endforeach
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
		});
	</script>
@stop