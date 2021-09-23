@extends('layouts.master')
@fix-navbar
@use-navbar-divider
@use-slim-footer

@section('incls-head-early')
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


@stop

@section('incls-head')
    <link href="{{ URL::route('welcome') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ URL::route('welcome') }}/css/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/search.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/badges.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/bootstrap-slider.min.css">

    <link
      rel="stylesheet"
      href="https://js.arcgis.com/4.11/esri/themes/light/main.css"
    />
    <script src="https://js.arcgis.com/4.11/"></script>


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
            overflow-y:auto;
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
                background: red;
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
                <input type="hidden" id="optAge" name="age" value="0">
                <input type="hidden" id="optBeds" name="beds" value="0">
                <input type="hidden" id="optBaths" name="baths" value="0">
                <input type="hidden" id="optMax" name="max" value="0">
                <input type="hidden" id="optWidth" name="width" value="0">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-9 margin-t-16" id="filterbox">
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
                            <li><a href="#" data-value="0" data-title="All Ages">All Ages</a></li>
                            <li><a href="#" data-value="1" data-title="Senior / 55+">Senior / 55+</a></li>
                            <li><a href="#" data-value="2" data-title="Senior Only">Strictly Senior</a></li>
                        </ul>
                    </div>
                </div>
                <div class="form-group community-filters" style="display: none;">
                    <div class="checkbox">
                        <input type="checkbox" name="spaces" id="optSpaces" value="1">
                        <label for="optSpaces"> Has Spaces</label>
                    </div>
                </div>
                <div class="form-group community-filters" style="display: none;">
                    <div class="checkbox">
                        <input type="checkbox" name="homes" id="optHomes" value="1">
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
            <div id="map" style="opacity:1;"></div>
            <div class="mapfilters" onclick="toggleMobileFilters();"> <i class="fas fa-filter"></i></div>
            <div class="mapfilters-expanded" style="display: none;">
                ...
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

<script xsrc="{{ URL::route('welcome') }}/js/mhs.map.js" type="text/javascript"></script>
<script type="text/javascript">

    var center = Array();
        center['lat'] = -117.040303;
        center['lon'] = 34.030514;

      require([
        "esri/Map",
        "esri/layers/GeoJSONLayer",
        "esri/views/MapView"
      ], function(Map, GeoJSONLayer, MapView) {
        // If GeoJSON files are not on the same domain as your website, a CORS enabled server
        // or a proxy is required.
        const url =
          "/octavia/geojson";

        // Paste the url into a browser's address bar to download and view the attributes
        // in the GeoJSON file. These attributes include:
        // * mag - magnitude
        // * type - earthquake or other event such as nuclear test
        // * place - location of the event
        // * time - the time of the event
        // Use out of box popupTemplate function DateString to format time field into a human-readable format

        const template = {
          title: "Community Information",
          content: "{title} - {space_count} spaces {home_count} homes"
        };

        const renderer = {
          type: "simple",
          field: "mag",
          symbol: {
            type: "simple-marker",
            color: "orange",
            outline: {
              color: "white"
            }
          },
          visualVariables: [
            {
              type: "size",
              field: "mag",
              stops: [
                {
                  value: 2.5,
                  size: "4px"
                },
                {
                  value: 8,
                  size: "40px"
                }
              ]
            }
          ]
        };


        const geojsonLayer = new GeoJSONLayer({
          url: url+"?&lat="+center['lat']+"&lon="+center['lon'],
          copyright: "USGS Earthquakes",
          popupTemplate: template,
          renderer: renderer //optional
        });

        const map = new Map({
          basemap: "streets-vector",
          layers: [geojsonLayer]
        });

        const view = new MapView({
          container: "map",
          center: [center['lat'], center['lon']], 
          zoom: 14,
          map: map
        });



      });


</script>
@stop