{extends file="master.tpl"}
{block "headerinclude"}<script type="text/javascript" href="//code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="/_/css/dashboard.css" type="text/css">
<link rel="stylesheet" href="/_/css/font-awesome.min.css" type="text/css">
<!-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Poiret+One" type="text/css"> -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Pontano+Sans" type="text/css">
<link rel="stylesheet" href="/_/css/orders.css" type="text/css">
{/block}
{block "menubar"}{/block}
{block "pagedir"}{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box" id="dashboard">
		<h1>{$page.title}</h1>
		<div class="dashboard-box">
			<div class="clearfix"></div>
			<div class="process{if $page.tab == "payment"} dark{/if}">
				<ul>
					<li{if $page.tab == "confirmation" || $page.tab == "payment" || $page.tab == "details"} class="previous"{elseif $page.tab == "login"} class="current"{/if}>Login<i class="fa fa-sign-in"></i></li>
					<li{if $page.tab == "confirmation" || $page.tab == "payment"} class="previous"{elseif $page.tab == "details"} class="current"{/if}>Details<i class="fa fa-list-alt"></i></li>
					<li{if $page.tab == "confirmation"} class="previous"{elseif $page.tab == "payment"} class="current"{/if}>Payment<i class="fa fa-credit-card"></i></li>
					<li{if $page.tab == "confirmation"} class="current finish"{/if}>Confirmation<i class="fa fa-check"></i></li>
				</ul>
				<div class="clearfix"></div>
				<hr>
			</div>
			<div class="clearfix"></div>
			{block "ordercontent"}{/block}
		</div>
	</div>
</div>
</section>
{/block}