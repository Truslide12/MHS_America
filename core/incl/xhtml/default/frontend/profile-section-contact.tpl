<div id="profile-info">
			<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<strong>Address</strong>
				<ul>
				{if $page.data.address || $page.editmode}<li>{if $page.editmode}Street Address<br><input type="text" name="data[address]" value="{$page.data.address}">{else}{$page.data.address}{/if}</li>{/if}
				<li>{if $page.editmode}
				State<br><input id="bsnsstate" name="state"><br>
				County<br><input id="bsnscounty" name="county"><br>
				City<br><input id="bsnscity" name="city"><br>
				Postal Code<br><input type="text" name="data[zipcode]" value="{$page.data.zipcode}">{else}<span itemprop="addressLocality">{$page.city.title}</span>, <span itemprop="addressRegion">{$page.state.abbr|strtoupper}</span>{if $page.data.zipcode} <span itemprop="postalCode">{$page.data.zipcode}</span>{/if}{/if}</li>
				</ul>
			</div>
			<div{if $page.editmode} style="width:344px;"{/if}>
				<strong>Office Hours</strong>
				<ul>{if $page.editmode}
					{include "profile-section-contact-edithours.tpl"}
				{else}
{if $page.hourspresent}{foreach from=$page.profile.hours item=trange}{if $trange.start != 7}				<li><strong>{if $trange.end == 0}{$page.longdays[$trange.start]}{else}{$page.shortdays[$trange.start]} - {$page.shortdays[$trange.end]}{/if}</strong> <span>{if $trange.time == 0}Closed{else}{$trange.time} - {$trange.endtime}{/if}</span></li>
{/if}{/foreach}{else}<span style="font-style:italic;">No office hours available</span>{/if}
{/if}
				</ul>
			</div>
			{if !$page.editmode}<div class="header-carry">
				<strong>&nbsp;</strong>
				<ul>
{if $page.hourspresent}{foreach from=$page.profile.hours item=trange}{if $trange.start == 7}				<li><strong>{$page.longdays[$trange.start]}{if $trange.end} - {$page.shortdays[$trange.end]}{/if}</strong> <span>{if $trange.time == 0}Closed{else}{$trange.time} - {$trange.endtime}{/if}</span></li>
{/if}{/foreach}{/if}
				<li>&nbsp;</li>
				</ul>
			</div>{/if}
			<div>
				<strong>Contact Details</strong>
				<ul>{if $page.data.manager || $page.editmode}
				<li>{if $page.editmode}Manager Name<br><input type="text" name="manager" value="{$page.data.manager}">{else}Mgr. {$page.data.manager}{/if}</li>{/if}
				<li>{if $page.editmode}Phone<br><input type="text" name="phone" value="{$page.data.phone}">{else}<strong>Phone</strong> <span itemprop="telephone" class="c">{if $page.data.phone}{$page.data.phone}{else}&mdash;{/if}</span>{/if}</li>
				<li>{if $page.editmode}Fax<br><input type="text" name="fax" value="{$page.data.fax}">{else}<strong>Fax</strong> <span itemprop="fax" class="c">{if $page.data.fax}{$page.data.fax}{else}&mdash;{/if}</span>{/if}</li>{if $page.data.email || $page.editmode}
				<li>{if $page.editmode}Email<br><input type="text" name="email" value="{$page.data.email}">{else}<strong>Email</strong> <span class="c"><a href="/{$page.profile.prof_id}/{$page.profile.username}/email">Send Message</a></span>{/if}</li>{/if}{if $page.data.website || $page.editmode}
				<li>{if $page.editmode}Website<br><input type="text" name="website" value="{$page.data.website}">{else}<strong>Website</strong> <span class="c"><a href="{$page.data.website}">Homepage</a></span>{/if}</li>{/if}
				</ul>
			</div>
			<p class="clearfix"></p>
		</div>