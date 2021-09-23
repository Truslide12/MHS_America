@extends('layouts.business')
@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('heading')
<h3>Business Center</h3>
<h4><a href="{{ URL::route('account-business-company', ['company' => $company->id]) }}">{{ $company->title }}</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> Edit Company Profile</h4>
@stop

@section('businesscontent')
<div class="row white">
	<div class="col-md-12">
		<div class="pull-right margin-t no-margin-xs">
			<a class="btn btn-default btn-align-fix" href="{{ URL::route('account-business-company', array('company' => $company->id)) }}">Back<span class="hidden-xs"> to {{ $company->title }}</span></a>
		</div>
		<h3>Manage company profile</h3>
	</div>
</div>
<div class="row white" style="min-height:500px">
	<form role="form" class="form-horizontal margin-t-wide" action="" method="POST">
		<div class="col-md-6">
			<h4 class="no-margin-t padding-t">Post news</h4>
			<hr>
			<ul class="nav nav-tabs no-border-b">
				<li role="presentation" class="active"><a href="#">News</a></li>
				<li role="presentation"><a href="#">Photo</a></li>
				<li role="presentation"><a href="#">Link</a></li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-body">
					<textarea class="form-control"></textarea>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<h4 class="no-margin-t" style="padding-top:3px;">Edit information</h4>
					<hr>
					<div class="form-group">
						<label class="col-md-4 control-label">
							Company Name
						</label>
						<div class="col-md-8">
							<input type="text" name="title" value="{{ $company->title }}" class="form-control input-sm">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">
							Phone
						</label>
						<div class="col-md-8">
							<input type="text" name="phone" value="{{ $company->phone }}" class="form-control input-sm">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">
							Fax
						</label>
						<div class="col-md-8">
							<input type="text" name="phone" value="{{ $company->fax }}" class="form-control input-sm">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-8 col-md-offset-4">
							<button type="submit" class="btn btn-sm btn-primary">Submit changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@stop