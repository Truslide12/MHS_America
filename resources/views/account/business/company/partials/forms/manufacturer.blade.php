<div class="row">
	<div class="col-sm-8 col-md-10">
		<h1 class="col-md-offset-1 padding-l">Your Manufacturer Profile.</h1>
		<form class="form-horizontal" data-action="submit" action="" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-3">About You</label>
				<div class="col-md-9">
					<textarea name="description" class="form-control" rows="6"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-3">First Name</label>
				<div class="col-md-3">
					<input type="text" name="fname" class="form-control" value="">
				</div>
				<label class="control-label col-md-2">Last Name</label>
				<div class="col-md-4">
					<input type="text" name="lname" class="form-control" value="">
				</div>
			</div>
			<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-3">Phone</label>
				<div class="col-md-4">
					<input type="text" name="phone" class="form-control" value="">
				</div>
				<label class="control-label col-md-1">Fax</label>
				<div class="col-md-4">
					<input type="text" name="fax" class="form-control" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Street address</label>
				<div class="col-md-9">
					<input type="text" name="address" class="form-control" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">City</label>
				<div class="col-md-9">
					<input type="text" name="city" class="form-control" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">State</label>
				<div class="col-md-3">
					<input type="text" name="state" class="form-control" value="">
				</div>
				<label class="control-label col-md-3">Postal code</label>
				<div class="col-md-3">
					<input type="text" name="zipcode" class="form-control" value="">
				</div>
			</div>
			<div class="form-group">
				<div class="push-down"></div>
				<div class="col-md-offset-3 col-md-9">
					<p>By clicking Save Profile, you agree to our policies.</p>
					<button type="submit" class="btn btn-success btn-lg">Save Manufacturer Profile<i class="fa fa-chevron-right padding-l"></i></button>
				</div>
			</div>
			<div class="push-down">
				&nbsp;
			</div>
		</form>
	</div>
	<div class="col-sm-4">

	</div>
</div>