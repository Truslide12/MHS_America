@extends('layouts.business')

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('heading')
<h3>Business Center</h3>
<h4><a href="{{ URL::route('account-business-company', ['company' => $company->id]) }}">{{ $company->title }}</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> Company Settings</h4>
@stop

@section('businesscontent')
<div class="row white">
	<div class="col-md-12">
		<div class="pull-right margin-t no-margin-xs">
			<a class="btn btn-default btn-align-fix" href="{{ URL::route('account-business-company', array('company' => $company->id)) }}">Back<span class="hidden-xs"> to {{ $company->title }}</span></a>
		</div>
		<h3>Manage company settings</h3>
	</div>
</div>
<div class="row white" style="min-height:500px">
			<form role="form" class="form-horizontal" action="" method="POST">
				<div class="col-md-8 col-md-offset-1 margin-t-wide">
					@include('layouts.partial.errors')
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="form-group">
								<div class="col-md-2">
									<label class="control-label">
										Name
									</label>
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control" id="name" name="name" value="{{$company->title}}" required>
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
									<input type="text" class="form-control" id="phone" name="phone" value="{{$company->phone}}" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<label class="control-label">
										Fax number
									</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" id="fax" name="fax" value="{{$company->fax}}">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-3">
									<label class="control-label">
										Street address
									</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" id="address" name="street_addr" value="{{$company->street_addr}}">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<label class="control-label">
										Street address 2
									</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" id="address2" name="street_addr2" value="{{$company->street_addr2}}">
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
										<option value="0">State...</option>
										@foreach($states as $state)
										<option value="{{ $state->id }}" data-abbr="{{ $state->abbr }}" @if($state->id == $company->state_id) selected @endif>{{ $state->title }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group" id="cityrow">
								<div class="col-md-3">
									<label class="control-label">
										City
									</label>
								</div>
								<div class="col-md-9">

									<select id="citybox" class="form-control" name="city" required>
										<option value="0">Select a city...</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<label class="control-label">
										Zip Code
									</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" id="zip" name="zip_code" value="{{$company->zip_code}}">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-9 col-md-offset-3">
									{{ csrf_field() }}
									<button type="submit" class="btn btn-primary cta">Save changes</button>
									<p></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
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

		if(abbr != '') {
			$.getJSON("/derpy/cities/" + abbr, function(result) {
				var options = $("#citybox");
				$.each(result, function() {
					options.append($("<option/>").val(this.name).text(this.title));
				});

				options.prop('disabled', false);
			});
		}
	});

			$.getJSON("/derpy/cities/" + $('#statebox option:selected').data('abbr'), function(result) {
				var options = $("#citybox");
				$.each(result, function() {
					options.append($("<option/>").val(this.name).text(this.title));
				});

				$("#citybox").val({{$company->city_id}});
				options.prop('disabled', false);
			});
</script>
@stop