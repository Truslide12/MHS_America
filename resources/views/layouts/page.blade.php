@extends('layouts.master')
@fix-navbar
@use-navbar-divider

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/pages.css">
@stop

@section('content')
<div class="row white">
	<div class="col-md-12">
		<h1>@yield('page-title')</h1>
		<div id="pagecontent" class="margin-b">
			@yield('page-content')
		</div>
	</div>
</div>
@stop