		<form id="homeForm" class="form-horizontal" action="" method="POST">
			<div class="panel panel-primary" style="background:none">
				<div class="panel-heading">Ad Campaign: <small>(optional)</small></div>
				<div class="panel-body">
					<div class="form-group padding-t">
						<div class="col-sm-2 col-md-2 text-right">
							<label class="control-label">
								Campaign Name
							</label>
						</div>
						<div class="col-md-3 col-sm-4">
							<input type="text" name="" class="form-control" value="">
						</div>
						<div class="col-xs-2 col-sm-2 col-sm-1 col-md-1 text-right" id="">
							<label class="control-label">
								Type
							</label>
						</div>
						<div class="col-sm-5 col-md-4 text-left">
							<label class="checkbox-inline">
								<input type="radio" name="type" value="0"> Banner
							</label>
							<label class="checkbox-inline">
								<input type="radio" name="type" value="1"> Text
							</label>
						</div>
					</div>
					<div class="form-group margin-t padding-t">
						<div class="col-sm-2 col-md-2 text-right">
							<label class="control-label">
								Ad Plan
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select name="" class="form-control">
								<option value="1">Plan 1 $00.00</option>
								<option value="2">Plan 2 $00.00</option>
								<option value="3">Plan 3 $00.00</option>
							</select>
						</div>
						<div class="col-sm-2 col-md-2 text-right">
							<label class="control-label">
								Size
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<select name="" class="form-control">
								<option value="1">468x60 Banner</option>
								<option value="2">120x600 Skyscraper</option>
							</select>
						</div>
					</div>
					<div class="form-group margin-t padding-t">
						<div class="col-sm-2 col-md-2 text-right">
							<label class="control-label">
								Location
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input type="text" name="" class="form-control" value="">
						</div>
						<div class="col-sm-2 col-md-2 text-right">
							<label class="control-label">
								Radius
							</label>
						</div>
						<div class="col-sm-4 col-md-3">
							<input type="text" name="" class="form-control" value="">
						</div>
					</div>
				</div>
			</div>
			<div class="form-group margin-y">
				<div class="col-md-12">
					<input type="hidden" name="_token" value="">
					<button type="submit" class="btn btn-lg btn-primary cta pull-left">Save &amp; Exit</button>
					<button type="button" id="finish-step" class="btn btn-lg btn-success cta pull-right">Move Next</button>
				</div>
			</div>
		</form>	
<script>
   pony.bind('click', '#finish-step', function(){newPony("home-finish")});
</script>