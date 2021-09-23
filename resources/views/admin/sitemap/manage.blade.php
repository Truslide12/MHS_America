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

	#jsconsole td > div {
		background: black;
		color:snow;
		position: relative;
		height: 300px;
		width: 100%;
		overflow: hidden;
	}
	#jsfeed {
		background: none;
		color:snow;
		position: absolute;
		bottom: 0;
		left: 0;
		right: 0;
		padding-left: 5px;
	}
	.jsloader {
		position: absolute;
		bottom: 0;
		right: 0;
		display: none;
	}
</style>
<div class="row ppcontainer">
	<div class="col-md-12">
		<h1>MHS Sitemap Tool</h1>
		<hr style="margin-bottom: 16px;">
	</div>

	<div class="col-md-12">

		<table class="table table-bordered table-striped dataTable">
			<tr>
				<th colspan="4" class="techteam">Install/Update Full Sitemaps</th>
			</tr>
			<tr>
				<td colspan="3">
					<p>
						This option will generate all of the sitemaps in one go.
						Please verify options in settings before running this script.
						This process may take several minutes to complete.
					</p>
				</td>
				<td width="25%">
					<a class="badge badge-gen" onclick="omg()" style="width: 100%;margin-top:12px;">
						<i class="fa fa-compress"></i> Generate Sitemap
					</a>
				</td>
			</tr>
			<tr id="jsconsole" style="display: none;">
				<td colspan="4">
					<div>
						<div id="jsfeed">

						</div>
						<div class="jsloader"><img src="/img/spinner.gif"></div>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-bordered table-striped dataTable">
			<tr>
				<th colspan="6" class="supportteam">Active Site Maps</th>
			</tr>
			<tr>
				<th style="width: 55%;">Location</th>
				<th style="width: 25%;">Last Modification</th>
				<th style="width: 10%;">Size</th>
				<th style="width: 10%;">Links</th>
				<th style="width: 10%;">File Options</th>
			</tr>


			@foreach( $sitemaps as $file )
			<tr>
				<td>{{$file['loc']}}</td>
				<td>{{$file['lastmod']}}</td>
				<td nowrap>{{$file['size']}}</td>
				<td>{{$file['links']}}</td>
				<td nowrap>
					<a class="badge badge-xml" href="/{{$file['loc']}}" target="_blank">XML</a>
					<a class="badge badge-html" href="/{{str_replace('xml', 'html', $file['loc'])}}" target="_blank">HTML</a>
					<a class="badge badge-gen" href=""><i class="fa fa-refresh"></i></a>
				</td>
			</tr>
			@endforeach
			<tr>
				<td colspan="2" style="text-align: right;"><strong>Totals:</strong></td>
				<td nowrap>{{$totals['size']}}</td>
				<td>{{$totals['links']}}</td>
				<td nowrap>
					<button class="badge btn btn-primary" style="width: 100%;" disabled><i class="fa fa-compress"></i> Combine</button>
				</td>
			</tr>
		</table>

	</div>
</div>

<script type="text/javascript">
	var active_que_item = 0;
	var active_que = Array();
		active_que[0] = ["/sitemap/generate/statics", "core sitemap"];
		active_que[1] = ["/sitemap/generate/profiles", "profiles sitemap"];
		@php $lk = 2; @endphp
		@foreach( App\Models\State::all() as $state)
		active_que[{{$lk}}] = ["/sitemap/generate/explore/{{$state->abbr}}", "{{$state->abbr}} state sitemap"];
		@php $lk++; @endphp
		@endforeach
		active_que[active_que.length] = ["/sitemap/generate/index", "sitemap index"]

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

	function omg() {
		$("#jsconsole").slideDown();
		print_msg("Starting Sitemap Generation..");
		processNextQueRequest();
	}


	function processNextQueRequest() {
		if( active_que_item < active_que.length ) {
			makeGenRequest(active_que[active_que_item][0], active_que[active_que_item][1]);
			active_que_item++;
			return true;
		} else {
			print_msg("Sitemap generation complete..");
			print_msg(active_que_item+" sitemap(s) created.", 500);
			print_msg("This page will now refresh automatically..", 500);
			setTimeout(function(){
				window.location = window.location;
			}, 1000)
			return false;
		}
	}

	function requestSitemapIndex() {

	}
	function makeGenRequest(endpoint, name) {
		print_msg("requesting creation of '"+name+"'' via endpoint '"+endpoint+"'");
		$(".jsloader").fadeIn();
		$.get("/luna"+endpoint, function(data, status){
			$(".jsloader").fadeOut();
			if( status == 'success' ) {
				data = JSON.parse(data);
				for ( d in data ) {
		    		print_msg("&nbsp;&nbsp;&nbsp;"+data[d]);
		    	}
			} else {
				print_msg("failure to connect to endpoint '"+endpoint+"' ("+name+")");
			}

			processNextQueRequest();
		});
	}
	function print_msg(msg, delay) {
		if( ! delay ) {
			delay = 0;
		}
		setTimeout(function(){
			$("#jsfeed").html($("#jsfeed").html() +"<br>"+ msg);
		}, delay);
	}
</script>
@stop