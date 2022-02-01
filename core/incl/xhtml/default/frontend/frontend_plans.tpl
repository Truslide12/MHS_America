{extends file="master.tpl"}
{block "headerinclude"}<script type="text/javascript" href="//code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="/_/css/dashboard.css" type="text/css">
<link rel="stylesheet" href="/_/css/plan-comparison.css" type="text/css">
{/block}
{block "menubar"}{/block}
{block "pagedir"}{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box" id="dashboard">
		<h1>Business Profile Plans</h1>
		<div class="dashboard-box">
			<h2 style="font-size:120%;text-align:center;">Join the industry's most powerful business network</h2>
			<hr>
			<div class="clearfix"></div>
			&nbsp;<div class="clearfix"></div>
			<div class="plan-comparison">
				{foreach from=$page.planlist item=plan}
				<div class="column{if $plan.name == 'free'} free{elseif $plan.id == 3} premium{/if}">
					<p class="title">{$plan.title}</p>
					<div>
						<p class="price">{if $plan.price == 0}&nbsp;{else}{$plan.price|showprice}{/if}</p>
						<p class="text">
						{$plan.description}
						</p>
						<p class="switchbtn"><a class="zocial primary" href="/order/login?plan={$plan.id}">{if $plan.name == 'free'}Get Started{else}Get Started{/if}</a>{if $plan.id == $page.featured_plan}<br>&nbsp;<br><strong>Popular!</strong>{/if}</p>
						<ul>
							{foreach from=$plan.features item=feature name=list_items}
							<li class="{if $smarty.foreach.list_items.index is odd by 1}reg{else}alt{/if}">{$feature.title}</li>
							{/foreach}
						</ul>
						<p class="switchbtn"><a class="zocial primary" href="/order/login?plan={$plan.id}">Get Started</a>{if $plan.id == $page.featured_plan}<br>&nbsp;<br><strong>Popular!</strong>{/if}</p>
						{if $plan.id == 3}<strong>Popular!</strong>{/if}
						<div class="clearfix"></div>
					</div>
				</div>
				{/foreach}
				<div class="clearfix"></div>
				<div class="leader">
					<p class="title">Enterprise Clients</p>
					<div>
						<p class="switchbtn"><a class="zocial primary" href="/contact">Contact Us</a></p>
						<p class="text">If your company manages a large quantity of communities, wishes to integrate with MHS on a larger scale, or is otherwise seeking an enterprise partnership, please contact us directly.</p>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</section>
{/block}
{block "jquerybottomdis"}{/block}
{block "endscriptsdis"}

{/block}