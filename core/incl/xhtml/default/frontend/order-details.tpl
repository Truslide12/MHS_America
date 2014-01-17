{extends "order-master.tpl"}
{block "ordercontent"}
<section id="business-wizard" class="order_details"><h1 class="rarity">List a new business</h1><br>{if $page.action == "new"}<form method="post" action="/order/payment">
	<input type="hidden" name="plan" value="{$page.plan}">
	<p>Let's start with the most important parts...</p>
	<div class="grid">
		<div class="g12"><label for="business-name" class="full"><h3>{if $page.businesstype == "community"}Community{elseif $page.businesstype == "professional"}Business{/if} Name:</h3><input type="text" class="textbox" id="business-name" name="title" style="width:400px;"></label></div>
		{if 1==2}<div class="g6">
			<label for="business-type" class="full"><h3>The type of business:&nbsp;&nbsp;</h3>
				<select id="business-type" name="type">
					<option value="community">Mobile Community</option>
					<option value="professional">Service Contractor</option>
				</select>
			</label>
		</div>{/if}
		<div class="g12">
			<label class="full">
				<h3>Business Location:</h3>
				<input id="bsnsstate" name="state">
				<input id="bsnscounty" name="county">
				<input id="bsnscity" name="city">
			</label>
		</div>
	</div>
	<p>&nbsp;</p>
	{if $page.businesstype == "community"}
	<div class="checks grid">
		<h3 class="floating">Age</h3>
		<label for="audience-1" class="full l"><input type="radio" id="audience-1" name="agerestrict" value="family"><label for="audience-1" class="chk"> Family</label></label>
		<label for="audience-2" class="full l"><input type="radio" id="audience-2" name="agerestrict" value="senior"><label for="audience-2" class="chk"> Senior</label></label>
		<div class="clearfix"></div>
	</div>
	<div class="checks grid">
		<h3>About Your Community &amp; Area</h3><br>
		<div class="g6">
			<strong class="form-strong">Attributes</strong>
			<label for="chk-gated"><input type="checkbox" name="gated" id="chk-gated" value="yep"><label for="chk-gated" class="chk"> Gated Community</label></label>
			<label for="chk-pets"><input type="checkbox" name="pets" id="chk-pets" value="yep"><label for="chk-pets" class="chk"> Pets Allowed</label></label>
			<label for="chk-acc"><input type="checkbox" name="acc" id="chk-acc" value="yep"><label for="chk-acc" class="chk"> Accessibility for Disabled</label></label>
			<div class="clearfix"></div>
		</div>
		<div class="g6">
			<strong class="form-strong">Amenities</strong>
			<div class="grid">
				<div class="g5">
					<label for="chk-pool"><input type="checkbox" name="pool" id="chk-pool" value="yep"> <label for="chk-pool" class="chk">Pool / Spa</label></label>
					<label for="chk-rec"><input type="checkbox" name="rec" id="chk-rec" value="yep"> <label for="chk-rec" class="chk">Clubhouse</label></label>
					<label for="chk-laundry"><input type="checkbox" name="laundry" id="chk-laundry" value="yep"> <label for="chk-laundry" class="chk">Laundromat</label></label>
				</div>
				<div class="g7">
					<label for="chk-playground"><input type="checkbox" name="playground" id="chk-playground" value="yep"> <label for="chk-playground" class="chk">Playground</label></label>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="g12">
			<strong class="form-strong" style="padding-top:0.5em;width:auto;">Would you consider your location scenic or a tourist attraction?</strong>
			<div class="clearfix"></div>
			<label for="scenic-1" class="full l"><input type="radio" id="scenic-1" name="scenic" value="1"><label for="scenic-1" class="chk"> Yes</label></label>
			<label for="scenic-2" class="full l"><input type="radio" id="scenic-2" name="scenic" value="0"><label for="scenic-2" class="chk"> No</label></label>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="checks grid">
		<h3>On-site / Nearby Attractions</h3><br>
		<div class="g6">
			<strong class="form-strong">Sports</strong>
			<div class="grid">
				<div class="g5">
					<label for="chk-golf"><input type="checkbox" name="golf" id="chk-golf" value="yep"> <label for="chk-golf" class="chk">Golf</label></label>
					<label for="chk-tennis"><input type="checkbox" name="tennis" id="chk-tennis" value="yep"> <label for="chk-tennis" class="chk">Tennis</label></label>
					<label for="chk-basketball"><input type="checkbox" name="basketball" id="chk-basketball" value="yep"> <label for="chk-basketball" class="chk">Basketball</label></label>
					<label for="chk-baseball"><input type="checkbox" name="baseball" id="chk-baseball" value="yep"> <label for="chk-baseball" class="chk">Baseball</label></label>
				</div>
				<div class="g7">
					<label for="chk-badminton"><input type="checkbox" name="badminton" id="chk-badminton" value="yep"> <label for="chk-badminton" class="chk">Badminton</label></label>
					<label for="chk-shuffleboard"><input type="checkbox" name="shuffleboard" id="chk-shuffleboard" value="yep"> <label for="chk-shuffleboard" class="chk">Shuffleboard</label></label>
					<label for="chk-polo"><input type="checkbox" name="polo" id="chk-polo" value="yep"> <label for="chk-polo" class="chk">Polo</label></label>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="g6">
			<strong class="form-strong">Activities</strong>
			<div class="grid">
				<div class="g5">
					<label for="chk-bingo"><input type="checkbox" name="bingo" id="chk-bingo" value="yep"> <label for="chk-bingo" class="chk">Bingo</label></label>
					<label for="chk-casino"><input type="checkbox" name="casino" id="chk-casino" value="yep"> <label for="chk-casino" class="chk">Casino</label></label>
					<label for="chk-billiards"><input type="checkbox" name="billiards" id="chk-billiards" value="yep"> <label for="chk-billiards" class="chk">Billiards</label></label>
					<label for="chk-trails"><input type="checkbox" name="trails" id="chk-trails" value="yep"> <label for="chk-trails" class="chk">Hiking / Trails</label></label>
				</div>
				<div class="g7">
					<label for="chk-horsey"><input type="checkbox" name="horsey" id="chk-horsey" value="yep"> <label for="chk-horsey" class="chk">Horseriding</label></label>
					<label for="chk-resort"><input type="checkbox" name="resort" id="chk-resort" value="yep"> <label for="chk-resort" class="chk">Resorts, Theme Parks</label></label>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
	{else}
	No profile wizard for professionals yet.
	{/if}
	<hr>
	<p align="right"><input type="submit" value="Continue" class="zocial primary"></p>
</form>
{else}
<div class="grid">
	<div class="g6">
		<a href="/order/details?action=new&type=community&plan={$page.plan}" class="tile-link">New Community</a>
	</div>
	<div class="g6">
		<a href="/order/details?action=new&type=professional&plan={$page.plan}" class="tile-link">New Professional</a>
	</div>
</div>
<div>&nbsp;</div>
<h1 class="rarity">Choose a current profile</h1>
<div class="grid" id="current_profiles">
	<div class="g12">
		{foreach from=$page.profiles item=prof}
		<div class="profile-card">
			<div class="grid">
				<div class="g6"><header><input type="radio" name="pid" id="pidbox{$prof.id}"><label for="pidbox{$prof.id}" class="chk">{$prof.data.title}</label></header></div>
				<div class="g3">
					{$prof.planinfo.title}
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		{/foreach}
	</div>
	<div class="clearfix"></div>
</div>
{/if}</section>
{/block}
{block "jquerybottom"}{/block}
{block "endscripts"}
<script type="text/javascript">{literal}
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
{/literal}</script>
{/block}