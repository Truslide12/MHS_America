		<div class="well" id="preform" style="padding: 0px 100px;text-align: center;display: none">
			<h2>Here you can enter some of the technical specifications to your home, such as the type of floor and windows. This form is optional, but helps viewers know what you have to offer.</h2>
				<div class="margin-t" style="border:0px solid red;text-align: center;">
					<button type="submit" class="btn btn-lg btn-primary cta pull-center" onclick="showfrm();">Enter Specs</button>
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
				<!-- <div class="panel-heading">Add Value to your Home</div> -->
				<div class="panel-body">

				<div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;margin-bottom: 15px;">
	               <h4 style="font-weight: bold;font-size: 1.5em;"> <i class="fa fa-home"></i> Size Information</h4>
	            </div>
					<div class="form-group margin-t padding-t"  id="sectional_1">
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('beds') ? ' has-error' : '' }}">
							<label class="control-label">
								Offsets: [<a id="help_offsets">?</a>]
							</label>
						</div>
						<div class="col-sm-10 col-md-8">
							<select id="num_of_offsets" name="num_of_offsets" class="form-control" onchange="setOffset(this.value);">
								<option value="0">Home Has No Offset</option>
								<option value="1">Home Has 1 Offset</option>
								<option value="2">Home Has 2 Offset</option>
								<option value="-1">Use Approx. Square Footage</option>
							</select>
						</div>

					</div>
					<div class="form-group margin-t padding-t"  id="sectional_1">
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('beds') ? ' has-error' : '' }}">
							<label class="control-label">
								Dimensions
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input onkeyup="update_sqft();" type="text" id="width1" name="width1" class="form-control" style="width:35%;display:inline-block" placeholder="ft.">
							<p class="form-control-static text-center" style="width:24%;display:inline-block">X</p>
							<input onkeyup="update_sqft();" type="text" id="length1" name="length1" class="form-control" style="width:35%;display:inline-block" placeholder="ft.">
						</div>
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('beds') ? ' has-error' : '' }}">
							<label class="control-label">
								Approx. sqft
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input onkeyup="update_sqft();" type="text" id="sqft1" name="sqft1" class="form-control" placeholder="ft.">
						</div>
					</div>
					<div class="form-group margin-t padding-t" id="sectional_2" style="display: none;">
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('beds') ? ' has-error' : '' }}">
							<label class="control-label">
								Dimensions
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input onkeyup="update_sqft();" type="text" id="width2" name="width2" class="form-control" style="width:35%;display:inline-block" placeholder="ft.">
							<p class="form-control-static text-center" style="width:24%;display:inline-block">X</p>
							<input onkeyup="update_sqft();" type="text" id="length2" name="length2" class="form-control" style="width:35%;display:inline-block" placeholder="ft.">
						</div>
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('beds') ? ' has-error' : '' }}">
							<label class="control-label">
								Approx. sqft
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input onkeyup="update_sqft();" type="text" id="sqft2" name="sqft2" class="form-control" placeholder="ft.">
						</div>
					</div>
					<div class="form-group margin-t padding-t" id="sectional_3" style="display: none;">
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('beds') ? ' has-error' : '' }}">
							<label class="control-label">
								Dimensions
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input onkeyup="update_sqft();" type="text" id="width3" name="width3" class="form-control" style="width:35%;display:inline-block" placeholder="ft.">
							<p class="form-control-static text-center" style="width:24%;display:inline-block">X</p>
							<input onkeyup="update_sqft();" type="text" id="length3" name="length3" class="form-control" style="width:35%;display:inline-block" placeholder="ft.">
						</div>
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('beds') ? ' has-error' : '' }}">
							<label class="control-label">
								Approx. sqft
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input onkeyup="update_sqft();" type="text" id="sqft3" name="sqft3" class="form-control" placeholder="ft.">
						</div>
					</div>
					<div class="form-group margin-t padding-t" id="sectional_t" style="display: none;">
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('beds') ? ' has-error' : '' }}">

						</div>
						<div class="col-sm-4 col-md-3">

						</div>
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('beds') ? ' has-error' : '' }}">
							<label class="control-label">
								Total Approx. sqft
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input type="text" id="total_sqft" name="total_sqft" class="form-control" placeholder="ft." disabled>
						</div>
					</div>
	            <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;margin-bottom: 15px;">
	               <h4 style="font-weight: bold;font-size: 1.5em;"> <i class="fa fa-wrench"></i> Build Information</h4>
	            </div>

					<div class="form-group margin-t padding-t">
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('siding') ? ' has-error' : '' }}">
							<label class="control-label">
								Siding
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select id="siding" name="siding" class="form-control">
								<option value="0">--Unknown--</option>
								<option value="1">Metal</option>
								<option value="2">Hardiboard</option>
								<option value="3">Wood</option>
								<option value="4">Block</option>
								<option value="5">Composite</option>

							</select>
						</div>
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('skirting') ? ' has-error' : '' }}">
							<label class="control-label">
								Skirting
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select id="skirting" name="skirting" class="form-control">
								<option value="0">--Unknown--</option>
								<option value="1">Metal</option>
								<option value="3">Wood</option>
								<option value="2">Hardiboard</option>
								<option value="11">Vinyl</option>
								
							</select>
						</div>
					</div>


					<div class="form-group margin-t padding-t">
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('roof_mat') ? ' has-error' : '' }}">
							<label class="control-label">
								Roof Material
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select id="roof_mat" name="roof_mat" class="form-control">
								<option value="0">--Unknown--</option>
								<option value="1">Metal</option>
								<option value="5">Composite</option>
								<option value="6">Wood Shake</option>
								<option value="7">Tar</option>
							</select>
						</div>
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('roof_angle') ? ' has-error' : '' }}">
							<label class="control-label">
								Roof Angle
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select id="roof_angle" name="roof_angle" class="form-control">
								<option value="0">--Unknown--</option>
								<option value="1">3x12</option>
								<option value="2">4x12</option>
								<option value="3">10x12</option>
								<option value="4">Flat</option>
							</select>
						</div>
					</div>


					<div class="form-group margin-t padding-t">
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('windows') ? ' has-error' : '' }}">
							<label class="control-label">
								Windows
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select id="windows" name="windows" class="form-control">
								<option value="0">--Unknown--</option>
								<option value="1">Single Pane</option>
								<option value="2">Dual Pane</option>
								<option value="3">Fire Proof</option>
							</select>
						</div>
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('wall_thickness') ? ' has-error' : '' }}">
							<label class="control-label">
								Exterior Wall Thickness
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select id="wall_thickness" name="wall_thickness" class="form-control">
								<option value="0">--Unknown--</option>
								<option value="1">4"</option>
								<option value="2">6"</option>
							</select>
						</div>
					</div>


					<div class="form-group margin-t padding-t">
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('kitchen_floor') ? ' has-error' : '' }}">
							<label class="control-label">
								Kitchen Floor
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select id="kitchen_floor" name="kitchen_floor" class="form-control">
								<option value="0">--Unknown--</option>
								<option value="8">Carpet</option>
								<option value="9">Hardwood</option>
								<option value="10">Tile</option>
								<option value="11">Vinyl</option>
							</select>
						</div>
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('floor') ? ' has-error' : '' }}">
							<label class="control-label">
								Other Floors
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select id="floor" name="floor" class="form-control">
								<option value="0">--Unknown--</option>
								<option value="8">Carpet</option>
								<option value="9">Hardwood</option>
								<option value="10">Tile</option>
								<option value="11">Vinyl</option>
							</select>
						</div>
					</div>

					<div class="form-group margin-t padding-t">
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('setup') ? ' has-error' : '' }}">
							<label class="control-label">
								Set up
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select id="setup" name="setup" class="form-control">
								<option value="0">--Unknown--</option>
								<option value="1">High Set</option>
								<option value="2">Low Set</option>
								<option value="3">Ground Set</option>
							</select>
						</div>
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('strap') ? ' has-error' : '' }}">
							<label class="control-label">
								Earthquake Strap
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select id="strap" name="strap" class="form-control">
								<option value="0">--Unknown--</option>
								<option value="1">Yes</option>
								<option value="2">No</option>
							</select>
						</div>
					</div>


				</div>
			</div>
			<div class="form-group margin-y">
				<div class="col-md-12">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" id="current_step" value="home-specs">
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
					$("#siding").val(			Editor.home.specs.siding);
					$("#skirting").val(			Editor.home.specs.skirting);
					$("#roof_angle").val(		Editor.home.specs.roof_angle);
					$("#roof_mat").val(			Editor.home.specs.roof_mat);
					$("#windows").val(			Editor.home.specs.windows);
					$("#wall_thickness").val(	Editor.home.specs.wall_thickness);
					$("#kitchen_floor").val(	Editor.home.specs.kitchen_floor);
					$("#floor").val(			Editor.home.specs.floor);
					$("#setup").val(			Editor.home.specs.setup);
					$("#strap").val(			Editor.home.specs.strap);

					$("#num_of_offsets").val(Editor.home.dimensions.offsets);
					setOffset(Editor.home.dimensions.offsets);
					if ( Editor.home.dimensions.offsets >= 1 ) { stupid_bullshit(Editor.home.dimensions.offsets); } else {
						$("#length1").val(			Editor.home.dimensions.length);
						$("#width1").val(			Editor.home.dimensions.width);
						$("#sqft1").val(			Editor.home.dimensions.square_footage);
					}

					Editor.settings.preValidation = true;
					Editor.ValidateHomeSpecs();
					Editor.settings.preValidation = false;	
				});
			}
			function init(){
				if ( Editor.settings.wizard == false ) {
					$("#preform").hide();
					$("#frmcontainer").show();
					$("#siding").val(			Editor.home.specs.siding);
					$("#skirting").val(			Editor.home.specs.skirting);
					$("#roof_angle").val(		Editor.home.specs.roof_angle);
					$("#roof_mat").val(			Editor.home.specs.roof_mat);
					$("#windows").val(			Editor.home.specs.windows);
					$("#wall_thickness").val(	Editor.home.specs.wall_thickness);
					$("#kitchen_floor").val(	Editor.home.specs.kitchen_floor);
					$("#floor").val(			Editor.home.specs.floor);
					$("#setup").val(			Editor.home.specs.setup);
					$("#strap").val(			Editor.home.specs.strap);


					$("#num_of_offsets").val(Editor.home.dimensions.offsets);
					setOffset(Editor.home.dimensions.offsets);
					if ( Editor.home.dimensions.offsets >= 1 ) { stupid_bullshit(Editor.home.dimensions.offsets); } else {
						$("#length1").val(			Editor.home.dimensions.length);
						$("#width1").val(			Editor.home.dimensions.width);
						$("#sqft1").val(			Editor.home.dimensions.square_footage);
					}


					Editor.settings.preValidation = true;
					Editor.ValidateHomeSpecs();
					Editor.settings.preValidation = false;	
				} else {
					$("#preform").fadeIn(1200);
				}
			}

			function setOffset(n) {
				n = parseInt(n);
				$("#width1").prop('disabled', false);
				$("#length1").prop('disabled', false);

				switch (n) {
					case -1:
						fuck_your_offset_dims();
						$("#sectional_1").show();
						$("#sectional_2").hide();
						$("#sectional_3").hide();
						$("#sectional_t").hide();
						$("#width1").prop('disabled', true);
						$("#length1").prop('disabled', true);
					break;
					case 0:
						$("#sectional_1").show();
						$("#sectional_2").hide();
						$("#sectional_3").hide();
						$("#sectional_t").hide();
					break;
					case 1:
						$("#sectional_1").show();
						$("#sectional_2").show();
						$("#sectional_3").hide();
						$("#sectional_t").show();
					break;
					case 2:
						$("#sectional_1").show();
						$("#sectional_2").show();
						$("#sectional_3").show();
						$("#sectional_t").show();
					break;
					default:
						$("#sectional_1").show();
						$("#sectional_2").hide();
						$("#sectional_3").hide();
						$("#sectional_t").hide();
					break;
				}
			}

			function update_sqft(){
				n = parseInt( $("#num_of_offsets").val() );
				w1 = parseInt($("#width1").val());
				h1 = parseInt($("#length1").val());


				switch (n) {
					case 0:
						if ( !isNaN(w1) && !isNaN(h1) ) { 
							$("#sqft1").val(w1*h1);
							$("#total_sqft").val( w1*h1 ); 
						} else {
							//doit
						}
					break;
					case 1:
						w2 = parseInt($("#width2").val());
						h2 = parseInt($("#length2").val());

						$("#sqft1").val(w1*h1);
						$("#sqft2").val(w2*h2);

						if ( !isNaN(w1) && !isNaN(h1) ) { 
							$("#sqft1").val(w1*h1); 
						}
						if ( !isNaN(w2) && !isNaN(h2) ) { 
							$("#sqft2").val(w2*h2); 
						}
						if ( !isNaN(w2) && !isNaN(h2) && !isNaN(w1) && !isNaN(h1)) { 
							$("#total_sqft").val( (w1*h1) + (w2*h2) );
						} else {
							//doit
						}
						
					break;
					case 2:
						w2 = parseInt($("#width2").val());
						h2 = parseInt($("#length2").val());
						w3 = parseInt($("#width3").val());
						h3 = parseInt($("#length3").val());

						if ( !isNaN(w1) && !isNaN(h1) ) { 
							$("#sqft1").val(w1*h1); 
						}
						if ( !isNaN(w2) && !isNaN(h2) ) { 
							$("#sqft2").val(w2*h2); 
						}
						if ( !isNaN(w3) && !isNaN(h3) ) { 
							$("#sqft3").val(w3*h3); 
						}
						if ( !isNaN(w2) && !isNaN(h2) && !isNaN(w1) && !isNaN(h1) && !isNaN(w3) && !isNaN(h3) ) { 
							$("#total_sqft").val( (w1*h1) + (w2*h2) + (w3*h3) );
						} else {
							//doit
							s = Array(4);
							s[1] = parseInt($("#sqft1").val());
							s[2] = parseInt($("#sqft2").val());
							s[3] = parseInt($("#sqft3").val());
							sum = 0;
							for(i=1;i<=3;i++){
								if (!isNaN(s[i])) { sum += s[i]; }
							}
							$("#total_sqft").val( sum ); 
						}

					break;
					default:
						if ( !isNaN(w1) && !isNaN(h1) ) { 
							$("#sqft1").val(w1*h1);
							$("#total_sqft").val( w1*h1 ); 
						} else {
							//doit
						}
					break;
				}

			}

			function stupid_bullshit(n){
				var json = Editor.home.dimensions.json;
				var tsqft =0;
				for ( i=1; i<=n+1; i++ ) {
					$("#length"+i).val(	json[i].length);
					$("#width"+i).val(	json[i].width);
					$("#sqft"+i).val(	json[i].square_footage)
					tsqft += parseInt(json[i].square_footage);
				}
				$("#total_sqft").val(tsqft);
			}

			$("#help_offsets").click(function(e) {
				console.log("ok");
				  $('#myModal').modal('show');
				  $('.modal-title').html("Home Offsets");
				  $('.modal-body').html("Offsets are a common feature amoung more modern mobile homes. An offset is when one or more sections of your home are different sizes. If this sounds like your home, you can select the appropriate offset option to help produce a more accurate square footage.<br><br>If you are unsure of the dimensions of your home, you can select approximate square footage.");
				  $('#modal-deny').hide();
				  $('#modal-confirm').hide();
			});

			function fuck_your_offset_dims() {
			  $("#width1, #length1").css({
			    "background": "initial",
			    "outline": "initial",
			    "border-color": "initial",
			    "box-shadow": "initial",
			  }).val("");
			}
		</script>