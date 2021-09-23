@extends('admin.layouts.master')

@section('sidemenu')
@include('admin.layouts.partial.side-browse')
@stop

@section('content')
<div class="row">
	<div class="col-md-2">
		<img src="{{ $profile->gravatar() }}" class="thumbnail img-responsive">
	</div>
	<div class="col-md-10">
		<a href="{{ URL::route('admin-browse-users-delete', array('user' => $profile->id)) }}" class="btn btn-xs btn-danger btn-rect pull-right"><i class="fa fa-times"></i> Remove user</a>
		<h1>{{ ($profile->first_name == '' || $profile->last_name == '') ? $profile->username : $profile->first_name. ' ' . $profile->last_name }} <small>ID: {{ $profile->id }}</small></h1>
		<p class="lead text-muted">
			<small>
				{{ $profile->username }} &mdash; {{ $profile->email }}<br>
				<small>Member since: {{ $profile->created_at->format('M d, Y H:i:s') }}</small>
			</small>
		</p>
	</div>
</div>
<div class="row">
	<hr>
	<div class="col-md-12">
		<div>
			<a href="{{ URL::route('admin-browse-users-edit', array('user' => $profile->id)) }}" class="btn btn-metis-6 btn-lg btn-rect">Edit profile</a> 
			<a href="{{ URL::route('admin-browse-users-suspend', array('user' => $profile->id)) }}" class="btn btn-metis-5 btn-lg btn-rect">Suspend services</a> 
			<a href="{{ URL::route('admin-browse-users-ban', array('user' => $profile->id)) }}" class="btn btn-metis-5 btn-lg btn-rect">Ban account</a> 
		</div>
	</div>
</div>
<div class="row">
	<hr>
	<div class="col-md-12">
		@if($profile->business == 1)
		<div class="alert alert-success">
			Business services are activated on this account.
			<a href="#" class="btn btn-xs btn-rect btn-metis-1 pull-right hidden">Deactivate</a>
		</div>
		@else
		<div class="alert alert-warning">
			Business services are not activated on this account.
			<a href="#" class="btn btn-xs btn-rect btn-info pull-right">Activate</a>
		</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<h3>Profiles</h3>
		@foreach($profile->profiles()->withPivot('company_id')->get() as $prof)
		<div class="box">
			<div class="panel-body">
				<a href="{{ URL::route('admin-browse-users-profile-link', array('user' => $profile->id, 'profile' => $prof->id)) }}" class="btn btn-rect btn-metis-3 pull-right">Edit link</a>
				<h5><strong>{{ $prof->title }}</strong></h5>
				<small>
					With the company: 
					@if($prof->pivot->company_id > 0)
					{{ Company::find($prof->pivot->company_id)->title }}
					@else
					<span class="text-muted"><em>No company</em></span>
					@endif
				</small>
			</div>
		</div>
		@endforeach
	</div>
	<div class="col-md-6">
		<h3>Companies</h3>
		@foreach($profile->companies as $company)
		<div class="box">
			<div class="panel-body">
				<a href="{{ URL::route('admin-browse-users-company-link', array('user' => $profile->id, 'company' => $company->id)) }}" class="btn btn-rect btn-metis-3 pull-right">Edit link</a>
				<h5><strong>{{ $company->title }}</strong></h5>
			</div>
		</div>
		@endforeach
	</div>
</div>
@stop