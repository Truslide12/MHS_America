{extends "order-master.tpl"}
{block "ordercontent"}
<div class="grid">
	<div class="g4">
		<h1>Login</h1>
		<form method="POST" action="/account/login">
			<input type="hidden" name="rqst" value="global">
			<label for="login_username">Username:<br><input type="text" id="login_username" name="username"></label>
			<label for="login_password">Password:<br><input type="password" id="login_password" name="password"></label>
			<input type="submit" class="zocial primary" value="Login">
		</form>
	</div>
	<div class="g8" id="register">
		<h1>Register</h1>
		<form method="POST" action="/account/register">
			<label for="reg_username" class="full">User Name: <small>(no capitals, no spaces ...numbers okay)</small><br><input type="text" id="reg_username" name="username" tabindex="1"></label>
			<label for="reg_last" class="r">Last Name:<br><input type="text" id="reg_last" name="lastname" tabindex="3"></label>
			<label for="reg_first">First Name:<br><input type="text" id="reg_first" name="firstname" tabindex="2"></label>
			<label for="reg_first" class="full full-box">Company Name:<br><input type="text" id="reg_company" name="company" tabindex="4"></label>
			<label for="reg_email" class="full">Email:<br><input type="text" id="reg_email" name="email" tabindex="5"></label>
			<label for="reg_confirm" class="r">Confirm Password:<br><input type="password" id="reg_confirm" name="passwordc" tabindex="7"></label>
			<label for="reg_password">Password:<br><input type="password" id="reg_password" name="password" tabindex="6"></label>
			<label for="reg_captcha" class="r">Enter Security Code:<br><input type="text" id="reg_captcha" name="captcha" tabindex="8"></label>
			<div id="captcha-box">Security Code:<br><img src="/captcha.php"></div>
			<input type="submit" value="Register" class="zocial primary" tabindex="9">
		</form>
	</div>
	<div class="clearfix"></div>
</div>
{/block}