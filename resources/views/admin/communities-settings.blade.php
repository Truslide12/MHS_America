@extends('admin.content')

@section('content')
<style>
	.centerit {
		text-align: center;
	}
	.unclaimed {
		background: #f9f9f9!important;
	}
	.free {
		background: #fdffe8!important;
	}
	.paid {
		background: #c7f9e2!important;
	}
	.premium {
		background: #e8fdff!important;
	}
</style>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered table-hover table-striped dataTable">
			<thead>
				<tr>
					<th width="80%">Input</th>
					<th width="20%" class="centerit unclaimed">Value</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>About Section Character Limit</td>
					<td class="centerit unclaimed">
						<input type="number" name="inp_" class="form-control" value="500" min="100" max="1000" step="50">
					</td>
				</tr>
				<tr>
					<td>Water Options</td>
					<td class="centerit unclaimed">
						<select id="water_opts" class="form-control" style="margin-bottom: 5px;" multiple="">
							<option>City</option>
							<option>Well</option>
						</select>
						<button onclick="remove('water_opts');"><i class="fa fa-minus"></i></button>
						<button onclick="add('water_opts');"><i class="fa fa-plus"></i></button>
						<button onclick="moveup('water_opts');"><i class="fa fa-arrow-up"></i></button>
						<button onclick="movedown('water_opts');"><i class="fa fa-arrow-down"></i></button>
					</td>
				</tr>
				<tr>
					<td>Sewer Options</td>
					<td class="centerit unclaimed">
						<select id="sewer_opts" class="form-control" style="margin-bottom: 5px;" multiple="">
							<option>Sewer</option>
							<option>Septic</option>
						</select>
						<button onclick="remove('sewer_opts');"><i class="fa fa-minus"></i></button>
						<button onclick="add('sewer_opts');"><i class="fa fa-plus"></i></button>
						<button onclick="moveup('sewer_opts');"><i class="fa fa-arrow-up"></i></button>
						<button onclick="movedown('sewer_opts');"><i class="fa fa-arrow-down"></i></button>
					</td>
				</tr>
				<tr>
					<td>Gas Options</td>
					<td class="centerit unclaimed">
						<select id="gas_opts" class="form-control" style="margin-bottom: 5px;" multiple="">
							<option>Natural</option>
							<option>Propane</option>
						</select>
						<button onclick="remove('gas_opts');"><i class="fa fa-minus"></i></button>
						<button onclick="add('gas_opts');"><i class="fa fa-plus"></i></button>
						<button onclick="moveup('gas_opts');"><i class="fa fa-arrow-up"></i></button>
						<button onclick="movedown('gas_opts');"><i class="fa fa-arrow-down"></i></button>
					</td>
				</tr>
			</tbody>
		</table>
		<button class="btn btn-primary pull-right">Save</button>
	</div>
</div>
<script type="text/javascript">
	function movedown(sel) {
        var $op = $('#'+sel+' option:selected'),
            $this = $(this);
            $op.last().next().after($op);
	}
	function moveup(sel) {
        var $op = $('#'+sel+' option:selected'),
            $this = $(this);
            $op.first().prev().before($op); 
	}
	function remove(sel) {
        var $op = $('#'+sel+' option:selected');
            $op.remove(); 
	}
	function add(sel) {
		var key = prompt("Name");
		var value = prompt("Title");

     	$('#'+sel)
         	.append($("<option></option>")
            .attr("value",key)
            .text(value));  
	}
</script>
@stop