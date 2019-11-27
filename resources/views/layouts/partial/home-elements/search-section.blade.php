
<!-- Start Search Section -->
	<div class="row clearfix white">
		<div class="jumbotron text-center" id="great-welcome" style="position: relative;">
		<div class="mir" style="display: none;"></div>
		<form action="search" method="post" class="full-form">
		{{ csrf_field() }}
		<div class="v2box">
			<div class="v2box_title">
				<h1>Search Mobile Home Spaces Across America</h1>
			</div>
			<div class="search_spacer"></div>
			<div class="sexy">
				<input type="text" name="input" placeholder="Anywhere, USA" class="sexy-stop">
				<div class="sexy-wrap"><select name="mode" class="sexy-drop">
					<option value="1">Homes</option>
					<option value="2">Spaces</option>
					<option value="0">Communities</option>
				</select></div>
				<button class="btn-primary sexy-roll"><i class="fa fa-search"></i></button>
			</div>
			<div class="search_spacer" style="margin-bottom: 22px;"></div>
			@if( isset($_GET['full']) )
			<div class="row-fluid" style="width: 100%;">
				<div style="background: rgba(100,0,0,.8);display: flex;justify-content: center;align-items: center;align-content: center;" class="col-md-4">
					<h3 style="margin: auto auto;padding: 14px;">Register your Community for free</h3>
				</div>
				<div style="background: rgba(0,100,0,.8);display: flex;justify-content: center;align-items: center;align-content: center;" class="col-md-4">
					<h3 style="margin: auto auto;padding: 14px;">List your Home for $39.99</h3>
				</div>
				<div style="background: rgba(0,0,100,.8);display: flex;justify-content: center;align-items: center;align-content: center;" class="col-md-4">
					<h3 style="margin: auto auto;padding: 14px;">Adverise your dealership</h3>
				</div>
				<div style="background: rgba(100,0,0,.8);padding: 88px 22px 44px 22px;">
					<div class="row">
						<div class="col-sm-4">
							<img src="/img/stockphotos/ballpen-blur-close-up-461077.jpg" style="max-width: 100%;padding: 0;margin: 0;">
						</div>
						<div class="col-sm-8" style="text-align: left;">
							<h2 style="font-weight: bold;font-family: Voltaire;">Has your community claimed it's free profile yet?</h2>
							<p style="font-family: Noto Sans;">
								If you own or manage a Mobile Home Community in the US, you are invited to list your community on MHS America for free. Once you have your community on our platform you have the option to upgrade and customize your community profile and advertise your vacant spaces.
							</p>
						</div>
					</div>
				</div>
			</div>
			@endif
		</div>
		</form>
		<form action="search" method="post">
		<div class="mobox">
			<div class="mobox_title">
				<h2>Search Mobile Home Spaces Across America</h2>
			</div>
			<div class="search_spacer"></div>
				<input type="text" name="input" placeholder="Anywhere, USA" class="form-control moboxstop">
				<select name="mode" class="form-control moboxdrop">
					<option value="1">Homes</option>
					<option value="2">Spaces</option>
					<option value="0">Communities</option>
				</select>
				{{ csrf_field() }}
				<button class="btn-primary form-control moboxroll"><i class="fa fa-search"></i> Search MHS America</button>
			<div class="search_spacer"></div>
		</div></form>
		<div class="mkr" style="display: none;"></div>
		</div>
	</div>
<!-- End Search Section -->
