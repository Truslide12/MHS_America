@extends('layouts.master')
@fix-navbar
@show-navbar-divider

@section('incls-head-early')
<link rel="stylesheet" type="text/css" href="/css/widgets.css">
@stop

@section('incls-head')
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('content')
<div class="row white">
	<div class="col-md-12">
		<h2>Professionals 
			@if(isset($error))
			for {{ $search }}
			@else
			nearby {{ $centroid->place_name }}, {{ $centroid->state->title }}
			@endif
			</h2>
			<div class="panel panel-default">
				<div class="panel-body">
					<form class="form-inline" role="form" action="{{ URL::route('professionals-query') }}" method="GET">
						<div class="form-group">
							<label class="control-label">
								Search
							</label>
							<input type="text" class="form-control" name="search" value="{{ Input::get('search') }}">
						</div>
						<div class="form-group">
							<select class="form-control" name="age">
								<option>Senior or Family</option>
								<option value="family" @if(Input::get('age', '') == 'family') selected="selected"@endif>Family</option>
								<option value="senior" @if(Input::get('age', '') == 'senior') selected="selected"@endif>Senior</option>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label">&nbsp; Options: </label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="gated" value="1" @if(Input::has('gated'))checked @endif> Gated&nbsp;
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="pets" value="1" @if(Input::has('pets'))checked @endif> Pets allowed&nbsp;
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="spaces" value="1" @if(Input::has('spaces'))checked @endif> Only with spaces &nbsp;
							</label>
						</div>
						<button class="btn btn-primary pull-right">
							<i class="fa fa-search"></i>
							Search
						</button>
					</form>
				</div>
			</div>
	@if(isset($error) || count($professionals) == 0)
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<p>
					&nbsp;
				</p>
				<div class="panel panel-default text-center">
					<div class="panel-body">
						<h1 class="text-info"><i class="fa fa-2x fa-warning"></i></h1>
						<h4 class="text-open">
							@if(isset($error))
							{{ $error }}
							@else
							No matching professionals were found<br> within {{ $radius }} miles of {{ $centroid->place_name.', '.$centroid->state_name }}.
							@endif
							<br>
							<span class="text-primary">Try refining your search.</span>
						</h4>
					</div>
				</div>
				<p>
					&nbsp;
				</p>
			</div>
		</div>
	@else
		@if(1==2){{ $professionals->appends($pagination_params)->links() }}@endif
		@foreach($professionals as $professional)
		@include('layouts.partial.professional-block')
		@endforeach
		@if(1==2){{ $professionals->links() }}@endif
	@endif
	</div>
</div>
@stop