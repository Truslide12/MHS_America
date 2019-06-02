		<form id="homeForm" class="form-horizontal" action="" method="POST">

					<div class="form-group margin-t">
						<div class="col-sm-2 col-md-2 text-right">
							<label class="control-label">
								Make
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input type="text" name="make" id="make" class="form-control">
						</div>
						<div class="col-sm-2 col-md-2 text-right">
							<label class="control-label">
								Model
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input type="text" name="model" id="model" class="form-control">
						</div>
					</div>
					<div class="form-group margin-t padding-t">
						<div class="col-sm-2 col-md-2 text-right">
							<label class="control-label" for="homeSize">
								Year
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input type="text" name="year" id="year" class="form-control">
						</div>
						<div class="col-sm-2 col-md-2 text-right">
							<label class="control-label">
								Dimensions
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input  onchange="update_sqft();" type="text" id="width" name="width" class="form-control" style="width:35%;display:inline-block">
							<p class="form-control-static text-center" style="width:24%;display:inline-block">X</p>
							<input  onchange="update_sqft();" type="text" id="length" name="length" class="form-control" style="width:35%;display:inline-block">
							<div class="">(Approx. <span id='sqft'>0</span> sqft)</div>
						</div>
					</div>


			<div class="form-group margin-y">
				<div class="col-md-12">
					<input type="hidden" name="_token" value="">
					<button type="submit" class="btn btn-lg btn-primary cta pull-left">Save &amp; Exit</button>
					<button type="button" onclick="nextstep();" id="opts-step" class="btn btn-lg btn-success cta pull-right">Move Next</button>
				</div>
			</div>
		</form>	