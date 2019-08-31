@php

	/*******************************************
	* From dummy values to dumb values..
	* I know this needs work just improving a bit
	* from what we had.
	********************************************/
	$da = file_get_contents("http://mhsamerica.loc/api/latest/homes");
	$da = json_decode($da);
	$img = Array();
	$lh = 0;

	if ( empty($da) ) { 
		$lh = 0; 
	} else {
		foreach( $da->data as $d ) {
			$lh++;
			if ( $d->photos ) {
				$p = (array) json_decode(stripslashes($d->photos));
				if ( ! empty($p) ) {
					$p = array_values($p)[0];
					$img[] = $p->url;
				} else {
					$img[] = "/img/nophoto.png"; 
				}
			} else {
				$img[] = "/img/nophoto.png"; 
			}
		}
	}

	






	$demo = 1;
@endphp

@extends('layouts.master')
@use-navbar-divider

@section('incls-head-early')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">

@stop

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/js/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/badges.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/welcome.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/cardscroller.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/animate.css">
	
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/mhs.home.search-section.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/mhs.home.for-everyone-promo.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/mhs.home.latest-homes.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/mhs.home.community-of-the-week.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/mhs.home.products-promo.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/mhs.home.mission-and-goals.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/mhs.home.states-section.css">

@stop


@contentclass('pull-up')
@section('content')


	<div class="row clearfix nudge white">
		<div class="col-md-12 text-center" id="logo-wrapper">
			<p class="lead hidden-xs hidden-sm">Find mobile homes, vacant spaces,<br>and professional contractors...</p>
			<img src="{{ URL::route('welcome') }}./img/logo-2014-rooftop.png" id="logo">
			<p class="lead hidden-md hidden-lg" style="visibility:hidden">&quot;Mobile Home Spaces Across America&quot;</p>
		</div>
	</div>
	<div class="row clearfix nudge white hidden-xs" id="map-container">
		<!-- gap -->
	</div>

	@include('layouts.partial.home-elements.search-section')
	@include('layouts.partial.errors')
	@include('layouts.partial.home-elements.for-everyone-promo')
	@include('layouts.partial.home-elements.latest-homes')
	@include('layouts.partial.home-elements.community-of-the-week')
	@include('layouts.partial.home-elements.products-promo')
	@include('layouts.partial.home-elements.mission-and-goals')
	@include('layouts.partial.home-elements.states-section')
	
@stop

@section('incls-body')
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/mhs.interface.js"></script>
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/maps/jquery.vmap.usa.js"></script>
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/gdp-data.js"></script>
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/rokocb.js"></script>


	<script type="text/javascript">


		function changeHomes()
		{
			$(".mhs-slideshow-loader").show();
			$(".mhs-slideshow").css({"min-height": $(".mhs-slideshow").outerHeight()+"px" });
			$("#slide-0, #slide-1, #slide-2, #slide-3").fadeOut(800, function(){

				setTimeout(reloadSlides, 100);

			});

		}
		function reloadSlides() {
			$(".mhs-slideshow-loader").fadeOut(500);
			$("#slide-0, #slide-1, #slide-2, #slide-3").fadeIn(800);
		}


		function animateCSS(element, animationName, callback) {
		    const node = document.querySelector(element)
		    node.classList.add('animated', animationName)

		    function handleAnimationEnd() {
		        node.classList.remove('animated', animationName)
		        node.removeEventListener('animationend', handleAnimationEnd)

		        if (typeof callback === 'function') callback()
		    }

		    node.addEventListener('animationend', handleAnimationEnd)
		}


		$(".clickycard").on('click', function(event){
		    event.stopPropagation();
		    event.stopImmediatePropagation();
		    window.location = $(this).attr("href")
		});

		function resizeBackdrop() {
			//var offset = $('#header-wrapper').height() + $('#logo-wrapper').height() + 45;
			var offset = 209;
			$('#great-welcome').outerHeight($(window).height() - offset + 'px');
		}

		$(window).on('resize', function(event) {
			resizeBackdrop();
		});
		$(function() {
			resizeBackdrop();
		});

		/**
		var noy = false;
		$("#statebanner").inViewport(function(px){
		    if(px && noy) {
		    	noy = false;
		    	animateCSS('.statebanner', 'zoomIn', function(){
		    		//$("#statebanner").addClass("")
		    	});
		    	$("#statebanner").inViewport = undefined	;
		    }
		});

		var nox = false;
		$("#promobanner").inViewport(function(px){
		    if(px && nox) {
		    	nox = false;
		    	animateCSS('#promobanner', 'zoomInRight', function(){
		    		//$("#statebanner").addClass("")
		    	});
		    	$("#promobanner").inViewport = undefined	;
		    }
		});

		var noz = false;
		$("#goalsbox").inViewport(function(px){
		    if(px && noz) {
		    	noz = false;
		    	animateCSS('#goalsbox', 'fadeIn', function(){
		    		//$("#statebanner").addClass("")
		    	});
		    	$("#goalsbox").inViewport = undefined	;
		    }
		});
	**/
	</script>
@stop