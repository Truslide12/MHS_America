
<!-- Start Search Section -->
	<div class="row clearfix white">
		<div class="jumbotron text-center" id="great-welcome">
		<form action="search" method="post" class="full-form">
		{{ csrf_field() }}
		<div class="v2box">
			<div class="v2box_title">
				<h2>Search Mobile Home Spaces Across America</h2>
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
			<div class="search_spacer"></div>
		</div>
		<div class="mobox">
			<div class="mobox_title">
				<h2>Search Mobile Home Spaces Across America</h2>
			</div>
			<div class="search_spacer"></div>
				<input type="text" name="" placeholder="Anywhere, USA" class="form-control moboxstop">
				<select name="" class="form-control moboxdrop">
					<option>Homes</option>
					<option>Spaces</option>
					<option>Communities</option>
				</select>
				<button class="btn-primary form-control moboxroll"><i class="fa fa-search"></i> Search MHS America</button>
			<div class="search_spacer"></div>
		</div>
		</form>
		</div>
	</div>
<!-- End Search Section -->
