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
			<a href="#" class="btn btn-metis-6 btn-lg btn-rect">Edit overview</a> 
			<a href="#" class="btn btn-metis-5 btn-lg btn-rect">Edit billing</a> 
			@if($company->trashed())
			<button data-action="suspend" data-relation="company" data-id="{{ $company->id }}" class="btn btn-metis-5 btn-lg btn-rect">Enable company</button> 
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

@stop