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
					<td style="width: 20%;"> <strong>Claimed</strong> </td>		
				</tr>
				<tr>
					<td style="width: 20%;" nowrap>Fax #</td>
					<td style="width: 45%;">
					    <input type="text" name="title" class="form-control" value="{{ $account->phone }}">
					</td>
					<td style="width: 15%;text-align: right;padding-right: 15px;" nowrap><i class="fa fa-certificate"></i></td>
					<td style="width: 20%;"> <strong>Verified</strong> </td>		
				</tr>
				<tr>
					<td style="width: 20%;" nowrap>Email</td>
					<td style="width: 45%;">
					    <input type="text" name="title" class="form-control" value="{{ $account->stripe_customer_email }}">
					</td>
					<td style="width: 15%;text-align: right;padding-right: 15px;" nowrap><i class="fa fa-credit-card"></i></td>
					<td style="width: 20%;"> <strong>Billable</strong> </td>		
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
				<tr>
					<td colspan="4" class="salesteam">Account Homes
						<button class="btn btn-success pull-right">Gift Home</button>
					</td>
				</tr>
				@if( count($account->homes) > 0 )
				@foreach($account->homes as $home)
				<tr>
					<td colspan="3">{{$home->profile->title}} SPACE {{$home->space_number}}</td>
					<td style="text-align: center;"><a href="">View</a> | <a href="">Edit</a></td>
				</tr>
				@endforeach
				@else
				<tr>
					<td colspan="4">This Account has no home listings</td>
				</tr>
				@endif
				<tr>
					<td colspan="4" class="salesteam">Account Profiles</td>
				</tr>
				@if( count($account->profiles) > 0 )
				@foreach($account->profiles as $profile)
				<tr>
					<td colspan="3">{{$profile->title}}</td>
					<td style="text-align: center;"><a href="">View</a> | <a href="">Edit</a></td>
				</tr>
				@endforeach
				@else
				<tr>
					<td colspan="4">This Account has no home listings</td>
				</tr>
				@endif
				<tr>
					<td colspan="4" class="salesteam">Account Users</td>
				</tr>
				@if( count($account->companyUsers) > 0 )
				@foreach($account->companyUsers as $user)
				<tr>
					<td colspan="3">{{$user->first_name}} {{$user->last_name}}</td>
					<td style="text-align: center;"><a href="">View</a> | <a href="">Edit</a></td>
				</tr>
				@endforeach
				@else
				<tr>
					<td colspan="4">This Account has no users</td>
				</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>
@stop

@section('scripts')
    <!-- Date Picker script -->
    <script type="text/javascript" src="/js/adm/mhs.ppp.js"></script>
@stop