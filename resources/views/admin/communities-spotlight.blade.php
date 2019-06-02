@extends('admin.content')

@section('content')
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered table-hover table-striped dataTable">
			<thead>
				<tr>
					<th colspan=2>Community Spotlight</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="25%">Spotlight Title</td>
					<td width="75%"><input type="text" value="Community of the Week" class="form-control"></td>
				</tr>
				<tr>
					<td>Spotlight Community</td>
					<td>
					    <div class="input-group">
					      <input type="text" class="form-control">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="button">Find Community</button>
					      </span>
					    </div>
					</td>
				</tr>
				<tr>
					<td>Spotlight Blurb</td>
					<td>
						<textarea class="form-control" rows="15"></textarea>
					</td>
				</tr>
			</tbody>
		</table>
		<button class="btn btn-primary pull-right">Save</button>
	</div>
</div>
@stop