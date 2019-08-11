@extends('layouts.page')

@section('page-title')
MHS For Home Owners
@stop

@section('page-content')
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
h3, h1 {
	font-family: Voltaire;
}
</style>

<div style="padding: 25px;">
	<div class="row">
		<div class="col-md-6">
			<h3>Make the Most of MHS: Home Owners</h3>
			<p style="font-size: 1.2em;">
			As a Home Owner selling your home can be difficult. MHS America is here to help you through the process. We have built a platform that not only provides an audience for your Home Listing, but we also provide easy to use tools designed to assist you in creating a professional Home Listings that sets your Home apart from the average news paper ads of the past.
			</p>

			<h3>You are your Business:</h3>
			<p>
			To list your home on our platform you will need to activate business features on your account. As a for sale by owner you will not need to setup a company, but you will need to put in some personal information. 
			</p>

			<h3>So Much for So Little:</h3>
			<p>
			At MHS America we believe Home Listings shouldn't be as costly as they are. That's why we offer the best deal we can find. For only $39.99 you can list your home on our platform for up to 180 days. If your home is still active after 90 days, you will need to reactivate the home to list for the remaining 90 days. This is to ensure that the information on our platform does not become out dated.
			</p>

			<h3>Your Home's Status is Important:</h3>
			<p>
			Buying and Selling a home is a busy and stressful time. And even once it's over you have to move which is just as stressful. The last thing you need while packing up your closet is a dozen calls from anxious home buyers about the home you sold three days ago. That's why it is important to update your Home Status as soon as possible. The home status effects how and when we display your home on our platform. It is important to let the world now that your home is off the market, and we at MHS like to celebrate every time we help a client sell their home, so please let us now.
			</p>
		</div>
		<div class="col-md-6 col-sm-12">
			@if( 1==2 )
			<div style="margin-bottom: 10px;background-color: #f2f2f2;padding: 20px;border-radius: 10px!important;border:1px solid #cdcfd3;">

			<div class="card" style="position: relative;">
				<div class="stickerprice">$39<sup><small>99</small></sup></div>
			  <div class="card-holder">
			    <h4><b>Home Listing Features</b></h4> 
			    <p class="card-col-1" style="font-weight: bold;">Features</p>
			    <p class="card-col-4" style="font-weight: bold;">&nbsp;</p>
			    <hr>
			    <p class="card-col-1">Home Photos</p>
			    <p class="card-col-4">5</p>
			    <hr>
			    <p class="card-col-1">Full Home Details</p>
			    <p class="card-col-4"><i class="fa fa-check"></i></p>
			    <hr>
			    <p class="card-col-1">Appear in MHS Search</p>
			    <p class="card-col-4"><i class="fa fa-check"></i></p>
			    <hr>
			    <p class="card-col-1">Appear on your city and state pages</p>
			    <p class="card-col-4"><i class="fa fa-check"></i></p>
			    <hr>
			    <p class="card-col-1">180 Day Listing <small>(free re-activation required at 90 days)</small></p>
			    <p class="card-col-4"><i class="fa fa-check"></i></p>
			    <div style="clear: all;margin-bottom: 10px;">&nbsp;</div>
			  </div>
			</div>
			<a href="/getstarted/home/premium" class="btn btn-success" style="width: 100%;margin-top: 25px;">Start Now</a>
			</div>
			@endif
			<div class="" style="background: silver; padding:5px;border:1px solid black">
			<img class="img" style="max-width: 100%;" src="/img/promo_images/HomeProfile.png">
			</div>
			<a href="" style="width: 100%;padding: 20px;margin-top: 5px;" class="btn btn-success">Start Now</a>

		</div>
	</div>
</div>



@stop
