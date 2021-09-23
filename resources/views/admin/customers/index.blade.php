@extends('admin.content')

@section('content')
<style type="text/css">
	.ppcontainer h3 {
		border-bottom: 1px solid black;
		padding: 4px
	}
	.ppcontainer i:hover {
		cursor: pointer;
		color: green;
	}
</style>
<div class="row ppcontainer">
	<div class="col-md-12">
		<h1>MHS Customer Management Portal</h1>
		<p style="font-size: 1.5em;">
			This module is designed to assist in routine tasks in customer support and management. 
		</p>
		<hr style="margin-bottom: 96px;">

		<h3>Managing Platform Customers <i onclick="toggle('partners');" id="clicky-partners" class="fa fa-plus pull-right" style="margin-right: 12px;"></i></h3>
		<div id="partners" style="display: none;">
			<p style="font-size: 1.25em;">
				This tool can only be used to manage existing customers on MHS America. You will be able to quickly lookup customer details and perform actions.
			</p>
		</div>

	</div>
	<div class="col-md-12">

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