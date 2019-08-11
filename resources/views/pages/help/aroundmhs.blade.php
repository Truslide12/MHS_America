@extends('layouts.page')

@section('page-title')
Around MHS America
@stop

@section('page-content')
<div style="padding: 25px;">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			
			@include("pages.help.menu")
		</div>
		<div class="col-md-8">
			<h3>Go Exploring</h3>
			<p>
					At MHS America we encourage our users to explore anywhere in the country for mobile and manufactured homes and services. By using our Explore tool you can select and state, county, or city in the United States for a full directory of all available homes and services.
			</p>

			<h3>MHS Search</h3>
			<p>
				By using our search you can get a detailed mapping of all communities within an area as well as seeing all homes and spaces available in each community.
			</p>

			<h3>The Dashboard</h3>
			<p>
				The Dashboard is your go-to place for non business related account activity. From the Dashboard you can View and Manage your watched homes, and manage basic account settings such as password, email, and Avatar. The dashboard can also be used to activate business features giving you access to the Business Center.
			</p>

			<h3>The Business Center</h3>
			<p>
				The Business Center is the hub for all your company and personal business accounts. From the business center you will be able to connect to companies you work with, or create and manage your own companies. After selecting one of your business accounts, you will be given access to that companies resources. From each companies Business Center you will be able to manage users, community profiles, home listings, payment information, and general settings (please note depending on your company role you may only have access to some of these features). For more detailed help with Business Center features, please see our <a href="">Business Center Help</a> page.
			</p>
		</div>
	</div>
</div>
@stop
