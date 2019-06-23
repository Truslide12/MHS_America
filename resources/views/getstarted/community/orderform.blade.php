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
	</style>
@stop

@section('content-above')
@include('getstarted.community.partial.header')
@stop

@section('content')
<div class="row white mb-0" >
	<div class="col-md-12">

<form id="orderform" class="form-horizontal" action="{{ URL::route('getstarted-community') }}/checkgeo" method="POST" role="form">
{{ csrf_field() }}

			<div class="panel heavypad">
				<!-- <div class="panel-heading">Current Location</div> -->
				<div class="panel-body">

					@include('layouts.partial.errors')


	            <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;">
	               <h4 style="font-weight: bold;font-size: 1.5em;"> <i class="fa fa-briefcase"></i> Choose a Business Account</h4>
	            </div>

			      			<div class="col-xs-12 col-sm-11" style="padding: 15px;">
								<div class="form-group">
									<label class="control-label col-md-3">Business Account</label>
									<div class="col-md-9">
										<select name="company-id" id="company-id" class="form-control">
											<option value="0">Select a Business Account..</option>
											@foreach( $companies as $company )
											<option value="{{$company->id}}">{{$company->title}} @if($company->is_personal) (Personal Business Account) @endif</option>
	            							@endforeach
										</select>
									</div>
								</div>
							</div>



	            <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;">
	               <h4 style="font-weight: bold;font-size: 1.5em;"> <i class="fa fa-home"></i> Community Name</h4>
	            </div>


			      			<div class="col-xs-12 col-sm-11" style="padding: 15px;">
								<div class="form-group">
									<label class="control-label col-md-3">Community Name</label>
									<div class="col-md-9">
										<input type="text" name="community-name" id="community-name" class="form-control" value="{{ old('community-name') }}">
										<a href="" style="display: none;">Check Availability</a>
									</div>
								</div>
							</div>




	            <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;">
	               <h4 style="font-weight: bold;font-size: 1.5em;"> <i class="fa fa-map-marker"></i> Community Location</h4>
	            </div>

			      			<div class="col-xs-12 col-sm-11" style="padding: 15px;">
								<div class="form-group">
									<label class="control-label col-md-3">Street address</label>
									<div class="col-md-9">
										<input type="text" name="community-address1" id="community-address1" class="form-control" autocomplete="nope" value="{{ old('community-address1') }}">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<input type="text" name="community-address2" id="community-address2" class="form-control" autocomplete="nope" value="{{ old('community-address2') }}">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">City</label>
									<div class="col-md-9">
								      <select class="form-control" id="community-city" name="community-city" disabled>
								      	<option value="0" data-abbr="xx">Select a City</option>
								      </select>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">State</label>
									<div class="col-md-3">

										<select class="form-control" id="community-state" name="community-state">
		      							<option value="0" data-abbr="xx">Select State</option>
							      		@foreach($states as $state)
							      		<option value="{{ $state->id }}" data-abbr="{{ $state->abbr }}" @if($user && $state->id == $user->state) selected @endif>{{ $state->title }}</option>
										@endforeach
		     							</select>

									</div>
									<label class="control-label col-md-3">Zip code</label>
									<div class="col-md-3">
										<input type="text" name="community-zip" id="community-zip" class="form-control" autocomplete="nope" value="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3"></label>
									<div class="col-md-9">
										<button name="" id="" class="btn btn-success hardstop" style="width: 100%;" value="">Verify</button>
									</div>
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


	$('#community-state').change(function() {
		var abbr = $('#community-state option:selected').data('abbr');

		$('#community-city')
			.prop('disabled', 'disabled')
			.find('option')
			.remove()
			.end()
			.append('<option>Select a city...</option>');

		$('#submitbtn').prop('disabled', 'disabled');

		if(abbr != '') {
			$.getJSON("/derpy/cities/" + abbr, function(result) {
				var options = $("#community-city");
				$.each(result, function() {
					options.append($("<option/>").val(this.name).text(this.title));
				});

				options.prop('disabled', false);
			});
		}
	});
	$('#community-city').change(function() {
		var city = $('#community-city').val();

		if(city == '') {
			$('#submitbtn').prop('disabled', 'disabled');
		}else{
			$('#submitbtn').prop('disabled', false);
		}
	});

	
	var abbr = $('#community-state option:selected').data('abbr');
		if(abbr != '') {
			$.getJSON("/derpy/cities/" + abbr, function(result) {
				var options = $("#community-city");
				$.each(result, function() {
					options.append($("<option/>").val(this.name).text(this.title));
				});

				options.prop('disabled', false);
			});
		}

$('#orderform').one('submit', function() {
    $(this).find('.hardstop').attr('disabled','disabled');
});

</script>
@stop