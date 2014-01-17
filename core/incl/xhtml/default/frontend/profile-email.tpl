{extends file="master.tpl"}
{block "headerinclude"}<style type="text/css">{literal}
body {padding-top:42px;}
div#content {background:#fff;}
section#us-county {background:none;}
footer .wrapper {width:790px;margin:0 auto;}
#submenu {display:none;}
{/literal}</style>{/block}
{block "pagedir"}{/block}
{block "menubar"}{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div itemprop="about" itemscope itemtype="http://schema.org/Organization/MobileHomeCommunity" class="content-box profile"><link itemprop="additionalType" href="http://schema.org/Residence">
	{if $page.plan.pro_profile == 1}<div id="{if $page.plan_info.id == 4}premier{else}premium{/if}-tag"><a href="{'domain'|s}" target="_blank" title="Click for more info">{if $page.plan_info.id == 4}Premier{else}Premium{/if}<br/>Partner</a></div>{/if}<h1><span itemprop="name">{$page.profile.title}</span><small><a href="/locale/{$page.state.abbr}/{$page.county.name}/{$page.city.name}">{$page.city.title}, {$page.state.title}</a></small></h1>
		<div class="clearfix"></div>
		<div class="g6">
			<label for="fullname">Full Name</label> <input type="text" id="fullname" name="fullname">
		</div>
		<div class="g6">
			<label for="email">Email Address</label> <input type="text" id="email" name="email"><br>
		</div>
		<div class="g6">
			<label for="message">Message</label>
			<textarea name="message" style="width:80%;min-width:80%;max-width:80%;min-height:129px;max-height:400px;background:#fff;"></textarea>
		</div>
		<div class="g6">
			<label>&nbsp;</label>
			<span class="red">All fields are required.</span>
			<input type="submit" class="zocial primary" value="Submit">
		</div>
		<div class="clearfix"></div>
	{if $page.company.data.logo_emblem}<div style="text-align:center;margin:1em 0;"><img src="{$page.company.data.logo_emblem}"></div>{/if}
	</div>
</div>
</section>
{/block}
{block "endscripts"}
<style type="text/css">{literal}
	.content-box input[type="text"] {
		background:#fff;
		padding:0.6em;
		font-size:114%;
		line-height:1em;
		vertical-align:middle;
		width:80%;
	}
	.content-box label {
		font-size:120%;
		line-height:2.2em;
		padding:0 0.6em;
		vertical-align:middle;
		display:block;
	}
	span.red {
		font-size:120%;
		color:#c00;
		line-height:2.2em;
		margin-right:1em;
	}
	.k-widget {
		font-size:120%;
	}
	.plist p {padding:0 0 1em;}
	.plist p span {font-size:80%;}
{/literal}</style>
{/block}