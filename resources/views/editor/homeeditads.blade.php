@extends('layouts.master')
@fix-navbar
@use-navbar-divider

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
			<li>{{ $act_new ? 'Upload photos' : 'Photos' }}</li>
			<li class="active">{{ $act_new ? 'Run a campaign <small>(optional)</small>' : 'Campaign' }}</li>
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
		<form class="form-horizontal" action="{{ URL::route('editor-addhome-post', ['profile' => $profile->id]) }}" method="POST">
			<div class="form-group margin-y{{ $errors->has('title') ? ' has-error' : '' }}">
				<label class="col-sm-2 col-md-2 control-label">
					Snazzy title
				</label>
				<div class="col-sm-10 col-md-8">
					<input type="text" name="title" class="form-control" placeholder="Enter something catchy..." value="{{ Input::old('title', '') }}">
					<span class="help-text text-muted"><small>...or leave this blank for a generic title like "2 bed 1 bath Double-wide"</small></span>
				</div>
			</div>
			<div class="col-md-offset-1 col-md-10 hidden">
				<hr>
			</div>
			<div class="form-group margin-t padding-t">
				<div class="col-sm-2 col-md-2 text-right{{ $errors->has('price') ? ' has-error' : '' }}">
					<label class="control-label">
						Price
					</label>
				</div>
				<div class="col-md-3 col-sm-4{{ $errors->has('price') ? ' has-error' : '' }}">
					<input type="text" name="price" class="form-control" value="{{ Input::old('price', '') }}">
				</div>
				<div class="col-sm-1 col-md-1 text-right{{ $errors->has('type') ? ' has-error' : '' }}">
					<label class="control-label">
						Type
					</label>
				</div>
				<div class="col-sm-5 col-md-4 text-left{{ $errors->has('type') ? ' has-error' : '' }}">
					<label class="checkbox-inline">
						<input type="radio" name="type" value="0"@if(Input::old('type', 0) == 0) checked="checked"@endif> For Sale
					</label>
					<label class="checkbox-inline">
						<input type="radio" name="type" value="1"@if(Input::old('type', 0) == 1) checked="checked"@endif> For Rent
					</label>
				</div>
			</div>
			<div class="form-group margin-t padding-t">
				<div class="col-sm-2 col-md-2 text-right{{ $errors->has('beds') ? ' has-error' : '' }}">
					<label class="control-label">
						Bedrooms
					</label>
				</div>
				<div class="col-sm-4 col-md-3">
					<select name="beds" class="form-control">
						<option value="1"@if(Input::old('beds', 0) == 1) selected="selected"@endif>1</option>
						<option value="2"@if(Input::old('beds', 0) == 2) selected="selected"@endif>2</option>
						<option value="3"@if(Input::old('beds', 0) == 3) selected="selected"@endif>3</option>
						<option value="4"@if(Input::old('beds', 0) == 4) selected="selected"@endif>4</option>
						<option value="5"@if(Input::old('beds', 0) == 5) selected="selected"@endif>5 +</option>
					</select>
				</div>
				<div class="col-sm-2 col-md-2 text-right{{ $errors->has('baths') ? ' has-error' : '' }}">
					<label class="control-label">
						Bathrooms
					</label>
				</div>
				<div class="col-sm-4 col-md-3">
					<select name="baths" class="form-control">
						<option value="1"@if(Input::old('baths', 0) == 1) selected="selected"@endif>1</option>
						<option value="2"@if(Input::old('baths', 0) == 2) selected="selected"@endif>2</option>
						<option value="3"@if(Input::old('baths', 0) == 3) selected="selected"@endif>3</option>
						<option value="4"@if(Input::old('baths', 0) == 4) selected="selected"@endif>4 +</option>
					</select>
				</div>
			</div>
			<div class="form-group margin-t padding-t">
				<label class="col-sm-2 col-md-2 control-label text-right{{ $errors->has('description') ? ' has-error' : '' }}">
					Description
				</label>
				<div class="col-sm-10 col-md-8">
					<textarea class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group margin-y">
				<div class="col-md-offset-2 col-md-8 margin-t-wide">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button type="submit" class="btn btn-lg btn-primary cta">Save changes</button>
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