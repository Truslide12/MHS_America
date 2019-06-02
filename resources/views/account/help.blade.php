@extends('account.layouts.help-center')

@section('helpcontent')
<h3>Account recovery</h3>
<p>Account recovery will help you re-gain access to your account if you've lost your username or password. It will also assist with accounts that may have been breached by a malicious user.</p>
<p>
	<a href="{{ URL::route('account-recovery') }}" >Go to Account Recovery</a>
</p>
<h3>Account freeze</h3>
<p>If you want to temporarily deactivate your account, use account freeze. When you freeze an account, login will be disabled until it is unfrozen. See the account freeze page for more details.</p>
<p>
	<a href="{{ URL::route('account-recovery') }}" >Go to Account Freeze</a>
</p>
@stop
