{extends file="master_alt.tpl"}
{block "pagedir"}{/block}
{block "menubar"}{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box profile">
		{if $page.plan.pro_profile == 1}<div id="{if $page.plan_info.id == 4}premier{else}premium{/if}-tag"><a href="{'domain'|s}/account/register" title="Click for more info">{if $page.plan_info.id == 4}Premier{else}Premium{/if}<br/>Partner</a></div>{/if}<h1>{$page.profile.title}<small><a href="/locale/{$page.state.abbr}/{$page.county.name}/{$page.city.name}">{$page.city.title}, {$page.state.title}</a></small></h1>
		{if $page.data.cover && $page.data.cover_position && $page.plan.misc_banner == 1}<div id="head-banner"></div>
		<style>{literal}
			#head-banner {
				background-image:url({/literal}{$page.data.cover}{literal});
				background-position:{/literal}{$page.data.cover_position}{literal};
				background-repeat:no-repeat;
				box-shadow:0 0 10px rgba(224,224,224,0.65) inset;
			}{/literal}
		</style>{/if}
		{if $isUserLoggedIn}<div id="profile-buttonset{if $page.data.cover && $page.data.cover_position && $page.plan.misc_banner == 1}{else}-nobanner{/if}"><a class="zocial follow{if $page.data.cover && $page.data.cover_position && $page.plan.misc_banner == 1}-red{/if}" href="{'domain'|s}/{$page.profile.prof_id}/{$page.profile.username}/{if $page.watched}un{/if}watch">{if $page.watched}Unwatch{else}Watch{/if}</a>{if $page.plan.misc_kudos == 1} &nbsp; <a class="zocial primary{if !$page.kudoed} kudos{/if}" href="{'domain'|s}/{$page.profile.prof_id}/{$page.profile.username}/{if $page.kudoed}no{/if}kudos">{if $page.kudoed}Take Away {/if}Kudos</a>{/if}</div>{/if}
		{if $page.plan.pro_profile != 1}<div id="profile-info">
			<div>
				<strong>Address</strong>
				<ul>
				{if $page.data.address}<li>{$page.data.address}</li>{/if}
				<li>{$page.city.title}, {$page.state.abbr|strtoupper}{if $page.data.zipcode} {$page.data.zipcode}{/if}</li>
				</ul>
			</div>
			<div>
				<strong>Office Hours</strong>
				<ul>
				<li><strong>Mon - Fri</strong> <span>8:00am - 3:00pm</span></li>
				<li><strong>Saturday</strong> <span>Closed</span></li>
				</ul>
			</div>
			<div class="header-carry">
				<strong>&nbsp;</strong>
				<ul>
				<li><strong>Sunday</strong> <span>Closed</span></li>
				<li>&nbsp;</li>
				</ul>
			</div>
			<div>
				<strong>Contact Details</strong>
				<ul>{if $page.data.manager && 1 == 2}
				<li>{$page.data.manager}</li>{/if}
				<li><strong>Phone</strong> <span>{if $page.data.phone}{$page.data.phone}{else}&mdash;{/if}</span></li>
				<li><strong>Fax</strong> <span>{if $page.data.fax}{$page.data.fax}{else}&mdash;{/if}</span></li>{if $page.data.email}
				<li><strong>Email</strong> <span><a href="/email/community/{$profile.id}">Send Message</a></span></li>{/if}
				</ul>
			</div>
			<p class="clearfix"></p>
		</div>{/if}
		<div class="col2 l">{if $page.plan.pro_profile == 1}
			<section>
				<header>About {$page.profile.title}</header>
				<p>{if $page.data.description}{$page.data.description}{else}<h3><em>No description available</em></h3>{/if}</p>
			</section>{/if}
		</div>
		<div class="col2 r">{if $page.plan.pro_profile == 1}<div id="profile-info">
			<div>
				<strong>Address</strong>
				<ul>
				{if $page.data.address}<li>{$page.data.address}</li>{/if}
				<li>{$page.city.title}, {$page.state.abbr|strtoupper}{if $page.data.zipcode} {$page.data.zipcode}{/if}</li>
				</ul>
			</div>
			<div>
				<strong>Contact Details</strong>
				<ul>{if $page.data.manager && 1 == 2}
				<li>{$page.data.manager}</li>{/if}
				<li><strong>Phone</strong> <span>{if $page.data.phone}{$page.data.phone}{else}&mdash;{/if}</span></li>
				<li><strong>Fax</strong> <span>{if $page.data.fax}{$page.data.fax}{else}&mdash;{/if}</span></li>{if $page.data.email}
				<li><strong>Email</strong> <span><a href="/email/community/{$profile.id}">Send Message</a></span></li>{/if}
				</ul>
			</div>
			<p class="clearfix"></p>
		</div>{/if}
		<div class="clearfix"></div>
	</div>
</div>
</section>
{/block}
{block "endscripts"}

{/block}
