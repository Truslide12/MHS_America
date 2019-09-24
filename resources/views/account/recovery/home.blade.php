@extends('account.layouts.help-center')

@php
$expand_title = true;
 $page_header = "Account Recovery";
  $meta_description = "Get help when you've lost access to you MHS America account.";
@endphp

@section('helpcontent')
<h3 class="margin-b">Account recovery</h3>
<div class="row">
	<div class="col-md-4">
		<h4>
			<a href="{{ URL::route('account-recovery-username') }}" class="btn btn-default btn-block" style="padding:20px 15px">
				I forgot my username.
			</a>
		</h4>
	</div>
	<div class="col-md-4">
		<h4>
			<a href="{{ URL::route('account-recovery-password') }}" class="btn btn-default btn-block" style="padding:20px 15px">
				I forgot my password.
			</a>
		</h4>
	</div>
</div>
@if(1==2)<h3>Account removal</h3>
<div class="row">
	<div class="col-md-12">
		If you wish to remove or temporarily deactivate your account, <a href="#">click here</a>.
	</div>
</div>@endif
@stop
