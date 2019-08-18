@extends('admin.layouts.master')

@section('sidemenu')
@include('admin.layouts.partial.side-browse')
@stop

@section('content')
<div class="row">
	<div class="col-md-12">
		<table class="table table-striped responsive-table">
			<thead>
				<tr>
					<th class="col-md-1">#</th>
					<th class="col-md-8">Name</th>
					<th class="col-md-2">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{{ $profiles->links() }}
				@foreach($profiles as $profile)
				<tr>
					<td>{{ $profile->id }}</td>
					<td>{{ $profile->title }}</td>
					<td class="text-right">
						<a href="{{ URL::route('admin-browse-profiles-view', array('user' => $profile->id)) }}" class="btn btn-xs btn-metis-4 btn-rect">View</a>
						<a href="{{ URL::route('admin-browse-profiles-edit', array('user' => $profile->id)) }}" class="btn btn-xs btn-default btn-rect">Edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop