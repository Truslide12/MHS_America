@extends('layouts.master')
@fix-navbar

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/profile.css">
	<link rel="stylesheet" type="text/css" href="/css/ticketsystem.css">
	<style type="text/css">
		.form-control {
			margin-bottom: 10px;
		}
		.form-group {
			text-align: right;
			font-size: 1.25em;
		}
		.control-label {
			padding-top: 2px;
		}
		.card-info {
			display: none;
		}
		.underline {
			text-align: left;
			border-bottom: 1px solid #ddd;
			margin-bottom: 5px;
			padding-bottom: 0px;
		}
		.total {
			font-weight: bold;
			color: orange!important;
		}
		.bold {
			font-weight: bold;
		}
	</style>
@stop

@section('content-above')
@include('getstarted.home.partial.header')
@stop

@section('content')
<div class="row white mb-0" >
	<div class="col-md-12">

<form id="orderform" class="form-horizontal" action="{{ URL::route('getstarted-home') }}/confirmorder" method="POST" role="form">
{{ csrf_field() }}

			<div class="panel heavypad">
				<!-- <div class="panel-heading">Current Location</div> -->
				<div class="panel-body">

					@include('layouts.partial.errors')
@php

	$plan = "Home Listing (6 Months)";
	$price = "$39.99";


@endphp

	            <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;">
	               <h4 style="font-weight: bold;font-size: 1.5em;"> <i class="fa fa- fa-thumbs-o-up"></i> Confirm your Order</h4>
	            </div>


							<div class="col-xs-12 col-sm-11"  style="padding: 15px;">
								<div class="col-md-12">

									<div class="form-group">
										<div class="col-md-3"></div>
										<div class="col-md-9 bold" style="background: #ccc!important;padding:5px;margin-bottom: 25px;">
											Order Summary
										</div>
									</div>


			      					<div class="form-group">
										<div class="col-md-3 bold">Item:</div>
										<div class="col-md-9 underline" style="margin-bottom: 40px;">
											{{ $plan }}
											<span class="pull-right bold">{{ $price }}</span>
										</div>
									</div>
			      					<div class="form-group" style="padding-left: 25%;">
										<div class="col-md-3">Community:</div>
										<div class="col-md-9 underline" style="margin-bottom: 40px;">{{ Session::get('order_data')['profile_data']['title'] }}</div>
									</div>
									<div class="form-group" style="padding-left: 25%;">
										<div class="col-md-3">Address:</div>
										<div class="col-md-9 underline">{{ Session::get('order_data')['profile_data']['address'] }}</div>
										@if ( Session::get('order_data')['profile_data']['addressb'] )
										<div class="col-md-3"></div>
										<div class="col-md-9 underline">{{ Session::get('order_data')['profile_data']['addressb'] }}</div>
										@endif
										<div class="col-md-3"></div>
										<div class="col-md-9 underline" style="margin-bottom: 40px;"> 
										{{ Session::get('order_data')['profile_data']['city']['place_name'] }}
										{{ strtoupper(Session::get('order_data')['profile_data']['state']['abbr']) }},
										{{ Session::get('order_data')['profile_data']['zipcode'] }}</div>
									</div>
									<div class="form-group" style="padding-left: 25%;">
										<div class="col-md-3">Space:</div>
										<div class="col-md-9 underline" style="margin-bottom: 40px;">{{ Session::get('order_data')['space'] }}</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-11">
								<div style="margin-top: 20px;padding: 25px 15px;">
									<div class="form-group">
										<div class="col-md-3 bold">Customer:</div>
										<div class="col-md-9 underline">{{  Session::get('order_data')['company_data']['title'] }}</div>
									</div>
									@if(1==2)
									<div class="form-group">
										<div class="col-md-3 bold">Sub Total:</div>
										<div class="col-md-9 underline">{{ $price }}</div>
									</div>
									<div class="form-group">
										<div class="col-md-3 bold">Tax:</div>
										<div class="col-md-9 underline">$1.34</div>
									</div>
									@endif
									<div class="form-group">
										<div class="col-md-3 bold">Total:</div>
										<div class="col-md-9 underline" style="background: #ccc!important;">
											<span class="pull-right bold">{{ $price }}</span>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-3"></div>
										<div class="col-md-9" style="background: #eee!important;text-align: left;">
										
											<input type="checkbox" name="auth-to-list" id="auth-to-list" value="1"> 
						                	 I am Authorized to List this Home

										</div>
									</div>
									<div class="form-group">
										<div class="col-md-3"></div>
										<div class="col-md-9" style="background: #eee!important;text-align: left;">
										
											<input type="checkbox" name="agree-to-terms" id="agree-to-terms" value="1"> 
						                	I agree to and accept the <a href="{{ URL::route('page', array('slug' => 'terms')) }}" tabindex="5">terms of use</a>
						                	and <a href="{{ URL::route('page', array('slug' => 'privacy')) }}" tabindex="6">privacy policy</a>

										</div>
									</div>

									<div class="form-group">
										<div class="col-md-3"></div>
										<div class="col-md-9" style="padding: 0;">
											<button class="btn btn-success hardstop" style="margin-top: 10px;width: 100%;">Continue to Payment</button>
										</div>
									</div>


									<div class="clearfix"></div>
								</div>
							</div>

				</div>
			</div>

		</form>
	</div>
</div>
@stop

@section('incls-body')
<script type="text/javascript">
	function setCardInfo() {
		$(".card-info").show();
	}

	$('#orderform').one('submit', function() {
    	$(this).find('.hardstop').attr('disabled','disabled');
	});
</script>
@stop