@extends('admin.content')

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/admin-ppp.css">
    <style type="text/css">
    	.faded {
    		opacity: 0.2;
    	}
    </style>
<div class="row">
	<div class="col-md-12" style="position: relative;padding-bottom: 48px; ">
		<h1>Home Settings</h1>
		<div style="position: absolute;top:0;right: 5px;"">
			<span class="wholabel techteam" style="">Tech. Team</span>
			<span class="wholabel salesteam" style="">Sales Team</span>
			<span class="wholabel supportteam" style="">Support Team</span>
		</div>
	</div>
	<div class="col-md-12" style="margin-bottom: 22px;">

		<table class="table table-bordered table-hover table-striped dataTable">
			<tr>
				<th width="80%">Setting</th>
				<th width="20%">Value</th>
			</tr>
			<tr>
				<td>Description Max Characters</td>
				<td>
					<input type="num" name="" class="form-control" value="500">
				</td>
			</tr>
			<tr>
				<td>Max number of photos</td>
				<td>
					<input type="num" name="" class="form-control" value="5">
				</td>
			</tr>
			<tr>
				<td>Max photo upload size(MB)</td>
				<td>
					<input type="num" name="" class="form-control" value="5">
				</td>
			</tr>
			<tr>
				<th colspan="2"><button class="btn btn-success pull-right">Save Settings</button></th>
			</tr>
		</table>


	</div>



</div>

<script type="text/javascript">

</script>
@stop