@extends('layouts.page')

@section('incls-head-early')
<meta name="_token" content="{ csrf_token() }"/>
<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
@stop

@section('page-title')
 Here is how MHS America can Help You..
@stop

@section('page-content')


<div class="row blu" style="padding: 50px 30px;">
	<div class="col-md-8">
		<div class="card">
		  <div class="card-holder">
		    <h4><b>Home Profiles</b></h4> 
		    <p class="card-col-1" style="font-weight: bold;">Listing Features</p>
		    <p class="card-col-2" style="font-weight: bold;">Free</p>
		    <p class="card-col-3" style="font-weight: bold;">Paid</p>
		    <hr>
		    <p class="card-col-1">Photos</p>
		    <p class="card-col-2">5</p>
		    <p class="card-col-3">Unl.</p>
		    <hr>
		    <p class="card-col-1">Basic Home Information</p>
		    <p class="card-col-2"><i class="fa fa-check"></i></p>
		    <p class="card-col-3"><i class="fa fa-check"></i></p>
		    <hr>
		    <p class="card-col-1">Structural Data</p>
		    <p class="card-col-2"><i class="fa fa-times"></i></p>
		    <p class="card-col-3"><i class="fa fa-check"></i></p>
		    <hr>
		    <p class="card-col-1">Contact Forms</p>
		    <p class="card-col-2"><i class="fa fa-times"></i></p>
		    <p class="card-col-3"><i class="fa fa-check"></i></p>
		    <div style="clear: all;">&nbsp;</div>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="price">$39<sup><small style="font-size: .65em;">99</small><sup></sup></sup></div>
		<p class="action-call">
			Looking to sell a home? Use MHS America to advertise your home to thousands of potential home buyers in your area. We welcome both home owners and community managers to list homes on our platform.
		</p>
		<a href="{{ URL::route('welcome') }}/page/home-plans" class="btn btn-success pull-right" style="width: 100%;margin-top: 25px;">See More</a>
	</div>
</div>


<div class="row blu2"  style="padding: 50px 30px;">
	<div class="col-md-8">
		<div class="card">
		  <div class="card-holder">
		    <h4><b>Community Profiles</b></h4> 
		    <p class="card-col-1" style="font-weight: bold;">Features</p>
		    <p class="card-col-2" style="font-weight: bold;">Free</p>
		    <p class="card-col-3" style="font-weight: bold;">Paid</p>
		    <hr>
		    <p class="card-col-1">Photos</p>
		    <p class="card-col-2">2</p>
		    <p class="card-col-3">5</p>
		    <hr>
		    <p class="card-col-1">Include Basic Community Information</p>
		    <p class="card-col-2"><i class="fa fa-check"></i></p>
		    <p class="card-col-3"><i class="fa fa-check"></i></p>
		    <hr>
		    <p class="card-col-1">Advertise Available Spaces</p>
		    <p class="card-col-2"><i class="fa fa-times"></i></p>
		    <p class="card-col-3"><i class="fa fa-check"></i></p>
		    <hr>
		    <p class="card-col-1">Include Contact Forms</p>
		    <p class="card-col-2"><i class="fa fa-times"></i></p>
		    <p class="card-col-3"><i class="fa fa-check"></i></p>
		    <div style="clear: all;">&nbsp;</div>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="price">$0 - $149<sup><small style="font-size: .65em;">99</small><sup></sup></sup></div>
		<p class="action-call">
			Wanting to promote you community with MHS America? For $149.99/year you can promote your community to potential renters and/or buyers in your area.
		</p>
		<a href="{{ URL::route('welcome') }}/page/community-plans" class="btn btn-success pull-right" style="width: 100%;margin-top: 25px;">See More</a>
	</div>
</div>

@if(1==2)
<div class="row blu" style="padding: 50px 30px;">
	<div class="col-md-8">
		<div class="card">
		  <div class="card-holder">
		    <h4><b>Professional Profiles</b></h4> 
		    <p class="card-col-1" style="font-weight: bold;">Listing Features</p>
		    <p class="card-col-2" style="font-weight: bold;">Free</p>
		    <p class="card-col-3" style="font-weight: bold;">Paid</p>
		    <hr>
		    <p class="card-col-1">Photos</p>
		    <p class="card-col-2">5</p>
		    <p class="card-col-3">Unl.</p>
		    <hr>
		    <p class="card-col-1">Basic Business Information</p>
		    <p class="card-col-2"><i class="fa fa-check"></i></p>
		    <p class="card-col-3"><i class="fa fa-check"></i></p>
		    <hr>
		    <p class="card-col-1">Link to promotional video / commercial</p>
		    <p class="card-col-2"><i class="fa fa-times"></i></p>
		    <p class="card-col-3"><i class="fa fa-check"></i></p>
		    <hr>
		    <p class="card-col-1">Contact Forms</p>
		    <p class="card-col-2"><i class="fa fa-times"></i></p>
		    <p class="card-col-3"><i class="fa fa-check"></i></p>
		    <div style="clear: all;">&nbsp;</div>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="price">$149<sup><small style="font-size: .65em;">99</small><sup></sup></sup></div>
		<p class="action-call">
			Are you a professional in the Mobile Home Industry? By using MHS America to promote your business you will have access to thousands of potential customers living in mobile homes.
		</p>
		<a href="{{ URL::route('welcome') }}/page/professional-plans" class="btn btn-success pull-right" style="width: 100%;margin-top: 25px;">See More</a>
	</div>
</div>
@endif
<style type="text/css">
.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.25);
  transition: 0.3s;
  background: rgb(249, 251, 255);
  border: 1px solid rgba(40, 107, 255,.25);
  border-radius: 5px !important; /* 5px rounded corners */
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.25);
  border-radius: 15px; /* 5px rounded corners */
}

/* Add some padding inside the card container */
.card-holder {
  padding: 2px 16px;
}


/* Add rounded corners to the top left and the top right corner of the image */
img {
  border-radius: 5px 5px 0 0;
}

.card hr {
    border: 0;
    height: 1px;
    background: #333;
    background: -webkit-gradient(linear, 0 0, 100% 0, 
    	from( 			rgba(40, 107, 255,.1) ), 
    	to(   			rgba(40, 107, 255,.1) ), 
    	color-stop(50%, rgba(40, 107, 255,.25) ) );

    width: 100%;
}

.card h4 {
	font-weight: bold;
	margin: 25px;
	text-align: center;
	font-size: 2.25rem;
	color: rgb(70, 95, 168);
}

h1 {
	text-align: center;
	margin-top: 50px;
	margin-bottom: 75px;
	font-size: 6rem;

}

.blu {
/*
background: rgb(147,170,224);
background: linear-gradient(187deg, rgba(147,170,224,1) 0%, rgba(5,64,126,1) 100%);
*/
}

.blu2 {
/*
background: rgb(44,125,170);
background: linear-gradient(187deg, rgba(44,125,170,1) 0%, rgba(135,190,219,1) 100%);
*/
}

.card-col-1 {
	width: 80%;
	float: left;
}
.card-col-2 {
	width: 10%;
	float: left;
	text-align: center;
}
.card-col-3 {
	width: 10%;
	float: left;
	text-align: center;
}
.action-call {
	color: #333;
	font-size: 1.6rem;
}
.fa-times { color: red; }
.fa-check { color: green; }

.price {
	text-align: center;
    font-size: 5em;
    font-weight: 900;
}

h2 {
	text-align: center;
	font-size: 4rem;
	font-weight: 900;
	margin-bottom: 50px;
}
h4 {
	font-size: 2.25rem;
	font-weight: 900;
	margin-bottom: 20px;
}
</style>
@stop
