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
.comm_week_box {
	padding: 22px;
	margin-bottom: 100px;
}

.comm_week_banner {
	background-color: silver;
	border: 0px solid #dedede;
	border-bottom: 0px;
	position: relative;
}

.comm_week_text {
	color: #000;
	padding: 22px;
	font-size: 1.2em;
	z-index: 2;
	border: 1px solid #dedede;
	background-color: #f5f5f5;
  	-webkit-box-shadow: 0px 10px 2px -4px rgba(0,0,0,0.16);
	-moz-box-shadow: 0px 10px 2px -4px rgba(0,0,0,0.16);
	box-shadow: 0px 10px 2px -4px rgba(0,0,0,0.16);


}
.comm_week_label {
	position: absolute;
	top: 0px;
	left: 0px;
	font-size: 4em;
	font-family: Voltaire;
	z-index: 2;
	width: 100%;
	padding: 10px;
	color: snow;
}

.comm_week_label::after {
	content: "";
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	width: 100%;
	z-index: -1;
	background-color: #000;
	opacity: 0.4;
}

@media (max-width:767px) {
	.comm_week_label {
		font-size: 2em;
	}

}


</style>


	<div class="row clearfix nudge white" style="padding:25px 0;padding-bottom: 1in;">

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





