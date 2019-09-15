@extends('admin.content')


@section('stylesheets')
    <!-- Date Picker stylesheet -->
    <link rel="stylesheet" type="text/css" href="/css/admin-ppp.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-datetimepicker.css">
    <style type="text/css">
    	.tt-input {
    		width: 100%;
    		background: red;	
    	}
    	.tt-dropdown-menu {
    		background: #fff;
    		border: 1px solid gray;
    		width: 100%;
    	}
     	.tt-suggestion {
     		padding: 4px 10px;
    	}
    	.tt-suggestion:hover{
    		background: #aeaeae;
    	}
    	.overwrites{
    		display: none;
    	}
    	.bg {
    		background: rgb(180,180,180);
    		color: snow;
    	}
    </style>
@stop


@section('content')
<div class="row">
	<div class="col-md-12" style="position: relative;">
		<h1>Community Spotlight</h1>
		<div style="position: absolute;top:0;right: 5px;"">
			<span class="wholabel techteam" style="">Tech. Team</span>
			<span class="wholabel salesteam" style="">Sales Team</span>
			<span class="wholabel supportteam" style="">Support Team</span>
		</div>
	</div>
	<div class="col-md-12">
		@include('layouts.partial.errors')
		<table class="table table-bordered table-hover table-striped dataTable">
			<thead>
				<tr style="">
					<th colspan=7 class="salesteam">Community Spotlights</th>
				</tr>
				<tr style="">
					<th width="5%">ID</th>
					<th width="60%">Community Name</th>
					<th width="5%">Status</th>
					<th width="10%">Started</th>
					<th width="10%">Ended</th>
					<th width="5%">Views</th>
					<th width="5%">Clicks</th>
				</tr>
			</thead>
			<tbody>
			@if ( count($spotlights ) > 0 )
			@foreach($spotlights as $spotlight)
				<tr @if( $spotlight->isActive()->name == 'active') style="font-weight:bold;" @endif>
					<td>{{$spotlight->id}}</td>
					<td><a href="{{URL::route('admin-communities-spotlight-edit', ['id' => $spotlight->id])}}">{{$spotlight->community->title}}</a></td>
					<td>{{$spotlight->isActive()->title}}</td>
					<td>{{ date('m/d/y', strtotime($spotlight->starts_at))}}</td>
					<td>{{ date('m/d/y', strtotime($spotlight->expires_at))}}</td>
					<td>{{$spotlight->impressions}}</td>
					<td>{{$spotlight->clicks}}</td>
				</tr>
			@endforeach
			@else
				<tr>
					<td colspan="7" style="text-align: center;">No Spotlights Scheduled</td>
				</tr>
			@endif
			</tbody>
		</table>
		<table class="table table-bordered table-hover table-striped dataTable">
			<thead>
				<tr>
					<th colspan=3 class="salesteam">Schedule New Community Spotlight</th>
				</tr>
			</thead>
			<tbody>
				<form action="{{ URL::route('admin-communities-spotlight-new-post') }}" id="theform" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="community-id" id="community-id">
				<tr>
					<td>Spotlight Community</td>
					<td colspan="2">
					    <div class="input-group fuckit" style="width: 100%;">
					      <input type="text" id="community-name" name="community-name" class="form-control" style="width: 100%!important;">
					      <span class="input-group-btn">
					        <button onclick="viewCommunity();" style="margin-top:-4px;" class="btn btn-default" type="button">View Community</button>
					      </span>
					    </div>
					</td>
				</tr>
				<tr>
					<td width="25%">Spotlight Time</td>
					<td>
						<div class="input-group date" id="datetimepicker1">
				            <input type="text" name="start_date" id="start_date" class="form-control">
				            <span class="input-group-addon">
				            <span class="glyphicon glyphicon-calendar"></span>
				            </span>
				        </div>
					</td>
					<td>
						<div class="input-group date" id="datetimepicker2">
				            <input type="text" name="end_date" id="end_date" class="form-control">
				            <span class="input-group-addon">
				            <span class="glyphicon glyphicon-calendar"></span>
				            </span>
				        </div>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="salesteam">Overwrite Pulled Data
						<i onclick="toggle('overwrites');" class="fa fa-plus pull-right" id="clicky-overwrites"></i>
					</td>
				</tr>
				<tr class="overwrites">
					<td width="25%">Spotlight Title</td>
					<td colspan="2" width="75%"><input type="text" placeholder="Community of the Week" class="form-control"></td>
				</tr>
				<tr class="overwrites">
					<td width="25%">Spotlight Title</td>
					<td colspan="2" width="75%"><input type="text" placeholder="(import from profile)" class="form-control"></td>
				</tr>
				<tr class="overwrites">
					<td>Spotlight Blurb</td>
					<td colspan="2">
						<textarea class="form-control" rows="15" placeholder="(import from profile)"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<button class="btn btn-success pull-right" style="width: 20%;">Create New Spotlight</button>
					</td>
				</tr>
			</form>
			</tbody>
		</table>
	</div>
</div>
@stop

@section('scripts')
    <!-- Date Picker script -->
    <script type="text/javascript" src="/js/moment.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-datetimepicker.js"></script>
    <script src="{{ URL::route('welcome') }}/js/typeahead.bundle.js"></script>

    <script type="text/javascript">
				var n = new Date();
				var d = new Date();
				$('#datetimepicker1').datetimepicker({
					format: 'MM/DD/YYYY',
					minDate: n,
					/*maxDate: d.setDate(d.getDate() + 90)*/    			
				});
				$('#datetimepicker2').datetimepicker({
					format: 'MM/DD/YYYY',
					/*maxDate: d.setDate(d.getDate() + 90)*/
					defaultDate: d.setDate(d.getDate() + ( 1 + 7 - d.getDay()) % 7 )
				});

				$('#datetimepicker2').datetimepicker("setDate", d.setDate(d.getDate() + 7));






			pony['bloodhound'] = new Bloodhound({
				name: 'communities',
				remote: '{{ URL::route('welcome') }}/derpy/communities?query=%QUERY',
				datumTokenizer: function(d) {
					return Bloodhound.tokenizers.whitespace(d.name);
				},
				queryTokenizer: Bloodhound.tokenizers.whitespace
			});

			pony.bloodhound.initialize();
			var fff = $('#community-name').width();

			
			$('#community-name').typeahead(null, {
				displayKey: 'result',
				display: function(item){ return '<b>'+item.title+'</b> – <span>'+item.city+', '+item.state+' ('+item.zipcode+')</span>'},
				source: pony.bloodhound.ttAdapter(),
			});

			$('#community-name').on('typeahead:selected', function(evt, item) {
				console.log(item);
				$(this).typeahead("val", item.title);
				$("#community-id").val(item.id);
				$("#community-name").attr('readonly', true)

			});

			function viewCommunity() {
				id = $("#community-id").val();
				if ( ! isNaN(parseInt(id)) ) {
					window.open( "/profile/"+id, "_blank" );
				} else {
					alert("no community selected");
				}
			}

			$('#community-name').width(fff);//.css({"margin-top": "4px"});

			function toggle(id) {
				var htmlblocks = document.getElementsByClassName(id);

				var clickblock = document.getElementById("clicky-"+id);
				if ( clickblock.classList.contains("fa-plus") ) {

					for( i=0; i<htmlblocks.length;i++ ) {
					$(htmlblocks[i]).slideDown();
					}
					clickblock.classList.remove("fa-plus");
					clickblock.classList.add("fa-minus");
					return true;
				} else if ( clickblock.classList.contains("fa-minus") ) {
					for( i=0; i<htmlblocks.length;i++ ) {
					$(htmlblocks[i]).slideUp();
					}
					clickblock.classList.remove("fa-minus");
					clickblock.classList.add("fa-plus");
					return true;
				}
				
			}
    </script>
@stop