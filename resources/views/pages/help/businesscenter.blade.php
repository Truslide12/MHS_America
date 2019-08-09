@extends('layouts.page')

@section('page-title')
The Business Center
@stop

@section('page-content')
<div style="padding: 25px;">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			
			@include("pages.help.menu")
		</div>
		<div class="col-md-8">
			<h3>What is the Business Center?</h3>
			<p>
				The Business Center is the hub for all your company and personal business accounts. From the business center you will be able to connect to companies you work with, or create and manage your own companies. After selecting one of your business accounts, you will be given access to that companies resources. From each companies Business Center you wil be able to manage users, community profiles, home listings, payment information, and general settings (please note depending on your company role you may only have access to some of these features). For more detailed help with Business Center features, please see our Business Center Help page.
			</p>
		</div>

	</div>
</div>
@stop
