@extends('admin.content')

@section('content')
<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs">
			<li role="presentation" class="active"><a href="{{ URL::route('admin-communities') }}"><strong>View Communities</strong></a></li>
			<li role="presentation"><a href="{{ URL::route('admin-communities-spotlight') }}">Community of the Week</a></li>
			<li role="presentation"><a href="{{ URL::route('admin-communities-amenities') }}">Community Amenities</a></li>
			<li role="presentation"><a href="{{ URL::route('admin-communities-settings') }}">Settings</a></li>
		</ul>
		<table class="table table-bordered table-hover table-striped dataTable" style="border-top:0">
			<thead>
				<tr>
					<th>Newest Communities</th>
				</tr>
			</thead>
			<tbody>
				@foreach($communities as $community)
				<tr>
					<td>{{ $community->title }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop