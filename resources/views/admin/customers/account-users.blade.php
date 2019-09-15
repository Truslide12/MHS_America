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
						<a href="?view=details" style="margin:auto;width: 20%;" class="btn btn-success">Details</a>
						<a href="?view=homes" style="margin:auto;width: 20%;" class="btn btn-success">Homes</a>
						<a href="?view=profiles" style="margin:auto;width: 20%;" class="btn btn-success">Profiles</a>
						<a href="?view=users" style="margin:auto;width: 20%;" class="btn btn-success" disabled>Users</a>
					</th>
				</tr>
			</thead>
		</table>
		<table class="table table-bordered table-hover table-striped dataTable" style="border-top:0;font-size: 1.5em;">
			<thead>
				<tr>
					<td colspan="4" class="salesteam">Account Users</td>
				</tr>
			</thead>
			<tbody>

				@if( count($account->companyUsers) > 0 )
				@foreach($account->companyUsers as $user)
				<tr>
					<td width="75%" colspan="3">{{$user->first_name}} {{$user->last_name}}</td>
					<td width="25%" style="text-align: center;"><a href="/luna/browse/users/{{$user->id}}" target="_blank">View</a> | <a href="/luna/browse/users/{{$user->id}}/edit" target="_blank">Edit</a></td>
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