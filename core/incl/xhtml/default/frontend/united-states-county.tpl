{extends file="master.tpl"}
{block "pagedir"}<li id="page-direction">{if $category == "pros"}Select a sub-category:{else}Select a city below for spaces and homes or browse professionals by clicking above{/if}</li>{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box">
		{if $page.success == "no"}
			<div><h1>This county does exist</h1></div>
		{else}
		<h1><a href="{'domain'|s}/state/{$page.state.abbr}">{$page.state.title}</a> &raquo; {$page.county.title}{if $page.county.hidesuffix != 1} {if $page.state.suffix != ''}{$page.state.suffix}{else}{'county'|l}{/if}{/if}</h1>
			{foreach from=$page.cities item=city}
				<div class="city-box"><a href="{'domain'|s}/locale/{$page.state.abbr}/{$page.county.name}/{$city.name}"{if $city.commcount == 0 && $city.procount == 0} class="light"{/if}><span class="city-title">{$city.title}</span>
				<p><span title="Homes" class="tidbit-homes">{$city.homecount}</span>
				<span title="Spaces" class="tidbit-lots">{$city.lotcount}</span>
				<span title="Professionals" class="tidbit-pros">{$city.procount}</span></p></a>
				</div>
				{if $city.tick == $page.adsstart && $page.adspresent}
				<div class="clearfix"></div>
				{include "ads-four-square.tpl"}
				{/if}
			{foreachelse}
				<div class="wblock g6 badmessage">
				<p>No data available for the selected area</p>
				<br>
				<p>Please try again later</p>
				</div>
			{/foreach}
			<div class="clearfix"></div>
			{if $page.cities|@count < $page.adsstart && $page.adspresent}
			{include "ads-four-square.tpl"}
			{/if}
		{/if}
	</div>
</div>
</section>
{/block}
{block "endscripts"}

{/block}
