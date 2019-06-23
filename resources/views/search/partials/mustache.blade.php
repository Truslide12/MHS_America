<script id="spaceResultItem" type="x-tmpl-mustache">
<a href="/profile/@{{ community_id }}" target="_blank" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h4 class="mb-0">@{{ community }}</h4>
                            <div class="col-md-6" style="padding:0px 0px 20px 0px;">
                            <p class="space-size">@{{ size }}</p>
                            <h4 class="space-dimensions">@{{ width }}ft x @{{ length }}ft</h4>
                            </div>
                            <div class="col-md-6" style="padding:8px 0px 8px 0px;font-size:1.5em;text-align:center;background:#cecece;display:flex;align-content:center;align-items:center;justify-content:center;border-radius:5px!important;">
                                <p style="padding:0;margin:auto auto;">@{{ name }}</p>
                            </div>
                        </div>

                    </a>

</script>
<script id="homeResultItem" type="x-tmpl-mustache">
<a data-action="preview" data-type="home" data-id="@{{ id }}" style="cursor:pointer;" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="pricey" price="@{{price_formatted}}" hasphoto="@{{^photos.1}}No Photo@{{/photos.1}}"><img 
                        src="@{{ photos.1.url }}@{{^photos.1.url}}img/stockphotos/stolen2.jpg@{{/photos.1.url}}" 
                        class="img-responsive" style="width:100%;min-height: 150px;max-height: 150px;"></div>

                        <div class="d-flex w-100 justify-content-between">
                            <h4 class="mb-0">@{{ community }}
                            <br>@{{ title }}</h4>
                            <small style="background:silver;border-radius:5px!important;padding:1px 5px;white-space: nowrap;">@{{size}}</small>
                            <small style="background:silver;border-radius:5px!important;padding:1px 5px;white-space: nowrap;">@{{beds}} Bedrooms</small>
                            <small style="background:silver;border-radius:5px!important;padding:1px 5px;white-space: nowrap;">@{{baths}} Baths</small>
                        </div>
                    </a>
</script>
<script id="communityResultItem" type="x-tmpl-mustache">
<a data-action="preview" data-type="community" data-id="@{{ id }}" style="cursor:pointer;" class="list-group-item list-group-item-action flex-column align-items-start">
                        @{{#photos.0.cover}}
                        <img src="/imgstorage/cover_@{{ photos.0.cover }}_crop.jpg@{{^photos.0.cover}}/../../img/stockphotos/stolen2.jpg@{{/photos.0.cover}}" class="img-responsive">
                        @{{/photos.0.cover}}
                        <div class="d-flex w-100 justify-content-between">
                            <h4 class="mb-1">@{{ title }}<br><small>@{{ city }}, @{{ state }}</small></h4>

                            @{{^spaces.0}}<small class="attrbadge">No spaces</small>@{{/spaces.0}}
                            @{{#spaces.0}}<small class="attrbadge">@{{spaces.length}} space@{{#spaces.1}}s@{{/spaces.1}}</small>@{{/spaces.0}}
                            @{{^homes.0}}<small class="attrbadge">No homes</small>@{{/homes.0}}
                            @{{#homes.0}}<small class="attrbadge">@{{homes.length}} home@{{#homes.1}}s@{{/homes.1}}</small>@{{/homes.0}}

                        </div>
                    </a>
</script>














<script id="homePreview" type="x-tmpl-mustache">
    <img src="@{{ photos.1.url }}@{{^photos.1.url}}img/stockphotos/grass-meadow-gray-forest.jpg@{{/photos.1.url}}" class="img-responsive" style="width:calc(100% - 10px);min-height: 150px;margin:5px;">
    <div id="capper" style="margin:5px;background: #f9f9f9;border:1px solid #e0e0e0;padding: 20px;overflow-y:auto;">
            <h2 style="margin-top:0;">
                <div style="padding:20px 10px;">
                <span style="color: black;">@{{ title }}</span> 
                <small>
                    <br>
                    <a href="@{{ citylink }}">
                        @{{ city }}, @{{ state }}
                    </a> &middot;
                    <a href="@{{ citylink }}">
                        @{{ community }}
                    </a>
                </small>
                </div>

            </h2>
                <div class="col-md-8 pricebox"><span style="font-size:3em;">@{{price_formatted}}</span></div>
                <div class="col-md-4">
                    <table class="table">
                        <tr>
                            <td><i class="fas fa-bed"></i></td>
                            <td>@{{ beds }} Bedroom(s)</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-toilet"></i></td>
                            <td>@{{ baths }} Bathroom(s)</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-ruler-combined"></i></td>
                            <td>@{{ square_footage }} sqft.</td>
                        </tr>
                    </table>         
                </div>
                <div class="col-md-12" style="">
                    <a  target="_blank" href="/home/@{{id}}" class="btn btn-primary" style="width: 48%;">View Home Profile</a>
                    <a  target="_blank" href="" class="btn btn-primary" style="width: 48%;">Watch Home</a>
                    <a  target="_blank" href="" class="btn btn-primary" style="width: calc(16% - 2px);margin-top: 2px;"><i class="fa fa-twitter"></i></a>
                    <a  target="_blank" href="" class="btn btn-primary" style="width: calc(16% - 2px);margin-top: 2px;"><i class="fa fa-facebook"></i></a>
                    <a  target="_blank" href="" class="btn btn-primary" style="width: calc(16% - 3px);margin-top: 2px;"><i class="fa fa-instagram"></i></a>
                    <a  target="_blank" href="" class="btn btn-primary" style="width: calc(16% - 2px);margin-top: 2px;"><i class="fa fa-bookmark"></i></a>
                    <a  target="_blank" href="" class="btn btn-primary" style="width: calc(16% - 2px);margin-top: 2px;"><i class="fa fa-envelope"></i></a>
                    <a  target="_blank" href="" class="btn btn-primary" style="width: calc(16% - 3px);margin-top: 2px;"><i class="fa fa-print"></i></a>
                    
                </div>
    </div>
</script>
<script id="communityPreview" type="x-tmpl-mustache">
    <div id="capper">
            <h2>
                <div>
                @{{#highlight}}
                <span class="premium pull-right"><i class="glyphicon glyphicon-star"></i></span>
                @{{/highlight}}
                <span class="preview-title">@{{ title }}</span> 
                <small>
                    <br>
                    <a href="@{{ citylink }}">
                        @{{ city }}, @{{ state }}
                    </a>
                </small>
                </div>
            </h2>
            @{{#photos.0}}
            <div class="preview-photo">
                <img src="/imgstorage/cover_@{{ photos.0.cover }}_crop.jpg" class="img-responsive">
            </div>
            @{{/photos.0}}
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="/profile/@{{id}}" class="btn btn-primary" target="_blank">View Full Profile</a><br>
                    <button class="btn btn-default" data-action="previewtab" data-id="@{{ id }}" data-tab="overview" disabled>Overview</button>
                    <button class="btn btn-default" data-action="previewtab" data-id="@{{ id }}" data-tab="homes"><span class="fa fa-home"></span> @{{ home_count }}</button>
                    <button class="btn btn-default" data-action="previewtab" data-id="@{{ id }}" data-tab="spaces"><span class="fa fa-square-o"></span> @{{ space_count }} Spaces</button> 
                </div>
            </div>
            <div id="preview-tab">
            </div>
    </div>
</script>
<script id="communityTabOverview" type="x-tmpl-mustache">
<div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 bold">Address:</div>
                        <div class="col-md-9" style="margin-bottom: 10px;">
                            @{{ address }}<br>
                            @{{ city }}, 
                            @{{ state }}
                            @{{ zipcode }}
                        </div>
                        @{{#phone}}
                        <div class="col-md-3 bold">Phone:</div>
                        <div class="col-md-9">@{{ phone }}</div>
                        @{{/phone}}
                    </div>
                </div>
            </div>
            @{{#description}}
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 bold">About:</div>
                        <div class="col-md-9" style="clear:all;">@{{ description }}</div>
                    </div>
                </div>
            </div>
            @{{/description}}
</script>
<script id="communityTabHomes" type="x-tmpl-mustache">
@{{#homes}}
                <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="profile-title no-margin-y">
                                <a data-action="preview" data-type="home" data-id="@{{ id }}" style="cursor:pointer;">@{{ beds }} bed @{{ baths }} bath home</a> <span class="text-danger">$@{{ price }}</span><br>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            @{{/homes}}
</script> 
<script id="communityTabSpaces" type="x-tmpl-mustache">
    <div class="row margin-t">
                @{{#spaces}}
                <div class="col-md-6">
                        <div class="space-block">
                            <div class="row">
                                <div class="section">
                                    <h3 title="@{{ name }}" class="space-title">@{{ name }}</h3>
                                </div>
                                <div class="section">
                                    <p class="space-size">@{{ size }}</p>
                                    <h4 class="space-dimensions">@{{ width }} x @{{ length }}</h4>
                                </div>
                                @if(1==0 && Auth::check())
                                <div class="section">
                                    @if(1==1)
                                    <a href="#" class="btn btn-xs btn-info">Watch</a>
                                    @else
                                    <a href="#" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                    @endif
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @{{/spaces}}
            </div>
</script> 