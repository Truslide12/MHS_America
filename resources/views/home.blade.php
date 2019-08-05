@extends('layouts.master')

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/home.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/cardscroller.css">
@stop



@section('content-above')
<div id="profile-header" class="container content" style="border-bottom:0px;">
	@if(1==2)
	<div class="row texture-1">
		<div class="col-md-12">
			<h2>
				{{ $home->title }}
				<small>
					<br class="visible-xs">
					<a href="@{{ URL::route('city', array('state' => $state->abbr, 'county' => $county->name, 'city' => $city->name)) }}">
						{{ $home->city->place_name }}, {{ strtoupper($home->state->abbr) }}
					</a>
				</small>
			</h2>
		</div>
	</div>
	<div class="row texture-1">
		<div style="max-width: 100%;max-height: 30vh;overflow-x: scroll;overflow-y: hidden;" class="col-md-12">
			<div style="width:  @php
								  echo (count(json_decode($home->photos)) - 1 ) * 400;
								  echo "px";
								@endphp"> 
			@foreach( json_decode($home->photos) as $photo )
			 @if( property_exists($photo, "url") )
				<img style="max-height: 30vh;" src="{{ $photo->url }}">
			 @endif
			@endforeach
			</div>
		</div>
	</div>
	@endif
	@if(1==2)
	<div class="row clearfix nudge texture-1">
		<div class="col-md-12">
			<div class="page-header no-margin-t">
				<div class="mhs-slideshow">
					<div class="mhs-slide-left-btn" onclick="changeHomes();"><i class="fa fa-chevron-left"></i></div>
					<div class="mhs-slide-right-btn" onclick="changeHomes();"><i class="fa fa-chevron-right"></i></div>
					<div class="mhs-slideshow-loader"><small>Loading</small></div>
					@for ( $h = 1; $h <= 4; $h++ )
					@php
						$ph = json_decode($home->photos);
						//print_r($ph);
					@endphp
					<div class="mhs-slide" id="slide-{{$h}}">
						<div class="card">
			                <div class="card-image">
			                    <img class="img-responsive" src="{{$ph[$h]->url}}">
			                    
			                </div><!-- card image -->
			                
			                <div class="card-content">
			                    <span class="card-title">{{$ph[$h]->tag}}<br>
			                    	<small>{{$home->place[$h]}}</small></span>                    
			                </div><!-- card content -->

			            </div>
					</div>
					@endfor
				</div>
			</div>
		</div>
	</div>
	@endif


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
		#backdropimg {
			max-height: 90vh;
			max-width: 90vw;
		}
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

		.location_block {
			width: 40%;
			display: inline-block;
		}
 
 		.mobo_price {
 			display: none;
 		}

 		.price_box {
 			text-align:center;
 			width:calc(100% - 40px);
 			font-size: 2.5em;
 			background: transparent;
 			border-bottom:1px solid #8e8e8b;
 			border-radius:0px!important;
 			padding: 15px 10px;
 			margin: 0px auto 35px auto;
 			color:#147aba;
 		}
@media only screen and (max-width: 800px) {
  .cotw-img,
  .price_box,
  .home_info_box {
    display: none;
  }
	.location_block {
			width: 100%;
			display: inline-block;
	}
	.mobo_price {
		display: block;
		float: right;
	}
	.backdrop {

	}
	#backdropimg {
		height: auto;
		width: 90vw;
	}
	.backdropimg::before {
		width: 50px;
		height: 50px;
		/*top: 50vh;
		left: initial;
		right: calc(85vw - 22vw);*/
		left: -55px;	
	}
	.backdropimg::after {
		width: 50px;
		height: 50px;
		/*top: 50vh;
		right: calc(35vw - 22vw);*/
		right: -55px;
	}
}

		</style>
		<div class="backdrop" id="backdrop" style="display: none;" xonclick="releaseBackdrop();">
			<div class="backdropimg">
			<img id="backdropimg" src="{{ $home->default_photo()->url }}">
			</div>
		</div>
		<div style="margin: 0px -15px 0px -15px;font-size: 1.2em;background:none;">
			<img src="{{ $home->default_photo()->url }}" class="cotw-img" style="float:left;margin:25px;margin-top: 15px;">
			<div style="padding-top: 0px;">
			<h3 style="width: 100%;background:#0163b2;color:snow;padding: 7px;margin: 0px;">{{ $home->title }} <span class="mobo_price">${{ number_format($home->price) }}<span></h3>
			<div class="cotw-under" style="width: 100%;background:#005499;color:snow;padding: 7px;font-size: 0.8em;margin:0px;">
				<div style="width: 100%;">
					<h4 class="location_block" style="">{{ $home->profile->title }} | {{ $home->city->place_name }}, {{ strtoupper($home->state->abbr) }} {{ $home->zipcode }}</h4>
				</div>
			</div>

			<p style="padding: -50px 100px 20px 100px;overflow:hidden;">
				
				<div class="mhs-slideshow" style="max-width: calc(100% - 344px);float:left;position: relative;z-index: 0;">
					<!--
					<div class="mhs-slide-left-btn" onclick="changeHomes();"><i class="fa fa-chevron-left"></i></div>
					<div class="mhs-slide-right-btn" onclick="changeHomes();"><i class="fa fa-chevron-right"></i></div>
					<div class="mhs-slideshow-loader"><small>Loading</small></div>
				-->
					@php
						$ph = json_decode($home->photos, true);
						if ( is_array($ph) || is_object($ph) ) {
							$pc = count($ph);
						} else {
							$pc = 0;
						}

						//print_r($ph);
					@endphp
					@for ( $h = 1; $h <= $pc; $h++ )
					<div class="mhs-slide" id="slide-{{$h}}">
						<div class="card">
			                <div class="card-image">
			                    <img id="photo{{$h}}" class="img-responsive" src="{{$ph[$h]['url']}}" onclick="popBackdrop(this.id);">
			                    
			                </div><!-- card image -->
			                
			                <div class="card-content">
			                    <span class="card-title">{{$ph[$h]['tag']}}<br>
			                    	<small>aaa</small></span>                    
			                </div><!-- card content -->

			            </div>
					</div>
					@endfor
				</div>


			</p>
			<div style="clear: all;padding-bottom: 1in;"></div>
			</div>
		</div>


	</div>
</div><div class="row about texture-1" style="padding-top: 20px;">
	<div class="col-lg-8" style="padding: 0px 40px;">
		<h3><i class="fa fa-home"></i> About this home</h3>
		<div style="text-align: right;color:#4a879e;font-size: 1.25em;margin-bottom: 7px;">{{ $home->year }} {{ $home->brand }} {{ $home->model }} &middot; {{ $home->beds }} Bedrooms &middot; {{ $home->baths }} Baths &middot; <span style="white-space: nowrap;">Approx {{ $home->square_footage }} sqft</span></div>
		
		<p style="font-size: 1.4em;">
			{{ $home->description }}
		</p>
			


		<hr>

		<h3><i class="fa fa-cog"></i> Features</h3>
		<div class="row" style="font-size: 1.4em;">
			@if( $home->CountFeatures() > 0 )
			<div class="col-sm-4">
				<ul>
					@foreach( $home->getFeatures() as $feature )
						<li>{{ $home->getFeature( $feature )->title }}</li>
						@if( $loop->iteration % Max(1,floor($home->CountFeatures()/3)) == 0 )
				</ul>
			</div>
			<div class="col-sm-4">
				<ul>
						@endif

					@endforeach
				</ul>
			</div>
			@endif
		</div>
		<hr>
		<h3><i class="fa fa-plug"></i> Appliances</h3>
		<div class="row" style="font-size: 1.4em;">
			<div class="col-sm-4">
				<ul>
					@foreach( $home->getAppliances() as $appliance )
						<li>{{ $home->getAppliance( $appliance )->title }}</li>
						@if( $loop->iteration % Max(1,floor($home->CountAppliances()/3)) == 0 )
				</ul>
			</div>
			<div class="col-sm-4">
				<ul>
						@endif

					@endforeach
				</ul>
			</div>

		</div>
		<hr>
		<h3><i class="fa fa-wrench"></i> Build Information</h3>
		<div class="row build-opts" style="font-size: 1.4em;">
			<div class="col-md-6">
				<ul>
					<li><strong>Siding:</strong> {{ $home->build_specs("siding")->title }}</li>
					<li><strong>Roof Material:</strong> {{ $home->build_specs("roof_mat")->title }}</li>
					<li><strong>Windows:</strong> {{ $home->build_specs("windows")->title }}</li>
					<li><strong>Kitchen Floors:</strong> {{ $home->build_specs("kitchen_floor")->title }}</li>
					<li><strong>Setup:</strong> {{ $home->build_specs("setup")->title }}</li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul>
					<li><strong>Skirting:</strong> {{ $home->build_specs("skirting")->title }}</li>
					<li><strong>Roof Angle:</strong> {{ $home->build_specs("roof_angle")->title }}</li>
					<li><strong>Ext. Wall Thickness:</strong> {{ $home->build_specs("wall_thickness")->title }}</li>
					<li><strong>Other Floors:</strong> {{ $home->build_specs("floor")->title }}</li>
					<li><strong>Earthquake Strap:</strong> {{ $home->build_specs("strap")->title }}</li>
				</ul>
			</div>
		</div>

	</div>
	<div class="col-lg-4"  style="padding-top: 45px;">

		<div class="" style="background: #fefefe;padding: 25px 20px;border:1px solid #dedede;border-radius:5px!important;position: relative;">

			<div class="price_box">${{ number_format($home->price) }}</div>
			@include('layouts.partial.errors')
			<form name="" action="{{  URL::route('home-contact', array('home' => $home->id)) }}" method="post">
				{!! csrf_field() !!}

			<strong style="font-size: 1.5em;">Contact the Seller</strong><br>
			<div class="" style="margin-bottom: 3px;">
				<input name="name" type="text" placeholder="Your Name" class="form-control" value="{{Input::old('name')}}">
			</div>
			<div class="" style="margin-bottom: 3px;">
				<input name="phone" type="text" placeholder="Phone Number" class="form-control" value="{{Input::old('phone')}}">
			</div>
			<div class="" style="margin-bottom: 3px;">
				<input name="email" type="text" placeholder="Email Address" class="form-control" value="{{Input::old('email')}}">
			</div>
			<div class="" style="margin-bottom: 3px;">
				 <textarea name="message" placeholder="Message" class="form-control">{{Input::old('message')}}</textarea>
			</div>
			<div class="" style="margin-bottom: 3px;text-align: right;">
				<button class="btn btn-success">Send Message</button>
			</div>
			</form>
			<hr>

			<strong style="font-size: 1.5em;">Seller Information</strong><br>

			@php
				$seller = (object)json_decode( $home->seller_info );
				//dd($home->seller_info, $seller);
			@endphp

			@if( property_exists($seller, 'company') )
			@if($seller->company != '')
			<div class="" style="font-size: 1.2em;margin-bottom: 5px;">
				<strong>Company:</strong> {{ $seller->company }}
			</div>
			@endif
			@endif
			@if( property_exists($seller, 'name') )
			@if($seller->name != '')
			<div class="" style="font-size: 1.2em;margin-bottom: 5px;">
				<strong>Name:</strong> {{ $seller->name }}
			</div>
			@endif
			@endif
			@if( property_exists($seller, 'phone') )
			@if($seller->phone != '')
			<div class="" style="font-size: 1.2em;margin-bottom: 5px;">
				<strong>Phone:</strong> {{ $seller->phone }}
			</div>
			@endif
			@endif

			@if( property_exists($seller, 'phone2') )
			@if($seller->phone != '')
			<div class="" style="font-size: 1.2em;margin-bottom: 5px;">
				<strong style="visibility: hidden;">Phone:</strong> {{ $seller->phone2 }}
			</div>
			@endif
			@endif
			@if( property_exists($seller, 'phone3') )
			@if($seller->phone != '')
			<div class="" style="font-size: 1.2em;margin-bottom: 5px;">
				<strong style="visibility: hidden;">Phone:</strong> {{ $seller->phone3 }}
			</div>
			@endif
			@endif


			@if( property_exists($seller, 'addr') )
			@if($seller->addr != '')
			<div class="" style="font-size: 1.2em;margin-bottom: 5px;">
				<strong>Address:</strong> {{ $seller->addr }}
			</div>
			@endif
			@endif
			@if( property_exists($seller, 'email') )
			@if($seller->email != '')
			<div class="" style="font-size: 1.2em;margin-bottom: 5px;">
				<strong>Email:</strong> {{ $seller->email }}
			</div>
			@endif
			@endif
			@if( property_exists($seller, 'license') )
			@if($seller->license != '')
			<div class="" style="font-size: 1.2em;margin-bottom: 5px;">
				<strong>License:</strong> {{ $seller->license }}
			</div>
			@endif
			@endif
			<hr>
			<div class="home_info_box">
			<strong style="font-size: 1.5em;">Home Information</strong><br>
			<div class="" style="font-size: 1.2em;margin-bottom: 5px;">
				<strong>Make:</strong> {{ $home->brand }} 
			</div>
			<div class="" style="font-size: 1.2em;margin-bottom: 5px;">
				<strong>Model:</strong> {{ $home->model }}
			</div>
			<div class="" style="font-size: 1.2em;margin-bottom: 5px;">
				<strong>Year:</strong> {{ $home->year }}
			</div>
			<div class="" style="font-size: 1.2em;margin-bottom: 5px;">
				<strong>Size:</strong> {{ $home->size() }}-Wide
			</div>
			<div class="" style="font-size: 1.2em;margin-bottom: 5px;">
				<strong>Bedrooms:</strong> {{ $home->beds }} 
			</div>
			<div class="" style="font-size: 1.2em;margin-bottom: 5px;">
				<strong>Baths:</strong> {{ $home->baths }} 
			</div>
			</div>
		</div>
 

		<div class="row texture-1" style="padding-top: 20px;">
			<div class="col-md-12 padding-b" style="text-align: right;">
					@if(Auth::check())
						{{ csrf_field() }}
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
						@if(1==2)
						<a href="{{ URL::route('home-contact', array('home' => $home->id)) }}" class="btn btn-default">
							Send Message
						</a>
						<p class="watch-home-{{ $home->id }}-count text-muted margin-t-10 no-margin-b">{{ ($home->watchers()->count() == 0) ? 'Nobody' : (($home->watchers()->count() == 1) ? '1 user' : $home->watchers()->count().' users') }} watching</p>
						@endif
					@else
					<p>
						<a href="{{ URL::route('account-login') }}">Sign in</a> to contact seller or watch home.
					</p>
					@endif
			</div>
		</div>

	</div>


</div>
@stop

@section('incls-body')
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/mhs.interface.js"></script>
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/mhs.homes.js"></script>
<script type="text/javascript">
		function changeHomes()
		{
			$(".mhs-slideshow-loader").show();
			$(".mhs-slideshow").css({"min-height": $(".mhs-slideshow").outerHeight()+"px" });
			$("#slide-4, #slide-1, #slide-2, #slide-3").fadeOut(800, function(){

				setTimeout(reloadSlides, 100);

			});

		}
		function reloadSlides() {
			$(".mhs-slideshow-loader").fadeOut(500);
			$("#slide-4, #slide-1, #slide-2, #slide-3").fadeIn(800);
		}

		function releaseBackdrop(){
			$(".backdrop").hide();
		}

		function popBackdrop(id){
			if( isNaN(id) ) { id = id.slice(5); }
			console.log("id", id)
			active_slide = parseInt(id);
			console.log("active_slide",active_slide)
			$("#backdropimg").attr("src", photos[active_slide]);
			$(".backdrop").show();
		}

		function moveNextImg() {
			console.log("movenxt")
			if ( active_slide >= photos.length-1 ){ 
				nextid = 1;
			} else {
				nextid = active_slide+1;
			}

			popBackdrop(nextid);
		}

		function movePrevImg() {
			console.log("moveprv")
			if ( active_slide <= 1 ){ 
				previd = photos.length-1;
			} else {
				previd = active_slide-1;
			}
			 popBackdrop(previd);
		}

		function init() {
			if ( $(window).width() > 800 ) {
				//
			} else {
				$(".mhs-slideshow").css({"max-width": "100%","min-width": "100%"});
			}

			bd = document.getElementById("backdrop");
			img = document.getElementById("backdropimg");

			bd.addEventListener('click', function (e) {
				is = bd.getBoundingClientRect();
			    if (e.offsetX > img.offsetWidth) {
			        console.log("off");
			        moveNextImg();
			    } else {
				    if (e.offsetX < (img.offsetWidth-img.width) ) {
				        console.log("off");
				        movePrevImg();
				    } else {
				        console.log("on");
				        releaseBackdrop();
				        return;
				    }
			    }
			});

		}




		var photos = Array();
		var active_slide = 1;
		@foreach( json_decode($home->photos) as $photo )
		 @if( property_exists($photo, "url") )
			photos[{{$loop->iteration}}] = "{{ $photo->url }}";
		 @endif
		@endforeach


		init()
</script>
@stop