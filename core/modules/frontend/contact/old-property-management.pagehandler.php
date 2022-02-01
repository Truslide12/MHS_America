<?php
if(!$_GET['home']){$homeset = false;}else{$homeset = true;
$home = Database::summon()->select_one("*")->from("homes")->where("id = ".$_GET['home'])->limit(1)->execute('fetchArray');
$home['realtor_info'] = Database::summon()->select_one()->from("users")->where("id = ".$home['realtor'])->execute('fetchArray');
if(!$home['id']){$homeset = false;}
if($home['park_id']) {$park = Database::summon()->select_one()->from("parks")->where("id = ".$home['park_id'])->execute('fetchArray');}
}
if($_GET['done'] == 1 && $homeset == true){
	if($_GET['error'] != ""){
		$success = "<p style=\"border:1px solid #CC4400;padding:1em;background-color:#FF9999;color:#000000;text-align:center;\">".$form_errors[$_GET['error']]."</p>";
	}else{
		//$success = "<p style=\"border:1px solid #00CC44;padding:1em;background-color:#99FF99;color:#000000;\">".$l['success']."</p>";
		if(is_numeric($_GET['home']) && $_GET['home'] > 0){
			if(gethome($_GET['home']) != false){
				header("Location: ".s('domain').$langquery."home-details?id=".$_GET['home']."&done=1");
				exit;
			}
		}else{
			//header("Location: ".s('domain').$langquery."buy?done=1");
			//exit;
		}
	}
}else{
	$success = "";
}
$homebox = "";


if($homeset == true) {
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
<div class="contblock lefty" width="20%" style="width:20% !important;text-align:center;">
<img src="/<?php _s('admin_dir'); ?>/inc/uploads/homes/<?php echo $home['id'] ?>/<?php echo $home['defaultpic'] ?>" width="100%" style="border:2px solid #000000;border-radius:6px;-moz-border-radius:6px;-webkit-border-radius:6px;"/><br/><h2><?php echo($l['homeinquestion']); ?></h2>
</div>
<?php } ?>
<div id="contactform" class="" style="display:block;width:530px;margin-left:192px;"><h1 style="font-size:180%;"><?php echo $l['homeinquiry']; ?></h1>
<br class="clr"/>
<?php if($success != "") echo $success; ?>
<form method="post" id="contactform" action="mail.php" onSubmit="">
	<input type="hidden" name="lang" value="<?php echo($lang); ?>"/>
	<input type="hidden" name="buy" value="1"/>
	<p style="margin-top: 0; margin-bottom: 0"><label for="fp1"><strong>
	<font color="#000000"><?php echo $l['contact_name']; ?></font></strong>
	</label><input type="text" name="name" size="52" id="fp1"/></p>
	<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
	<p style="margin-top: 0; margin-bottom: 0"><label for="fp2"><strong>
	<font color="#000000"><?php echo $l['contact_address']; ?></font></strong>
	</label><input type="text" name="address" size="52" id="fp2"/></p>
	<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
          <p style="margin-top: 0; margin-bottom: 0"><label for="fp7"><strong>
          <font color="#000000"><?php echo $l['contact_city']; ?></font></strong>
          </label><input type="text" name="city" size="25" id="fp7"/>&nbsp;&nbsp;
          <strong><font color="#000000"><?php echo $l['contact_state']; ?></font></strong>
          <font color="#000000"><select size="1" name="state">
		  <?php foreach(Locale::summon()->subregions() as $key => $val) {
					echo("<option value=\"".$key."\"".(($key == s('region')) ? " selected" : "").">".$val."</option>");
				}
		  ?>
          </select></font></p>
          <p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
          <p style="margin-top: 0; margin-bottom: 0"><label for="fp3"><strong>
          <font color="#000000"><?php _l('contact_email'); ?></font></strong>
          </label><input type="text" name="email" size="35" id="fp3"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <label for="fp21"><strong><font color="#000000"><?php _l('contact_zipcode'); ?></font></strong>
          </label><input type="text" name="zipcode" size="6" id="fp21"/></p>
          <p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
          <p style="margin-top: 0; margin-bottom: 0"><label for="fp9"><strong>
          <font color="#000000"><?php _l('contact_phone'); ?></font></strong>
          </label><input type="text" name="phone" size="20" id="fp9"/><strong><font color="#000000">&nbsp;&nbsp;&nbsp;<input type="radio" name="callemail" value="call" checked="checked" id="callme"/><label for="callme"> <?php _l('contact_callme'); ?></label>&nbsp;&nbsp;&nbsp;<input type="radio" name="callemail" value="email" id="emailme"/><label for="emailme"> <?php _l('contact_emailme'); ?></label>&nbsp;&nbsp;&nbsp;<input type="radio" name="callemail" value="either" id="eitherme"/><label for="eitherme"> <?php _l('contact_either'); ?></label></font></strong></p>
          <?php if(!is_array($home)) { ?><p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
          <p style="margin-top: 0; margin-bottom: 0"><label for="fp10"><strong>
          <font color="#000000"><?php _l('contact_locpref'); ?>&nbsp; &nbsp;</font></strong>
          </label><input type="text" name="locpref" size="25" id="fp10"/>&nbsp; &nbsp;<label for="fp24"><strong>
          <font color="#000000"><?php _l('price'); ?>&nbsp; &nbsp;</font></strong>
          </label><input type="text" name="price" size="11" id="fp24"/></p>
          <?php } ?>
		  <input type="hidden" name="home" id="home" value="<?php echo($homeid); ?>"/>
		  <p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
          <p style="margin-top: 0; margin-bottom: 0; vertical-align:top;" valign="top"><label for="fp8" style="vertical-align:top;"><strong>
          <font color="#000000" style="vertical-align:top;"><?php _l('contact_comments'); ?></font></strong>
          </label><textarea rows="8" name="comments" cols="57" id="fp8"></textarea></p>
		  <?php if(s('captchaenable') == "1"){ ?><p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
		  <p style="margin-top: 0; margin-bottom: 0" align="center">
				<?php require_once('recaptchalib.php');echo recaptcha_get_html(s('captchapublic')); ?>
		  </p><?php } ?>
          <p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
          <p style="margin-top: 0; margin-bottom: 0" align="center">
          <input type="submit" value="<?php _l('contact_submit'); ?>"/><input type="reset" value="<?php _l('contact_reset'); ?>"/></p>
        </form>
</div>
