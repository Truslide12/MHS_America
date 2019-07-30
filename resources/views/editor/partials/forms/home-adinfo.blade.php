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
				                        <h4 style="margin-bottom: -.1em;margin-top: 0em;font-weight: bold;font-size: 1.5em;"><i class="fa fa-user"></i> Seller Information</h4>
				                     </div>
				                  </div>


										<div class="row" style="margin-bottom: 2px;">
											<label class="col-md-2 control-label">
												Company
											</label>
											<div class="col-md-10"><input type="text" class="form-control"></div>
										</div>

										<div class="row" style="margin-bottom: 2px;">
											<label class="col-md-2 control-label">
												Seller Name
											</label>
											<div class="col-md-10"><input type="text" class="form-control"></div>
										</div>

										<div class="row" style="margin-bottom: 2px;">
											<label class="col-md-2 control-label">
												Seller Phone
											</label>
											<div class="col-md-10"><input type="text" class="form-control"></div>
										</div>

										<div class="row" style="margin-bottom: 2px;">
											<label class="col-md-2 control-label">
												Seller Email
											</label>
											<div class="col-md-10"><input type="text" class="form-control"></div>
										</div>

										<div class="row" style="margin-bottom: 2px;">
											<label class="col-md-2 control-label">
												Seller License
											</label>
											<div class="col-md-10"><input type="text" class="form-control"></div>
										</div>

								  <div class="row" style="margin-bottom: 10px;margin-top:10px;">
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
										<textarea type="text" rows=8 id="description" name="description" class="form-control" placeholder="Tell us about this home.." value="{{ Input::old('title', '') }}"></textarea>
										<span class="help-text text-muted"><small>Describe this home..</small></span>
									</div>
								</div>

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
					<button type="submit" class="btn btn-lg btn-primary cta pull-left" onclick="Editor.MoveBack();"> <i class="fa fa-angle-left"></i> Back</button>
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

					Editor.settings.preValidation = true;
					Editor.ValidateAdInfo();
					Editor.settings.preValidation = false;
				} else {
					$("#preform").fadeIn(1200);
				}
			}
		</script>