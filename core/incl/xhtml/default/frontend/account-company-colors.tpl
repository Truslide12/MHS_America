<style type="text/css">
{if $page.company.data.dashboard_backdrop != ""}
	body { background: url({$page.company.data.dashboard_backdrop}) {if $page.company.data.dashboard_backdrop_align}{$page.company.data.dashboard_backdrop_align}{else}center top no-repeat{/if}; }
{/if}
{if $page.company.data.dashboard_container_backcolor != ""}
	section#us-county { background:{$page.company.data.dashboard_container_backcolor}; }
{/if}
{if $page.company.data.dashboard_banner_backcolor != ""}
	#{$page.company.name}-banner { height:80px; background:{$page.company.data.dashboard_banner_backcolor}; margin:-1em -1em -60px; }
{/if}
{if $page.company.data.dashboard_banner_linkcolor != ""}
	#dashboard .mini-menu a { color:{$page.company.data.dashboard_banner_linkcolor}; }
{/if}
{if $page.company.data.dashboard_footer_backcolor != ""}
	div#content > footer { border:none; background:{$page.company.data.dashboard_footer_backcolor}; }
{/if}
{if $page.company.data.dashboard_footer_headcolor != ""}
	div#content > footer h3 { color:{$page.company.data.dashboard_footer_headcolor}; }
{/if}
{if $page.company.data.dashboard_footer_bodycolor != ""}
	div#content > footer { color:{$page.company.data.dashboard_footer_bodycolor}; }
	div#content > footer ul > li > a { color:{$page.company.data.dashboard_footer_bodycolor}; background:none; text-decoration:none; }
	div#content > footer ul > li > a:hover { color:{$page.company.data.dashboard_footer_bodycolor}; background:none; text-decoration:underline; }
	div.account-box { color:#333; }
{/if}
{if $page.company.data.dashboard_footer_lightheaders == 1}
	.grid h3 { font-size:120%;font-weight:normal; }
{/if}
</style>