@extends('layouts.business')
@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<style>
		.modal-content { margin-top: 20%; }
		.modal-header .close { float: right; }
		.save_prompt,
		#save_prompt {
			display: inline-block;
		    margin-bottom: 0;
		    font-weight: 300;
		    text-align: center;
		    vertical-align: middle;
		    border: 1px solid transparent;
		    white-space: nowrap;
		    padding: 6px 12px !important;
		    font-size: 14px !important;
		    line-height: 1.42857143 !important;
		}

		.active_prompt {
			background: #dbffe5;
			border-radius: 5px !important;
		}


		@keyframes blink {
		    0% { opacity: .2; }
		    20% { opacity: 1; }
		    100% { opacity: .2; }
		}

		#save_prompt span {
		    animation-name: blink;
		    animation-duration: 1.4s;
		    animation-iteration-count: infinite;
		    animation-fill-mode: both;
		}
		#save_prompt span:nth-child(2) { animation-delay: .2s; }
		#save_prompt span:nth-child(3) { animation-delay: .4s; }

		.alert {
			margin-top: 10px;
			border-radius: 5px!important;
			padding: 5px 10px;
			display: none;
		}
	</style>
@stop

@section('heading')
<h3>Business Center</h3>
<h4><a href="{{ URL::route('account-business-company', ['company' => $company->id]) }}">{{ $company->title }}</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> <a href="{{ URL::route('account-business-company-users', ['company' => $company->id]) }}">User Access</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> {{ $cuser->first_name }} {{ $cuser->last_name }}</h4>
@stop

@section('businesscontent')
<div class="row white">
	<div class="col-md-12">
		<div class="pull-right margin-t no-margin-xs">
			<a class="btn btn-default btn-align-fix" href="{{ URL::route('account-business-company-users', array('company' => $company->id)) }}">Back<span class="hidden-xs"> to User Access</span></a>
		</div>
		<h3>Permissions for {{ $cuser->first_name }} {{ $cuser->last_name }}</h3>
	</div>
</div>
<div class="row white" style="min-height:500px">
	<div class="col-md-6">
		<div class="panel panel-default margin-t">
			<div class="panel-body">
				<h3 class="no-margin-y">Company role</h3>
			</div>

			<table class="table table-striped">
				<thead>
					<tr>
						<th class="col-md-5" colspan="2">Roles</th>
						<th class="col-md-7">Permissions granted</th>
					</tr>
				</thead>
				<tbody>

					@foreach(\App\Models\Role::where('is_generic',true)->orderBy('display_name')->get() as $possible_role)
					@if($possible_role->display_name)
					<tr>
						<td><input name="user-role" type="radio" value="{{ $possible_role->permissions }}" onclick="setPerms('{{ $possible_role->permissions }}');"></td>
						<td><strong>{{ $possible_role->display_name }}</strong></td>
						<td>
							{{ $possible_role->description }}
						</td>
					</tr>
					@endif
					@endforeach
					<tr>
						<td><input name="user-role" type="radio" onclick="setPerms('custom');" value="custom" checked></td>
						<td><strong>Custom</strong></td>
						<td>
							Specify my own access rules for this user.
						</td>
					</tr>
					<tr id="custom_box">
						<td colspan="3">
							<div class="panel panel-default margin-t">
								<div class="panel-body">
									<h4>Company-wide permissions</h4>
									<hr>
										<div class="row">
											<div class="col-md-12">
												@foreach(\App\Models\Permission::where('category', 1)->get() as $right)
												<div xclass="checkbox">
													<label for="perm_{{ $right->name }}"><input id="perm_{{ $right->name }}" type="checkbox" name="{{ $right->name }}" value="{{ $right->id }}" class="comp_perm_boxes" @if($role->perms()->where('permissions.id', $right->id)->count() > 0) selected="selected" @endif> {{ $right->display_name }}</label>
												</div>
												@endforeach
												<div class="alert alert-success" id="role_prompt" role="alert">
												  
												</div>
												<div class="alert alert-danger" id="perm_financial_ban" role="alert">
												  <i class="fa fa-lock"></i> User will be locked out of all financial tools!
												</div>
												<div class="alert alert-danger" id="perm_full_ban" role="alert">
												  <i class="fa fa-lock"></i> User will be locked out from all activity!
												</div>
											</div>
											<div class="clearfix"></div>
											<div class="col-md-12 hidden">
												<p class="text-danger padding-t">Attention: If you assign a user as an administrator, they will have full access.<br class="visible-md visible-lg">This includes being exempt to an emergency lockout. Please treat the Admin role with much care.</p>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="row">
											<div class="col-md-12 text-right">
												<hr>
												<button onclick="readyChecks();" class="btn btn-default pull-right movers">
													Save changes
												</button>
												<div class="clearfix"></div>
											</div>
										</div>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default margin-t">
			<div class="panel-body">
				<a href="#" onclick="popUp('profiles');" class="btn btn-sm btn-info pull-right"><i class="fa fa-gear"></i> Manage Access</a>
				<h4>Profile permissions</h4>
			</div>
			<ul class="list-group">
				@if(count($cuser->shared_profiles) > 0)
				@foreach($cuser->shared_profiles as $profile)
				@if(is_object($profile->profile))
					<li class="list-group-item is_generic clearfix">
						@if(1==2)
						<div class="pull-right">
							<a href="#" class="btn btn-sm btn-default">Change</a>
						</div>
						@endif
						<h4>{{$profile->profile->title}}</h4>
					</li>
					@else
				@endif
				@endforeach
				@else
					<li class="list-group-item">
						<h4><small>User has access to no profiles</small></h4>
					</li>
				@endif
				</ul>
		</div>
		<div class="panel panel-default margin-t">
			<div class="panel-body">
				<a href="#" onclick="popUp('homes');" class="btn btn-sm btn-info pull-right"><i class="fa fa-gear"></i> Manage Access</a>
				<h4>Home permissions</h4>
			</div>
			<ul class="list-group">
				@if( count($cuser->shared_homes) > 0 )
				@foreach($cuser->shared_homes as $home)
					<li class="list-group-item clearfix">
						@if(1==2)
						<div class="pull-right">
							<a href="#" class="btn btn-sm btn-default">Change</a>
						</div>
						@endif
						<h4>{{$home->home->title}}</h4>
					</li>
				@endforeach
				@else
					<li class="list-group-item">
						<h4><small>User has access to no homes</small></h4>
					</li>
				@endif
				</ul>
		</div>
	</div>
</div>

@stop

@section('incls-body')

<!-- Payment Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close movers" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User Access Prompt</h4>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-md-6">
      			<strong>Has Access</strong>
      			<select id="home_access" multiple="true" class="form-control">
      			</select>
      			<select id="profile_access" multiple="true" class="form-control" style="display: none;">
      			</select>
      			<button class="btn btn-default movers" style="width:100%;margin: 5px 0px;" onclick="deny_access();">
      				<i class="fa fa-chevron-right"></i>
      				<i class="fa fa-chevron-right"></i>
      			</button>
      		</div>
      		<div class="col-md-6">
      			<strong>No Access</strong>
      			<select id="no_home_access" multiple="true" class="form-control">
      			</select>
      			<select id="no_profile_access" multiple="true" class="form-control" style="display: none;">
      			</select>
      			<button class="btn btn-default movers" style="width:100%;margin: 5px 0px;" onclick="grant_access();">
      				<i class="fa fa-chevron-left"></i>
      				<i class="fa fa-chevron-left"></i>
      			</button>
      		</div>
      	</div>
      </div>
      <div class="modal-footer">
      	<div id="save_prompt" style="float:left;"></div>
      	<button class="btn btn-default movers" onclick="updateAccess();">Update Access</button>
      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="button" class="btn btn-default movers" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">

function collectOptions(box) {
	var l = new Array();
    $("#"+box+" option").each(function(e, f)
	{
	    l[l.length] = f.value
	});

	return l;
}

function removeOptionById(box, id) {
	$("#"+box+" option[value='"+id+"']").remove();
}

function addOptionById(box, item) {
	if ( item === false ) { console.log("error"); return; }
	select = $("#"+box+"");
	select.append('<option value="'+item.id+'">'+ item.title +'</option>');
}

function getHome(id) {
	for ( h in loaded_homes ) {
		if ( loaded_homes[h].data.id == id ) {
			return loaded_homes[h].data;
		}
	}
	return false;
}

function getProfile(id) {
	for ( p in loaded_profiles ) {
		if ( loaded_profiles[p].data.id == id ) {
			return loaded_profiles[p].data;
		}
	}
	return false;
}

function grant_access() {
	switch(active_mode) {
		case "homes":
			f = $("#no_home_access").val();
			if ( f ) {
				for ( u in f ) {
					addOptionById("home_access", getHome(f[u]));
					removeOptionById("no_home_access", f[u]);
				}
			}
		break;
		case "profiles":
			f = $("#no_profile_access").val();
			if ( f ) {
				for ( u in f ) {
					addOptionById("profile_access", getProfile(f[u]));
					removeOptionById("no_profile_access", f[u]);
				}
			}
		break;
	}
}

function deny_access() {
	switch(active_mode) {
		case "homes":
			f = $("#home_access").val();
			if ( f ) {
				for ( u in f ) {
					addOptionById("no_home_access", getHome(f[u]));
					removeOptionById("home_access", f[u]);
				}
			}
		break;
		case "profiles":
			f = $("#profile_access").val();
			if ( f ) {
				for ( u in f ) {
					addOptionById("no_profile_access", getProfile(f[u]));
					removeOptionById("profile_access", f[u]);
				}
			}
		break;
	}

}


function updateAccess() {

	switch( active_mode ) {
		case "profiles":
			send_data = {
		    	m: active_mode,
		    	access_granted: collectOptions("profile_access"),
		    	access_denied:  collectOptions("no_profile_access"),
		    };
		break;
		case "homes":
			send_data = {
		    	m: active_mode,
		    	access_granted: collectOptions("home_access"),
		    	access_denied:  collectOptions("no_home_access"),
		    };
		break;
	}



	$("#home_access, #no_home_access, #profile_access, #no_profile_access").attr('readonly', true);
	$(".movers").attr('disabled', true);

	$("#save_prompt").addClass("active_prompt").html("Saving Updates to User Access <span>.</span><span>.</span><span>.</span>");
	console.log("saving..");



	pony.fetch('{{url()->current()}}', send_data, function(data) {
			console.log(data);
			$("#save_prompt").html("Saved!");
			setTimeout(function(){
				$("#save_prompt").removeClass("active_prompt").html("");

				$('#myModal').modal('hide');
				$("#home_access, #no_home_access, #profile_access, #no_profile_access").attr('readonly', false);
				$(".movers").attr('disabled', false);
    			location.reload();
			}, 1000);

	}, function(data){
			$("#save_prompt").html("Error!");
			setTimeout(function(){
				$("#save_prompt").removeClass("active_prompt").html("");

				$('#myModal').modal('hide');
				$("#home_access, #no_home_access, #profile_access, #no_profile_access").attr('readonly', false);
				$(".movers").attr('disabled', false);

			}, 1000);
	},function(data){
			$("#save_prompt").html("Error!");
			setTimeout(function(){
				$("#save_prompt").removeClass("active_prompt").html("");

				$('#myModal').modal('hide');
				$("#home_access, #no_home_access, #profile_access, #no_profile_access").attr('readonly', false);
				$(".movers").attr('disabled', false);

			}, 1000);
	});

}

function setPerms(code) {
	if ( code == "custom" ) {
	  //$("#custom_box").show();
	  $(".comp_perm_boxes").attr('disabled', false);
	  code = "00000000";
	} else {
	  //$("#custom_box").hide();
	  
	  $(".comp_perm_boxes").attr('disabled', true);

	}

	var perms = code.split("");
	$("#perm_initiate_lockout").prop("checked", 			tof(perms[0]));
	$("#perm_lift_lockout").prop("checked", 				tof(perms[1]));
	$("#perm_manage_users").prop("checked", 				tof(perms[2]));
	$("#perm_manage_billing_methods").prop("checked", 		tof(perms[3]));
	$("#perm_global_card_access").prop("checked", 			tof(perms[4]));
	$("#perm_global_profile_access").prop("checked", 		tof(perms[5]));

	//tof(perms[6]) ? $("#perm_financial_ban").show() : $("#perm_financial_ban").hide();
	tof(perms[7]) ? $("#perm_full_ban").show() : $("#perm_full_ban").hide();
}

function tof(i){ return i=="1" ? true : false; }
function fot(i){ return i==true ? 1 : 0; }


function readyChecks() {
	$(".movers").attr('disabled', true);
	var role = $('input[name=user-role]:checked').val();
	if ( role == "custom" ) {
		var perms = [];
		perms[0] = fot($("#perm_initiate_lockout").prop("checked"));
		perms[1] = fot($("#perm_lift_lockout").prop("checked"));
		perms[2] = fot($("#perm_manage_users").prop("checked"));
		perms[3] = fot($("#perm_manage_billing_methods").prop("checked"));
		perms[4] = fot($("#perm_global_card_access").prop("checked"));
		perms[5] = fot($("#perm_global_profile_access").prop("checked"));
		perms[6] = fot($("#perm_financial_ban").prop("checked"));//need put in
		perms[7] = fot($("#perm_full_ban").prop("checked"));//need put in
		var code = perms.join("");
	} else {
		code = role;
	}

	console.log(code);

	send_data = {
	  m: "company",
	  access_granted: code,
	  access_denied:  null,
	};

	pony.fetch('{{url()->current()}}', send_data, function(data) {
			console.log(data);
			$("#role_prompt").html("Saved!").show();
			setTimeout(function(){
				$("#role_prompt").hide();
				$(".movers").attr('disabled', false);
    			//location.reload();
			}, 2000);

	}, function(data){
			$("#role_prompt").html("Error!").show();
			setTimeout(function(){
				$("#role_prompt").hide();
				$(".movers").attr('disabled', false);

			}, 2000);
	},function(data){
			$("#role_prompt").html("Error!").show();
			setTimeout(function(){
				$("#role_prompt").hide();
				$(".movers").attr('disabled', false);

			}, 2000);
	});
	
}


var active_mode = null;

function popUp(mode) {
	active_mode = mode;
	$('#home_access, #no_home_access, #profile_access, #no_profile_access').hide();
	switch(mode) {
		case "homes":
			setupHomes();
		break;
		case "profiles":
			setupProfiles();
		break;
		default:
			console.log("error.. no mode set");
			return false;
		break;
	}

	$('#myModal').modal({
        show: 'true'
    });
    
}

function setupHomes() {
	var select   = $('#home_access');
	var deselect = $('#no_home_access');

	$(".modal-title").html("User Home Access");
	select.empty().show();
	deselect.empty().show();

	for ( home in loaded_homes ) {
		if ( loaded_homes[home].has_access ) {
		  select.append('<option value="'+loaded_homes[home].data.id+'">'+ loaded_homes[home].data.title +'</option>');
		} else {
		  deselect.append('<option value="'+loaded_homes[home].data.id+'">'+ loaded_homes[home].data.title +'</option>');
		}
	}

}

function setupProfiles() {
	var select   = $('#profile_access');
	var deselect = $('#no_profile_access');

	$(".modal-title").html("User Profile Access");
	select.empty().show();
	deselect.empty().show();

	for ( profile in loaded_profiles ) {
		if ( loaded_profiles[profile].has_access ) {
		  select.append('<option value="'+loaded_profiles[profile].data.id+'">'+ loaded_profiles[profile].data.title +'</option>');
		} else {
		  deselect.append('<option value="'+loaded_profiles[profile].data.id+'">'+ loaded_profiles[profile].data.title +'</option>');
		}
	}

}

var loaded_homes = [];
var loaded_profiles = [];

@php
 	$sp = $cuser->shared_profiles->pluck('profile_id')->all();
 	$sh = $cuser->shared_homes->pluck('home_id')->all();
@endphp

@foreach($company->homes as $home)
 @php
		if(in_array($home->id, $sh)) {
 @endphp
			loaded_homes[loaded_homes.length] = {has_access: true, data: {!! trim($home) !!} }; 
 @php
		}else{
 @endphp
			loaded_homes[loaded_homes.length] = {has_access: false, data: {!! trim($home) !!} }; 
 @php
		}
 @endphp

@endforeach

@foreach($company->profiles as $profile)
 @php
		if( in_array($profile->id, $sp) ) {
 @endphp
			loaded_profiles[loaded_profiles.length] = {has_access: true, data: {!! trim($profile) !!} }; 
 @php
		}else{
 @endphp
			loaded_profiles[loaded_profiles.length] = {has_access: false, data: {!! trim($profile) !!} }; 
 @php
		}
 @endphp
@endforeach

console.log(loaded_homes, loaded_profiles);
</script>

@stop