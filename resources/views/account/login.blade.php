@extends('layouts.master')
@use-slim-footer

@section('incls-head')
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/static-footer.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/login.css">
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
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ URL::route('account-login-post') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    @if($redirect != '')
                    <input type="hidden" name="redirect" value="{{ $redirect }}">
                    @endif
                    <div class="form-group">
                        <label for="inputUsername3" class="col-sm-3 control-label">
                            Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" id="inputUsername3" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <input type="checkbox" name="remember" id="optRemember" value="1"/>
                                <label for="optRemember">Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="btn btn-success cta btn-sm">Sign in</button>
							<button type="reset" class="btn btn-default cta btn-sm">Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                    Don't have an account? <a href="{{ URL::route('account-register') }}">Register</a></div>
            </div>
        </div>
    </div>
@stop

@section('content-below')
</div>
@stop