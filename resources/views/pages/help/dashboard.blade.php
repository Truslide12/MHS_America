@extends('layouts.page')

@section('page-title')
The Dashboard
@stop

@section('page-content')
<div style="padding: 25px;">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			
			@include("pages.help.menu")
		</div>
		<div class="col-md-8">
			<h3>What is the Dashboard?</h3>
			<p>
					The Dashboard is your go-to place for non business related account activity. From the Dashboard you can View and Manage your watched homes, and manage basic account settings such as password, email, and Avatar. The dashboard can also be used to activate business features giving you access to the Business Center. 
			</p>
		</div>

	</div>
</div>
@stop
