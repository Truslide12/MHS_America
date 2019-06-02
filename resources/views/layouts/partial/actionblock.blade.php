<style type="text/css">
	
.statecontainer {
	width: 100%;
	padding:0;
	position: relative;
	display: flex;
	align-items: center;
	align-content: center;
	justify-content: center;
}
.statecol {
	width: 20%;
	display: inline-block;
	text-align: center;
	margin: auto;
}
.statecol a {
	display: block;
	background: none;
}

.statecol a:hover {
	display: block;
	background: #d6e5ff;
}

.statebanner {
	height: 20vh;
	background: url('{{ URL::route('welcome') }}/img/stockphotos/autumn-colors-country-417099.jpg');
	background-size: 100%;
	background-position: center 65%;
	display: flex;
}

.statebanner h3 {
	font-size: 2em;
	color: snow;
	margin: auto auto;
}


.img {
	max-width: 100%;
}

.mission {
	text-align: center;
	padding-right: 0px;
	font-size: 2em;
	margin: 0 0;
	font-style: italic;
	font-family:  "Lato", Helvetica, Arial, sans-serif;;
	color: snow;
	padding: 10px 50px;
}

.btnbox {
	text-align: right;
	height:100%;
	margin-top:30px;
	padding-right: 10px;
	width: 100%;
}

.cotw_text {
	padding: 20px 100px 20px 100px;
}

@media only screen and (max-width: 767.98px) {

	.statecontainer {
		width: 100%;
		padding:0;
		position: relative;
		display: block;
	}

	.statecol {
		width: 100%;
		display: inline-block;
	}

	.statecol a {
		font-size: 1.5em;
		text-align: left;
	}

	.img {
		display: none;
	}

	#promobanner {
		display: none!important;
	}
	.cotw_text {
		padding: 12px 20px 12px 20px;
	}
}

li {
	font-family:  "Lato", Helvetica, Arial, sans-serif!important;
	font-size: 1.1em;
}

.counter {
	font-size: 3.5em;
	color: #4286f4;
}
.cotw-under {
	border-bottom:5px solid #143366;
	/*-webkit-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.75);
	box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.75);*/
}
.cotw-img {
	width: 292px;
	height: 268px;
	border-radius: 10px!important;
	border:5px solid #fff;
	/*-webkit-box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.75);*/
}
.dude {
background: url('{{ URL::route('welcome') }}/img/stockphotos/blue-sky-clear-sky-cold-346529.jpg')!important;
background-size: 100% auto !important;
background-position: center center;
background-repeat: no-repeat !important;
}

.goal-imgs {
	margin-bottom: 7px;
	border-radius: 15px!important;
	width: 100%;
	height:200px;
	border:1px solid #dedede;
	/*border: 0px solid #444;
	-webkit-box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.75);
	box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.75);
	-webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;*/
}
/*.goal-imgs:hover {
	margin-bottom: 7px;
	border-radius: 15px!important;
	width: 100%;
	height:200px;
	border: 0px solid #444;
	transform: scale(1.05);
	-webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
}*/

.goals-title {
	font-size: 1.33em;
	font-family: Voltaire;
	color: #4a879e;
	text-decoration: none;
	text-transform: capitalize;
}
</style>


	<div class="row clearfix nudge white" style="padding:25px 0;padding-bottom: 1in;">
		<div style="margin: 0px 0px 0px 0px;font-size: 1.2em;background:none;">
			<img src="{{ URL::route('welcome') }}/img/stockphotos/ww.png" class="cotw-img" style="float:left;margin:25px;margin-top: 50px;">
			<div style="padding-top: 10px;">
			<h3 style="width: 100%;background:#007bdf;color:snow;padding: 7px;margin-bottom: 0px;">Community of the Month</h3>
			<div class="cotw-under" style="width: 100%;background:#005499;color:snow;padding: 7px;font-size: 0.8em;margin:0px;">
				<div style="width: 100%;">
					<h4 style="width: 40%;display: inline-block;">Wild Wood Canyon Estates | Yucaipa, CA</h4>
				</div>
			</div>

			<p class="cotw_text">
			Wildwood Mobile Home Estates is a community found in the hills of Yucaipa California. This park is surrounded by beautiful 
			greenery with an open backdrop of blue skies and the surrounding mountains. Located in a smaller city on the outskirts of 
			the Inland Empire, this community boasts the small town feel, with quick access to all the major cities in the exciting 
			Southern California region. This park sits just 1 mile from major freeway access, and a few streets over from the Yucaipa 
			Boulevard in uptown Yucaipa.
			<br><br>
			Wildwood Canyon Estates is home to 120 Spaces, with currently no vacant spaces available. The park has 2 full pools with
			gated access requiring a key. Adjacent to the lower pool is a community playground including a small field and basketball court
			perfect for the neighborhood kids. Near the upper level pool is a large clubhouse available for the community to host social 
			gatherings. All in all, Wildwood Canyon Estates is one of the nicest communities in the area, and no doubt deserving of being
			Mobile Home Spaces Across America's Community of the Week.
			</p>
			<div style="clear: all;padding-bottom: 1in;"></div>
			</div>
		</div>
		<div class="col-md-12 dude" id="promobanner" style="height:33rem;">
			<div class="btnbox">
				<div style="width: 30%;float:left;padding: 12px;background:rgba(1,200,1,0);">
					<div style="background: #e8eaed;padding: 25px;border-radius: 5px!important;">
						<div style="color:#005499;font-weight:bold;text-align: center;margin-bottom: 20px;">Home Listings</div>
						<ul style="list-style-type: none;padding: 0;">
							<li style="padding: 5px;text-align: left;font-weight: bold;border-bottom: 1px solid #aeaeae;">List home anywhere in the US</li>
							<li style="padding: 5px;text-align: left;font-weight: bold;border-bottom: 1px solid #aeaeae;">List for up to 6 Months at $39.99</li>
							<li style="padding: 5px;text-align: left;font-weight: bold;border-bottom: 1px solid #aeaeae;">List in Minutes!</li>
						</ul>
						<a href="/page/home-plans" class="btn btn-success" style="width: 100%;font-size: 1.5em;margin-top:10px;"><i class="fa fa-home"></i> Sell Home</a>
					</div>
				</div>
				<div style="width: 30%;float:left;padding: 12px;background:rgba(200,1,1,0);">
					<div style="background: #e8eaed;padding: 25px;border-radius: 5px!important;">
						<div style="color:#005499;font-weight:bold;text-align: center;margin-bottom: 20px;">Community Profiles</div>
						<ul style="list-style-type: none;padding: 0;">
							<li style="padding: 5px;text-align: left;font-weight: bold;border-bottom: 1px solid #aeaeae;">Promote your Community Online</li>
							<li style="padding: 5px;text-align: left;font-weight: bold;border-bottom: 1px solid #aeaeae;">Advertise Vacant Spaces</li>
							<li style="padding: 5px;text-align: left;font-weight: bold;border-bottom: 1px solid #aeaeae;">Advertise Homes for Sale</li>
						</ul>
						<a href="/page/community-plans" class="btn btn-success" style="width: 100%;font-size: 1.5em;margin-top:10px;"><i class="fa fa-group"></i> Promote Community</a>
					</div>
				</div>
				<div style="display: flex;width:40%;">
					<div class="mission">
				 		Mobile Home Spaces Across America invites you to see how we're changing the industry.
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="row clearfix nudge white" style="display: none;padding:55px 0;padding-bottom:75px;text-align: center;font-size: 1.5em;">
		<div class="col-md-3"><div class="counter">21</div>Homes for Sale</div>
		<div class="col-md-3"><div class="counter">04</div>Recently Sold</div>
		<div class="col-md-3"><div class="counter">12</div>Communities</div>
		<div class="col-md-3"><div class="counter">14</div>Spaces Available</div>
	</div>


	<div class="row clearfix nudge white" style="text-align: center;font-size: 1.5em;padding-bottom: 1in;">
		<div class="col-md-12">
			<h3 style="color:#005499;font-family:Lato;margin-bottom: 15px;">Our Mission &amp; Goals</h3>
			<div class="row clearfix nudge white" id="goalsbox" style="animation-delay: 0.5s!important;">
				<div class="col-md-4" style="padding: 10px 30px">
					<img src="{{ URL::route('welcome') }}/img/stockphotos/couple-home-house-1288482.jpg" class="goal-imgs">
					<h3 class="goals-title">To our Customers</h3>
					<p>Our goal is to bring a more efficient and positive experience to the customer while at the same
						time bringing mobile home parks and services direct to the buyers fingerprints.
					</p>
				</div>
				<div class="col-md-4" style="padding: 10px 30px">
					<img src="{{ URL::route('welcome') }}/img/stockphotos/accomplishment-agreement-business-1249158.jpg" class="goal-imgs">
					<h3 class="goals-title">To our Sponsors</h3>
					<p>The staff and management at Mobile Home Spaces Across America is dedicated to
						promoting mobile home park communities and services via the internet throughout the country.
					</p>
				</div>
				<div class="col-md-4" style="padding: 10px 30px">
					<img src="{{ URL::route('welcome') }}/img/stockphotos/achievement-agreement-arms-1068523.jpg" class="goal-imgs">
					<h3 class="goals-title">To our Industry</h3>
					<p>Our mission is to provide an innovative platform for buyers and sellers in the manufactured home market.
						Our platform strives to revolutionize the way our industry operates online.
					</p>
				</div>
			</div>
		</div>
	</div>
