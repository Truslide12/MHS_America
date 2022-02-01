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
		<a href="/account"><img src="{$page.company.data.logo}"></a>
		{else}<h1>Dashboard</h1>
		<h2>Aloha, {'display_name'|u}!</h2>{/if}
		<div class="dashboard-box">
			<aside class="right-sidebar">
				<div class="account-box">
					<span class="r"><img src="http://gravatar.com/avatar/{'email'|u|md5}?s=40&d=mm"></span>
					<h2><strong><span>{'display_name'|u}</span></strong></h2>
					<ul class="action-list">
						{if $page.landing != 'plan' && $page.landing != 'edit'}<li><a href="/account/settings">Change settings</a></li>
						<li><hr></li>{/if}
						{if $page.landing == 'plan' || $page.landing == 'edit'}
						<li>{if $page.returnpage == 'billing'}<a href="/account/billing">Back to billing...</a>{else}<a href="/account/profile">Back to profiles...</a>{/if}</li>{/if}
						<li><a href="/account">{if $page.landing == 'wizard'}<strong>Cancel process</strong>{else}Return to dashboard...{/if}</a></li>
						{if $page.landing != 'plan' && $page.landing != 'edit'}<li><hr></li>
						<li><a href="/account/ads">Manage advertising</a></li>
						<li><a href="/account/billing">Manage billing</a></li>{/if}
					</ul>
				</div>
			</aside>
			{if $page.landing == 'manage'}<span class="r"><a href="{'domain'|s}/account/profile?action=new" class="zocial primary" style="margin-right:1em;">New Profile</a></span>{/if}<h1>{if $page.landing == 'wizard'}{if $page.businesstype}{$page.businesstype|ucfirst}{else}Business{/if} Profile Wizard{else}{$page.headline}{/if}</h1>
			<hr>
		{if $page.landing == 'wizard'}{* Twilight or Starswirl *}
			{if $page.step == 1}
			<section id="business-wizard"><form method="post" action="/account/profile?action=new">
				<input type="hidden" name="step" value="2">
				<input type="hidden" name="action" value="new">
				<p>Let's start with the most important parts...</p>
				<label for="business-name"><h3>Your name!</h3><input type="text" class="textbox" id="business-name" name="title"></label>
				<hr/>
				<p>...and now...</p>
				<label for="business-type"><h3 style="float:left;">The type of business:&nbsp;&nbsp;</h3>
						<select id="business-type" name="type">
							<option value="community">Mobile Community</option>
							<option value="professional">Service Contractor</option>
						</select>
				</label>
				<hr/>
				<h3>Business Location:</h3>
				<input id="bsnsstate" name="state">
				<input id="bsnscounty" name="county">
				<input id="bsnscity" name="city">
				<p>&nbsp;</p>
				<p align="right"><input type="submit" value="Continue" class="zocial primary"></p>
			</form></section>
			{elseif $page.step == 2}
			<section id="business-wizard"><form method="post" action="/account/profile" id="step-two">
				<input type="hidden" name="step" value="3">
				<input type="hidden" name="action" value="new">
				<h2>{$page.businessname|stripslashes|ucwords}, {$page.city.title}, {$page.county.title}{if $page.county.hidesuffix != 1} {if $page.state.suffix != ''}{$page.state.suffix}{else}{'county'|l}{/if}{/if}, {$page.state.abbr|strtoupper}</h2>
				<input type="hidden" name="business-name" value="{$page.businessname}">
				<input type="hidden" name="business-type" value="{$page.businesstype}">
				<input type="hidden" name="bsnsstate" value="{$page.bsnsstate}">
				<input type="hidden" name="bsnscounty" value="{$page.bsnscounty}">
				<input type="hidden" name="bsnscity" value="{$page.bsnscity}">
				{if $page.businesstype == "community"}
				<h3 class="floating">Age</h3>
				<label for="audience-1"><input type="radio" id="audience-1" name="agerestrict" value="family"><label class="chk"> Family</label></label>
				<label for="audience-2"><input type="radio" id="audience-2" name="agerestrict" value="senior"><label class="chk"> Senior</label></label>
				<hr>
				<h3>About Your Community &amp; Area</h3><br>
				<div class="checks">
				<strong class="form-strong">Attributes</strong>
				<label for="chk-gated"><input type="checkbox" name="gated" id="chk-gated" value="yep"> <label class="chk">Gated Community</label></label>
				<label for="chk-pets"><input type="checkbox" name="pets" id="chk-pets" value="yep"> <label class="chk">Pets Allowed</label></label>
				<label for="chk-acc"><input type="checkbox" name="acc" id="chk-acc" value="yep"> <label class="chk">Accessibility for Disabled</label></label>
				<div class="clearfix"></div>
				<strong class="form-strong">Amenities</strong>
				<label for="chk-pool"><input type="checkbox" name="pool" id="chk-pool" value="yep"> <label class="chk">Pool / Spa</label></label>
				<label for="chk-rec"><input type="checkbox" name="rec" id="chk-rec" value="yep"> <label class="chk">Clubhouse / Recreation</label></label>
				<label for="chk-laundry"><input type="checkbox" name="laundry" id="chk-laundry" value="yep"> <label class="chk">Laundromat</label></label>
				<label for="chk-playground"><input type="checkbox" name="playground" id="chk-playground" value="yep"> <label class="chk">Playground</label></label>
				<div class="clearfix"></div>
				<strong class="form-strong" style="padding-top:0.5em;width:auto;">Would you consider your location scenic<br>or a tourist attraction?</strong>
				<label for="scenic-1"><input type="radio" id="scenic-1" name="scenic" value="1"><label class="chk"> Yes</label></label>
				<label for="scenic-2"><input type="radio" id="scenic-2" name="scenic" value="0"><label class="chk"> No</label></label>
				<div class="clearfix"></div>
				<hr>
				<h3>On-site / Nearby Attractions</h3><span style="float:left;">(optional)</span><br><br>
				<div class="clearfix"></div>
				<strong class="form-strong">Sports</strong>
				<label for="chk-golf"><input type="checkbox" name="golf" id="chk-golf" value="yep"> <label class="chk">Golf</label></label>
				<label for="chk-tennis"><input type="checkbox" name="tennis" id="chk-tennis" value="yep"> <label class="chk">Tennis</label></label>
				<label for="chk-basketball"><input type="checkbox" name="basketball" id="chk-basketball" value="yep"> <label class="chk">Basketball</label></label>
				<label for="chk-baseball"><input type="checkbox" name="baseball" id="chk-baseball" value="yep"> <label class="chk">Baseball</label></label>
				<label for="chk-badminton"><input type="checkbox" name="badminton" id="chk-badminton" value="yep"> <label class="chk">Badminton</label></label>
				<br><label for="chk-shuffleboard"><input type="checkbox" name="shuffleboard" id="chk-shuffleboard" value="yep"> <label class="chk">Shuffleboard</label></label>
				<label for="chk-polo"><input type="checkbox" name="polo" id="chk-polo" value="yep"> <label class="chk">Polo</label></label>
				<div class="clearfix"></div><br>&nbsp;
				<strong class="form-strong">Activities</strong>
				<label for="chk-bingo"><input type="checkbox" name="bingo" id="chk-bingo" value="yep"> <label class="chk">Bingo</label></label>
				<label for="chk-casino"><input type="checkbox" name="casino" id="chk-casino" value="yep"> <label class="chk">Casino</label></label>
				<label for="chk-billiards"><input type="checkbox" name="billiards" id="chk-billiards" value="yep"> <label class="chk">Billiards</label></label>
				<label for="chk-trails"><input type="checkbox" name="trails" id="chk-trails" value="yep"> <label class="chk">Hiking / Trails</label></label>
				<label for="chk-horsey"><input type="checkbox" name="horsey" id="chk-horsey" value="yep"> <label class="chk">Horseriding</label></label>
				<label for="chk-resort"><input type="checkbox" name="resort" id="chk-resort" value="yep"> <label class="chk">Resorts, Theme Parks, etc</label></label>
				<div class="clearfix"></div>
				</div>
				{else}
				No profile wizard for professionals yet.
				{/if}
				<hr>
				<p align="right"><input type="submit" value="Continue" class="zocial primary"></p>
			</form></section>
			{elseif $page.step == 3}
			<section id="business-wizard"><form method="post" action="/account/profile" id="step-two">
				<input type="hidden" name="step" value="3">
				<input type="hidden" name="action" value="new">
				<h2>{$page.businessname|stripslashes|ucwords}</h2>
				<input type="hidden" name="business-name" value="{$page.businessname}">
				<input type="hidden" name="business-type" value="{$page.businesstype}">
				{if $page.businesstype == "community"}
				
				{else}
				No profile wizard for professionals yet.
				{/if}
				<hr>
				<p align="right"><input type="submit" value="Continue" class="zocial primary"></p>
			</form></section>
			{/if}
		{elseif $page.landing == 'manage'}{* Twilight or Starswirl *}
			<section id="business-manager">
				{foreach from=$page.profiles item=prof}
					<div class="profile-card">
						{if $prof.data.cover}<div class="image"><img src="{$prof.data.cover}" width="228" height="80" alt=""></div>{/if}
						<footer><a class="zocial secondary" href="/{$prof.id}/{$prof.username}/edit">Edit Profile</a>&nbsp;
						<a class="zocial primary" href="/{$prof.id}/{$prof.username}" target="_blank">View Profile</a>
						<a class="zocial secondary" href="/account/profile?action=plan&profile={$prof.id}">Plan Details</a>&nbsp;
						{if $prof.planfeatures.analytics_basic || $prof.planfeatures.analytics_detail || $prof.planfeatures.analytics_advanced}<a class="zocial secondary" href="/account/profile?action=analytics&profile={$prof.id}">Analytics</a>{else}<a class="zocial secondary disabledwhite">Analytics</a>{/if}</footer>
						<div class="clearfix"></div>
						<header>{$prof.data.title}</header>
					</div>
				{/foreach}
			</section>
		{elseif $page.landing == 'edit'}{* Twilight or Starswirl *}
			<h2><a href="/account/profile">Profiles</a> &raquo; {$page.profile.data.title}</h2>
			<a class="zocial primary" href="/{$page.profile.id}/{$page.profile.username}/edit">Continue to Editor</a>
		{elseif $page.landing == 'plan'}{* Twilight or Starswirl *}
			<h2><a href="/account/profile">Profiles</a> &raquo; {$page.profile.data.title}</h2>
			<div class="clearfix"></div>
			&nbsp;<div class="clearfix"></div>
			<div class="planlist">
				{foreach from=$page.planlist item=plan}<div{if $plan.id == $page.profile.plan} class="current"{elseif $plan.id > $page.profile.plan} class="after{if $plan.id == $page.profile.plan + 1} rightafter{/if}"{/if}>
					<p class="title">{$plan.title}</p>
					<p class="text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin felis odio, mattis sit amet nunc nec, gravida auctor nisl. Nam tincidunt enim odio, vitae ultricies tellus adipiscing et.
					</p>
					<ul>
						{foreach from=$plan.features item=feature}
						<li>{$feature.title}</li>
						{/foreach}
					</ul>
					<p class="switchbtn">{if $plan.id != $page.profile.plan}<a class="zocial {if $plan.name == 'free'}secondary{else}primary{/if}" href="/account/profile?action=switchplan&profile={$page.profile.id}&plan={$plan.id}">{if $plan.name == 'free'}Downgrade{else}Switch{/if}</a>{else}<strong>Current Plan</strong>{/if}</p>
					<div class="clearfix"></div>
				</div>{/foreach}
				&nbsp;<p class="clearfix"></p>
			</div>
			<div class="clearfix"></div>
		{elseif $page.landing == 'analytics'}{* Twilight or Starswirl *}
			<div class="wblock">
			
			</div>
		{/if}{* Twilight or Starswirl *}
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</section>
{/block}
{block "jquerybottom"}{/block}
{block "endscripts"}
{if $page.landing == 'wizard' && $page.step == 1}<script type="text/javascript">{literal}
		$(document).ready(function() {
                    var state = $("#bsnsstate").kendoDropDownList({
                        placeholder: "Select state...",
                        dataTextField: "title",
                        dataValueField: "id",
						serverFiltering: true,
                        dataSource: {
                            transport: {
                                read: "../../derpy/states"
                            },
							schema: {
								data: "data"
							}
                        }
                    }).data("kendoDropDownList");

                    var county = $("#bsnscounty").kendoDropDownList({
                        autoBind: true,
                        cascadeFrom: "state",
                        placeholder: "Select county...",
                        dataTextField: "title",
                        dataValueField: "id",
                        serverFiltering: true,
						dataSource: {
                            transport: {
                                read: {
									url: "../../derpy/counties",
									data: {
										state: function() {return $("#bsnsstate").val()}
									}
								}
                            },
							schema: {
								data: "data"
							}
                        }
                    }).data("kendoDropDownList");
					
                    var city = $("#bsnscity").kendoDropDownList({
                        autoBind: true,
                        cascadeFrom: "county",
                        placeholder: "Select city...",
                        dataTextField: "title",
                        dataValueField: "id",
						serverFiltering: true,
                        dataSource: {
                            transport: {
                                read: {
									url: "../../derpy/cities",
									data: {
										county: function() {return $("#bsnscounty").val()},
										state: function() {return $("#bsnsstate").val()}
									}
								}
                            },
							schema: {
								data: "data"
							}
                        }
                    }).data("kendoDropDownList");
					state.text('');state.value(0);county.refresh();county.text('');county.value(0);
					var statefunc = function(e) {
						county.setDataSource(new kendo.data.DataSource({transport:{read:{url: "../../derpy/counties",data:{state: function() {return $("#bsnsstate").val()}}}},schema:{data: "data"}}));
						county.refresh();
						county.text('');
						county.value(0);
						city.setDataSource({data:[]});
						city.refresh();
						city.text('');
						city.value(0);
					};
					state.bind('close', statefunc);
					state.bind('dataBound', statefunc);
					state.bind('change', statefunc);
					var countyfunc = function(e) {
						city.setDataSource(new kendo.data.DataSource({transport:{read:{url: "../../derpy/cities",data: {county: function() {return $("#bsnscounty").val()},state: function() {return $("#bsnsstate").val()}}}},schema:{data: "data"}}));
						city.refresh();
						city.text('');
						city.value(0);
					};
					county.bind('close', countyfunc);
					county.bind('dataBound', countyfunc);
					county.bind('change', countyfunc);
		});
{/literal}</script>{/if}
{/block}