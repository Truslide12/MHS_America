		<div class="well" id="preform" style="padding: 0px 100px;text-align: center;">

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
			<div class="panel " style="background:none">
				<!-- <div class="panel-heading">Home Details</div> -->
				<div class="panel-body">

	            <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;margin-bottom: 10px;">
	               <h4 style="font-weight: bold;font-size: 1.5em;"> <i class="fa fa-info-circle"></i> General Information</h4>
	            </div>



					<div class="form-group margin-t">
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
								Make
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input type="text" name="make" id="make" class="form-control">
						</div>
					</div>
					<div class="form-group margin-t padding-t">
						<div class="col-sm-2 col-md-2 text-right">
							<label class="control-label">
								Model
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input type="text" name="model" id="model" class="form-control">
						</div>
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('size') ? ' has-error' : '' }}">
							<label class="control-label" for="homeSize">
								Size
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select name="size" id="homeSize" id="homeSize" class="form-control">
								<option value="0"@if(Input::old('size', 0) == 0) selected="selected"@endif>--Select--</option>
								<option value="1"@if(Input::old('size', 0) == 1) selected="selected"@endif>Single-Wide</option>
								<option value="2"@if(Input::old('size', 0) == 2) selected="selected"@endif>Double-Wide</option>
								<option value="3"@if(Input::old('size', 0) == 3) selected="selected"@endif>Triple-Wide</option>
							</select>
						</div>
					</div>
					<div class="form-group margin-t padding-t">
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('beds') ? ' has-error' : '' }}">
							<label class="control-label">
								Bedrooms
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select id="beds" name="beds" class="form-control">
								<option value="0"@if(Input::old('beds', 0) == 0) selected="selected"@endif>--Select--</option>
								<option value="1"@if(Input::old('beds', 0) == 1) selected="selected"@endif>1</option>
								<option value="2"@if(Input::old('beds', 0) == 2) selected="selected"@endif>2</option>
								<option value="3"@if(Input::old('beds', 0) == 3) selected="selected"@endif>3</option>
								<option value="4"@if(Input::old('beds', 0) == 4) selected="selected"@endif>4</option>
								<option value="5"@if(Input::old('beds', 0) == 5) selected="selected"@endif>5 +</option>
							</select>
						</div>
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('baths') ? ' has-error' : '' }}">
							<label class="control-label">
								Bathrooms
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select id="baths" name="baths" class="form-control">
								<option value="0"@if(Input::old('baths', 0) == 0) selected="selected"@endif>--Select--</option>
								<option value="1"@if(Input::old('baths', 0) == 1) selected="selected"@endif>1</option>
								<option value="2"@if(Input::old('baths', 0) == 2) selected="selected"@endif>2</option>
								<option value="3"@if(Input::old('baths', 0) == 3) selected="selected"@endif>3</option>
								<option value="4"@if(Input::old('baths', 0) == 4) selected="selected"@endif>4 +</option>
							</select>
						</div>
					</div>

				<div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;margin-bottom: 10px;">
	               <h4 style="font-weight: bold;font-size: 1.5em;"> <i class="fa fa-tag"></i> Pricing</h4>
	            </div>

					<div class="form-group padding-t">
						<div class="col-sm-2 col-md-2 text-right{{ $errors->has('price') ? ' has-error' : '' }}">
							<label class="control-label">
								Price
							</label>
						</div>
						<div class="col-md-3 col-sm-4{{ $errors->has('price') ? ' has-error' : '' }}">
							<input type="text" id="price" name="price" class="form-control test" value="{{ Input::old('price', '') }}" data-toggle="tooltip" data-placement="right" title="Numbers Only">
						</div>
						<div class="col-xs-2 col-sm-2 col-sm-1 col-md-1 text-right{{ $errors->has('type') ? ' has-error' : '' }}" id="homeTypeLabel">
							<label class="control-label">
								Type
							</label>
						</div>
						<div class="col-sm-5 col-md-4 text-left{{ $errors->has('type') ? ' has-error' : '' }}">
							<label class="checkbox-inline">
								<input type="radio" id="type" name="type" value="0"@if(Input::old('type', 0) == 0) checked="checked"@endif> For Sale
							</label>
							<label class="checkbox-inline">
								<input type="radio" id="type" name="type" value="1"@if(Input::old('type', 0) == 1) checked="checked"@endif> For Rent
							</label>
						</div>
					</div>






	            <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;margin-bottom: 10px;">
	               <h4 style="font-weight: bold;font-size: 1.5em;"> <i class="fa fa-barcode"></i> Identification &amp; Ownership</h4>
	            </div>

					<div class="form-group margin-t padding-t">
						<label class="col-sm-2 col-md-2 control-label text-right">
							<span style="color:red;">*</span> Serial #
						</label>
						<div class="col-sm-9 col-md-7">
							<input type="text" name="serial1" id="serial1" class="form-control">
							<!--<a href="">Add Decal/Label #</a> | <a href="">Add HCD/HUD #</a>-->
						</div>
						<div class="col-sm-1 col-md-1">
							<span onclick="showfield('sn2')" class="fa fa-plus-circle" style="cursor: pointer;color:green;font-size: 25px;"></span>
						</div>
					</div>
					<div class="form-group margin-t padding-t" id="sn2" style="display: none;">
						<label class="col-sm-2 col-md-2 control-label text-right">
							Serial #
						</label>
						<div class="col-sm-9 col-md-7">
							<input type="text" name="serial2" id="serial2" class="form-control">
							<small class="pull-right" onclick="hidefield('sn2')"><a>remove</a></small>
						</div>
						<div class="col-sm-1 col-md-1">
							<span onclick="showfield('sn3')" class="fa fa-plus-circle" style="cursor: pointer;color:green;font-size: 25px;"></span>
						</div>
					</div>
					<div class="form-group margin-t padding-t"  id="sn3" style="display: none;">
						<label class="col-sm-2 col-md-2 control-label text-right">
							Serial #
						</label>
						<div class="col-sm-9 col-md-7">
							<input type="text" name="serial3" id="serial3" class="form-control">
							<small class="pull-right" onclick="hidefield('sn3')"><a>remove</a></small>
						</div>
						<div class="col-sm-1 col-md-1">
						</div>
					</div>
					<div class="form-group margin-t padding-t">
						<label class="col-sm-2 col-md-2 control-label text-right">
							Decal #
						</label>
						<div class="col-sm-9 col-md-7">
							<input type="text" name="decal1" id="decal1" class="form-control">
						</div>
						<div class="col-sm-1 col-md-1">
							<span onclick="showfield('dc2')" class="fa fa-plus-circle" style="cursor: pointer;color:green;font-size: 25px;"></span>
						</div>
					</div>
					<div class="form-group margin-t padding-t"  id="dc2" style="display: none;">
						<label class="col-sm-2 col-md-2 control-label text-right">
							Decal #
						</label>
						<div class="col-sm-9 col-md-7">
							<input type="text" name="decal2" id="decal2" class="form-control">
							<small class="pull-right" onclick="hidefield('dc2')"><a>remove</a></small>
						</div>
						<div class="col-sm-1 col-md-1">
							<span onclick="showfield('dc3')" class="fa fa-plus-circle" style="cursor: pointer;color:green;font-size: 25px;"></span>
						</div>
					</div>
					<div class="form-group margin-t padding-t"  id="dc3" style="display: none;">
						<label class="col-sm-2 col-md-2 control-label text-right">
							Decal #
						</label>
						<div class="col-sm-9 col-md-7">
							<input type="text" name="decal3" id="decal3" class="form-control">
							<small class="pull-right" onclick="hidefield('dc3')"><a>remove</a></small>
						</div>
						<div class="col-sm-1 col-md-1">

						</div>
					</div>
					<div class="form-group margin-t padding-t">
						<label class="col-sm-2 col-md-2 control-label text-right">
							HCD/HUD #
						</label>
						<div class="col-sm-9 col-md-7">
							<input type="text" name="hud1" id="hud1" class="form-control">
						</div>
						<div class="col-sm-1 col-md-1">
							<span onclick="showfield('hd2')" class="fa fa-plus-circle" style="cursor: pointer;color:green;font-size: 25px;"></span>
						</div>
					</div>
					<div class="form-group margin-t padding-t"  id="hd2" style="display: none;">
						<label class="col-sm-2 col-md-2 control-label text-right">
							HCD/HUD #
						</label>
						<div class="col-sm-9 col-md-7">
							<input type="text" name="hud2" id="hud2" class="form-control">
							<small class="pull-right" onclick="hidefield('hd2')"><a>remove</a></small>
						</div>
						<div class="col-sm-1 col-md-1">
							<span onclick="showfield('hd3')" class="fa fa-plus-circle" style="cursor: pointer;color:green;font-size: 25px;"></span>
						</div>
					</div>
					<div class="form-group margin-t padding-t"  id="hd3" style="display: none;">
						<label class="col-sm-2 col-md-2 control-label text-right">
							HCD/HUD #
						</label>
						<div class="col-sm-9 col-md-7">
							<input type="text" name="hud3" id="hud3" class="form-control">
							<small class="pull-right" onclick="hidefield('hd3')"><a>remove</a></small>
						</div>
						<div class="col-sm-1 col-md-1">

						</div>
					</div>



				</div>
			</div>
			<div class="form-group margin-y">
				<div class="col-md-12">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" id="current_step" value="home-info">
					<!-- <button type="submit" class="btn btn-lg btn-primary cta pull-left"> <i class="fa fa-angle-left"></i> Back</button> -->
					<button type="button" id="opts-step" class="btn btn-lg btn-primary cta pull-right" onclick="Editor.MoveNext();">Next <i class="fa fa-angle-right"></i></button>
				</div>
			</div>
		</form>	
		</div>

		<script type="text/javascript">
			function init(){
			    
			    

				if ( Editor.settings.wizard == false ) {
					$("#preform").hide();
					$("#frmcontainer").show();
					console.log("load old infoxx")

					if ( Editor.home.serial[1] !== null && Editor.home.serial[1] !== "" ) { showfield("sn2"); }
					if ( Editor.home.serial[2] !== null && Editor.home.serial[2] !== "" ) { showfield("sn3"); }

					if ( Editor.home.decal[1] !== null && Editor.home.decal[1] !== "" ) { showfield("dc2"); }
					if ( Editor.home.decal[2] !== null && Editor.home.decal[2] !== "" ) { showfield("dc3"); }

					if ( Editor.home.hud[1] !== null && Editor.home.hud[1] !== "" ) { showfield("hd2"); }
					if ( Editor.home.hud[2] !== null && Editor.home.hud[2] !== "" ) { showfield("hd3"); }

					//$("#snazzy_title").val(Editor.home.title);
					$("#price").val(Editor.home.price);
					$("#beds").val(Editor.home.bedrooms).prop('selected', 'selected').change();
					$("#baths").val(Editor.home.bathrooms).prop('selected', 'selected').change();
					$("#homeSize").val(Editor.home.size);
					$("#length").val(Editor.home.dimensions.length);
					$("#width").val(Editor.home.dimensions.width);
					//$("#description").val(Editor.home.description);

					$("#make").val(		Editor.home.make);
					$("#model").val(	Editor.home.model);
					$("#year").val(		Editor.home.year);
					$("#decal1").val(	Editor.home.decal[0]);
					$("#decal2").val(	Editor.home.decal[1]);
					$("#decal3").val(	Editor.home.decal[2]);
					$("#serial1").val(	Editor.home.serial[0]);
					$("#serial2").val(	Editor.home.serial[1]);
					$("#serial3").val(	Editor.home.serial[2]);
					$("#hud1").val(		Editor.home.hud[0]);
					$("#hud2").val(		Editor.home.hud[1]);
					$("#hud3").val(		Editor.home.hud[2]);



					Editor.settings.preValidation = true;
					Editor.ValidateHomeInfo();
					Editor.settings.preValidation = false;
				} else {
					showfrm();
				}

				$("#app-container").css("min-height", $("#app-container").height() );
			}

			function showfrm(){
				$("#preform").fadeOut(500, function(){
					$("#preform").html("<h2>First tell us the basics.</h2>").fadeIn();
					setTimeout(inputform, 1200);
				});
				

			}

			function goedit(){
				Editor.settings.wizard = false;
			  $( "#list-process > li:not(.menu-head)" ).each(function( index ) {
			    $( this ).removeClass("disabled");
			  });
			  showfrm();
			}

			function inputform(){
				$("#preform").fadeOut(500, function(){
					$("#frmcontainer").fadeIn(500);
					console.log("load old info")
					//$("#snazzy_title").val(Editor.home.title);
					$("#price").val(Editor.home.price);
					$("#beds").val(Editor.home.bedrooms).prop('selected', 'selected').change();
					$("#baths").val(Editor.home.bathrooms).prop('selected', 'selected').change();
					$("#homeSize").val(Editor.home.size);
					$("#length").val(Editor.home.dimensions.length);
					$("#width").val(Editor.home.dimensions.width);
					//$("#description").val(Editor.home.description);

					if ( Editor.home.serial[0] !== null ) {
						showfield("serial2")
					}
					showfield("serial2")
					$("#make").val(		Editor.home.make);
					$("#model").val(	Editor.home.model);
					$("#year").val(		Editor.home.year);
					$("#decal1").val(	Editor.home.decal[0]);
					$("#decal2").val(	Editor.home.decal[1]);
					$("#decal3").val(	Editor.home.decal[2]);
					$("#serial1").val(	Editor.home.serial[0]);
					$("#serial2").val(	Editor.home.serial[1]);
					$("#serial3").val(	Editor.home.serial[2]);
					$("#hud1").val(		Editor.home.hud[0]);
					$("#hud2").val(		Editor.home.hud[1]);
					$("#hud3").val(		Editor.home.hud[2]);

					Editor.settings.preValidation = true;
					Editor.ValidateHomeInfo();
					Editor.settings.preValidation = false;	
				});
			}

			/*
			function init(){
				if ( Editor.settings.wizard == false ) {
					$("#preform").hide();
					$("#frmcontainer").show();
					console.log("load old info")
					$("#make").val(		Editor.home.make);
					$("#model").val(	Editor.home.model);
					$("#year").val(		Editor.home.year);
					$("#decal1").val(	Editor.home.decal[0]);
					$("#decal2").val(	Editor.home.decal[1]);
					$("#decal3").val(	Editor.home.decal[2]);
					$("#serial1").val(	Editor.home.serial[0]);
					$("#serial2").val(	Editor.home.serial[1]);
					$("#serial3").val(	Editor.home.serial[2]);
					$("#hud1").val(		Editor.home.hud[0]);
					$("#hud2").val(		Editor.home.hud[1]);
					$("#hud3").val(		Editor.home.hud[2]);

					Editor.settings.preValidation = true;
					Editor.ValidateHomeDetails();
					Editor.settings.preValidation = false;
				}

			}

			function showfrm(){
				$("#preform").fadeOut(500, function(){
					$("#preform").html("<h2>Great! Tell us about what you're selling..</h2>").fadeIn();
					setTimeout(inputform, 1500);
				});
				

			}

			function goedit(){
				Editor.settings.wizard = false;
			  $( "#list-process > li:not(.menu-head)" ).each(function( index ) {
			    $( this ).removeClass("disabled");
			  });
			  showfrm();
			}

			function inputform() {

				$("#preform").fadeOut(500, function(){
					$("#frmcontainer").fadeIn(500);
					console.log("load old info")
					$("#make").val(		Editor.home.make);
					$("#model").val(	Editor.home.model);
					$("#year").val(		Editor.home.year);
					$("#decal1").val(	Editor.home.decal[0]);
					$("#decal2").val(	Editor.home.decal[1]);
					$("#decal3").val(	Editor.home.decal[2]);
					$("#serial1").val(	Editor.home.serial[0]);
					$("#serial2").val(	Editor.home.serial[1]);
					$("#serial3").val(	Editor.home.serial[2]);
					$("#hud1").val(		Editor.home.hud[0]);
					$("#hud2").val(		Editor.home.hud[1]);
					$("#hud3").val(		Editor.home.hud[2]);

					Editor.settings.preValidation = true;
					Editor.ValidateHomeDetails();
					Editor.settings.preValidation = false;	
				});

			}
			*/
			function showfield(id){
				$("#"+id).show();
			}
			function hidefield(id){
				$("#"+id).hide();
			}
			
		</script>