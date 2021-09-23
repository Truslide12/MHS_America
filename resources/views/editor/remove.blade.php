@extends('layouts.master')
@fix-navbar
@use-navbar-divider

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
			Remove Profile
		</h4>
		<hr>
	</div>
</div>

<div class="row white">
	<div class="col-md-offset-2 col-md-8">
		@include('layouts.partial.errors')
		<form class="form-horizontal" action="{{ URL::route('editor-remove-post', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" method="POST">
			<div class="panel panel-default">
				<div class="panel-body">
					<p class="lead text-center">
						<strong>WARNING</strong>
					</p>
					<p class="lead">
						Are you sure you want to remove <em>{{ $profile->title }}</em> from this business account?
					</p>
					<p class="lead">
						<strong>Please Note:</strong> You will lose any time remaining time on this subscription. This community will remain on MHS America but only display location and park type information.
					</p>
					<div class="text-center">
						{{ csrf_field() }}
						<input type="hidden" name="profile_id" id="profile_id" value="{{ $profile->id }}">
						<button class="btn btn-lg btn-danger">
							<strong>Remove Profile</strong>
						</button>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</form>
	</div>
</div>

@stop

@section('content-below')

@stop

@section('incls-body')
<script type="text/javascript">
	//


</script>
@stop