{extends file="master.tpl"}
{block "menubar"}{/block}
{block "pagedir"}{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box">
		<h1>Log into your account</h1>
		{$page.errors}
		<div id="login-form">
		<form action="/account/login" method="POST">
		  <label for="login_username">Username:<br/><input type="text" id="login_username" name="username" placeholder="Enter your username..." tabindex="1"></label>
		  <label for="login_password">Password:<br/><input type="password" id="login_password" name="password" placeholder="...and password..." tabindex="2"></label>
		  <div id="login-button">
			<a href="/account/register" tabindex="4" class="zocial secondary">Register</a>
			<input type="submit" tabindex="3" value="Login" class="zocial primary">
		  </div>
		</form>
		</div>
	</div>
</div>
</section>
{/block}
{block "endscripts"}

{/block}
