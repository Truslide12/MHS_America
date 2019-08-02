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

		.receipt_box {
			padding: 10px 20px;
			background: none; /*#dbe8ff;*/
			border: 0px solid #6380b2;
			border-radius: 8px!important;
		}
		.cool {
			font-family: 'Lato', 'Droid Sans', 'Open Sans', 'Dejavu Sans', Arial, sans-serif;
			color: #31708f;
			line-height: 1.42857143;
			font-size: 2.8em;
			margin: 0;
			padding: 0;
		}
		.hr-blue {
			margin-top: 0;
			border-color: #31708f;
		}
		.sidead {
			height: 50vh;
			background: url('/img/stockphotos/bird-s-eye-view-daylight-environment-1192653.jpg');
			background-size: 100% auto;
			text-align: center;
			padding-top: 10px;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			align-items: center;
			color: #000;
			border: 1px solid #ccc;
		}
		h4 {
			color: #ccc;
			font-weight: bold;
			font-size: 1.2em;
		}



		
	</style>
@stop

@section('content-above')
@include('getstarted.home.partial.header')
@stop

@section('content')
<div class="row white mb-0" >
	<div class="col-md-12">


			<div class="panel heavypad">
				<!-- <div class="panel-heading">Current Location</div> -->
				<div class="panel-body">
				<div class="row">
					<div class="col-md-7">
						<div class="receipt_box">
							<h3 class="cool">Success!</h3><hr class="hr-blue">

<p>The staff of MHS America would like to thank you for choosing to list your home on our platform. Your new listing is set to Pivate and not yet visible to the public. Once you complete your home listing, set the status from Private to Active.</p><br>


							<div style="margin:10px 20px;">
							<div style="width: 100%;border-bottom: 1px solid black;font-weight: bold;margin-bottom: 4px;">Payment Receipt</div>
							<strong>You Paid:</strong> ${{ (Session::get("order_data")['transaction_data']['transaction_total'] / 100) }}<br>
							<strong>Transaction Code:</strong> {{ Session::get("order_data")['transaction_data']['transaction_code'] }}<br>

							@if(1==2)
							<br>
							<div style="width: 100%;border-bottom: 1px solid black;font-weight: bold;margin-bottom: 4px;">Address:</div>
							{{ Session::get('order_data')['profile_data']['title'] }}
							<br>
							{{ Session::get('order_data')['profile_data']['address'] }} {{ Session::get('order_data')['profile_data']['address2'] }} 
							<br>
							{{ Session::get("order_data")['profile_data']['city']['place_name']  }} {{ strtoupper(Session::get("order_data")['profile_data']['state']['abbr'])  }}, {{ Session::get('order_data')['profile_data']['zipcode'] }}
							@endif

							</div>
						</div>
						@php
							$pid = Session::get('order_data')['profile_data']->id;
							$cid = Session::get('order_data')['company_data']->id;
							$hid = Session::get('order_data')['home_data']->id;
						@endphp
						<a href="{{ URL::route('editor-edithome', array('profile' => $pid, 'home' => $hid)) }}" class="btn btn-success" style="width: 100%;padding: 20px;margin-top: 50px;">Continue to Home Editor</a>
					</div>
					<div class="col-md-5" style="border-left: 1px solid #eee;">
						@include('getstarted.home.partial.receipt_ads.upcomingpromo')
					</div>
				</div>


				</div>
			</div>


	</div>
</div>
@php
		//Session::forget("order_data");
		//Session::forget("active_step");
		//Session::forget("plan");
@endphp
@stop