      <div class="well" id="preform" style="padding: 0px 100px;text-align: center;display: none">
         <h2>Now, let's talk about some of the features that can be found in the home</h2>
            <div class="margin-t" style="border:0px solid red;text-align: center;">
               <button type="submit" class="btn btn-lg btn-primary cta pull-center" onclick="showfrm();">Enter Features</button>
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

<form id="homeForm" class="form-horizontal" action="" method="POST">
			<div class="panel " style="background:none">
				<!-- <div class="panel-heading">Tell us About this Home: <small>(optional)</small></div> -->
				<div class="panel-body">


   <div class="form-group">
      <div class="col-xs-12 col-sm-12" style="padding: 0em 2em;">

         <div class="row">
            <div class="col-md-8 col-sm-12">

               <div style="padding: 15px;">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;">
                        <h4 style="margin-bottom: -.1em;margin-top: 0em;font-weight: bold;font-size: 1.5em;"><i class="fa fa-home"></i> Home Features</h4>
                     </div>
                  </div>
                  <div class="row features">
                     <div class="col-xs-6 col-sm-6 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="dining" value="1"> Dining Room
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-6 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="office" value="2"> Office
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-6 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="swamp" value="3"> Swamp Cooler
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-6 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="central" value="4"> Central Air
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-6 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="island" value="5"> Island
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-6 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="fans" value="33"> Ceiling Fan(s)
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-6 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="glamor_bath" value="6"> Glamor Bath
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-6 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="jacuzzi" value="7"> Jacuzzi
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-6 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="walk_in" value="8"> Walk-in Closet
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-6 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="dormer" value="9"> Dormer
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-6 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="furnace" id="furnace" onclick="showUtilities();" value="10"> 
                        Furnace/Heating
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-6 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="washhookup" id="washhookup" onclick="showUtilities();" value="11"> 
                        Washer/Dryer Hookups
                        </label>
                     </div>
                  </div>
               </div>

               </div>
               <div class="col-md-4 col-sm-12">

               <div style="padding: 15px;">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;">
                        <h4 style="margin-bottom: -.1em;margin-top: 0em;font-weight: bold;font-size: 1.5em;"> <i class="fa fa-tree"></i> Property Features</h4>
                     </div>
                  </div>
                  <div class="row features">
                     <div class="col-xs-6 col-sm-12 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="porch" value="12"> Porch
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-12 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="patio" value="13"> Patio
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-12 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="shed" value="14"> Shed
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-12 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="carport" value="15"> Carport
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-12 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="garage" value="16"> Garage
                        </label>
                     </div>
                     <div class="col-xs-6 col-sm-12 text-left">
                        <label class="checkbox-inline">
                        <input type="checkbox" name="steps" value="37"> Steps
                        </label>
                     </div>
                  </div>
               </div>


               </div>
            </div>

         <div class="row">
            <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;">
               <h4 style="margin-bottom: -.1em;margin-top: 1.5em;font-weight: bold;font-size: 1.5em;"> <i class="fa fa-plus"></i> Appliances</h4>
            </div>
         </div>
         <div class="row appliances">
            <div class="col-xs-6 col-sm-4 text-left">
               <label class="checkbox-inline">
               <input type="checkbox" name="fridge" value="17"> Refrigerator
               </label>
            </div>
            <div class="col-xs-6 col-sm-4 text-left">
               <label class="checkbox-inline">
               <input type="checkbox" name="cook_top" id="cook_top" value="36"> Cook Top
               </label>
            </div>
            <div class="col-xs-6 col-sm-4 text-left">
               <label class="checkbox-inline">
               <input type="checkbox" name="stove" id="stove" onclick="showUtilities();" value="18"> Range/Stove
               </label>
            </div>
            <div class="col-xs-6 col-sm-4 text-left">
               <label class="checkbox-inline">
               <input type="checkbox" name="range_hood" id="range_hood" value="35"> Range Hood
               </label>
            </div>
            <div class="col-xs-6 col-sm-4 text-left">
               <label class="checkbox-inline">
               <input type="checkbox" name="oven" id="oven" onclick="showUtilities();" value="19"> Oven
               </label>
            </div>
            <div class="col-xs-6 col-sm-4 text-left">
               <label class="checkbox-inline">
               <input type="checkbox" name="microwave" value="20"> Microwave
               </label>
            </div>
            <div class="col-xs-6 col-sm-4 text-left">
               <label class="checkbox-inline">
               <input type="checkbox" name="microwave" value="21"> Dishwasher
               </label>
            </div>
            <div class="col-xs-6 col-sm-4 text-left">
               <label class="checkbox-inline">
               <input type="checkbox" name="fireplace" id="fireplace" onclick="showUtilities();" value="22"> Fireplace
               </label>
            </div>
            <div class="col-xs-6 col-sm-4 text-left">
               <label class="checkbox-inline">
               <input type="checkbox" name="washer" value="23"> Washer
               </label>
            </div>
            <div class="col-xs-6 col-sm-4 text-left">
               <label class="checkbox-inline">
               <input type="checkbox" name="dryer" id="dryer" onclick="showUtilities();" value="24"> Dryer
               </label>
            </div>

         </div>
         <div class="row utility_header" style="display: none;">
            <div class="col-xs-12 col-sm-12 text-left" style="border-bottom: 2px solid #eee;padding: 10px;">
               <h4 style="margin-bottom: -.1em;margin-top: 1.5em;font-weight: bold;font-size: 1.5em;"> <i class="fa fa-plug"></i> Utility</h4>
            </div>
         </div>
         <div class="row utilities">


            <div class="col-xs-12 col-sm-4 text-left" style="display: none;" id="util_dryer">
               <div class="" style="border: 1px solid #ededed;margin-top: 10px;">
                  <div class="" style="font-weight: bold;background: #ededed;padding: 7px;">Dryer</div>
                  <div class="" style="padding: 0px 10px 10px 10px;">
                     <label class="checkbox-inline">
                     <input type="checkbox" name="dryer_gas" value="25"> Gas
                     </label><div style="clear: all;"></div>
                     <label class="checkbox-inline">
                     <input type="checkbox" name="dryer_elec" value="26"> Electric
                     </label>
                  </div>
               </div>
            </div>

            <div class="col-xs-12 col-sm-4 text-left" style="display: none;" id="util_range">
               <div class="" style="border: 1px solid #ededed;margin-top: 10px;">
                  <div class="" style="font-weight: bold;background: #ededed;padding: 7px;">Oven/Range</div>
                  <div class="" style="padding: 0px 10px 10px 10px;">
                     <label class="checkbox-inline">
                     <input type="checkbox" name="oven_gas" value="27"> Gas
                     </label><div style="clear: all;"></div>
                     <label class="checkbox-inline">
                     <input type="checkbox" name="oven_elec" value="28"> Electric
                     </label>
                  </div>
               </div>
            </div>

            <div class="col-xs-12 col-sm-4 text-left" style="display: none;"  id="util_furnace">
               <div class="" style="border: 1px solid #ededed;margin-top: 10px;">
                  <div class="" style="font-weight: bold;background: #ededed;padding: 7px;">Furnace/Heating</div>
                  <div class="" style="padding: 0px 10px 10px 10px;">
                     <label class="checkbox-inline">
                     <input type="checkbox" name="heating_gas" value="29"> Gas
                     </label><div style="clear: all;"></div>
                     <label class="checkbox-inline">
                     <input type="checkbox" name="heating_elec" value="30"> Electric
                     </label><div style="clear: all;"></div>
                     <label class="checkbox-inline">
                     <input type="checkbox" name="heating_pump" value="34"> Heat Pump
                     </label>
                  </div>
               </div>
            </div>

            <div class="col-xs-12 col-sm-4 text-left" style="display: none;" id="util_fireplace">
               <div class="" style="border: 1px solid #ededed;margin-top: 10px;">
                  <div class="" style="font-weight: bold;background: #ededed;padding: 7px;">Fireplace</div>
                  <div class="" style="padding: 0px 10px 10px 10px;">
                     <label class="checkbox-inline">
                     <input type="checkbox" name="fireplace_gas" value="31"> Gas
                     </label><div style="clear: all;"></div>
                     <label class="checkbox-inline">
                     <input type="checkbox" name="fireplace_wood" value="32"> Wood
                     </label>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>



				</div>
			</div>
   <div class="form-group margin-y">
      <div class="col-md-12 margin-t-wide">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <input type="hidden" id="current_step" value="home-opts">
         <button type="button" class="btn btn-lg btn-primary cta pull-left"  onclick="Editor.MoveBack();"> <i class="fa fa-angle-left"></i> Back</button>
         <button type="button" id="opts-step" class="btn btn-lg btn-primary cta pull-right" onclick="Editor.MoveNext();"> Next <i class="fa fa-angle-right"></i></button>
      </div>
   </div>
</form>
</div>
      <script type="text/javascript">

         function showfrm(){
            $("#preform").fadeOut(500, function(){
               $("#frmcontainer").fadeIn(500);

              $(".features input").each(function(){
                if( Editor.home.home_options.features.includes(this.value) ){
                  $(this).prop("checked", true);
                }
              });

              $(".appliances input").each(function(){
                if( Editor.home.home_options.appliances.includes(this.value) ){
                  $(this).prop("checked", true);
                }
              });

              $(".utilities input").each(function(){
                if( Editor.home.home_options.appliances.includes(this.value) ){
                  $(this).prop("checked", true);
                }
              });

               Editor.settings.preValidation = true;
               Editor.ValidateHomeOptions();
               Editor.settings.preValidation = false; 
               showUtilities();
            });

         }
         function init(){
            
            if ( Editor.settings.wizard == false ) {
               $("#preform").hide();
               $("#frmcontainer").show();

              $(".features input").each(function(){

                if( Editor.home.home_options.features.includes(this.value) ){
                  $(this).prop("checked", true);
                }
              });
               
              $(".appliances input").each(function(){

                if( Editor.home.home_options.appliances.includes(this.value) ){
                  $(this).prop("checked", true);
                }
              });

              $(".utilities input").each(function(){
                if( Editor.home.home_options.appliances.includes(this.value) ){
                  $(this).prop("checked", true);
                }
              });

               Editor.settings.preValidation = true;
               Editor.ValidateHomeOptions();
               Editor.settings.preValidation = false; 
               showUtilities();
            } else {
               $("#preform").fadeIn(1200);
            }

         }

         function showUtilities() {

            utcheck = false;

            if ( $("#washhookup:checked").length || $("#dryer:checked").length ) {
               $("#util_dryer").fadeIn();
               utcheck = true;
            } else {
               $("#util_dryer").fadeOut();
            }

            if ( $("#furnace:checked").length ) {
               $("#util_furnace").fadeIn();
               utcheck = true;
            } else {
               $("#util_furnace").fadeOut();
            }

            if ( $("#stove:checked").length || $("#oven:checked").length ) {
               $("#util_range").fadeIn();
               utcheck = true;
            } else {
               $("#util_range").fadeOut();
            }

            if ( $("#fireplace:checked").length ) {
               $("#util_fireplace").fadeIn();
               utcheck = true;
            } else {
               $("#util_fireplace").fadeOut();
            }
            if( utcheck ) {
            $(".utility_header").fadeIn(); } else { $(".utility_header").fadeOut(); }

         }



      </script>