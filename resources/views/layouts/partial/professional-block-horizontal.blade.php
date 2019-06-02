<div class="panel panel-primary profile-panel horizontal">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="profile-title">
								<a href="{{ URL::route('profile', array('id' => $professional->id)) }}">{{ $professional->title }}</a><br>
								<small>{{ $professional->tagline }}</small>
							</h3>
							<p>
								@if(Auth::check())
								<span class="rating rating-4">
									<span class="star-1"><i class="glyphicon glyphicon-star"></i></span>
									<span class="star-2"><i class="glyphicon glyphicon-star"></i></span>
									<span class="star-3"><i class="glyphicon glyphicon-star"></i></span>
									<span class="star-4"><i class="glyphicon glyphicon-star"></i></span>
									<span class="star-5"><i class="glyphicon glyphicon-star"></i></span>
								</span>
								@endif
							</p>
							<p class="properties">
								<span class="tape bg-info text-info">{{ $professional->type }}</span>
							</p>
						</div>
						<div class="col-sm-12">
							<div class="redact with-cover">
								<img src="//mhsamerica.com/imgstorage/silverspur-cover.png" class="profile-cover">
							</div>
						</div>
					</div>
					@if(Auth::check())
					<p class="tape-btns">
						<a href="#" class="btn btn-primary tape">
							<i class="glyphicon glyphicon-plus"></i> Watch
						</a>
						<a href="#" class="btn btn-success tape">
							<i class="glyphicon glyphicon-thumbs-up"></i> Kudos
						</a>
					</p>
					@endif
				</div>
			</div>