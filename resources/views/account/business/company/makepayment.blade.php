@extends('layouts.business')
@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/awesome-bootstrap-checkbox.min.css">
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
		<h3>Make a payment</h3>
		<p>&nbsp;</p>
	</div>
</div>
<div class="row white" style="min-height:500px">
	<div class=" col-xs-12 col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<form class="form margin-y form-horizontal" id="frmPayment">
						<div class="col-md-12">
							<h3 class="text-info no-margin-t">
								<span class="pull-right">
								${{ number_format(200, 2) }}
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
									<div class="radio margin-l margin-b">
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
							@if($has_default_source)
							<h5 class="text-muted margin-b-10">Verify your billing information</h5>
							<div class="row no-margin-x">
								<div class="col-md-6">
									<strong>Credit Card</strong><br>
									{{ $default_source->brand }} &middot;&middot;&middot;&middot; &middot;&middot;&middot;&middot; &middot;&middot;&middot;&middot; {{ $default_source->last4 }}<br>
									&nbsp;<br>
									<a href="#" class="btn btn-xs btn-default no-padding-t"><small>Change method</small></a>
								</div>
								<div class="col-md-6">
									<strong>Billing Address</strong><br>
									{{ $default_source->name }}<br>
									{{ $default_source->address_line1 }}<br>
									{{ $default_source->address_line2 ? $default_source->address_line2.'<br>' : '' }}
									{{ $default_source->address_city }}, {{ $default_source->state }} {{ $default_source->address_zip }}<br>
									{{ $default_source->address_country }}<br>
									&nbsp;<br>
									<a href="#" class="btn btn-xs btn-default no-padding-t"><small>Edit billing info</small></a>
									<input type="hidden" id="frmDefer" name="defer" value="pass">
								</div>
							</div>
							@else
							<h5 class="text-muted margin-b-10">Enter your billing information</h5>
							<div class="row no-margin-x">
								<div class="col-md-12">
									<div class="form-group">
										<div class="col-md-3">
											<label class="control-label" for="fldName">
												Name on Card
											</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" id="fldName" name="name">
											<input type="hidden" id="frmDefer" name="defer" value="require">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-3">
											<label class="control-label" for="fldCardNumber">
												Card Number
											</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" maxlength="19" id="fldCardNumber" name="card_number" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-3">
											<label class="control-label" for="fldMonth">
												Expiration
											</label>
										</div>
										<div class="col-md-2">
											<select class="form-control" id="fldMonth" name="month">
												<option value="">MM</option>
												<option value="01">01</option>
												<option value="02">02</option>
												<option value="03">03</option>
												<option value="04">04</option>
												<option value="05">05</option>
												<option value="06">06</option>
												<option value="07">07</option>
												<option value="08">08</option>
												<option value="09">09</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
										</div>
										<div class="col-md-2">
											<select class="form-control" id="fldYear" name="year">
												<option value="">YY</option>
												<?php $thisYr = date('y'); for($x=$thisYr;$x<$thisYr+10;$x++) { $y = str_pad($x,2,'0',STR_PAD_LEFT); ?>
												<option value="{{ $y }}">{{ $y }}</option>
												<?php } ?>
											</select>
										</div>
										<div class="col-md-2">
											<label class="control-label" for="fldCVCode">
												<span title="Card Verification Code">CV Code</span>
											</label>
										</div>
										<div class="col-md-3">
											<input type="text" class="form-control" id="fldCVCode" name="cv_code" maxlength="4" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
										</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="row no-margin-x">
								<div class="col-md-12">
									<div class="form-group">
										<div class="col-md-3">
											<label class="control-label" for="fldAddress">
												Street address
											</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" id="fldAddress" name="address">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-3">
											<label class="control-label" for="fldState">
												Choose a state
											</label>
										</div>
										<div class="col-md-9">
											<select id="fldState" class="form-control" name="state" required>
												<option value="">State...</option>
												@foreach(State::all() as $state)
												<option value="{{ $state->id }}" data-abbr="{{ $state->abbr }}">{{ $state->title }}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="form-group" id="cityrow" style="display:none">
										<div class="col-md-3">
											<label class="control-label" for="fldCity">
												City
											</label>
										</div>
										<div class="col-md-9">
											<select id="fldCity" class="form-control" disabled="disabled" name="city" required>
												<option>Select a city...</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							@endif
							<hr>
							<div class="text-center">
								{{ csrf_token_field() }}
								<button type="submit" id="submitbtn" class="btn btn-lg btn-primary" disabled>Confirm Payment</button>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@stop

@section('incls-body')
<script type="text/javascript">
	$(function() {
		$('input[name="amount_choice"]').on('change', function() {
			if($(this).val() == 'other') {
				$('#amountBox').val('').removeProp('disabled');
				$('#amountBoxContainer').removeClass('hidden');
			}else{
				$('#amountBoxContainer').val('').addClass('hidden');
				$('#amountBox').addProp('disabled');
			}
		});

		$('#fldState').on('change', function() {
			var abbr = $('#fldState option:selected').data('abbr');

			$('#fldCity')
				.prop('disabled', 'disabled')
				.find('option')
				.remove()
				.end()
				.append('<option value="">Select a city...</option>');

			$('#submitbtn').prop('disabled', 'disabled');

			if(abbr != '') {
				$('#cityrow').show();
				$.getJSON("/derpy/cities/" + abbr, function(result) {
					var options = $("#fldCity");
					$.each(result, function() {
						options.append($("<option/>").val(this.name).text(this.title));
					});

					options.prop('disabled', false);
				}).fail(function(result) {
					$('#cityrow').hide();
				});
			}
		});
		$('#fldCity').on('change', function() {
			var city = $('#fldCity').val();

			if(city == '') {
				$('#submitbtn').prop('disabled', 'disabled');
			}else{
				$('#submitbtn').prop('disabled', false);
			}
		});

		$('#frmPayment').bind('change keyup blur', function() {
			if(
				($('input[name="amount_choice"]:checked').val() == 'full' || ($('input[name="amount_choice"]:checked').val() == 'other' && $('#amountBox').val() != '')) && 
				(
					($('#fldName').val() != '' && 
						$('#fldCardNumber').val() != '' && 
						$('#fldMonth').val() != '' && 
						$('#fldYear').val() != '' && 
						$('#fldCVCode').val() != '' && 
						$('#fldAddress').val() != '' && 
						$('#fldState').val() != '' && 
						$('#fldCity').val() != '') || 
					$('#fldDefer').val() == 'pass'
				)
			) {
				$('#submitbtn').attr('disabled', false);
			} else {
				$('#submitbtn').attr('disabled', 'disabled');
			}
		});
	});
</script>
@stop