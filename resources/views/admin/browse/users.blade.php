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
					<th class="col-md-2">First Name</th>
					<th class="col-md-2">Last Name</th>
					<th class="col-md-4">Roles</th>
					<th class="col-md-2">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{{ $users->render() }}
				@foreach($users as $one_user)
				<tr>
					<td>{{ $one_user->id }}</td>
					<td>{{ $one_user->first_name }}</td>
					<td>{{ $one_user->last_name }}</td>
					<td>{{ implode(', ', $one_user->roles->pluck('name')->all()) }}</td>
					<td class="text-right">
						<a href="{{ URL::route('admin-browse-users-view', array('user' => $one_user->id)) }}" class="btn btn-xs btn-metis-4 btn-rect">View</a>
						<a href="{{ URL::route('admin-browse-users-edit', array('user' => $one_user->id)) }}" class="btn btn-xs btn-default btn-rect">Edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop