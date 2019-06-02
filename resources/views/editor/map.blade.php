@extends('layouts.master')
@fix-navbar
@show-navbar-divider

@section('incls-head-early')
<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.54.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.54.0/mapbox-gl.css' rel='stylesheet' />
<style>
body { margin:0; padding:0; }
#map { position:absolute; top:0; bottom:0; width:100%; }
.calculation-box {
height: 75px;
width: 150px;
position: absolute;
bottom: 40px;
left: 10px;
background-color: rgba(255, 255, 255, .9);
padding: 15px;
text-align: center;
}
 
p {
font-family: 'Open Sans';
margin: 0;
font-size: 13px;
}
</style>
@stop

@section('content')
<div class="row white">
	<div class="col-md-12">
		<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="btn btn-default pull-right visible-xs visible-sm">Go back</a>
		<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="btn btn-default pull-right push-down hidden-xs hidden-sm">Go back</a>
		<h3>Profile manager</h3>
		<h4>
			<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}">{{ $profile->title }}</a> <small><i class="fa fa-chevron-right"></i></small> 
			Homes
		</h4>
		<hr>
	</div>
</div>
<div class="row white">
	<div class="col-md-offset-2 col-md-8">

	<h1>Please Draw Your Service Area</h1><hr>

<div style="position: relative;height: 50vh;margin-bottom: 50px;">

	<script src='https://api.tiles.mapbox.com/mapbox.js/plugins/turf/v3.0.11/turf.min.js'></script>
	<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.0.9/mapbox-gl-draw.js'></script>
	<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.0.9/mapbox-gl-draw.css' type='text/css'/>
	<div id='map'></div>


</div>
<div class="cords"></div>

	</div>
</div>
@stop





@section('incls-body')
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiYW50aG9ueW1hdmlsYSIsImEiOiJjanV5azZnZDYwMGdvNDltdTQ3YW5lN3p3In0.lpbLIuU4veq3zAYmcwcDBw';
/* eslint-disable */
var map = new mapboxgl.Map({
container: 'map', // container id
style: 'mapbox://styles/mapbox/streets-v11', //hosted style id
center: [-91.874, 42.760], // starting position
zoom: 12 // starting zoom
});
 
var draw = new MapboxDraw({
displayControlsDefault: false,
controls: {
polygon: true,
trash: true
}
});
map.addControl(draw);
 
map.on('draw.create', updateArea);
map.on('draw.delete', updateArea);
map.on('draw.update', updateArea);
 
function updateArea(e) {
	var data = draw.getAll();

	if (data.features.length > 0) {
		var area = turf.area(data);
		var rounded_area = Math.round(area*100)/100; 
		console.log("area", rounded_area);
		setGeo(data.features[0].geometry);
	} else {
		if (e.type !== 'draw.delete') alert("Use the draw tools to draw a polygon!");
	}
}

function setGeo(geoObj) {
	console.log(geoObj)
	var html = "<strong>Cords:</strong><hr>";
	var st = "";
	for ( cord in geoObj.coordinates[0]) {
		if(st.length > 0) { st += ", " }
		html += "x: "+geoObj.coordinates[0][cord][0]+", y: "+geoObj.coordinates[0][cord][1]+"<br>";
		st += geoObj.coordinates[0][cord][0]+" "+geoObj.coordinates[0][cord][1];
	}


	statement = "SELECT ST_GeomFromText('POLYGON(("+st+"))',2249)";
	html += "<hr><strong>Statement:</strong> " + statement;

	$(".cords").html(html);
}
</script>
@stop