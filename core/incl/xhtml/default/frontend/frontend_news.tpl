{extends file="master.tpl"}
{block "pagedir"}{/block}
{block "menubar"}{/block}
{block "title"}Company News :: {'title'|s}{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box">
		<h1>Company News</h1>
<br>&nbsp;
			<section class="container">
{foreach from=$page.news item=article}
	<aside>
	
		<h2>{$article.fancydate}</h2>
	
	</aside>
	<article>
		
		<h1 style="border:none;">{$article.title}</h1>

		<p>{$article.summary}</p>

		<footer><a href="/news/{$article.id}" class="zocial secondary">Read more</a></footer>
	
	</article>
{foreachelse}
			<div>
				<h1>No news is good news?</h1>
			</div>
{/foreach}
		</section>{literal}<style type="text/css">div#content section.container aside {background:#fff;} div#content section.container aside h2 {background:#f9f9f9;} div#content section.container aside:after {display:none;}</style>{/literal}
	</div>
</div>
</section>
{/block}
{block "endscripts"}

{/block}
