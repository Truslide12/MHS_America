{extends file="master.tpl"}
{block "headerinclude"}<script type="text/javascript" href="//code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="/_/css/dashboard.css" type="text/css">
{if $page.landing == 'plan'}
<style type="text/css">{literal}
.planlist{padding:1.6em 1em .4em}
.planlist>div{float:left;display:block;width:25%;background:#efefef;border:1px solid #ccc;border-right:0;height:605px}
.planlist>div.after{border:1px solid #ccc;border-left:0;margin:0 -2px 0 2px}
.planlist>div.rightafter{margin-left:3px}
.planlist>div.current{background:#fff;margin:-.6em -3px;border:1px solid #dedede;position:relative;z-index:4;-moz-box-shadow:0 0 10px #fff;-webkit-box-shadow:0 0 10px #fff;-o-box-shadow:0 0 10px #fff;-khtml-box-shadow:0 0 10px #fff;box-shadow:0 0 10px #fff;-moz-border-radius:.5em;-webkit-border-radius:.5em;-o-border-radius:.5em;-khtml-border-radius:.5em;border-radius:.5em;height:620px}
.planlist>div>p.title{text-align:center;font-weight:700;padding:1em;font-size:1.2em;background:#dedede}
.planlist>div.current>p.title{background:#f90;font-size:1.4em;padding:1.2em .8em;color:#fff;-moz-border-radius:.3em .3em 0 0;-webkit-border-radius:.3em .3em 0 0;-o-border-radius:.3em .3em 0 0;-khtml-border-radius:.3em .3em 0 0;border-radius:.3em .3em 0 0}
.planlist>div>p.text{padding:.5em;font-size:.9em}
.planlist>div.current>p.text{padding-bottom:0}
.planlist>div ul{overflow:hidden;height:325px}
.planlist>div ul li{line-height:2;padding:.75em 0;border-bottom:1px solid #999;margin:0 .5em}
.planlist>div>p.switchbtn{padding:2em;height:80px;text-align:center}
.planlist>div>p.switchbtn strong{font-size:1.2em}
.planlist>div>p.switchbtn a{text-align:center}
{/literal}</style>
{/if}
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
			<aside class="right-sidebar">{if $page.landing == 'renew' || $page.landing == 'methods'}
				<a href="/account/profile">Back to profile billing...</a><br/>{/if}
				<a href="/account">Go home...</a>
			</aside>
			<h1>{if $page.landing == 'wizard'}{if $page.businesstype}{$page.businesstype|ucfirst}{else}Business{/if} Profile Wizard{else}{$page.headline}{/if}</h1>
		{if $page.landing == 'manage'}{* Twilight or Starswirl *}
			<section id="business-manager">
				{foreach from=$page.profiles item=prof}
					<div class="profile-card">
						<header>{$prof.data.title}</header>
						<div class="clearfix"></div>
						<div class="plans-mini">
							<div><span class="r">{if $prof.plandata.name != 'free'}<a href="/account/billing?action=renew&profile={$prof.id}" class="zocial primary">Renew</a> &nbsp; {/if}<a href="/account/profile?action=plan&profile={$prof.id}&rtn=billing" class="zocial secondary">{if $prof.plandata.name == 'free'}Upgrade{else}Switch{/if}</a></span><strong>{$prof.plandata.title}</strong></div>
						</div>
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
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin felis odio, mattis sit amet nunc nec, gravida auctor nisl. Nam tincidunt enim odio, vitae ultricies tellus adipiscing et. Quisque aliquet mattis dolor, lobortis pellentesque metus tincidunt quis. Ut vel orci commodo, sodales odio quis, congue quam. Curabitur mollis posuere urna quis fermentum. Duis ornare, nulla at dictum molestie, ante dui convallis augue, at porta neque odio vel odio. Nulla et cursus nisi. Aliquam fermentum nibh ut tellus auctor, vel mattis ipsum pretium. Integer sagittis nulla arcu, non tincidunt justo consectetur quis. Fusce quis porta tellus, ut vulputate mauris.
					</p>
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
<style type="text/css">
{literal}
.profile-card {
	height:auto;
}
.plans-mini div {
float:left;
padding:1em;
margin:1em;
background:#efefef;
border:1px solid #ccc;
width:400px;
}
.plans-mini div strong {
font-size:120%;
}
{/literal}
</style>
{/block}