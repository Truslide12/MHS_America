@extends('layouts.master')
@use-slim-footer

@php
$expand_title = true;

 $page_header = "New Password";
  $meta_description = "Reset your MHS America account password.";
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
                <div class="panel-heading">Password Reset</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ URL::route('account-recovery-reset-password-post') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">
                            Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="New password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordAgain" class="col-sm-3 control-label">
                            Confirm</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password_confirmation" id="inputPasswordAgain" placeholder="Confirm password" required>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="btn btn-success cta btn-sm">Save new password</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                    Remember your current password? <a href="{{ URL::route('account-login') }}">Login</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content-below')
</div>
@stop