{extends file="profile-master.tpl"}
{block "headerinclude"}<style type="text/css">{literal}
body {padding-top:42px;}
div#content {width:auto;background:none;border-left:none;border-right:none;}
section#us-county {background:none;}
footer .wrapper {width:790px;margin:0 auto;}
#submenu {display:none;}
{/literal}</style>{/block}
{block "jquery_extras"}
<script type="text/javascript" src="/_/js/jquery-ui-1.10.3.custom.min.js"></script>
{if $page.editmode}<link rel="stylesheet" href="/_/css/coverphoto.css" type="text/css">{/if}
<script type="text/javascript" src="/_/js/jquery.roundabout.min.js"></script>
<script type="text/javascript" src="/_/js/plugins/jquery.event.drag.live-2.2.js"></script>
<script type="text/javascript" src="/_/js/plugins/jquery.event.drop.live-2.2.js"></script>
<script type="text/javascript" src="/_/js/plugins/jquery.easing.1.3.js"></script>
{/block}
{block "pagedir"}{/block}
{block "menubar"}{/block}
{block "content"}
<section id="us-county">
<div class="county-content">
	<div itemprop="about" itemscope itemtype="http://schema.org/LocalBusiness" class="content-box profile"><link itemprop="additionalType" href="http://schema.org/MobileHomeCommunity">{if $page.editmode}<form action="{'domain'|s}/{$page.profile.prof_id}/{$page.profile.username}/edit" method="POST">{/if}
		{if $page.plan.pro_profile == 1}<div id="{if $page.plan_info.id == 4}premier{else}premium{/if}-tag"><a href="{'domain'|s}" target="_blank" title="Click for more info">{if $page.plan_info.id == 4}Premier{else}Premium{/if}<br/>Partner</a></div>{/if}<h1><span itemprop="name">{$page.profile.title}</span><small><a href="/locale/{$page.state.abbr}/{$page.county.name}/{$page.city.name}">{$page.city.title}, {$page.state.title}</a></small></h1>
		{if $page.data.cover && $page.data.cover_position && $page.plan.misc_banner == 1 && !$page.slides}<div id="head-banner"></div>
		<style>{literal}
			div.wrapper > header {-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;box-shadow:0 0 10px #000;}
			#us-county .county-content h1 {color:#dedede;}
			#us-county h1 small a {color:#999999;}
			#premier-tag {-moz-box-shadow:0 0 4em #999;-webkit-box-shadow:0 0 4em #999;box-shadow:0 0 4em #999;}
			#head-banner {
				background-image:url({/literal}{$page.data.cover}{literal});
				background-position:{/literal}{$page.data.cover_position}{literal};
				background-repeat:no-repeat;
				box-shadow:0 0 10px rgba(224,224,224,0.65) inset;
				border:none;
			}
			#datcinema {
				background:#242424 url(/_/images/patterns/skewed_print.png) top left repeat;
				position:absolute;
				top:0;left:0;right:0;
				height:350px;
				z-index:-10000;
				box-shadow:0 -3em 4em #191919 inset;
			}
			{/literal}
		</style><div id="datcinema"></div>{elseif $page.slides && $page.plan.misc_banner == 1}
		<style>{literal}
			div.wrapper > header {-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;box-shadow:0 0 10px #000;}
			#us-county .county-content h1 {color:#dedede;}
			#us-county h1 small a {color:#999999;}
			#premier-tag {-moz-box-shadow:0 0 4em #999;-webkit-box-shadow:0 0 4em #999;box-shadow:0 0 4em #999;}
			#datcinema {
				background:#242424 url(/_/images/patterns/skewed_print.png) top left repeat;
				position:absolute;
				top:0;left:0;right:0;
				height:{/literal}{if $page.editmode}370{else}350{/if}{literal}px;
				z-index:-10000;
				box-shadow:0 -3em 4em #191919 inset;
			}
			#profile-buttonset{margin:-52px 10px 0;position:relative;z-index:281;}
			ul#headbannerset > li {
				background-repeat:no-repeat;
				box-shadow:0 0 10px rgba(224,224,224,0.65) inset;
				border:none;
				display:block;
				width:800px;
				height:280px;
			}
			#current-glow {
				width: 800px;
				height: 280px;
				margin: -281px -9px 0 -11px;
				position: relative;
				{/literal}{if $page.editmode}
				-moz-box-shadow: 0 0 50px #000;
				-webkit-box-shadow: 0 0 50px #000;
				box-shadow: 0 0 50px #000;
				background:rgba(0,0,0,0.5);
				z-index: 280;
				{else}
				-moz-box-shadow: 0 0 10px #fff;
				-webkit-box-shadow: 0 0 10px #fff;
				box-shadow: 0 0 10px #fff;
				z-index: 279;
				display:none;
				{/if}{literal}
			}
			#profile-sheet {margin-top:50px;}
			li#photo1 {
				background-image:url({/literal}{$page.slides[0].cover}{literal});
				background-position:{/literal}{$page.slides[0].cover_position}{literal};
			}
			li#photo2 {
				background-image:url({/literal}{$page.slides[1].cover}{literal});
				background-position:{/literal}{$page.slides[1].cover_position}{literal};
			}
			li#photo3 {
				background-image:url({/literal}{$page.slides[2].cover}{literal});
				background-position:{/literal}{$page.slides[2].cover_position}{literal};
			}{/literal}{if $page.editmode}{literal}
			.roundabout-moveable-item .coverphoto-container {width:440px;height:154px;}
			.roundabout-in-focus .coverphoto-container, .roundabout-in-focus .coverphoto-container canvas {width:800px;height:280px;}
			.roundabout-in-focus .coverphoto-container .coverphoto-photo-container img {width:800px !important;}
			.roundabout-moveable-item .coverphoto-container .actions .chooser {display:none;}
			.roundabout-in-focus .coverphoto-container .actions .chooser {display:block;}
			.headerslides .coverphoto-container, .headerslides > li > img {display:none;}
			ul.editmode li .coverphoto-container, ul.editmode > li > img {display:block;}
			{/literal}{/if}{literal}
			li.roundabout-in-focus {cursor: default;}
			.roundabout-holder {list-style: none;padding: 0;margin:4px 0 0 1em;height:280px;width:100%;}
			.roundabout-moveable-item {width:600px;height: 210px;cursor: pointer;background-color: #ccc;border: none;}
			.roundabout-in-focus {width:800px;height: 280px;margin: 0 -10px;cursor: auto;}{/literal}
		</style>
		<ul id="headbannerset" class="headerslides">
			{if $page.editmode || $page.slides[0].cover}<li id="photo1">{if $page.editmode}<img src="{$page.slides[0].cover}" class="stubimg">{/if}</li>{/if}
			{if $page.editmode || $page.slides[1].cover}<li id="photo2">{if $page.editmode}<img src="{$page.slides[1].cover}" class="stubimg">{/if}</li>{/if}
			{if $page.editmode || $page.slides[2].cover}<li id="photo3">{if $page.editmode}<img src="{$page.slides[2].cover}" class="stubimg">{/if}</li>{/if}
		</ul><div id="datcinema"></div>{if $page.editmode}<input type="hidden" id="inputphoto1" name="photo1" value=""><input type="hidden" id="inputphoto2" name="photo2" value=""><input type="hidden" id="inputphoto3" name="photo3" value=""><div id="current-glow"><a href="#" class="zocial secondary" id="photoman" style="font-size:120%;margin:122px 299px;">Manage Cover Photos</a></div>{/if}
		{/if}
		{if $isUserLoggedIn}<div id="profile-buttonset{if $page.plan.misc_banner == 1}{else}-nobanner{/if}">{if !$page.editmode}<a class="zocial follow{if $page.watched}-red{/if}" href="{'domain'|s}/{$page.profile.prof_id}/{$page.profile.username}/{if $page.watched}un{/if}watch">{if $page.watched}Unwatch{else}Watch{/if} Community</a>{/if}{if $page.plan.misc_kudos == 1 && !$page.isowner} &nbsp; <a class="zocial primary{if !$page.kudoed} kudos{/if}" href="{'domain'|s}/{$page.profile.prof_id}/{$page.profile.username}/{if $page.kudoed}no{/if}kudos">{if $page.kudoed}Take Away {/if}Kudos</a>{/if}{if $page.isowner}{if $page.editmode} &nbsp; <button type="submit" class="zocial follow" id="mainsubmit">Save Changes</button>{/if} &nbsp; <a class="zocial primary" href="{'domain'|s}/{$page.profile.prof_id}/{$page.profile.username}{if !$page.editmode}/edit{/if}">{if $page.editmode}Exit Editor{else}Edit Profile{/if}</a>{/if}</div>{/if}
		{if $page.editmode}<p class="ribbon"{if $page.slides} style="margin:20px -9px -28px -11px;z-index:280;position:relative;"{/if}>The profile is currently in edit mode. Changes will only be applied after clicking <strong>Save Changes</strong> above.</p>
		<a href="#" class="zocial secondary kudos" style="font-size:120%;display:block;top:-159px;position:relative;z-index:290;left:353px;margin:-35px 0;display:none;" id="nophotoman">Done</a>{/if}
		<div id="profile-sheet">
		{if $page.plan.pro_profile == 1}{include "profile-section-contact.tpl"}{else}<style type="text/css">{literal}div.profile {padding:10px 24px 14em;background:#efefef;}{/literal}</style>{/if}
		<div class="col2 l">
			{include "profile-section-info.tpl"}
			{if $page.plan.pro_profile == 1}
			<section{if $page.editmode} style="padding:2em 0 0;"{/if}>
				<header>About Our Community</header>
				<p>{if $page.editmode}<textarea style="max-width:100%;min-width:100%;" name="description" class="fancy">{$page.data.description}</textarea>{else}{if $page.data.description}{$page.data.description}{else}<h3><em>No description available</em></h3>{/if}{/if}</p>
			</section>{/if}
			{if $page.plan.com_homes == 1 && $page.space_count > 20}{include "profile-section-homes.tpl"}{/if}
		</div>
		<div class="col2 r">{* RIGHT COLUMN :) *}
			{if $page.plan.pro_profile != 1}{include "profile-section-contact-mini.tpl"}{/if}
			{if $page.plan.pro_profile == 1}{include "profile-section-amenities.tpl"}{/if}
			{if $page.plan.com_spaces == 1}{include "profile-section-spaces.tpl"}{/if}
			{if $page.plan.com_homes == 1 && $page.space_count < 21}{include "profile-section-homes.tpl"}{/if}
		</div>
		<div class="clearfix"></div>{if $page.editmode}</form>{/if}
		</div><!-- End of sheet -->
		{if $page.company.name}<div style="text-align:center;margin:1em 0;">{if $page.company.data.logo_emblem}<img src="{$page.company.data.logo_emblem}">{else}A {$page.company.title} Community{/if}</div>{/if}
	</div>
</div>
</section>
{/block}
{block "endscripts"}
<script type="text/javascript">{literal}
$(document).ready(function(){
  $('#headbannerset').roundabout({
		enableDrag:false, autoplay: true, autoplayDuration: 5000{/literal}{if !$page.editmode}, easing: "easeOutQuad"{/if}{literal}});
});
{/literal}</script>
{if $page.editmode}<script type="text/javascript" src="/_/markitup/jquery.markitup.js"></script>
<script type="text/javascript" src="/_/markitup/sets/bbcode/set.js"></script>
<link rel="stylesheet" type="text/css" href="/_/markitup/skins/markitup/style.css" />
<link rel="stylesheet" type="text/css" href="/_/markitup/sets/bbcode/style.css" />
<script type="text/javascript" src="/_/js/plugins/coverphoto.js"></script>
<script type="text/javascript">{literal}
		$(document).ready(function() {
                    var state = $("#bsnsstate").kendoDropDownList({
                        placeholder: "Select state...",
                        dataTextField: "title",
                        dataValueField: "id",
						serverFiltering: true,
                        dataSource: {
                            transport: {
                                read: "../../../derpy/states"
                            },
							schema: {
								data: "data"
							}
                        },
						value: "{/literal}{$page.state.id}{literal}"
                    }).data("kendoDropDownList");

                    var county = $("#bsnscounty").kendoDropDownList({
                        autoBind: true,
                        cascadeFrom: "state",
                        placeholder: "Select county...",
                        dataTextField: "title",
                        dataValueField: "id",
                        serverFiltering: true,
						dataSource: {
                            transport: {
                                read: {
									url: "../../../derpy/counties",
									data: {
										state: function() {return $("#bsnsstate").val()}
									}
								}
                            },
							schema: {
								data: "data"
							}
                        },
						value: "{/literal}{$page.county.id}{literal}"
                    }).data("kendoDropDownList");
					
                    var city = $("#bsnscity").kendoDropDownList({
                        autoBind: true,
                        cascadeFrom: "county",
                        placeholder: "Select city...",
                        dataTextField: "title",
                        dataValueField: "id",
						serverFiltering: true,
                        dataSource: {
                            transport: {
                                read: {
									url: "../../../derpy/cities",
									data: {
										county: function() {return $("#bsnscounty").val()},
										state: function() {return $("#bsnsstate").val()}
									}
								}
                            },
							schema: {
								data: "data"
							}
                        },
						value: "{/literal}{$page.city.id}{literal}"
                    }).data("kendoDropDownList");
					var countyid = {/literal}{$page.state.id}{literal};
					var countyid = {/literal}{$page.county.id}{literal};
					var cityid = {/literal}{$page.city.id}{literal};
					var inited = false;
					var statefunc = function(e) {
						county.setDataSource(new kendo.data.DataSource({transport:{read:{url: "../../../derpy/counties",data:{state: function() {return $("#bsnsstate").val()}}}},schema:{data: "data"}}));
						if(inited == true) {
						county.refresh();
						county.text('');
						county.value(countyid);
						city.setDataSource({data:[]});
						city.refresh();
						city.text('');
						city.value(cityid);
						}
					};
					var countyfunc = function(e) {
						city.setDataSource(new kendo.data.DataSource({transport:{read:{url: "../../derpy/cities",data: {county: function() {return $("#bsnscounty").val()},state: function() {return $("#bsnsstate").val()}}}},schema:{data: "data"}}));
						if(inited == true) {
						city.refresh();
						city.text('');
						city.value(0);
						} else {
							countyid = 0;
							cityid = 0;
						}
					};
					state.text('');
					state.value({/literal}{$page.state.id}{literal});
					statefunc(true);
					//county.refresh();
					 
					state.bind('close', statefunc);
					state.bind('dataBound', statefunc);
					state.bind('change', statefunc);
					 
					county.bind('close', countyfunc);
					county.bind('dataBound', countyfunc);
					county.bind('change', countyfunc);
					$('#profile-info select').width('80px').kendoDropDownList();
					$('.p-editmosaic select').width('80px').kendoDropDownList();
					$(".fancy").markItUp(markitupSets);
					var curcount = $('div#spaceslist > p').size() + 1;
					var spaceAdd = function() {
						newsel = $("select#spacenewsize").data("kendoDropDownList");
						spcc = $('<p>');
						if(!curcount) {curcount = {/literal}{$page.lastspace}{literal};}
						curcount = curcount.toString();
						spcc.addClass('spaceitem').attr('id','spacebox' + curcount);
						var spcnewe = $('#spc_new').val();
						spcc.html('<label for="spc'+curcount+'">Space #: </label><input type="text" name="spc['+curcount+']" id="spc'+curcount+'" value="' + spcnewe + '"><a id="delete_'+curcount+'" class="zocial secondary deletebtn" onclick="{literal}$(\'{/literal}#spacebox'+curcount+'\').remove();">X</a>' + {/literal}{if $page.data.simple_spaces}{literal}'<select id="newspace_' + curcount + '" name="spcsize[' + curcount + ']"><option value="1">Single</option><option value="2">Double</option><option value="3">Triple</option></select>'{/literal}{else}{literal}{/literal}{/if}{literal});
						$('#spaceslist').append(spcc);
						spcc.show();
						{/literal}{if $page.data.simple_spaces}{literal}$("select#newspace_"+curcount).width('80px').kendoDropDownList();
						cursel = $("select#newspace_"+curcount).data("kendoDropDownList");
						cursel.value(newsel.value());{/literal}{/if}{literal}
						curcount = +curcount;
						curcount++;
						newsel.value('1');
						$('#spc_new').val('');
					}
					$('input#newspcbtn').click(function(){spaceAdd();});
					$('#openmonday').change(function() {
						if(this.checked) {$('#hoursmonday').show();$('#closedmonday').hide();}else{$('#hoursmonday').hide();$('#closedmonday').css('display','block');}
					});
					$('#opentuesday').change(function() {
						if(this.checked) {$('#hourstuesday').show();$('#closedtuesday').hide();}else{$('#hourstuesday').hide();$('#closedtuesday').css('display','block');}
					});
					$('#openwednesday').change(function() {
						if(this.checked) {$('#hourswednesday').show();$('#closedwednesday').hide();}else{$('#hourswednesday').hide();$('#closedwednesday').css('display','block');}
					});
					$('#openthursday').change(function() {
						if(this.checked) {$('#hoursthursday').show();$('#closedthursday').hide();}else{$('#hoursthursday').hide();$('#closedthursday').css('display','block');}
					});
					$('#openfriday').change(function() {
						if(this.checked) {$('#hoursfriday').show();$('#closedfriday').hide();}else{$('#hoursfriday').hide();$('#closedfriday').css('display','block');}
					});
					$('#opensaturday').change(function() {
						if(this.checked) {$('#hourssaturday').show();$('#closedsaturday').hide();}else{$('#hourssaturday').hide();$('#closedsaturday').css('display','block');}
					});
					$('#opensunday').change(function() {
						if(this.checked) {$('#hourssunday').show();$('#closedsunday').hide();}else{$('#hourssunday').hide();$('#closedsunday').css('display','block');}
					});
					$('#headbannerset li').each(function() {
						$(this).CoverPhoto({currentImage: $(this).children('.stubimg').attr('src'), editable: true});
						$(this).children('.stubimg').hide();
						$(this).bind('coverPhotoUpdated', function(evt, dataUrl) {
							$('#input' + $(this).attr('id')).attr("value", dataUrl);
						});
					});
					$('#photoman').click(function() {
						$('#current-glow').hide();
						$('#headbannerset').addClass('editmode').roundabout("stopAutoplay");
						$('#mainsubmit').hide();
						$('#profile-buttonset').css('margin','-52px 10px 0 660px');
						$('#nophotoman').show();
					});
					$('#nophotoman').click(function(){
						$('#current-glow').show();
						$('#headbannerset').removeClass('editmode').roundabout("startAutoplay");
						$('#profile-buttonset').css('margin','-52px 10px 0');
						$('#nophotoman').hide();
						$('#mainsubmit').show();
					});
		});
{/literal}</script>{/if}
{/block}
