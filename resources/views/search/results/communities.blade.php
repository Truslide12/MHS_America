@extends('layouts.search')

@section('incls-head-early')
<link rel="stylesheet" type="text/css" href="/css/widgets.css">
@stop

@section('incls-head')
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('content')
<div class="row white">
	<div class="col-md-12">
		<h2>Communities 
			@if($name_search)
			for &quot;{{ $search }}&quot;
			@elseif(isset($error))
			for {{ $search }}
			@else
			nearby {{ $centroid->place_name }}, {{ $centroid->state->title }}
			@endif
			</h2>
			<div class="panel panel-default">
				<div class="panel-body">
					<form class="form-inline" role="form" action="{{ URL::route('communities-query') }}" method="GET">
						<div class="form-group">
							<label class="control-label">
								Search
							</label>
							@if($name_search)
							<input type="text" class="form-control" name="name" value="{{ $search }}">
							@else
							<input type="text" class="form-control" name="search" value="{{ Input::get('search') }}">
							@endif
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
						{{ csrf_token_field() }}
						<button class="btn btn-primary pull-right">
							<i class="fa fa-search"></i>
							Search
						</button>
					</form>
				</div>
			</div>
	@if(isset($error) || count($communities) == 0)
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<p>
					&nbsp;
				</p>
				<div class="panel panel-default text-center">
					<div class="panel-body">
						<h1 class="text-info"><i class="fa fa-2x fa-warning"></i></h1>
						<h4 class="text-open">
							@if($name_search)
							No matching communities were found<br> for &quot;{{ $search }}&quot;.
							@elseif(isset($error))
							{{ $error }}
							@else
							No matching communities were found<br> within {{ $radius }} miles of {{ $centroid->place_name.', '.strtoupper($centroid->state->abbr) }}.
							@endif
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
		@if(1==2){{ $communities->appends($pagination_params)->links() }}@endif
		@foreach($communities as $community)
		@include('layouts.partial.community-block')
		@endforeach
		@if(1==2){{ $communities->links() }}@endif
	@endif
	</div>
</div>
@stop

@section('incls-body')
<script type="text/javascript" src="/js/mhs.interface.js"></script>
@stop