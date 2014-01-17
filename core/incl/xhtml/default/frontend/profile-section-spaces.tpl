<section class="{if $page.spaces}tiled {/if}premium-box">
				<header>Spaces available{if $page.spaces && !$page.editmode} ({$page.space_count}){/if}</header>
				{if $page.spaces}
				<div class="p-{if $page.editmode}edit{/if}mosaic">{if $page.editmode}
					<div id="spaceslist">{/if}
					{foreach from=$page.spaces item=space}
					<p id="spacebox{$space.id}" class="spaceitem">{if $page.editmode}<label for="spc{$space.id}">Space #: </label><input type="text" name="spc[{$space.id}]" id="spc{$space.id}" value="{$space.name}{else}{if $space.name && $space.name != "_"}{$space.name}{else}{$space.shape|howwide}{/if}{/if}{if $page.editmode}"><a id="delete_{$space.id}" class="zocial secondary deletebtn" onclick="{literal}$('{/literal}#spacebox{$space.id}').remove();">X</a>{/if}<span>{if $page.data.simple_spaces || (($space.width == 0 || $space.height == 0) && !$page.editmode)}{if $page.editmode}<select name="spcsize[{$space.id}]"><option value="1" {if $space.shape == 1} selected="selected"{/if}>Single</option><option value="2" {if $space.shape == 2} selected="selected"{/if}>Double</option><option value="3" {if $space.shape == 3} selected="selected"{/if}>Triple</option></select>{else}{if !$space.name || $space.name == "_"}&nbsp;{else}{$space.shape|howwide}{/if}{/if}{else}{if $page.editmode}<input type="text" name="spcwd[{$space.id}]" style="width:40px;" value="{$space.width}"> &multi; <input type="text" name="spcht[{$space.id}]" style="width:40px;" value="{$space.height}">{else}{$space.width}&times;{$space.height}{/if}{/if}</span></p>
					{foreachelse}
					<p>Error</p>
					{/foreach}
					{if $page.editmode}
						</div>
						<p id="spaceboxnew">
							<label for="spc_new">Space #: </label>
							<input type="text" id="spc_new" value="">{if $page.data.simple_spaces == 1 || ($space.width == 0 && $space.height == 0)}<select id="spacenewsize" name="spcsize[]"><option value="1">Single</option><option value="2">Double</option><option value="3">Triple</option></select>{else}<input type="text" name="spcwd[]" style="width:40px;" value="24"> &multi; <input type="text" name="spcht[]" style="width:40px;" value="48">{/if}
						</p>
						<div class="clearfix"></div>
						<div class="cornerbuttons">
							<input type="reset" class="zocial secondary" value="Clear"><input type="button" class="zocial primary" id="newspcbtn" value="Add Space">
						</div>
					{/if}
					<div class="clearfix"></div>
				</div>
				{else}
				<div><h3>No spaces listed. Contact management for current availability.</h3></div>
				{/if}
			</section>