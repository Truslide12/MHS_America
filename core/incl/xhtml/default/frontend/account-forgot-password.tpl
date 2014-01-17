{extends file="master.tpl"}
{block "menubar"}{/block}
{block "pagedir"}{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box">
		<h1>Recover your account</h1>
		{$page.errors}
		<div id="login-form">
		<form name="newLostPass" action="/account/forgot-password" method="POST">
		  <label for="login_username">Username:<br/><input type="text" id="login_username" name="username" placeholder="Enter your username..." tabindex="1"></label>
		  <label for="login_password">Email:<br/><input type="text" id="login_email" name="email" placeholder="...and email..." tabindex="2"></label>
		  <div id="login-button">
			<input type="submit" tabindex="3" value="Recover" class="zocial primary">
		  </div>
		</form>
		</div>
	</div>
</div>
</section>
{/block}
{block "endscripts"}

{/block}
