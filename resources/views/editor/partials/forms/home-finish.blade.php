		<div class="well" id="preform" style="padding: 0px 100px;text-align: center;">
			<h2 id="finish-msg">Profile Saved</h2>
				<div class="margin-t" style="border:0px solid red;text-align: center;">
					<a type="submit" id="wizard" class="btn btn-lg btn-primary cta pull-center" onmouseover="showhelper(this.id);" onmouseout="hidehelper(this.id);" href="{{ URL::route('home', array('home' => Request()->home->id)) }}">View Profile</a>

					<a type="button" id="opts-step" class="btn btn-lg btn-primary cta pull-center" onmouseover="showhelper(this.id);" onmouseout="hidehelper(this.id);" href="{{ URL::route('account-business-company', array('company' => Request()->home->company_id)) }}">Exit Editor</a>
				</div>

			<p class="margin-t" id="helper-w" style="display: none;">
				View my profile
			</p>
			<p class="margin-t" id="helper-e" style="display: none;">
				Return to business center
			</p>
		</div>
		<script type="text/javascript">
			function init(){
			    
				if ( Editor.home.status == 1 ) {
					$("#finish-msg").html("Your home is saved but still set to private. You can return to finish at any time and change your status.");
					$("#wizard").hide();
				} else {
					$("#finish-msg").html("Your Home Profile Has Been Completed!");
					$("#wizard").show();
				}

			}
			
		</script>