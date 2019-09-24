@extends('layouts.master')
@use-slim-footer

@php
$expand_title = true;

 $page_header = "Forgot Password";
  $meta_description = "Get help when you've lost your MHS America account password.";
@endphp

@section('incls-head')
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/static-footer.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
@stop

@section('content-above')
<div id="wrap">
@stop

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-push-4 col-sm-10 col-sm-push-1">
            <p class="text-center margin-b">
                <a href="/"><img src="/img/logo-2014-mini.png" alt="MHS America"></a>
            </p>
            @if(Session::get('error') != '')
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading"><h1 class="h1ph">Forgot Password</h1></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ URL::route('account-recovery-password-post') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputUsername3" class="col-sm-3 control-label">
                            Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" id="inputUsername3" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">
                            Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="btn btn-success cta btn-sm">Reset my password</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <p>Remember your username? <a href="{{ URL::route('account-login') }}">Login</a></p>
                    <span>Don't have an account? <a href="{{ URL::route('account-register') }}">Register</a></span>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content-below')
</div>
@stop