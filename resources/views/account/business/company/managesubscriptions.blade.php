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
	<span class="text-muted"><i class="fa fa-chevron-right" style="margin:0px 5px;"></i></span> Manage Subscriptions
</h4>
@stop









@section('businesscontent')
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
	</div>
</div>
<div class="row white">
	<div class="col-md-12">
		<div class="pull-right margin-t no-margin-xs">
			<a class="btn btn-default btn-align-fix" href="{{ URL::route('account-business-company-billing', array('company' => $company->id)) }}">Back<span class="hidden-xs"> to Billing</span></a>
		</div>
		<h3>Manage Subscriptions</h3>
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


			 @php
			 function timetil($t){
			  $now = new DateTime();
			  $future_date = new DateTime($t);
			  $interval = $future_date->diff($now);
			  //$txt = $interval->format("%a days, %h hours, %i minutes, %s seconds");
			  $txt = $interval->format("%a days");
			  return $txt;
			  if ( $interval->days > 30 ){
			   $txt = date('m-d-Y', strtotime($t));
			  }
			  return $txt;
			 }
			 @endphp

		<div class="row cardholder">
		<div class="col-md-12">
		<div class="panel panel-default">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Profile Name</th>
						<th>Type</th>
						<th>Expires</th>
						<th>Amount</th>
						<th>Auto Renew</th>
						<th style="text-align: right;"></th>
					</tr>
				</thead>
				<tbody>
					@foreach($renews as $subscription)
					@if ( $subscription->profile )
		            <tr>
		            	<td>{{ $subscription->profile->title }}</td>
						<td>{{ $subscription->profile->type }}</td>
						<td>{{ date('m-d-Y', strtotime($subscription->ends_at)) }}</td>
						<td>${{ $subscription->plan->price }}</td>
						<td>@if($subscription->auto_renew) <span style="color: initial;font-weight: initial;">Auto-renews in</span> in @else <span style="color: firebrick;font-weight: bold;">Expiring in</span> @endif {{ timetil($subscription->ends_at) }}</td>
						<td style="text-align: right;">
							@if($subscription->auto_renew)
							<a class="btn btn-default hardstop" href="manage-subscriptions/cancel/{{ $subscription->id }}" {{ $subscription->id }}"> <i class="fa fa-minus" style="margin-right: 5px;"></i> Cancel </a>
							@else 
							<a class="btn btn-default hardstop" href="manage-subscriptions/renew/{{ $subscription->id }}" {{ $subscription->id }}"> <i class="fa fa-plus" style="margin-right: 5px;"></i> Renew </a>
		            		@endif
		            </tr>
		            @endif
		            @endforeach
				</tbody>
			</table>
		</div>
	</div>
		</div>
	</div>
</div>
@stop















@section('incls-body')


<script type="text/javascript">

$('body').on('click', '.hardstop', function(){
	  var id = $(this).attr('id');
  	$("body").css({"overflow":"hidden"}),
	$("#cover, #cover2").css({"display":"flex"});
	console.log("hh");
})

</script>
@stop