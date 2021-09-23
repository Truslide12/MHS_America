<style type="text/css">

	.prog-marker-gray, .prog-marker-gray::after {
		background: linear-gradient(180deg, rgba(224, 224, 224,1) 0%, rgba(204, 204, 204,1) 100%);
		color: rgb(150, 145, 145);
	}

	.prog-marker-black, .prog-marker-black::after {
		background: linear-gradient(180deg, rgba(66,66,87,1) 0%, rgba(21,23,28,1) 100%);
		color: snow;
	}

	.prog-marker-blue, .prog-marker-blue::after {
		background: linear-gradient(180deg, rgba(66, 134, 244,1) 0%, rgba(51, 106, 196,1) 100%);
		color: snow;
	}

	.prog-marker-offblue, .prog-marker-offblue::after {
		background: linear-gradient(0deg, rgba(184, 206, 216,1) 0%, rgba(218, 229, 234,1) 100%);
		color: #93999b;
	}

	.prog-marker-green, .prog-marker-green::after {
		background: linear-gradient(180deg, rgba(47, 206, 108,1) 0%, rgba(45, 188, 102,1) 100%);
		color: #333;
	}


	.step-item {
		display: block;
		float: left;
		border: 1px solid gray;
		border-top-right-radius: 35px!important;
		border-bottom-right-radius: 35px!important;
		margin: 10px;
		position: relative;
		padding-top: 2px;
		padding-bottom: 4px;
		padding-right: 35px; 
		padding-left: 40px;
		margin-bottom: 20px;
		font-weight: thin;
		font-size: 1.4em;
		font-family: Voltaire;
		margin-right: 20px;
	}


	.step-item::after {
		display: flex;
		align-items: center;
		align-content: center;
		justify-content: center;
		height: 44px;
		width: 44px;
		border: 1px solid gray;
		border-radius: 23px;
		position: absolute;
		left: -10px;
		top: -5px;
	}


	.step-item::after { content: attr(step); }



	.steps-complete::after {
		content: "\f00c" !important;
		font-family: FontAwesome!important;
	}


.heavypad { background:none;margin: 25px 80px; }
.mobo-dd { display: none; }
.wzrd {
	display: flex;align-items: center;align-content: center;justify-content: center;overflow: none;
}
@media (max-width: 768px) { 
.mobo-dd { display: block;margin: 20px 0px; }
.wzrd { display: none;width: 100%; }
.heavypad { background:none;margin: 5px 8px; }

}



	h1 { color: #4a879e;font-family: Voltaire; }
	h2, h1 {
		font-weight: bold;
		font-size: 3.2em;
	}
</style>
<div class="container" id="company-title">
	<div class="row white" style="text-align: center;">
		<div class="col-md-12">
			<h1 style="margin-top:50px;margin-bottom: 50px;">
				List Your Home
			</h1>
			<p class="lead"></p>
		</div>
	</div>
	<div class="row white">
		<div class="col-md-12">

			<div class="wzrd">
			@php
				if( isset($step_id)){
				 $s = $step_id;
				} else { $s = 2; }
				$steps = Array(1=>"Sign In", 2=>"Order Form", 3=>"Confirmation", 4=>"Payment", 5=>"Success");
				$active_color = "prog-marker-blue";

			@endphp


			@foreach ( $steps as $id => $step )
				<div step="{{$id}}" 
				class="step-item @if( $id == $s ) prog-marker-blue @elseif( $id < $s ) prog-marker-offblue steps-complete @else prog-marker-gray @endif">
					{{$step}}
				</div>
			@endforeach
			</div>

			<select class="form-control mobo-dd" disabled="">
			@foreach ( $steps as $id => $step )
				<option @if($id == $s) selected @endif>Current Step: {{ $step }} </option>
			@endforeach
			</select>
		</div>
	</div>
	<div class="row white">
		<div class="col-md-12" style="text-align:right;">

@php

	if ( Session::get('plan') == "free" ) {
		$plan = "Free Profile (1 Year)";
		$price = "$0.00";
	} else {
		$plan = "Home Listing (6 Months)";
		$price = "$39.99";
	}

@endphp
			@if($s<5)
			<strong>You're Purchasing: </strong> {{$plan}} ({{$price}}) | 
			<a href="/getstarted/home/clearsession">Cancel</a>
			@endif
		</div>
	</div>




</div>