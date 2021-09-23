@section('incls-head-early')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
@stop

<strong>Congratulations!</strong><br>
<p>You are now part of the MHS Family! The staff of MHS America would like to thank you for choosing to promote your community with a paid profile. Over the next year our goal is to provide you the best tools for promoting your community online.</p>

<strong>Ready to dive right in?</strong>
<p>
	You now have access to a full range of features designed to help promote your community. Here are just some of what you've unlocked:
	<ul>
		<li>5 Free Photos for public viewing</li>
		<li>Unlimited promotion of your vacant spaces</li>
		<li>List all of your provided amenities</li>
		<li>Write your own About Us section for your community.</li>
		<li>Add your communities website to your profile</li>
		<li>Full community details including: total spaces, space rent, office hours and contact information.</li>
	</ul>
</p>

@if(1==2)
<a class="btn btn-success btn-sm btn-align-fix" style="margin-bottom: 10px;width:100%;padding: 10px;"><i class="fa fa-pencil"></i> Full Featured Profile Editor</a>

<a class="btn btn-success btn-sm btn-align-fix" style="margin-bottom: 10px;width:100%;padding: 10px;"><i class="fa fa-camera"></i> Photo Uploader</a>

<a class="btn btn-success btn-sm btn-align-fix" style="margin-bottom: 10px;width:100%;padding: 10px;"><i class="fa fa-home"></i> Spaces Manager</a>



<style type="text/css">
	.newtoolblock {
		display: flex;
		flex-direction: column;
		align-content: center;
		align-items: center;
		justify-content: center;
		padding: 10px;
	}

	.iconbox {
		flex-size: 1;
		border:1px solid black;
		text-align: center;
		width: 80px;
		height: 80px;
		padding: auto auto;
		display: flex;
		border-radius: 10px!important;
		color: snow;
		background: rgb(34,25,201);
		background: linear-gradient(0deg, rgba(34,25,201,1) 0%, rgba(9,9,121,1) 35%, rgba(36,89,99,1) 100%);

	}
	.iconbox:hover,
	.iconbox:active {
		cursor: pointer;
		text-decoration: none;
		color: #9cf2ff;
	}

	.titlebox {
		flex-size: 1;
		display: inline-flex;
		text-align: center;
	}

	.price-free {
		color: orange;
	}
	.price-cost {
		color: green;
	}
</style>
@php
$pid = Session::get('order_data')['profile_data']->id;
$cid = Session::get('order_data')['company_data']->id;
@endphp
<div class="row newtoolsbox">
	<div class="col-md-4 newtoolblock">
		<a href="{{ URL::route('editor', 			array('profile' => $pid, 'from_company' => $cid)) }}" target="_blank" class="iconbox">
			<i style="font-size:55px;margin:auto auto;" class="fas fa-pen-alt"></i>
		</a>

		<div class="titlebox">
			<strong>Profile Editor</strong>
		</div>
			<span class="price-free">Free</span>
	</div>

	<div class="col-md-4 newtoolblock">
		<a href="{{ URL::route('editor-photos', 	array('profile' => $pid, 'from_company' => $cid)) }}" target="_blank" class="iconbox">
			<i style="font-size:55px;margin:auto auto;" class="fas fa-camera-retro"></i>
		</a>

		<div class="titlebox">
			<strong>Photo Editor</strong>
		</div>

		<div class="titlebox">
			<span class="price-free">Free</span>
		</div>
	</div>

	<div class="col-md-4 newtoolblock">
		<a href="{{ URL::route('editor-spaces', 	array('profile' => $pid, 'from_company' => $cid)) }}" target="_blank" class="iconbox">
			<i style="font-size:55px;margin:auto auto;" class="fas fa-sign"></i>
		</a>

		<div class="titlebox">
			<strong>Space Manager</strong>
		</div>
			<span class="price-free">Free</span>
	</div>

	<div class="col-md-6 newtoolblock">
		<a href="{{ URL::route('editor-homes', 	array('profile' => $pid, 'from_company' => $cid)) }}" target="_blank" class="iconbox">
			<i style="font-size:55px;margin:auto auto;" class="fas fa-home"></i>
		</a>

		<div class="titlebox">
			<strong>Home Manager</strong>
		</div>
			<span class="price-cost">$39.99/Home</span>
	</div>

	<div class="col-md-6 newtoolblock">
		<a href="{{ URL::route('page', array('slug'=>'contact')) }}" target="_blank" class="iconbox">
			<i style="font-size:55px;margin:auto auto;" class="fas fa-user-graduate"></i>
		</a>

		<div class="titlebox">
			<strong>User Tutorials</strong>
		</div>
			<span class="price-free">Free</span>
	</div>
</div>



<script type="text/javascript">
	profile_editor_loc 	= "{{ URL::route('editor-photos', 	array('profile' => $pid, 'from_company' => $cid)) }}";
	photo_editor_loc 	= "{{ URL::route('editor', 			array('profile' => $pid, 'from_company' => $cid)) }}";
	space_editor_loc 	= "{{ URL::route('editor-spaces', 	array('profile' => $pid, 'from_company' => $cid)) }}";
	home_editor_loc 	= "{{ URL::route('editor-homes', 	array('profile' => $pid, 'from_company' => $cid)) }}";
	tutorials_loc 		= "{{ URL::route('page', array('slug'=>'contact')) }}";
</script>
@endif