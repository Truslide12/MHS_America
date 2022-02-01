{extends file="master.tpl"}
{block "headerinclude"}
{'headerinclusions'|p}
{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box">
		<h1>Discussions</h1>
<br>&nbsp;
			<section class="container">
			{'mybbcontent'|p}
		</section>{literal}<style type="text/css">div#content section.container aside {background:#fff;} div#content section.container aside h2 {background:#f9f9f9;} div#content section.container aside:after {display:none;}</style>{/literal}
	</div>
</div>
</section>
{/block}
{block "endscripts"}

{/block}
