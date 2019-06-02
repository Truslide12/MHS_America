@extends('layouts.business')
@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('heading')
<h3>Business Center</h3>
<h4><a href="{{ URL::route('account-business-company', ['company' => $company->id]) }}">{{ $company->title }}</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> User Access</h4>
@stop

@section('businesscontent')
<div class="row white">
	<div class="col-md-12">
		<div class="pull-right margin-t no-margin-xs">
			<a class="btn btn-default btn-align-fix" href="{{ URL::route('account-business-company', array('company' => $company->id)) }}">Back<span class="hidden-xs"> to {{ $company->title }}</span></a>
		</div>
		<h3>Manage user access</h3>
		<p class="text-muted margin-b">Click on a user's name to modify their permissions.</p>
	</div>
</div>
<div class="row white">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				@if($role->name == 'admin')<button type="button" class="btn btn-sm btn-danger pull-right" data-toggle="modal" data-target="#lockoutBox"><i class="fa fa-exclamation-circle"></i> Emergency lockout</button>@endif
				<a href="{{ URL::route('account-business-company-users-create', array('company' => $company->id)) }}" class="btn btn-sm btn-success"><i class="fa fa-link"></i> Link a new user</a>
				<a href="{{ URL::route('account-business') }}" class="btn btn-sm btn-default hidden">Change default user privileges</a>
			</div>
		</div>
	</div>
</div>
<div class="row white" style="min-height:500px">
	@foreach($company->companyUsers as $cuser)
	<div class="col-sm-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<h4 class="no-margin-t">
					<a href="{{ URL::route('account-business-company-user-edit', array('company' => $company->id, $cuser->id)) }}">{{ $cuser->first_name }} {{ $cuser->last_name }}</a>
					<br><small>{{ Role::find($cuser->pivot->role_id)->title }}</small>
				</h4>
			</div>
		</div>
	</div>
	@endforeach
</div>
@stop

@section('incls-body')
<!-- Modal -->
<div class="modal fade" id="lockoutBox" tabindex="-1" role="dialog" aria-labelledby="lockoutLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="lockoutLabel">Emergency Lockout</h4>
      </div>
      <div class="modal-body">
        <p>Emergency lockout allows an administrator to temporary lock out access from all users except those with bypass permission. You may return to this same dialog later to disable the lockout.</p>
        <p><small class="text-muted">Please note: All administrators have bypass by default. If a user has bypassed lockout and you feel the company / profiles have been compromised, please contact technical support immediately.</small></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Place company on lockdown</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@stop