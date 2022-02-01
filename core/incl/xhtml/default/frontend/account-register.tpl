{extends file="master.tpl"}
{block "menubar"}{/block}
{block "pagedir"}{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box">
		<h1>Register an account</h1>
		{$page.errors}
		<div id="register-form">
			<form name='newUser' action='/account/register' method='POST'>
			<label for="reg_username">User Name:<br/><small>(no capitals, no spaces ...numbers okay)</small><br/><input type="text" id="reg_username" name="username"></label>
			<label for="reg_display">Display Name:<br/><small>(Full Legal Name if registering business)</small><br/><input type="text" id="reg_display" name="displayname"></label>
			<label for="reg_password">Password:<br/><input type="password" id="reg_password" name="password"></label>
			<label for="reg_confirm">Confirm Password:<br/><input type="password" id="reg_confirm" name="passwordc"></label>
			<label for="reg_email">Email:<br/><input type="text" id="reg_email" name="email"></label>
			<div id="captcha-box">Security Code:<br/><img src="/captcha.php"></div>
			<label for="reg_captcha">Enter Security Code:<br/><input type="text" id="reg_captcha" name="captcha"></label>
			<p><strong>Note:</strong> This form is for registering a personal account, unlocking features such as bookmarking homes, communities, etc.</p><p>If you are attempting to register as a business, please create an account under your own name and you will be able to establish a business account once logged in. Because of legal and security issues, we do not allow unregistered users to create a business account alone.</p>
			<p>By registering an account, you agree to abide by our <a href="/legal">terms of use</a>.</p>
			<div id="login-button"><input type="submit" value="Register" class="zocial primary"></div>
		</form>
	  </div>
	</div>
</div>
</section>
{/block}
{block "endscripts"}

{/block}
