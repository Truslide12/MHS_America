<section class="tiled blue">
				<header>Community Information</header>{if $page.editmode}<div id="cominfo">
					<strong>Community Type: </strong><select name="data[senior]">
						<option value="0"{if $page.data.senior != 1} selected{/if}>Open Community</option>
						<option value="1"{if $page.data.senior == 1} selected{/if}>Senior Community</option>
					</select><br>
					<input type="checkbox" name="data[accessible]" id="info_access"{if $page.data.handicap == 1} checked{/if} value="1"><label for="info_access" class="chk"> Good Accessible (Handicap)</label> 
					<input type="checkbox" name="data[neighborhood]" id="info_neighborhood"{if $page.data.neighborhood == 1} checked{/if} value="1"><label for="info_neighborhood" class="chk"> Neighborhood Watch</label><br>
					<input type="checkbox" name="data[gated]" id="info_gated"{if $page.data.gated == 1} checked{/if} value="1"><label for="info_gated" class="chk"> Gated Community</label> 
					<input type="checkbox" name="data[pets]" id="info_pets"{if $page.data.pets == 1} checked{/if} value="1"><label for="info_pets" class="chk"> Pets Allowed</label> 
					<input type="checkbox" name="data[scenic]" id="info_scenic"{if $page.data.scenic == 1} checked{/if} value="1"><label for="info_scenic" class="chk"> Scenic Area</label>
					<div class="clearfix">&nbsp;</div>
					<label for="info_spacecount"><strong>Spaces Total:</strong><br><input type="text" name="spacecount" id="info_spacecount" value="{$page.data.spaces}"></label>
					<div class="clearfix">&nbsp;</div>
					<label for="info_spacerent"><strong>Average Space Rent:</strong><br><input type="text" name="rent" id="info_rent" value="{$page.data.rent}"> /mo</label>
					<div class="clearfix">&nbsp;</div>
				</div>{else}<div id="cominfo">
				{if $page.data.senior == 1}<div class="info-tile fiftyfive dbl-tile">Senior</div>{else}<div class="info-tile fiftyfive dbl-tile">Family</div>{/if}
				{if $page.data.handicap == 1}<div class="info-tile fiftyfive handicap tilesort" title="Good Accesibility">&nbsp;</div>{/if}
				{if $page.data.neighborhood == 1}<div class="info-tile fiftyfive neighborhood tilesort" title="Neighborhood Watch">&nbsp;</div>{/if}
				{if $page.data.spaces}<div class="info-tile dbl-tile tilesort">{$page.data.spaces}<span>&nbsp;spaces</span></div>{/if}
				{if $page.data.rent}<div class="info-tile tpl-tile tilesort"><span><small>Starting at</small> </span>${$page.data.rent}<span>&nbsp;/mo</span></div>{/if}
				{if $page.data.gated == 1}<div class="info-tile property dbl-tile tilesort">Gated</div>{/if}
				{if $page.data.pets == 1}<div class="info-tile property dbl-tile tilesort">Pets<span class="check"></span></div>{/if}
				{if $page.data.scenic == 1}<div class="info-tile property dbl-tile tilesort">Scenic</div>{/if}
				<div class="clearfix"></div></div><div class="clearfix"></div>{/if}
			</section>