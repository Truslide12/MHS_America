@extends('layouts.business')

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('heading')
Business Center&nbsp;&nbsp;&nbsp;<p class="visible-xs"></p><small><img src="{{ $user->gravatar(25) }}" class="img-thumbnail" style="vertical-align:bottom;width:32px;"> {{ ($user->first_name =='' || $user->last_name == '') ? $user->username : $user->first_name . ' ' . $user->last_name }}</small>
@stop

@section('businesscontent')
<div class="row white">
	<div class="col-sm-4 hidden-xs">
		<ul class="list-group">
			<li class="list-group-item active">
				<h4 class="list-group-item-heading">Manage Companies</h4>
			</li>
		</ul>
		<ul class="list-group">
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-business-guide') }}" target="_blank">Beginner's Guide</a></h4>
			</li>
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="#">Knowledgebase</a></h4>
			</li>
		</ul>
		<ul class="list-group">
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('developers') }}">Developers' Center</a></h4>
			</li>
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="#">Goodies and Resources</a></h4>
			</li>
		</ul>
	</div>
	<div class="col-sm-8">
		<div class="row">
			<div class="col-md-12">
				@include('layouts.partial.errors')
				<div class="panel panel-default">
					<div class="panel-heading">
						<a href="{{ URL::route('account-business') }}" class="btn btn-sm btn-default margin-t-10 pull-right"><i class="fa fa-arrow-left"></i> Go back</a>
						<h2 class="margin-t-10">Create company</h2>
					</div>
					<div class="panel-body">
						<div class="alert alert-info margin-b">
							<h4>
								<i class="fa fa-question-circle fa-2x pull-right"></i>
								What does this do?
							</h4>
							<p>
								Once you create a company account, you will be able to create your public profiles from the company's control panel. Profiles will represent your individual communities, business locations, etc. You will have the option to show or hide this company's name on the profiles. You will also be able to enable or disable a general company profile.
							</p>
						</div>
						<p class="margin-b">Please enter the following information to create an account for your company.</p>
						<form class="form-horizontal" action="{{ URL::route('account-business-company-create-post') }}" method="POST" role="form" id="createform">
							<div class="form-group">
								<div class="col-md-2">
									<label class="control-label">
										Name
									</label>
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control" id="name" name="name" required>
								</div>
							</div>

							<hr class="margin-y-30">
							<div class="form-group">
								<div class="col-md-3">
									<label class="control-label">
										Phone number
									</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" id="phone" name="phone" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<label class="control-label">
										Fax number
									</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" id="fax" name="fax">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-3">
									<label class="control-label">
										Street address
									</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" id="address" name="address">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<label class="control-label">
										Choose a state
									</label>
								</div>
								<div class="col-md-9">
									<select id="statebox" class="form-control" name="state" required>
										<option>State...</option>
										@foreach(\App\Models\State::all() as $state)
										<option value="{{ $state->id }}" data-abbr="{{ $state->abbr }}">{{ $state->title }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group" id="cityrow" style="display:none">
								<div class="col-md-3">
									<label class="control-label">
										City
									</label>
								</div>
								<div class="col-md-9">
									<select id="citybox" class="form-control" disabled="disabled" name="city" required>
										<option>Select a city...</option>
									</select>
								</div>
							</div>
							<div class="form-group text-right">
								<div class="col-md-12">
									{{ csrf_field() }}
									<button type="submit" class="btn bn-lg btn-success" id="submitbtn" disabled>Create company account</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-4 visible-xs">
		<ul class="list-group">
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-business-guide') }}" target="_blank">Beginner's Guide</a></h4>
			</li>
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="#">Knowledgebase</a></h4>
			</li>
		</ul>
		<ul class="list-group">
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('developers') }}">Developers' Center</a></h4>
			</li>
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="#">Goodies and Resources</a></h4>
			</li>
		</ul>
	</div>
</div>
@stop

@section('incls-body')
<script type="text/javascript">
	$('#statebox').change(function() {
		var abbr = $('#statebox option:selected').data('abbr');

		$('#citybox')
			.prop('disabled', 'disabled')
			.find('option')
			.remove()
			.end()
			.append('<option>Select a city...</option>');

		$('#submitbtn').prop('disabled', 'disabled');

		if(abbr != '') {
			$.getJSON("{{ URL::route('welcome') }}/derpy/cities/" + abbr, function(result) {
				var options = $("#citybox");
				$.each(result, function() {
					options.append($("<option/>").val(this.name).text(this.title));
				});

				options.prop('disabled', false);
				$('#cityrow').show();
			});
		}
	});
	$('#citybox').change(function() {
		var city = $('#citybox').val();

		if(city == '') {
			$('#submitbtn').prop('disabled', 'disabled');
		}else{
			$('#submitbtn').prop('disabled', false);
		}
	});

	$('#createform').bind('change keyup', function() {
		if($('#name').val() != '' && $('#phone').val() != '' && $('#address').val() != '' && $('#statebox').val() != '' && $('#citybox').val() != '') {
			$('#submitbtn').attr('disabled', false);
		} else {
			$('#submitbtn').attr('disabled', 'disabled');
		}
	});
</script>
@stop