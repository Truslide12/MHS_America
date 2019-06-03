@extends('layouts.master')
@fix-navbar
@use-navbar-divider

@section('content')
<div class="row white">
	<div class="col-md-12">
		<span class="pull-right push-down">
			<a href="{{ URL::route('account-settings') }}" class="btn btn-default">Account Settings</a> <a href="{{ URL::route('account-logout') }}" class="btn btn-default">Sign out</a>
		</span>
		<h1>Dashboard&nbsp;&nbsp;&nbsp;<small><img src="{{ $user->gravatar(25) }}" class="img-thumbnail" style="vertical-align:bottom;"> {{ ($user->first_name =='' || $user->last_name == '') ? $user->username : $user->first_name . ' ' . $user->last_name }}</small></h1>
		<hr>
	</div>
</div>
<div class="row white">
	<div class="col-md-12">
		<h2>Activate Business Features</h2>
		<p>For the safety of yourself and MHS company partners, we ask for additional personal information to be associated with your account before unlocking access to business features.</p>
	</div>
	<div class="col-sm-8">
		@if($errors)
			{{ implode(', ', $errors->all()) }}
		@endif
		<form role="form" action="{{ URL::route('account-business-activate-post') }}" method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="firstname">First Name</label>
				<input type="text" class="form-control" id="firstname" name="firstname" value="{{ Input::old('firstname') }}">
			</div>
			<div class="form-group">
				<label for="lastname">Last Name</label>
				<input type="text" class="form-control" id="lastname" name="lastname" value="{{ Input::old('lastname') }}">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" value="{{ Input::old('email') }}">
			</div>
			<div class="form-group">
				<label for="addressA">Address 1</label>
				<input type="text" class="form-control" id="addressA" name="addressa" value="{{ Input::old('addressa') }}">
			</div>
			<div class="form-group">
				<label for="addressB">Address 2</label>
				<input type="text" class="form-control" id="addressB" name="addressb" value="{{ Input::old('addressb') }}">
			</div>
			<div class="row">
				<div class="form-group col-md-8">
					<label for="city">City</label>
					<input type="text" class="form-control" id="city" name="city" value="{{ Input::old('city') }}">
				</div>
				<div class="form-group col-md-4">
					<label for="state">State</label>
					<select id="state" name="state" class="form-control">
					<option value="CA">ca</option>
						@foreach(State::all() as $state)
						<option value="{{ $state->id }}" @if(Input::old('state') == $state->id) selected @endif>{{ $state->title }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-8">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" id="phone" name="phone" value="{{ Input::old('phone') }}">
				</div>
				<div class="form-group col-md-4">
					<label>&nbsp;</label><br>
					<button type="submit" class="btn btn-block btn-success cta" style="text-align:left;padding:6px 12px 6px 15px">
						<i class="glyphicon glyphicon-chevron-right pull-right" style="margin-top:2px"></i>
						Let's get started
					</button>
				</div>
			</div>
		</form>
	</div>
	<div class="col-sm-4">
		<h3>Note</h3>
		<p>Please enter your own information as if you'll be working with any number of companies. For example, please do not use company email addresses or business phone numbers on this particular form.</p>
		<p>By submitting this form, you agree to abide by our <a href="#">Terms of Use</a> and <a href="#">Ethical Business Practices</a>.</p>
	</div>
</div>
@stop