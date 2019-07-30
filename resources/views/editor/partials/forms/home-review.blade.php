<div class="row" style="margin-bottom: 20px;">
<div class="col-md-6 col-sm-12">
	<table class="table">
		<tr style="background:rgb(239, 239, 239);">
			<th colspan="2"><span id="cfrm_title"></span></th>
		</tr>
		<tr>
			<th>Make</th>
			<td><div id="cfrm_make"></div></td>
		</tr>
		<tr>
			<th>Model</th>
			<td><div id="cfrm_model"></div></td>
		</tr>
		<tr>
			<th>Year</th>
			<td><div id="cfrm_year"></div></td>
		</tr>
		<tr>
			<th>Size</th>
			<td><div id="cfrm_size"></div></td>
		</tr>

		<tr>
			<th>Bedrooms</th>
			<td><div id="cfrm_beds"></div></td>
		</tr>
		<tr>
			<th>Bathrooms</th>
			<td><div id="cfrm_baths"></div></td>
		</tr>
		<tr>
			<th>Price:</th>
			<td class="app-content">$<div id="cfrm_price" style="display: inline;"></div> (<div id="cfrm_type" style="display: inline;"></div>)</td>
		</tr>
		<!--
		<tr>
			<th>Description:</th>
			<td><div id="cfrm_desc"></div></td>
		</tr>
		-->
	</table>
</div>
<div class="col-md-6 col-sm-12">
	<img src="{{ URL::route('welcome') }}/img/icons/home.png" id="photo-preview" style="width: 100%;">
</div>


<div class="col-md-12 col-sm-12">
	<table class="table">
		<tr style="background:rgb(239, 239, 239);">
			<th colspan="2">Listing Information:</th>
		</tr>
		<tr>
			<th>Listing Payment</th>
			<td><div id="cfrm_payment"></div></td>
		</tr>
		<tr>
			<th>Listing Expiration</th>
			<td>
			<!--
				<select  id="exp_month" style="width: 33.333%;float: left" class="form-control">
					<option>January</option>
				</select>
				<select  id="exp_day" style="width: 33.333%;float: left" class="form-control">
					<option>1</option>
				</select>
				<select  id="exp_year" style="width: 33.333%;float: left" class="form-control">
					<option>2019</option>
				</select>
			-->

				                <div class='input-group date' id='datetimepicker1'>
				                    <input type='text' name="exp_date" id="exp_date" class="form-control" />
				                    <span class="input-group-addon">
				                        <span class="glyphicon glyphicon-calendar"></span>
				                    </span>
				                </div>


			</td>
		</tr>
		<tr>
			<th>Listing Status</th>
			<td>
				<select id="listing_status" name="listing_status" class="form-control" onchange="check_sold_status();">
					<option value="1">Private</option>
					<option value="4">Active</option>
					<option value="5">Pending</option>
					<option value="3">Sold</option>
					<option value="2">Expired</option>
					<option value="6">Withdrawn</option>
				</select>
			</td>
		</tr>
		<tr style="display: none;" id="sold_row">
			<th>Sold Price</th>
			<td>
				<input type="text" id="sold_price" name="sold_price" class="form-control">
			</td>
		</tr>
	</table>
</div>

<div class="col-md-12 col-sm-12" style="margin-bottom: 15px;">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" id="current_step" value="home-review">
	<!-- <button type="submit" class="btn btn-lg btn-primary cta pull-left" onclick="Editor.SaveToServer();">Save &amp; Exit</button> -->
	<button type="submit" id="review-step" class="btn btn-lg btn-primary cta pull-right" onclick="Editor.MoveNext();">Save</button>
</div>


</div>
<!--
<div class='container-fluid' style="margin-top: 10px;margin-bottom: 10px;">

	<div class="row">
		<div class="col-md-12 app-space">
			<div class="row">
				<div class="col-md-12 app-heading">Home Options</div>
				<div class="col-md-12 border-bottom"><div id="cfrm_opts" class="app-content"></div></div>
			</div>
		</div>
	</div>

</div>
-->

<script>
	function check_sold_status() {
		if ( $("#listing_status").val() == 3 ) {
			$("#sold_row").show();
		} else {
			$("#sold_row").hide();
		}
	}
	function trans_type(i){
		t = new Array("For Sale", "For Rent");
		return t[i];

	}
	function trans_scale(i){
		t = new Array("Single Wide", "Double Wide", "Triple Wide");
		return t[i];

	}
	function init() {
		$(function () {
			var n = new Date();
			var d = new Date();
			$('#datetimepicker1').datetimepicker({
				format: 'MM/DD/YYYY',
				minDate: n,
				maxDate: d.setDate(d.getDate() + 90)    			
			});
		});
		check_sold_status();

		if ( Editor.home.sold_price ) {
			$("#sold_price").val(Editor.home.sold_price);
			check_sold_status();
		}
		if ( Editor.home.status == 3 ) {
			check_sold_status();
		}
		if ( Editor.home.exp_date ) {
			$("#exp_date").val(Editor.home.exp_date);
		}

	}
	Editor.BuildReview();
</script>
<style>
	.app-heading {
		background-color: #337ab7;
    	border-color: #337ab7;
    	color: snow;
    	font-weight: normal;
    	padding: 10px;
	}
	.app-space {
		border-left: 1px solid #337ab7;
	}
	.app-space:last-child {
		border-right: 1px solid #337ab7;
	}
	.app-content{
		padding: 10px;
	}
	.border-bottom {
		border-bottom: 1px solid #337ab7;
	}


</style>


