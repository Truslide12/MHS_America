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
					<th class="salesteam" colspan="7">Personal Accounts Index</th>
				</tr>
				<tr>
					<td>ID</td>
					<td>Customer</td>
					<td>Created</td>
					<td style="text-align: center;"><i class="fa fa-credit-card" title="Paid"></i></td>
				</tr>
			</thead>
			<tbody>
				@if( count($accounts) <= 0 )
				<tr>
					<td colspan="6" style="text-align: center;">There are no partners to be found.</td>
				</tr>
				@else
				@foreach($accounts as $partner)
				<tr>
					<td>{{$partner->id}}</td>
					<td><a href="{{ URL::route('admin-customer-edit', ['id'=> $partner->id]) }}">{{$partner->title}}</a></td>
					<td>{{$partner->created_at->format("m/d/Y")}}</td>
					<td style="text-align: center;"><i class="fa @if($partner->stripe_customer_id) fa-check @else fa-minus faded @endif"></i></td>
				</tr>
				@endforeach
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