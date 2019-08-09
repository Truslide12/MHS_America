@extends('layouts.page')

@section('page-title')
MHS For Park Owners
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

.img {
}
</style>

<div style="padding: 25px;">
	<div class="row">
		<div class="col-md-6">
			<h3>Make the Most of MHS: Park Owners</h3>
			<p style="font-size: 1.2em;">
				As a park owner it is important to not only you but all your tenents that your community is precieved as a great place to live. In a world ran on digital platforms it is important to have an online presence to let people know just how great your community is. MHS America has built the tools needed for you to represent your park online with helpful information and a modern design.
			</p>
			<p style="font-size: 1.2em;">
				We offer two plans for Park Owners to get their park online and into our search results in minutes. With our free profile you can register your park on our plaform and show up to users searching for communities in your area. If you want to stand out amoung the competetion we offer a paid profile for $149.99/year. With a paid profile you are able to advertise key selling points about your community to all the users of MHS America.
			</p>

			<h3>Vaccant Spaces are Costly</h3>
			<p>
				MHS America realizes that every vaccant space in your community equates to missing profits. That's why we don't make a bad situation worse by charging you to advertise your vacancies. With your paid Community Profile you can list all vacant spaces in the community free of cost. Your spaces will show up both on your community profile and in our search results.
			</p>
			<h3>Pictures are Louder than Words</h3>
			<p>
				Not everyone knows how to spin colorful language into a paragraph that sells. That's why we allow you to upload photos of your park in addition to your 750 character 'About Us' section.
			</p>
			<h3>Sell Everything</h3>
			<p>
				Your community is likely filled with value that you want future tenents to know about. MHS America lets you get the word out on everything you offer. Paid profiles have access to a large database of Park Amenities that can be added to your profile so that people know exactly what they get.
			</p>
			<h3>Get Call's When you want them.</h3>
			<p>
				Our paid profiles allow you to enter your park office hours so potential renters known when to reach you. Don't miss potential profit by not being clear on when you're at the register. Add your phone number, fax, hours and other office information on your paid profile to make sure you're easy to reach out of convience for both you and your customers.
			</p>


		</div>
		<div class="col-md-6 col-sm-12">
			@if(1==2)
			<div style="margin-bottom: 10px;background-color: #f2f2f2;padding: 20px;border-radius: 10px!important;border:1px solid #cdcfd3;">
			<div class="card" style="position: relative;">
			  <div class="card-holder">
			    <h4><b>Some of what we offer</b></h4> 
			    <p class="card-col-1" style="font-weight: bold;">Features</p>
			    <p class="card-col-4" style="font-weight: bold;">Free</p>
			    <p class="card-col-4" style="font-weight: bold;">149.99</p>
			    <hr>
			    <p class="card-col-1">Community Photos</p>
			    <p class="card-col-2">1</p>
			    <p class="card-col-2">5</p>
			    <hr>
			    <p class="card-col-1">Show in Search Results</p>
			    <p class="card-col-2"><i class="fa fa-check"></i></p>
			    <p class="card-col-2"><i class="fa fa-check"></i></p>
			    <hr>
			    <p class="card-col-1">Advertise Spaces</p>
			    <p class="card-col-2"><i class="fa fa-check"></i></p>
			    <p class="card-col-2"><i class="fa fa-mark"></i></p>
			    <hr>
			    <p class="card-col-1">Full Profile Detail</p>
			    <p class="card-col-2"><i class="fa fa-check"></i></p>
			    <p class="card-col-2"><i class="fa fa-mark"></i></p>
			    <hr>

			    <div style="clear: all;margin-bottom: 10px;">&nbsp;</div>
			  </div>
			</div>
			<a href="/getstarted/home/premium" class="btn btn-success" style="width: 100%;margin-top: 25px;">Start Now</a>
			</div>
			@endif
			<div class="" style="background: silver; padding:5px;border:1px solid black">
			<img class="img" style="max-width: 100%;" src="/img/promo_images/CommunityProfile.png">
			</div>
			<a href="" style="width: 100%;padding: 20px;margin-top: 5px;" class="btn btn-success">Start Now</a>
		</div>
	</div>
</div>



@stop
