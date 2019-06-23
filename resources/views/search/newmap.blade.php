@extends('layouts.master')
@fix-navbar
@use-navbar-divider
@use-slim-footer

@section('incls-head-early')
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">


@stop

@section('incls-head')
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
    <link href="{{ URL::route('welcome') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ URL::route('welcome') }}/css/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/search.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/badges.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/bootstrap-slider.min.css">
    <link rel="stylesheet" type="text/css" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/map.css">
    <style type="text/css">
        .bold {
            font-weight: bold;
        }
    </style>
    <style type="text/css">
        .maplegend {
           display: none;
           opacity: .25;
           position: absolute;
           bottom: .25vw;
           left: .25vw;
           width: 10vw;
           height: 14vh;
           background: #c6c5be; 
           padding: 5px;
           clear: both;
           border: 1px solid #000;
           border-top-left-radius: 5px !important;
           border-top-right-radius: 5px !important;
           transition: all .5s;
        }
        .maplegend:hover {
            opacity: 1;
            transition: all .5s;
        }
        .legendbox {
            background: #edece8;
            padding: 4px;
            position: relative;
            margin-bottom: 2px;
            overflow: hidden;
            border: 1px solid black;
            border-radius: 5px !important;
            cursor: pointer;
        }
        .legendcolor {
        }
        .legendtitle {

        }
        .activemode {
            border: 1px solid gold;
        }
        #capper {
            margin:5px;
            background:#f9f9f9;
            border:1px solid #e0e0e0;
            padding: 20px;
        }

        #capper h2 {
            margin:10px 0 20px;
        }

        #capper .preview-title {
            color:#141414;
        }

        #capper .preview-photo {
            margin:0 -20px 20px;
        }

        #capper .panel-body .btn {
            margin:5px;
        }

        .pricebox {
            text-align: center;
            padding: 24px;
        }
        .pricey {
            position: relative;
            padding: 0!important;
            margin: 0!important;
        }
        .pricey::after {
            content: attr(price);
            position: absolute;
            bottom: 0px;
            left: 0px;
            font-size: 2.3em;
            z-index: 500;
            background: rgb(0,0,0);
            background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.65) 61%, rgba(0,0,0,0.4) 89%, rgba(0,0,0,0) 100%);
            color: snow;
            font-family: Voltaire;
            width: 100%;
            padding: 3px 5px;
        }

        .pricey::before {
            content: attr(hasphoto);
            position: absolute;
            bottom: 0px;
            left: 0px;
            top: 0px;
            right: 0px;
            font-size: 1.3em;
            font-weight: bold;
            z-index: 10;
            color: rgba(255,255,255,1);
            font-family: Lato;
            padding: auto auto;
            display: flex;
            align-items: center;
            align-content: center;
            justify-content: center;
        }

        .attrbadge {
            background:silver;border-radius:5px!important;padding:1px 5px;white-space: nowrap;
        }

        .backbtn {
            background: #333;
            width: 8vh;
            height: 8vh;
            border-radius: 4vh!important;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding-left: 2vh;
            color: snow;
            opacity: 0.6;
            transition: all .5s;
        }
        .backbtn:hover {
            background: #333;
            color: #fff;
            cursor: pointer;
            text-decoration: none;
            opacity: 1;
            transition: all .5s;
        }
        .togglebtn {
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: #333;
            width: 7vh;
            height: 7vh;
            border-radius: 4vh!important;
        }
            #search-toggle {
                display: none;
            }
            .mapfilters, .mapfilters-expanded, .footmodes {
                display: none;
            }
            @media (max-width: 768px) { 
            #filterbox {
                display: none;
                background: red;
            }

            #map {
                width: 100vw;
                height: calc(100vh - 117px);
                max-height: 100vh;
                border: 0px solid red;
                margin: 0;
            }
            #sideview {
                display: none;
            }
            .maplegend {
                display: none;
            }
            .mapfilters {
                position: absolute;
                top: 5px;
                left: 5px;
                display: flex;
                align-items: center;
                align-content: center;
                justify-content: center;
                z-index: 505;
                background: #6097f2;
                width: 8vw;
                height: 8vw;
                border: 1px solid rgb(169, 200, 252);
                border-radius: 3px!important;
                color:snow;
                z-index: 20;
            }
            .mapfilters-expanded {
                position: absolute;
                top: 3px;
                left: 3px;
                z-index: 505;
                background: rgba(96, 151, 242, .88);
                width: calc(100vw - 6px);
                border: 1px solid rgb(126, 159, 214);
                border-radius: 3px!important;
                color:snow;
                z-index: 10;
            }
            .mapfilters-expanded > .form-group {
                margin-bottom: 2px;
                width: 100%;
                float: none;
                display: inline-flex;
                border-bottom: 1px solid snow;
            }
            .mapfilters-expanded > .form-group > .btn-group > button {
                display: block;
                width: calc(100vw - 40px);
            }
            .mapfilters-expanded > .form-group > .checkbox {
                display: block;
                width: calc(100vw - 40px);
                margin-left: 20px;
            }
            .mapfilters-expanded > .form-group > .form-control-static {
                display: block;
                width: calc(100vw - 40px);
                padding-left: 12vw;
                color: snow;
                font-size: 1em;
                font-weight: bold;
            }
            
            #firstrow { margin-top: 0;padding-top: 0; }
            #firstrow > .blue {
                padding: 0;
                margin: 0;
            }
            #search-toggle {
                display: flex;
                width: 30vw;
                float: right;
                padding: 10px 5px 10px 5px;
                background: none;
                overflow: hidden;
            }
            #searchBox {
                padding: 10px 5px 10px 5px;
                width: 70vw;
                float: left;
                background: none;
                margin: 0;
                background: none;
            }
            .active-toggle {
                background: rgb(66, 134, 244)!important;
            }
            .btn {
                margin: 2px;
            }
            .searchcopy {
                display: none;
            }
            .footmodes {
                display: initial;
            }
            .footmodes > .mode0.active {
                background: rgb(66, 134, 244);
                color: snow;
                border: 1px solid rgb(30, 58, 104);
            }

            .footmodes > .mode1.active {
                background: rgb(252, 175, 88);
                color: snow;
                border: 1px solid rgb(216, 139, 52);
            }

            .footmodes > .mode2.active {
                background: rgb(120, 204, 148);
                color: snow;
                border: 1px solid rgb(89, 130, 103);
            }

        }
    </style>
@stop

@section('content')
    <div class="row white" id="firstrow">
        <div class="col-md-3 blue">
            <div class="search-toggle" id="search-toggle">
                <div id="toggle-list" class="" style="color:#ededed;display:flex;flex: 1;justify-content:center;align-items:center;height:34px;width:auto;font-size:1.8em;margin: 0!important;background:#ccc;border-top-left-radius: 5px!important; border-bottom-left-radius: 5px!important;" onclick="mobopanel()"><i class="fas fa-list"></i></div>
                <div id="toggle-map" class="active-toggle" style="color:#ededed;display:flex;flex:1;justify-content:center;align-items:center;height:34px;width:auto;font-size:1.8em;margin:0!important;background:#ccc;border-top-right-radius: 5px!important; border-bottom-right-radius: 5px!important;" onclick="hidemobopanel()"><i class="fas fa-map"></i></div>
            </div>
            <div class="search" id="searchBox">
                <div class="input-group-dis">
                    <input type="text" name="query" id="search" class="form-control" placeholder="Yucaipa, CA" @if( $query ) value="{{$query}}" @endif>
                    <span class="input-group-btn hidden">
                        <button class="btn btn-default" data-action="search" id="syncButton"><span class="fa fa-refresh"></span></button>
                    </span>
                </div>
                <input type="hidden" id="optAge" name="age" value="{{ Input::get('age', -1) }}">
                <input type="hidden" id="optBeds" name="beds" value="0">
                <input type="hidden" id="optBaths" name="baths" value="0">
                <input type="hidden" id="optMax" name="max" value="0">
                <input type="hidden" id="optWidth" name="width" value="{{ Input::get('width', 0) }}">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-9 margin-t-16" id="filterbox">
            <div class="form-inline search" id="searchOpts">
                <div class="form-group">
                    <p class="form-control-static text-muted">FILTERS</p>
                </div>
                <div class="form-group">
                    <div class="btn-group margin-l" data-action="select" data-default="{{ Input::get('age', -1) }}" data-field="optAge">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="title text-muted font-italic">Age restrictions</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li @if(!in_array(Input::get('age', -1), [0,1,2])) class="active" @endif><a href="#" data-value="-1" data-title="Age restrictions">No preference</a></li>
                            <li role="separator" class="divider"></li>
                            <li @if(Input::get('age', '') == 0) class="active" @endif><a href="#" data-value="0" data-title="All Ages">All Ages</a></li>
                            <li @if(Input::get('age', '') == 1) class="active" @endif><a href="#" data-value="1" data-title="Senior / 55+">Senior / 55+</a></li>
                            <li @if(Input::get('age', '') == 2) class="active" @endif><a href="#" data-value="2" data-title="Senior Only">Strictly Senior</a></li>
                        </ul>
                    </div>
                </div>
                <div class="form-group community-filters" style="display: none;">
                    <div class="checkbox">
                        <input type="checkbox" name="spaces" id="optSpaces" value="1" @if(Input::get('spaces', 0) == 1) checked @endif>
                        <label for="optSpaces"> Has Spaces</label>
                    </div>
                </div>
                <div class="form-group community-filters" style="display: none;">
                    <div class="checkbox">
                        <input type="checkbox" name="homes" id="optHomes" value="1" @if(Input::get('homes', 0) == 1) checked @endif>
                        <label for="optHomes"> Has Homes</label>
                    </div>
                </div>
                <!--
                    HOME FILTERS
                -->

                <div class="form-group home-filters" style="display: none;">
                    <div class="btn-group margin-l" data-action="select" data-default="0" data-field="optMax">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="title text-muted font-italic">Max price</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="#" data-value="0" data-title="Max price">No Maximum</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" data-value="1000000" data-title="&lt; $10k">$10,000</a></li>
                            <li><a href="#" data-value="2500000" data-title="&lt; $25k">$25,000</a></li>
                            <li><a href="#" data-value="5000000" data-title="&lt; $50k">$50,000</a></li>
                            <li><a href="#" data-value="10000000" data-title="&lt; $100k">$100,000</a></li>
                        </ul>
                    </div>
                </div>

                <div class="form-group home-filters" style="display: none;">
                    <div class="btn-group margin-l" data-action="select" data-default="0" data-field="optBeds">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="title text-muted font-italic">Beds</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="#" data-value="0" data-title="Beds">No preference</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" data-value="1" data-title="1+ bed">1+</a></li>
                            <li><a href="#" data-value="2" data-title="2+ bed">2+</a></li>
                            <li><a href="#" data-value="3" data-title="3+ bed">3+</a></li>
                            <li><a href="#" data-value="3" data-title="4+ bed">4+</a></li>
                            <li><a href="#" data-value="3" data-title="5+ bed">5+</a></li>
                        </ul>
                    </div>
                </div>

                <div class="form-group home-filters" style="display: none;">
                    <div class="btn-group margin-l" data-action="select" data-default="0" data-field="optBaths">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="title text-muted font-italic">Baths</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="#" data-value="0" data-title="Baths">No preference</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" data-value="1" data-title="1+ bath">1+</a></li>
                            <li><a href="#" data-value="2" data-title="2+ bath">2+</a></li>
                            <li><a href="#" data-value="3" data-title="3+ bath">3+</a></li>

                        </ul>
                    </div>
                </div>

                <div class="form-group space-filters" style="display: none;">
                    <div class="btn-group margin-l" data-action="select" data-default="0" data-field="optWidth">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="title text-muted font-italic">Lot size</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="#" data-value="0" data-title="Lot size">No preference</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" data-value="1" data-title="Single Wide">Single Wide</a></li>
                            <li><a href="#" data-value="2" data-title="Double Wide">Double Wide</a></li>
                            <li><a href="#" data-value="3" data-title="Triple Wide">Triple Wide</a></li>
                        </ul>
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
        <div style="position: relative;">
            <div id="map" style="opacity:1;"></div>
            <div class="mapfilters" onclick="toggleMobileFilters();"> <i class="fas fa-filter"></i></div>
            <div class="mapfilters-expanded" style="display: none;">
                ...
            </div>
        </div>
        <div id="sideview" style="overflow-y: auto;overflow-x: visible;">
            <div id="resultlist">
                <div class="list-group">
                </div>
            </div>
            <div id="preview" class="hidden" style="position: relative;">
                <div id="preview-content">
                    
                </div>
            </div>
        </div>
        <div class="maplegend">
            <div class="col-md-12 legendload" style="display: none;">Loading</div>
            <div class="col-md-12 legendunload">
            <div id="legendrow0" class="legendbox row activemode" onclick="setMode(0)">
                <div style="background: #82adf2;" class="col-md-3 legendcolor">0</div>
                <div class="col-md-9 legendtitle">Communities</div>
            </div>
            <div id="legendrow1" class="legendbox row" onclick="setMode(1)">
                <div style="background: #fcaf58;" class="col-md-3 legendcolor">0</div>
                <div class="col-md-9 legendtitle">Homes</div>
            </div>
            <div id="legendrow2" class="legendbox row" onclick="setMode(2)">
                <div style="background: #78cc94;" class="col-md-3 legendcolor">0</div>
                <div class="col-md-9 legendtitle">Spaces</div>
            </div>

            </div>
            
        </div>
        <div id="preview-return" style="position: absolute;top:50%;right: -4vh;z-index: 555;">
                    <a data-action="focuslist" id="backbtn" class="backbtn" style="display: none;"><i class="fa fa-chevron-left"></i></a>
        </div>
    </div>
@stop

@section('incls-body')
@include('search.partials.mustache') 
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script src="{{ URL::route('welcome') }}/js/mhs.map.js" type="text/javascript"></script>
<script type="text/javascript">
    var t_cache = { homes: {}, spaces: {}, communities: {} };
    var mapdata = {

    }, pos = {
        lat: {{ $selector['location']['lat'] }},
        lon: {{ $selector['location']['lon'] }}
    }, bounds = @if(is_array($selector['bounds']) && count($selector['bounds']) == 4) [
                    [
                        {{ $selector['bounds'][0] }},
                        {{ $selector['bounds'][1] }}
                    ],
                    [
                        {{ $selector['bounds'][2] }},
                        {{ $selector['bounds'][3] }}
                    ]
                ] @else false @endif,mapstart = true, maploading = false, mapinvalid = true, mapsyncing = false, mapsearch = '{{ $selector['title'] }}', valid_location = {{ $selector['valid'] }}, starting_pitch = {{ $selector['pitch'] }}, starting_zoom = {{ $selector['zoom'] }}, search_mode = 'homes',
    modes = ["communities", "homes", "spaces"], mode = 0, popups = [], demands = true;
    
    pony.add(function(){
        initMap({
            "longitude": pos.lon,
            "latitude": pos.lat,
            "bounds": bounds,
            "pitch": starting_pitch,
            "zoom": starting_zoom
        });
        var refreshMapResults = function() {
            if(maploading == false && mapsyncing == false) {
                $(".legendunload").hide();
                $(".legendload").show();
                
                maploading = true;
                var bounds = map.getBounds();
                var net = bounds.getNorthEast(), 
                    swt = bounds.getSouthWest();
                var filter_set = null;


                switch(mode) {
                    case 0:
                    default:
                        filter_set = {
                            spaces: $('#optSpaces').prop('checked') ? 1 : 0,
                            homes: $('#optHomes').prop('checked') ? 1 : 0,
                            pets: $('#optPets').prop('checked') ? 1 : 0,
                            age: $('#optAge').val()
                        };
                        break;
                    case 1:
                        filter_set = {
                            age: $('#optAge').val(),
                            max: $('#optMax').val(),
                            beds: $('#optBeds').val(),
                            baths: $('#optBaths').val(),
                            pets: $('#optPets').prop('checked') ? 1 : 0
                        };
                        break;
                    case 2:
                        filter_set = {
                            age: $('#optAge').val(),
                            width: $('#optWidth').val(),
                            pets: $('#optPets').prop('checked') ? 1 : 0
                        };
                        break;
                }

                send_data = {
                                limits: {
                                    ne: {
                                        lat: net['lat'], 
                                        lng: net['lng']
                                    },
                                    sw: {
                                        lat: swt['lat'],
                                        lng: swt['lng']
                                        }
                                    },
                                    filters: filter_set
                            };

                pony.fetch('/octavia/communities', send_data, function(data) {
                    Lyra.clearList();
                    //var zoomOffset = map.getZoom() - 13;
                    //markerTemplate.icon.scale = (zoomOffset == 0) ? 1 : zoomOffset / 2 + 1;
                    //map.data.setStyle(markerTemplate);
                        if ( mode == 1 ) {
                            Lyra.fetchHomes(send_data, true);
                            Lyra.fetchSpaces(send_data, false);
                        } else if ( mode == 2 ) {
                            Lyra.fetchSpaces(send_data, true);
                            Lyra.fetchHomes(send_data, false);
                        } else {
                            Lyra.fetchSpaces(send_data, false);
                            Lyra.fetchHomes(send_data, false);
                        }
                    for (var i = data.features.length - 1; i >= 0; i--) {
                        var item = data.features[i];
                        data.features[i].geometry.coordinates[1] = parseFloat(data.features[i].geometry.coordinates[1]);
                        data.features[i].geometry.coordinates[0] = parseFloat(data.features[i].geometry.coordinates[0]);
                        //console.log("mode: ",mode)
                        if ( mode == 1 ) {
                            //
                        } else if ( mode == 2 ) {
                            //
                        } else {
                            Lyra.appendCommunityResult(item.properties);
                        }
                        
                        if(data.features[i].properties.spaces.length > 0) {
                            data.features[i].properties['space_count'] = data.features[i].properties.spaces.length;
                        }
                        if(data.features[i].properties.homes.length > 0) {
                            data.features[i].properties['home_count'] = data.features[i].properties.homes.length;
                        }
                    }
                    map.getSource('results').setData(data);
                    console.log("caching communities");
                    t_cache.communities = data;
                    maploading = false;
                    mapsyncing = false;
                    $(".legendload").hide();
                    $(".legendunload").show();

                }, function() {
                    maploading = false;
                    $(".legendload").hide();
                    $(".legendunload").show();
                });
            }
            mapinvalid = false;
        }, syncMap = function() {
            if(mapsyncing == false) {
                mapsyncing = true;
                pony.fetch('/octavia/location', {address: $('#search').val()}, function(data) {
                    if(data.valid) {
                        console.log(data.raw);
                        mapsearch = data.title;
                        $('#search').val(data.title);
                        map.setBearing(0);
                        if(data.bounds) {
                            var sets = map.cameraForBounds(data.bounds, 10);
                            map.setCenter(data.location);
                            map.setZoom(sets.zoom);
                        }else{
                            map.setCenter(data.location);
                        }
                        if(data.zoom == 11) {
                            map.setZoom(11);
                        }
                        map.setPitch(data.pitch);
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
        }, popUp = function(e, type) {
            var coordinates = e.features[0].geometry.coordinates.slice();
            var description = e.features[0].properties.description;
             
            // Ensure that if the map is zoomed out such that multiple
            // copies of the feature are visible, the popup appears
            // over the copy being pointed to.
            while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
            coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
            }
            switch(type) {
                case "clusters":
                    html = e.features[0].properties.comm_sum + " communities";
                    switch(mode) {
                        case 1:
                            if(e.features[0].properties.home_sum > 1) {
                                html += " - " + e.features[0].properties.home_sum + " homes";
                            }else if(e.features[0].properties.home_sum == 1) {
                                html += " - 1 home";
                            }
                        break;
                        case 2:
                            if(e.features[0].properties.space_sum > 1) {
                                html += " - " + e.features[0].properties.space_sum + " spaces";
                            }else if(e.features[0].properties.space_sum == 1) {
                                html += " - 1 space";
                            }
                        break;
                        case 0:
                            return false;
                        break;
                    }
                break;
                default:
                    html = e.features[0].properties.title;
                    switch(mode) {
                        case 1:
                            if(e.features[0].properties.home_count > 1) {
                                html += " - " + e.features[0].properties.home_count + " homes";
                            }else if(e.features[0].properties.home_count == 1) {
                                html += " - 1 home";
                            }
                        break;
                        case 2:
                            if(e.features[0].properties.space_count > 1) {
                                html += " - " + e.features[0].properties.space_count + " spaces";
                            }else if(e.features[0].properties.space_count == 1) {
                                html += " - 1 space";
                            }
                        break;
                    }
                break;
            }

            popups[e.features[0].properties.id] = new mapboxgl.Popup({closeButton: false})
            .setLngLat(coordinates)
            .setHTML(html)
            .addTo(map);
        }, setMode = function(val) {
            $(".legendunload").hide();
            $(".legendload").show();
            Lyra.clearList();
            told = $("ul").find("[data-mode='"+mode+"']");
            tnew = $("ul").find("[data-mode='"+val+"']");
            told.removeClass("active");
            tnew.addClass("active");

            told = $(".footmodes").find("[data-mode='"+mode+"']");
            tnew = $(".footmodes").find("[data-mode='"+val+"']");
            told.removeClass("active");
            tnew.addClass("active");
            mode = val;
            
            map.setPaintProperty('points-circle', 'circle-color', getMarkerColor());
            map.setLayoutProperty('points-counter', 'text-field', getMarkerText());
            map.setPaintProperty('clusters2', 'circle-stroke-color', getMarkerColor() );
            map.setPaintProperty('clusters', 'circle-color', getMarkerColor() );

            $("#legendrow0, #legendrow1, #legendrow2").removeClass("activemode");
            $("#legendrow"+val).addClass("activemode");

            $(".community-filters, .home-filters, .space-filters").hide();
            if(!demands) {
                $("#optSpaces, #optHomes").prop( "checked", false );
            }
            switch ( mode ) {
                case 0:
                    $(".community-filters").show();
                    map.setLayoutProperty('cluster-count', 'text-field', "{comm_sum}");
                    map.setPaintProperty('points-circle', 'circle-radius', 10);
                    map.setFilter('points-counter', null);
                    map.setFilter('cluster-count', null);
                    break;
                case 1:
                    $(".home-filters").show();
                    //$("#optHomes").prop( "checked", true );
                    map.setLayoutProperty('cluster-count', 'text-field', "{home_sum}");
                    map.setPaintProperty('points-circle', 'circle-radius', { property: 'home_count', stops: [ [0, 10], [1, 20] ] });
                    map.setFilter('points-counter', ['>', 'home_count', 0]);
                    map.setFilter('cluster-count', ['>', 'home_sum', 0]);
                    break;
                case 2:
                    $(".space-filters").show();
                    //$("#optSpaces").prop( "checked", true );
                    map.setLayoutProperty('cluster-count', 'text-field', "{space_sum}");
                    map.setPaintProperty('points-circle', 'circle-radius', { property: 'space_count', stops: [ [0, 10], [1, 20] ] });
                    map.setFilter('points-counter', ['>', 'space_count', 0]);
                    map.setFilter('cluster-count', ['>', 'space_sum', 0]);
                    break;
                default:
                    $(".community-filters").show();
                    map.setLayoutProperty('cluster-count', 'text-field', "{comm_sum}");
                    map.setPaintProperty('points-circle', 'circle-radius', 10);
                    map.setFilter('points-counter', null);
                    map.setFilter('cluster-count', null);
                    break;
            }
            focusResults();
            demands = false;
            mapinvalid = true;
            refreshMapResults();
        };

        map.on('load', function() {
            map.addSource('results', {
                type: 'geojson',
                data: {
                    type: 'FeatureCollection',
                    features: []
                },
                cluster: true,
                clusterMaxZoom: 14,
                clusterProperties: { 
                    home_sum: ["+", ["get", "home_count"]],
                    space_sum: ["+", ["get", "space_count"]],
                    comm_sum: ["+", 1],
                },
            });
            map.loadImage('/img/map-tooltip.png', function(error, image) {
                if (error) throw error;
                map.addImage('bubble', image);
            });

            map.addLayer({
                id: 'clusters2',
                type: 'circle',
                source: 'results',
                filter: ['>', "point_count", 1],
                paint: {
// Use step expressions (https://docs.mapbox.com/mapbox-gl-js/style-spec/#expressions-step)
// with three steps to implement three types of circles:
//   * Blue, 20px circles when point count is less than 100
//   * Yellow, 30px circles when point count is between 100 and 750
//   * Pink, 40px circles when point count is greater than or equal to 750
                    "circle-color": "transparent",
                    "circle-stroke-width": 2,
                    "circle-stroke-color": getMarkerColor(),
                    "circle-radius": [
                        "step",
                        ["get", "point_count"],
                        24,
                        104,
                        34
                    ]
                }
            });
            map.addLayer({
                id: 'clusters',
                type: 'circle',
                source: 'results',
                filter: ['>', "point_count", 1],
                paint: {
// Use step expressions (https://docs.mapbox.com/mapbox-gl-js/style-spec/#expressions-step)
// with three steps to implement three types of circles:
//   * Blue, 20px circles when point count is less than 100
//   * Yellow, 30px circles when point count is between 100 and 750
//   * Pink, 40px circles when point count is greater than or equal to 750
                    "circle-color": getMarkerColor(),
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
                filter: ['>', "point_count", 1],
                layout: {
                    "text-field": "{comm_sum}",
                    "text-font": ["DIN Offc Pro Medium", "Arial Unicode MS Bold"],
                    "text-size": 12
                }
            });


            map.addLayer({
                id: 'points-circle',
                type: 'circle',
                source: 'results',
                filter: ["all", ["==", ["get", "point_count"], null]],
                paint: {
                    'circle-radius': {
                     property: 'home_count',
                     stops: [
                     [0, 10],
                     [1, 20]
                     ]
                    },
                    'circle-color': getMarkerColor()
                }
            });

            map.addLayer({
                id: 'points-counter',
                type: 'symbol',
                source: 'results',
                    layout: {
                        "icon-text-fit": "both",
                        "icon-text-fit-padding": [0, 0, 0, 0],
                        "text-offset": [0, .5],
                        "icon-allow-overlap": true,
                        "text-field": "",
                        "text-font": ["DIN Offc Pro Medium", "Arial Unicode MS Bold"],
                        "text-size": 12,
                        "text-allow-overlap": true,
                        "text-anchor": "bottom",
                    },
            }); 

//////////////////////////////////////////////////////////////////////////////            
            map.on('click', 'points-circle', function (e) {
                var feature = e.features[0];
                feature.properties.photos = JSON.parse(feature.properties.photos);
                feature.properties.homes = JSON.parse(feature.properties.homes);
                feature.properties.spaces = JSON.parse(feature.properties.spaces);
                //console.log(feature.properties)
                if(is_mobile_mode) {
                    mobopanel();
                }
                highlightResult(feature.properties); 
            });

            map.on('mouseenter', 'points-circle', function (e) {
                map.getCanvas().style.cursor = 'pointer';
                popUp(e);
            });
            map.on('mouseleave', 'points-circle', function (e) {
                map.getCanvas().style.cursor = '';
                console.log(e);
                for ( p in popups ){ popups[p].remove(); }
            });

            map.on('mouseenter', 'clusters', function (e) {
                map.getCanvas().style.cursor = 'pointer';
                popUp(e, "clusters");
            });
             
            map.on('mouseleave', 'clusters', function (e) {
                map.getCanvas().style.cursor = '';
                for ( p in popups ){ popups[p].remove(); }
            });


            map.setZoom(13);

            if(mapsearch && valid_location) {
                map.setZoom(13);
                map.setCenter(pos);
                $('#search').val(mapsearch);
                $('#map').fadeTo('slow', 1);
            }else if (navigator.geolocation) {
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
            if(mapstart) {
                if(map.getZoom() != starting_zoom) {
                    map.setZoom(starting_zoom);
                }

                @if($mode)
                setMode({{$mode}});
                @else
                setMode(0);
                @endif
                
                mapstart = false;
            }
            if(mapinvalid) {
                refreshMapResults();
            }
        });
        /* map.data.addListener('click', function(event) {
            $('#resultlist div a').removeClass('active');
            $('#resultlist div a[data-id="'+event.feature.getProperty('id')+'"]').addClass('active');
        });*/
        $(document).on('change', '#optAge,#optBeds,#optBaths,#optPets,#optSpaces,#optHomes,#optWidth,#optMax', function(event){
            mapinvalid = true;
            refreshMapResults();
        });
        $(document).on('click', '#optSpaces,#optHomes', function(event){
            mapinvalid = true;
            refreshMapResults();
        });

        var resetSyncBtn = function() {
            var searchBtn = $('[data-action="search"]');
            searchBtn.removeAttr('disabled');
            searchBtn.find('span').removeClass('fa-spin');
            searchBtn.parent().addClass('hidden').parent().removeClass('input-group');
        };

        $('[data-action="mode"]').on('click', function() {
            setMode($(this).data('mode'));
        });

        $('[data-action="search"]').on('click', function() {
            $(this).prop('disabled', true);
            $(this).find('span').addClass('fa-spin');
            syncMap();
        });

        $('[data-action="focuslist"]').on('click', function() {
            focusResults();
        });

        $(document).on('click', '[data-action="previewtab"]', function(event) {
            var itemId = $(this).data('id');
            var itemTab = $(this).data('tab');
            switch(itemTab) {
                case 'overview':
                    $('[data-action="previewtab"]').prop('disabled', false);
                    $('[data-action="previewtab"][data-tab="overview"]').prop('disabled', true);
                    $('#preview-tab').html(renderTabOverview( getCachedData(itemId, "USE_COMMUNITIES") ));
                    break;
                case 'homes':
                    $('[data-action="previewtab"]').prop('disabled', false);
                    $('[data-action="previewtab"][data-tab="homes"]').prop('disabled', true);
                    console.log("phomes", getCachedData(itemId, 0));
                    $('#preview-tab').html(renderTabHomes( getCachedData(itemId, "USE_COMMUNITIES") ));
                    break;
                case 'spaces':
                    $('[data-action="previewtab"]').prop('disabled', false);
                    $('[data-action="previewtab"][data-tab="spaces"]').prop('disabled', true);
                    $('#preview-tab').html(renderTabSpaces( getCachedData(itemId, "USE_COMMUNITIES") ));
                    break;
            }
        });

        $(document).on('click', '[data-action="preview"]', function(event) {
            var itemId = $(this).data('id');
            var itemType = $(this).data('type');
            switch(itemType) {
                case 'community':
                    showCommunityPreview( getCachedData(itemId, "USE_COMMUNITIES") );
                    break;
                case 'home':
                    showHomePreview( getCachedData(itemId, "USE_HOMES") );
                    break;
                case 'space':
                    window.location = "/profile/"+itemId;
                    return true;
                    showCommunitySpaces( getCachedData(itemId, "USE_HOMES") );
                    break;
            }
        });

    });

function sidebarheight() {
    if ( is_mobile_mode ) { return false; }

    f1 = $("#header-wrapper").height();
    f2 = $("#firstrow").height();
    f3 = $("#footer-wrapper").height();

    a = $(window).height();
    b = $("body").height();
    c = $("#footer-wrapper").height();
    d = a-(b+c+0);

    console.log("setting map..", (a-(f1+f2+f3+20)) )
    $("#map, #sideview, #capper").height(a-(f1+f2+f3+20));
    //$("#capper").height(d-105);
}


function highlightResult(p) {
    switch(mode){
        case 0:
            showCommunityPreview(p);
            break;
        case 1:
            showCommunityHomes(p);
            break;
        case 2:
            showCommunitySpaces(p);
            break;
    }
}

function showHomePreview(feature) {
    //console.log("f:", feature);
    $('#preview-content').html(renderHomePreview(feature));
    focusPreview();
    sidebarheight();
}

function showCommunityPreview(feature) {
    $('#preview-content').html(renderPreview(feature));
    $('#preview-tab').html(renderTabOverview(feature));
    $('[data-action="previewtab"]').prop('disabled', false);
    $('[data-action="previewtab"][data-tab="overview"]').prop('disabled', true);
    focusPreview();
    sidebarheight();
}

function showCommunityHomes(feature) {
    $('#preview-content').html(renderPreview(feature));
    $('#preview-tab').html(renderTabHomes(feature));
    $('[data-action="previewtab"]').prop('disabled', false);
    $('[data-action="previewtab"][data-tab="homes"]').prop('disabled', true);
    focusPreview();
    sidebarheight();
}

function showCommunitySpaces(feature) {
    $('#preview-content').html(renderPreview(feature));
    $('#preview-tab').html(renderTabSpaces(feature));
    $('[data-action="previewtab"]').prop('disabled', false);
    $('[data-action="previewtab"][data-tab="spaces"]').prop('disabled', true);
    focusPreview();
    sidebarheight();
}

function getCachedData(id, override) {
    switch (override ) {
        case "USE_HOMES":
            m = 1;
        break;
        case "USE_SPACES":
            m = 2;
        break;
        case "USE_COMMUNITIES":
            m = 0;
        break;
        default:
            m = mode;
        break;
    }
    console.log("load cache ", m, "override", override);
    switch ( m ) {
        case 1:
          cachetype = t_cache.homes;
        break;
        case 2:
          cachetype = t_cache.spaces;
        break;
        default:
          cachetype = t_cache.communities;
        break;
    }
    //console.log("cachetype", cachetype)
    if ( ! cachetype ) { return {}; }
    for ( f in cachetype.features ) {
        if ( cachetype.features[f].properties.id == id ) {
            return cachetype.features[f].properties;
        }
    }
    console.log("failure: ", id, cachetype );
    return false;
}

    function pointformat(str){
        r = new Array();
        p = str.split("],[");
        for(c in p) {
            r[r.length] = p[c].split(" ");
        }
        delete(c);
        for( c in r ) {
            r[c] = r[c][0].split(",");
            for ( g in r[c] ) {
                r[c][g] = parseFloat( r[c][g].replace(/[\[\]&]+/g, '') );
            }
        }
        return r;
    }

function clearSA(id) {
    if ( !id ) { id = "community-hover"; }
    if ( map.getLayer(id) ) {
        map.removeLayer(id).removeSource(id);
        map.removeLayer(id+"-label").removeSource(id+"-label");
    }
}

function printSA(cords, label, id) {
    if ( !id ) { id = "community-hover"; }
    if ( map.getLayer(id) ) {
        return;
        map.removeLayer(id).removeSource(id);
    }
    cords = pointformat(cords);
    map.addLayer({
    'id': id,
    'type': 'fill',
    'source': {
        'type': 'geojson',
        'data': {
            'type': 'Feature',
            'geometry': {
                'type': 'Polygon',
                'coordinates': [cords]
            }
        }
    },
    'layout': {},
    'paint': {
        'fill-color': '#bae1ff',
        'fill-opacity': 0.5,
        'fill-outline-color': "#a1c6e2",
        'fill-antialias': true
    }
    });

    map.addLayer({
                id: id+'-label',
                type: 'symbol',
                source: {
                    'type': 'geojson',
                    'data': {
                        'type': 'Feature',
                        'geometry': {
                            'type': 'Polygon',
                            'coordinates': [cords]
                        }
                    }
                },
                    layout: {
                        "icon-text-fit": "both",
                        "icon-text-fit-padding": [0, 0, 0, 0],
                        "text-offset": [0, .5],
                        "icon-allow-overlap": true,
                        "text-field": label,
                        "text-font": ["DIN Offc Pro Medium", "Arial Unicode MS Bold"],
                        "text-size": 12,
                        "text-allow-overlap": true,
                        "text-anchor": "bottom"
                    },
    });
    map.moveLayer(id);
    //map.moveLayer(id+"-label");
    map.moveLayer("points-circle");
    map.moveLayer("points-counter");
    
}

function getMarkerColor() {
    switch ( mode ) {
        case 0:  return "#4286f4"; break; //"#005499"
        case 1:  return "#fcaf58"; break;
        case 2:  return "#78cc94"; break;
        default: return "#005499"; break;
    }
}
function getMarkerText() {
    switch ( mode ) {
        case 0:  return ""; break;
        case 1:  return "{home_count}"; break;
        case 2:  return "{space_count}"; break;
        default: return ""; break;
    }
}
function getCurrentSum() {
    switch ( mode ) {
        case 0:  return "comm_sum"; break;
        case 1:  return "home_sum"; break;
        case 2:  return "space_sum"; break;
        default: return "comm_sum"; break;
    }
}


function agro() {

  var features = map.queryRenderedFeatures({ layers: ['cluster-count'] });
  var clusterSource = map.getSource('results');
/*
  for (feature in features) {
    features[feature].properties.sum = anal_cluster(features[feature], clusterSource);
    console.log(features[feature].properties)
  }
  
*/
  //console.log( map.queryRenderedFeatures({ layers: ['cluster-count'] })[0].properties )

  map.setLayoutProperty('cluster-count', 'text-field', "{home_sum}h,{space_sum}s");

}


function anal_cluster(feature, clusterSource) { //ew lol

  var clusterId = feature.properties.cluster_id;
  var point_count = feature.properties.point_count;
  var total = 0;
  // Get Next level cluster Children
  // 
  clusterSource.getClusterChildren(clusterId, function(err, aFeatures){
    //console.log('getClusterChildren', err, aFeatures);
    for ( feature in aFeatures) {
       total += aFeatures[feature].properties.home_count;
    }
  });

  // Get all points under a cluster
  clusterSource.getClusterLeaves(clusterId, point_count, 0, function(err, aFeatures){
    for ( feature in aFeatures) {
       total += aFeatures[feature].properties.home_count;
    }
  })

  return total;
}


function calculateHomes(clusterSource) {
    //
}


is_mobile_mode = false;
mobile_free_space = 400;
function checkMobile(){

    if ( $(".footmodes").is(":visible") ) {
        is_mobile_mode = true;
        setupMobile();
    } else {
        is_mobile_mode = false;
        sidebarheight();
    }
}

function setupMobile() {
    console.log("setting up mobile");
    f1 = $("#header-wrapper").height();
    f2 = $("#firstrow").height()+2;
    f3 = $("#footer-wrapper").height();

    a = $(window).height();
    b = $("body").height();
    c = $("#footer-wrapper").height();
    d = a-(b+c+0);

    $("#map, #sideview").height(a-(f1+f2+f3));
    mobile_free_space = a-(f1+f2+f3);
    console.log("cm", a-(f1+f2+f3))
}


function mobopanel() {
    is_mobile_mode = true;

    $("#toggle-map").removeClass("active-toggle");
    $("#toggle-list").addClass("active-toggle");
    f1 = $("#header-wrapper").height();
    f2 = $("#firstrow").height()+2;

    $("#sideview").css({
        "position":"absolute",
        "top": (f1+f2)+"px",
        "left":0,
        "height": mobile_free_space,
        "width": "100vw",
        "display": "block",
        "background": "#ececec",
        "z-index": 100
    });
}

function hidemobopanel() {
    $("#toggle-list").removeClass("active-toggle");
    $("#toggle-map").addClass("active-toggle");
    $("#sideview").css({"display":"none"});
}

function toggleMobileFilters() {
    if ( $(".mapfilters-expanded").is(":visible") ) {
        $(".mapfilters-expanded").hide();
    } else {
        opts = $("#searchOpts").html();

        $(".mapfilters-expanded").html(opts).show();
    }
}

checkMobile();
</script>
@stop