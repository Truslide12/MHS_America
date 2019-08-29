@php

	/*******************************************
	* From dummy values to dumb values..
	* I know this needs work just improving a bit
	* from what we had.
	********************************************/
	$da = file_get_contents("http://mhsamerica.com/api/latest/homes");
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
	<style type="text/css">
		.profile-container {
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			flex-wrap: wrap;
		}
		.profile-container .profile-panel {
			display: flex;
			flex-direction: column;
			align-content:stretch;
			width: 100%;
		}
	</style>
@stop

@section('attrs-body')ng-controller="PrimaryController"@stop

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
		<div class="col-md-12">
			<div id="map" style="width: 100%; height: 50em"></div>
		</div>
	</div>


	<div class="row clearfix white">
		@if(1==2)
		<div class="jumbotron text-center" id="great-welcome" style="display:flex;background: url('{{ URL::route('welcome') }}./img/backdrops/panoramas/stockfreeimages-1663421-prairie-by-bruce2-high.jpg');background-size: auto 100%;background-position: center center;">
		<div class="jumbotron text-center" id="great-welcome" style="display:flex;background: url('{{ URL::route('welcome') }}./img/stockphotos/blue-sky-clear-sky-cold-346529.jpg');background-size: 100% auto;background-position: top center;">
		<div class="jumbotron text-center" id="great-welcome" style="padding:0px;display:flex;flex-direction:column;background: url('{{ URL::route('welcome') }}./img/stockphotos/adventure-daylight-formation-141784.jpg');background-position: 75% 80%;background-size: auto 100%;animation: animatedBackground 30s linear forwards;">
		@endif
		<div class="jumbotron text-center" id="great-welcome" style="display:flex;background: url('{{ URL::route('welcome') }}./img/backdrops/panoramas/stockfreeimages-1663421-prairie-by-bruce2-high.jpg');background-size: auto 100%;background-position: center center;">

<form action="search" method="post" style="width: 100%">
		{{ csrf_field() }}
		<div class="v2box" style="margin: 50px auto 10px auto;">
			<div style="width: 100%;padding: auto auto;" class="">
				<h1 style="font-size: 2.25em;text-align: center;color: #fff;">Search Mobile Home Spaces Across America</h1>
			</div>
			<div style="clear: all;padding: 3px;"></div>
			<div class="sexy">

				<input type="text" name="input" placeholder="Anywhere, USA" class="sexy-stop">
				<div class="sexy-wrap"><select name="mode" class="sexy-drop">
					<option value="1">Homes</option>
					<option value="2">Spaces</option>
					<option value="0">Communities</option>
				</select></div>
				<button class="btn-primary sexy-roll"><i class="fa fa-search" style="margin: auto auto;"></i></button>
			</div>
			<div style="clear: all;padding: 3px;"></div>
		</div>

		<div class="mobox" style="">
			<div style="width: 100%;padding: auto auto;" class="">
				<h1 style="font-size: 2.25em;text-align: center;color: #000;">Search Mobile Home Spaces Across America</h1>
			</div>
			<div style="clear: all;padding: 3px;"></div>

				<input type="text" name="" placeholder="Anywhere, USA" class="form-control moboxstop">
				<select name="" class="form-control moboxdrop">
					<option>Homes</option>
					<option>Spaces</option>
					<option>Communities</option>
					<option>Dealers</option>
				</select>
				<button class="btn-primary form-control moboxroll"><i class="fa fa-search" style="margin: auto auto;"></i> Search MHS America</button>
			<div style="clear: all;padding: 3px;"></div>
		</div>
</form>
		</div>
		<style type="text/css">
		@keyframes animatedBackground {
			0%  {	background-position: 75% 80%;background-size: auto 100%;	}
			100% {	background-position: 90% 80%;background-size: auto 125%;	}
		}
			.v2box i { font-weight: 400!important; }
			.v2box {
				display: flex;
				flex-direction: column;
				align-items: center;
				align-content: center;
				justify-content: center;
				margin: auto;
				background: rgba(26, 48, 84, 0.75);
				padding: 16px 10px 10px 10px;
				width: 80%;
				height: auto;
				clear: both;
				border-radius: 5px!important;

			}

			.sexy {
				background: rgba(255, 255, 255, 1);
				width: 100%;
				padding:3px 3px!important;
				border-radius: 5px!important;
				position: relative;
				margin: auto;
				color: gray;
				font-size: 1.5em;
				display: flex;
			}
			.sexy input,
			.sexy select,
			.sexy option {
				outline: 0 none !important;
				border: 0px solid #fff;
				font-size: 1.2em;
				line-height: 1.2em;
				padding: 5px 7px!important;
				background: rgba(255, 255, 255, 0);
			}
			.sexy-stop {
				min-height:100%;
				width: 65%;
				margin:0!important;
				display:inline-flex;
				float:left;
				border: 0px;
				border-right: 1px solid gray!important;
			}
			.sexy-stop::after {
				content: "Where";
				position: absolute;
				top: 100px;
				right: 0px;
				background: red;
				z-index: 200;
				border: 1px solid blue;

			}
			.sexy-drop {
				min-height:100%;
				width: 100%;
				margin:0!important;
				display:inline-flex;
				float:left;
				border: 0px;
				cursor: pointer!important;
				   -webkit-appearance: none;
				   -moz-appearance: none;
				   appearance: none;
			}
			.sexy-wrap {
				padding: 0;
				margin: 0;
				width: 25%;
				position: relative;
			}
			.sexy-wrap::after {
			    content:"\f078";
			    font-family: FontAwesome;
			    color: #aeaeae;
			    position: absolute; 
			    right: 0; 
			    top: 0;
			    z-index: 1;
			    display: inline-block;
    			padding: 5px 10px;
    			background: linear-gradient(90deg, rgba(255,255,255,0),rgba(255,255,255,1));
			    pointer-events: none;
			}
			.sexy-roll {
				min-height:100%;
				width:10%;
				margin:0!important;
				display:inline-flex;
				float:left;
				border: 0px;
				clear: all;
				cursor: pointer!important;
			}
			.sexy-drop > option {
				padding: 0 0 !important;
				margin: 0 0 !important;
				cursor: pointer!important;
				background-color: #fff;
				font-size: 1em;
			}
				.mobox {
					display: none;
				}
			@media (max-width:767px) {
				#great-welcome {padding:10px;}
				.btn-group-lg {margin:0 20px;}
				.btn-group-lg .btn {display:block;margin-bottom:10px;}
				#login-tray {padding-top:20px;width: 100%;}
				.mobox {
					display: flex;
					flex-direction: column;
					align-items: center;
					align-content: center;
					justify-content: center;
					margin: auto;
					background: none;
					padding: 4px 2px 2px 2px;
					width: 90%;
					height: auto;
					clear: both;
				}
				.mobox > div {
					color: black;
				}
				.v2box {
					display: none;
				}
				.moboxstop,
				.moboxdrop,
				.moboxroll {
					margin-bottom: 10px;
				}
			}

				.fs-ribbon {
				  -webkit-transform: rotate(-45deg); 
				     -moz-transform: rotate(-45deg); 
				      -ms-transform: rotate(-45deg); 
				       -o-transform: rotate(-45deg); 
				          transform: rotate(-45deg); 
				    border: 25px solid transparent;
				    border-top: 25px solid #03bafc;
				    position: absolute;
				    bottom: 0px;
				    right: -40px;
				    padding: 0 10px;
				    width: 120px;
				    color: white;
				    font-family: sans-serif;
				    size: 11px;
				    text-align: center;
				}
				.fs-ribbon .txt {
				    position: absolute;
				    top: -21px;
				    left: -3px;
				}​
		</style>
	</div>

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
		$('#map').vectorMap({
			map: 'usa_en',
			backgroundColor: 'transparent',
			zoomOnScroll: false,
			enableZoom: false,
			regionStyle: {
				initial: {fill: '#7f8efe', stroke: '#cccccc', 'stroke-width': 1},
				hover: {fill: '#2233aa'},
				selected: {fill: '#00b7ea'}
			},
			onRegionClick: function(element, code, region)
				{
					$('body').append($('<form>').attr('method',"GET").attr('id','link-'+code).attr('action','{{ URL::route('welcome') }}/explore/' + code + '/'));
					$('#link-'+code).append($("#srcinput")).submit();
				}
		}).hide();
		@if($welcomebox == true && 1==2)
		$('#welcomebox').modal();
		@endif


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