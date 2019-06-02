@extends('layouts.master')
@fix-navbar
@show-navbar-divider
@use-slim-footer

@section('incls-head-early')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
@stop

@section('incls-head')
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    <link href="{{ URL::route('welcome') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ URL::route('welcome') }}/css/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/search.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/badges.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/bootstrap-slider.min.css">
    <link rel="stylesheet" type="text/css" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/map.css">
@stop

@section('content')
	<div class="row white">
        <div class="col-md-3 blue">
            <div class="search" id="searchBox">
                <div class="input-group-dis">
                    <input type="text" name="query" id="search" class="form-control" placeholder="Yucaipa, CA">
                    <span class="input-group-btn hidden">
                        <button class="btn btn-default" data-action="search" id="syncButton"><span class="fa fa-refresh"></span></button>
                    </span>
                </div>
                <input type="hidden" id="optAge" name="age" value="0">
            </div>
        </div>
		<div class="col-md-9 margin-t-16">
            <div class="form-inline search" id="searchOpts">
                <div class="form-group">
                    <p class="form-control-static text-muted">FILTERS</p>
                </div>
    			<div class="form-group">
                    <div class="btn-group margin-l" data-action="select" data-default="0" data-field="optAge">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="title text-muted font-italic">Age restrictions</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="#" data-value="0" data-title="Age restrictions">No preference</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" data-value="1" data-title="All Ages">All Ages</a></li>
                            <li><a href="#" data-value="2" data-title="Senior / 55+">Senior / 55+</a></li>
                            <li><a href="#" data-value="3" data-title="Senior Only">Strictly Senior</a></li>
                        </ul>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <input type="checkbox" name="gated" id="optSpaces" value="1">
                        <label for="optSpaces"> Has Spaces</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <input type="checkbox" name="pets" id="optPets" value="1">
                        <label for="optPets"> Pets Allowed</label>
                    </div>
                </div>
            </div>
		</div>
	</div>
@stop

@section('content-below')
	<div class="container" id="map-container">
        <div id="map" style="opacity:1;"></div>
        <div id="sideview">
            <div id="resultlist">
                <div class="list-group">
                </div>
            </div>
            <div id="preview" class="hidden">
                <div id="preview-return">
                    <button data-action="focuslist" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                </div>
                <div id="preview-content"></div>
            </div>
        </div>
    </div>
@stop

@section('incls-body')
<script id="homesResultItem" type="x-tmpl-mustache">
<a href="/profile/@{{ id }}" target="_blank" data-action="communityOverview" data-id="@{{ id }}" class="list-group-item list-group-item-action flex-column align-items-start">
						<img src="/imgstorage/cover_@{{ photos.0.cover }}_crop.jpg" class="img-responsive">
                        <div class="d-flex w-100 justify-content-between">
							<h4 class="mb-1">@{{ title }}<br><small>@{{ city }}, @{{ state }}</small></h4>
							@{{^spaces.0}}<small>No spaces</small>@{{/spaces.0}}
                            @{{#spaces.0}}<small>@{{spaces.length}} space@{{#spaces.1}}s@{{/spaces.1}}</small>@{{/spaces.0}}
						</div>
					</a>
</script>
<script id="communityResultItem" type="x-tmpl-mustache">
<a href="/profile/@{{ id }}" target="_blank" data-action="communityOverview" data-id="@{{ id }}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <img src="/imgstorage/cover_@{{ photos.0.cover }}_crop.jpg" class="img-responsive">
                        <div class="d-flex w-100 justify-content-between">
                            <h4 class="mb-1">@{{ title }}<br><small>@{{ city }}, @{{ state }}</small></h4>
                            @{{^spaces.0}}<small>No spaces</small>@{{/spaces.0}}
                            @{{#spaces.0}}<small>@{{spaces.length}} space@{{#spaces.1}}s@{{/spaces.1}}</small>@{{/spaces.0}}
                        </div>
                    </a>
</script>
<script id="communityPreview" type="x-tmpl-mustache">
<h2>
                @{{#highlight}}
                <span class="premium"><i class="glyphicon glyphicon-star"></i></span>
                @{{/highlight}}
                <span style="color: black;">@{{ title }}</span> 
                <small>
                    <br>
                    <a href="@{{ citylink }}">
                        @{{ city }}, @{{ state }}
                    </a>
                </small>
            </h2>
</script>   
<script src="{{ URL::route('welcome') }}/js/mhs.map.js" type="text/javascript"></script>
<script type="text/javascript">
	var mapdata = {

	}, pos = {
        lat: {{ $selector['location']['lat'] }},
        lon: {{ $selector['location']['lon'] }}
    }, maploading = false, mapinvalid = true, mapsyncing = false, mapsearch = '{{ $selector['title'] }}', valid_location = {{ $selector['valid'] }}, search_mode = 'homes';
	pony.add(function(){
        initMap();
        var refreshMapResults = function() {
            if(maploading == false && mapsyncing == false) {
                maploading = true;
                var bounds = map.getBounds();
                var net = bounds.getNorthEast(), 
                    swt = bounds.getSouthWest();

                pony.fetch('/octavia/communities', {limits: {ne: {lat: net['lat'], lng: net['lng']}, sw: {lat: swt['lat'], lng: swt['lng']}}, 
                    filters: {  spaces: $('#optSpaces').prop('checked') ? 1 : 0,  pets: $('#optPets').prop('checked') ? 1 : 0, age: $('#optAge').val()  }}, function(data) {
                    Lyra.clearList();
                    //var zoomOffset = map.getZoom() - 13;
                    //markerTemplate.icon.scale = (zoomOffset == 0) ? 1 : zoomOffset / 2 + 1;
                    //map.data.setStyle(markerTemplate);
                    for (var i = data.features.length - 1; i >= 0; i--) {
                        var item = data.features[i];
                        data.features[i].geometry.coordinates[1] = parseFloat(data.features[i].geometry.coordinates[1]);
                        data.features[i].geometry.coordinates[0] = parseFloat(data.features[i].geometry.coordinates[0]);
                        Lyra.appendCommunityResult(item.properties);
                        if(data.features[i].properties.spaces.length > 0) {
                            data.features[i].properties['space_count'] = data.features[i].properties.spaces.length;
                        }
                    }
                    map.getSource('results').setData(data);
                    maploading = false;
                    mapsyncing = false;
                }, function() {
                    maploading = false;
                });
            }
            mapinvalid = false;
        }, syncMap = function() {
            if(mapsyncing == false) {
                mapsyncing = true;
                pony.fetch('/octavia/location', {address: $('#search').val()}, function(data) {
                    if(data.valid) {
                        mapsearch = data.title;
                        $('#search').val(data.title);
                        map.setCenter(data.location);
                    }else{
                        $('#search').val(mapsearch);
                    }
                    resetSyncBtn();
                    maploading = false;
                    mapsyncing = false;
                }, function() {
                    maploading = false;
                });
            }
        }, mapInvalidate = function(event) {
            mapinvalid = true;
        };

        map.on('load', function() {
            map.addSource('results', {
                type: 'geojson',
                data: {
                    type: 'FeatureCollection',
                    features: []
                },
                cluster: true,
                clusterMaxZoom: 14
            });
            map.addLayer({
                id: 'clusters',
                type: 'circle',
                source: 'results',
                filter: ['has', 'point_count'],
                paint: {
// Use step expressions (https://docs.mapbox.com/mapbox-gl-js/style-spec/#expressions-step)
// with three steps to implement three types of circles:
//   * Blue, 20px circles when point count is less than 100
//   * Yellow, 30px circles when point count is between 100 and 750
//   * Pink, 40px circles when point count is greater than or equal to 750
                    "circle-color": "#51bbd6",
                    "circle-radius": [
                        "step",
                        ["get", "point_count"],
                        20,
                        100,
                        30
                    ]
                }
            });
            map.addLayer({
                id: 'cluster-count',
                type: 'symbol',
                source: 'results',
                filter: ['has', 'point_count'],
                layout: {
                    "text-field": "{point_count_abbreviated}",
                    "text-font": ["DIN Offc Pro Medium", "Arial Unicode MS Bold"],
                    "text-size": 12
                }
            });
            map.addLayer({
                id: 'points',
                type: 'symbol',
                source: 'results',
                filter: ["all", ["==", ["get", "point_count"], null], ["==", ["get", "space_count"], null]],
                    layout: {
                        "icon-image": "bubble",
                        "icon-text-fit": "both",
                        "icon-text-fit-padding": [5, 5, 5, 5],
                        "icon-allow-overlap": true,
                        "text-field": "{title}",
                        "text-font": ["DIN Offc Pro Medium", "Arial Unicode MS Bold"],
                        "text-size": 12,
                        "text-allow-overlap": true,
                        "text-anchor": "bottom"
                    },
            });

map.loadImage('/img/fontawesome/users3.png', function(error, image) {
if (error) throw error;
map.addImage('cat', image);

});
            map.addLayer({
                id: 'points2',
                type: 'symbol',
                source: 'results',
                filter: ["all", ["==", ["get", "point_count"], null], ["==", ["get", "space_count"], null]],
                /*"layout": {
                "icon-image": "cat",
                "icon-size": .05
                }*/
                layout: {
                        "icon-image": "cat",
                        "icon-size": 1.2,
                        "icon-text-fit": "both",
                        "icon-text-fit-padding": [5, 5, 15, 5],
                        "icon-allow-overlap": true,
                        "icon-offset": [-48, -10],
                        "icon-padding": 10
                }

            });
            map.loadImage('/img/map-tooltip.png', function(error, image) {
                if (error) throw error;
                map.addImage('bubble', image);
                map.addLayer({
                    id: 'space-count',
                    type: 'symbol',
                    source: 'results',
                    filter: ["all", ["==", ["get", "point_count"], null], ["!=", ["get", "space_count"], null]],
                    layout: {
                        "icon-image": "bubble",
                        "icon-text-fit": "both",
                        "icon-text-fit-padding": [5, 5, 5, 5],
                        "icon-allow-overlap": true,
                        "text-field": ["case",
                                ["==", ["get", "space_count"], 1], "1 SPACE",
                                ["concat", ["get", "space_count"], " SPACES"]
                            ],
                        "text-font": ["DIN Offc Pro Medium", "Arial Unicode MS Bold"],
                        "text-size": 12,
                        "text-allow-overlap": true,
                        "text-anchor": "bottom"
                    },
                    paint: {
                        "text-color": "#ffffff"
                    }
                });
            });
            map.on('mouseenter', 'points', function () {
                map.getCanvas().style.cursor = 'pointer';
            });
            map.on('mouseleave', 'points', function () {
                map.getCanvas().style.cursor = '';
            });
            map.on('click', 'points', function (e) {
                var feature = e.features[0];
                $('#preview-content').html(renderPreview(feature.properties));
                focusPreview();
            });
            map.setZoom(13);
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    map.setCenter({lat: position.coords.latitude, lon: position.coords.longitude});
                    map.setZoom(13);
                    $('#search').val('Current Location ('+position.coords.latitude+', '+position.coords.longitude+')');
                    $('#map').fadeTo('slow', 1);
                });
            }else{
                map.setCenter(pos);
                $('#search').val(mapsearch);
                $('#map').fadeTo('slow', 1);
            }
        }).on('zoomend', mapInvalidate)
        .on('dragend', mapInvalidate)
        .on('moveend', mapInvalidate)
        .on('idle', function() {
            if(mapinvalid) {
                refreshMapResults();
            }
        });
        /* map.data.addListener('click', function(event) {
            $('#resultlist div a').removeClass('active');
            $('#resultlist div a[data-id="'+event.feature.getProperty('id')+'"]').addClass('active');
        });*/
        $(document).on('change', '#optAge,#optPets,#optSpaces', function(event){
            mapinvalid = true;
            refreshMapResults();
        });

        var resetSyncBtn = function() {
            var searchBtn = $('[data-action="search"]');
            searchBtn.removeAttr('disabled');
            searchBtn.find('span').removeClass('fa-spin');
            searchBtn.parent().addClass('hidden').parent().removeClass('input-group');
        };

        $('[data-action="search"]').on('click', function() {
            $(this).prop('disabled', true);
            $(this).find('span').addClass('fa-spin');
            syncMap();
        });

        $('[data-action="focuslist"]').on('click', function() {
            focusResults();
        });
	});
</script>
@stop