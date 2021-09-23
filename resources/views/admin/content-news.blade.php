@extends('admin.content')

@section('content')
<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs">
			<li role="presentation" class="active"><a href="#"><strong>News articles</strong></a></li>
			<li role="presentation"><a href="{{ URL::route('admin-content-pages') }}">Static pages</a></li>
		</ul>
		<table class="table table-bordered @if(count($news) > 0) table-hover @endif table-striped dataTable" style="border-top:0">
			<thead>
				<tr>
					<th>Title</th>
				</tr>
			</thead>
			<tbody>
			@if(count($news) > 0)
			@foreach($news as $article)
				<tr>
					<td>{{ $article->title }}</td>
				</tr>
			</tbody>
			@endforeach
			@else
			<tr>
				<td><em>No news articles</em></td>
			</tr>
			@endif
		</table>
	</div>
</div>
@stop