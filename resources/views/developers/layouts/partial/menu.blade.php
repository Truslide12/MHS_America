<div class="panel panel-default">
	<div class="panel-body">
		<strong>Navigation</strong>
	</div>
	<ul class="list-group">
		<li class="list-group-item @if(Request::is('developers/wiki/Home*')) active @endif">
			@if(Request::is('developers/wiki/Home*'))
			Home
			@else
			<a href="{{ URL::route('wiki-page', array('page' => 'Home')) }}">Home</a>
			@endif
		</li>
		<li class="list-group-item">
			hello
		</li>
		<li class="list-group-item">
			hello
		</li>
		<li class="list-group-item">
			hello
		</li>
	</ul>
</div>