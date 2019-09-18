@extends('layouts.search')

@php
 $page_header = "Search for Mobile Home Spaces";
  $meta_description = "Search MHS America's database for mobile home spaces throughout the united states.";
@endphp

@section('search-above')
	<h2 class="text-center">
		<img src="/img/text-space-search.png" alt="Mobile Home Space Search" class="img-responsive">
	</h2>
@stop

@section('search')
	<div class="row white">
		<div class="col-md-8 col-md-offset-2">
			<form class="form-horizontal push-down search-form" id="primary-search" role="form" action="{{ URL::route('search-post') }}" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="mode" value="2">
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="input" class="form-control input-lg search-box" placeholder="Enter a city and state or zip code..." id="normalSearchBox">
						<div class="input-group-addon">
							<button type="submit" class="btn btn-primary">Search</button>
						</div>
					</div>
				</div>
				<div class="text-center">
					<p class="text-muted">
						Find vacant mobile home spaces around the country.
					</p>
					<p>&nbsp;</p>
					<p>
						<a href="#" onclick="$('#advanced-search').show();$('#primary-search').hide();">Advanced Search</a>
					</p>
				</div>
			</form>
			<form class="form-horizontal push-down search-form" id="advanced-search" style="display:none" role="form" action="{{ URL::route('search-post') }}" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="mode" value="2">
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="input" class="form-control input-lg search-box" placeholder="Enter a city and state or zip code..." id="advancedSearchBox">
						<div class="input-group-addon">
							<button type="submit" class="btn btn-primary">Search</button>
						</div>
					</div>
				</div>
				<div class="row" style="margin:-10px -15px 10px"><div class="row">
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
					<div class="col-md-4">
						<div class="">
							<label for="optWidth" class="control-label">Lot size</label>
							<select class="form-control" name="width" id="optWidth">
								<option value="0">No preference</option>
								<li role="separator" class="divider"></li>
								<option value="1">Single Wide</option>
								<option value="2">Double Wide</option>
								<option value="3">Triple Wide</option>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<label class="control-label">Options</label>
						<div>
							<label for="optPets" class="checkbox-inline">
								<input type="checkbox" name="pets" id="optPets" value="1">
								Pets allowed
							</label>
						</div>
					</div>
				</div></div>
				<div class="text-center">
					<p>
						<a href="#" onclick="$('#primary-search').show();$('#advanced-search').hide();">Normal Search</a>
					</p>
				</div>
			</form>
		</div>
	</div>
@stop

@section('incls-body')
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/typeahead.bundle.js"></script>
	<script type="text/javascript">
		$(function() {
			var engine = new Bloodhound({
				name: 'cities',
				remote: '{{ URL::route('welcome') }}/derpy/cities?query=%QUERY',
				datumTokenizer: function(d) {
					return Bloodhound.tokenizers.whitespace(d.name);
				},
				queryTokenizer: Bloodhound.tokenizers.whitespace
			});

			engine.initialize();

			$('#normalSearchBox').typeahead(null, {
				displayKey: 'title',
				source: engine.ttAdapter()
			});

			$('#advancedSearchBox').typeahead(null, {
				displayKey: 'title',
				source: engine.ttAdapter()
			});

			$('#normalSearchBox').focus();

		});
	</script>
@stop