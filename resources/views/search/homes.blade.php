@extends('layouts.search')

@php
 $page_header = "Search for Mobile Homes";
  $meta_description = "Search MHS America's database for mobile homes throughout the united states.";
@endphp

@section('search-above')
	<h2 class="text-center" style="margin-bottom:18px">
		<h1 class="text-center h1">Mobile home search</h1>
	</h2>

@stop

@section('search')
	<div class="row white">
		<div class="col-md-8 col-md-offset-2">
			<form class="form-horizontal push-down search-form" id="primary-search" role="form" action="{{ URL::route('search-post') }}" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="mode" value="1">
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="input" class="form-control input-lg search-box" id="normalSearchBox" placeholder="Enter a city and state or zip code...">
						<div class="input-group-addon">
							<button type="submit" class="btn btn-primary">Search</button>
						</div>
					</div>
				</div>
				<div class="text-center">
					<p class="text-muted">
						Find manufactured homes around the country for sale or rent.
					</p>
					<p>&nbsp;</p>
					<p>
						<a href="#" onclick="$('#advanced-search').show();$('#primary-search').hide();return false;">Advanced Search</a>
					</p>
				</div>
			</form>
			<form class="form-horizontal push-down search-form" id="advanced-search" style="display:none" role="form" action="{{ URL::route('search-post') }}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="input" class="form-control input-lg search-box" id="advancedSearchBox" placeholder="Enter a city and state or zip code...">
						<div class="input-group-addon">
							<button type="submit" class="btn btn-primary">Search</button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4 class="push-down">
							Seeking Homes&nbsp;&nbsp;
							<small>
								<div class="radio radio-inline">
									<input type="radio" name="type" id="forsale" value="sale" checked>
									<label for="forsale">
										For Sale
									</label>
								</div>
								<div class="radio radio-inline">
									<input type="radio" name="type" id="forrent" value="rent">
									<label for="forrent">
										For Rent
									</label>
								</div>
							</small>
						</h4>
						<hr style="margin-top:10px">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<div class="">
							<label for="bedroom" class="control-label">Bedrooms</label>
							<select class="form-control" name="bed" id="bedroom">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5+</option>
							</select>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="">
							<label for="bath" class="control-label">Bathrooms</label>
							<select class="form-control" name="bath" id="bath">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3+</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label class="control-label">Options</label>
						<div id="sliderRentContainer">
							<input type="text" class="slider" value="" data-slider-id="sliderRent" data-slider-step="100" data-slider-min="200" data-slider-max="1000" data-slider-value="1000">
						</div>
						<div id="sliderSaleContainer">
							<input type="text" class="slider" value="" data-slider-id="sliderSale" data-slider-step="100" data-slider-min="200" data-slider-max="1000" data-slider-value="1000">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4 class="push-down">
							<input type="checkbox" name="community" id="commbox" checked>
							<span id="notincomm" style="display:none">Not </span>In a Community
						</h4>
						<hr id="commhr" style="margin-top:10px">
					</div>
				</div>
				<div class="row" id="comminfo">
					<div class="col-md-4">
						<div class="">
							<label for="age" class="control-label">Age restrictions</label>
							<select class="form-control" name="age" id="age">
								<option value="-1">No preference</option>
								<option value="0">All Ages</option>
								<option value="1">Senior / 55+</option>
								<option value="1">Strictly Senior</option>
							</select>
						</div>
					</div>
					<div class="col-md-8">
						<label class="control-label">Options</label>
						<div>
							<label for="optGated" class="checkbox-inline">
								<input type="checkbox" name="gated" id="optGated" value="1">
								Gated
							</label>
							<label for="optPets" class="checkbox-inline">
								<input type="checkbox" name="pets" id="optPets" value="1">
								Pets allowed
							</label>
						</div>
					</div>
				</div>
				<div class="text-center">
					<p>
						&nbsp;<br>
						<a href="#" onclick="$('#primary-search').show();$('#advanced-search').hide();">Normal Search</a>
					</p>
				</div>
			</form>
			<p>
				&nbsp;
			</p>
		</div>
	</div>
@stop

@section('incls-body')
	<script type="text/javascript" src="/js/typeahead.bundle.js"></script>
	<script type="text/javascript" src="/js/bootstrap-slider.min.js"></script>
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

			$('.slider').slider();

			pony.lesson('communityChange', function() {
				if(this.checked) {
					$('#commhr').css('display','block');
					$('#comminfo').css('display','block');
				}else{
					$('#commhr').css('display','none');
					$('#comminfo').css('display','none');
				}
			});

			pony.bind('change', '#commbox', pony.lesson('communityChange'));

			$('#normalSearchBox').focus();

		});
	</script>
	<style type="text/css">
		#sliderRent .slider-selection,
		#sliderSale .slider-selection {
			background: #BABABA;
		}
	</style>
@stop