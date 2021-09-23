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
			text-align: ;
			font-size: 1.25em;
		}
		.control-label {
			padding-top: 2px;
		}
		.nav-tabs > li > a {
			color: #cccccc;
		}
		.nav-tabs > li > a:hover {
			color: #bbbbbb;
			background: none!important;
		}
	.req_field {
		color: red;
	}
	.companybtn{
		position: absolute;
		top: 0;
		right: -75px;
		height: 34px;
		width: 88px;
		padding: auto auto;
		font-size: 13px;
	}
	.tt-suggestion {
		font-size: .8em;
	}

	.commtab { font-weight: bold;font-size: 1.5em;cursor: pointer; }

	@media (max-width: 768px) { 
		.commtab { font-weight: bold;font-size: 1em;cursor: pointer;padding: 5px 4px !important; }
	}

	</style>
@stop

@section('content-above')
@include('getstarted.home.partial.header')
@stop

@section('content')
<div class="row white mb-0" >
	<div class="col-md-12">

<form id="orderform" class="form-horizontal" action="{{ URL::route('getstarted-home') }}/checkgeo" method="POST" role="form">
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

<!------------------------------ Choose Listing Type ---------------------------------------------------------->
		<div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;">

			<nav>
			<ul class="nav nav-tabs">
				<li class="col-md-6 active" role="presentation" id="incomm">
				<a class="commtab" onclick="setMode(1)"> <i class="fa fa-users"></i> In a Community</a>
				</li>
				<li class="col-md-6" role="presentation" id="notincomm">
				<a class="commtab" onclick="setMode(2)"> <i class="fa fa-user"></i> On Private Land</a>
				</li>
			</ul>
			</nav>

		</div>


<!------------------------------- Community Form --------------------------------------------------------------->

		<div class="col-xs-12 col-sm-11" id="commform" style="padding: 15px;">
			
			<div class="form-group" style="margin-top: 48px;">
				<label for="" class="col-sm-3 control-label"><span class="req_field">*</span>Hint:</label>
				<div class="col-sm-9" style="font-size: .9em;">
				Please select the community this home belongs to. If you cannot find your home's community, you can select the option to add your community to MHS.
				</div>
			</div>

			<div class="form-group" style="margin-top: 48px;">
				<label for="" class="col-sm-3 control-label"><span class="req_field">*</span>Community</label>
				<div class="col-sm-9 companyname">
				<input type="text" style="max-width:100%;" class="form-control" autocomplete="off" id="community-name" name="community-name" placeholder="Community Name">
				<a class="btn btn-default companybtn" style="display: none;" onclick="fff();">Create</a>
				</div>
			</div>
			
			<div class="form-group">
				<div class="alert alert-danger" id="name-alert-box" role="alert" style="width: 80%;margin-left: 14%;display: none;">
					<button type="button" class="close" data-dismiss="alert" data-label="Close"><span aria-hidden="true">&times;</span></button>
					<span id="name-warning"></span>
				</div>
			</div>
		  	
			  <div class="thoughtform" style="display: none;">
				<div class="form-group">
					<label class="control-label col-md-3"></label>
					<div class="col-md-9">
						<div class="col-md-4">
							<img src="/img/nophoto.png" id="cimage" style="width: 100%;">
						</div>
						<div class="col-md-8" style="font-size: .8em;">
							<div class="form-group">
								<label class="col-md-4" style="text-align: right;">Community</label>
								<div class="col-md-8">
									<span id="cname"></span><br>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4" style="text-align: right;">Address</label>
								<div class="col-md-8">
									<span id="caddr"></span><br>
									<span id="ccity"></span> <span id="cstate"></span>, <span id="czip"></span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4" style="text-align: right;">Space</label>
								<div class="col-md-8">
									<input type="text" name="community-space" id="community-space" class="form-control" value="{{ old('community-address') }}" disabled>
									<input type="hidden" name="community-id" id="community-id" value="0">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		  	<div class="truform" style="display: none;">
				<div class="form-group">
					<label class="control-label col-md-3">Age Restriction</label>
					<div class="col-md-9 " >	
						<div class="row-fluid">
							<input type="radio" name="community-type" id="t_default" value="-1" style="display: none;" selected>
							<div class="col-md-4 ageblock" style="text-align:center;background-color: ;">
								<input type="radio" name="community-type" id="t_family" value="0">
								<label for="t_family">
									Family
								</label>
							</div>
						
							<div class="col-md-4 ageblock" style="text-align:center;background-color: ;">
								<input type="radio" name="community-type" id="t_ffp" value="1">
								<label for="t_ffp">
									55+
								</label>
							</div>

							<div class="col-md-4 ageblock" style="text-align:center;background-color: ;">
								<input type="radio" name="community-type" id="t_senior" value="2">
								<label for="t_senior">
									Senior
								</label>
							</div>

						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">Street address</label>
					<div class="col-md-9">
						<input type="text" name="community-address1" id="community-address1" class="form-control" value="{{ old('community-address') }}">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">Space</label>
					<div class="col-md-9">
						<input type="text" name="community-address2" id="community-address2" class="form-control" value="{{ old('community-address') }}">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">State</label>
					<div class="col-md-3">

						<select class="form-control" id="community-state" name="community-state">
						<option value="0" data-abbr="xx">Select State</option>
						@foreach($states as $state)
						<option value="{{ $state->id }}" data-abbr="{{ $state->abbr }}">{{ $state->title }}</option>
						@endforeach
						</select>

					</div>
					<label class="control-label col-md-3">Zip code</label>
					<div class="col-md-3">
						<input type="text" name="community-zip" id="community-zip" class="form-control" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">City</label>
					<div class="col-md-9">
						<select class="form-control" id="community-city" name="community-city" disabled>
						<option value="0" data-abbr="xx" >First Select State</option>
						</select>
					</div>
				</div>
			</div>
				<div class="form-group">
					<label class="control-label col-md-3"></label>
					<div class="col-md-9">
						<button name="" id="verify_btn" class="btn btn-success hardstop" style="width: 100%;" value="" disabled>Verify</button>
					</div>
				</div>
			</div>
		</div>
				<!-- /Community Form -->
				
<!----------------------------------- Private Land ----------------------------------------------------------->
		<div class="form-group" style="margin-top: 48px;">
			
			<div class="form-group">
				<div class="alert alert-danger" id="name-alert-box" role="alert" style="width: 80%;margin-left: 14%;display: none;">
					<button type="button" class="close" data-dismiss="alert" data-label="Close"><span aria-hidden="true">&times;</span></button>
					<span id="name-warning"></span>
				</div>
			</div>
		  	
			  <div class="thoughtform" style="display: none;">
				<div class="form-group">
					<label class="control-label col-md-3"></label>
					<div class="col-md-9">
						<div class="col-md-4">
							<img src="/img/nophoto.png" id="cimage" style="width: 100%;">
						</div>
						<div class="col-md-8" style="font-size: .8em;">
							<div class="form-group">
								<label class="col-md-4" style="text-align: right;">Address</label>
								<div class="col-md-8">
									<span id="caddr"></span><br>
									<span id="ccity"></span> <span id="cstate"></span>, <span id="czip"></span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4" style="text-align: right;">Space</label>
								<div class="col-md-8">
									<input type="text" name="community-space" id="community-space" class="form-control" value="{{ old('community-address') }}" disabled>
									<input type="hidden" name="community-id" id="community-id" value="0">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		  	<div class="truform" style="display: none;">
				<div class="form-group">
					<label class="control-label col-md-3">Street address</label>
					<div class="col-md-9">
						<input type="text" name="community-address1" id="community-address1" class="form-control" value="{{ old('community-address') }}">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">Space</label>
					<div class="col-md-9">
						<input type="text" name="community-address2" id="community-address2" class="form-control" value="{{ old('community-address') }}">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">State</label>
					<div class="col-md-3">

						<select class="form-control" id="community-state" name="community-state">
						<option value="0" data-abbr="xx">Select State</option>
						@foreach($states as $state)
						<option value="{{ $state->id }}" data-abbr="{{ $state->abbr }}">{{ $state->title }}</option>
						@endforeach
						</select>

					</div>
					<label class="control-label col-md-3">Zip code</label>
					<div class="col-md-3">
						<input type="text" name="community-zip" id="community-zip" class="form-control" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">City</label>
					<div class="col-md-9">
						<select class="form-control" id="community-city" name="community-city" disabled>
						<option value="0" data-abbr="xx" >First Select State</option>
						</select>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3"></label>
				<div class="col-md-9">
					<button name="" id="verify_btn" class="btn btn-success hardstop" style="width: 100%;" value="" disabled>Verify</button>
				</div>
			</div>
		</div>
			<!-- /Private Land -->
		</div>
	</div>
</form>

	</div>
</div>
@stop


@section('incls-body')
<script src="{{ URL::route('welcome') }}/js/typeahead.bundle.js"></script>

<script type="text/javascript">


	$('#community-state').change(function() {
		var abbr = $('#community-state option:selected').data('abbr');

		$('#community-city')
			.prop('disabled', 'disabled')
			.find('option')
			.remove()
			.end()
			.append('<option value="0">Select a city...</option>');

		$('#submitbtn').prop('disabled', 'disabled');
		if(abbr != '') {
			$.getJSON("/derpy/cities/" + abbr, function(result) {
				var options = $("#community-city");
				$.each(result, function() {
					options.append($("<option/>").val(this.name).text(this.title));
				});
				options.prop('readonly', false);
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

	




function setMode(mode){
	mode = mode;
	if ( mode == 1) {
		$("#notincomm").removeClass("active");
		$("#incomm").addClass("active");
		$("#other").hide();
		$("#commform").show();	
	}
	if ( mode == 2) {
		$("#incomm").removeClass("active");
		$("#notincomm").addClass("active");
		$("#commform").hide();
		$("#other").show();
	} 

}






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
					if (item.id == -1 && $("#community-name").val().length > 3 ) {
						wh = $("#community-name").val();
						return "Enter New Community: \"<strong>"+wh+"</strong>\"";
					}
					return '<b>'+item.title+'</b> – <span>'+item.city+', '+item.state+' ('+item.zipcode+')</span>'
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
			$('#orderform').on('submit', function(evt, item) {
				if ( checkVerify(evt) == false ) {
					evt.preventDefault();
				}
			});

	function getCompanyData(name, id) {

		$("#verify_btn").prop('disabled', false);
		if( id == -1 ) {
			var_core_action = null;
			fff();
			$("#community-name").attr('readonly', true);
			return;
		}

		$.getJSON("/derpy/communities/" + name + "/" + id, function(result) {

			result = result[0];
			$("#cname").html(result.title);
			$("#caddr").html(result.address);
			$("#czip").html(result.zipcode);
			$("#ccity").html(result.city);
			$("#cstate").html(result.state);
			if( result.cover ) {
			$("#cimage").attr('src', "/imgstorage/cover_"+result.cover+"_crop.jpg");
			}
			$("#community-city").prop('disabled', false).prop('readonly', 'readonly')
			.find('option')
			.remove()
			.end()
			.append('<option>'+result.city+'</option>');

			$("#community-state").prop('readonly', 'readonly')
			.val(result.state_id);

			var_core_action = 0;
			$("#community-id").val(result.id);
			$(".thoughtform").show();
			$(".companybtn").html("Not Here").show();

			$("#community-space").attr('disabled', false);
		});
	}

var_core_action = null;
function fff(){
  switch(var_core_action) {
  	case 0:
  		$("#community-space").attr('disabled', true);
  		$("#community-name").attr('readonly', false).val("");
  		$(".thoughtform").hide();
  		//added .hide() here now for simplicity of ux
  		//whole thing needs refactored
  		$(".companybtn").html("Create").hide();
  		var_core_action = null;
  		//$("#company-id").val(0);
  	break;
  	case 1:
  		$("#community-space").attr('disabled', true);
  		$("#community-name").attr('readonly', false).val("");
  		$(".truform").hide();
  		//added .hide() here now for simplicity of ux
  		//whole thing needs refactored
  		$(".companybtn").html("Create").hide();
  		var_core_action = null;
  		//$("#company-id").val(0);
  	break;
  	default:
  		if ( $("#community-name").val().length < 3 ) {
  			return false;
  		}
  		$("#community-name").attr('readonly', true);
  		$(".truform").show();
  		$(".companybtn").html("Reset").show();
  		var_core_action = 1;
  		//$("#company-id").val(0);
  	break;
  }
}

function checkVerify(e) {

		if ( var_core_action == 0 ) {
			var validation = [	["string", "community-space"],
								["int", "company-id"],
								["int", "community-id"]
								];
		} else {
			var validation = [	["string", "community-zip"],
								["string", "community-address2"],
								["string", "community-address1"],
								["int", "community-state"],
								["int", "community-city"],
								["int", "company-id"],
								["age", "community-type"]
								];
		}


	is_valid = true;
	for( v in validation ) {
		elem = $( "#"+validation[v][1] );
		switch( validation[v][0] ) {
			case "string":
				if(elem.val() == null || elem.val() == '' ) {
					is_valid = false;
					elem.css({
						    "background": "#ffe0e0",
						    "outline": "none",
						    "border-color": "#f9c0c0",
						    "box-shadow": "0 0 3px #f9c0c0"
						});
				} else {
					elem.css({
						    "background": "#f4fcf4",
						    "outline": "none",
						    "border-color": "green",
						    "box-shadow": "0 0 3px #fff",
						});
				}
			break;
			case "int":
				
				if(elem.val() == null || elem.val() == '' || elem.val() == '0' || elem.val() == 0 ) {
					is_valid = false;
					elem.css({
						    "background": "#ffe0e0",
						    "outline": "none",
						    "border-color": "#f9c0c0",
						    "box-shadow": "0 0 3px #f9c0c0"
						});
				} else {
					elem.css({
						    "background": "#f4fcf4",
						    "outline": "none",
						    "border-color": "green",
						    "box-shadow": "0 0 3px #fff",
						});
				}
			break;
			case "age":
				at = $("input[name=community-type]:checked").val();
				elem = $(".ageblock");
				console.log(at);
				if(at  == null || at == '' || at == -1) {
					is_valid = false;
					
					elem.css({
						    "background": "#ffe0e0",
						    "outline": "none",
						    "border-color": "#f9c0c0",
						    "box-shadow": "0 0 3px #f9c0c0"
						});
				} else {
					elem.css({
						    "background": "#f4fcf4",
						    "outline": "none",
						    "border-color": "green",
						    "box-shadow": "0 0 3px #fff",
						});
				}
			break;
		}


	}

	if ( is_valid ) {
		return true;
	} else {
		return false;
	}

}
</script>
@stop