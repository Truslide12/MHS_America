@extends('layouts.boilerplate')

@section('incls-head')
<link rel="stylesheet" type="text/css" href="/css/admin-login.css">
@stop

@section('body')
<div id="fullscreen_bg" class="fullscreen_bg"/>

<div class="container">

	<form action="{{ URL::route('admin-login-post') }}" method="POST" class="form-signin">
		<h1 class="form-signin-heading text-muted">
			<img src="/img/logo-sept-08-2014-white-sm.png" alt="MHS America" class="img-responsive">
			<span class="sr-only">MHS America</span>
		</h1>
		@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
		@endif
		@if($errors->any())
		@foreach($errors->all() as $error)
		<div class="alert alert-danger">
			{{ $error }}
		</div>
		@endforeach
		@endif
		<input type="text" name="username" class="form-control" placeholder="Username" required="" autofocus="">
		<div id="box-separator"></div>
		<input type="password" name="password" class="form-control" placeholder="Password" required="">
		<button class="btn btn-lg btn-info btn-block" type="submit">
			Sign In
		</button>
		{{ csrf_token_field() }}
	</form>

</div>
@stop
