@extends('admin.content')

@section('content')
<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs">
			<li role="presentation"><a href="{{ URL::route('admin-content-news') }}">News articles</a></li>
			<li role="presentation" class="active"><a href="#"><strong>Static pages</strong></a></li>
		</ul>
		<table class="table table-bordered table-hover table-striped dataTable" style="border-top:0">
			<thead>
				<tr>
					<th>Title</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pages as $page)
				<tr>
					<td>{{ $page->title }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop