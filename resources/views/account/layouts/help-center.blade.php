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
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="h1h4">Account Help Center</h1>
			</div>
			<div class="panel-body">
				<div class="rowderp">
					@yield('helpcontent')
				</div>
			</div>
        </div>
	</div>
</div>
@stop

@section('content-below')
</div>
@stop