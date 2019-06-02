		<div class="well" id="preform" style="padding: 0px 100px;text-align: center;">
			<h2>How would you like to build your home profile?</h2>
				<div class="margin-t" style="border:0px solid red;text-align: center;">
					<button type="submit" id="wizard" class="btn btn-lg btn-primary cta pull-center" onmouseover="showhelper(this.id);" onmouseout="hidehelper(this.id);" onclick="showfrm();"><i class="fa fa-magic"></i> Use Setup Wizard</button>
					<button type="button" id="opts-step" class="btn btn-lg btn-primary cta pull-center" onmouseover="showhelper(this.id);" onmouseout="hidehelper(this.id);" onclick="goedit();"><i class="fa fa-desktop"></i> Use Home Editor</button>
					<!-- <button type="button" id="onepage" class="btn btn-lg btn-primary cta pull-center" onmouseover="showhelper(this.id);" onmouseout="hidehelper(this.id);" onclick="goedit();"><i class="fa fa-columns"></i> 1 Page Form</button> -->
				</div>

			<p class="margin-t" id="helper-w" style="display: none;">
				For users who are new to our website, and want to be guided through our forms.
			</p>
			<p class="margin-t" id="helper-e" style="display: none;">
				For users who have used our editor before.
			</p>
			<p class="margin-t" id="helper-o" style="display: none;">
				For users who just want the form.
			</p>
		</div>

		<script>

			function init(){


			}

			function showfrm(){
				$("#preform").fadeOut(500, function(){
					shortCutPony("home-info");
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

			}
			function showfield(id){
			}
		</script>