@extends('layouts.master')
@use-slim-footer

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/static-footer.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/home.css">
@stop


@section('content')
<div class="panel panel-default visible-xs">
	<div class="panel-body">
		<h3 class="no-margin-t">
			<span class="text-red pull-right">${{ number_format($home->price) }}</span>
			{{ $home->beds }} Bed {{ $home->baths }} Bath {{ $home->size() }}-wide
		</h3>
	</div>
</div>
<div id="backdropCarousel" class="carousel slide">
	<div class="indicator-wrapper">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#backdropCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#backdropCarousel" data-slide-to="1"></li>
			<li data-target="#backdropCarousel" data-slide-to="2"></li>
		</ol>
	</div>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="{{ URL::route('welcome') }}/imgstorage/home/slides/2h1387943278_01.jpg" alt="First slide">
		</div>
		<div class="item">
			<img src="{{ URL::route('welcome') }}/imgstorage/home/slides/2h1387943278_02.jpg" alt="Second slide">
		</div>
		<div class="item">
			<img src="{{ URL::route('welcome') }}/imgstorage/home/slides/2h1387943278_03.jpg" alt="Third slide">
		</div>
	</div>
	<div class="dot-grid"></div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="panel panel-default" id="ctrlPanel">
			<div class="panel-body">
				@if(Auth::check())
					{{ csrf_token_field() }}
					@if($user->watchesHome($home->id))
					<a href="#" data-action="watch" data-relation="home" data-id="{{ $home->id }}" data-size="large" class="watch-home-{{ $home->id }} btn btn-info margin-r">
						Unwatch<span class="hidden-xs"> Home</span>
					</a>
					@else
					<a href="#" data-action="watch" data-relation="home" data-id="{{ $home->id }}" data-size="large" class="watch-home-{{ $home->id }} btn btn-labeled btn-info margin-r">
						<span class="btn-label">
							<i class="fa fa-star"></i>
						</span>
						Watch<span class="hidden-xs"> Home</span>
					</a>
					@endif
					<a href="{{ URL::route('home-contact', array('home' => $home->id)) }}" class="btn btn-default">
						Send Message
					</a>
					<p class="watch-home-{{ $home->id }}-count text-muted margin-t-10 no-margin-b">{{ ($home->watchers()->count() == 0) ? 'Nobody' : (($home->watchers()->count() == 1) ? '1 user' : $home->watchers()->count().' users') }} watching</p>
				@else
				<p>
					<a href="{{ URL::route('account-login') }}">Sign in</a> to contact seller or watch home.
				</p>
				@endif
			</div>
		</div>
	</div>
	<div class="col-sm-6" id="right-column">
		<div class="panel panel-default" id="infoPanel">
			<a href="#" id="infoMinimizer" class="btn btn-default pull-right hidden-xs">
				<i class="fa fa-plus fa-minus"></i>
			</a>
			<div class="panel-body">
				<div id="infoBox">
					<h3 class="no-margin-t hidden-xs">
						{{ $home->beds }} Bed {{ $home->baths }} Bath {{ $home->size() }}-wide
					</h3>
					<hr class="no-margin-t hidden-xs" style="margin-left:-15px;margin-right:-15px;">
					<h4>
						<span class="text-red pull-right hidden-xs">${{ number_format($home->price) }}</span>
						<span><a href="{{ URL::route('profile', array('profile' => $profile->id)) }}">{{ $profile->title }}</a></span>
					</h4>
					<h4></h4>
					<p>
						{{ $home->address }} Spc. {{ $home->space_number }}<br>
						{{ $home->city->place_name }}, {{ strtoupper($home->state->abbr) }} {{ $home->zipcode }}

					</p>
					<p>
						{{ $home->description }}
					</p>
				</div>
			</div>
		</div>
		@if($home->image_floorplan != '1')
		<div class="panel panel-default" id="planPanel">
			<div class="panel-body">
				<img src="{{ URL::route('welcome') }}/{{ $home->image_floorplan }}" class="img-responsive">
			</div>
		</div>
		@endif
		<div class="panel panel-default" id="specsPanel">
			<div class="panel-body">
				<h4 class="no-margin-t">Home specifications</h4>
				<table class="table">
					<tbody>
						<tr>
							<td class="col-sm-6">
								<strong>Dimensions</strong>
							</td>
							<td class="col-sm-6">
								{{ $home->size() }} &mdash; {{ $home->width }}' &times; {{ $home->length }}'
							</td>
						</tr>
						<tr>
							<td>
								<strong>Make / Model</strong>
							</td>
							<td>
								{{ $home->year }} {{ $home->brand }} {{ $home->model }}
							</td>
						</tr>
						<tr>
							<td>
								<strong>Serial No.</strong>
							</td>
							<td>
								{{ $home->serial }}
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop

@section('incls-body')
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/mhs.interface.js"></script>
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/mhs.homes.js"></script>
@stop