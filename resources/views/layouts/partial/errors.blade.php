@if($errors->count() > 0)
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert" data-label="Close"><span aria-hidden="true">&times;</span></button>
	{{ $error }}
</div>
@endforeach
@endif
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	<button class="close" data-dismiss="alert" aria-label="Close">&times;</button>
	{{ Session::get('success') }}
</div>
@endif