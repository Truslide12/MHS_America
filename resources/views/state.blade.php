@extends('layouts.master')
@use-navbar-divider
@fix-navbar

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/js/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/welcome.css">
	@if($state->stylesheet == 1)
	<link rel="stylesheet" type="text/css" href="/css/states/{{ $state->name }}.css">
	@endif
	<script type="text/javascript">
		var stateabbr = "{{ $state->abbr }}";
	</script>
@stop

@section('attrs-body')ng-controller="StateController"@stop

@section('content')
	<div class="row clearfix slicetab">
		<div class="col-md-12">
			<div class="page-header">
				<div class="pull-right visible-xs-block">
					@if($spotlight)<a href="#spotlight" id="spotlight-button-2" class="scroll-to featured">Spotlight</a>@endif
				</div>
				<h1>{{ $state->title }} <small class="hidden-inline-xs">@if($state->locked == 0)<div style="display:inline-block;position:relative;top:-5px" class="label label-danger">Not finished</div>@endif Explore the local manufactured housing industry</small></h1>
			</div>
		</div>
	</div>
	<div class="row clearfix white">
		<div class="col-md-12">
			<div class="page-header header-links no-push">
			  <h1>
			  	<small>
			  		@if($spotlight)<a href="#spotlight" id="spotlight-button" class="scroll-to featured hidden-xs" data-container="body" data-toggle="popover" data-placement="right" data-trigger="hover focus" data-content="Featured businesses in California">Spotlight</a>@endif
			  		<span class="links-text hidden-inline-xs">Browse by:</span>
			  		<span class="links-text visible-xs-block">Browse by:</span>
			  		@if($region_count > 0)<a class="scroll-to" href="#areas"><span class="hidden-inline-xs">General area</span><span class="visible-xs-inline">Region</span></a>@endif
			  		<a class="scroll-to" href="#counties">County</a>
			  		<a class="scroll-to" href="#cities">City</a>
			  	</small>
			  </h1>
			</div>
		</div>
	</div>
	<div class="row clearfix nudge white bordered">
		<div class="col-md-12">
			<div id="map" style="width: 100%;"></div>
		</div>
		<div class="clearfix">&nbsp;</div>
	</div>
	@if($spotlight)
	<div class="row clearfix nudge glass bordered"><a name="spotlight" class="page-anchor"></a>
		<div id="carousel-spotlight">
			<div class="col-md-12">
				<div class="page-header pull-up no-border">
					<h3>
						<small>
						<a class="margin-t-5 pull-right" href="{{ URL::route('state-spotlight', array('state' => $state->abbr)) }}">VIEW MORE &raquo;</a>
						</small>
						Spotlight
					</h3>
				</div>
			</div>
			<div class="col-md-12 carousel slide" id="spotlightcontent">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					@for($x = 0; $x < count($advertisements); $x++)
					<li data-target="#spotlightcontent" data-slide-to="{{ $x }}"@if($x == 0) class="active"@endif ></li>
					@endfor
				</ol>
				<!-- Slides -->
				<div class="carousel-inner">
					<?php $i = 0; ?>
					@foreach($advertisements as $ad)
					<div class="item @if($i == 0) active @endif">
						<div class="media margin-x-wide">
							<div class="pull-left col-sm-4 no-padding-l">
								<img src="/placeholder.php?size=300x300&amp;bg=39f" class="img-responsive">
							</div>
							<div class="media-body">
								<h1 class="no-margin-t">
									<img src="/placeholder.php?size=80x80&amp;bg=39f" width="80" height="80" class="pull-right visible-xs margin-l-10 margin-b-10">
									{{ $ad->title }}
									<small>
									@if($ad->isProfile())
										<span class="rating rating-{{ $ad->pageRating() }}">
											<span class="star-1 glyphicon glyphicon-star"></span>
											<span class="star-2 glyphicon glyphicon-star"></span>
											<span class="star-3 glyphicon glyphicon-star"></span>
											<span class="star-4 glyphicon glyphicon-star"></span>
											<span class="star-5 glyphicon glyphicon-star"></span>
										</span>
									@else
										<span class="sponsored">Sponsored</span>
									@endif
									</small>
								</h1>
								@if($ad->isProfile())
								<p class="lead"><span>{{ $ad->pageWatching() }} watching</span><span>{{ $ad->pageKudos() }} kudos</span></p>
								@endif
								<div class="row push-down">
									<div class="col-md-12">
										<p>
											@if($ad->isProfile())
											{{{ ($ad->description == '') ? $ad->pageDescription() : $ad->description }}}
											@else
											{{{ $ad->description or '' }}}
											@endif
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php $i++; ?>
					@endforeach
				</div>
				<!-- Carousel previous/next -->
				<a class="left carousel-control" href="#carousel-spotlight" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-spotlight" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>  <!-- /#spotlight-container -->
		</div>
		<div class="clearfix">&nbsp;</div>
	</div>
	@endif
	<div class="row nudge gray">
		<div class="col-sm-12 col-md-12">
			<div class="row clearfix no-border"><a name="cities" class="page-anchor"></a>
				<div class="col-md-12">
					<div class="page-header pull-up">
						<h3>
							<a href="#top" class="up-anchor scroll-to pull-right" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="hover focus" data-content="Back to top">
								<span class="glyphicon glyphicon-chevron-up"></span>
							</a>
							By city</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6 col-md-push-3">
							<form class="form-search" action="{{ URL::route('state-city-query', array('state' => $state->abbr)) }}" method="POST">
								<div class="form-group">
									<label for="citySearchBox">Enter city name</label>
								</div>
								<div class="form-group input-group">
						            <input type="text" class="form-control" placeholder="" name="city" id="citySearchBox">
									{{ csrf_field() }}
						            <div class="input-group-btn">
						                <button class="btn btn-primary cta" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						            </div>
						        </div>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix">&nbsp;</div>
			</div>
			@if($region_count > 0)
			<div class="row clearfix nudge gray no-border"><a name="areas" class="page-anchor"></a>
				<div class="col-md-12">
					<div class="page-header pull-up">
						<h3>
							<a href="#top" class="up-anchor scroll-to pull-right" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="hover focus" data-content="Back to top">
								<span class="glyphicon glyphicon-chevron-up"></span>
							</a>
							By general area</h3>
					</div>
				</div>
				@if(Config::get('app.angular') == true)
				<div ng-repeat="region in regions" class="col-xs-12 col-sm-6 col-lg-3 col-md-3 loctile">
					<a href="/explore/{{ $state->abbr }}/region/{[region.name]}">
						<span ng-bind-html="region.title | unsafe"></span>
					</a>
				</div>
				@else
				@foreach($state->regions()->az()->get() as $region)
				<div class="col-xs-12 col-sm-6 col-lg-3 col-md-3 loctile">
					<a href="{{ URL::route('region', array('state' => $state->abbr, 'region' => $region->name)) }}">
						<span>{{ $region->title }}</span>
					</a>
				</div>
				@endforeach
				@endif
			</div>
			@endif
			<div class="row clearfix nudge gray"><a name="counties" class="page-anchor"></a>
				<div class="col-md-12">
					<div class="page-header pull-up">
						<h3>
							<a href="#top" class="up-anchor scroll-to pull-right" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="hover focus" data-content="Back to top">
								<span class="glyphicon glyphicon-chevron-up"></span>
							</a>
							By {{ $state->suffix ?? 'county' }}</h3>
					</div>
					<div class="row">
						@if(Config::get('app.angular') == true)
						<div ng-repeat="county in counties" itemscope itemtype="http://schema.org/AdministrativeArea/County" class="col-xs-12 col-sm-6 col-lg-3 col-md-3 loctile">
							<a itemprop="url" href="/explore/{{ $state->abbr }}/{[county.name]}">
								<span itemprop="name" ng-bind-html="county.title | unsafe"></span>
							</a>
						</div>
						@else
						@foreach($state->counties()->az()->get() as $county)
						<div itemscope itemtype="http://schema.org/AdministrativeArea/County" class="col-xs-12 col-sm-6 col-lg-3 col-md-3 loctile">
							<a itemprop="url" href="{{ URL::route('county', array('state' => $state->abbr, 'county' => $county->name)) }}">
								<span itemprop="name">{{ $county->title }}</span>
							</a>
						</div>
						@endforeach
						@endif
					</div>
				</div>
			</div>
		</div>
		@if(1==2)<div class="col-sm-12 col-md-4">
			<div class="page-header pull-up no-border">
				<h5 class="pull-left">SPONSORED</h5><h3>&nbsp;</h3>
			</div>
			<div class="row" style="background:#efefef;margin-top:-15px;padding-top:15px;">
				<div class="col-sm-4 col-md-12">
					<img src="//placehold.it/292x268/dedede" class="img-responsive img-prv">
				</div>
				<div class="col-sm-4 col-md-12">
					<img src="//placehold.it/292x127/dedede" class="img-responsive img-prv">

					<img src="//placehold.it/292x127/dedede" class="img-responsive img-prv">
				</div>
				<div class="col-sm-2 col-md-6">
					<img src="//placehold.it/126x122/dedede" class="img-responsive img-prv">
				</div>
				<div class="col-sm-2 col-md-6">
					<img src="//placehold.it/126x122/dedede" class="img-responsive img-prv">
				</div>
				<div class="col-sm-2 col-md-6">
					<img src="//placehold.it/126x122/dedede" class="img-responsive img-prv">
				</div>
				<div class="col-sm-2 col-md-6">
					<img src="//placehold.it/126x122/dedede" class="img-responsive img-prv">
				</div>
			</div>
		</div>@endif
	</div>
@stop

@section('incls-body')
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/maps/states/jquery.vmap.{{ $state->name }}.js"></script>
	<script type="text/javascript" src="{{ URL::route('welcome') }}/js/typeahead.bundle.js"></script>
	<script type="text/javascript">
		var countyurl = '{{ URL::route('county', array('state' => $state->abbr, 'county' => 'xxx')) }}';
		$(function() {
			$('#map').vectorMap({
				map: '{{ $state->name }}_mill_en',
				backgroundColor: 'transparent',
				zoomOnScroll: false,
				enableZoom: false,
				regionStyle: {
					initial: {fill: '#7f8efe', stroke: '#cccccc', 'stroke-width': 1},
					hover: {fill: '#2233aa'},
					selected: {fill: '#00b7ea'}
				},
				onRegionClick: function(element, code, region)
				{
					thiscounty = countyurl.replace('xxx', code);
					$('body').append($('<form>').attr('method',"GET").attr('id','link-'+code).attr('action', thiscounty));
					$('#link-'+code).submit();
				}

			});

			$('#spotlightcontent').carousel({
				interval: 10000,
				pause: 'hover',
				wrap: true
			});

			var engine = new Bloodhound({
				name: 'cities',
				remote: '{{ URL::route('welcome') }}/derpy/cities/{{ $state->abbr }}?query=%QUERY',
				datumTokenizer: function(d) {
					return Bloodhound.tokenizers.whitespace(d.name);
				},
				queryTokenizer: Bloodhound.tokenizers.whitespace
			});

			engine.initialize();

			$('#citySearchBox').typeahead(null, {
				displayKey: 'title',
				source: engine.ttAdapter()
			});

			$('#spotlight-button').popover();
			$('.up-anchor').popover();

			$('a.scroll-to[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html,body').animate({scrollTop: target.offset().top}, 1000);
						return false;
					}
				}
			});
		});
	</script>
@stop