<!-- Social Box -->
		@if($is_paid_profile && is_array(json_decode($profile->social_media, true)) && ( $profile->socialmedia("website") || $profile->socialmedia("facebook") || $profile->socialmedia("twitter") || $profile->socialmedia("linkedin") || $profile->socialmedia("instagram") || $profile->socialmedia("promovideo") ) )
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					Social Media
				</div>
			</div>
			<div class="panel-body">
				@php
					$tlink = str_replace("https://", "http://", $profile->socialmedia("promovideo") );
					preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $tlink, $match);
					if ( array_key_exists(1, $match) ) {
						$youtube_id = $match[1];
					} else {
						$youtube_id = false;
					} 
				@endphp
				@if( $youtube_id )
				<div class="ytcontainer">
				<iframe width="100%" src="https://www.youtube.com/embed/{{ $youtube_id }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="ytvideo" allowfullscreen></iframe>
				</div>
				@else( $profile->socialmedia("promovideo") )
				<video width="100%" controls>
					<source src="{{ $profile->socialmedia('promovideo') }}" type="video/mp4">
				</video>
				@endif
				<div class="" style="display: flex;width: 100%;font-size: 1em;">
				@if( $profile->socialmedia("website") )<a target="_blank" href="{{ $profile->socialmedia('website') }}" class="btn btn-primary" style="flex:1;" rel="nofollow"><i class="fa fa-globe"></i> Website</a>@endif
				@if( $profile->socialmedia("facebook") )<a target="_blank" href="{{ $profile->socialmedia('facebook') }}" class="btn btn-primary" style="flex:1;" rel="nofollow"><i class="fa fa-facebook"></i> Facebook</a>@endif
				@if( $profile->socialmedia("twitter") )<a target="_blank" href="{{ $profile->socialmedia('twitter') }}" class="btn btn-primary" style="flex:1;" rel="nofollow"><i class="fa fa-twitter"></i> Twitter</a>@endif
				@if( $profile->socialmedia("linkedin") )<a target="_blank" href="{{ $profile->socialmedia('linkedin') }}" class="btn btn-primary" style="flex:1;" rel="nofollow"><i class="fa fa-instagram"></i> Instagram</a>@endif
				@if( $profile->socialmedia("instagram") )<a target="_blank" href="{{ $profile->socialmedia('instagram') }}" class="btn btn-primary" style="flex:1;" rel="nofollow"><i class="fa fa-linkedin"></i> Linkedin</a>@endif
				</div>
			</div>
		</div>
		@endif