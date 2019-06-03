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
	</style>
@stop

@section('heading')
<h3>Business Center</h3>
<h4><a href="{{ URL::route('account-business-company', ['company' => $company->id]) }}">{{ $company->title }}</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> Billing</h4>
@stop

@section('businesscontent')
<div class="row white">
	<div class="col-md-12">
		<div class="pull-right margin-t no-margin-xs">
			<a class="btn btn-default btn-align-fix" href="{{ URL::route('account-business-company', array('company' => $company->id)) }}">Back<span class="hidden-xs"> to {{ $company->title }}</span></a>
		</div>
		<h3>Manage Company Billing</h3>
		<p>&nbsp;</p>
	</div>
</div>

<div class="row white">
	<div class="col-md-12">
@if($errors->count() > 0)
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert" data-label="Close"><span aria-hidden="true">&times;</span></button>
	{{ $error }}
</div>
@endforeach
@endif
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	<button class="close" data-dismiss="alert" aria-label="Close">&times;</button>
	{{ Session::get('success') }}
</div>
@endif
	</div>
</div>

<div class="row white" style="min-height:500px">
	<div class="col-md-5">


		<div class="panel panel-default" style="margin-top: 25px;">
			<div class="panel-body">
				<h3 class="no-margin-t">My Business Account</h3>
				<hr>

			<div class="row" style="border-bottom:0px solid black; margin-bottom: 20px;font-weight: bold;text-align: center;">
			  <div class="col-xs-3 col-md-8" style="text-align: left;">Items</div>
			  <div class="col-xs-3 col-md-4">Qty.</div>
			</div>
			<div class="row" style="border-bottom:0px solid black; margin-bottom: 20px;text-align: center;">
			  <div class="col-xs-3 col-md-8" style="text-align: left;">Home Listings</div>
			  <div class="col-xs-3 col-md-4">{{ $company->home->count() }}</div>
			</div>
			<div class="row" style="border-bottom:0px solid black; margin-bottom: 20px;text-align: center;">
			  <div class="col-xs-3 col-md-8" style="text-align: left;">Community Profiles</div>
			  <div class="col-xs-3 col-md-4">{{ $company->profiles->count() }}</div>
			</div>

			<hr>

				<a href="billing/manage-cards" class="btn btn-xs btn-default no-padding-t"><small>Manage Cards</small></a>
				<a href="billing/manage-subscriptions" class="btn btn-xs btn-default no-padding-t"><small>Manage Subscriptions</small></a>
			</div>
		</div>


		<div class="panel panel-info">
			<div class="panel-body">
				<h3 class="no-margin-t" style="text-align: center;">Monthly Spending History</h3>
				<canvas id="myChart" width="450" height="300"></canvas>
			</div>
		</div>






	</div>
	<div class="col-md-7">
		<style>
			.no_pad {
				padding: 0px;
			}
			.lo_pad {
				padding: 2px;
				
			}
			.purchase_block {
				position: relative;
				height: 250px;
				width: 100%;
				padding: 0px;
				border: 1px solid black;
			}
			.bg_community {
				background: url('http://localhost/mhs-america/public/img/stockphotos/community.jpeg');
				background-size: cover;
				-webkit-filter: grayscale(100%);
			}
			.bg_businesses {
				background: url('http://localhost/mhs-america/public/img/stockphotos/salesagent.jpeg');
				background-size: cover;
				-webkit-filter: grayscale(100%);
			}
			.bg_homes {
				background: url('http://localhost/mhs-america/public/img/stockphotos/home.jpeg');
				background-size: cover;
				-webkit-filter: grayscale(100%);
			}
			.bg_homes:hover, .bg_community:hover, .bg_businesses:hover {
				-webkit-filter: grayscale(0%)!important;
         -webkit-transition: all 0.5s linear;
         -moz-transition: all 0.5s linear;
         -o-transition: all 0.5s linear;
         transition: all 0.5s linear;
			}
			.stat_label {
				background: black;
				width: 100%;
				padding: 10px 5px;
				font-size: 1.3em;
				position: absolute;
				top: 0;
				left: 0;
				color: snow;
				font-weight: bold;
				opacity: 0.8;
				text-align: center;
			}
			.stat_count {
				width: 100%;
				padding: 10px 5px;
				font-size: 5em;
				position: absolute;
				top: 35%;
				left: 0;
				color: snow;
				font-weight: bold;
				text-align: center;	
			}
		</style>


			 @php
			 function timetil($t){
			  $now = new DateTime();
			  $future_date = new DateTime($t);
			  $interval = $future_date->diff($now);
			  //$txt = $interval->format("%a days, %h hours, %i minutes, %s seconds");
			  $txt = $interval->format("%a days");
			  if ( $interval->days > 30 ){
			   $txt = date('m-d-Y', strtotime($t));
			  }
			  return $txt;
			 }
			 @endphp


		@if(1==2)
		<div class="col-md-12">
		<h3>Expiring Subscriptions</h3>
				<hr>
		<div class="panel panel-default">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Profile Name</th>
						<th>Type</th>
						<th>Auto Renews</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody>
					@foreach($renews as $subscription)
		            <tr>
		            	<td>{{ $subscription->profile->title }}</td>
						<td>{{ $subscription->profile->type }}</td>
						<td>@if($subscription->auto_renew) {{ timetil($subscription->ends_at) }} @else Expiring @endif</td>
						<td>@if($subscription->auto_renew) ${{ $subscription->plan->price }} @else ----- @endif</td>
		            </tr>
		            @endforeach
				</tbody>
			</table>
		</div>
	</div>
	@endif
	<div class="col-md-12">
		<h3>Billing ledger</h3>
				<hr>
		<div class="panel panel-default">
			<table class="table table-striped">
				<thead>
					<tr>
						<th class="col-md-2">Transaction Code</th>
						<th class="col-md-2">Date</th>
						<th class="col-md-2">Type</th>
						<th class="col-md-2 text-right">Amount</th>
						<th class="col-md-2 text-center hidden-xs">PDF</th>
					</tr>
				</thead>
				<tbody>
					@if(count($transactions) > 0 )
					@foreach($transactions as $transaction)
		            <tr style="cursor:pointer;" onclick="showDetails('{{$transaction->transaction_code}}');">
		            	<td>{{$transaction->transaction_code}}</td>
						<td>{{$transaction->getSimpleStartTime()}}</td>
						<td>@if($transaction->stripe_charge_id) Direct Charge @else Invoice Charge @endif</td>
						<td class="text-right">{{$transaction->getTransactionTotalUSD()}}</td>
						<td class="text-center hidden-xs"><a href="billing/invoice/{{$transaction->stripe_invoice_id}}" class="hardstop">Invoice</a></td>
		            </tr>

		            	@foreach($transaction->items as $item)
		            	<tr style="display: none;" id="{{$transaction->transaction_code}}">
							<td colspan="5" style="padding: 25px;">
								<hr>
								<strong>Item:</strong> {{ $item->product->title }}<br>
								<div style="padding: 12px;">
								@if($item->target)
								 <strong>Name:</strong> {{ $item->target->title }}<br>
								 <strong>Address:</strong> {{ $item->target->address }}<br>
								@endif 
								 <div style="text-align: right;width: 100%;font-weight: bold;">${{ $item->product->price }}</div>
								 <hr>
								</div>
							</td>
		            	</tr>
		            	@endforeach
		            @endforeach
		            @else
		            <tr>
		            	<td colspan="5" style="text-align: center;">No History</td>
		            </tr>

		            @endif
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	var spending_report = {};
	
	@for($i = 5; $i > -1; $i--)
	  spending_report.{{ date('M', strtotime("-$i month")) }} = 0;
	@endfor
	@if($transactions)
	@foreach($transactions as $transaction)
	spending_report.{{$transaction->getBillingMonth()}} += {{$transaction->transaction_total}}/100;
	@endforeach
	@endif

	console.log(spending_report)
	console.log();

	function findChartMax() {
		var l = 0;
		for( total in spending_report ) {
			l = Math.ceil(Math.max(l, spending_report[total]) + (spending_report[total]/9) );
		}

		return l;
	}
</script>


<!-- Payment Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Make a Payment</h4>
      </div>
      <div class="modal-body">
		<form action="{{ URL::route('welcome') }}/payments/process/{{ $company->id }}" method="post" id="payment-form">
			<h3 class="text-info no-margin-t">
				<span class="pull-right">
					$200.00
				</span>
					Balance
			</h3>
			<hr>
			<div class="row no-margin-r">
				<div class="col-md-9">
					<div class="radio margin-l">
						<input type="radio" name="amount_choice" id="payInFull" value="full" checked="checked">
						<label for="payInFull">Pay the full balance of the account.</label>
					</div>
					<div class="radio margin-l">
						<input type="radio" name="amount_choice" id="payAnother" value="other">
						<label for="payAnother">Pay another amount.</label>
					</div>
				</div>
				<div class="col-md-3 hidden" id="amountBoxContainer">
					<label class="control-label"><strong>Amount</strong></label>
					<br>
					<input type="text" name="amount" id="amountBox" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
				</div>
			</div>
			<hr>
			<h5 class="text-muted margin-b-10">Enter your billing information</h5>
			<div class="form-row" style="padding: 2rem;">
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
      	<button class="btn btn-default">Submit Payment</button>
      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


@stop

@section('incls-body')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
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


var ctx = $('#myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: Object.keys(spending_report),
        datasets: [{
            label: 'Dollars Spent',
            data: Object.values(spending_report),
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
    	legend: {
            display: false
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    max: findChartMax()
                }
            }]
        }
    }
});

var last_code = null;

function showDetails(code){
	if ( last_code ) {
		$("#"+last_code).hide();
	}
	last_code = code;
	$("#"+code).show();
	
}

</script>
@stop