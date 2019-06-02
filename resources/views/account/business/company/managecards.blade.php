@extends('layouts.business')
@section('incls-head')
	<script src="https://js.stripe.com/v3/"></script>
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<style>
		/**
		 * The CSS shown here will not be introduced in the Quickstart guide, but shows
		 * how you can use CSS to style your Element's container.
		 */
		.StripeElement {
		  background-color: white;
		  height: 40px;
		  padding: 10px 12px;
		  border-radius: 4px;
		  border: 1px solid transparent;
		  box-shadow: 0 1px 3px 0 #e6ebf1;
		  -webkit-transition: box-shadow 150ms ease;
		  transition: box-shadow 150ms ease;
		}

		.StripeElement--focus {
		  box-shadow: 0 1px 3px 0 #cfd7df;
		}

		.StripeElement--invalid {
		  border-color: #fa755a;
		}

		.StripeElement--webkit-autofill {
		  background-color: #fefde5 !important;
		}
		.modal-content { margin-top: 20%; }
		.modal-header .close { float: right; }



		.card-interface {
			background: rgb(119,141,237);
			background: linear-gradient(180deg, rgba(119,141,237,.8) 0%, rgba(80,129,205,.8) 100%);
			border: 1px solid #7a95c1;
			border-radius: 10px!important;
			padding: 15px 20px;
			margin-bottom: 10px;
			font-family: 'Voltaire';

		}

		.default-card {
			background: linear-gradient(90deg, rgba(89,111,207,1) 0%, rgba(50,99,175,1) 100%);
		}

		.card-interface .card-name,
		.card-interface .card-number,
		.card-interface .card-brand {
			font-size: 1.5em;
			margin-bottom: 6px;
			text-align: right;
			width: 100%;
			color: #ccc;
			border-bottom: 1px solid #bbb;
		}

		.card-interface .card-brand {
			margin-bottom: 22px;
		}

		.card-interface .card-name strong,
		.card-interface .card-number strong,
		.card-interface .card-brand strong {
			padding-right: 20px;
			float: left;
			color: #eee;
			font-weight: normal;
		}

		.card-interface .btn {
			font-size: 1.2em;
		}

		.card-add {
			display: flex;
			align-content: center;
			align-items: center;
			justify-content: center;
			background: red;
			height: 196px;
			background: rgb(119,141,237);
			background: linear-gradient(180deg, rgba(119,141,237,1) 0%, rgba(80,129,205,1) 100%);
			border: 1px solid #7a95c1;
			border-radius: 10px!important;
			padding: 15px 20px;
			margin-bottom: 10px;
			font-family: 'Voltaire';
		}
		.card-add a,
		.card-add a:hover {
			margin: auto;
			text-align: center;
			color: #eee;
			font-size: 1.5em;
			text-decoration: none;
		}


		.StripeElement {
			display: block;
		    width: 100%;
		    height: 34px;
		    padding: 6px 12px;
		    font-size: 14px;
		    line-height: 1.42857143;
		    color: #555555;
		    background-color: #fff;
		    background-image: none;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
		}

	</style>
	<div id="cover2" class="" style="display:none;position: absolute;top:0;bottom:0;left:0;right:0;background:rgba(0,0,0,.8);z-index:50;"></div>
	<div id="cover" class="" style="display:none;position: absolute;top:35%;bottom:35%;left:35%;right:35%;background:#ececec;z-index:100;justify-content: center;align-content:center;align-items: center;font-size: 2em;font-family: Voltaire;text-align: center;">Processing Request<br>Please Hold</div>

@stop

@section('heading')
<h3>Business Center</h3>
<h4>
	<a href="{{ URL::route('account-business-company', ['company' => $company->id]) }}">{{ $company->title }}</a>
	<span class="text-muted"><i class="fa fa-chevron-right" style="margin:0px 5px;"></i></span> Billing
	<span class="text-muted"><i class="fa fa-chevron-right" style="margin:0px 5px;"></i></span> Manage Cards
</h4>
@stop









@section('businesscontent')
<div class="row white">
	<div class="col-md-12">
		<div class="pull-right margin-t no-margin-xs">
			<a class="btn btn-default btn-align-fix" href="{{ URL::route('account-business-company-billing', array('company' => $company->id)) }}">Back<span class="hidden-xs"> to Billing</span></a>
		</div>
		<h3>Manage Company Cards</h3>
		<p>&nbsp;</p>
	</div>
</div>

<div class="row white">
	<div class="col-md-12">

		<div class="alert alert-info" role="alert">
			<i class="fa fa-exclamation-circle"></i> <strong>Reminder:</strong>
			<br>
			<ul>
  			 <li>All automatic renewals will be processed with the default card on file at time of renewal.</li>
			</ul>
		</div>

		<div class="row cardholder">
			@foreach($company->paysources as $source)
			  <div class="col-md-4 clearfix">
			  	<div class="card-interface @if($source->is_default) default-card @endif">
			  		<div class="card-name"><strong>Nickname:</strong> {{ $source->card_nickname }}</div>
			  		<div class="card-number"><strong>Card Number:</strong> ···· ···· ····· {{ $source->card_last_four }}</div>
			  		<div class="card-brand"><strong>Card Brand:</strong> {{ $source->card_brand }}</div>
			  		<a href="manage-cards/remove/{{ $source->id }}" class="btn btn-danger hardstop" @if($source->is_default) disabled @endif>Remove</a>
			  		<a href="manage-cards/default/{{ $source->id }}" class="btn btn-success hardstop" @if($source->is_default) disabled @endif>@if($source->is_default) Default @else Set Default @endif</a>
			  	</div>
			  </div>
			@endforeach
			  <div class="col-md-4 clearfix">
			  	<div class="card-add">
			  		<a href="#" onclick="addCard();">Add Card</a>
			  	</div>
			  </div>
		</div>
	</div>
</div>
@stop















@section('incls-body')


<!-- Payment Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title text-info">Add a Card</h3>
      </div>
      <div class="modal-body">
		<form action="manage-cards/create" method="post" id="payment-form">
			<h5 class="text-muted margin-b-10">Enter your billing information</h5>
			<div class="form-row" style="padding: 2rem;">

				@if($company->stripe_customer_id == null)

					<label class="control-label" style="background: ;font-size: 14px;font-weight: 300;">Billing Email (required)</label>
					<input type="text" class="form-control" id="billing-email" name="billing-email">
					<hr>
				@endif

					<label class="control-label" style="font-weight: 300;font-size: 14px;">Nickname (optional)</label>
					<input type="text" class="form-control" id="source-name" name="source-name" placeholder="Nickname for this card">
					<hr>

			    <label for="card-element">
			      Credit or debit card
			    </label>
			    <div id="card-element">
			      <!-- a Stripe Element will be inserted here. -->
			    </div>
			    <!-- Used to display form errors -->
			    <div id="card-errors" role="alert"></div>
			</div>
      </div>
      <div class="modal-footer">
      	<button class="btn btn-default hardstop">Add Card</button>
      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</div>





<script type="text/javascript">
// Create a Stripe client
var stripe = Stripe('pk_test_IrZDwdNxdAQ8eS0M5RVMx9sP');

// Create an instance of Elements
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    lineHeight: '18px',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
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
  $('.hardstop').attr('disabled','disabled');
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
 
    if (result.error) {
    	$('.hardstop').attr('disabled', false);
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

	$(function() {
		$('input[name="amount_choice"]').on('change', function() {
			if($(this).val() == 'other') {
				$('#amountBox').val('').removeProp('disabled');
				$('#amountBoxContainer').removeClass('hidden');
			}else{
				$('#amountBoxContainer').val('').addClass('hidden');
				$('#amountBox').prop('disabled');
			}
		});
	});


function addCard() {
	$("#myModal").modal()

}

function handling() {

}



$('body').on('click', '.hardstop', function(){
	  var id = $(this).attr('id');
  	$("body").css({"overflow":"hidden"}),
	$("#cover, #cover2").css({"display":"flex"});
	console.log("hh");
})

</script>
@stop