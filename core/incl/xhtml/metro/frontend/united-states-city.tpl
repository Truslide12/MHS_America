{extends "master.tpl"}
{block "head_end"}
<link rel="stylesheet" href="/_/metro/css/locale.css" type="text/css">
{/block}
{block "content"}
<div class="container" id="main-container">
	<p class="h2 hidden-xs hidden-sm">
		<a href="{'domain'|s}/state/{$page.state.abbr}/county/{$page.county.name}">{$page.county.title}{if $page.county.hidesuffix != 1} {if $page.state.suffix != ''}{$page.state.suffix}{else}{'county'|l}{/if}{/if}, {$page.state.title}</a>
		&raquo; {$page.city.title}
	</p>
	<p class="h2 visible-xs visible-sm">
		<a href="{'domain'|s}/state/{$page.state.abbr}/county/{$page.county.name}">{$page.county.title}</a>
		&raquo; {$page.city.title}
	</p>
	<div class="well well-primary">
	{foreach from=$page.parks item=park}
		<div class="col-md-6">
		<div class="panel panel-default">
			<p class="h3">{if $park.plan.pro_profile == 1}<a href="#{if 1==2}/account/register{/if}" title="Premium Partner" class="plan pull-right"><span class="glyphicon glyphicon-star"></span></a>{/if}{$park.title}</p>
			<div class="col-xs-6 image-box">
				<a href="{'domain'|s}/{$park.profid}/{$park.username}"><img src="{$park.cover}" alt="{$park.title}"></a>
			</div>
			<div class="col-xs-6 list-box">
				<ul class="list-group">
					{if $park.plan.com_homes == 1}<li class="list-group-item"><span><strong>Homes</strong></span>{$park.home_count}</li>{/if}
					{if $park.plan.com_spaces == 1}<li class="list-group-item"><span><strong>Spaces</strong></span>{$park.space_count}</li>{/if}
					<li class="list-group-item"><span><strong>Kudos</strong></span>{$park.kudos_count}</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
	{foreachelse}
		
	{/foreach}
	<div class="clearfix"></div>
	</div>
</div>
{/block}
{block "endscripts"}{/block}
