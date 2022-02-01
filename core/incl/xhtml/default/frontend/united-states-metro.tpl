{extends file="master.tpl"}
{block "pagedir"}<li id="page-direction">{if $category == "pros"}Select a sub-category:{else}Select a city below for spaces and homes or browse professionals by clicking above{/if}</li>{/block}
{block "headerinclude"}<link rel="stylesheet" href="/_/css/counties.css" media="all">{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box">
		{if $page.success == "no"}
			<div><h1>This area is not established on our site</h1></div>
		{else}
		<h1>{$page.title}</h1>
		{if $category == "pros"}
			{if $page.selec}
				CATEGORY
			{else}
				{foreach from=$page.categories item=cat}
					<a class="probox pro_{$cat.name}" href="{'domain'|s}/region/{$page.metro.name}/pros/{$cat.name}">{$cat.langname_plural|l}</a>
				{/foreach}
			{/if}
			<div class="clearfix"></div>
		{else}
			{foreach from=$page.cities item=city}
				<div class="city-box"><a href="{'domain'|s}/locale/{$city.stateabbr}/{$city.countyname}/{$city.name}"{if $city.commcount == 0 && $city.procount == 0} class="light"{/if}><span class="city-title">{$city.title}</span>
				<p><span title="Homes" class="tidbit-homes">{$city.homecount}</span>
				<span title="Spaces" class="tidbit-lots">{$city.lotcount}</span>
				<span title="Professionals" class="tidbit-pros">{$city.procount}</span></p></a>
				</div>
				{if $city.tick == $page.adsstart && $page.adspresent}
				<div class="clearfix"></div>
				{include "ads-four-square.tpl"}
				{/if}
			{foreachelse}
				<div><h1>This area is currently not covered by our site.</h1></div>
			{/foreach}
			<div class="clearfix"></div>
			{if $page.cities|@count < $page.adsstart && $page.adspresent}
			{include "ads-four-square.tpl"}
			{/if}
			{/if}{* END OF IF PRO OR NOT *}
		{/if}{* END OF IF SUCCESS *}
	</div>
</div>
</section>
{/block}
{block "endscripts"}

{/block}
