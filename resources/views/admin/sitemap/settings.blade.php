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
		<h1 style="font-family: Voltaire;margin-bottom: 0;padding-bottom: 0;">MHS Sitemap &gt; Compilation Settings</h1>
		<hr style="margin-bottom: 28px;margin-top:-5px;border-color:#000;">
	</div>

	<div class="col-md-12">
		@include('layouts.partial.errors')
		<form action="{{ URL::route('admin-sitemap-settings-post') }}" method="post">
		{{ csrf_field() }}
		@foreach( $blocks as $name => $block )
		<table class="table table-bordered table-striped dataTable">
			<tr>
				<th colspan="4" class="techteam">{{$name}} Page Routes Settings
					<i class="fa fa-minus pull-right" onclick="toggle('{{$name}}');" id="clicky-{{$name}}"></i>
				</th>
			</tr>
			<tr class="{{$name}}-rows">
				<th style="width: 50%;" colspan="2">Last Modification</th>
				<th style="width: 25%;">Change Frequency</th>
				<th style="width: 25%;">Base Priority</th>
			</tr>
			<tr class="{{$name}}-rows">
				<td colspan="2">
					<select name="{{$name}}-lastmod" class="form-control">
						<option value='calculate'>Calculate at Runtime</option>
						<option value='current'>Use Current Time</option>
					</select>
				</td>
				<td>
					<select name="{{$name}}-changefreq" class="form-control">
						<option>Always</option>
						<option>Hourly</option>
						<option selected>Daily</option>
						<option>Weekly</option>
						<option>Monthly</option>
						<option>Yearly</option>
						<option>Never</option>
					</select>
				</td>
				<td><input type="number" name="{{$name}}-basepriority" class="form-control" max="1.0" min="0.1" step="0.01" value="0.5"></td>
			</tr>
			<tr class="{{$name}}-rows">
				@foreach($block as $group)
				<th style="width: 25%;">{{$group->title}} <i class="fa fa-info-circle"></i> <div class="pull-right"><input type="checkbox" name="{{$group->name}}-disabled" @if($group->disabled == false) checked @endif></div></th>
				@endforeach
			</tr>
			<tr class="{{$name}}-rows">
				@foreach($block as $group)
				<th>
					<span style="font-size: 0.8em;color: gray;">Priority:</span>
					<input type="number" name="{{$group->name}}-priority" class="form-control" max="1.0" min="0.1" step="0.01" value="{{$group->priority}}">
					<span style="font-size: 0.8em;color: gray;">Badge Color:</span>
					<input type="text" name="{{$group->name}}-badge_color" class="form-control" value="{{$group->badge_color}}">
					<span style="font-size: 0.8em;color: gray;">Badge BG Color:</span>
					<input type="text" name="{{$group->name}}-badge_bg" class="form-control" value="{{$group->badge_bg}}">
					<span style="font-size: 0.8em;color: gray;">Badge Text:</span>
					<input type="text" name="{{$group->name}}-badge_text" class="form-control" value="{{$group->badge_text}}">
				</th>
				@endforeach
			</tr>
		</table>
		@endforeach
		<button class="btn btn-danger pull-right">Save Settings</button>
		</form>
	</div>
</div>

<script type="text/javascript">
	function toggle(id) {
		var htmlblock = document.getElementsByClassName(id+"-rows");
		var clickblock = document.getElementById("clicky-"+id);
		if ( clickblock.classList.contains("fa-plus") ) {
			$(htmlblock).slideDown(500, function(){
				clickblock.classList.remove("fa-plus");
				clickblock.classList.add("fa-minus");
			});
			return true;
		} else if ( clickblock.classList.contains("fa-minus") ) {
			$(htmlblock).slideUp(500, function(){
				clickblock.classList.remove("fa-minus");
				clickblock.classList.add("fa-plus");
			});
			return true;
		}
	}
</script>
@stop