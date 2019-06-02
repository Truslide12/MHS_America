@extends('layouts.search')

@section('search-above')
	<h2 class="text-center">
		<img src="/img/text-professional-search.png" alt="Mobile Home Space Search" class="img-responsive">
	</h2>
@stop

@section('search')
	<div class="row white text-center">
		<div class="col-sm-8 col-sm-offset-2">
			<form class="form-horizontal push-down search-form professional-form" role="form" action="{{ URL::route('professionals-query') }}" method="GET">
				<div class="btn-group text-center" data-toggle="buttons" id="whatabove" style="width:100%">
					<label class="btn btn-default col-xs-3">
						<input type="radio" name="what" value="contractors" autocomplete="off" checked>
						Gen. Contractors</label>
					<label class="btn btn-default col-xs-3">
						<input type="radio" name="what" value="dealers" autocomplete="off">
						Dealers</label>
					<label class="btn btn-default col-xs-3">
						<input type="radio" name="what" value="manufacturers" autocomplete="off">
						Manufacturers</label>
					<label class="btn btn-default col-xs-3">
						<input type="radio" name="what" value="transporters" autocomplete="off">
						Transporters</label>
				</div>
				<div class="push-down professional-search" id="primary-search">
					{{ csrf_token_field() }}
					<div class="form-group">
						<div class="input-group">
							<div class="text-left">
							<input type="text" class="form-control input-lg search-box" id="searchBox" name="search" placeholder="Enter a city and state or zip code...">
							</div>
							<div class="input-group-addon">
								<button type="submit" data-toggle="no" class="btn btn-primary">Search</button>
							</div>
						</div>
					</div>
				</div>
				<div class="btn-group text-center" data-toggle="buttons" id="whatbelow" style="width:100%">
					<label class="btn btn-default col-xs-3">
						<input type="radio" name="what" value="agents" autocomplete="off">
						Sales Agents</label>
					<label class="btn btn-default col-xs-3">
						<input type="radio" name="what" value="inspectors" autocomplete="off">
						Inspectors</label>
					<label class="btn btn-default col-xs-3">
						<input type="radio" name="what" value="insurers" autocomplete="off">
						Insurers</label>
					<label class="btn btn-default col-xs-3">
						<input type="radio" name="what" value="lenders" autocomplete="off">
						Lenders</label>
				</div>
				<p>&nbsp;</p>
				<p class="text-center text-muted">
					Select an option above and enter an area to search in.
				</p>
			</form>
		</div>
	</div>
	<div class="row white padding-t-wide">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						Find a business by name
					</div>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" action="" method="POST">
						<div class="input-group">
							<input type="text" name="businessname" class="form-control" placeholder="Sunny Place Mobile Home Park...">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-primary cta"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<div class="panel panel-info">
				<div class="panel-body">
					<h3 class="no-margin-t">Looking to promote your business?</h3>
					<p>
						MHS promotes business by using specialized profiles. We offer these under paid partnerships (subscription) as well as free profiles.
					</p>
					<p class="no-margin-y">
						<a href="{{ URL::route('promote-community') }}" class="btn btn-primary cta">Click here for more details</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<h2 class="no-margin-t">Latest professionals</h2>
			<p>sdfsd fsd fs df sd fs df sf </p>
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

			$('#searchBox').typeahead(null, {
				displayKey: 'title',
				source: engine.ttAdapter()
			});

			$("#whatabove .btn").on('click',function(){
					$("#whatbelow .btn").removeClass('active');
			});

			$("#whatbelow .btn").on('click',function(){
					$("#whatabove .btn").removeClass('active');
			});

			$("#whatabove .btn input:checked").parent().addClass('active');
			$("#whatbelow .btn input:checked").parent().addClass('active');

			$('#searchBox').focus();

		});
	</script>
@stop