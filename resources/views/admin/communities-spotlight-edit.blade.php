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
    	}
    	.bg {
    		background: rgb(180,180,180);
    		color: snow;
    	}
    </style>
@stop


@section('content')
<div class="row">
	<div class="col-md-12">
		@php $disabled = "" @endphp
		@if( $spotlight->isActive()->name == 'expired' )
		<div class="alert alert-danger">This spotlight is already expired. You can no longer make changes.</div>
		@php $disabled = "disabled" @endphp
		@elseif( $spotlight->isActive()->name == 'pending' )
		<div class="alert alert-warning">You are editing a spotlight that has not started.</div>
		@elseif( $spotlight->isActive()->name == 'active' )
		<div class="alert alert-warning">You are editing a spotlight that is live and active.</div>
		@else
		@endif
		@include('layouts.partial.errors')

		<table class="table table-bordered table-hover table-striped dataTable">
			<thead>
				<tr>
					<th colspan=3 class="salesteam">Review Community Spotlight</th>
				</tr>
			</thead>
			<tbody>
				<form action="{{ URL::route('admin-communities-spotlight-edit-post', ['id'=>$spotlight->id]) }}" id="theform" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="spotlight_id" id="spotlight_id" value="{{$spotlight->id}}">
				<input type="hidden" name="community-id" id="community-id" value="{{$spotlight->community_id}}">
				<tr>
					<td>Spotlight Community</td>
					<td colspan="2">
					    <div class="input-group fuckit" style="width: 100%;">
					      <input type="text" id="community-name" name="community-name" value="{{$spotlight->community->title}}" class="form-control" style="width: 100%!important;" disabled>
					      <span class="input-group-btn">
					        <button onclick="viewCommunity();" class="btn btn-default" type="button">View Community</button>
					      </span>
					    </div>
					</td>
				</tr>
				<tr>
					<td width="25%">Spotlight Time</td>
					<td>
						<div class="input-group date" id="datetimepicker1">
				            <input type="text" name="start_date" id="start_date" value="{{$spotlight->starts_at}}" class="form-control" disabled>
				            <span class="input-group-addon">
				            <span class="glyphicon glyphicon-calendar"></span>
				            </span>
				        </div>
					</td>
					<td>
						<div class="input-group date" id="datetimepicker2">
				            <input type="text" name="start_date" id="start_date" value="{{$spotlight->expires_at}}" class="form-control" disabled>
				            <span class="input-group-addon">
				            <span class="glyphicon glyphicon-calendar"></span>
				            </span>
				        </div>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="salesteam">Overwrite Pulled Data
						<i onclick="toggle('overwrites');" class="fa fa-minus pull-right" id="clicky-overwrites"></i>
					</td>
				</tr>
				<tr class="overwrites">
					<td width="25%">Spotlight Title</td>
					<td colspan="2" width="75%"><input type="text" name="spotlight_title" placeholder="Community of the Week" class="form-control" value="{{$spotlight->spotlight_title}}" {{$disabled}}></td>
				</tr>
				<tr class="overwrites">
					<td width="25%">Community Name</td>
					<td colspan="2" width="75%"><input type="text" name="community_title" placeholder="(import from profile)" class="form-control" value="{{$spotlight->community_title}}" {{$disabled}}></td>
				</tr>
				<tr class="overwrites">
					<td>Community Blurb</td>
					<td colspan="2">
						<textarea class="form-control" rows="15" name="community_description" placeholder="(import from profile)" {{$disabled}}>{{$spotlight->community_description}}</textarea>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<button href="{{URL::route('admin-communities-spotlight')}}" class="btn btn-primary pull-right" style="width: 20%;">Update this Spotlight</button>
			</form>
			<form action="{{ URL::route('admin-communities-spotlight-remove-post', ['id'=>$spotlight->id]) }}" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="spotlight_id" id="spotlight_id" value="{{$spotlight->id}}">
			<input type="hidden" name="delete" id="delete" value="{{strtotime($spotlight->created_at)}}">

						<button class="btn btn-danger pull-left" style="width: 20%;" @if( $spotlight->isActive()->name == 'expired') disabled @endif>Remove this Spotlight</button>
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
				
			function viewCommunity() {
				id = $("#community-id").val();
				if ( ! isNaN(parseInt(id)) ) {
					window.open( "/profile/"+id, "_blank" );
				} else {
					alert("no community selected");
				}
			}

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