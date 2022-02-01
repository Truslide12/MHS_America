{extends file="master.tpl"}
{block "pagedir"}{/block}
{block "content"}
<section id="us-county">
	<p id="watermark">{$page.city.title|@strtolower}</p>
<div class="county-content">
	<div class="content-box">
		<h1><a href="{'domain'|s}/state/{$page.state.abbr}/county/{$page.county.name}">{$page.county.title}{if $page.county.hidesuffix != 1} {if $page.state.suffix != ''}{$page.state.suffix}{else}{'county'|l}{/if}{/if}, {$page.state.title}</a> &raquo; {$page.city.title}</h1>
{if $category == "pros"}
		{foreach from=$page.pros item=pro}
			<section class="community{if $pro.plan.pro_profile == 1} premium-basic{/if}">
{if 1==2}				<a href="{'domain'|s}/{$pro.profid}/{$pro.username}"><img src="http://bdbud.com/wp-content/uploads/2009/11/5silver-spur-rv-park-palmdesert.jpg" class="community-image"/></a>{/if}
				<header>{if $pro.plan.pro_profile == 1}<a href="#{if 1==2}/account/register{/if}" title="Premium Partner" class="plan"></a>{/if}<a href="{'domain'|s}/{$pro.profid}/{$pro.username}">{$pro.title}</a><a href="#" class="push"></a></header>
				<div class="image-box">
					<p><a href="{'domain'|s}/{$pro.profid}/{$pro.username}"><img src="{$park.cover}" alt="{$pro.title}"></a></p>
				</div>
				<p class="list-item"><span>{$pro.kudos_count}</span><strong>Kudos</strong></p>
				<p class="props-box">&nbsp;</p>
			</section>
		{foreachelse}
			<h3>Nothing to display here! D:</h3>
		{/foreach}
{else}
		{foreach from=$page.parks item=park}
			<section class="community{if $park.plan.pro_profile == 1} premium-basic{/if}">
{if 1==2}				<a href="{'domain'|s}/{$park.profid}/{$park.username}"><img src="http://bdbud.com/wp-content/uploads/2009/11/5silver-spur-rv-park-palmdesert.jpg" class="community-image"/></a>{/if}
				<header>{if $park.plan.pro_profile == 1}<a href="#{if 1==2}/account/register{/if}" title="Premium Partner" class="plan"></a>{/if}<a href="{'domain'|s}/{$park.profid}/{$park.username}">{$park.title}</a><a href="#" class="push"></a></header>
				<div class="image-box">
					<p><a href="{'domain'|s}/{$park.profid}/{$park.username}"><img src="{$park.cover}" alt="{$park.title}"></a></p>
				</div>
				{if $park.plan.com_homes == 1}<p class="list-item"><span>{$park.home_count}</span><strong>Homes</strong></p>{/if}
				{if $park.plan.com_spaces == 1}<p class="list-item"><span>{$park.space_count}</span><strong>Spaces</strong></p>{/if}
				<p class="list-item"><span>{$park.kudos_count}</span><strong>Kudos</strong></p>
				<p class="props-box">&nbsp;</p>
			</section>
		{foreachelse}
			<div class="wblock g6 badmessage">
				<p>No data available for the selected area</p>
				<br>
				<p>Please try again later</p>
			</div>
		{/foreach}
{/if}{* End of category check *}
		<div class="clearfix"></div>
	</div>
</div>
</section>
{/block}
{block "endscripts"}

{/block}
