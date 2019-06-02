@extends('layouts.page')

@section('incls-head-early')
<meta name="_token" content="{ csrf_token() }"/>
<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
@stop

@section('page-title')
MHS Means Business for your Business
@stop

@section('page-content')

<div class="row blu">
	<div class="col-md-offset-1 col-md-5 col-sm-offset-0 col-sm-12">
		<div style="margin-bottom: 10px;background-color: #f2f2f2;padding: 20px;border-radius: 10px!important;border:1px solid #cdcfd3;">
		<div class="price">Free</div>
		<p class="action-call">
			Looking to promote your community for free? MHS America is the perfect place to promote your community and get noticed.
		</p>
		<div class="card">
		  <div class="card-holder">
		    <h4><b>Free Community Profile</b></h4> 
		    <p class="card-col-1" style="font-weight: bold;">Features</p>
		    <p class="card-col-4" style="font-weight: bold;">&nbsp;</p>
		    <hr>
		    <p class="card-col-1">Photos</p>
		    <p class="card-col-4">1</p>
		    <hr>
		    <p class="card-col-1">Basic Information</p>
		    <p class="card-col-4"><i class="fa fa-check"></i></p>
		    <hr>
		    <p class="card-col-1">Contact Information</p>
		    <p class="card-col-4"><i class="fa fa-check"></i></p>
		    <hr>
		    <p class="card-col-1">Search Results</p>
		    <p class="card-col-4"><i class="fa fa-check"></i></p>
		    <div style="clear: all;margin-bottom: 10px;">&nbsp;</div>
		  </div>
		</div>
		<button class="btn btn-success" style="width: 100%;margin-top: 25px;">Get Started for Free</button>
		</div>
	</div>
	<div class="col-md-5  col-sm-12">
		<div style="margin-bottom: 10px;background-color: #f2f2f2;padding: 20px;border-radius: 10px!important;border:1px solid #cdcfd3;">
		<div class="price">Premium</div>
		<p class="action-call">
			Ready to up your game? Subscribe to our premium service and gain access to even more tools to promote your community.
		</p>
		<div class="card" style="position: relative;">
			<div class="stickerprice">$149<sup><small>99</small></sup></div>
		  <div class="card-holder">
		    <h4><b>Premium Community Profile</b></h4> 
		    <p class="card-col-1" style="font-weight: bold;">Features</p>
		    <p class="card-col-4" style="font-weight: bold;">&nbsp;</p>
		    <hr>
		    <p class="card-col-1">Photos</p>
		    <p class="card-col-4">5</p>
		    <hr>
		    <p class="card-col-1">Advanced Profile Details</p>
		    <p class="card-col-4"><i class="fa fa-check"></i></p>
		    <hr>
		    <p class="card-col-1">Video/Commercial Link</p>
		    <p class="card-col-4"><i class="fa fa-check"></i></p>
		    <hr>
		    <p class="card-col-1">Contact Forms</p>
		    <p class="card-col-4"><i class="fa fa-check"></i></p>
		    <div style="clear: all;margin-bottom: 10px;">&nbsp;</div>
		  </div>
		</div>
		<button class="btn btn-success" style="width: 100%;margin-top: 25px;">Subscribe for $149.99/year</button>
		</div>
	</div>
</div>



<hr class="thick-hr">

<div class="row blu">
	<div class="col-md-10 col-md-offset-1">
		<h2 style="margin-top: 0px;margin-bottom:15px;">Enterprise Plans</h2>
	</div>
	<div class="col-md-10 col-md-offset-1">
		<div style="background-color: #f2f2f2;padding: 20px;border-radius: 10px!important;border:1px solid #cdcfd3;">
		<p>
			MHS America welcomes customized enterprise plans for large companies servicing the Mobile Home Industry.
			If you have a large company, we can work with you to setup large scale advertising campaigns on our platform
			with competitive bulk pricing. As an enterprise, you can purchase large quantities of profiles and advertisements, 
			and assign them to employees, franchises, departments, or along any other professional lines that match your companies
			unique needs. Contact us to let us know how we can best serve your company.
		</p>
		</div>
		<a href="{{ URL::route('welcome') }}/page/contact" class="btn btn-success pull-right" style="margin-top: 25px;">Contact Us for Info</a>
	</div>
</div>

<hr class="thick-hr">

<div class="row blu" style="padding: 0px 30px;">
	<div class="col-md-12">
		<h2>Frequently Asked Questions</h2>
	</div>
	<div class="col-md-6">
		<h4>What types of payment do you accept?</h4>
		<p>Credit card (including MasterCard, Visa or American Express) via our secure online order form provide through stripe.</p>
		<hr>
		<h4>What is your refund policy?</h4>
		<p>Refunds are available withing 48 hours of purchase of any of the above detailed plans.</p>
		<hr>
	</div>
	<div class="col-md-6">
		<h4>Can I change my plan at a later time?</h4>
		<p>Changes can be made at anytime, and prices will be adjusted to accommodate prorated prices.</p>
		<hr>
	</div>
</div>

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

.thick-hr {
    border: 0;
    height: 3px;
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
	font-weight: 900;

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
.card-col-4 {
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

.stickerprice {
	color:black;
	font-weight: bold;
	font-size: 1.5em;
	border-radius: 37px!important;
	height:74px;
	width:74px;
	position: absolute;
	top:-17px;
	right:-17px;
	display: flex;
	align-content: center;
	justify-content: center;
	align-items: center;
	background: rgb(237,213,119);
	background: radial-gradient(circle, rgba(237,213,119,1) 0%, rgba(205,129,80,1) 100%);
}
</style>
@stop
