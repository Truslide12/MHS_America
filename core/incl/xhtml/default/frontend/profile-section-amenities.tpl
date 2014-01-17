{if $page.data.none == 0 || $page.editmode}<section class="tiled red">
				<header>Community Amenities</header>
			{if $page.editmode}
				<input type="hidden" name="data[pool]" value="0">
				<input type="hidden" name="data[clubhouse]" value="0">
				<input type="hidden" name="data[laundry]" value="0">
				<input type="hidden" name="data[playground]" value="0">
				<input type="hidden" name="data[basketball]" value="0">
				<div class="editboxes">
				<input type="checkbox" id="pool" name="data[pool]"{if $page.data.pool == 1} checked{/if} value="1"><label class="chk" for="pool"> Pool</label>
				<input type="checkbox" id="clubhouse" name="data[clubhouse]"{if $page.data.rec == 1} checked{/if} value="1"><label class="chk" for="clubhouse"> Clubhouse</label>
				<input type="checkbox" id="laundry" name="data[laundry]"{if $page.data.laundry == 1} checked{/if} value="1"><label class="chk" for="laundry"> Laundry</label>
				<input type="checkbox" id="playground" name="data[playground]"{if $page.data.playground == 1} checked{/if} value="1"><label class="chk" for="playground"> Playground</label>
				<input type="checkbox" id="basketball" name="data[basketball]"{if $page.data.basketball == 1} checked{/if} value="1"><label class="chk" for="basketball"> Basketball</label>
				</div>
			{else}
				{if $page.data.pool == 1}<div class="info-tile dbl-tile">Pool</div>{/if}
				{if $page.data.rec == 1}<div class="info-tile dbl-tile">Clubhouse</div>{/if}
				{if $page.data.laundry == 1}<div class="info-tile dbl-tile">Laundry</div>{/if}
				{if $page.data.playground == 1}<div class="info-tile dbl-tile">Playground</div>{/if}
				{if $page.data.basketball == 1}<div class="info-tile dbl-tile">Basketball</div>{/if}
			{/if}
				<div class="clearfix"></div>
			</section>{/if}