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




		.heavypad { background:none;margin: 25px 80px; }
		@media (max-width: 768px) { 
				.receipt_box {
					padding: 0px;
				}
				.sidead {
					display: none;
				}
				.heavypad { background:none;margin: 5px 8px; }
		}
	</style>
@stop

@section('content-above')
@include('getstarted.community.partial.header')
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


						@if(array_key_exists('transaction_data', Session::get("order_data")))
							<h3 class="cool">Payment Success!</h3><hr class="hr-blue">
							Welcome to MHS America! Your community profile has been created, and you can now begin expanding on your profile.<br><br>
						@else
							<h3 class="cool">Success!</h3><hr class="hr-blue">
							Welcome to MHS America! Your community profile has been created, and you can now view your profile.<br><br>
						@endif



							<div style="margin:10px 20px;">
								@if(array_key_exists('transaction_data', Session::get("order_data")))
								<div style="width: 100%;border-bottom: 1px solid black;font-weight: bold;margin-bottom: 4px;">Payment Receipt</div>
								<strong>You Paid:</strong> ${{ (Session::get("order_data")['transaction_data']['transaction_total']/100)  }}<br>
								<strong>Transaction Code:</strong> {{ Session::get("order_data")['transaction_data']['transaction_code']  }}<br>
								@else
								@endif
								<br>
								<div style="width: 100%;border-bottom: 1px solid black;font-weight: bold;margin-bottom: 4px;">Address:</div>
								{{ Session::get("order_data")['community-name']  }} 
								<br>
								{{ Session::get("order_data")['community-address1']  }} {{ Session::get("order_data")['community-address2']  }} 
								<br>
								{{ Session::get("order_data")['city_data']['place_name']  }} {{ strtoupper(Session::get("order_data")['state_data']['abbr'])  }}, {{ Session::get("order_data")['community-zip']  }}

								<br><br>

						@if(array_key_exists('transaction_data', Session::get("order_data")))
							<a href="{{ URL::route('editor', array('profile' => Session::get('order_data')['profile_data']->id, 'from_company' => Session::get('order_data')['company_data']->id)) }}" class="btn btn-success btn-sm btn-align-fix" style="font-size: 1.5em;width:100%;padding: 10px;">Please Add Park Details</a>
						@else
							<a href="{{ URL::route('profile', array('profile' => Session::get('order_data')['profile_data']->id)) }}" class="btn btn-success btn-sm btn-align-fix" style="font-size: 1.5em;width:100%;padding: 10px;">View Park Profile</a>
						@endif
								

								@if(1==2)
								<div style="width: 100%;border-bottom: 1px solid black;font-weight: bold;margin-bottom: 4px;">Quick Links</div>
								<ul>
									<li><a target="_blank" href="{{ URL::route('profile', array('profile' => Session::get('order_data')['profile_data']->id)) }}">View Profile Here</a></li>
									<li><a target="_blank" href="{{ URL::route('editor', array('profile' => Session::get('order_data')['profile_data']->id, 'from_company' => Session::get('order_data')['company_data']->id)) }}">Edit Profile Here</a></li>
									<li><a target="_blank" href="{{ URL::route('editor-spaces', array('profile' => Session::get('order_data')['profile_data']->id, 'from_company' => Session::get('order_data')['company_data']->id)) }}">Manage Vacant Spaces</a></li>
									<li><a target="_blank" href="{{ URL::route('editor-homes', array('profile' => Session::get('order_data')['profile_data']->id, 'from_company' => Session::get('order_data')['company_data']->id)) }}">Purchase Home Listings</a></li>
								</ul>
								@endif

							</div>
						</div>
					</div>
					<div class="col-md-5" style="border-left: 1px solid #eee;">
						@if(array_key_exists('transaction_data', Session::get("order_data")))
						@include('getstarted.community.partial.receipt_ads.thankyoupromo')
						@else
						@include('getstarted.community.partial.receipt_ads.upgradepromo')
						@endif
					</div>
				</div>


				</div>
			</div>


	</div>
</div>
@php
		Session::forget("order_data");
		Session::forget("active_step");
		Session::forget("plan");
		Session::forget("product");
		Session::forget("profile_id");
		Session::forget("is_upgrade");
@endphp
@stop