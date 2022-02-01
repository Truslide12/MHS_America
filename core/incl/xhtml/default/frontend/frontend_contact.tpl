{extends file="master.tpl"}
{block "title"}Contact {'title'|s}{/block}
{block "pagedir"}{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box">
		<h1>Contact Us</h1><br>
		<div id="contactextras" style="display:none;">
		<div class="g4"><div class="wblock">
			<strong>Phone Contact</strong><br>&nbsp;
			<p>(805) 419-5998</p>
		</div></div>
		<div class="g4"><div class="wblock">
			<strong>Mailing Address</strong><br>&nbsp;
			<p>34084 County Line Rd<br>PMB 121<br>Yucaipa, CA 92399</p>
		</div></div>
		<div class="g4"><div class="wblock plist">
			<strong>Emails</strong><br>&nbsp;
			<p>Webmaster<br><span>webmaster@mhsamerica.com</span></p>
			<p>Business Partnership<br><span>b2b@mhsamerica.com</span></p>
			<p>Misconduct<br><span>mods@mhsamerica.com</span></p>
		</div></div>
		<div class="clearfix"></div>
		<hr></div>
		<div class="g12">
			Use the following form to contact us regarding common areas of interest. If your issue is not listed in the dropdown below or for whatever valid reason, deems necessary, please contact us <a href="#" onclick="$('#contactextras').slideDown();">more directly</a>. We will not respond to common issues by individual correspondence, as such issues should be dealt with on a fair basis.
		</div>
		<div class="g6">
			<label for="fullname">Full Name</label> <input type="text" id="fullname" name="fullname">
		</div>
		<div class="g6">
			<label for="email">Email Address</label> <input type="text" id="email" name="email"><br>
		</div>
		<div class="g6">
			<label for="message">Message</label>
			<textarea name="message" style="width:80%;min-width:80%;max-width:80%;min-height:129px;max-height:400px;background:#fff;"></textarea>
		</div>
		<div class="g6">
			<label for="hello">Subject Area</label>
			<select id="subjectDropdown" name="subject">
				<option value="technical">Technical Issues</option>
				<option value="account">Account Assistance</option>
				<option value="support">Customer Service</option>
				<option value="general">General Concerns</option>
			</select>
			<br>&nbsp;<br>
			<span class="red">All fields are required.</span>
			<input type="submit" class="zocial primary" value="Submit">
		</div>
	</div>
</div>
</section>
{/block}
{block "endscripts"}
<style type="text/css">{literal}
	.content-box input[type="text"] {
		background:#fff;
		padding:0.6em;
		font-size:114%;
		line-height:1em;
		vertical-align:middle;
		width:80%;
	}
	.content-box label {
		font-size:120%;
		line-height:2.2em;
		padding:0 0.6em;
		vertical-align:middle;
		display:block;
	}
	span.red {
		font-size:120%;
		color:#c00;
		line-height:2.2em;
		margin-right:1em;
	}
	.k-widget {
		font-size:120%;
	}
	.plist p {padding:0 0 1em;}
	.plist p span {font-size:80%;}
{/literal}</style>
<script type="text/javascript">
	$(function(){
		$('#subjectDropdown').kendoDropDownList();
	});
</script>
{/block}
