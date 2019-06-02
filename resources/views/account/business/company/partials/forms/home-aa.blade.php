@extends('layouts.master')
@fix-navbar
@show-navbar-divider

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
	<div class="col-md-offset-3 col-md-6">
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
	</div>
	@endif
<div class="row">
	<div class="col-sm-8">
		<h1 class="col-md-offset-3 padding-l">Your Community Profile</h1>
		<form class="form-horizontal" action="{{ URL::route('editor-post', ['profile' => $profile->id, 'from_company' => Input::get('from_company')]) }}" method="POST">
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
					<div class="checkbox">
						<input type="checkbox" name="community_type" id="senior" value="1"@if($profile->senior == 1) checked @endif>
						<label for="senior">
							Family
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="community_type" id="gated" value="1"@if($profile->gated == 1) checked @endif>
						<label for="gated">
							Senior
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="community_type" id="pets" value="1"@if($profile->pets == 1) checked @endif>
						<label for="pets">
							55+
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
					<input type="text" name="rent" class="form-control" value="{{ $profile->rent }}" data-toggle="tooltip" data-placement="right" title="How much do spaces cost? If this varies, feel free to leave it empty or enter a range.">
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
							Show <strong>[title]</strong> on my profile.
						</label>
					</div>
				</div>
				<div class="col-md-3">
				</div>
			</div>









			<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-3">Phone</label>
				<div class="col-md-4">
					<input type="text" name="phone" class="form-control" value="{{ $profile->phone }}" data-toggle="tooltip" data-placement="right" title="Please use +1(###) ###-#### format.">
				</div>
				<label class="control-label col-md-1">Fax</label>
				<div class="col-md-4">
					<input type="text" name="fax" class="form-control" value="{{ $profile->fax }}" data-toggle="tooltip" data-placement="right" title="Leave blank if not accepting fax.">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Street address</label>
				<div class="col-md-9">
					<input type="text" name="address" class="form-control" value="{{ $profile->address }}">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">City</label>
				<div class="col-md-9">
					<input type="text" name="city" class="form-control" value="{{ $profile->city_id }}">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">State</label>
				<div class="col-md-3">
					<input type="text" name="state" class="form-control" value="{{ $profile->state->title }}">
				</div>
				<label class="control-label col-md-3">Zip code</label>
				<div class="col-md-3">
					<input type="text" name="zipcode" class="form-control" value="{{ $profile->zipcode }}">
				</div>
			</div>
			<div class="form-group visible-xs visible-sm">
				<div class="push-down"></div>
				<label class="control-label col-md-3 text-left">Site amenities</label>
			</div>
			<div class="clearfix visible-xs visible-sm"></div>
			<div class="form-group">
				<div class="push-down hidden-xs hidden-sm"></div>
				<label class="control-label col-md-3 hidden-xs hidden-sm">Site amenities</label>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="pool" id="pool" value="1"@if($profile->pool == 1) checked @endif>
						<label for="pool">
							Pool
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="spa" id="spa" value="1"@if($profile->spa == 1) checked @endif>
						<label for="spa">
							Spa
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="clu_house" id="club_house" value="1"@if($profile->club_house == 1) checked @endif>
						<label for="clu_house">
							Club House
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-4 col-md-offset-3 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="gated" id="gated" value="1"@if($profile->gated == 1) checked @endif>
						<label for="gated">
							Gated
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="laundry_room" id="laundry_room" value="1"@if($profile->laundry_room == 1) checked @endif>
						<label for="laundry_room">
							Laundry Room
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="tennis" id="tennis" value="1"@if($profile->tennis == 1) checked @endif>
						<label for="tennis">
							Tennis
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-4 col-md-offset-3 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="golf" id="golf" value="1"@if($profile->golf == 1) checked @endif>
						<label for="golf">
							Golf
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="dog_park" id="dog_park" value="1"@if($profile->dog_park == 1) checked @endif>
						<label for="dog_park">
							Dog Park
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="bbq_area" id="bbq_area" value="1"@if($profile->bbq_area == 1) checked @endif>
						<label for="bbq_area">
							BBQ Area
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-4 col-md-offset-3 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="excercise_room" id="excercise_room" value="1"@if($profile->excercise_room == 1) checked @endif>
						<label for="excercise_room">
							Exercise Room
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="computer_room" id="computer_room" value="1"@if($profile->computer_room == 1) checked @endif>
						<label for="computer_room">
							Computer Room
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="boat_storage" id="boat_storage" value="1"@if($profile->boat_storage == 1) checked @endif>
						<label for="boat_storage">
							RV/Boat Storage
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-4 col-md-offset-3 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="security" id="security" value="1"@if($profile->security == 1) checked @endif>
						<label for="security">
							Security
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="planned_activities" id="planned_activities" value="1"@if($profile->planned_activities == 1) checked @endif>
						<label for="planned_activities">
							Planned Activities
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="billards" id="billards" value="1"@if($profile->billards == 1) checked @endif>
						<label for="billards">
							Billiards
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-4 col-md-offset-3 col-md-3">
					<div class="checkbox">
						<input type="checkbox" name="shuffle_board" id="shuffle_board" value="1"@if($profile->shuffle_board == 1) checked @endif>
						<label for="shuffle_board">
							Shuffle Board
						</label>
					</div>
				</div>
				<div class="col-xs-4 col-md-3">
					<div class="checkbox">
						<a href="#" for="other" id="additional_amenities_counter" loaded_count="{count($profile)}">
							Click Here for More
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-md-3 push-down">
					&nbsp;
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
					<select class="form-control">
						<option>--Choose--</option>
		  				<option @if($profile->water == 1) selected @endif>City</option>
		  				<option @if($profile->water == 2) selected @endif>Well</option>
		  			</select>
				</div>
				<div class="col-xs-4 col-md-3" data-toggle="tooltip" data-placement="right" title="How is seweged removed?">
					<label class="control-label push-down">Sewer:</label>
					<select class="form-control">
						<option>--Choose--</option>
		  				<option @if($profile->sewer == 1) selected @endif>Sewer</option>
		  				<option @if($profile->sewer == 2) selected @endif>Septic</option>
		  			</select>
				</div>
				<div class="col-xs-4 col-md-3" data-toggle="tooltip" data-placement="right" title="What type of gas is available?">
					<label class="control-label push-down">Gas:</label>
					<select class="form-control">
						<option>--Choose--</option>
		  				<option @if($profile->gas == 1) selected @endif>Natural</option>
		  				<option @if($profile->gas == 2) selected @endif>Propane</option>
		  			</select>
				</div>
			</div>
			<div class="form-group">
				<div class="push-down"></div>
				<div class="col-md-offset-3 col-md-9">
				<p>By clicking Save Profile, you agree to our <a href="{{ URL::route('welcome') }}/page/terms" target="_blank">terms of service</a> and our <a href="{{ URL::route('welcome') }}/page/privacy" target="_blank">privacy policy</a>.</p>					<button type="submit" class="btn btn-success btn-lg">Save Profile<i class="fa fa-chevron-right padding-l"></i></button>
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
	.tt-dropdown-menu {
		margin-top: 34px;
	}
	.badge {
		border-radius: 100%!important;
		background-color: red;
		cursor: pointer;
	}
</style>
<script>

$("#additional_amenities_counter").click(function() {

        campaign_speech();
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


function campaign_speech()
{
			pony['bloodhound'] = new Bloodhound({
				name: 'amenities',
				remote: '{{ URL::route('welcome') }}/derpy/cities?query=%QUERY',
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
}


function init()
{
	//any code needed when form is loaded via xhr
}

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

$('#myModal').on('hidden.bs.modal', function () {
    $("#additional_amenities_counter").html("+"+additional_amenities.length+" additional amenities");
})

</script>
