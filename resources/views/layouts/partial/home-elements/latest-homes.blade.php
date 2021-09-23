@php

  /*******************************************
  * From dummy values to dumb values..
  * I know this needs work just improving a bit
  * from what we had.
  ********************************************/
  $da = Request::create('/api/latest/homes', 'GET');
  $da = Route::dispatch($da);
  //$da = file_get_contents("http://mhsamerica.loc/api/latest/homes");
  //$da = json_decode($da->data);
  //dd($da->getData()->data);

  $f = $da->getData()->data;
  
  //dd($f);
  
  $img = Array();
  $lh = 0;

  if ( empty($f) ) { 
    $lh = 0; 
  } else {
    foreach( $f as $d ) {
      $lh++;
      if ( $d->photos ) {
        $p = (array) json_decode(stripslashes($d->photos));
        if ( ! empty($p) ) {
          $p = array_values($p)[0];
          $img[] = $p->url;
        } else {
          $img[] = "nophoto"; 
        }
      } else {
        $img[] = "nophoto"; 
      }
    }
  }

@endphp

<!-- Start Latest Homes -->
	<div class="row clearfix nudge white">
		<div class="col-md-12">
			<div class="page-header no-margin-t">
				<h1 class="no-margin-t text-center" style="text-transform: capitalize;">Latest mobile homes for sale</h1>
			</div>
		</div>
	</div>
	<div class="row clearfix nudge white latest-homes-section">
		<div class="col-md-12">
			<div class="page-header no-margin-t">
				<div class="mhs-slideshow">
					@if(1==2)
					<div class="mhs-slide-left-btn" onclick="changeHomes();"><i class="fa fa-chevron-left"></i></div>
					<div class="mhs-slide-right-btn" onclick="changeHomes();"><i class="fa fa-chevron-right"></i></div>
					<div class="mhs-slideshow-loader"><small>Loading</small></div>
					@endif
					@foreach( $f as $home )
					<div class="mhs-slide" id="slide-{{$loop->index}}">
						<div class="card clickycard" href="home/{{ $home->id }}">
			                <div class="card-image">
			                    <img class="img-responsive" src="/imgstorage/{{$img[$loop->index]}}_sm.jpg">
			                        <div class="fs-ribbon" style="border-top-color: {{$home->sales_ribbon->color}}!important;">
								        <div class="txt">{!!$home->sales_ribbon->text!!}</div>
								    </div>
			                    <span>${{number_format($home->price)}}</span>
			                </div><!-- card image -->

			                <div class="card-content">
			                    <span class="card-title">
			                    	<div class="row">
			                    	<div class="col-md-12">
			                    		{{$home->title}}
			                    	</div>
			                    	</div>
			                    	<div class="row">
			                    	<div class="col-md-12">
			                    		<small>{{$home->beds}}bd &middot; {{$home->baths}}ba &middot; {{$home->type_label}}[{{$home->dim_label}}]</small><br>
			                   		</div>
			                   		</div>
			                    	<div class="row">
				                    	<div class="col-md-12">
				                    		<small>{{$home->profile->title}}</small>
				                   		</div>
			                   		</div>
			                   		<div class="row">
			                   			<div class="col-md-12">
				                    		<small>{{$home->city->place_name}} {{strtoupper($home->state->abbr)}}, {{$home->zipcode}}</small>
				                   		</div>
			                   		</div>
			                    </span>                    
			                </div><!-- card content -->


			            </div>
					</div>
					@endforeach
					@if( $lh < 4 )
					@while( $lh < 4 )
					@php $lh++; @endphp
					<div class="mhs-slide" id="slide-{{$lh}}">
						<div class="card clickycard" href="/page/home-plans">
			                <div class="card-image">
			                    <img class="img-responsive" src="/img/mhs_empty_thumb.png">
			                        <div class="fs-ribbon" style="border-top-color: red!important;">
								        <div class="txt">List Yours</div>
								    </div>
			                    <span style="color: red;text-shadow: none;">$39.99</span>
			                </div><!-- card image -->

			                <div class="card-content">
			                    <span class="card-title">
			                    	<div class="row">
			                    	<div class="col-md-12">
			                    		$39.99 for 180 Day Listing
			                    	</div>
			                    	</div>
			                   		<div class="row">
			                   			<div class="col-md-12">
				                    		<small> - Promote Online</small>
				                   		</div>
			                   		</div>
			                    	<div class="row">
			                    	<div class="col-md-12">
			                    		<small> - 5 Photos</small><br>
			                   		</div>
			                   		</div>
			                    	<div class="row">
				                    	<div class="col-md-12">
				                    		<small> - Detailed Home Information</small>
				                   		</div>
			                   		</div>
			                    </span>                    
			                </div><!-- card content -->
			            </div>
					</div>
					@endwhile
					@endif
				</div>
			</div>
		</div>
	</div>
<!-- End Latest Homes -->
