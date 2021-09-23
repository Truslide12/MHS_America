@extends('admin.content')

@section('content')
<div class="row">
	<div class="col-md-12">
		<table id="userform" class="table table-bordered table-hover table-striped dataTable">
			<thead>
				<tr>
					<th width="20%">Name</th>
					<th width="44%">Title</th>
					<th class="centerit" width="12%">Disabled</th>
					<th class="centerit" width="12%">Visible</th>
					<th class="centerit" width="12%">Order</th>
				</tr>
			</thead>
			<tbody>
				@foreach($amenities as $amenity)
				<tr id="{{ $amenity->name }}">
					<td><input type="text" name="name" value="{{ $amenity->name }}" class="form-control" disabled></td>
					<td><input type="text" name="title" value="{{ $amenity->title }}" class="form-control"></td>
					<td class="centerit"><input type="checkbox" name="disabled" @if($amenity->disabled == TRUE) checked @endif></td>
					<td class="centerit"><input type="checkbox" name="visible" @if($amenity->visible  == TRUE) checked @endif></td>
					<td class="centerit">
						<!-- {{$amenity->order}} -->
						<button><i class="fa fa-arrow-up" onclick="moveup('{{ $amenity->name }}');"></i></button>
						<button><i class="fa fa-arrow-down"></i></button>
					</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<td style="background: #dfdfdf;" colspan="5">Add New Amenity</td>
				</tr>
				<tr id="addform">
					<td><input type="text" name="name" value="" class="form-control" onblur="nameUp(this.value);" autocomplete="off"></td>
					<td><input type="text" name="title" value="" class="form-control" onblur="titleUp(this.value);" autocomplete="off"></td>
					<td class="centerit"><input type="checkbox" name="disabled"></td>
					<td class="centerit"><input type="checkbox" name="visible"></td>
					<td class="centerit"><button class="btn" onclick="addNew();">Add</button> </td>
				</tr>
			</tfoot>
		</table>
		<button class="btn btn-primary pull-right" onclick="savetoserver();">Save Changes</button>
	</div>
</div>
<script type="text/javascript">
	var formdata = {};

	function buildData() {
		formdata.rows = [];
		$('#userform tbody tr').each(function (i, row) {

		        // reference all the stuff you need first
		        var $row 		= $(row),
		            name 		= $row.find('input[name*="name"]').val(),
		            title 		= $row.find('input[name*="title"]').val(),
		            disabled 	= ($row.find('input[name*="disabled"]').prop('checked')) ? true : false;
		            visible 	= ($row.find('input[name*="visible"]').prop('checked')) ? true : false;

		            if ( name ) {
		            	formdata.rows[formdata.rows.length] = {order: (formdata.rows.length+1), fname: name, title: title, disabled: disabled, visible: visible};
		        	}
		            

		});
		
	}

	function moveup(name) {
		active_row = $("#"+name);
		prev_row = active_row.prev();

		aid = active_row.attr("id");
		pid = prev_row.attr("id");
		ahtml = active_row.html();
		phtml = prev_row.html();

		active_row.html(phtml);
		prev_row.html(ahtml);

		active_row.attr('id', "t");
		prev_row.attr('id', aid);
		$("#t").attr('id', pid);


	}

	function isfree(name, title) {
		if ( name && title ) {
			buildData();
			for ( row in formdata.rows ) {
				if ( formdata.rows[row].fname  == name ) { alert("Name '"+name+"' is taken"); return false; }
				if ( formdata.rows[row].title == title ) { alert("Title '"+title+"' is taken"); return false; }
			}
			return true;
		} else { console.log("Please fill out the form completely.."); return false; }
		
	}

	function addNew() {
		$frm = $("#addform");

		nname 		= $frm.find('input[name*="name"]').val(),
		ntitle 		= $frm.find('input[name*="title"]').val(),
		ndisabled 	= ($frm.find('input[name*="disabled"]').prop('checked')) ? true : false;
		nvisible 	= ($frm.find('input[name*="visible"]').prop('checked')) ? true : false;


		if ( isfree(nname, ntitle) ) {
			console.log(nname, ntitle, ndisabled, nvisible)
			$('#userform tbody tr:last').after("<tr id='"+nname+"'>"+$frm.html()+"</tr>");
			$('#userform tbody tr:last td:last').html("<button><i class=\"fa fa-arrow-up\" onclick=\"moveup('"+nname+"');\"></i></button>&nbsp;<button><i class=\"fa fa-arrow-down\"></i></button>");
			$new = $('#userform tbody tr:last');
			$new.find('input[name*="name"]').attr("value", nname);
			$new.find('input[name*="title"]').attr("value", ntitle);
			$new.find('input[name*="disabled"]').prop('checked', ndisabled);
			$new.find('input[name*="visible"]').prop('checked', nvisible);
			
			$frm.find('input[name*="name"]').val(""),
			$frm.find('input[name*="title"]').val(""),
			$frm.find('input[name*="disabled"]').prop('checked', false);
			$frm.find('input[name*="visible"]').prop('checked', false);

		} else {

		}
	}

	function savetoserver() {
		buildData();
		console.log(formdata)
		$.post("{{ URL::route('admin-communities-amenities') }}", formdata, function(data) {
			if ( data.status == 1 )
			{
				console.log("data has been saved");
				window.location = window.location;
			}
		});
	}

	function nameUp(name) {
		buildData();
		console.log(formdata, name)
		for ( row in formdata.rows ) {
			if ( formdata.rows[row].fname  == name ) { 
				alert("Name '"+name+"' is taken"); 
				$new = $('#userform tfoot tr:last').find('input[name*="name"]');
				$new.val("");
				$new.focus();
			}
		}
	}

	function titleUp(title) {
		buildData();
		console.log(formdata, title)
		for ( row in formdata.rows ) {
			if ( formdata.rows[row].title  == title ) { 
				alert("Name '"+title+"' is taken"); 
				$new = $('#userform tfoot tr:last').find('input[name*="title"]');
				$new.val("");
				$new.focus();
			}
		}
	}
</script>
@stop