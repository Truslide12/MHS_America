@extends('layouts.master')
@fix-navbar
@show-navbar-divider

@section('incls-head-early')
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/widgets.css">
<link rel="stylesheet" href="/css/awesome-bootstrap-checkbox.css">
@stop

@section('content')
<div class="row white">
	<div class="col-md-12">
		<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="btn btn-default pull-right visible-xs visible-sm">Go back</a>
		<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="btn btn-default pull-right push-down hidden-xs hidden-sm">Go back</a>
		<h3>Profile manager</h3>
		<h4>
			<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}">{{ $profile->title }}</a> <small><i class="fa fa-chevron-right"></i></small> 
			Vacant Spaces
		</h4>
		<hr>
	</div>
</div>
@if($plan->hasFeature('manage_spaces'))
<div class="row white">
	<div class="col-md-12">
		<p class="pull-right no-margin-b">
			<a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#newSpaceBox">Add a space</a>
			<a class="btn btn-lg btn-info">Manage campaigns</a>
		</p>
		<div class="clearfix"></div>
		<hr>
		@if(Session::has('success'))
		<div class="alert alert-success">{{ Session::get('success') }}</div>
		@endif
		@if($spaces->count() == 0)
		<div class="panel panel-default shadow">
			<div class="panel-body">
				<br>
				<br>
				<h3 class="text-center"><em>You have no available spaces!</em></h3>
				<br>
				<br>
			</div>
		</div>
		@else
		<div class="row">
			@foreach($spaces as $space)
			<div class="col-md-6">
				<div class="space-block">
					<div class="row">
						<div class="pull-right">
							<a href="#" class="btn btn-xs btn-default" data-toggle="modal" data-target="#editSpaceBox" data-profile="{{ $profile->id }}" data-id="{{ $space->id }}">Edit / Remove</a>
						</div>
						<div class="pull-left">
							<h3 title="{{ $space->name }}" class="space-title">{{ $space->name }}</h3>
							<div class="label label-default">{{ $space->status or 'avail' }}</div>
						</div>
						<div class="pull-left">
							<p class="space-size">{{ $space->size() }}</p>
							@if($space->width > 0 && $space->length > 0)<h4 class="space-dimensions">{{ $space->width }} x {{ $space->length }}</h4>@endif
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		@endif
	</div>
</div>
@else
<div class="row white">
	<div class="col-md-offset-2 col-md-8">
		<form class="form-horizontal" action="" method="POST">
			<div class="panel panel-default">
				<div class="panel-body">
					<p class="lead text-center">
						{{ $profile->title }} is currently on the {{ $plan->title }} Plan.
					</p>
					<p class="lead text-center">
						To add vacant spaces, please upgrade your profile.<br>It's quick, easy, and affordable.
					</p>
					<div class="text-center">
						<a href="#" class="btn btn-lg btn-success">
							<strong>Get started today</strong>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</form>
	</div>
</div>
@endif
@stop

@section('content-below')
<div class="modal fade" id="newSpaceBox" role="modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ URL::route('editor-addspace-post', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" method="POST">
			<div class="modal-header">
				<h4 class="modal-title">New vacant space</h4>
			</div>
			<div class="modal-body">
				<div class="form-horizontal">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-xs-3 col-sm-5 control-label" for="sATitle">Space Name</label>
								<div class="col-xs-7">
									<input type="text" id="sATitle" name="title" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-xs-3 control-label" for="sASize">Size</label>
								<div class="col-xs-7 col-sm-9">
									<select id="sASize" name="size" class="form-control">
										<option value="1">Single</option>
										<option value="2">Double</option>
										<option value="3">Triple</option>
										<option value="4">Bigger</option>
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-xs-3 col-sm-5 control-label" for="sAWidth">Dimensions</label>
								<div class="col-xs-3 no-padding-r">
									<input type="text" id="sAWidth" name="width" class="form-control">
								</div>
								<div class="col-xs-1 text-center no-padding-x">
									<p class="form-control-static">X</p>
								</div>
								<div class="col-xs-3 no-padding-l">
									<input type="text" id="SALength" name="length" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="col-xs-offset-3 col-xs-9">
									<div class="checkbox">
										<input type="checkbox" id="sATaken" name="taken" value="0"><label for="sATaken"> Space is now taken?</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="editSpaceBox" role="modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ URL::route('editor-editspace-post', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" method="POST">
			<div class="modal-header">
				<h4 class="modal-title">Edit vacant space</h4>
			</div>
			<div class="modal-body">
				<div class="form-horizontal">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-xs-3 col-sm-5 control-label" for="sETitle">Space Name</label>
								<div class="col-xs-7">
									<input type="text" id="sETitle" name="title" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-xs-3 control-label" for="sESize">Size</label>
								<div class="col-xs-7 col-sm-9">
									<select id="sESize" name="size" class="form-control">
										<option value="1">Single</option>
										<option value="2">Double</option>
										<option value="3">Triple</option>
										<option value="4">Bigger</option>
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-xs-3 col-sm-5 control-label" for="sEWidth">Dimensions</label>
								<div class="col-xs-3 no-padding-r">
									<input type="text" id="sEWidth" name="width" class="form-control">
								</div>
								<div class="col-xs-1 text-center no-padding-x">
									<p class="form-control-static">X</p>
								</div>
								<div class="col-xs-3 no-padding-l">
									<input type="text" id="sELength" name="length" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="col-xs-offset-3 col-xs-9">
									<div class="checkbox">
										<input type="checkbox" id="sETaken" name="taken" value="0"><label for="sETaken"> Space is now taken?</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" id="#sERemove" class="btn btn-danger pull-left" data-action="remove" data-relation="space" data-id="0">Remove</button>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" id="#sESpace" name="space" value="">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop

@section('incls-body')
<script type="text/javascript" src="/js/mhs.editor.spaces.js"></script>
@stop