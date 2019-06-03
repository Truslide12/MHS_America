@extends('layouts.master')
@fix-navbar
@use-navbar-divider

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('content')
<div class="row white">
	<div class="col-md-12">
		<span class="pull-right push-down">
			<a href="{{ URL::route('account') }}" class="btn btn-default">Back to Dashboard</a> <a href="{{ URL::route('account-logout') }}" class="btn btn-default">Sign out</a>
		</span>
		<h1>Account settings</h1>
		<hr>
	</div>
</div>
<div class="row white">
	<div class="col-md-6">
		<h3>Personal information</h3>
		@if(Session::has('success'))
		<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			{{ Session::get('success') }}
		</div>
		@endif
		<form class="form-horizontal margin-t" action="{{ URL::route('account-settings-post') }}" method="POST" role="form">
			<div class="form-group">
				<label class="col-md-3 control-label">
					Username
				</label>
				<div class="col-md-9">
					<p class="badge form-control-static" style="line-height:auto;padding:7px;">{{ $user->username }}</p> Used for login
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">
					First name
				</label>
				<div class="col-md-9">
					<input type="text" name="first_name" value="{{ Input::old('first_name', $user->first_name) }}" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">
					Last name
				</label>
				<div class="col-md-9">
					<input type="text" name="last_name" value="{{ Input::old('last_name', $user->last_name) }}" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">
					Email
				</label>
				<div class="col-md-9">
					<input type="text" name="email" value="{{ Input::old('email', $user->email) }}" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-9 col-md-offset-3">
					<p class="form-control-static">If you'd like to change your password, enter the new password twice below.</p>
				</div>	
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">
					Password
				</label>
				<div class="col-md-9">
					<input type="password" name="password" class="form-control" placeholder="New password">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">
					Confirm it
				</label>
				<div class="col-md-9">
					<input type="password" name="password_confirmation" class="form-control" placeholder="Again">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-9 col-md-offset-3">
					{{ csrf_token_field() }}
					<button type="submit" class="btn btn-primary cta">Submit changes</button>
					<p></p>
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-6">
		<h3>Avatar</h3>
		<div class="row">
			<div class="col-xs-4 col-md-6">
				<img src="{{ $user->gravatar(200) }}" class="img-thumbnail img-responsive">
			</div>
			<div class="col-xs-8 col-md-6">
				<p><small>For simplicity, our display pictures (avatars) are powered by Gravatar, a cross-site avatar service commonly used on discussion forums and blogs.</small></p>

				<p><small>If you would like a display picture, <a href="//www.gravatar.com" target="_blank">create a Gravatar account</a> under the same email address on file with us.</small></p>
			</div>
		</div>
		<div>
			<p>&nbsp;</p>
		</div>
	</div>
</div>
@stop