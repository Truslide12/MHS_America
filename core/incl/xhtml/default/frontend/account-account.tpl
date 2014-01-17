{extends file="master.tpl"}
{block "headerinclude"}<script type="text/javascript" href="//code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="/_/css/dashboard.css" type="text/css">
{include "account-company-colors.tpl"}{/block}
{block "menubar"}{/block}
{block "pagedir"}{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box" id="dashboard">
		{if $page.company.data.dashboard_banner_backcolor != ""}<div id="{$page.company.name}-banner"></div>{/if}
		<div class="mini-menu"><a href="/account/settings">Settings</a> | <a href="/account/logout">Log out</a></div>
		{if $page.is_company_user}
		<img src="{$page.company.data.logo}">
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
						<li><a href="/account/profile">{if $page.profiles}Manage business profiles{else}Establish a business profile{/if}</a></li>
						<li><a href="/account/ads">Manage advertising</a></li>
						<li><a href="/account/billing">Manage billing</a></li>
						
					</ul>
				</div>
			</aside>
			<h1>Bookmarks</h1>
			<section>
				<h2>Homes</h2>
				<p>
					{foreach from=$page.homebooks item=hbook}
						
					{foreachelse}
						<p align="center">No bookmarks to list here ;-;</p>
					{/foreach}
				</p>
			</section>
			<section>
				<h2>Spaces</h2>
				<p>
					{foreach from=$page.spacebooks item=sbook}
						
					{foreachelse}
						<p align="center">There's nothing to display ;-;</p>
					{/foreach}
				</p>
			</section>
			&nbsp;
			<h1>Watched Communities</h1>
			<section>
				<div{if $page.combooks} id="comm-list"{/if}>
					{foreach from=$page.combooks item=cbook}
						<p>
							<a href="{'domain'|s}/{$cbook.profile.id}/{$cbook.profile.username}/unwatch?return=account" class="r"><small>Unwatch</small></a>
							<a href="{'domain'|s}/{$cbook.profile.id}/{$cbook.profile.username}">{$cbook.title}</a>
							{if 1==2}<br>
							<span>{if $cbook.new.homes > 0}{$cbook.new.homes} homes{elseif $cbook.new.homes = -1}No homes{/if}</span>{/if}
						</p>
					{foreachelse}
						<p align="center">You're not watching any communities ;-;</p>
					{/foreach}
				</div>
			</section>
			&nbsp;
			<h1>Watched Professionals</h1>
			<section>
				<div{if $page.probooks} id="comm-list"{/if}>
					{foreach from=$page.probooks item=pbook}
						<p><a href="{'domain'|s}/{$pbook.profile.id}/{$pbook.profile.username}/unwatch?return=account" class="r"><small>Unwatch</small></a><a href="{'domain'|s}/{$pbook.profile.id}/{$pbook.profile.username}">{$pbook.title}</a></p>
					{foreachelse}
						<p align="center">You're not watching anybody ;-;</p>
					{/foreach}
				</div>
			</section>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</section>
{/block}
{block "endscripts"}

{/block}
