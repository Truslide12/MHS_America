@extends('layouts.business')
@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('heading')
<h3>Business Center</h3>
<h4><a href="{{ URL::route('account-business-company', ['company' => $company->id]) }}">{{ $company->title }}</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> <a href="{{ URL::route('account-business-company-billing', ['company' => $company->id]) }}">Billing</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> Claim Home Listing Voucher</h4>
@stop

@section('businesscontent')
@if( isset($data) && $data->step == "get-home" )

 home id {{ $data->home->id }} created.<a href="/profile/{{$data->home->id}}/edit">go now</a>

@elseif( isset($data) && $data->step == "check-code" )
<div class="row white">
	<div class="col-md-6 col-md-offset-3" style="padding-top: 44px;padding-bottom: 88px;">

		<form action="{{ URL::route('account-business-company-billing-listingvoucher-post', ['company' => $company->id]) }}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="step" value="get-home">
		<input type="hidden" id="community-id" name="community-id" value="">
		<input type="hidden" id="account-id" name="account-id" value="{{$company->id}}">
		<input type="hidden" id="voucher-code" name="voucher-code" value="{{$data->code->code}}">
		<h3 class="text-center " id="header" style="font-family: Voltaire;font-size: 2.3em;">Found it!</h3>

		<div class="previewbox">
		<table class="table" style="border-top:0;margin-top: 44px;font-size: 1.28em;">
			<tbody>
				<tr>
					<th style="border-top:0;">Good for:</th>
					<td style="border-top:0;">{{$data->product->title}}</td>
				</tr>
				<tr>
					<th>Listing Term:</th>
					<td>{{$data->product->product_term}} Days</td>
				</tr>
				<tr>
					<th>Price:</th>
					<td>{{$data->product->price}}</td>
				</tr>
        @if( $company->stripe_customer_email == NULL && 1==2)
        <tr>
          <th>Billing Email:</th>
          <td>
            <input type="text" name="billing-email" class="form-control">
          </td>
        </tr>
        @endif
				<tr>
					<th colspan="2">Terms and Conditions:</th>
				</tr>
				<tr>
					<td colspan="2" style="border-top:0;padding-bottom: 48px;">
						{{$data->product->terms}}
					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: right;">
						<strong style="padding-right: 22px;">You Save:</strong>
						<span style=""> {{$data->product->savings}}</span>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="border-top:0;padding-top: 44px;">
						<button type="button" style="width: 100%;" onclick="confirm()" class="btn btn-success">Redeem Voucher</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
  <div id="new-park-form" style="display: none;">

    <table class="table" style="border-top:0;margin-top: 44px;font-size: 1.28em;">
      <tbody>
        <tr>
          <th style="border-top:0;width: 40%;">Community Name:</th>
          <td style="border-top:0;width: 60%;"><input type="text" name="new-community-name" id="new-community-name" class="form-control" value=""></td>
        </tr>
        <tr>
          <th>Age Restriction:</th>
          <td>
            <select id="park_type" name="park_type" class="form-control">
              <option value="">Select Park Type</option>
              <option value="0">Family</option>
              <option value="1">55+</option>
              <option value="2">Senior</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>Address:</th>
          <td><input type=""  id="park_address" name="park_address" class="form-control" value=""></td>
        </tr>
        <tr>
          <th>State:</th>
          <td>
            <select  id="park_state" name="park_state" class="form-control">
            <option value="0" data-abbr="xx">Select State</option>
              @foreach( App\Models\State::all() as $state)
              <option value="{{ $state->id }}" data-abbr="{{ $state->abbr }}" @if($company->state_id == $state->id) selected @endif>{{ $state->title }}</option>
              @endforeach
            </select>
          </td>
        </tr>
        <tr>
          <th>City:</th>
          <td>
            <select id="park_city" name="park_city" class="form-control">
               <option value="0" data-abbr="xx">First Select State</option>
               @if ( $company->city )
               <option value="{{$company->city_id}}" selected>{{$company->city->place_name}}</option>
               @endif
              </select>
          </td>
        </tr>
        <tr>
          <th>Zip code:</th>
          <td><input type="" id="park_zip" name="park_zip" class="form-control" value=""></td>
        </tr>
        <tr>
          <td colspan="2" style="border-top:0;padding-top: 44px;">
            <button type="button" style="width: 100%;" onclick="confNewPark()" class="btn btn-success">Next</button>
          </td>
        </tr>
      </tbody>
    </table>

  </div>
	<div class="confirmbox" style="display: none;">
		@include('layouts.partial.errors')

          <div id="searchfield">

          <label style="padding: 20px 0px 0px 0px;font-family: Voltaire;font-size: 1.28em;">Look for my Community:</label>
          <input class="form-control" style="font-size: 1em;" type="" name="community-name" id="community-name" placeholder="Community Name" style="margin-bottom: 10px;font-size: 2em;padding: 8px;height: 48px;">
          </div>
          <div id="searchresults" style="display: none;">
          	<table class="table" style="border-top:0;margin-top: 44px;font-size: 1.28em;">
          		<tr>
          			<th  style="border-top:0;">Community:</th>
          			<td  style="border-top:0;" id="cname"></td>
          		</tr>
          		<tr>
          			<th>Address:</th>
          			<td id="caddr"></td>
          		</tr>
          		<tr>
          			<th></th>
          			<td>
          				<span id="ccity"></span> <span id="cstate"></span> <span id="czip"></span>
          			</td>
          		</tr>
          		<tr>
          			<th>Space:</th>
          			<td><input type="text" name="space-number" class="form-control" placeholder="Enter Space Number"></td>
          		</tr>
          		<tr>
          			<td colspan="2">
						<button style="width: 100%;" onclick="confirm()" class="btn btn-success">Redeem Home Listing</button>
          			</td>
          		</tr>
          	</table>
          </div>

	</div>
	</form>

	</div>
</div>
@else
<div class="row white">
	<div class="col-md-6 col-md-offset-3" style="padding-top: 44px;padding-bottom: 88px;">
		<form action="{{ URL::route('account-business-company-billing-listingvoucher-post', ['company' => $company->id]) }}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="step" value="check-code">
		<h3 class="text-center " style="font-family: Voltaire;font-size: 2.3em;">Home Listing Voucher</h3>
		<p class="text-center text-muted margin-b">Start by entering your voucher code below</p>
		<div class="input-group">
			<input type="text" name="voucher-code" class="form-control" value="{{Input::get('voucher-code')}}">
			<input type="hidden" name="company_id" value="{{$company->id}}">
			<span class="input-group-btn">
				<button class="btn btn-default" type="submit">Check Voucher Code</button>
			</span>
		</div>
		</form>
		<hr>
		@include('layouts.partial.errors')
	</div>
</div>
@endif

@stop

@section('incls-body')
  <script src="{{ URL::route('welcome') }}/js/typeahead.bundle.js"></script>

<script type="text/javascript">
	
  var currcity = 29301,
    currabbr = 'ca';

  $('#stateUpdate').click(function() {
    update_cities();
  });

  $('#park_state').change(function() {
    update_cities();
  });

  $(function() {
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
  var abbr = $('#park_state option:selected').data('abbr');

  $('#park_city')
    .prop('disabled', 'disabled')
    .find('option')
    .remove()
    .end()
    .append('<option>Select a city...</option>');

  $('#submitbtn').prop('disabled', 'disabled');

  if(abbr != '') {
    $.getJSON("/derpy/cities/" + abbr, function(result) {
      var options = $("#park_city");
      var activateSubmit = false;
      $.each(result, function() {
        var opt = $("<option/>").val(this.name).text(this.title);
        if($('#park_state option:selected').data('abbr') == currabbr && this.name == currcity) {
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


	function confirm() {
    $("#header").html("Find the Community");
		$(".previewbox").slideUp();
		$(".confirmbox").slideDown();
	}

  function enterNewPark() {
    console.log( $("#community-name").val() );
    $("#header").html("Enter Park Information");
    $("#new-community-name").val( $("#community-name").val() );
    $("#previewbox").slideUp();
    $("#new-park-form").slideDown()
        $("#searchfield").hide();

  }

  function confNewPark() {

      //verify all forms are complete..
      //console.log( $F("#park_name") )
      $("#cname").html(   $("#new-community-name").val() );
      $("#caddr").html(   $("#park_address").val() );
      $("#caddr2").html(   $("#park_space").val() );
      $("#czip").html(    $("#park_zip").val() );
      $("#ccity").html(   $("#park_city option:selected").text() );
      $("#cstate").html(  $("#park_state option:selected").text() );


    $("#header").html("Confirm Form");
    $("#new-park-form").slideUp();
    $(".confirmbox").slideDown();
    $("#searchresults").fadeIn();
  }

@if( isset($data) && property_exists($data, 'errors') )
confirm();
@endif

      pony['bloodhound'] = new Bloodhound({
        name: 'communities',
        remote: '{{ URL::route('welcome') }}/derpy/communities?query=%QUERY',
        datumTokenizer: function(d) {
          return Bloodhound.tokenizers.whitespace(d.name);
        },
        queryTokenizer: Bloodhound.tokenizers.whitespace
      });

      pony.bloodhound.initialize();

      $('#community-name').typeahead(null, {
        displayKey: 'result',
        display: function(item){ 
          if (item.id == -1) {
            wh = $("#community-name").val();
            return "Enter New Community: \"<strong>"+wh+"</strong>\"";
          }
          return '<strong>'+item.title+'</strong> – <span>'+item.city+', '+item.state+' ('+item.zipcode+')</span>'
        },
        source: pony.bloodhound.ttAdapter(),
      });

      $('#community-name').on('typeahead:selected', function(evt, item) {
        if (item.id == -1) {
          $("#community-name").val( wh );
        } else{
          $(this).typeahead("val", item.title);
        }
        
        $(this).attr('readonly', true);
          getCompanyData(item.zipcode, item.id);
      });

      $('#community-name').on('blur', function(evt, item) {
        if ( typeof wh !== undefined ) {
          $("#community-name").val( wh );
        }
        return false;
      });



  function getCompanyData(name, id) {

    if( id == -1 ) {
      enterNewPark(name);
      //window.location = "/page/community-plans";
      return false;
    }

    $.getJSON("/derpy/communities/" + name + "/" + id, function(result) {
      console.log(result)
      result = result[0];
      $("#cname").html(result.title);
      $("#caddr").html(result.address);
      $("#czip").html(result.zipcode);
      $("#ccity").html(result.city);
      $("#cstate").html(result.state);
      if( result.cover ) {
      $("#cimage").attr('src', "/imgstorage/cover_"+result.cover+"_crop.jpg");
      }
      var_core_action = 0;
      $("#community-id").val(result.id);
      $(".thoughtform").show();
      $(".companybtn").html("Not Here").show();

      $("#community-space").attr('disabled', false);
      $("#searchresults").fadeIn();
      $("#searchfield").hide();
      $("#header").html("Confirm Form");


      if ( result.claimed == true && result.premium == true ) {
        $("#cmessage").html("This community has already been claimed and has a paid profile. If you are an owner for this park and believe this is an error <a href=''>contact us</a>.");
        $("#gobtnrow").show();
      } else if ( result.claimed == true && result.premium == false ) {
        $("#cmessage").html("This community has already been claimed and has a free profile. If you are an owner for this park and believe this is an error <a href=''>contact us</a>.");
        $("#gobtnrow").show();
      } else {
        $("#cmessage").html("Your community is already on MHS America and can be claimed now.");
        $("#claimbtnrow").show();
      }
    });
  }

</script>
@stop