@extends('layouts.master')
@use-slim-footer

@php
 $page_header = "Register";
  $meta_description = "Create your free MHS America user account and start exploring the mobile home industry today for free.";
@endphp

@section('incls-head')
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/static-footer.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/login.css">
    <style type="text/css">.checkbox label:after{text-align:left;}</style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@stop

@section('content-above')
<div id="wrap">
@stop

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="h1h2">Register a free account...</h1>
			</div>
			<div class="panel-body">
				<div class="rowderp">
					<div class="col-md-12 padding-t">
						<p>Already have an account? <a href="{{ URL::route('account-login') }}">Login</a></p>
						<br>
						@if(Session::has('error'))
						@foreach(Session::get('error') as $error)
						<div class="alert alert-warning" role="alert">
							{{ $error }}
						</div>
						@endforeach
						@endif
						@if($errors->count() > 0)
						@foreach($errors->all() as $error)
						<div class="alert alert-danger" role="alert">
							{{ $error }}
						</div>
						@endforeach
						@endif
						@if(Session::has('notice'))
						<div class="alert alert-success" role="alert">
							{{ Session::get('notice') }}
						</div>
						@endif
					</div>
				<form class="form-horizontal" action="{{ URL::route('account-register-post') }}" method="POST" role="form">
					{{ csrf_field() }}
					<div class="col-sm-6">
						<div class="form-group @if($errors->has('username')) has-error @endif">
		                    <label for="inputUsername" class="col-sm-3 control-label">
		                        Username</label>
		                    <div class="col-sm-9">
		                        <input textype="text" class="form-control" name="username" value="{{ Input::old('username') }}" id="inputUsername" tabindex="1" required>
		                        <small>No spaces, letters and numbers only</small>
		                    </div>
		                </div>
		                <div class="form-group @if($errors->has('email')) has-error @endif">
		                    <label for="inputEmail" class="col-sm-3 control-label">
		                        Email</label>
		                    <div class="col-sm-9">
		                        <input type="text" class="form-control" name="email" value="{{ Input::old('email') }}" id="inputEmail" tabindex="2" required>
		                    </div>
		                </div>
					</div>
					<div class="col-sm-6 @if($errors->has('password') || $errors->has('password_confirmation')) has-error @endif">
						<div class="form-group">
		                    <label for="inputPassword" class="col-sm-3 control-label">
		                        Password</label>
		                    <div class="col-sm-9">
		                        <input type="password" class="form-control" name="password" id="inputPassword" tabindex="3" required>
		                        <small class="hidden-xs">&nbsp;</small>
		                    </div>
		                </div>
		                <div class="form-group @if($errors->has('password') || $errors->has('password_confirmation')) has-error @endif">
		                    <label for="inputConfirm" class="col-sm-3 control-label no-pad-md">
		                        Confirm password</label>
		                    <div class="col-sm-9">
		                        <input type="password" class="form-control" name="password_confirmation" id="inputConfirm" tabindex="4" required>
		                    </div>
		                </div>
					</div>
					<div class="col-md-12">
						<div class="form-group text-right @if($errors->has('agree')) has-error @endif">
							<script>
								function checkCheck(id)
								{	
									if ( $("input[name='agree']:checked").length > 0 ) {
										console.log("checked");
										$("#"+id).parent().addClass("checkedbox");
									} else { 
										console.log("not checked"); 
										$("#"+id).parent().removeClass("checkedbox");
									}
								}
							</script>
							<div class="padding-x">
								<div class="checkbox">
                					<input type="checkbox" name="agree" id="optAgree" value="1" tabindex="7"> 
                					<label for="optAgree">I agree to the <a href="{{ URL::route('page', array('slug' => 'terms')) }}" tabindex="5">terms of use</a> and <a href="{{ URL::route('page', array('slug' => 'privacy')) }}" tabindex="6">privacy policy</a></label>
                				</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<div class="col-md-12">
								<div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha_v2.site_key') }}"></div>
							</div>
						</div>
					</div>
	                <div class="col-md-6">
	                	<div class="form-group">
	                		<div class="col-md-12">
	                			<button type="submit" class="btn btn-success cta btn-lg pull-right" tabindex="8" style="position:relative;z-index:1;">Create account</button>
	                		</div>
	                	</div>
	                </div>
				</form>
				</div>
			</div>
        </div>
	</div>
</div>
@stop

@section('content-below')
</div>
@stop