<section class="h3-list premium-box">
				<header>Homes Available{if $page.homes && !$page.editmode} ({$page.home_count}){/if}</header>
				{if $page.editmode}<a href="{'domain'|s}/{$page.profile.prof_id}/{$page.profile.username}/edithomes" class="zocial primary" target="_blank">Manage Listed Homes</a> {if $page.home_count == 0}No homes{elseif $page.home_count == 1}1 home{else}{$page.home_count} homes{/if}{else}{if $page.homes}
					{foreach from=$page.homes item=home}
					<div class="homeh3"><span class="r red">${$home.price}</span><a href="/home/{$home.id|alphaID}">{$home.year} {$home.brand}</a> - <small>{$home.width}&times;{$home.length}</small></div>
					{foreachelse}
					<p>Error</p>
					{/foreach}
				{else}
					<div><h3>No homes listed</h3></div>
				{/if}{/if}
			</section>