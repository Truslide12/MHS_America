	<div class="row clearfix nudge white">
		<div class="col-md-12">
			<div class="page-header no-margin-t">
				<h1 class="no-margin-t text-center">Recently Listed Homes</h1>
			</div>
		</div>
	</div>
	<div class="row clearfix nudge white" style="padding-bottom: 1in;">
		<div class="col-md-12">
			<div class="page-header no-margin-t">
				<div class="mhs-slideshow">
					@if(1==2)
					<div class="mhs-slide-left-btn" onclick="changeHomes();"><i class="fa fa-chevron-left"></i></div>
					<div class="mhs-slide-right-btn" onclick="changeHomes();"><i class="fa fa-chevron-right"></i></div>
					<div class="mhs-slideshow-loader"><small>Loading</small></div>
					@endif
					@foreach( $da->data as $home )
					<div class="mhs-slide" id="slide-{{$loop->index}}">
						<div class="card clickycard" href="home/{{ $home->id }}">
			                <div class="card-image" style="position: relative;">
			                    <img class="img-responsive" src="/imgstorage/{{$img[$loop->index]}}_sm.jpg" style="min-width: 100%;">
			                        <div class="fs-ribbon" style="border-top-color: {{$home->sales_ribbon->color}}!important;">
								        <div class="txt">{!!$home->sales_ribbon->text!!}</div>
								    </div>
			                    <span style="position: absolute;top: 10px;right: 10px;font-size:32px;color:snow;font-family: Voltaire;  text-shadow: 2px 2px #000;">${{number_format($home->price)}}</span>
			                </div><!-- card image -->

			                <div class="card-content">
			                    <span class="card-title">
			                    	<div class="row">
			                    	<div class="col-md-12">
			                    		{{$home->title}}
			                    	</div>
			                    	</div>
			                    	<div class="row" style="margin-top: 5px;">
			                    	<div class="col-md-12">
			                    		<small style="text-align: right;width: 100%;">{{$home->beds}}bd &middot; {{$home->baths}}ba &middot; {{$home->type_label}}[{{$home->dim_label}}]</small><br>
			                   		</div>
			                   		</div>
			                    	<div class="row" style="margin-top: 5px;">
				                    	<div class="col-md-12">
				                    		<small style="text-align: right;">{{$home->profile->title}}</small>
				                   		</div>
			                   		</div>
			                   		<div class="row" style="margin-top: 5px;">
			                   			<div class="col-md-12">
				                    		<small style="text-align: right;">{{$home->city->place_name}} {{strtoupper($home->state->abbr)}}, {{$home->zipcode}}</small>
				                   		</div>
			                   		</div>
			                    </span>                    
			                </div><!-- card content -->


			            </div>
					</div>
					@endforeach
					@if( $lh < 4 )
					<div class="mhs-slide" id="slide-1">
						<div class="card clickycard" href="">
			                <div class="card-image" style="position: relative;">
			                    <img class="img-responsive" src="/img/mhs_empty_thumb.png" style="min-width: 100%;">
			                        <div class="fs-ribbon" style="border-top-color: red!important;">
								        <div class="txt">List Yours</div>
								    </div>
			                    <span style="position: absolute;top: 10px;right: 10px;font-size:32px;color:blue;font-family: Voltaire;">$39.99</span>
			                </div><!-- card image -->

			                <div class="card-content">
			                    <span class="card-title">
			                    	<div class="row">
			                    	<div class="col-md-12">
			                    		$39.99 for 180 Day Listing
			                    	</div>
			                    	</div>
			                   		<div class="row" style="margin-top: 5px;">
			                   			<div class="col-md-12">
				                    		<small style="text-align: right;"> - Promote Online</small>
				                   		</div>
			                   		</div>
			                    	<div class="row" style="margin-top: 5px;">
			                    	<div class="col-md-12">
			                    		<small style="text-align: right;width: 100%;"> - 5 Photos</small><br>
			                   		</div>
			                   		</div>
			                    	<div class="row" style="margin-top: 5px;">
				                    	<div class="col-md-12">
				                    		<small style="text-align: right;"> - Detailed Home Information</small>
				                   		</div>
			                   		</div>
			                    </span>                    
			                </div><!-- card content -->


			            </div>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>