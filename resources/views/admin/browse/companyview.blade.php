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
			<a href="{{ URL::route('admin-browse-companies-edit', array('company' => $company->id)) }}" class="btn btn-metis-6 btn-lg btn-rect">Edit overview</a> 
			<a href="{{ URL::route('admin-browse-companies-billing', array('company' => $company->id)) }}" class="btn btn-metis-5 btn-lg btn-rect">Edit billing</a> 
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
<div class="row">
	<div class="col-md-6">
		<div class="pull-right">
			{{ $profiles->links() }}
		</div>
		<h3>Profiles</h3>
		<div class="clearfix"></div>
		@if($profiles->count() > 0)
		@foreach($profiles as $prof)
		<div class="box">
			<div class="panel-body">
				<div class="pull-right"><a href="{{ URL::route('profile', array('profile' => $prof->id)) }}" target="_blank" class="btn btn-rect btn-metis-4">View</a> <a href="{{ URL::route('profile', array('profile' => $prof->id)) }}" target="_blank" class="btn btn-rect btn-metis-3">Edit</a></div>
				<h5><strong>{{ $prof->title }}</strong></h5>
			</div>
		</div>
		@endforeach
		@else
		<div class="box">
			<div class="panel-body">
				<h4 class="text-muted text-center"><em>No profiles</em></h4>
			</div>
		</div>
		@endif
	</div>
	<div class="col-md-6">
		<h3>Users</h3>
		<div class="clearfix"></div>
		@if($users->count() > 0)
		@foreach($users as $cuser)
		<div class="box">
			<div class="panel-body">
				<span class="pull-right">
					<a href="{{ URL::route('admin-browse-users-view', array('user_wt' => $cuser->id)) }}" class="btn btn-rect btn-metis-4">View</a>
					<a href="{{ URL::route('admin-browse-users-company-link-rev', array('user_wt' => $cuser->id, 'company_wt' => $company->id)) }}" class="btn btn-rect btn-metis-3">Edit link</a>
				</span>
				<h5><strong>{{ $cuser->getfullName() }}</strong></h5>
			</div>
		</div>
		@endforeach
		@else
		<div class="box">
			<div class="panel-body">
				<h4 class="text-muted text-center"><em>No users</em></h4>
			</div>
		</div>
		@endif
	</div>
</div>
@stop