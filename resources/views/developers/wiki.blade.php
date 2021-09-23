@extends('layouts.master')
@use-navbar-divider
@section('incls-head')
<style type="text/css">
	#header-wrapper {margin-bottom:0;}
</style>
@stop

@section('content')
<div class="row gray2">
	<div class="col-md-12">
		<h2 class="margin-b">Developers' Wiki</h2>
	</div>
</div>
<div class="row white">
	<div class="col-md-3 padding-y">
			@include('developers.layouts.partial.menu')
	</div>
	<div class="col-md-9">
		{{ $page->content }}
	</div>
</div>
@stop