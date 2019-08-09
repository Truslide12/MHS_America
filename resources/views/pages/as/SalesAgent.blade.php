@extends('layouts.page')

@section('page-title')
MHS For Sales Agents
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
</style>

<div style="padding: 25px;">
	<div class="row">
		<div class="col-md-6">
			<h3>Make the Most of MHS: Sales Agent</h3>
			<p style="font-size: 1.2em;">
				As an Agent MHS America offers you exciting tools to assist you and your colleages in maintaining a professional online presence. Our platform has been thoughfuly designed to promote easy business use. By having your company register on MHS America, the home listings of all employees can be managed from one place.
			</p>

			<h3>If You Don't Work Alone, Bring the Whole Office</h3>
			<p>
				If the Company you work for registers on MHS America you and other employees can start working together on our platform. By working as a company you can make use of our more advanced features:
			</p>

			<ul>
				<li>
					Company Billing: Your company can register company debit/credit cards and assign access to any user(s) on the system. This allows you limit who can purchase new listing and prevent employees from seeing card numbers. Having all your billing tied to the company allows you to access full spending reports each month to see the cost of your companies online presence.
				</li>
				<li>
					User Management: Assign Employees to different functions. By managing your employees roles you can limit each persons functional access to only what they need. Whether its ability to manage payment information, create home listings, update home listings, or invite new users. Home listings access can be assigned globally or individualy.
				</li>
				<li>
					Company Profile: You can create a profile for your company showing all your listings and agents. Make it easy for user to see why your offerings are better than the rest.
				</li>
			</ul>


	

			<h3>Flying Solo? We Respect That.</h3>
			<p>
				Even if you're a one person business MHS America is right for you. By registering your Company you are still able to promote it with a company profile and still have access to all the features listed above should you ever need them. 
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
