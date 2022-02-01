{extends "master.tpl"}
{block "pagedir"}{/block}
{block "menu"}{/block}
{block "headerinclude"}
<link rel="stylesheet" href="/_/css/themes/default/default.css" type="text/css" media="screen">
<link rel="stylesheet" href="/_/css/nivo-slider.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="/_/css/enterprise.css">
{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div class="content-box">
		<h1>Enterprise Clients</h1>
		<div class="grid">
			<div class="g12 jumbotron">
				<div class="slider-wrapper theme-default">
					<div id="slider" class="nivoSlider">
						<img src="http://dummyimage.com/960x315/000000/ffffff.png" data-thumb="http://dummyimage.com/960x315/000000/ffffff.png" alt="" />
						<img src="http://dummyimage.com/960x315/ffffff/000099.png" data-thumb="http://dummyimage.com/960x315/ffffff/000099.png" alt="" data-transition="slideInLeft" />
					</div>
				</div>
			</div>
			<div class="g4">
				<h3>Management Companies</h3>
				<p>Management companies with a large number of communities. Applying for enterprise partnership will allot you reasonable pricing and multi-tier user privileges for executives, managers, and others.</p>
			</div>
			<div class="g4">
				<h3>Franchisers / Licensors</h3>
				<p>Companies with a large, indefinite number of representatives can benefit from a uniform presence in the MHS America community. Profiling may be established by the client at once or their representatives on an individual basis.</p>
			</div>
			<div class="g4">
				<h3>Heading 3</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vehicula tortor non magna iaculis imperdiet vel ut erat. Proin ac malesuada leo. Aenean ultrices sem id nibh vehicula, iaculis pellentesque augue vestibulum. Suspendisse eu porta nisl. Duis sit amet condimentum elit. Fusce odio elit, eleifend in magna in, eleifend lobortis ipsum. Nullam dictum vestibulum felis, sed tempus neque scelerisque at.</p>
			</div>
		</div>
	</div>
</div></section>
{/block}
{block "endscripts"}
<script type="text/javascript" src="/_/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider();
});
</script>
{/block}