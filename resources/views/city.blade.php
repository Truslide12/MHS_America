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
@stop

@section('content')
	<div class="row clearfix slicetab">
		<div class="col-md-12">
			<div class="page-header-dis">
			  @if(is_populated($region))
			  <h1 class="h2">
			  	<a href="{{ URL::route('region', array('state' => $state->abbr, 'region' => $region->name)) }}">{{ $region->prefix }} {{ $region->title }}@if($region->hidesuffix != 1)<span class="hidden-inline-xs"> {{ ($region->micro == 1) ? 'Micropolitan' : 'Metropolitan' }} Area</span>@endif{{ $region->suffix ? ' '.$region->suffix : '' }}</a><br>
			  	&nbsp;&raquo; {{ $city->place_name }}, {{ strtoupper($state->abbr) }}
			  </h1>
			  @else
				  @if($county->isCityCounty())
				  <a class="btn btn-default pull-right margin-r-wide" href="{{ URL::route('state', array('state' => $state->abbr)) }}">Back to {{ $state->title }}</a>
				  @else
				  <a class="btn btn-default pull-right margin-r-wide" href="{{ URL::route('county', array('state' => $state->abbr, 'county' => $county->name)) }}">Back to {{ $county->title }}@if($county->hidesuffix != 1) County @endif</a>
				  @endif
			  <h1 class="h2">
			  	{{ $city->place_name }}, {{ strtoupper($state->abbr) }}
			  </h1>
			  	@endif
			  <p class="text-muted">The local manufactured housing industry</p>
			</div>
		</div>
	</div>
	<div class="row clearfix nudge gray">
		<div class="col-sm-3">
			<ul class="list-group margin-b">
				@foreach($modes as $key => $title)
				<li class="list-group-item @if($mode == $key) active @endif">
					<h4 class="list-group-item-heading">
						@if($mode != $key)<a href="{{ URL::route('city', array('state' => $state->abbr, 'county' => $county->name, 'city' => $city->name, 'mode' => $key)) }}">@endif
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
@stop

@section('incls-body')
	@if(1==2)<style type="text/css">
		.grayend{margin:0 -17px -33px -15px;}
		.grayend:after{border-left:1px solid #333;height:35px;margin-right:-2px;right:0;position:absolute;}
		#footer-wrapper{margin-top:23px;}
		.content{border-bottom:none;}
	</style>@endif
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