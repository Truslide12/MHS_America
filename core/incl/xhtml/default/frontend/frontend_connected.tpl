{extends file="master.tpl"}
{block "homeoverride"}<a href="{'domain'|s}/connected">{'title'|s}</a>{/block}
{block "pagedir"}{/block}
{block "menubar"}<li id="mhslabel">Connected</li>{/block}
{block "title"}{'title'|s} Connected{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box">
			<section class="container">
		</section>{literal}<style type="text/css">div#content section.container aside {background:#fff;} div#content section.container aside h2 {background:#f9f9f9;} div#content section.container aside:after {display:none;}</style>{/literal}
		<div class="grid" style="margin-left:0;width:100%;">
				<div class="wblock" style="height:auto;padding-top:0;">
					<h1 style="border-color:#09f;line-height:1.5em;">Forging a new path...</h1>
					<p style="float:left;padding:0 1em 0 0;margin:0 0 -1em -10px;"><img src="/_/images/connected/aside-the-push-2.jpg" alt="The Walkway" width="300"></p>
					<p style="padding:1em;text-indent:0.5em;font-size:110%;">We've made it our mission to continually form bold, new ideas. Always on the creative edge, we are redefining the manufactured housing industry. Thanks to the unity we offer to the industry, all parties benefit from a vast network of professional contractors and community staff.</p>
					<p style="padding:1em;text-indent:0.5em;font-size:110%;">One of the most crucial elements of this new path is integration. There are several ways that you can become an active part of the journey. For more information, read on...</p>
					<p style="font-size:80%;color:#ccc;margin:0 0 -1em;">Image courtesy of suwatpo / FreeDigitalPhotos.net</p>
					<div class="clearfix"></div>
				</div>
				<div class="g4">
					<div class="wblock">
						<strong>Consumers</strong><br>&nbsp;
						<p>
						{'title'|s} aims to be as simple and versatile as possible. For more information, choose your platform:<br>
						<a class="hl" href="/connected/mobile/ios"><img src="/_/images/icons/platforms/apple.png" alt="iOS" class="emblem"><span>iOS</span></a><a class="hl" href="/connected/mobile/android"><img src="/_/images/icons/platforms/android.png" alt="Android" class="emblem"><span>Android</span></a><a class="hl" href="/connected/mobile/ubuntu"><img src="/_/images/icons/platforms/ubuntu.png" alt="Ubuntu" class="emblem"><span>Ubuntu</span></a>
						</p>
					</div>
				</div>
				<div class="g4">
					<div class="wblock">
						<strong>Partners</strong><br>&nbsp;
						<p>Want to promote your presence in the {'title'|s} community? You can embed a profile badge in your website.</p>
						<p>&nbsp;</p>
						<p><a href="/connected/web">More Information</a></p>
					</div>
				</div>
				<div class="g4">
					<div class="wblock">
						<strong>Developers</strong><br>&nbsp;
						<p>We know what you're going to ask, and Yes! We have a fully-functional API available to the public.</p>
						<p>&nbsp;</p>
						<p><a href="/connected/integration">Developers' Circle</a></p>
					</div>
				</div>
		</div>
	</div>
</div>
</section>
{/block}
{block "endscripts"}
{literal}<style type="text/css">
div.wrapper > header {
	background: #0000cc; /* Old browsers */
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pg0KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCAxIDEiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPg0KICA8bGluZWFyR3JhZGllbnQgaWQ9ImdyYWQtdWNnZy1nZW5lcmF0ZWQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMCUiIHkxPSIwJSIgeDI9IjAlIiB5Mj0iMTAwJSI+DQogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwMDBjYyIgc3RvcC1vcGFjaXR5PSIxIi8+DQogICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjMDAwMDk5IiBzdG9wLW9wYWNpdHk9IjEiLz4NCiAgPC9saW5lYXJHcmFkaWVudD4NCiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4NCjwvc3ZnPg==);
	background: -moz-linear-gradient(top,  #0000cc 0%, #000099 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#0000cc), color-stop(100%,#000099)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #0000cc 0%,#000099 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #0000cc 0%,#000099 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #0000cc 0%,#000099 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #0000cc 0%,#000099 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0000cc', endColorstr='#000099',GradientType=0 ); /* IE6-8 */
}
div#submenu {
	background:#fff;
	height:4px;
}
body {padding-top:45px;}
div.wrapper > header > h1 {width:290px;z-index:2;}
#mhslabel {
	line-height:43px;
	font-size:150%;
	color:#fff;
	margin-left:-120px;
}
</style>{/literal}
{/block}