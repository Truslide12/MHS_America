{extends "order-master.tpl"}
{block "ordercontent"}
<h1>Payment details</h1>
<div>
	<div class="profile-card">
		<header>{$page.profile.data.title}</header>
		{if $page.profile.data.cover}<div class="image"><img src="{$page.profile.data.cover}" width="228" height="80" alt=""></div>{/if}
		<footer><a class="zocial secondary" href="/order/payment?pid={$page.profile.id}&plan={$page.plan}">Choose Profile</a>&nbsp;
		<a class="zocial primary" href="/{$page.profile.id}/{$page.profile.username}" target="_blank">View Profile</a></footer>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
</div>
{/block}