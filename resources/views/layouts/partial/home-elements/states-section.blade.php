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
	height: 2em;
	padding: auto auto;
	padding-top: 3px;
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



			.mailer {
				background: rgba(66, 134, 244, 0);
				width: 100%;
				padding:3px 3px!important;
				border-radius: 5px!important;
				position: relative;
				margin: auto;
				color: gray;
				display: flex;
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
</style>
	<div class="row clearfix nudge white">
		<div class="col-md-12" style="padding: 0;">
			<div class="statebanner pulse" id="statebanner">
				<h3>We're serving customers all across America.</h3>
			</div>
		</div>
	</div>

	<div class="row clearfix nudge white">
		<div class="col-md-12">
			<div class="page-header no-margin-t" style="border: 0px solid white!important;margin-bottom: 1in;">
				<div class="statecontainer">
					<div class="statecol">
						<a href="/explore/al">Alabama</a>
						<a href="/explore/ak">Alaska</a>
						<a href="/explore/az">Arizona</a>
						<a href="/explore/ar">Arkansas</a>
						<a href="/explore/ca">California</a>
						<a href="/explore/co">Colorado</a>
						<a href="/explore/ct">Connecticut</a>
						<a href="/explore/de">Delaware</a>
						<a href="/explore/fl">Florida</a>
						<a href="/explore/ga">Georgia</a>
					</div>
					<div class="statecol">
						<a href="/explore/hi">Hawaii</a>
						<a href="/explore/id">Idaho</a>
						<a href="/explore/il">Illinois</a>
						<a href="/explore/in">Indiana</a>
						<a href="/explore/ia">Iowa</a>
						<a href="/explore/ks">Kansas</a>
						<a href="/explore/ky">Kentucky</a>
						<a href="/explore/la">Louisiana</a>
						<a href="/explore/me">Maine</a>
						<a href="/explore/md">Maryland</a>
					</div>
					<div class="statecol">
						<a href="/explore/ma">Massachusetts</a>
						<a href="/explore/mi">Michigan</a>
						<a href="/explore/mn">Minnesota</a>
						<a href="/explore/ms">Mississippi</a>
						<a href="/explore/mo">Missouri</a>
						<a href="/explore/mt">Montana</a>
						<a href="/explore/ne">Nebraska</a>
						<a href="/explore/nv">Nevada</a>
						<a href="/explore/nh">New Hampshire</a>
						<a href="/explore/nj">New Jersey</a>
					</div>
					<div class="statecol">
						<a href="/explore/nm">New Mexico</a>
						<a href="/explore/ny">New York</a>
						<a href="/explore/nc">North Carolina</a>
						<a href="/explore/nd">North Dakota</a>
						<a href="/explore/oh">Ohio</a>
						<a href="/explore/ok">Oklahoma</a>
						<a href="/explore/or">Oregon</a>
						<a href="/explore/pa">Pennsylvania</a>
						<a href="/explore/ri">Rhode Island</a>
						<a href="/explore/sc">South Carolina</a>
					</div>
					<div class="statecol">
						<a href="/explore/sd">South Dakota</a>
						<a href="/explore/tn">Tennessee</a>
						<a href="/explore/tx">Texas</a>
						<a href="/explore/ut">Utah</a>
						<a href="/explore/vt">Vermont</a>
						<a href="/explore/va">Virginia</a>
						<a href="/explore/wa">Washington</a>
						<a href="/explore/wv">West Virginia</a>
						<a href="/explore/wi">Wisconsin</a>
						<a href="/explore/wy">Wyoming</a>
					</div>
				</div>
			</div>
		</div>
	</div>