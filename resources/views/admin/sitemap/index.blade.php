@extends('admin.content')

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/admin-ppp.css">

<style type="text/css">
	.ppcontainer h3 {
		border-bottom: 1px solid black;
		padding: 4px
	}
	.dayslider-slide {

	}
	.dayslider-slide > div {
		background: silver;
		
	}
	.badge {
		width: auto;
		padding: 4px 12px;
		font-size: .85em;
		background-color: red;
	}
	.badge-xml {
		background-color: rgba(50,0,0,.8);
	}
	.badge-html {
		background-color: rgba(0,50,0,.8);
	}
	.badge-gen {
		background-color: rgba(0,0,50,.8);
	}
</style>
<div class="row ppcontainer">
	<div class="col-md-12">
		<h1>MHS Sitemap Tool</h1>
		<hr style="margin-bottom: 16px;">

		<p class="techteam" style="font-size: 1.25em;padding: 10px;margin-bottom: 22px;">
		<strong>Please update sitemap files regularly</strong> <br>(at least once a week, preferably 24-48 hours depending how our activity is).
		</p>

		<h3>About this tool</h3>
		<p style="font-size: 1.25em;">
		This tool is used to generate our sitemap files dynamically. This tool will generate both XML and HTML sitemaps files. XML sitemap files are built to be compliant to <a href="sitemaps.org">sitemaps.org</a> sitemap schema. HTML sitemap files are generated out of convenience to us so that we can review the maps more easily. They are not linked on the MHS Website.<br><br>
		Also we may have to take a multi-file sitemap strategy given how many links we have worth indexing (every state county and city). For that reason the tool is designed specifically for generating multiple sitemaps instead of a single one. This works out extra well come creation time as each state takes a few seconds for its links alone so we exceed the 2 minute timeout if try to do it all at once. So we chunk the site into pieces and at then if the total of all sitemaps is reasonable we have the option to consolidate them into a single file. Please note MAX urls per sitemap is 50,000.
		</p><br>

		<h3>Improvements</h3>
		<p style="font-size: 1.25em;">
		Some of the methods used to generate the sitemaps can be vastly improved if given the time to develop. However, given that I am only putting a day into this tool some of the options are bare bones and/or hacky. This tool is just a bugfix to our lack of a sitemap. If anyone has time to work on this tool here is some things that could be done.
		</p>
		<ul style="font-size: 1.25em;">
			<li>Assign Priority to links not link groups (<em>i.e. give CA state page higher priority than HI state page and give Contact page higher priority than privacy policy</em>). [exceptions]</li>
			<li>Ability to overwrite all default vars on a particular link. [exceptions]</li>
			<li>Ability to blacklist certain links from being collected/used in sitemap generation (so when we scan a disk we can ignore test/old files. [exceptions]</li>
			<li>Exceptions module could handle all of the above and should..</li>
			<li>Need a DB table of all random links we want inserted should they come up..</li>
		</ul>


	</div>
</div>

<script type="text/javascript">
	function toggle(id) {
		var htmlblock = document.getElementById(id);
		var clickblock = document.getElementById("clicky-"+id);
		if ( clickblock.classList.contains("fa-plus") ) {
			$(htmlblock).slideDown();
			clickblock.classList.remove("fa-plus");
			clickblock.classList.add("fa-minus");
			return true;
		} else if ( clickblock.classList.contains("fa-minus") ) {
			$(htmlblock).slideUp();
			clickblock.classList.remove("fa-minus");
			clickblock.classList.add("fa-plus");
			return true;
		}
		
	}
</script>
@stop