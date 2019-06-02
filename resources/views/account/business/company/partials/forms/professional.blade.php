<div class="row">
	<div class="col-sm-8 col-md-10">
		<h1 class="col-md-offset-1 padding-l">Your Business Profile.</h1>
		<form class="form-horizontal" data-action="submit" action="" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<!--<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-3">About You</label>
				<div class="col-md-9">
					<textarea name="description" class="form-control" rows="6"></textarea>
				</div>
			</div>-->
			<script>
				function updateAmountBoxes() {
					if ( event.target.id == "inpt_isNeither" )
					{
						if ($('#inpt_isNeither').prop('checked'))
						{
							$('#inpt_isBond').prop('checked', false);
							$('#inpt_isInsur').prop('checked', false);
							$("#inpt_BondAmt").parent().hide();
							$("#inpt_InsurAmt").parent().parent().hide();

							$("#inpt_BondAmt").parent().prev().prev().hide();
							$("#inpt_BondAmt").parent().prev().hide();

							$("#inpt_BondAmt").parent().prev().prev().prev().removeClass("col-md-3");
							$("#inpt_BondAmt").parent().prev().prev().prev().addClass("col-md-9");
							return true;
						} 
					}



					if ($('#inpt_isBond').prop('checked'))
					{
						$("#inpt_BondAmt").parent().prev().prev().prev().removeClass("col-md-9");
						$("#inpt_BondAmt").parent().prev().prev().prev().addClass("col-md-3");
						$("#inpt_BondAmt").parent().prev().prev().show();
						$("#inpt_BondAmt").parent().prev().show();
					    $("#inpt_BondAmt").parent().show();

					} else {
						$("#inpt_BondAmt").parent().hide();
						$("#inpt_BondAmt").parent().prev().prev().hide();
						$("#inpt_BondAmt").parent().prev().hide();
						$("#inpt_BondAmt").parent().prev().prev().prev().removeClass("col-md-9");
						$("#inpt_BondAmt").parent().prev().prev().prev().addClass("col-md-3");
					}

					if ($('#inpt_isInsur').prop('checked'))
					{
					    $("#inpt_InsurAmt").parent().parent().show();
					} else { $("#inpt_InsurAmt").parent().parent().hide(); }

				}

				function setBusinessType(id)
				{
					if ( id == "other" )
					{
							pony['bloodhound'] = new Bloodhound({
								name: 'amenities',
								remote: '{{ URL::route('welcome') }}/derpy/cities?query=%QUERY',
								datumTokenizer: function(d) {
									return Bloodhound.tokenizers.whitespace(d.name);
								},
								queryTokenizer: Bloodhound.tokenizers.whitespace
							});

							pony.bloodhound.initialize();
							console.log("loading bloodhound..");

							$('#typesSearchBox').typeahead(null, {
								displayKey: 'title',
								source: pony.bloodhound.ttAdapter(),
							});

							$('#typesSearchBox').on('typeahead:selected', function(evt, item) {
							    // do what you want with the item here
							    setBusinessType(item);
							    $('#typesSearchBox').val("");
							});

							pony.bind('click', '#modal-confirm'	, function(){newPony("home-camp")});
							pony.bind('click', '#modal-deny'	, function(){setProgress(getProgress()+25);newPony("home-finish")});
							$('#myModal').modal({
						        show: 'true'
						    });
					} else {

						if ( id.abbr )
						{
							$('#myModal').modal("hide");
							$('#business_type').append($('<option>', {
							    value: id.abbr,
							    text: id.place_name
							}));
							$('#business_type').val(id.abbr);
							console.log(id.abbr);
						}
						//set to hidden field..
						console.log(id);
					}
				}


				function init()
				{
					//any code needed when form is loaded via xhr
				}

			</script>
<style>
	.dragdrop {
		border: 5px dashed #cdcdcd;
		margin: 0px;
		margin-bottom: 10px;
		height: 200px;
	}
	.dragdrop-f {
		margin-top: 65px;
	}
	.form-control {
		margin-bottom: 5px;
	}
	.label {
		font-weight: bold;
	}
	.amenities_custom {
		display: none;
	}
.tooltip-inner {
    max-width: 250px;
    /* If max-width does not work, try using width instead */
    width: 250px; 
}
	.modal-content { margin-top: 20%; }
	.modal-header .close { float: right; }
	.tt-dropdown-menu {
		margin-top: 34px;
	}
	.badge {
		border-radius: 100%!important;
		background-color: red;
		cursor: pointer;
	}
</style>

			<div class="form-group" style="font-size:130%;line-height:1.8em">
				<label class="col-md-3 control-label">Business name</label>
				<div class="col-md-9">
					<input type="text" name="title" class="form-control input-lg" value="" data-toggle="tooltip" data-placement="right" title="What is the name of your business?">
				</div>
			</div>

			<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-3">About the Business</label>
				<div class="col-md-9">
					<textarea name="description" class="form-control push-down" rows="6"></textarea>
					<div class="alert alert-success">
						It is recommended to detail anything not made explicit through our provided options.
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-2 col-md-offset-1">Business Type:</label>
				<div class="col-md-3">
						<select type="text" name="business_type" id="business_type" class="form-control" onchange="setBusinessType(this.value);">
							<option value="community">Community</option>
							<option value="salesagent">Sales Agent</option>
							<option value="dealer">Dealer</option>
							<option value="manufacturer">Manufacturer</option>
							<option value="transporter">Transporter</option>
							<option value="contractor">Contractor</option>
							<option value="insurer">Insurer</option>
							<option value="inspector">Inspector</option>
							<option value="lender">Lender</option>
							<option value="remodeler">Remodeler</option>
							<option value="other">Other</option>
						</select>
						<input type="hidden" name="business_type_id">
				</div>

				<div class="push-down"></div>
				<label class="control-label col-md-2">Specializing In:</label>
				<div class="col-md-4">
					<input type="text" name="" class="form-control" value="">
				</div>

			</div>


			<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-3" onclick="getlic()">Licence #:</label>
				<div class="col-md-6">
					<input type="text" name="licence_num" class="form-control" value="">
				</div>
				<div class="col-md-3">
						<select type="text" name="licence_state" class="form-control">
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
				</div>
			</div>


			<div class="form-group">
				<div class="push-down"></div>
				<label class="control-label col-md-3">Bond Amount:</label>
				<div class="col-md-3">
						<input type="text" id="inpt_BondAmt" name="" class="form-control" value="">
				</div>

				<label class="control-label col-md-3">Insurance Amount:</label>
				<div class="col-md-3">
						<input type="text" id="inpt_InsurAmt" name="" class="form-control" value="">
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
						<select type="text" name="licence_state" class="form-control">
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
				</div>
				<label class="control-label col-md-3">Postal code</label>
				<div class="col-md-3">
					<input type="text" name="zipcode" class="form-control" value="">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-3">Email</label>
				<div class="col-md-5">
					<input type="text" name="email" class="form-control" value="">
				</div>
				<div class="col-md-4">
					
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-3">Web address</label>
				<div class="col-md-9">
					<input type="text" name="address" class="form-control" value="http://">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Video link</label>
				<div class="col-md-9">
					<input type="text" name="video_link" class="form-control" value="http://">
				</div>
			</div>
			<div class="form-group">
				<div class="push-down"></div>
				<div class="col-md-offset-3 col-md-9">
					<p>By clicking Save Profile, you agree to our <a href="{{ URL::route('welcome') }}/page/terms" target="_blank">terms of service</a> and our <a href="{{ URL::route('welcome') }}/page/privacy" target="_blank">privacy policy</a>.</p>
					<button type="submit" class="btn btn-success btn-lg">Save Profile<i class="fa fa-chevron-right padding-l"></i></button>
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

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Other Business Types</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-md-6">
				    <div class="input-group">
				      <input type="text" class="form-control" name="search" id="typesSearchBox" placeholder="Search for...">
				      <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></span>
				    </div><!-- /input-group -->
        		</div>
        		<div class="col-md-6">
					<ul class="list-group" id="additional_amenities">
					</ul>
        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="modal-close" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Other Business Types</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-md-6">
				    <div class="input-group">
				      <input type="text" class="form-control" name="search" id="typesSearchBox" placeholder="Search for...">
				      <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></span>
				    </div><!-- /input-group -->
        		</div>
        		<div class="col-md-6">
					<ul class="list-group" id="additional_amenities">
					</ul>
        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="modal-close" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
	
	function getlic()
	{
		

		$("#myModal2 .modal-title").html("Add A License");
		$("#myModal2 .modal-body").html(LM.BuildFormHTML());
		$('#myModal2').modal({
		        show: 'true'
		});
	}
</script>