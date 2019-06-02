@extends('admin.layouts.master')

@section('sidemenu')
@include('admin.layouts.partial.side-browse')
@stop

@section('content')
<div class="row">
	<div class="col-md-12">
		<h2>Edit user <i class="fa fa-arrows-h"></i> company link <small>LINK ID: {{ $link->id }}</small></h2>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<h4>User</h4>
		<hr>
		<h3>{{ ($profile->first_name == '' || $profile->last_name == '') ? $profile->username : $profile->first_name. ' ' . $profile->last_name }} 
			<small>ID: {{ $profile->id }} 
				@if($profile->business == 1)
				<span class="label label-success">BUSINESS</span>
				@else
				<span class="label label-danger"><i class="fa fa-exclamation-triangle"></i> BUSINESS</span>
				@endif
			</small>
		</h3>
		<p>
			<a href="{{ URL::route('admin-browse-users-view', array('user_wt' => $profile->id)) }}" class="btn btn-metis-6 btn-rect">View user</a> <a href="{{ URL::route('admin-browse-users-company-sever-user', array('user_wt' => $profile->id, 'company_wt' => $company->id)) }}" class="btn btn-danger btn-rect"><i class="fa fa-exclamation-triangle"></i> Sever user</a>
		</p>
	</div>
	<div class="col-md-6">
		<h4>Company</h4>
		<hr>
		<h3>{{ $company->title }} <small>ID: {{ $company->id }}</small></h3>
		<p>
			<a href="{{ URL::route('admin-browse-companies-view', array('company_wt' => $company->id)) }}" class="btn btn-metis-6 btn-rect">View company</a> <a href="{{ URL::route('admin-browse-users-company-sever-company', array('user_wt' => $profile->id, 'company_wt' => $company->id)) }}" class="btn btn-danger btn-rect"><i class="fa fa-exclamation-triangle"></i> Sever company</a>
		</p>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<h3>&nbsp;</h3>
		<form class="form-horizontal" role="form">
			<div class="form-group-dis">
				<label>Role</label>
				<div class="">
					<div class="input-group">
						<select class="form-control" id="roleSelect">
						@foreach(Role::all() as $role)
							<option value="{{ $role->id }}"@if($role->id == $link->role_id) selected @endif>{{ $role->name }}</option>
						@endforeach
						</select>
						<span class="input-group-btn">
							<button data-action="update-role" data-relation="company-user" data-id="{{ $link->id }}" data-src="roleSelect" class="btn btn-metis-5 btn-rect">Update</button>
						</span>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-6">
		<h3>&nbsp;</h3>
		<label>&nbsp;</label>
		<p>
			<button data-action="suspend" data-relation="company-user" data-id="{{ $link->id }}" class="btn btn-metis-5 btn-rect">Suspend link</button>
		</p>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<h3>Profile permission links</h3>
		@if(count($profiles) > 0)
		@foreach($profiles as $prof)
		<div class="box">
			<div class="panel-body">
				<a href="{{ URL::route('admin-browse-users-profile-link', array('user_wt' => $profile->id, 'profile_wt' => $prof->id)) }}" class="btn btn-metis-5 btn-rect pull-right">Edit sub-link</a>
				<h4>{{ $prof->title }}</h4>
			</div>
		</div>
		@endforeach
		@else
		<div class="box">
			<div class="panel-body">
				<h4 class="text-muted text-center"><em>No profile-specific permissions found</em></h4>
			</div>
		</div>
		@endif
	</div>
</div>
@stop