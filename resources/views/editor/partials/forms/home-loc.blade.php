		<div class="well" id="preform" style="padding: 0px 100px;text-align: center;display: none;">
			<h2>Location, Location, Location! Tell us a little more about where this home is.</h2>
				<div class="margin-t" style="border:0px solid red;text-align: center;">
					<button type="submit" class="btn btn-lg btn-primary cta pull-center" onclick="showfrm();">Enter Location</button>
					<button type="button" id="opts-step" class="btn btn-lg btn-primary cta pull-center" onclick="Editor.MoveNext();">Skip this Step</button>
				</div>
		</div>

		<div class="well" id="frmcontainer" style="display: none;">
		@if(Session::has('success'))
		<div class="alert alert-success"><span class="fa fa-check-circle"></span> {{ Session::get('success') }}</div>
		@elseif($errors->any())
		@foreach($errors->all() as $error)
		<div class="alert alert-danger"><span class="fa fa-warning"></span> {{ $error }}</div>
		@endforeach
		@endif
		<form id="homeForm" class="form-horizontal" action="{{ URL::route('editor-addhome-post', ['profile' => $profile->id]) }}" method="POST">
			<div class="col-md-offset-1 col-md-10 hidden">
				<hr>
			</div>
			<div class="panel " style="background:none">
				<!-- <div class="panel-heading">Current Location</div> -->
				<div class="panel-body">

	            <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;">
	               <h4 style="font-weight: bold;font-size: 1.5em;"> <i class="fa fa-map-marker"></i> Current Location</h4>
	            </div>


			      			<div class="col-xs-12 col-sm-11" style="padding: 15px;">
								<div class="form-group">
									<label class="control-label col-md-3">Street address</label>
									<div class="col-md-9">
										<input type="text" name="address" id="address" class="form-control" value="" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">City</label>
									<div class="col-md-9">
										<input type="text" name="city" id="city" class="form-control" value="" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">State</label>
									<div class="col-md-3">
										<input type="text" name="state" id="state" class="form-control" value="" readonly>
									</div>
									<label class="control-label col-md-3">Zip code</label>
									<div class="col-md-3">
										<input type="text" name="zipcode" id="zipcode" class="form-control" value="" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Space #:</label>
									<div class="col-md-3">
										<input type="text" name="space" id="space" class="form-control" value="">
									</div>
								</div>
							</div>
	            <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;margin-bottom: 10px;">
	               <h4 style="margin-bottom: -.1em;margin-top: 1.5em;font-weight: bold;font-size: 1.5em;"> <i class="fa fa-question"></i> Questions</h4>
	            </div>

								<div class="form-group">
									<label class="control-label col-md-3"></label>
									<div class="col-md-5">
										Must this home be moved?
									</div>
									<div class="col-md-2">
								        <div class="form-check">
								          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
								          <label class="form-check-label" for="gridRadios1">
								            Yes
								          </label>
								        </div>
									</div>
									<div class="col-md-2">
								        <div class="form-check">
								          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
								          <label class="form-check-label" for="gridRadios1">
								            No
								          </label>
								        </div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3"></label>
									<div class="col-md-5">
										Can this home be moved?
									</div>
									<div class="col-md-2">
								        <div class="form-check">
								          <input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios2" value="option1" checked>
								          <label class="form-check-label" for="gridRadios2">
								            Yes
								          </label>
								        </div>
									</div>
									<div class="col-md-2">
								        <div class="form-check">
								          <input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios2" value="option2" checked>
								          <label class="form-check-label" for="gridRadios2">
								            No
								          </label>
								        </div>
									</div>
								</div>


							

				</div>
			</div>
			<div class="form-group margin-y">
				<div class="col-md-12">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" id="current_step" value="home-loc">
					<button type="submit" class="btn btn-lg btn-primary cta pull-left" onclick="Editor.MoveBack();"> <i class="fa fa-angle-left"></i> Back</button>
					<button type="button" id="opts-step" class="btn btn-lg btn-primary cta pull-right" onclick="Editor.MoveNext();">Next <i class="fa fa-angle-right"></i></button>
				</div>
			</div>
		</form>	
		</div>

		<script type="text/javascript">
			function showfrm(){
				$("#preform").fadeOut(500, function(){
					$("#frmcontainer").fadeIn(500);
					console.log("load old info")
					$("#address").val(	Editor.home.address);
					$("#city").val(		Editor.home.city);
					$("#state").val(	Editor.home.state);
					$("#zipcode").val(		Editor.home.zipcode);
					$("#space").val(	Editor.home.space);

					
					Editor.settings.preValidation = true;
					Editor.ValidateLocation();
					Editor.settings.preValidation = false;	
				});
			}
			function init(){
				console.log(Editor.settings.wizard)
				if ( Editor.settings.wizard == false ) {
					//$("#preform").hide();
					$("#frmcontainer").show();
					$("#address").val(	Editor.home.address);
					$("#city").val(		Editor.home.city);
					$("#state").val(	Editor.home.state);
					$("#zipcode").val(		Editor.home.zipcode);
					$("#space").val(	Editor.home.space);
					
					Editor.settings.preValidation = true;
					Editor.ValidateLocation();
					Editor.settings.preValidation = false;	
				} else {
					$("#preform").fadeIn(1200);
				}

			}
		</script>