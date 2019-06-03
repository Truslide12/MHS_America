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
		#newx {
			color: red;
		}
		#newx:hover {
			color: firebrick;
			cursor: pointer;
		}
	</style>
@stop

@section('content-above')
@include('getstarted.home.partial.header')
@stop

@section('content')
<div class="row white mb-0" >
	<div class="col-md-12">

<form class="form-horizontal" action="{{ URL::route('getstarted-home') }}/submitpayment" method="POST" role="form"  id="payment-form">
{{ csrf_field() }}

			<div class="panel heavypad">
				<!-- <div class="panel-heading">Current Location</div> -->
				<div class="panel-body">
					@include('layouts.partial.errors')

	            <div class="col-xs-12 col-sm-12 text-left source-select" style="border-bottom: 2px solid #eee;padding: 10px;">
	               <h4 style="font-weight: bold;font-size: 1.5em;"> <i class="fa fa-credit-card"></i> Choose a Payment Source</h4>
	            </div>


			      			<div class="col-xs-12 col-sm-11 source-select" style="padding: 15px;">
								<div class="form-group">
									<label class="control-label col-md-3">Payment Source</label>
									<div class="col-md-9">
										<select name="payment_source" id="payment_source" class="form-control" onchange="updateSource(this.value);" >
											<option value="0">Select a Payment Source...</option>
											@php
												$company = \Company::where('id', Session::get('order_data')['company_data']->id)->first();
											@endphp
											@foreach( $company->paysources as $src )
											  <option id="{{$src->id}}" value="{{$src->id}}">{{$src->card_nickname}} ({{$src->card_brand}} ···· ···· ···· {{$src->card_last_four}}) </option>
	            							@endforeach
	            							@if ( count($company->paysources) == 0 )
	            							  <option id="" value="0" disabled>No Sources Saved</option>
	            							@endif
										</select>
										<a onclick="setCardInfo();" id="addsource_link" style="cursor: pointer;">Add a Payment Source</a>
									</div>
								</div>
							</div>



	            <div class="col-xs-12 col-sm-12 text-left card-info" style="display:flex;align-content: space-between;justify-content:space-between;align-items: flex-start;border-bottom: 2px solid #eee;padding: 10px;">
	               <h4 style="font-weight: bold;font-size: 1.5em;"> <i class="fa fa-plus"></i> Setup New Source</h4>
	               <h4 style="display: none;" id="newx" onclick="reset();" style="cursor: pointer;"><i class="fa fa-times-circle" style=""></i></h4>
	            </div>

							<div class="col-xs-12 col-sm-11 card-info"  style="padding: 15px;">
								<div class="col-md-12">
								<div class="form-group">
									<label class="control-label col-md-3">Business Account</label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="company" id="company" value="{{Session::get('order_data')['company_data']->title}}" disabled>
									</div>
								</div>
									@if ( $user->companies->where('id', Session::get('order_data')['company_data']['id'])->first()->stripe_customer_id == null)
									  <div class="form-group">
									    <label class="col-md-3 control-label" for="card-element" style="background: none;">
									      Billing Email
									    </label>
									    <div class="col-md-9 clearfix" style="background: none;font-size: 1.2em;">
									    	<input type="email" class="form-control" name="billing-email" placeholder="Receipts will be sent here">
									    </div>
									  </div>
									@endif
									  <div class="form-group">
									    <label class="col-md-3 control-label" for="card-element" style="background: none;">
									      Source Name
									    </label>
									    <div class="col-md-9 clearfix" style="background: none;font-size: 1.2em;">
									    	<input type="text" class="form-control" name="source-name" placeholder="Nickname for this source (optional)">
									    </div>
									  </div>
									  <div class="form-group">
									    <label class="col-md-3 control-label" for="card-element" style="background: none;">
									      Card Details
									    </label>
									    <div class="col-md-9 clearfix" style="background: none;font-size: 1.2em;">
									    	<div class="form-control">
									      	<div id="card-element">
									      	<!-- A Stripe Element will be inserted here. -->
									    	</div>
									    	</div>

									    </div>
									  </div>
									  <div class="form-group clearfix">
									    <!-- Used to display Element errors. -->
									    <div class="col-md-12" id="card-errors" role="alert"></div>
									  </div>
								</div>
							</div>

			      			<div class="col-xs-12 col-sm-11 source-select" id="subbtn" style="padding: 15px;">
								<div class="form-group">
									<div class="col-md-3">
										
									</div>
									<div class="col-md-9">
										<button id="finishbtn" class="btn btn-success hardstop" style="width: 100%;" disabled="true">Process Payment</button>
									</div>
								</div>
							</div>
				</div>
			</div>




	</div>
</div>
@stop

@section('incls-body')
<script src="https://js.stripe.com/v3/"></script>

<script type="text/javascript">
var stripe = Stripe('pk_test_IrZDwdNxdAQ8eS0M5RVMx9sP');
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
var style = {
  base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: "#32325d",
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});


// Handle form submission
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {

  if ( $('#payment_source').val() != 0 ) { $("#finishbtn").attr("disabled", true); return; }
  $("#finishbtn").attr("disabled", true);
  event.preventDefault();
  
  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server
      stripeTokenHandler(result.token);
    }
  });
});

function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}

	function setCardInfo() {
		$(".card-info").show();

		$('#payment_source').prop("disabled", true).val($('#payment_source option:first').val());
		$("#addsource_link").hide();
		//$(".source-select").hide();
		$("#finishbtn").html("Add New Source").attr("disabled", false);
		$("#newx").show();
	}

	function updateSource(value) {
		if ( value > 0 ) {
			$("#finishbtn").attr("disabled", false);
		} else {
			$("#finishbtn").attr("disabled", true);
		}
	}

	function reset() {
		$(".card-info").hide();
		$('#payment_source').prop("disabled", false).val($('#payment_source option:first').val());
		$("#addsource_link").show();
		$("#finishbtn").html("Process Payment").attr("disabled", true);
		$("#newx").hide();
	}
</script>
@stop