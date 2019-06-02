@extends('layouts.business')
@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('heading')
<h3>Business Center</h3>
<h4><a href="{{ URL::route('account-business-company', ['company' => $company->id]) }}">{{ $company->title }}</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> <a href="{{ URL::route('account-business-company-users', ['company' => $company->id]) }}">User Access</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> New User</h4>
@stop

@section('businesscontent')
<div class="row white">
	<div class="col-md-12">
		<div class="pull-right margin-t no-margin-xs">
			<a class="btn btn-default btn-align-fix" href="{{ URL::route('account-business-company-users', array('company' => $company->id)) }}">Back<span class="hidden-xs"> to User Access</span></a>
		</div>
		<h3 class="margin-b-wide">Link new users</h3>
	</div>
</div>
<div class="row white" style="min-height:500px">
	<div class="col-sm-8 col-sm-offset-2">
		@if($errors->count() > 0)
		<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			@foreach($errors->all() as $error)
				{{ $error }}
			@endforeach
		</div>
		@endif
		@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			{{ Session::get('success') }}
		</div>
		@endif
		<div class="panel panel-default">
			<div class="panel-body">
				<p>To grant a user access to the company, enter their email address. They will receive a temporary verification code and instructions on how to link to the company.</p>
				<form class="form-horizontal" role="form" action="{{ URL::route('account-business-company-users-create-post', array('company' => $company->id)) }}" method="POST">
					<div class="form-group">
						<div class="col-md-12">
							<div class="input-group">
								<input type="text" class="form-control" name="email" required>
								<span class="input-group-btn">
									<button type="submit" class="btn btn-success">
										<i class="fa fa-link"></i> Link User
									</button>
								</span>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<h4>Pending links</h4>
				@if(count($links) == 0)
				<hr>
				<h3 class="text-muted text-center"><em>No links pending</em></h3>
				@endif
			</div>
			@if(count($links) > 0)
			<table class="table table-striped">
				<tbody>
					@foreach($links as $link)
					<tr>
						<td class="col-xs-10">{{ $link->email }}</td>
						<td class="col-xs-2 text-right"><a href="#" class="btn btn-xs btn-danger no-padding-y" aria-label="Delete">&times;</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@endif
		</div>
	</div>
</div>
@stop