@extends('layouts.page')

@section('page-title')
MHS For Home Buyers
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
			<h3>Make the Most of MHS: Home Buyers</h3>
			<p style="font-size: 1.2em;">
				MHS America is here to help you find the right home for you. It is our goal to provide the best home buying experience for our customers. On our platform you will find the most accurate information available to aid you in your home buying process. Here is how to make the best of your MHS America experience.
			</p>

			<a href="" style="width: 100%;padding: 20px;" class="btn btn-success">Register Now</a>
		</div>
		<div class="col-md-6 col-sm-12">
			<h3>Register an Account, it's Worth It</h3>
			<p>
				While our platform can be used without an account, registering will make your experience far easier. As a registered user you will be able to more easily narrow your search of homes,  currate a list of watched homes you want to keep an eye on, and see contact information that may be hidden from non users at the sellers request.
			</p>

			<h3>Save that Money for the House</h3>
			<p>
				MHS America doesn't charge Home Buyers for any of our services. Whether you are using our platform as a guest or as a registered users there are no fee's.
			</p>
		</div>
	</div>
</div>



@stop
