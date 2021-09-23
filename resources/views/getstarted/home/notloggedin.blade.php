@extends('layouts.master')
@fix-navbar

@php
 $page_header = "Get Started: Home Listing";
  $meta_description = "Get started now with your mobile home listing on MHS America. Advertise for up to 6 months for only $39.99";
@endphp

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/profile.css">
	<link rel="stylesheet" type="text/css" href="/css/ticketsystem.css">
	<link rel="stylesheet" type="text/css" href="/css/validationFD/validationFD.css">

@stop

@section('content-above')
@include('getstarted.home.partial.header')
@stop

@section('content')
<style type="text/css">
	h2 {
		margin-top: 1em;
		color: #4a879e;
	}
	.formhead {
		font-family: Voltaire;
		font-size: 2.2em;
		color: #4a879e;
		margin: 15px 0px;
	}
	#loginform p {
		font-size: 1.75em;
	}
	.content p {
		padding: .2em;
		font-family: Voltaire;
	}
	.req_field {
		color: red;
	}
	.companybtn{
		position: absolute;
		top: 0;
		right: -75px;
		height: 100%;
		width: 88px;
	}
</style>
@if( ! $has_account )
<div class="row white mb-0" id="loginform" style="padding: 10px 0px;">
	<div class="col-md-6 col-md-offset-1">
		<p>
		Please login to create a home listing, or create a new login if you don't already have one.
		</p>
		@if(!$errors->count() > 0)
		<button class="btn btn-primary pull-right" onclick="create()">Create Account</button>
		@endif
	</div>
	<div class="col-md-3 col-md-offset-1" style="border-left: 1px solid #e8e8e8;background:none;">
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ URL::route('account-login-post') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    @if($redirect != '')
                    <input type="hidden" name="redirect" value="{{ $redirect }}">
                    @endif
                    <div class="form-group">
                        <label for="inputUsername3" class="control-label">
                            Username</label>
                        <div class="">
                            <input type="text" class="form-control" name="username" id="inputUsername3" placeholder="Username"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="control-label">
                            Password</label>
                        <div class="">
                            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" value="1"/>
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="btn btn-success cta btn-sm">Sign in</button>
							<button type="reset" class="btn btn-default cta btn-sm">Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
	</div>
</div>
@endif
<div class="row white mb-0" id="createform" style="padding: 10px 0px;@if(!$has_account && !$errors->count() > 0) display: none; @endif">
	<form class="form-horizontal row" id="setupform" action="getstarted" method="post">
	{{ csrf_field() }}
	<div class="col-md-10 col-md-offset-1">
		@include('layouts.partial.errors')
		@if ( ! $has_account || 1==1 )
		<hr style="max-width: 100%;">
		<div class="formhead">Account Information</div>
		
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>Username</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" @if($user) value="{{$user->username}}" readonly @else value="{{ Input::get('username') }}" @endif >
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>Password</label>
		    <div class="col-sm-9">
		      <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Password" @if($has_account) value="********" readonly @endif>
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>Email</label>
		    <div class="col-sm-9">
		      <input type="email" class="form-control" id="email" name="email" placeholder="Email" @if($user) value="{{$user->email}}" readonly @else value="{{ Input::get('email') }}" @endif>
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>Password</label>
		    <div class="col-sm-9">
		      <input type="password" class="form-control" id="password_confirmation" autocomplete="off" name="password_confirmation" placeholder="Password" @if($has_account) value="********" readonly @endif>
		    </div>
		  </div>
		  @endif
		  @if ( ! $is_upgraded || 1==1 )
		  <div class="formhead">Personal Information</div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>First Name</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="personal-firstname" name="personal-firstname" placeholder="First Name"  @if($user && $user->first_name) value="{{$user->first_name}}" readonly @else value="{{ Input::get('personal-firstname') }}" @endif>
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>Last Name</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="personal-lastname" name="personal-lastname" placeholder="Last Name" @if($user && $user->last_name) value="{{$user->last_name}}" readonly @else value="{{ Input::get('personal-lastname') }}" @endif>
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>Address 1</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="personal-address-1" name="personal-address-1" placeholder="" @if($user && $user->address) value="{{$user->address}}" readonly @else value="{{ Input::get('personal-address-1') }}" @endif>
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label">Address 2</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="personal-address-2" name="personal-address-2" placeholder="" @if($user && $user->addressb) value="{{$user->addressb}}" readonly @else value="{{ Input::get('personal-address-2') }}" @endif>
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>State</label>
		    <div class="col-sm-9">
		      <select class="form-control" id="personal-state" name="personal-state" @if($user && $user->state) readonly @endif>
		      		<option value="0" data-abbr="xx">Select State</option>
		      		@foreach($states as $state)
		      		<option value="{{ $state->id }}" data-abbr="{{ $state->abbr }}" @if($user && $state->id == $user->state) selected @endif>{{ $state->title }}</option>
					@endforeach
		      </select>
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>City</label>
		    <div class="col-sm-9">
		      <select class="form-control" id="personal-city" name="personal-city">
		      	<option value="0" data-abbr="xx">First Select State</option>
		      	 @if($user && $user->city)
		      	  @php
				  	$cityname = App\Models\Geoname::find($user->city);
				  @endphp
		      	 <option value="{{$user->city}}" selected>{{$cityname->place_name}}</option>
		      	 @endif
		      </select>
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>Zip</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="personal-zip" name="personal-zip" placeholder="" @if($user && $user->zip_code) value="{{$user->zip_code}}" readonly  @else value="{{ Input::get('personal-zip') }}"@endif>
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label">Phone</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="personal-phone" name="personal-phone" placeholder="" @if($user && $user->phone) value="{{$user->phone}}" readonly @else value="{{ Input::get('personal-phone') }}" @endif>
		    </div>
		  </div>
		  @endif
		  @if ( ! $has_companies )
		  <div class="formhead">Company Information</div>
<div id="whoami">
		    <div class="col-sm-3 col-md-offset-2" style="padding-left: 0;display: none;">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadioD" value="-1" checked> Empty Default
				</label>
		    </div>
		    <div class="col-sm-3 col-md-offset-2" style="padding-left: 0;">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="0" onclick="setMode(this.value);" @if( Input::get("inlineRadioOptions") == "0") checked @endif> I Am or I Represent a Private Owner
				</label>
		    </div>
		    <div class="col-sm-3" style="padding-left: 0;">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="1" onclick="setMode(this.value);" @if( Input::get("inlineRadioOptions") == "1") checked @endif> I Own or Manage a Management Company
				</label>
		    </div>
		    <div class="col-sm-3" style="padding-left: 0;">
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="2" onclick="setMode(this.value);" @if( Input::get("inlineRadioOptions") == "2") checked @endif> I Work for or with a Management Company
				</label>
		    </div>
</div>
<div id="iam" style="display: none;">
		    <div class="col-sm-12" style="padding-top: 24px;font-size: 1.2em;display: flex;align-content: center;align-items: center;justify-content: center;">


		    	<div style="width: 100%;border-top: 1px solid #cdcdcd;border-bottom: 1px solid #cdcdcd;padding: 15px 0px;">
		    	<p style="margin:0px;padding: 0px;font-family: Lato;color:#606060;">

		    		
		    		<a style="float: right;" onclick="resetCompany();">reset</a>
		    		<div id="desc_a">
		    			<span style="margin:0px;margin-left:22px;padding: 0px;color:#4a879e;"><i class="fa fa-user"></i> Who I am:</span>
		    			<span>I Own or Represent the Community I am trying to promote.</span>
		    			<hr>
		    			<ul>
		    				<li>You will do business under a personal business account.</li>
		    			</ul>
		    		</div>
		    		<div id="desc_b">
		    			<span style="margin:0px;margin-left:22px;padding: 0px;color:#4a879e;"><i class="fa fa-user"></i> Who I am:</span>
		    			<span>I Own or Represent a Company responsible for promoting this Community.</span>
		    			<hr>
		    			<ul>
		    				<li>You will do business under a company business account.</li>
		    				<li>You will become administrator for this company.</li>
		    				<li>You may invite employees to join your company account (<a taret="_blank" href="">read more</a>).</li>
		    			</ul>
		    			<div style="padding:22px;">
		    			<strong>If your company is already claimed on MHS America:</strong>
		    			<ul>
		    				<li>A manager may have already established an account on our platform.</li>
		    				<li>If you believe it to be an error please <a taret="_blank" href="">contact us</a></li>
		    			</ul>
		    			</div>
		    		</div>
		    		<div id="desc_c">
		    			<span style="margin:0px;margin-left:22px;padding: 0px;color:#4a879e;"><i class="fa fa-user"></i> Who I am:</span>
		    			<span>I am an Employee of a Company that is responsible for promoting this Community.</span>
		    			<hr>
		    			<div style="padding:22px;">
		    			<strong>If your employer is on MHS America:</strong>
		    			<ul>
		    				<li>You will do business under your employers business account.</li>
		    				<li>You will be required to input an invitation code before joining.</li>
		    				<li>Your invitation code can be aquired via the admin for this company.</li>
		    				<li>Your employer can be shown on your profile.</li>
		    			</ul>
		    			<br>
		    			<strong>If your employer is not on MHS America:</strong>
		    			<ul>
		    				<li>You will do business under a personal business account.</li>
		    				<li>Your employer can be shown on your profile.</li>
		    				<li>If your employer joins in the future, you can be invited to their company account.</li>
		    			</ul>
		    			</div>
		    		</div>
		    	</p>
		    	</div>

		    </div>

		  <div class="form-group  col-md-12" style="margin-top:24px;margin-left: -58px!important;position: relative;max-width: 95%;">
		    <label for="" class="col-sm-2 control-label"><span class="req_field">*</span>Name</label>
		    <div class="col-sm-9 companyname">
		      <input type="text" style="max-width:100%;" class="form-control" autocomplete="off" id="business-name" name="business-name" placeholder="Business Name"  value="{{ Input::get('business-name') }}">
		    <a class="btn btn-default companybtn" onclick="createCompany();" style="display: none;">Create</a>
		    </div>
		  </div>
		  <div class="form-group col-md-12">
			<div class="alert alert-danger" id="name-alert-box" role="alert" style="width: 80%;margin-left: 14%;display: none;">
				<button type="button" class="close" data-dismiss="alert" data-label="Close"><span aria-hidden="true">&times;</span></button>
				<span id="name-warning"></span>
			</div>
		  </div>
</div>
		  <div class="business-fields" @if( ! Input::get("business-name") ) style="display: none;" @endif>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>Phone</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="business-phone" name="business-phone" placeholder="" value="{{ Input::get('business-phone') }}">
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label">Fax</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="business-fax" name="business-fax" placeholder="" value="{{ Input::get('business-fax') }}">
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>Address 1</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="business-address-1" name="business-address-1" placeholder="" value="{{ Input::get('business-address-1') }}" >
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label">Address 2</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="business-address-2" name="business-address-2" placeholder="" value="{{ Input::get('business-address-2') }}">
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>State</label>
		    <div class="col-sm-9">
		      <select class="form-control" id="business-state" name="business-state">
		      	<option value="0" data-abbr="xx">Select State</option>
		      	@foreach($states as $state)
		      	<option value="{{ $state->id }}" data-abbr="{{ $state->abbr }}">{{ $state->title }}</option>
				@endforeach
		      </select>
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>City</label>
		    <div class="col-sm-9">
		      <select class="form-control" id="business-city" name="business-city" disabled>
		      	<option value="0">First Select State</option>
		      </select>
		    </div>
		  </div>
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span class="req_field">*</span>Zip</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="business-zip" name="business-zip" placeholder="" value="{{ Input::get('business-zip') }}">
		    </div>
		  </div>
		</div>
		<div class="business-fields" id="codebox" style="display: none;text-align: right;">
		  <div class="form-group  col-md-6">
		    <label for="" class="col-sm-3 control-label"><span style="background: green;padding: 3px 7px;border-radius: 5px!important;color: snow;">Inv. Code</span></label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" id="invite-code" name="invite-code" placeholder="">
		    </div>
		  </div>
		</div>
		  @endif
		  <div class="form-group  col-md-12" style="display: flex!important;align-content: center;align-items: center;justify-content: center;background:none;padding: 10px 0px;margin-top: 125px;">
		  	<div class="col-md-5 col-sm-offset-1" style="">
		  		<div class="" style="background: none;margin: auto auto;margin-bottom: 10px;">
                	<input type="checkbox" name="agree-auth" name="agree-auth" value="1"> 
                	<span id="auth_text">I am Authorized to Create this Company</span>
                </div>
		  		<div class="" style="background: none;margin: auto auto;">
                	<input type="checkbox" name="agree-terms" name="agree-terms" value="1"> 
                	I agree to and accept the <a href="{{ URL::route('page', array('slug' => 'terms')) }}" tabindex="5">terms of use</a>
                	and <a href="{{ URL::route('page', array('slug' => 'privacy')) }}" tabindex="6">privacy policy</a>
                </div>
		  	</div>
		    <div class="col-sm-6">
				<input type="hidden" name="join_id" id="join_id" value="">
		    	<input type="hidden" name="claim_id" id="claim_id" value="">
		    	<input type="hidden" name="company_name" id="company_name" value="">
		    	<button class="btn btn-primary pull-right" id="submitbtn" style="margin-right: 32px;width: 80%;padding: 25px;">Get Started</button>
		    </div>
		  </div>
		</form>
		  <div class="form-group col-md-12" id="error-screen" style="display: none;">

		  </div>
	</div>
</div>
@stop
@section('incls-body')

	<!-- Modal -->
	<div class="modal fade" id="popup-modal" tabindex="-1" role="dialog" aria-labelledby="welcomeboxLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close pull-right" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="welcomeboxLabel">Welcome to MHS America!</h4>
	      </div>
	      <div class="modal-body">
	        We'd like to take a moment to point you in the right direction. The menu at the top of the page will allow you to search for mobile home communities, mobile homes, vacant spaces and professional services. You can also use the map to browse the national MHS community.
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Thanks!</button>
	      </div>
	    </div>
	  </div>
	</div>

<script src="{{ URL::route('welcome') }}/js/typeahead.bundle.js"></script>
<script src="/js/validationFD/validationFD.js"></script>
<script type="text/javascript">
	var clicked_comp = { title: "" };
	var selected_company = false;
	var user_warnings = 1; //0 = no warnings, 1 = hint warnings, 2 = modal warnings

			pony['bloodhound'] = new Bloodhound({
				name: 'companies',
				remote: '{{ URL::route('welcome') }}/derpy/companies?query=%QUERY',
				datumTokenizer: function(d) {
					return Bloodhound.tokenizers.whitespace(d.name);
				},
				queryTokenizer: Bloodhound.tokenizers.whitespace
			});

			pony.bloodhound.initialize();

			$('#business-name').typeahead(null, {
				displayKey: 'result',
				display: function(item){ return '<b>'+item.title+'</b> – <span>'+item.city+', '+item.state+' ('+item.zip_code+')</span>'},
				source: pony.bloodhound.ttAdapter(),
			});

			$('#business-name').on('typeahead:selected', function(evt, item) {
				clicked_comp = item;
				selectCompany(item.id);
				$(this).typeahead("val", "");
			    // do what you want with the item here
			    if( getCompanyMode() == 0 ) {
			    	$(this).typeahead("val", "");

			    	switch ( user_warnings )
			    	{
			    		case 1:
			    		  $("#name-warning").html("You have chosen a company that already exists on MHSAmerica. If this is your company, you can claim it or if you are an employee, you can join it.");
			    		break;
			    		case 2:
			    		  $("#popup-modal .modal-title").html("This company already exists!");
			    		  $("#popup-modal .modal-body").html("You have chosen a company that already exists on MHSAmerica. If this is your company, you can claim it or if you are an employee, you can join it.");
			    		  $("#popup-modal").modal();
			    		break;
			    	}


			    	return false;
			    }
			    if( getCompanyMode() == 1 ) {
			    	$(".companybtn").attr("disabled", true);
			    	if ( item.claimed === true ) {
				    	$(this).typeahead("val", item.title);
				    	$("#business-name").attr("readonly", true);

				    	switch ( user_warnings )
				    	{
				    		case 0:
				    			console.log("company exists");
				    		case 1:
				    		  $("#name-warning").html("Somebody has already claimed "+item.title+". Please enter an invitation code to join.");
				    		  $("#name-warning").parent().removeClass("alert-danger").addClass("alert-success").show();
				    		break;
				    		case 2:
				    		  $("#popup-modal .modal-title").html("This company requires invitation!");
				    	      $("#popup-modal .modal-body").html("You have chosen a company that already exists on MHSAmerica. This company is set to invite only. Please enter an invitation code.");
				    	 	  $("#popup-modal").modal();
				    		break;
				    	}
				    	//offer invite code entry
				    	$("#codebox").show();
				    	$("#auth_text").html("I am Authorized to Join this Company");
			    	} else {
			    		$(this).typeahead("val", item.title);
				    	$("#business-name").attr("readonly", true);
				    	switch ( user_warnings )
				    	{
				    		case 0:
				    			console.log("claim time");
				    		case 1:
				    		  $("#name-warning").html("Your reputation proceeds you, "+item.title+". We already have you in our database. You can claim the company.");
				    		  $("#name-warning").parent().removeClass("alert-danger").addClass("alert-success").show();
				    		break;
				    		case 2:
				    		  $("#popup-modal .modal-title").html("");
				    		  $("#popup-modal .modal-body").html("");
				    		  $("#popup-modal").modal();
				    		break;
				    	}
				    	$("#auth_text").html("I am Authorized to Claim this Company");
			    	}


			    	getCompanyData(item);
			    	return false;
			    }
			    if( getCompanyMode() == 2 ) {

			    	//	User Found a Company they work for..			
			    	$(".companybtn").attr("disabled", true);

			    	if ( item.claimed === true ) {
				    	//User wants to join a claimed company..

				    	switch ( user_warnings )
				    	{
				    		case 0:
				    			console.log("company requires invite!");
				    		case 1:
				    		  $("#name-warning").html("Great! "+item.title+" is already signed up with us. Please enter an invitation code.");
				    		  $("#name-warning").parent().removeClass("alert-danger").addClass("alert-success").show();
				    		break;
				    		case 2:
				    		  $("#popup-modal .modal-title").html("This company requires invitation!");
				    	      $("#popup-modal .modal-body").html("You have chosen a company that already exists on MHSAmerica. This company is set to invite only. Please enter an invitation code.");
				    	 	  $("#popup-modal").modal();
				    		break;
				    	}
						
				    	//offer invite code entry
				    	$("#codebox").show();
				    } else {
				    	switch ( user_warnings )
				    	{
				    		case 0:
				    			console.log("suggest to your owner/manager");
				    		case 1:
				    		  $("#name-warning").html("Great! We already know about <strong>"+item.title+"</strong>. We'd appreciate you <a href=''>sharing us</a> with a manager!");
				    		  $("#name-warning").parent().removeClass("alert-danger").addClass("alert-success").show();
				    		break;
				    		case 2:
				    		  $("#popup-modal .modal-title").html("Please let your manager know!");
				    	      $("#popup-modal .modal-body").html("Thank you for using MHSAmerica. Please recommend us to your manager!");
				    	 	  $("#popup-modal").modal();
				    		break;
				    	}
						
				    	unlockForm();
				    }
				    $(this).typeahead("val", item.title);

			    }
			    getCompanyData(item.name, item.id);
			});




	$('#personal-state').change(function() {
		var abbr = $('#personal-state option:selected').data('abbr');

		$('#personal-city')
			.prop('disabled', 'disabled')
			.find('option')
			.remove()
			.end()
			.append('<option>Select a city...</option>');

		//$('#submitbtn').prop('disabled', 'disabled');

		if(abbr != '') {
			$.getJSON("/derpy/cities/" + abbr, function(result) {
				var options = $("#personal-city");
				$.each(result, function() {
					options.append($("<option/>").val(this.name).text(this.title));
				});

				options.prop('disabled', false);
			});
		}
	});
	$('#personal-city').change(function() {
		var city = $('#personal-city').val();

		if(city == '') {
			//$('#submitbtn').prop('disabled', 'disabled');
		}else{
			//$('#submitbtn').prop('disabled', false);
		}
	});

	$('#business-state').change(function() {
		var abbr = $('#business-state option:selected').data('abbr');

		$('#business-city')
			.prop('disabled', 'disabled')
			.find('option')
			.remove()
			.end()
			.append('<option>Select a city...</option>');

		//$('#submitbtn').prop('disabled', 'disabled');

		if(abbr != '') {
			$.getJSON("/derpy/cities/" + abbr, function(result) {
				var options = $("#business-city");
				$.each(result, function() {
					options.append($("<option/>").val(this.name).text(this.title));
				});

				options.prop('disabled', false);
			});
		}
	});
	$('#business-city').change(function() {
		var city = $('#business-city').val();

		if(city == '') {
			//$('#submitbtn').prop('disabled', 'disabled');
		}else{
			//$('#submitbtn').prop('disabled', false);
		}
	});

//Shows the create account form
function create() {
	//$("#loginform").slideUp();
	$("#createform").slideDown();
}

//changes the wording on screen based on
//what a user's role is.
active_mode = 1;
function setMode(mode) {
	if ( $("#personal-firstname").val() == null || $("#personal-firstname").val() == "" ||
		$("#personal-lastname").val() == null || $("#personal-lastname").val() == "" ) {
		$("input:radio[name=inlineRadioOptions]").val([-1]);
		return false;
	}
	$("#whoami").slideUp(200)
		$("#iam").slideDown(200);
	deselectCompany();
	$("#name-warning").parent().hide();
	$("#desc_a, #desc_b, #desc_c, #codebox").hide();
	clearForm();
	lockForm();
	switch(parseInt(mode)) {
		case 0:
		 $(".companybtn").attr('disabled', true).css("display", "none");
		 $("#desc_a").show();
		 $("#auth_text").html("I am Authorized to Promote this Community");
		 fromAbove();
		 //$("#submitbtn").attr('disabled', false);
		break;
		case 1:
		 $("#business-name").attr("readonly", false);
		 $(".companybtn").attr('readonly', false);
		 $("#desc_b").show();
		 $("#auth_text").html("I am Authorized to Create this Company");
		 //$("#submitbtn").attr('disabled', true);
		 $(".companybtn").attr('disabled', false).css("display", "initial");
		break;
		case 2:
		 $("#business-name").attr("readonly", false);
		 $(".companybtn").attr('readonly', false);
		 $("#desc_c").show();
		 $("#auth_text").html("I am Authorized to Join this Company");
		 //$("#submitbtn").attr('disabled', true);
		 $(".companybtn").html("Create").attr('disabled', false).css("display", "initial");
		break;
	}
	active_mode = mode;
}

	//Allow user to enter in new data
	//to create a new company.
	function createCompany() {
		if ( selected_company ) {
			//
		} else {
			b = $("#business-name").val();
			if ( b.length < 3 ) {
				switch ( user_warnings )
				{
					case 0:
					    console.log("too short!");
					case 1:
					    $("#name-warning").html("Name too short");
					    $("#name-warning").parent().removeClass("alert-success").addClass("alert-danger").show();
					break;
					case 2:
					    $("#popup-modal .modal-title").html("Name to short!");
					    $("#popup-modal .modal-body").html("Please enter longer name!");
					    $("#popup-modal").modal();
					break;
				}
				return false;
			}
			$("#business-name").attr("readonly", true);
			$(".companybtn").attr("disabled", true);
			if ( getCompanyMode() == 2 ) {
				switch ( user_warnings )
				{
					case 0:
					    console.log("suggest to your owner/manager");
					case 1:
					    $("#name-warning").html("Thank you for letting us know about <strong>"+b+"</strong>. We'd appreciate you telling us more and <a href=''>sharing us</a> with a manager!");
					    $("#name-warning").parent().removeClass("alert-danger").addClass("alert-success").show();
					break;
					case 2:
					    $("#popup-modal .modal-title").html("Please let your manager know!");
					    $("#popup-modal .modal-body").html("Thank you for using MHSAmerica. Please recommend us to your manager!");
					    $("#popup-modal").modal();
					break;
				}
			} else {
				switch ( user_warnings )
				{
					case 0:
					    console.log("suggest to your owner/manager");
					case 1:
					    $("#name-warning").html("Glad to have you aboard, <strong>"+b+"</strong>. Please let us know a bit more about your company.");
					    $("#name-warning").parent().removeClass("alert-danger").addClass("alert-success").show();
					break;
					case 2:
					    $("#popup-modal .modal-title").html("");
					    $("#popup-modal .modal-body").html("");
					    $("#popup-modal").modal();
					break;
				}	
			}
		}
		unlockForm();
	}

	function clearCompany() {
		freeForm();
	}

	//Build the company form out with
	//the personal data, this user will
	//do business under their name, not
	//a company..
	function fromAbove() {
		if ( $("#personal-firstname").val() == null || $("#personal-firstname").val() == "" ||
			 $("#personal-firstname").val() == null || $("#personal-firstname").val() == "" ) {
				$("input:radio[name=inlineRadioOptions]").val([-1]);
				return false;
		}

		var dba_name = $("#personal-firstname").val() + " " + $("#personal-lastname").val();
		clicked_comp = { title: dba_name };

		$("#business-name").val( dba_name ).attr("placeholder", "");
		$("#business-name").val( $("#personal-firstname").val() + " " + $("#personal-lastname").val() ).attr("placeholder", "");
		$("#business-name").attr("readonly", true);
		if ( $("#personal-address-1").val() ) {
			$("#business-address-1").attr("readonly", true);
			$("#business-address-1").val( $("#personal-address-1").val() );
		}

		if ( $("#personal-address-2").val() ) {
			$("#business-address-2").attr("readonly", true);
			$("#business-address-2").val( $("#personal-address-2").val() );
		}

		if ( $("#personal-city").val() ) {
			$("#business-city").attr("readonly", true);
			$("#business-city").val( $("#personal-city").val() );
		}

		if ( $("#personal-state").val() ) {
			$("#business-state").attr("readonly", true);
			$("#business-state").val( $("#personal-state").val() );
		}

		if ( $("#personal-zip").val() ) {
			$("#business-zip").attr("readonly", true);
			$("#business-zip").val( $("#personal-zip").val() );
		}

		if ( $("#personal-phone").val() ) {
			$("#business-phone").attr("readonly", true);
			$("#business-phone").val( $("#personal-phone").val() );
		}

			$("#business-city").prop('readonly', 'readonly')
			.find('option')
			.remove()
			.end()
			.append('<option value=\"'+$("#personal-city option:selected").val()+'\">'+$("#personal-city option:selected").text()+'</option>');

			$("#business-state").prop('readonly', 'readonly')
			.val($("#personal-state option:selected").val());

			$("#business-city").prop('disabled', false);
	}

	//Opens all fields in the 
	//create a company form
	function unlockForm() {
		$(".business-fields").show();
				$("#codebox").hide();

		$("#business-address-1").attr("readonly", false);
		$("#business-address-2").attr("readonly", false);
		$("#business-city").attr("readonly", false);
		$("#business-state").attr("readonly", false);
		$("#business-zip").attr("readonly", false);
		$("#business-phone").attr("readonly", false);
		$("#business-fax").attr("readonly", false);

		var abbr = $('#business-state option:selected').data('abbr');

		$('#business-city')
			.prop('readonly', 'readonly')
			.find('option')
			.remove()
			.end()
			.append('<option>Select a city...</option>');

		//$('#submitbtn').prop('disabled', 'disabled');
	}

	function lockForm() {
		$("#codebox").hide();
		$(".business-fields").hide();
		/*
		$("#business-address-1").attr("readonly", true);
		$("#business-address-2").attr("readonly", true);
		$("#business-city").attr("readonly", true);
		$("#business-state").attr("readonly", true);
		$("#business-zip").attr("readonly", true);
		$("#business-phone").attr("readonly", true);
		$("#business-fax").attr("readonly", true);
		*/
	}

	function clearForm() {

		$("#business-name").val("").attr("placeholder", "Company Name");
		$("#business-address-1").val("");
		$("#business-address-2").val("");
		$("#business-zip").val("");
		$("#business-phone").val("");
		$("#business-fax").val("");

		var abbr = $('#business-state option:selected').data('abbr');

		$('#business-city')
			.prop('readonly', 'readonly')
			.find('option')
			.remove()
			.end()
			.append('<option>Select a city...</option>');

		//$('#submitbtn').prop('disabled', 'disabled');
		$(".business-fields").hide();
	
	}

	function getCompanyMode() {
		return $('input[name="inlineRadioOptions"]:checked').val();
	}



	function getCompanyData(item) {

		console.log("go fishin")
		$.getJSON("/derpy/companies/" + item.name + "/" + item.id, function(result) {
			console.log(result);
			result = result[0];
			$("#business-name").attr("readonly", true).val(result.title);
			$("#business-address-1").attr("readonly", true).val(result.street_addr);
			$("#business-address-2").attr("readonly", true).val(result.street_addr2);
			$("#business-zip").attr("readonly", true).val(result.zip_code);
			$("#business-phone").attr("readonly", true).val(result.phone);
			$("#business-fax").attr("readonly", true).val(result.fax);
			$("#business-city").attr("readonly", true);
			$("#business-state").attr("readonly", true);
			

			$("#business-city").prop('disabled', false).prop('readonly', 'readonly')
			.find('option')
			.remove()
			.end()
			.append('<option value="'+result.city_id+'">'+result.city_name+'</option>');

			$("#business-state").prop('readonly', 'readonly')
			.val(result.state_id);

			$(".companybtn").prop("readonly", false);
			if( getCompanyMode() == 1 ) {
				$("#auth_text").html("I am Authorized to Claim this Company");
			} else if ( getCompanyMode() == 2 ) {
				$("#auth_text").html("I am Authorized to Join this Company");
			}

			$("#company_name").val(result.name);
			switch ( parseInt(getCompanyMode()) ) {
				case 0:
					return;
				break;
				case 1:
					if( result.claimed == true ) {
						$("#claim_id").val(null);
						$("#join_id").val(result.id);
					} else {
						$("#claim_id").val(result.id);
						$("#join_id").val(null);
					}
				break;
				case 2:
					$("#claim_id").val(null);
					$("#join_id").val(result.id);
				break;
			}

		});
	}


	function selectCompany(id) {
		$("#join_id").val(id);
		selected_company = true;
	}
	function deselectCompany() {
		$("#join_id").val(null);
		selected_company = false;
		clicked_comp = { title:"" }
	}


	function validateAccountInfo() {
		var username = $("#username");
		var email = $("#email");
		var password = $("#password");
		var password_conf = $("#password_confirmation");

	}



  var validation = [  
    ["username", "string|require"],
    ["password", "string|require|min:8"],
    ["password_confirmation", "string|require|min:8"],
    ["email", "email|require"],
    ["personal-firstname", "string|require"],
    ["personal-lastname", "string|require"],
    ["personal-address-1", "string|require"],
    ["personal-address-2", "string|nullable|max:32"],
    ["personal-state", "numeric|require|min:1|max:50"],
    ["personal-city", "numeric|require|min:1"],
    ["personal-zip", "numeric|require|integer"],
    ["personal-phone", "phone|require"],

    ["business-name", "string|require"],
    ["business-phone", "phone|require"],
    ["business-fax", "phone|nullable"],
    ["business-city", "numeric|require|integer|min:1"],
    ["business-state", "numeric|require|min:1|max:50"],
    ["business-zip", "numeric|require|integer"],
    ["business-address-1", "string|require"],
    ["business-address-2", "string|nullable|max:32"],

    ["inlineRadioOptions", "radio|in:0,1,2"],
    ["agree-terms", "checkbox|require"],
    ["agree-auth", "checkbox|require"],
  ];

  var messages = [
  	["password|min", "password must be at least 8 characters."],
  	["agree-terms|checkbox", "You must agree to our terms."],
  	["agree-auth|checkbox", "You must confirm you are authorized."],
  ];


  setupform = new ValidationFD({
  	form: "setupform",
  	rules: validation,
  	messages: messages
  });

$("#business-name").attr("readonly", true);


			$('#business-name').on('blur', function(evt, item) {
				console.log(clicked_comp.title)
				if ( typeof clicked_comp.title !== undefined && clicked_comp.title != "" ) {
					$("#business-name").val( clicked_comp.title );
				}
				return false;
			});


function resetCompany(){
	deselectCompany();
	active_mode = 1;
	$("input:radio[name=inlineRadioOptions]").val([-1]);
	setMode(0);
		$("#whoami").slideDown(200)
		$("#iam").slideUp(200);
}



@if( Input::get("inlineRadioOptions") )

setMode({{Input::get("inlineRadioOptions")}});

@endif

@if( Input::get("join_id") )

var i = { id: {{ Input::get("join_id") }} , name: "{{ Input::get("company_name") }}" };
getCompanyData(i);
$("#companybtn").attr("disabled", true);
$("#codebox").show();

@endif

@if( Input::get("claim_id") )

var i = { id: {{ Input::get("claim_id") }} , name: "{{ Input::get("company_name") }}" };
getCompanyData(i);
$("#companybtn").attr("disabled", true);
$("#codebox").show();

@endif

</script>
@stop