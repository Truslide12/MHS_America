@extends('admin.layouts.master')

@section('stylesheets')
	<style type="text/css">
		.stats_box li {float:none;display:table;}
	</style>
@stop

@section('sidemenu')
@include('admin.layouts.partial.side-dashboard')
@stop