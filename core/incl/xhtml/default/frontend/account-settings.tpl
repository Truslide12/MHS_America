{extends file="master.tpl"}
{block "headerinclude"}<script type="text/javascript" href="//code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="/_/css/dashboard.css" type="text/css">
{include "account-company-colors.tpl"}{/block}
{block "menubar"}{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box" id="dashboard">
		{if $page.company.data.dashboard_banner_backcolor != ""}<div id="{$page.company.name}-banner"></div>{/if}
		<div class="mini-menu"><a href="/account/logout">Log out</a></div>
		{if $page.is_company_user}
		<a href="/account"><img src="{$page.company.data.logo}"></a>
		{else}<h1><a href="/account">Dashboard</a> &raquo; Settings</h1>
		<h2>Aloha, {'display_name'|u}!</h2>{/if}
		<div class="dashboard-box" id="settings-form">
			<aside class="right-sidebar">
				<h2>Account</h2>
				<ul id="action-list">
				<li><a href="/account">Return to dashboard...</a></li>
				</ul>
			</aside>
			<form name="settings" action="/account/settings" method="POST">
			<span class="r"><a href="#" class="zocial primary" style="margin-right:1em;" onclick="$('#settingsSubmit').click();">Save Changes</a><input type="submit" id="settingsSubmit" value="Save Changes" style="display:none;"></span><h1>Personal account settings</h1>
			<section>
					<hr>
					<h3>Your username</h3>
					<div class="pp">
						<label>Username<br><input type="text" class="textbox" disabled="disabled" value="{'user_name'|u}" style="background:#efefef;cursor:default;"></label>
					</div>
					<hr>
					<h3>Change associated email</h3>
					<div class="pp">
						<label for="set_email">Email address<br><input type="text"  name="email" id="set_email" value="{'email'|u}" class="textbox"></label>
					</div>
					<hr>
					<h3>Change password</h3>
					<div class="pp">
						<label for="set_password">Current Password<br><input type="password" name="password" id="set_password" class="textbox"></label><br>
						<label for="set_passwordc">New Password<br><input type="password" name="passwordc" id="set_passwordc" class="textbox"></label><br>
						<label for="set_passwordcheck">Confirm Password<br><input type="password" name="passwordcheck" id="set_passwordcheck" class="textbox"></label>
					</div>
					<hr>
					<h3>Avatar</h3>
					<div class="pp">
						<p style="float:right; width:269px;padding:1em;"><small>To keep the small things simple and secure, avatars on the site are provided through the gravatar system.<br><a href="http://www.gravatar.com" target="_blank">more info</a></small></p>
						<img src="{'email'|u|get_gravatar:175}&d=mm" alt="avatar">
					</div>
					<hr>
					<div style="padding:1em 0;">
						<input type="reset" id="settingsReset" style="display:none;" value="Reset Form">
						<a href="#" class="zocial secondary" onclick="$('#settingsReset').click();">Reset Form</a>
						<span class="r"><a href="#" class="zocial primary" onclick="$('#settingsSubmit').click();">Save Changes</a></span>
					</div>
			</section>
			</form>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</section>
{/block}
{block "endscripts"}

{/block}