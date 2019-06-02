@extends('layouts.business')
@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
@stop

@section('heading')
<h3>Business Center</h3>
<h4><a href="{{ URL::route('account-business-company', ['company' => $company->id]) }}">{{ $company->title }}</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> Create Profile</h4>
@stop

@section('businesscontent')
<div class="row white" style="min-height:500px">
	<style>
		.community-desc {
			background: url('{{ URL::route('welcome') }}/img/stockphotos/community.jpeg');
			min-height: 375px;
			background-size:     cover;
			background-repeat:   no-repeat;
			background-position: center top;
			border: 1px solid black;
			position: relative;
         -webkit-transition: all 0.5s linear;
         -moz-transition: all 0.5s linear;
         -o-transition: all 0.5s linear;
         transition: all 0.5s linear;
		}
		.protyp-busy {
			color: #a9cee8;
		    -webkit-text-fill-color: #a9cee8;
		    -webkit-text-stroke-width: 1px;
		    -webkit-text-stroke-color: #000;
		    -webkit-background-clip: text;	
		}
		.protyp-light {
			color: #a9cee8;
		    text-decoration: underline;
		    text-decoration-color: #a9cee8;
		}
		.protyp-dark {
			color: #143366;
		    text-decoration: underline;
		    text-decoration-color: #143366;
		}
		.profile-type {
			font-size: 3em;
			font-weight: 900;
			font-family: 'Voltaire', 'Lato', 'Droid Sans', 'Open Sans', 'Dejavu Sans', Arial, sans-serif!important;
			position: absolute;
			top: 5%;
			left: 5%;

		}
		.profile-desc {
			z-index: 4;
			color: snow;
			font-size: 2em;
			font-weight: bold;
			font-family: 'Voltaire', 'Lato', 'Droid Sans', 'Open Sans', 'Dejavu Sans', Arial, sans-serif;
			position: absolute;
			width: 40%;
			top: 0;
			text-align: left;
			right: 0;
		    padding: 20px 5px;
		}
		.profile-side-bar {
			background-color: black;
			width: 40%;
			z-index: 2;
			position: absolute;
			bottom: 0;
			right: 0;
			opacity: 0.6;
			min-height: 100%;
			max-height: 100%;
		}
	</style>
	<script>
		var profile_types = [];

		function addProfile(label, style, img, desc){
			profile_types[profile_types.length] = {
				id: profile_types.length,
				label: label,
				style: style,
				img: img,
				desc: desc
			}
		}
		addProfile("Community", 	"light", "community", "Give your community the market exposure it needs by advertising on MHS America.");
		addProfile("Sales Agent", 	"light", "salesagent", "A Sales Agent is a self employed salesperson who works, usually alone, for perhaps several non competing companies.");
		addProfile("Dealer", 		"dark", "dealer", "a person or business that buys and sells goods.");
		addProfile("Manufacturer", 	"busy", "manufacturer", "a person or company that makes goods for sale.");
		addProfile("Transporter", 	"dark", "transporter", "take or carry (people or goods) from one place to another by means of a vehicle, aircraft, or ship.");
		addProfile("Contractor", 	"busy", "contractor", "a person or company that undertakes a contract to provide materials or labor to perform a service or do a job.");
		addProfile("Insurer", 		"dark", "insurer", "a person or company that underwrites an insurance risk; the party in an insurance contract undertaking to pay compensation.");
		addProfile("Inspector", 	"dark", "inspector", "an official employed to ensure that official regulations are obeyed, especially in public services.");
		addProfile("Lender", 		"busy", "lender", "an organization or person that lends money.");
		addProfile("Remodeler", 	"busy", "remodeler", "a person who carries out structural alterations to an existing building, such as adding a new room.");
		addProfile("Professional", 	"light", "professional", "Does your business service the mobile home industry? Advertise on MHS to reach your customers directly.");

		function showProfileType(id) {
			$(".profile-type").removeClass("protyp-light protyp-dark protyp-busy").addClass("protyp-"+profile_types[id].style)
			$(".community-desc").css('background-image','url({{ URL::route('welcome') }}/img/stockphotos/'+profile_types[id].img+'.jpeg)');
			$(".profile-desc").html(profile_types[id].desc);
			$(".profile-type").html(profile_types[id].label);
			$("#formSelection>.panel-body").height($("#profile-panel").height()-32);
		}
		function getProfileId(tag) {
			for ( t in profile_types )
			{
				if (profile_types[t].img == tag) { showProfileType(profile_types[t].id); return; }
			}
			showProfileType(0);
			return;
		}
		console.log(profile_types);
	</script>
	<div class="col-sm-6" id="profile-panel">
		<div class="community-desc">
			<h4 class="profile-type protyp-light">Community</h4>
			<div class="profile-side-bar"></div>
			<div class="profile-desc">a feeling of fellowship with others, as a result of sharing common attitudes, interests, and goals.</div>
		</div>
	</div>
	<div class="col-sm-6" id="select-panel">
		<div class="panel panel-default" id="formSelection">
			<div class="panel-body">
				<h2 class="text-center">What type of profile would you like to create?</h2>
				<div class="row padding-y-wide">
					<div class="col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
						<div class="box-outer" style="width: 100%;"><select onchange="getProfileId(this.value)" class="form-control box" id="profileType">
							<option value="community">Community</option>
							<option value="professional">Professional</option>
						</select></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 text-center padding-b">
						<button type="submit" class="btn btn-success" id="startButton">Start <i class="fa fa-arrow-right"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

@section('incls-body')
<style type="text/css">
.btn.btn-success {
	font-size: 120%;
	padding:0.75em 1em;
	border-radius: 3px !important;
	border:none;
	box-shadow:none;
}
.box {
	display: block;
	position: relative;
	z-index:1;
	-webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 100%;
    font-size: 200%;
    height: 3em;
    line-height: 3em;
    background: none;
    border: none;
    outline: none;
    font-family: Voltaire,Droid Sans,Open Sans,Dejavu Sans,Arial,sans-serif;
    letter-spacing: 0.1em;
    box-shadow:0 0 0.5em 0 rgba(0,0,0,0.25) inset;
    padding: 0em 0.5em;
}
.box option {
	background: #fff;
}
.box::-ms-expand {
	display: none;
}
.box-outer {
    position: relative;
    border: 1px solid #0099ff;
    border-radius: 3px !important;
    /*background: #d9f0ff;*/
    background: #fff;
}
.box-outer:after {
	content: '';
    display: block;
    height: 0;
    width: 0;
    border-style: solid;
    border-color: transparent;
    border-top-color: #545454;
    border-width: 1em 0.5em;
    position: absolute;
    top: 50%;
    right: 1em;
    margin-top:-0.5em;
    z-index:0;
}
</style>
<script type="text/javascript">
pony['formLoaded'] = false;
pony.add(function() {
	pony.lesson('loadForm', function(ev) {
		var type = $('#profileType').val();
		pony.fetch('{{ URL::route('welcome') }}/derpy/profileform/'+type, {}, function(data) {
			$('#profile-panel').removeClass("col-sm-6").addClass("hidden");
			$('#select-panel').removeClass("col-sm-6").addClass("col-sm-12");
			content = filter(data.content);
			$('#select-panel').html(content);
			//$('#formSelection').css('display', 'none');
			init();
		});
	});
	pony.bind('click', '#startButton', pony.lesson('loadForm'));
});
$( document ).ready(function() {
    showProfileType(0);
});

function filter(data) {
	data = data.replace("[title]", "{{ $company->title }}");
	return data;
}
</script>
<script src="{{ URL::route('welcome') }}/js/license_module.js"></script>
<script src="{{ URL::route('welcome') }}/js/typeahead.bundle.js"></script>
@stop