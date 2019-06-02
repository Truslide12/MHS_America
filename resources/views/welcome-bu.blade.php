@extends('layouts.master')
@show-navbar-divider

@section('incls-head-early')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
@stop

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/js/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/badges.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/welcome.css">
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
			<span id="logoSticker">BETA</span>
			<p class="lead hidden-md hidden-lg" style="visibility:hidden">&quot;Mobile Home Spaces Across America&quot;</p>
		</div>
	</div>
	<div class="row clearfix nudge white hidden-xs" id="map-container">
		<div class="col-md-12">
			<div id="map" style="width: 100%; height: 50em"></div>
		</div>
	</div>
	<div class="row clearfix nudge white">
		<div class="jumbotron text-center" id="great-welcome" style="background: url({{ URL::route('welcome') }}./img/backdrops/panoramas/welcome-backdrop.jpg);background-size: cover;">
			@if(Auth::check())
			<h3>Hi, {{ ($user->first_name == '') ? $user->username : $user->first_name }}!</h3>
			@endif
			<h1>What are you looking for?</h1>
			<p></p>
			<div class="btn-group-lg" role="group">
				<a href="{{ URL::route('communities') }}" type="button" class="btn btn-success">Communities</a>
				<a href="{{ URL::route('homes') }}" type="button" class="btn btn-primary">Homes</a>
				<a href="{{ URL::route('spaces') }}" type="button" class="btn btn-primary">Spaces</a>
				<a href="{{ URL::route('professionals') }}" type="button" class="btn btn-primary">Pros</a>
				@if(1==2)<a href="#" type="button" class="btn btn-primary">People</a>@endif
			</div>
			<p id="login-tray">
				@if(Auth::check())
				<a href="{{ URL::route('account') }}" class="btn btn-default">Go to Dashboard</a>
				@if($user->business == 1)<a href="{{ URL::route('account-business') }}" class="btn btn-default">Business Center</a>@endif
				@else
				<a href="{{ URL::route('account-login') }}" class="btn btn-sm btn-default">Sign in</a>&nbsp; &ndash; or &ndash; &nbsp;
				<a href="{{ URL::route('account-register') }}" class="btn btn-sm btn-default">Register for free</a>
				@endif
			</p>
		</div>
		<style type="text/css">
			@media (max-width:767px) {
				#great-welcome {padding:10px;}
				.btn-group-lg {margin:0 20px;}
				.btn-group-lg .btn {display:block;margin-bottom:10px;}
				#login-tray {padding-top:20px;}
			}

@if ( 1==1 )
.card .card-image{
    overflow: hidden;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    -o-transform-style: preserve-3d;
    transform-style: preserve-3d;
}

.card .card-image img{
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    -ms-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.card .card-image:hover img{
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
}

.card {
    position: relative;
    /*
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  	-moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  	box-shadow: 4 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  	*/
  	-webkit-box-shadow: 0px 10px 2px -4px rgba(0,0,0,0.16);
	-moz-box-shadow: 0px 10px 2px -4px rgba(0,0,0,0.16);
	box-shadow: 0px 10px 2px -4px rgba(0,0,0,0.16);
  	width: 100%;
  	background: #f5f5f5;
}

.card .card-content {
    padding: 10px;    
}

.card .card-content .card-title, .card-reveal .card-title{
    font-size: 1.2em;
    line-height: 1em;
    font-weight: 500px;  
}

.card .card-action{
    padding: 20px;
    border-top: 1px solid rgba(160, 160, 160, 0.2);
}
.card .card-action a{
    font-size: 15px;
    color: #ffab40;
    text-transform:uppercase;
    margin-right: 20px;    
    -webkit-transition: color 0.3s ease;
    -moz-transition: color 0.3s ease;
    -o-transition: color 0.3s ease;
    -ms-transition: color 0.3s ease;
    transition: color 0.3s ease;
}
.card .card-action a:hover{    
    color:#ffd8a6;
    text-decoration:none;
}

.card .card-reveal p{
    color: rgba(0, 0, 0, 0.71);
    margin:20px ;
}

.btn-custom{
    background-color: transparent;
    font-size:18px;
}

.mhs-slideshow {
	display: flex;
	flex-direction: row;
	overflow-x: auto;
	white-space: nowrap;
	width: 100%;
	height: auto;
	margin: 0px;
	padding: 10px 0px;
	background: none;
	padding-left: 5px;
	padding-top: 0px;
	background: none;
	  -webkit-overflow-scrolling: touch;

}
.mhs-slideshow::-webkit-scrollbar {
    display: none;
  }

.mhs-slideshow-loader {
	width: 12em;
	height: 5em;
	z-index: 10;
	display: flex;
	align-items: center;
	align-content: center;
	justify-content: center;
	background: url("{{ URL::route('welcome') }}/img/loading.gif") #fff;
	background-position: center 10px;
	background-repeat: no-repeat;
	position: absolute;
	top: calc(50% - 3em);
	left: calc(50% - 6em);
	margin: auto;
	border: 1px solid #d6e5ff;
	border-radius: .5em!important;
	display: none;
}
.mhs-slideshow-loader > small {
	position: absolute;
	bottom: 5px;
	left: 0;
	width: 100%;
	text-align: center;
}
.mhs-slide {
	width: 25%;
	min-width: 200px;
	padding-right: 5px;
}

.mhs-slideshow .mhs-slide-left-btn { 
	background: #fcfcfc;
	border: 0px solid #f5f5f5;
	border-radius: 1.5em!important;
	height: 3em;
	width: 3em;
	position: absolute;
	top: calc(50% - 3em);
	left: calc(1.5em + 5px);
	z-index: 5;
	display: flex;
	align-items: center;
	align-content: center;
	justify-content: center;
	opacity: 0;
	-webkit-transition: all 0.25s linear;
    -moz-transition: all 0.25s linear;
    -o-transition: all 0.25s linear;
    transition: all 0.25s linear;
}
.mhs-slideshow:hover .mhs-slide-left-btn {
	opacity: 0.5;
}
.mhs-slide-left-btn:hover { 
	opacity: 1!important;
	background: #fcfcfc;
	-webkit-transition: all 0.25s linear;
    -moz-transition: all 0.25s linear;
    -o-transition: all 0.25s linear;
    transition: all 0.25s linear;
    cursor: pointer;
}

.mhs-slideshow .mhs-slide-right-btn { 
	background: #fcfcfc;
	border: 0px solid #f5f5f5;
	border-radius: 1.5em!important;
	height: 3em;
	width: 3em;
	position: absolute;
	top: calc(50% - 3em);
	right: calc(1.5em + 5px);
	z-index: 5;
	display: flex;
	align-items: center;
	align-content: center;
	justify-content: center;
	opacity: 0;
	-webkit-transition: all 0.25s linear;
    -moz-transition: all 0.25s linear;
    -o-transition: all 0.25s linear;
    transition: all 0.25s linear;
}
.mhs-slideshow:hover .mhs-slide-right-btn {
	opacity: 0.5;
}
.mhs-slide-right-btn:hover { 
	opacity: 1!important;
	background: #fcfcfc;
	-webkit-transition: all 0.25s linear;
    -moz-transition: all 0.25s linear;
    -o-transition: all 0.25s linear;
    transition: all 0.25s linear;
    cursor: pointer;
}
@endif
		</style>
	</div>
	<div>
		@include('layouts.partial.errors')
	</div>

	<div class="row clearfix nudge white">
		<div class="col-md-12">
			<div class="page-header no-margin-t">
				<h1 class="no-margin-t">Explore <small>The national manufactured housing industry</small></h1>
			</div>
		</div>
	</div>


	@if ( 1==1 )
	@php
		$img = Array("http://localhost/mhs-america/public/imgstorage/cover_1547400946_7da5d8ab427abd3c15e2f4bb57944a2c_orig.jpg", 
					 "http://localhost/mhs-america/public/imgstorage/cover_1523079898_33a1003addc803cdf480245782f661c7_orig.jpg", 
					 "http://localhost/mhs-america/public/imgstorage/cover_1523079917_34ca7af6b170ad2aac1fa5bed6ab4ea4_orig.jpg", 
					 "http://localhost/mhs-america/public/imgstorage/cover_1547400946_7da5d8ab427abd3c15e2f4bb57944a2c_orig.jpg", 
					 "http://localhost/mhs-america/public/imgstorage/cover_1523079898_33a1003addc803cdf480245782f661c7_orig.jpg", 
					 "http://localhost/mhs-america/public/imgstorage/cover_1523079917_34ca7af6b170ad2aac1fa5bed6ab4ea4_orig.jpg",
					 "http://localhost/mhs-america/public/imgstorage/cover_1547400946_7da5d8ab427abd3c15e2f4bb57944a2c_orig.jpg", 
					 "http://localhost/mhs-america/public/imgstorage/cover_1523079898_33a1003addc803cdf480245782f661c7_orig.jpg");
		$title = Array("3 Bed 2 Bath Home", "2 Bed 2 Bath Home", "1 Bed 1 Bath Home", "3 Bed 2 Bath Home", "", "", "", "");
		$place = Array("Yucaipa, CA", "Riverside, CA", "Colton, CA", "Corona, CA", "", "", "", "");
	@endphp
	<div class="row clearfix nudge white">
		<div class="col-md-12">
			<div class="page-header no-margin-t">
				<div class="mhs-slideshow">
					<div class="mhs-slide-left-btn" onclick="changeHomes();"><i class="fa fa-chevron-left"></i></div>
					<div class="mhs-slide-right-btn" onclick="changeHomes();"><i class="fa fa-chevron-right"></i></div>
					<div class="mhs-slideshow-loader"><small>Loading</small></div>
					@for ( $h = 0; $h <= 3; $h++ )
					<div class="mhs-slide" id="slide-{{$h}}">
						<div class="card">
			                <div class="card-image">
			                    <img class="img-responsive" src="{{$img[$h]}}">
			                    
			                </div><!-- card image -->
			                
			                <div class="card-content">
			                    <span class="card-title">{{$title[$h]}}<br>
			                    	<small>{{$place[$h]}}</small></span>                    
			                </div><!-- card content -->

			            </div>
					</div>
					@endfor
				</div>
			</div>
		</div>
	</div>
	@endif




	<div class="row clearfix nudge white">
		<div class="col-md-6">
			<div class="page-header no-push">
				<h3>Latest communities</h3>
			</div>
			<div class="profile-container">
				@foreach($latest_communities as $community)
				@include('layouts.partial.community-block')
				@endforeach
			</div>
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
		<div class="col-md-12">
			<div class="page-header no-push no-border">
				<h3><span class="hidden-xs" aria-hidden="true">Explore manufactured housing by state</span><span class="visible-xs">Browse by state</span></h3>
			</div>
		</div>
		@if(Config::get('app.angular') == true || 1==1)
		<div ng-repeat="state in states" class="col-xs-12 col-sm-6 col-md-2b loctile">
			<a href="/explore/{[ state.abbr ]}">
				<span>{[state.title]}</span>
			</a>
		</div>
		@else
		@foreach($states as $state)
		<div class="col-xs-12 col-sm-6 col-md-2b loctile">
			<a href="{{ URL::route('state', array('state' => $state->abbr)) }}">
				<span>{{ $state->title }}</span>
			</a>
		</div>
		@endforeach
		@endif
	</div>
@stop

@section('incls-body')
	@if($welcomebox == true && 1==2)
	<!-- Modal -->
	<div class="modal fade" id="welcomebox" tabindex="-1" role="dialog" aria-labelledby="welcomeboxLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="welcomeboxLabel">Welcome to MHS America!</h4>
	      </div>
	      <div class="modal-body">
	        We'd like to take a moment to point you in the right direction. The menu at the top of the page will allow you to search for mobile home communities, mobile homes, vacant spaces and professional services. You can also use the map to browse the national MHS community.
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Thanks!</button>
	      </div>
	    </div>
	  </div>
	</div>
	@endif
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/mhs.interface.js"></script>
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/maps/jquery.vmap.usa.js"></script>
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/gdp-data.js"></script>
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
	</script>
@stop