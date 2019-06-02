@extends('layouts.master')
@fix-navbar
@show-navbar-divider

@section('incls-head-early')
<link rel="stylesheet" type="text/css" href="/css/widgets.css">
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('content')
<div class="row white">
	<div class="col-md-12">
		<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="btn btn-default pull-right visible-xs visible-sm">Backto profile</a>
		<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="btn btn-default pull-right push-down hidden-xs hidden-sm">Back to profile</a>
		<h3>Profile manager</h3>
		<h4>
			<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}">{{ $profile->title }}</a> <small><i class="fa fa-chevron-right"></i></small> 
			<a href="{{ URL::route('editor-homes', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}">Homes</a> <small><i class="fa fa-chevron-right"></i></small> 
			Edit Home
			<br>
			<small>{{ $home->title == '' ? ($home->beds.' bed '.$home->baths.' bath Home') : $home->title }}</small>
		</h4>
		<hr>
	</div>
</div>
<div class="row white" style="min-height:500px;position:relative;">
	<div class="col-md-3">
		<ul class="list-process">
			<li>Home information</li>
			<li class="active">{{ $act_new ? 'Upload photos' : 'Photos' }}</li>
			<li>{{ $act_new ? 'Run a campaign <small>(optional)</small>' : 'Campaign' }}</li>
			@if($act_new || !$home->published)<li>Publish</li>@endif
		</ul>
	</div>
	<div class="col-md-9">
		<div class="well">
		@if(Session::has('success'))
		<div class="alert alert-success"><span class="fa fa-check-circle"></span> {{ Session::get('success') }}</div>
		@elseif($errors->any())
		@foreach($errors->all() as $error)
		<div class="alert alert-danger"><span class="fa fa-warning"></span> {{ $error }}</div>
		@endforeach
		@endif
		<form class="form-horizontal" action="{{ URL::route('editor-edithome-photos-post', ['profile' => $profile->id, 'home' => $home->id]) }}" method="POST" enctype="multipart/form-data">
			<div class="panel panel-default">
				<div class="panel-body">
					<a href="#" class="btn btn-lg btn-primary">Upload file...</a>
				</div>
			</div>
			<div class="form-group margin-y">
				<div class="col-md-offset-2 col-md-8 margin-t-wide">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button type="submit" class="btn btn-lg btn-primary cta">Save photos &amp; continue</button>
				</div>
			</div>
		</form>	
		</div>
	</div>
</div>
@stop

@section('incls-body')
<style type="text/css">
	.photo-button{border:2px dashed #428bca;background:#efefef;display:inline-block;width:150px;height:150px;}
	.photo-button:hover,.photo-button:focus{border-color:#2a6496;}
	.photo-button .fa{font-size:200%;width:20px;height:20px;margin:65px;}
	.photo-button:hover .fa,.photo-button:focus .fa,.photo-button .fa.hover{display:none;}
	.photo-button:hover .fa.hover,.photo-button:focus .fa.hover{display:inline-block;}

	.list-process{list-style:none;margin-right:-10px;padding:0;font-size:120%;line-height:1.75em}
	.list-process li{padding:0 10px;}
	.list-process li.active{margin-right:-3px;border-right:3px solid #0099ff;font-weight:bold;background:#efefef;}
	.list-process li small{color:#777777;font-size:68%;}
</style>
@stop