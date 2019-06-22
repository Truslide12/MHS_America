@extends('layouts.master')
@fix-navbar
@use-navbar-divider

@section('incls-head')
  <link href="{{ URL::route('welcome') }}/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ URL::route('welcome') }}/css/awesome-bootstrap-checkbox.css" rel="stylesheet">
@stop

@section('content')
<div class="row white">
	<div class="col-md-12">
		<a href="{{ Input::has('from_company') ? URL::route('account-business-company', array('company' => Input::get('from_company'))) : URL::route('profile', array('profile' => $profile->id)) }}" class="btn btn-default pull-right visible-xs visible-sm">Go back</a>
		<a href="{{ Input::has('from_company') ? URL::route('account-business-company', array('company' => Input::get('from_company'))) : URL::route('profile', array('profile' => $profile->id)) }}" class="btn btn-default pull-right push-down hidden-xs hidden-sm">Go back</a>
		<h3>Profile Manager</h3>
		<h4>{{ $profile->title }}</h4>
		<hr>
	</div>
</div>

	@if(Session::has('success'))
	<div class="col-md-offset-1 col-md-8">
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
	</div>
	@elseif($errors->any())
		@foreach($errors->all() as $error)
		<div class="col-md-offset-1 col-md-8">
			<div class="alert alert-danger">
				{{ $error }}
			</div>
		</div>
		@endforeach
	@endif

<div class="row white">
	<div class="col-sm-8 col-md-offset-1">
		<h1 class="padding-l">Your Community Profile</h1>
		<form id="pform" name="pform" class="form-horizontal" action="{{ URL::route('editor-post', ['profile' => $profile->id, 'from_company' => Input::get('from_company')]) }}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group" style="font-size:130%;line-height:1.8em">
				<label class="col-md-3 control-label">Community name</label>
				<div class="col-md-9">
					<input type="text" name="title" class="form-control input-lg" value="{{ $profile->title }}" data-toggle="tooltip" data-placement="right" title="What is the name of your community?">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-9 col-md-offset-3">
					<div class="panel panel-default text-center">
						<div class="panel-body">
							<h4>
								<a href="{{ URL::route('editor-photos', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="block-link">Manage cover photos</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-6 col-md-offset-3 col-md-5">
					<div class="panel panel-default text-center">
						<div class="panel-body">
							<h4>
								<a href="{{ URL::route('editor-spaces', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="block-link">Manage spaces</a>
							</h4>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4">
					<div class="panel panel-default text-center">
						<div class="panel-body">
							<h4>
								<a href="{{ URL::route('editor-homes', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="block-link">Manage homes</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Community Type</label>
				<div class="col-xs-4 col-md-3">
					<div class="radio">
						<input type="radio" name="community_type" id="t_family" value="0"@if($profile->age_type == 0) checked @endif>
						<label for="t_family">
							Family
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="radio">
						<input type="radio" name="community_type" id="t_ffp" value="1"@if($profile->age_type == 1) checked @endif>
						<label for="t_ffp">
							55+
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="radio">
						<input type="radio" name="community_type" id="t_senior" value="2"@if($profile->age_type == 2) checked @endif>
						<label for="t_senior">
							Senior
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-3">About the Community</label>
				<div class="col-md-9">
					<textarea name="description" class="form-control push-down" rows="6">{{ $profile->description }}</textarea>
					<div class="alert alert-success">
						It is recommended to detail anything not made explicit through our provided options. (e.g. 
						pet guidelines, nearby attractions, community rules, ect.)
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-3">Total spaces</label>
				<div class="col-md-3">
					<input type="text" name="space_count" class="form-control" value="{{ $profile->spaces }}" data-toggle="tooltip" data-placement="right" title="How many spaces does your community have?">
				</div>
				<label class="control-label col-md-2">Space rent</label>
				<div class="col-md-4">
					<input type="number" step="25" name="rent" class="form-control dollarformat" value="{{ $profile->rent }}" data-toggle="tooltip" data-placement="right" title="How much do spaces cost? If this varies, feel free to leave it empty or enter a range.">
				</div>
			</div>



			<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-3">Office Manager</label>
				<div class="col-md-3">
					<input type="text" name="office_manager" class="form-control" value="" data-toggle="tooltip" data-placement="right" title="Who would you like to be contacted for inqueries?">
				</div>
				<label class="control-label col-md-2">Office Email</label>
				<div class="col-md-4">
					<input type="text" name="office_email" class="form-control" value="" data-toggle="tooltip" data-placement="right" title="What email should we direct questions to?">
				</div>
			</div>


			<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-3"></label>
				<div class="col-md-6 form-group">
					<div class="checkbox">
						<input type="checkbox" name="show_company" id="show_company" value="1">
						<label for="show_company" style="font-size: 14px;font-weight: none;line-height: 1.42857143;">
							Show <strong>{{ $profile->company->title }}</strong> on my profile.
						</label>
					</div>
				</div>
				<div class="col-md-3">
				</div>
			</div>




			<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-3">Hours</label>
				<div class="col-md-9">
					<table class="table">
						<tr>
							<th>&nbsp;</th>
							<th>Sun</th>
							<th>Mon</th>
							<th>Tue</th>
							<th>Wed</th>
							<th>Thu</th>
							<th>Fri</th>
							<th>Sat</th>
						</tr>
						<tr>
							<th>Open</th>
							@for($y=1; $y < 8; $y++)
							<td>
								<select class="form-control hours-box open" data-action="hours" data-open-id="{{ $y }}">
									<option{{ $business_hours[$y]['open'] == '' ? ' selected' : '' }}>&nbsp;</option>
									<option{{ $business_hours[$y]['open'] == 48 ? ' selected' : '' }}>Closed</option>
									@for($z = 0; $z < 24; $z++)
									<option{{ $business_hours[$y]['open'] == $z ? ' selected' : '' }}>{{ $hour_texts[$z] }}</option>
									<option{{ $business_hours[$y]['open'] == $z+24 ? ' selected' : '' }}>{{ $hour_texts[$z+24] }}</option>
									@endfor
								</select>
							</td>
							@endfor
						</tr>
						<tr>
							<th>Close</th>
							@for($y=1; $y < 8; $y++)
							<td>
								<select class="form-control hours-box close" data-action="hours" data-close-id="{{ $y }}">
									<option{{ $business_hours[$y]['close'] == '' ? ' selected' : '' }}>&nbsp;</option>
									<option{{ $business_hours[$y]['close'] == 48 ? ' selected' : '' }}>Closed</option>
									@for($z = 0; $z < 24; $z++)
									<option{{ $business_hours[$y]['close'] == $z ? ' selected' : '' }}>{{ $hour_texts[$z] }}</option>
									<option{{ $business_hours[$y]['close'] == $z+24 ? ' selected' : '' }}>{{ $hour_texts[$z+24] }}</option>
									@endfor
								</select>
							</td>
							@endfor
						</tr>
						<tr>
						<td colspan="8" align="right">*24hr time or AM for Open, PM for close</td>
						</tr>
					</table>
				</div>
			</div>




			<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-3">Phone</label>
				<div class="col-md-4">
					<input type="tel" name="phone" id="phone" pattern="(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}" class="form-control phoneformat" value="{{ $profile->phone }}" data-toggle="tooltip" data-placement="right" title="Please use (###) ###-#### format.">
				</div>
				<label class="control-label col-md-1">Fax</label>
				<div class="col-md-4">
					<input type="tel" name="fax" id="fax" pattern="(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}" class="form-control phoneformat" value="{{ $profile->fax }}" data-toggle="tooltip" data-placement="right" title="Leave blank if not accepting fax.">
				</div>
			</div>


			<div class="form-group">
				<label class="control-label col-md-3">Street address</label>
				<div class="col-md-9">
					<input type="text" name="address" id="address" class="form-control" value="{{ $profile->address }}" autocomplete="off">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3"></label>
				<div class="col-md-9">
					<input type="text" name="addressb" id="addressb" class="form-control" value="{{ $profile->address2 }}" autocomplete="off">
				</div>
			</div>
			<div class="form-group">
			    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>City</label>
			    <div class="col-sm-9">
			      <select class="form-control" id="city" name="city" autocomplete="off" disabled>
			      	 <option value="0" data-abbr="xx">First Select State</option>
			      	 <option value="{{$profile->city_id}}" selected>{{$profile->city->place_name}}</option>
			      </select>
			    </div>
			</div>
			<div class="form-group">
			    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>State</label>
			    <div class="col-sm-3">
			      <div class="input-group">
			      	<select class="form-control" id="state" name="state" autocomplete="off">
						<option value="0" data-abbr="xx">Select State</option>
						@foreach($states as $state)
						<option value="{{ $state->id }}" data-abbr="{{ $state->abbr }}" @if($profile->state_id == $state->id) selected @endif>{{ $state->title }}</option>
						@endforeach
					</select>
					<span class="input-group-btn">
						<button type="button" class="btn btn-default" id="stateUpdate"><span class="sr-only">Update</span><i class="fa fa-level-up"></i></button>
					</span>
			      </div>
			    </div>
				<label class="control-label col-md-3">Zip code</label>
				<div class="col-md-3">
					<input type="text" name="zipcode" class="form-control" value="{{ $profile->zipcode }}" autocomplete="off">
				</div>
			</div>
			<div class="form-group visible-xs visible-sm">
				<div class="push-down"></div>
				<label class="control-label col-md-3 text-left">Site amenities</label>
			</div>
			<div class="clearfix visible-xs visible-sm"></div>
			<div class="form-group">
				<div class="push-down hidden-xs hidden-sm"></div>
				<input type="hidden" name="amenityinp" id="amenityinp">
				<label class="control-label col-md-3 hidden-xs hidden-sm">Site amenities</label>


				@php $i = 1; @endphp
				@foreach ( $amenities as $amenity )
				<div class="col-xs-4 col-md-3 @if( ($i-1) % 3 == 0 && $i != 1 ) col-md-offset-3 @else blah @endif">
					<div class="checkbox amenitybox">
						<input type="checkbox" name="{{ $amenity->name }}" id="{{ $amenity->name }}" value="{{ $amenity->id }}" @if($profile->hasAmenity($amenity->id)) checked @endif>
						<label for="{{ $amenity->name }}">
							{{ $amenity->title }}
						</label>
					</div>
				</div>
				@if( $i % 3 == 0 )
				</div>
				<div class="form-group">
				@endif
				@php $i++; @endphp
				@endforeach

				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<a style="cursor:pointer;" onclick="campaign_speech();" for="other" id="additional_amenities_counter" loaded_count="{count($profile)}">
							Click Here for More
						</a>
					</div>
				</div>
			</div>






			<div class="form-group visible-xs visible-sm">
				<div class="push-down"></div>
				<label class="control-label col-md-3 text-left">Parking</label>
			</div>
			<div class="clearfix visible-xs visible-sm"></div>
			<div class="form-group">
				<div class="push-down hidden-xs hidden-sm"></div>
				<label class="control-label col-md-3 hidden-xs hidden-sm">Parking</label>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="carport" id="carport" value="1"@if($profile->carport == 1) checked @endif>
						<label for="carport">
							Carport
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="garage" id="garage" value="1"@if($profile->garage == 1) checked @endif>
						<label for="garage">
							Garage
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="visitor" id="visitor" value="1"@if($profile->visitor == 1) checked @endif>
						<label for="visitor">
							Visitor Parking
						</label>
					</div>
				</div>
			</div>



			<div class="form-group visible-xs visible-sm">
				<div class="push-down"></div>
				<label class="control-label col-md-3 text-left">Utilities</label>
			</div>
			<div class="clearfix visible-xs visible-sm"></div>
			<div class="form-group">
				<div class="push-down hidden-xs hidden-sm"></div>
				<label class="control-label col-md-3 hidden-xs hidden-sm">Utilities</label>
				<div class="col-xs-4 col-md-3" data-toggle="tooltip" data-placement="right" title="How is water accessed?">
					<label class="control-label push-down">Water:</label>
					<select class="form-control" name="utility_water" id="utility_water">
						<option value="0">--Choose--</option>
		  				<option value="1" @if($profile->utility("water") == 1) selected @endif>City</option>
		  				<option value="2" @if($profile->utility("water") == 2) selected @endif>Well</option>
		  			</select>
				</div>
				<div class="col-xs-4 col-md-3" data-toggle="tooltip" data-placement="right" title="How is seweged removed?">
					<label class="control-label push-down">Sewer:</label>
					<select class="form-control" name="utility_sewer" id="utility_sewer">
						<option value="0">--Choose--</option>
		  				<option value="1" @if($profile->utility("sewer") == 1) selected @endif>Sewer</option>
		  				<option value="2" @if($profile->utility("sewer") == 2) selected @endif>Septic</option>
		  			</select>
				</div>
				<div class="col-xs-4 col-md-3" data-toggle="tooltip" data-placement="right" title="What type of gas is available?">
					<label class="control-label push-down">Gas:</label>
					<select class="form-control" name="utility_gas" id="utility_gas">
						<option value="0">--Choose--</option>
		  				<option value="1" @if($profile->utility("gas") == 1) selected @endif>Natural</option>
		  				<option value="2" @if($profile->utility("gas") == 2) selected @endif>Propane</option>
		  			</select>
				</div>
			</div>
			<div class="form-group">
				<div class="push-down"></div>
				<div class="col-md-offset-3 col-md-9">
				<p>By clicking Save Profile, you agree to our <a href="{{ URL::route('welcome') }}/page/terms" target="_blank">terms of service</a> and our <a href="{{ URL::route('welcome') }}/page/privacy" target="_blank">privacy policy</a>.</p>					<button type="submit" class="btn btn-success btn-lg" id="submitbtn">Save Profile<i class="fa fa-chevron-right padding-l"></i></button>
				</div>
			</div>
			<div class="push-down">
				&nbsp;
			</div>
		</form>
	</div>
	<div class="col-sm-4">

	</div>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Other Amenities</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-md-6">
				    <div class="input-group">
				      <input type="text" class="form-control" name="search" id="amenitiesSearchBox" placeholder="Search for...">
				      <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></span>
				    </div><!-- /input-group -->
        		</div>
        		<div class="col-md-6">
					<ul class="list-group" id="additional_amenities">
					</ul>
        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="modal-close" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@stop
@section('incls-body')
<style>
	.dragdrop {
		border: 5px dashed #cdcdcd;
		margin: 0px;
		margin-bottom: 10px;
		height: 200px;
	}
	.dragdrop-f {
		margin-top: 65px;
	}
	.form-control {
		margin-bottom: 5px;
	}
	.label {
		font-weight: bold;
	}
	.amenities_custom {
		display: none;
	}
.tooltip-inner {
    max-width: 250px;
    /* If max-width does not work, try using width instead */
    width: 250px; 
}
	.modal-content { margin-top: 20%; }
	.modal-header .close { float: right; }


	.modal-content .tt-dropdown-menu {
		margin-top: 34px;
	}
	.badge {
		border-radius: 100%!important;
		background-color: red;
		cursor: pointer;
	}
</style>
<script src="{{ URL::route('welcome') }}/js/license_module.js"></script>
<script src="{{ URL::route('welcome') }}/js/typeahead.bundle.js"></script>
<script>
	var currcity = {{ $profile->city_id }},
		currabbr = '{{ $profile->state->abbr }}';

	$('#stateUpdate').click(function() {
		update_cities();
	});

	$('#state').change(function() {
		update_cities();
	});
	$('#city').change(function() {
		var city = $('#city').val();

		if(city == '') {
			$('#submitbtn').prop('disabled', 'disabled');
		}else{
			$('#submitbtn').prop('disabled', false);
		}
	});

function update_cities()
{
	var abbr = $('#state option:selected').data('abbr');

	$('#city')
		.prop('disabled', 'disabled')
		.find('option')
		.remove()
		.end()
		.append('<option>Select a city...</option>');

	$('#submitbtn').prop('disabled', 'disabled');

	if(abbr != '') {
		$.getJSON("/derpy/cities/" + abbr, function(result) {
			var options = $("#city");
			var activateSubmit = false;
			$.each(result, function() {
				var opt = $("<option/>").val(this.name).text(this.title);
				if($('#state option:selected').data('abbr') == currabbr && this.name == currcity) {
					opt.prop('selected', true);
					activateSubmit = true;
				}
				options.append(opt);
			});

			options.prop('disabled', false);
			if(activateSubmit) {
				$('#city').trigger('change');
			}
		});
	}
}

function campaign_speech(e)
{
			pony['bloodhound'] = new Bloodhound({
				name: 'amenities',
				remote: '{{ URL::route('welcome') }}/derpy/amenities?query=%QUERY',
				datumTokenizer: function(d) {
					return Bloodhound.tokenizers.whitespace(d.name);
				},
				queryTokenizer: Bloodhound.tokenizers.whitespace
			});

			pony.bloodhound.initialize();
			console.log("loading bloodhound..");

			$('#amenitiesSearchBox').typeahead(null, {
				displayKey: 'title',
				source: pony.bloodhound.ttAdapter(),
			});

			$('#amenitiesSearchBox').on('typeahead:selected', function(evt, item) {
			    // do what you want with the item here
			    addAmenities(item);
			    $('#amenitiesSearchBox').val("");
			});

			pony.bind('click', '#modal-confirm'	, function(){newPony("home-camp")});
			pony.bind('click', '#modal-deny'	, function(){setProgress(getProgress()+25);newPony("home-finish")});
			$('#myModal').modal({
		        show: 'true'
		    });

		    return false;
}

			pony['bloodhound'] = new Bloodhound({
				name: 'address',
				remote: '/api/geotools/lookup/CA/YUCAIPA/92399/%QUERY',
				datumTokenizer: function(d) {
					return Bloodhound.tokenizers.whitespace(d.name);
				},
				queryTokenizer: Bloodhound.tokenizers.whitespace
			});

			pony.bloodhound.initialize();


			$('#address').typeahead({minLength: 6}, {
				displayKey: 'title',
				source: pony.bloodhound.ttAdapter(),
			});

			console.log("loading bloodhound geo..");

function init()
{
	$("#additional_amenities_counter").click(function(e) {
		e.stopPropagation();
		e.preventDefault();
        campaign_speech();
        return false;
	});


	  $('[data-toggle="tooltip"]').tooltip()
	  $('#myModal').on('hidden.bs.modal', function () {
    	$("#additional_amenities_counter").html("+"+additional_amenities.length+" additional amenities");
	  });



}

	$('#pform').on('submit', function() {
	  collectAmenities();
	});


var amenities = [];
var additional_amenities = [];

function addAmenities(i){
	for (item in additional_amenities)
	{
		if (additional_amenities[item]==i)
		{
			return;
		}
	}
	$("#additional_amenities").append('<li class="list-group-item" id="'+i.place_name+"-"+i.abbr+'">'+i.title+'<span class="badge pull-right" onclick="removeItem(\''+i.place_name+"-"+i.abbr+'\')">-</span></li>');
	additional_amenities.push(i);
	console.log(additional_amenities);

}
function removeItem(i){
	console.log("removing "+i);	
	$("#additional_amenities").empty();
	ammen_sort = additional_amenities
	additional_amenities = [];
	for(item in ammen_sort)
	{
		id = ammen_sort[item].place_name+"-"+ammen_sort[item].abbr;
		if ( id == i )
		{
			//skip
		} else {
			addAmenities(ammen_sort[item]);
		}
	}
	$("#amenitiesSearchBox").val("");
}



function format_dollar() {
    var curr_val = parseFloat($(this).val());
    $(this).val(curr_val.toFixed(2));
}

var throttle = false;

function format_phone(field, evt) {
	if ( throttle ) {
		return false;
	} else {
		throttle = true;
	}
	var editing = false;
	var ff = false;
	var curr_val = $("#"+field).val();
	if( curr_val.length == 1 ) {
		ff = true;
	}
	if ( evt ) {
		if ( (evt.keyCode >= 48 && evt.keyCode <= 57) ||
			 (evt.keyCode >= 96 && evt.keyCode <= 105) ) {
			//

		} else if (evt.keyCode == 8 || evt.keyCode == 46) {
			//
			//var pos = doGetCaretPosition( document.getElementById(field) );
			editing = true;
			//return false;
		} else {
			throttle = false;
			return false;
		}
	}
	var poss = pos = doGetCaretPosition( document.getElementById(field) );
	
      if ( ! curr_val ) { throttle = false; return; }
    var chars = curr_val.split("");
    var nums_only = Array();
    var clean_format = "";
    var digit = 0;
    

    for(char in chars) {
    	if (!isNaN(chars[char]) && chars[char] != " " ) {
    		nums_only[nums_only.length] = chars[char];
    	}
    }
    for(d=0;d<10;d++) {
    	switch( digit ) {
    			case 0:
    			  clean_format = clean_format + "(";
    			  if(ff) {
    			  pos++;
    			  }
    			break;
    			case 3:
    			  clean_format = clean_format + ") ";
    			  if(ff) {
    			  pos++;
    			  pos++;
    			  }
    			break;
    			case 6:
    			  clean_format = clean_format + "-";
    			  if(ff) {
    			  pos++;
    			  }
    			break;
    			default:
    			break;
    	}
    	if (nums_only[digit] && !isNaN(nums_only[digit])) {
    		clean_format = clean_format +""+ nums_only[digit];
    		digit++;
    	} else {
    		if( pos == 0 ) {
    			pos = clean_format.length;
    		}
    		clean_format = clean_format + "_";
    		digit++;
    	}
    }
    if( pos == 0 ) {
    	pos = clean_format.length;
    } else if ( editing || pos < nums_only.length ) {
    	pos = poss;
    } else {
		pos = findplace(clean_format);
    }
    console.log(pos, clean_format.length);
	$("#"+field).val(clean_format);
	//if ( ff ) { pos++; }
	setCaretToPos(document.getElementById(field), pos);
	throttle = false;
}

function findplace(str) {
	var ch = str.split("");
	for ( c in ch ) {
		if ( ch[c] == "_" ) {
			return c;
		}
	}
	return str.length;
}

/*
** Returns the caret (cursor) position of the specified text field (oField).
** Return value range is 0-oField.value.length.
*/
function doGetCaretPosition (oField) {

  // Initialize
  var iCaretPos = 0;

  // IE Support
  if (document.selection) {

    // Set focus on the element
    oField.focus();

    // To get cursor position, get empty selection range
    var oSel = document.selection.createRange();

    // Move selection start to 0 position
    oSel.moveStart('character', -oField.value.length);

    // The caret position is selection length
    iCaretPos = oSel.text.length;
  }

  // Firefox support
  else if (oField.selectionStart || oField.selectionStart == '0')
    iCaretPos = oField.selectionDirection=='backward' ? oField.selectionStart : oField.selectionEnd;

  // Return results
  return iCaretPos;
}

$(".dollarformat").each(format_dollar);
//$(".dollarformat").keyup(function (e) {format_phone(e);});

$(".phoneformat").keyup(function (e, v) {
	format_phone(e.target.id, e);
});

format_phone("phone");
format_phone("fax");

function setSelectionRange(input, selectionStart, selectionEnd) {
  if (input.setSelectionRange) {
    input.focus();
    input.setSelectionRange(selectionStart, selectionEnd);
  }
  else if (input.createTextRange) {
    var range = input.createTextRange();
    range.collapse(true);
    range.moveEnd('character', selectionEnd);
    range.moveStart('character', selectionStart);
    range.select();
  }
}

function setCaretToPos (input, pos) {
  setSelectionRange(input, pos, pos);
}


function collectAmenities() {
  $(".amenitybox input:checkbox:checked").each(function(e, i){
    for (item in amenities)
	{
		if (amenities[item]==i.value)
		{
			return;
		}
	}
	amenities.push(i.value);
  });

    for (item in additional_amenities)
	{
		amenities.push(additional_amenities[item].id);
	}

  //amenities.concat(additional_amenities);
  $("#amenityinp").val(amenities)
}

</script>
@stop