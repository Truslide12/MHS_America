<?php

if($_GET['done'] == 1){
	if($_GET['error'] != ""){
		$success = "<p style=\"border:1px solid #CC4400;padding:1em;background-color:#FF9999;color:#000000;text-align:center;\">".$form_errors[$_GET['error']]."</p>";
	}else{
		$success = "<p style=\"border:1px solid #00CC44;padding:1em;background-color:#99FF99;color:#000000;\">".l('success')."</p>";
	}
}else{
	$success = "";
}
$homebox = "";

?>
<style type="text/css">
.contblock {
	display:inline-block;
	padding:20px;
}
.lefty {
	float:left;
}
</style>
<div id="contactform" class="" style="display:block;width:570px;margin-left:210px;"><h1 style="font-size:180%;"><?php _l('saleinquiry'); ?></h1>
<br class="clr"/>
<?php if($success != "") echo $success; ?>
<form method="post" id="contactform" action="mail.php" onSubmit="">
<?php /*	<style>
	.ui-autocomplete-loading { background: white url('/inc/style/redmond/images/ui-anim_basic_16x16.gif') right center no-repeat; }
	</style>
	<script>
	$(function() {
		$( "#fp504" ).autocomplete({
			source: "<?php _s('domain'); ?>/autocomplete.php?q=allpark",
			minLength: 2,
			select: function( event, ui ) {
				
			}
		});
	});
	</script> */ ?>
	<input type="hidden" name="lang" value="<?php echo($lang); ?>"/>
	<p style="margin-top: 0; margin-bottom: 0"><label for="fp1"><strong>
	<font color="#000000"><?php _l('contact_name'); ?></font></strong>
	</label><input type="text" name="name" size="52" id="fp1"/><input type="hidden" name="sell" value="1"/></p>
	<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
          <p style="margin-top: 0; margin-bottom: 0"><label for="fp3"><strong>
          <font color="#000000"><?php _l('contact_email'); ?></font></strong>
          </label><input type="text" name="email" size="52" id="fp3"/></p>
          <p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
          <p style="margin-top: 0; margin-bottom: 0"><label for="fp9"><strong>
          <font color="#000000"><?php _l('contact_phone'); ?></font></strong>
          </label><input type="text" name="phone" size="20" id="fp9"/><?php if(defined('IS_MOBILE')){echo("<br style=\"clear:both;\"/>");} ?><strong><font color="#000000">&nbsp;&nbsp;&nbsp;<input type="radio" name="callemail" value="call" checked="checked" id="callme"/><label for="callme"> <?php _l('contact_callme'); ?></label>&nbsp;&nbsp;&nbsp;<?php if(defined('IS_MOBILE')){echo("<br style=\"clear:both;\"/>");} ?><input type="radio" name="callemail" value="email" id="emailme"/><label for="emailme"> <?php _l('contact_emailme'); ?></label>&nbsp;&nbsp;&nbsp;<?php if(defined('IS_MOBILE')){echo("<br style=\"clear:both;\"/>");} ?><input type="radio" name="callemail" value="either" id="eitherme"/><label for="eitherme"> <?php _l('contact_either'); ?></label></font></strong></p>
	<?php /* <p style="margin-top: 0; margin-bottom: 0;border-bottom:2px solid #444444;">&nbsp;<br/><?php _l('whereareyou'); ?> (<?php _l('ifdifferentfrombelow'); ?>)</p>
	<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
	<p style="margin-top: 0; margin-bottom: 0"><label for="fp2"><strong>
	<font color="#000000"><?php _l('contact_address'); ?></font></strong>
	</label><input type="text" name="address" size="52" id="fp2"/></p>
	<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
          <p style="margin-top: 0; margin-bottom: 0"><label for="fp7"><strong>
          <font color="#000000"><?php _l('contact_city'); ?></font></strong>
          </label><input type="text" name="city" size="25" id="fp7"/>&nbsp;&nbsp;
          <strong><font color="#000000"><?php _l('contact_state'); ?></font></strong>
          <font color="#000000"><select size="1" name="state">
		  <?php foreach(Locale::summon()->subregions() as $key => $val) {
					echo("<option value=\"".$key."\"".(($key == s('region')) ? " selected" : "").">".$val."</option>");
				}
		  ?>
          </select></font></p> */ ?>
		  <p style="margin-top: 0; margin-bottom: 0;border-bottom:2px solid #444444;">&nbsp;<br/><?php _l('whereishome'); ?></p>
	<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
	<p style="margin-top: 0; margin-bottom: 0"><label for="fp203"><strong>
	<font color="#000000"><?php _l('contact_address'); ?></font></strong>
	</label><input type="text" name="haddress" size="52" id="fp203"/></p>
	<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
          <p style="margin-top: 0; margin-bottom: 0"><label for="fp703"><strong>
          <font color="#000000"><?php _l('contact_city'); ?></font></strong>
          </label><input type="text" name="hcity" size="25" id="fp703"/>&nbsp;&nbsp;
          <strong><font color="#000000"><?php _l('contact_state'); ?></font></strong>
          
		  <?php
			$regions = Locale::summon()->subregions();
			if(s('region') != "" && s('region') != "norestrict"){
				?>
			<font color="#000000" style="background-color:#ffffff;padding:0.35em;padding-right:6em;border:1px solid #aaaaaa;">
				<?php
				echo("<input type=\"hidden\" name=\"hstate\" value=\"".s('region')."\"/>".$regions[s('region')]);
				?>
			</font>
				<?php
			}else{
				?>
			<select name="hstate">
				<?php
				foreach($regions as $key => $val) {
					echo("<option value=\"".$key."\"".(($key == s('region')) ? " selected" : "").">".$val."</option>");
				}
				?>
			</select>
				<?php
			}
		  ?>
		  </p>
          <input type="hidden" name="want" id="fp10" value="sell"/>
		  <p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
          <p style="margin-top: 0; margin-bottom: 0"><?php if(defined('IS_MOBILE')){echo("<br style=\"clear:both;\"/>");} ?><label for="fp57"><strong>
          <font color="#000000"><?php _l('numbeds'); ?>&nbsp;&nbsp;&nbsp;</font></strong>
          </label><input type="text" name="beds" size="2" id="fp57"/>&nbsp;&nbsp;&nbsp;
		  <?php if(defined('IS_MOBILE')){echo("<br style=\"clear:both;\"/>");} ?><label for="fp58"><strong>
          <font color="#000000"><?php _l('numbaths'); ?>&nbsp;&nbsp;&nbsp;</font></strong>
          </label><input type="text" name="baths" size="2" id="fp58"/><strong><font color="#000000">&nbsp;&nbsp;&nbsp;<?php if(defined('IS_MOBILE')){echo("<br style=\"clear:both;\"/>");} ?><input type="checkbox" name="appliances" value="1" id="appliancesyes"/><label for="appliancesyes"> <?php _l('appliances'); ?></label>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="fireplace" value="1" id="fireplaceyes"/><label for="fireplaceyes"> <?php _l('fireplace'); ?></label></p>
		  <p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
		  <p style="margin-top: 0; margin-bottom: 0"><input type="checkbox" name="garage" value="1" id="garageyes"/><label for="garageyes"> <?php _l('garage'); ?> / <?php _l('carport'); ?></label></font></strong></p>
		  	<p style="margin-top: 0; margin-bottom: 0;border-bottom:2px solid #444444;">&nbsp;</p><?php /* <p style="margin-top: 0; margin-bottom: 0;border-bottom:2px solid #444444;">&nbsp;<br/><?php _l('parkinfo'); ?></p>
	<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
		  <p style="margin-top: 0; margin-bottom: 0"><label for="fp504"><strong>
	<font color="#000000"><?php _l('contact_name'); ?></font></strong>
	</label><input type="text" name="pname" size="52" id="fp504"/></p>
	<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
	<p style="margin-top: 0; margin-bottom: 0;"><label for="fp245"><strong>
	<font color="#000000"><?php _l('contact_address'); ?></font></strong>
	</label><input type="text" name="paddress" size="52" id="fp245"/></p>
		  <p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
          <p style="margin-top: 0; margin-bottom: 0"><strong><font color="#000000"><input type="radio" name="ageaccept" value="allages" checked="checked" id="allages"/><label for="allages"> <?php _l('allages'); ?></label>&nbsp;&nbsp;&nbsp;<input type="radio" name="ageaccept" value="fiftyfive" id="fiftyfive"/><label for="fiftyfive"> <?php _l('fiftyfive'); ?></label>&nbsp;&nbsp;&nbsp;<?php if(defined('IS_MOBILE')){echo("<br style=\"clear:both;\"/>");} ?><input type="checkbox" name="pets" value="1" id="petsyes"/><label for="petsyes"> <?php _l('petsallowed'); ?></label>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="gated" value="1" id="gatedyes"/><label for="gatedyes"> <?php _l('gated'); ?></label>&nbsp;&nbsp;&nbsp;<?php if(defined('IS_MOBILE')){echo("<br style=\"clear:both;\"/>");} ?><input type="checkbox" name="pool" value="1" id="poolyes"/><label for="poolyes"> <?php _l('pool'); ?></label>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="rec" value="1" id="recyes"/><label for="recyes"> <?php _l('rec'); ?></label></font></strong></p>
		  <p style="margin-top: 0; margin-bottom: 0">&nbsp;</p> */ ?><p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
          <p style="margin-top: 0; margin-bottom: 0; vertical-align:top;" valign="top"><label for="fp8" style="vertical-align:top;"><strong>
          <font color="#000000" style="vertical-align:top;"><?php _l('contact_comments'); ?></font></strong>
          </label><textarea rows="8" name="comments" cols="57" id="fp8"></textarea></p>
		  <?php if(s('captchaenable') == "1"){ ?><p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
		  <p style="margin-top: 0; margin-bottom: 0" align="center">
				<?php require_once('recaptchalib.php');echo recaptcha_get_html(s('captchapublic')); ?>
		  </p><?php } ?>
          <p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
          <p style="margin-top: 0; margin-bottom: 0" align="center">
          <input type="submit" value="<?php _l('contact_submit'); ?>"/><?php if(defined('IS_MOBILE')){echo("&nbsp; &nbsp; &nbsp;");} ?><input type="reset" value="<?php _l('contact_reset'); ?>"/></p>
        </form>
</div>
