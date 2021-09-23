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
					<th class="salesteam" colspan="4"><i class="fa fa-search"></i> Accounts Lookup</th>
				</tr>
				<tr>
					<td colspan="4" style="text-align: center;">
					    <div class="input-group" style="width: 100%;">
					      <input type="text" name="partner" id="partner" class="form-control" placeholder="Start typing an account name">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="button" onclick="">Search</button>
					      </span>
					    </div>
					</td>
				</tr>
				<tr>
					<td>ID</td>
					<td>Customer</td>
					<td>Created</td>
					<td style="text-align: center;"><i class="fa fa-credit-card" title="Paid"></i></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="6" style="text-align: center;">No Results Found</td>
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