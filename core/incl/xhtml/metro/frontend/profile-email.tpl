{extends "profile-community.tpl"}
{block "carousel"}
	<div id="myCarousel" class="nameblock">
	  <div id="name-wrapper"><div class="container">
		<p class="h1 hidden-xs">{$page.profile.title}</p>
		<p class="h2 visible-xs">{$page.profile.title}</p>
	  </div></div>
	</div>
{/block}
{block "profileblocks"}
		<div class="col-md-offset-3 col-md-6">
	   <!-- Form itself -->
          <form name="sentMessage" class="well" method="POST" action="/profile_contact.php" id="contactForm" novalidate><input type="hidden" name="profile" id="profileid" value="{$page.profile.prof_id}">
	       <legend>Send Message</legend>
		 <div class="control-group">
                    <div class="controls">
			<input type="text" name="name" class="form-control" 
			   	   placeholder="Full Name" id="name" required
			           data-validation-required-message="Please enter your name">
			  <p class="help-block"></p>
		   </div>
	         </div> 	
                <div class="control-group">
                  <div class="controls">
			<input type="email" name="email" class="form-control" placeholder="Email" 
			   	            id="email" required
			   		   data-validation-required-message="Please enter your email">
			  <p class="help-block"></p>
		</div>
	    </div> 	
			  
               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" name="message" class="form-control" 
                       placeholder="Message" id="message" required
		       data-validation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
			  <p class="help-block"></p>
		</div>
               </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
	</div>
{/block}
{block "endscripts"}
<script src="/_/metro/js/jqBootstrapValidation.js"></script>
<script src="/_/metro/js/contact.js"></script>
{/block}