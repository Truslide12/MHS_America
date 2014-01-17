{extends "master.tpl"}
{block "content"}
	<div class="container" id="carousel-container">{block "carousel"}<!-- Carousel
    ================================================== -->
    <div id="myCarousel"{if $page.slides[0].cover || $page.slides[1].cover || $page.slides[2].cover} class="carousel slide" data-ride="carousel"{else} class="nameblock"{/if}>
      {if 1==2}<!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>{/if}
	  <div id="name-wrapper"><div class="container">
		<p class="h1 hidden-xs">{$page.profile.title} <small><a href="{'domain'|s}/locale/{$page.state.abbr|strtolower}/{$page.county.name}/{$page.city.name}">{$page.city.title}, {$page.state.abbr|strtoupper}</a></small></p>
		<p class="h2 visible-xs">{$page.profile.title}</p>
	  </div></div>
	  {if $page.slides[0].cover || $page.slides[1].cover || $page.slides[2].cover}
      <div class="carousel-inner">
        <div class="item active" id="photo1">
          <div class="container">
			<div class="photo"></div>
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item" id="photo2">
          <div class="container">
            <div class="photo"></div>
			<div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item" id="photo3">
		  <div class="container">
			<div class="photo"></div>
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>{/if}
    </div><!-- /.carousel --></div>{/block}
	<div class="container" id="main-container">
		<div {if $page.plan_info.name == "free"}class="{if $command != ""}col-md-offset-3 {/if}col-md-6"{else}class="col-md-12"{/if}>
			<div class="panel panel-default" id="profile-data">
			  <div class="panel-body">
				<div {if $page.plan_info.name == "free"}class="col-md-6"{else}class="col-md-3"{/if}>
					<strong>Address</strong>
					<hr>
					<p class="hidden-xs hidden-sm">{$page.data.address}</p>
					<p class="hidden-xs hidden-sm">{$page.city.title}, {$page.state.abbr|strtoupper} {$page.data.zipcode}</p>
					<p class="visible-xs visible-sm">{$page.data.address}, {$page.city.title}, {$page.state.abbr|strtoupper} {$page.data.zipcode}</p>
					<p class="visible-xs visible-sm">&nbsp;</p>
				</div>
				{if $page.plan_info.name != "free"}<div class="col-md-6 panel-body">
					{if $page.plan_info.name != "free"}<strong>Office Hours</strong>
					<hr>
					{if $page.hourspresent}
					<div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
						{foreach from=$page.profile.hours item=trange}{if $trange.start != 7}
						<p class="two-col"><span>
						{if $trange.end == 0}
							{$page.longdays[$trange.start]}
						{else}
							{$page.shortdays[$trange.start]} - {$page.shortdays[$trange.end]}
						{/if}</span>{if $trange.time == 0}Closed{else}{$trange.time} - {$trange.endtime}{/if}</p>
						{/if}{/foreach}
					</div>
					<div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
						{if $trange.start == 7}
						<p class="two-col"><span>
						{if $trange.end == 0}
							{$page.longdays[$trange.start]}
						{else}
							{$page.shortdays[$trange.start]} - {$page.shortdays[$trange.end]}
						{/if}</span>{if $trange.time == 0}Closed{else}{$trange.time} - {$trange.endtime}{/if}</p>
						{/if}
					</div>
					{else}
					<div class="col-md-12">
						<span style="font-style:italic;">No office hours available</span>
					</div>
					{/if}
					<p class="visible-xs visible-sm">&nbsp;</p>{/if}
				</div>{/if}
				<div {if $page.plan_info.name == "free"}class="col-md-6"{else}class="col-md-3"{/if}>
					<strong>Contact Details</strong>
					<hr>
					{if $page.data.manager}<p class="two-col"><span>Mgr. {$page.data.manager}</span>&nbsp;</p>{/if}
					{if $page.data.phone}<p class="two-col"><span>Phone</span>{$page.data.phone}</p>{/if}
					{if $page.data.fax}<p class="two-col"><span>Fax</span>{$page.data.fax}</p>{/if}
					{if $page.data.email}<p class="two-col"><span>Email</span><a href="/{$page.profile.prof_id}/{$page.profile.name}/email">Send Message</a></p>{/if}
					{if $page.data.website}<p class="two-col"><span>Website</span><a href="{$page.data.website}">Homepage</a></p>{/if}
				</div>
			  </div>
			</div>
		</div>
		{block "profileblocks"}<div class="col-md-6" id="left-col">
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">Community Information</h3>
			  </div>
			  <div class="panel-body tile-container">
				{if $page.data.senior == 1}<div class="col-md-3"><div class="info-tile"><strong>Senior</strong></div></div>{else}<div class="col-md-3"><div class="info-tile"><strong>Family</strong></div></div>{/if}
				{if $page.data.handicap == 1}<div class="col-md-2 col-xs-6"><div class="info-tile handicap" title="Good Accesibility">&nbsp;</div></div>{/if}
				{if $page.data.neighborhood == 1}<div class="col-md-2 col-xs-6"><div class="info-tile neighborhood" title="Neighborhood Watch">&nbsp;</div></div>{/if}
				{if $page.data.spaces}<div class="col-md-4 col-xs-6"><div class="info-tile">{$page.data.spaces}<span>&nbsp;spaces</span></div></div>{/if}
				{if $page.data.rent}<div class="clearfix visible-xs"></div><div class="col-md-5 col-xs-12"><div class="info-tile"><span><small>Starting at</small> </span>${$page.data.rent}<span>&nbsp;/mo</span></div></div>{/if}
				{if $page.data.gated == 1}<div class="col-md-3 col-xs-6"><div class="info-tile">Gated</div></div>{/if}
				{if $page.data.pets == 1}<div class="col-md-3 col-xs-6"><div class="info-tile">Pets <i class="glyphicon glyphicon-ok"></i></div></div>{/if}
				{if $page.data.scenic == 1}<div class="col-md-3 col-xs-6"><div class="info-tile">Scenic</div></div>{/if}
			  </div>
			</div>
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">About Our Community</h3>
			  </div>
			  <div class="panel-body">
				{if $page.data.description}{$page.data.description}{else}<em>No description available</em>{/if}
			  </div>
			</div>
		</div>
		<div class="col-md-6" id="right-col">
			{if $page.plan_info.name != "free"}<div class="panel panel-default">{* Amenities :D *}
			  <div class="panel-heading">
				<h3 class="panel-title">Community Amenities</h3>
			  </div>
			  <div class="panel-body tile-container">
				{if $page.data.pool == 1}<div class="col-md-3"><div class="info-tile">Pool</div></div>{/if}
				{if $page.data.rec == 1}<div class="col-md-3"><div class="info-tile">Clubhouse</div></div>{/if}
				{if $page.data.laundry == 1}<div class="col-md-3"><div class="info-tile">Laundry</div></div>{/if}
				{if $page.data.playground == 1}<div class="col-md-3"><div class="info-tile">Playground</div></div>{/if}
				{if $page.data.basketball == 1}<div class="col-md-3"><div class="info-tile">Basketball</div></div>{/if}
				{if $page.data.soccer == 1}<div class="col-md-3"><div class="info-tile">Soccer</div></div>{/if}
				{if $page.data.football == 1}<div class="col-md-3"><div class="info-tile">Football</div></div>{/if}
				{if $page.data.badminton == 1}<div class="col-md-3"><div class="info-tile">Badminton</div></div>{/if}
				{if $page.data.tennis == 1}<div class="col-md-3"><div class="info-tile">Tennis</div></div>{/if}
				{if $page.data.casino == 1}<div class="col-md-3"><div class="info-tile">Casino</div></div>{/if}
				{if $page.data.hiking == 1}<div class="col-md-3"><div class="info-tile">Hiking</div></div>{/if}
			  </div>
			</div>
			<div class="panel panel-default">{* Spaces :D *}
			  <div class="panel-heading">
				<h3 class="panel-title">Spaces Available{if $page.spaces} ({$page.spaces|count}){/if}</h3>
			  </div>
			  <div class="panel-body tile-container space-container">
				{foreach from=$page.spaces item=space}
				<div class="col-xs-6 col-sm-3 col-md-2">
					<div class="info-tile">
					{if $space.name && $space.name != "_" && $space.width == 0 && $space.height == 0}
						{$space.name}<br><small>{$space.shape|howwide}</small>
					{else}
						{$space.shape|howwide}<br><small>{if $space.width != 0 && $space.height != 0}{$space.width} &times; {$space.height}{else}&nbsp;{/if}</small>
					{/if}
					</div>
				</div>
				{foreachelse}
				<em>No spaces listed. Contact management for current availability.</em>
				{/foreach}
			  </div>
			</div>
			<div class="panel panel-default">{* Homes :D *}
			  <div class="panel-heading">
				<h3 class="panel-title">Homes Available{if $page.homes && !$page.editmode} ({$page.home_count}){/if}</h3>
			  </div>
			  <div class="panel-body home-container">
				{foreach from=$page.homes item=home}
				<div class="col-md-6"><div class="home-block">
					<div class="image image-wide hidden-xs hidden-sm"><img src="/imgstorage/home/covers/{$home.id|alphaID}.jpg">
					<p class="home-price"><span class="pull-right">{$home.price|showprice}</span><strong>Price</strong></p></div>
					<div class="col-xs-6 image pull-right visible-xs visible-sm">
						<img src="/imgstorage/home/covers/{$home.id|alphaID}.jpg">
					</div>
					<div class="title"><a href="/home/{$home.id|alphaID}" class="h4">{$home.year} {$home.brand}</a></div>
					<p class="visible-xs visible-sm">{$home.price|showprice}</p>
					<div class="clearfix"></div>
				</div></div>
				{foreachelse}
				<em>No homes listed.</em>
				{/foreach}
			  </div>
			</div>{/if}{* END OF IF-NOT-FREE = LINE 133 *}
		</div>	
		{/block}{* end profile blocks *}
		</div>
	</div>
{/block}
{block "head_end"}
<link rel="stylesheet" href="/_/metro/css/profile.css" type="text/css">
<style type="text/css">
{if $page.slides[0].cover}
#photo1 .container .photo{ background-image:url({$page.slides[0].cover});background-position:{$page.slides[0].cover_position} }
{/if}{if $page.slides[1].cover}
#photo2 .container .photo{ background-image:url({$page.slides[1].cover});background-position:{$page.slides[1].cover_position} }
{/if}{if $page.slides[2].cover}
#photo3 .container .photo{ background-image:url({$page.slides[2].cover});background-position:{$page.slides[2].cover_position} }
{/if}</style>
{/block}