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
		<div class="mini-menu"><a href="/account/settings">Settings</a> | <a href="/account/logout">Log out</a></div>
		{if $page.is_company_user}
		<a href="/account"><img src="{$page.company.data.logo}"></a>
		{else}<h1>Dashboard</h1>
		<h2>Aloha, {'display_name'|u}!</h2>{/if}
		<div class="dashboard-box">
			<aside class="right-sidebar">
				<div class="account-box">
					<span class="r"><img src="http://gravatar.com/avatar/{'email'|u|md5}?s=40&d=mm"></span>
					<h2><strong><span>{'display_name'|u}</span></strong></h2>
					<ul class="action-list">
						<li><a href="/account/settings">Change settings</a></li>
						<li><hr></li>
						<li><a href="/account">Return to dashboard...</a></li>
						<li><hr></li>
						<li><a href="/account/profile">{if $page.profiles}Manage business profiles{else}Establish a business profile{/if}</a></li>
						<li><a href="/account/billing">Manage billing</a></li>
						
					</ul>
				</div>
			</aside>
			<h1>Current campaigns</h1>
			<section>
				There will be ad campaigns showing here! :D
			</section>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</section>
{/block}
{block "endscripts"}

{/block}
