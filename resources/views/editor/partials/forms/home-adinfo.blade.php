		<div class="well" id="preform" style="padding: 0px 100px;text-align: center;display: none">
			<h2>Here is your last chance to tell us a bit more about the home.</h2>
				<div class="margin-t" style="border:0px solid red;text-align: center;">
					<button type="submit" class="btn btn-lg btn-primary cta pull-center" onclick="showfrm();">Enter Description</button>
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


		<form class="form-horizontal" action="../" method="POST" enctype="multipart/form-data">

			<div class="panel " style="background:none">
				<!-- <div class="panel-heading">Headline: <small>(optional)</small></div> -->
				<div class="panel-body">

  <div class="form-group">
      <div class="col-xs-12 col-sm-12" style="padding: 0em 2em;">
         <div class="row">
            <div class="col-md-12 col-sm-12">

               <div style="padding: 15px;">

								  <div class="row" style="margin-bottom: 10px;">
				                     <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;">
				                        <h4 style="margin-bottom: -.1em;margin-top: 0em;font-weight: bold;font-size: 1.5em;"><i class="fa fa-pencil"></i> Ad Information</h4>
				                     </div>
				                  </div>



				                  <div class="row">
									<label class="col-sm-2 col-md-2 control-label">
										Headline
									</label>
									<div class="col-sm-10 col-md-10">
										<input type="text" id="snazzy_title" name="snazzy_title" class="form-control" placeholder="Enter something catchy..." value="{{ Input::old('title', '') }}">
										<span class="help-text text-muted"><small>...or leave this blank for a generic headline like "2 bed 1 bath Double-wide"</small></span>
									</div>
								</div>
								<div class="row" style="margin-top: 17px;margin-bottom: 25px;">
									<label class="col-sm-2 col-md-2 control-label">
										Description
									</label>
									<div class="col-sm-10 col-md-10">
										<textarea onkeypress="checkDescription();" type="text" rows=8 id="description" name="description" class="form-control" placeholder="Tell us about this home.." value="{{ Input::old('title', '') }}"></textarea>
										<div class="help-text text-muted" >
											<div class="col-md-6 nopad">
												<small>Describe this home..</small>
											</div>
											<div class="col-md-6 nopad text-right">
												<div style="background: silver;border-radius: 8px!important;display: inline-flex;padding: 0px 20px;text-align: center;margin-top: 2px;"><span id="desc_count">0</span> &nbsp; Characters</div>
											</div>
										</div>

									</div>
								</div>


								  <div class="row" style="margin-bottom: 10px;margin-top:10px;">
				                     <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;">
				                        <h4 style="margin-bottom: -.1em;margin-top: 0em;font-weight: bold;font-size: 1.5em;"><i class="fa fa-user"></i> Seller Information</h4>
				                     </div>
				                  </div>


										<div class="row" style="margin-bottom: 2px;">
											<label class="col-md-2 control-label">
												Company
											</label>
											<div class="col-md-10"><input type="text" class="form-control" id="seller_company"></div>
										</div>

										<div class="row" style="margin-bottom: 2px;">
											<label class="col-md-2 control-label">
												Seller Name
											</label>
											<div class="col-md-10"><input type="text" class="form-control" id="seller_name"></div>
										</div>

										<div class="row" style="margin-bottom: 2px;">
											<label class="col-md-2 control-label">
												Seller Phone(s)
											</label>
											<div class="col-md-10"><input type="text" class="form-control" id="seller_phone"></div>
										</div>

										<div class="row" style="margin-bottom: 2px;">
											<label class="col-md-2 control-label">
												&nbsp;
											</label>
											<div class="col-md-10"><input type="text" class="form-control" id="seller_phone2"></div>
										</div>

										<div class="row" style="margin-bottom: 2px;">
											<label class="col-md-2 control-label">
												&nbsp;
											</label>
											<div class="col-md-10"><input type="text" class="form-control" id="seller_phone3"></div>
										</div>


										<div class="row" style="margin-bottom: 2px;">
											<label class="col-md-2 control-label">
												Seller Address
											</label>
											<div class="col-md-10"><input type="text" class="form-control" id="seller_addr"></div>
										</div>

										<div class="row" style="margin-bottom: 2px;">
											<label class="col-md-2 control-label">
												Seller Email
											</label>
											<div class="col-md-10"><input type="text" class="form-control" id="seller_email"></div>
										</div>

										<div class="row" style="margin-bottom: 2px;">
											<label class="col-md-2 control-label">
												Seller License
											</label>
											<div class="col-md-10"><input type="text" class="form-control" id="seller_license"></div>
										</div>

										<!-- expirement -->
										<div class="row" style="margin-bottom: 2px;">
											<label class="col-md-2 control-label">
												Promotion [<a id="help_offsets">?</a>]
											</label>
											<div class="col-md-10">
												<select class="form-control" id="promo_type" onchange="show_promo(this.value, false)">
													<option value="0">--None--</option>
													<option value="1">Open House Promotion</option>
													<option value="2">Price Drop Promotion</option>
													<option value="3">Recently Updated Promotion</option>
												</select>
											</div>
										</div>
										<div class="row" style="margin-top: 7px;margin-bottom: 2px;display: none;" id="reduction_box">
											<label class="col-md-2 control-label">
												
											</label>
											<label class="col-md-4 control-label">
												Price Drop Amount
											</label>
											<div class="col-md-6">

												<input type="text" class="form-control" id="pdi">
												<small><strong>Accepted Formats:</strong><br> Dollar amount ($10000) or percentage (10%).</small>
											</div>
										</div>
										<div class="row" style="margin-top: 7px;margin-bottom: 2px;display: none;" id="openhouse_box">
											<label class="col-md-2 control-label">
												
											</label>
											<label class="col-md-4 control-label">
												Open House Time
											</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="" style="width: 30%;display: inline-block;" placeholder="MM/DD" id="ohd">
												<input type="text" class="form-control" name="" style="width: 30%;display: inline-block;" placeholder="Start Time" id="ohs">
												<input type="text" class="form-control" name="" style="width: 30%;display: inline-block;" placeholder="End Time" id="ohe">
												<small><strong>Accepted Formats:</strong><br> Calendar Date (MM/DD) and 12 Hour Time (eg 10:45AM, 3:00PM)</small>
											</div>
										</div>
										<!-- /expirement -->


				</div>


         </div>
      </div>
   </div>



				</div>
			</div>


			<div class="form-group margin-y">
				<div class="col-md-12">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" id="current_step" value="home-adinfo">
					<button type="button" class="btn btn-lg btn-primary cta pull-left" onclick="Editor.MoveBack();"> <i class="fa fa-angle-left"></i> Back</button>
					<button type="button" id="opts-step" class="btn btn-lg btn-primary cta pull-right" onclick="Editor.MoveNext();">Next <i class="fa fa-angle-right"></i></button>
				</div>
			</div>
		</form>	
</div>

<style type="text/css">

</style>
		<script type="text/javascript">
			function showfrm(){
				$("#preform").fadeOut(500, function(){
					$("#frmcontainer").fadeIn(500);
					console.log("load old info")
					$("#snazzy_title").val(Editor.home.headline);
					$("#description").val(Editor.home.description);
					checkDescription();

					co = Editor.company;
					si = Editor.home.seller_info;

					/*Need to first get from home, fallback to comp info*/
					if ( co.is_personal == false ) {
						if ( si.company !== null ) { $("#seller_company").val(si.company); } else { $("#seller_company").val(co.title); }
						if ( si.name !== null ) { $("#seller_name").val(si.name); } else { $("#seller_name").val(""); }
					} else {
						if ( si.name !== null ) { $("#seller_name").val(si.name); } else { $("#seller_name").val(co.title); }
						if ( si.company !== null ) { $("#seller_company").val(si.company); } else { $("#seller_company").val(""); }

					}

					if ( si.phone !== null ) { $("#seller_phone").val(si.phone); } else { $("#seller_phone").val(co.phone); }
					if ( si.phone2 !== null ) { $("#seller_phone2").val(si.phone2); } else { $("#seller_phone2").val(co.phone2); }
					if ( si.phone3 !== null ) { $("#seller_phone3").val(si.phone3); } else { $("#seller_phone3").val(co.phone3); }

					if ( si.addr !== null ) { $("#seller_addr").val(si.addr); } else { $("#seller_addr").val(co.street_addr); }
					if ( si.email !== null ) { $("#seller_email").val(si.email); } else { $("#seller_addr").val(""); }
					if ( si.license !== null ) { $("#seller_license").val(si.license); } else { $("#seller_addr").val(""); }

					if ( parseInt(si.promo.type) > 0 ) { $("#promo_type").val(parseInt(si.promo.type));show_promo(si.promo.type, true); } else { $("#promo_type").val(0); }


					Editor.settings.preValidation = true;
					Editor.ValidateAdInfo();
					Editor.settings.preValidation = false;	
				});
			}
			
			function init(){
				if ( Editor.settings.wizard == false ) {
					$("#preform").hide();
					$("#frmcontainer").show();
					$("#snazzy_title").val(Editor.home.headline);
					$("#description").val(Editor.home.description);
					checkDescription();

					co = Editor.company;
					si = Editor.home.seller_info;

					/*Need to first get from home, fallback to comp info*/
					if ( co.is_personal == false ) {
						if ( si.company ) { $("#seller_company").val(si.company); } else { $("#seller_company").val(co.title); }
						if ( si.name ) { $("#seller_name").val(si.name); } else { $("#seller_name").val(""); }
					} else {
						if ( si.name ) { $("#seller_name").val(si.name); } else { $("#seller_name").val(co.title); }
						if ( si.company ) { $("#seller_company").val(si.company); } else { $("#seller_company").val(""); }
					}

					if ( si.phone ) { $("#seller_phone").val(si.phone); } else { $("#seller_phone").val(co.phone); }
					if ( si.phone2 !== null ) { $("#seller_phone2").val(si.phone2); } else { $("#seller_phone2").val(co.phone2); }
					if ( si.phone3 !== null ) { $("#seller_phone3").val(si.phone3); } else { $("#seller_phone3").val(co.phone3); }
					
					if ( si.addr ) { $("#seller_addr").val(si.addr); } else { $("#seller_addr").val(co.street_addr); }
					if ( si.email !== null ) { $("#seller_email").val(si.email); } else { $("#seller_addr").val(""); }
					if ( si.license !== null ) { $("#seller_license").val(si.license); } else { $("#seller_addr").val(""); }

					if ( parseInt(si.promo.type) > 0 ) { $("#promo_type").val(parseInt(si.promo.type));show_promo(si.promo.type, true); } else { $("#promo_type").val(0); }



					Editor.settings.preValidation = true;
					Editor.ValidateAdInfo();
					Editor.settings.preValidation = false;
				} else {
					$("#preform").fadeIn(1200);
				}

				$("#help_offsets").click(function(e) {


				console.log("ok");
				  $('#myModal').modal('show');
				  $('.modal-title').html("Promotional Highlight");
				  $('.modal-body').html("You can add promotional highlights to your home which will display in a ribbon across the thumbnail of the home where ever it shows up on MHS America. We currently support three promotional options:<br><br><strong>Open House Promotion</strong><br>If you have an upcoming Open House you can use this ribbon to promote the date anywhere your home is seen on our platform.<br><hr><strong>Price Drop Promotion</strong><br>If your home has recently had a drop in price you can promote the new price with a special price drop ribbon.<hr><strong>Recently Updated Promotion</strong><br>If you have updated your profile to include new informaion or photos you can let users know by using this ribbon.");
				  $('#modal-deny').hide();
				  $('#modal-confirm').hide();
				});

			}

				function show_promo(id, reset) {
					console.log("showpromo", id);
					id = parseInt(id);
					switch ( id ) {
						case 1:
							$("#reduction_box").hide();
							$("#openhouse_box").show();
							if ( reset ) {
								$("#ohd").val(Editor.home.seller_info.promo.param1);
								$("#ohs").val(Editor.home.seller_info.promo.param2);
								$("#ohe").val(Editor.home.seller_info.promo.param3);
							}
						break;
						case 2:
							$("#openhouse_box").hide();
							$("#reduction_box").show();
							if ( reset ) {
								$("#pdi").val(Editor.home.seller_info.promo.param1);
							}
						break;
						default:
							$("#openhouse_box, #reduction_box").hide();
						break;
					}
				}

				function checkDescription() {
					maxchar = 750;
					c = $("#description").val();
					cc = maxchar - c.length;

					if ( cc <= 0 ) {
						c = c.substring(0,maxchar);
						$("#description").val(c);
						cc = maxchar - c.length;
					}
					$("#desc_count").html(cc);

				}
		</script>