@extends('admin.layouts.master')

@section('sidemenu')
@include('admin.layouts.partial.side-browse')
@stop

@section('content')
<div class="row">
	<div class="col-md-12">
		<a href="{{ URL::route('admin-browse-companies-delete', array('company' => $company->id)) }}" class="btn btn-xs btn-danger btn-rect pull-right"><i class="fa fa-times"></i> Remove company</a>
		<h1>{{ $company->title }} <small>ID: {{ $company->id }}</small></h1>
		<p class="lead text-muted">
			<small>
				<small>Created: {{ $company->created_at->format('M d, Y H:i:s') }}</small>
			</small>
		</p>
	</div>
</div>
<div class="row">
	<hr>
	<div class="col-md-12">
		<div>
			<a href="{{ URL::route('admin-browse-companies-view', array('company' => $company->id)) }}" class="btn btn-metis-6 btn-lg btn-rect">Return</a> 
			<a href="#" class="btn btn-metis-5 btn-lg btn-rect">Edit billing</a> 
			@if($company->customer_identifier == '')
			<button data-action="generate_customer" data-relation="company" data-id="{{ $company->id }}" class="btn btn-metis-5 btn-lg btn-rect">Generate Stripe Customer</button> 
			@else
			<button data-action="suspend" data-relation="company" data-id="{{ $company->id }}" class="btn btn-metis-5 btn-lg btn-rect">Disable company</button> 
			@endif
			@if($company->verified)
			<button data-action="verify" data-relation="company" data-id="{{ $company->id }}" class="btn btn-metis-5 btn-lg btn-rect">Unverify company</button>  
			@else
			<button data-action="verify" data-relation="company" data-id="{{ $company->id }}" class="btn btn-metis-3 btn-lg btn-rect">Verify company</button> 
			@endif
		</div>
	</div>
</div>
<div class="row">
	<hr>
	<div class="col-md-12">
		@if(!$has_stripe_account)
		<div class="alert alert-warning">
			Stripe customer account not generated 
			<a href="#" data-action="generate_customer" data-relation="company" data-id="{{ $company->id }}" class="btn btn-xs btn-rect btn-info pull-right">Generate</a>
		</div>
		@else
		@if($customer->delinquent)
		<div class="alert alert-warning">
			Stripe customer account is marked delinquent
		</div>
		@endif
		@endif
	</div>
</div>
@if($has_stripe_account)
<div class="row">
	<div class="col-md-5">
		<h3>Account Balance</h3>
		<h1>${{ number_format($customer->account_balance, 2) }}</h1>
	</div>
	<div class="col-md-7">
		<h3>Invoices</h3>
		<ul class="list-group">
			<li class="list-group-item">No invoices</li>
		</ul>
	</div>
</div>
@endif
@stop