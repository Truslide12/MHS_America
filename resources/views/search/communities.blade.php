@extends('layouts.search')

@php
 $page_header = "Search for Mobile Home Park Communities";
  $meta_description = "Search MHS America's database for mobile home park communities throughout the united states.";
@endphp

@section('search-above')
	<h2 class="text-center">
		<img src="/img/text-community-search.png" alt="Community Search" class="img-responsive">
	</h2>
@stop

@section('search')
	<div class="row white">
		<div class="col-md-8 col-md-offset-2">
			<form class="form-horizontal push-down search-form" id="advanced-search" role="form" action="{{ URL::route('search-post') }}" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="mode" value="0">
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="input" class="form-control input-lg search-box" id="advancedSearchBox" placeholder="Enter a city and state or zip code...">
						<div class="input-group-addon">
							<button type="submit" class="btn btn-primary">Search</button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="">
							<label for="optAge" class="control-label">Age restrictions</label>
							<select class="form-control" name="age" id="optAge">
								<option value="-1">No preference</option>
								<li role="separator" class="divider"></li>
								<option value="0">All Ages</option>
								<option value="1">Senior / 55+</option>
								<option value="1">Strictly Senior</option>
							</select>
						</div>
					</div>
					<div class="col-md-8">
						<label class="control-label">Options</label>
						<div>
							<label for="optHomes" class="checkbox-inline">
								<input type="checkbox" name="homes" id="optHomes" value="1">
								Has homes listed
							</label>
							<label for="optSpaces" class="checkbox-inline">
								<input type="checkbox" name="spaces" id="optSpaces" value="1">
								Has spaces available
							</label>
							<label for="optPets" class="checkbox-inline">
								<input type="checkbox" name="pets" id="optPets" value="1">
								Pets allowed
							</label>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row white">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						Find a community by name
					</div>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" action="{{ URL::route('communities-query') }}" method="GET">
						<div class="input-group">
							<input type="text" name="name" class="form-control" placeholder="Sunny Place Mobile Home Park...">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-primary cta"><i class="fa fa-search"></i></button>
							</span>
						</div>
						{{ csrf_field() }}
					</form>
				</div>
			</div>
			<div class="panel panel-info">
				<div class="panel-body">
					<h3 class="no-margin-t">Looking to promote your community?</h3>
					<p>
						MHS promotes business by using specialized profiles. We offer paid partnerships (subscriptions) as well as free profiles for mobile home communities.
					</p>
					<p class="no-margin-y">
						<a href="{{ URL::route('page', array('slug' => 'community-plans')) }}" class="btn btn-primary cta">Click here for more details</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<h2 class="no-margin-t">Latest communities</h2>
			@foreach($latest_communities as $community)
			@include('layouts.partial.community-block')
			@endforeach
		</div>
	</div>
@stop

@section('incls-body')
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/mhs.interface.js"></script>
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/typeahead.bundle.js"></script>
	<script type="text/javascript">
		pony.add(function() {
			pony['bloodhound'] = new Bloodhound({
				name: 'cities',
				remote: '{{ URL::route('welcome') }}/derpy/cities?query=%QUERY',
				datumTokenizer: function(d) {
					return Bloodhound.tokenizers.whitespace(d.name);
				},
				queryTokenizer: Bloodhound.tokenizers.whitespace
			});

			pony.bloodhound.initialize();

			$('#normalSearchBox').typeahead(null, {
				displayKey: 'title',
				source: pony.bloodhound.ttAdapter()
			});

			$('#advancedSearchBox').typeahead(null, {
				displayKey: 'title',
				source: pony.bloodhound.ttAdapter()
			});

			$('#normalSearchBox').focus();

		});
	</script>
@stop