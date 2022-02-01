{extends file="master.tpl"}
{block "pagedir"}{/block}
{block "menubar"}{/block}
{block "headerincludes"}
<link href="/_/css/ideas.css" rel="stylesheet" media="all">
{/block}
{block "title"}Ideas and Suggestions :: {'title'|s}{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box">
		<h1>Ideas and Suggestions</h1><br>
		<div id="ideas">
		{foreach from=$page.ideas item=idea}
			<article>
			<aside><span class="pos">{$idea.upcount}</span><span class="neg">{$idea.downcount}</span>
			<div class="clearfix"></div></aside>
			<h2>{$idea.title}</h2>
			<footer><a href="{'domain'|s}/ideas/{$idea.id}/voteup">Vote Up</a> | <a href="{'domain'|s}/ideas/{$idea.id}/votedown">Vote Down</a> | <a href="{'domain'|s}/ideas/{$idea.id}/report">Report</a></footer>
			<div class="clearfix"></div>
			</article>
		{/foreach}
		</div>
	</div>
</div>
</section>
{/block}
{block "endscripts"}

{/block}