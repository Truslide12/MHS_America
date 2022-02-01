{extends file="master.tpl"}
{block "pagedir"}{/block}
{block "menubar"}{/block}
{block "title"}{$page.article.title} :: {'title'|s}{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box">
		<h1><a href="/news">Back to news</a><br>
		{$page.article.title}</h1>
<section class="container">
	<article>
		<span>{$page.article.fancydate}</span>
		<div class="clearfix"></div>
		<p>{$page.article.body}</p>
		<div class="clearfix"></div>
	</article>
</section>
</div></div></section>
{/block}
{block "endscripts"}

{/block}
