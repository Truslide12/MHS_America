@extends('admin.content')

@section('stylesheets')
    <!-- Date Picker stylesheet -->
    <link rel="stylesheet" type="text/css" href="/css/admin-ppp.css">
    <style type="text/css">
    	.faded {
    		opacity: 0.2;
    	}
    </style>
@stop

@section('content')
<div class="row">
	<div class="col-md-12" style="position: relative;">
		<h1>Customer Accounts</h1>
		<div style="position: absolute;top:0;right: 5px;"">
			<span class="wholabel techteam" style="">Tech. Team</span>
			<span class="wholabel salesteam" style="">Sales Team</span>
			<span class="wholabel supportteam" style="">Support Team</span>
		</div>
	</div>
	<div class="col-md-12">

		@include('layouts.partial.errors')

		<table class="table table-bordered table-hover table-striped dataTable" style="border-top:0;font-size: 1.5em;">
			<thead>
				<tr>
					<th class="salesteam" colspan="4">Manage @if($account->is_personal) Personal @else Company @endif Buisness Account</th>
				</tr>
				<tr>
					<th colspan="4" style="display: flex;">
						<a href="?view=details" style="margin:auto;width: 20%;" class="btn btn-success" disabled>Details</a>
						<a href="?view=homes" style="margin:auto;width: 20%;" class="btn btn-success">Homes</a>
						<a href="?view=profiles" style="margin:auto;width: 20%;" class="btn btn-success">Profiles</a>
						<a href="?view=users" style="margin:auto;width: 20%;" class="btn btn-success">Users</a>
					</th>
				</tr>
			</thead>
		</table>
		<table class="table table-bordered table-hover table-striped dataTable" style="border-top:0;font-size: 1.5em;">
			<thead>
				<tr>
					<td class="salesteam" colspan="4">@if($account->is_personal) Personal @else Company @endif Buisness Account</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td nowrap>Name</td>
					<td>
					    <input type="text" name="title" class="form-control" value="{{ $account->title }}">
					</td>		
					<td nowrap>Joined</td>
					<td>
						<input type="text" name="title" class="form-control" value="{{ $account->created_at->format('m/d/y') }}" disabled>
					</td>
				</tr>
				<tr>
					<td colspan="4" class="salesteam">Contact Information</td>
				</tr>
				<tr>
					<td style="width: 20%;" nowrap>Phone #</td>
					<td style="width: 45%;">
					    <input type="text" name="title" class="form-control" value="{{ $account->phone }}">
					</td>
					<td style="width: 15%;text-align: right;padding-right: 15px;" nowrap><i class="fa fa-flag"></i></td>
					<td style="width: 20%;">
						@if($account->claimed)
						<strong>Claimed</strong>
						@else
						<strong>Unclaimed</strong>
						@endif
					</td>		
				</tr>
				<tr>
					<td style="width: 20%;" nowrap>Fax #</td>
					<td style="width: 45%;">
					    <input type="text" name="title" class="form-control" value="{{ $account->phone }}">
					</td>
					<td style="width: 15%;text-align: right;padding-right: 15px;" nowrap><i class="fa fa-certificate"></i></td>
					<td style="width: 20%;">
						@if($account->verified)
						<strong>Verified</strong>
						@else
						<strong>Unverified</strong>
						@endif
					</td>		
				</tr>
				<tr>
					<td style="width: 20%;" nowrap>Email</td>
					<td style="width: 45%;">
					    <input type="text" name="title" class="form-control" value="{{ $account->stripe_customer_email }}">
					</td>
					<td style="width: 15%;text-align: right;padding-right: 15px;" nowrap><i class="fa fa-credit-card"></i></td>
					<td style="width: 20%;">
						@if($account->stripe_customer_id)
						<strong>Billable</strong>
						@else
						<strong>Not Billable</strong>
						@endif
					</td>		
				</tr>
				<tr>
					<td colspan="4" class="salesteam">Location</td>
				</tr>
				<tr>
					<td style="width: 20%;" nowrap>Address 1</td>
					<td colspan="3">
					    <input type="text" name="title" class="form-control" value="{{ $account->street_addr }}">
					</td>	
				</tr>
				<tr>
					<td style="width: 20%;" nowrap>Address 2</td>
					<td colspan="3">
					    <input type="text" name="title" class="form-control" value="{{ $account->street_addr2 }}">
					</td>		
				</tr>
				<tr>
					<td style="width: 20%;" nowrap>City</td>
					<td style="width: 45%;">
					    <input type="text" name="title" class="form-control" value="{{ $account->city->place_name }}">
					</td>
					<td style="width: 15%;">
						<select class="form-control">
							<option>{{strtoupper($account->state->abbr)}}</option>
						</select>
					</td>
					<td style="width: 20%;">
						<input class="form-control" type="text" name="" value="92399">
					</td>		
				</tr>
			</tbody>
		</table>
	</div>
</div>
@stop

@section('scripts')
    <!-- Date Picker script -->
    <script type="text/javascript" src="/js/adm/mhs.ppp.js"></script>
@stop