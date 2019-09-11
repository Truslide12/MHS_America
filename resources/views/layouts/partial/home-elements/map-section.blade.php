<style type="text/css">
.mapcontainer {
	width: 100%;
	padding:0;
	position: relative;
	display: flex;
	align-items: center;
	align-content: center;
	justify-content: center;
}
.mapcol {
	width: 20%;
	display: inline-block;
	text-align: center;
	margin: auto;
}
.mapcol a {
	display: block;
	background: none;
	height: 2em;
	padding: auto auto;
	padding-top: 3px;
	font-size: 1.25em;
}

.mapcol a:hover {
	display: block;
	background: #d6e5ff;
}

  .mapcontainer {
    background: none;
  }
  .mapcol {
    min-width: 50%;
    float: left;
    margin: 0 0;
    margin-top: 0!important;
  }

.mapbanner {
	height: 40vh;
	background: url('/img/stockphotos/autumn-colors-country-417099.jpg');
	background-size: 100%;
	background-position: center 65%;
	display: flex;
	align-content: center;
	align-items: center;
	justify-content: center;
}

.mapbanner h3 {
	font-size: 2em;
	color: snow;
	margin: auto auto;
	text-align: center;
}

.map-section {
	padding-top: 1in;padding-bottom:1in;margin-bottom: 1in;border-top:1px solid gray;border-bottom: 1px solid gray;
}

@media only screen and (max-width: 767.98px) {
	.mapbanner {
		height: 20vh;
		display: none;
	}
	.mapcol a,
	.mapcol a:hover,
	.mapcol a:active {
		font-size: 1.5em;
		text-align: left;
		width: calc(100% - 2px);
		margin: 2px;
		background: #f5f5f5;
		border: 1px solid #dedede;
		float: left;
		min-height: calc(10vh - 4px);
		text-align: center;
		display: inline-flex;
		align-items: center;
		align-content: center;
		justify-content: center;
	}
	.map-section {
		padding-top: 18px;padding-bottom:118px;margin-bottom: 18px;border-top:1px solid gray;border-bottom: 1px solid gray;
	}
}

</style>
<!-- Start Map Section -->
	<div class="row clearfix nudge white map-banner">
		<div class="col-md-12 nopad">
			<div class="mapbanner" id="mapbanner">
				<h3>We're serving customers all across America.</h3>
			</div>
		</div>
	</div>
	<div class="row clearfix nudge white map-section" style="">
		<div class="col-md-9 nopad">
			<div style="width: 100%;" id="map"></div>
		</div>
		<div class="col-md-3 nopad">
			<h3 style="margin: 0 auto 10px auto;text-align: center;margin-top: 0;padding-top: 0;border-bottom: 1px solid gray;width: 80%;">Explore America</h3>
				<div class="mapcontainer">
					<div class="mapcol">
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
						<a href="/explore/ma">Massachusetts</a>
						<a href="/explore/mi">Michigan</a>
						<a href="/explore/mn">Minnesota</a>
						<a href="/explore/ms">Mississippi</a>
						<a href="/explore/mo">Missouri</a>
					</div>
					<div class="mapcol">
						<a href="/explore/mt">Montana</a>
						<a href="/explore/ne">Nebraska</a>
						<a href="/explore/nv">Nevada</a>
						<a href="/explore/nh">New Hampshire</a>
						<a href="/explore/nj">New Jersey</a>
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
<!-- Start Map Section -->

