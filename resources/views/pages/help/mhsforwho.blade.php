@extends('layouts.page')

@section('page-title')
MHS For Who?
@stop

@section('page-content')
<div style="padding: 25px;">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			
			@include("pages.help.menu")
		</div>
		<div class="col-md-8">
			<h3>MHS Can be used by anyone</h3>
			<p style="margin-bottom: 25px;">
					MHS is a tool designed to be used by anyone with an intrest in the mobile and manufactured home industry. 
			</p>
			<div class="row">
				<div class="col-md-12 ">
					<h3>Is MHS Right for You?</h3>
				</div>
				<div class="col-md-3 ">
					<a href="/HomeBuyer">Home Buyers</a>
				</div>
				<div class="col-md-3 ">
					<a href="/HomeOwner">How Owners</a>
				</div>
				<div class="col-md-3 ">
					<a href="/ParkOwner">Park Owners</a>
				</div>
				<div class="col-md-3 ">
					<a href="/SalesAgent">Sales Agent</a>
				</div>
			</div>
		</div>

	</div>
</div>
@stop
