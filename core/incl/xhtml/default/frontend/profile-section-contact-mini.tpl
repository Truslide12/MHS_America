<div id="profile-info">
			<div>
				<strong>Address</strong>
				<ul>
				{if $page.data.address}<li>{$page.data.address}</li>{/if}
				<li>{if $page.editmode}State<br>
				<input id="bsnsstate" name="state"><br>
				County<br>
				<input id="bsnscounty" name="county"><br>
				City<br>
				<input id="bsnscity" name="city">{else}{$page.city.title}, {$page.state.abbr|strtoupper}{if $page.data.zipcode} {$page.data.zipcode}{/if}{/if}</li>
				</ul>
			</div>
			<div>
				<strong>Contact Details</strong>
				<ul>{if $page.data.manager && 1 == 2}
				<li>{$page.data.manager}</li>{/if}
				<li><strong>Phone</strong> <span itemprop="telephone" class="c">{if $page.data.phone}{$page.data.phone}{else}&mdash;{/if}</span></li>
				<li><strong>Fax</strong> <span itemprop="fax" class="c">{if $page.data.fax}{$page.data.fax}{else}&mdash;{/if}</span></li>{if $page.data.email}
				<li><strong>Email</strong> <span class="c"><a href="/email/community/{$profile.id}">Send Message</a></span></li>{/if}
				</ul>
			</div>
			<p class="clearfix"></p>
		</div>