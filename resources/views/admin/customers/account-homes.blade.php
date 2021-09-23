@extends('admin.content')

@section('stylesheets')
    <!-- Date Picker stylesheet -->
    <link rel="stylesheet" type="text/css" href="/css/admin-ppp.css">
    <style type="text/css">
    	.faded {
    		opacity: 0.2;
    	}
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
    </style>
@stop

@section('content')
<div class="row">
	<div class="col-md-12" style="position: relative;">
		<h1>Customer Accounts</h1>
		<div style="position: absolute;top:0;right: 5px;"">
			<span class="wholabel techteam" style="">Tech. Team</span>
			<span class="wholabel salesteam" style="">Sales Team</span>
			<span class="wholabel supportteam" style="">Support Team</span>
		</div>
	</div>
	<div class="col-md-12">

		@include('layouts.partial.errors')
		<table class="table table-bordered table-hover table-striped dataTable" style="border-top:0;font-size: 1.5em;">
			<thead>
				<tr>
					<th class="salesteam" colspan="4">Manage @if($account->is_personal) Personal @else Company @endif Buisness Account</th>
				</tr>
				<tr>
					<th colspan="4" style="display: flex;">
						<a href="?view=details" style="margin:auto;width: 20%;" class="btn btn-success">Details</a>
						<a href="?view=homes" style="margin:auto;width: 20%;" class="btn btn-success" disabled>Homes</a>
						<a href="?view=profiles" style="margin:auto;width: 20%;" class="btn btn-success">Profiles</a>
						<a href="?view=users" style="margin:auto;width: 20%;" class="btn btn-success">Users</a>
					</th>
				</tr>
			</thead>
		</table>

		<table class="table table-bordered table-hover table-striped dataTable" style="border-top:0;font-size: 1.5em;">
			<thead>
				<tr>
					<td colspan="4" class="salesteam">Homes
					</td>
				</tr>
			</thead>

			<tbody>

				@if( count($account->homes) > 0 )
				@foreach($account->homes as $home)
				<tr>
					<td width="75%" colspan="3">{{$home->profile->title}} SPACE {{$home->space_number}}</td>
					<td width="25%" style="text-align: center;"><a href="/home/{{$home->id}}" target="_blank">View</a> | <a href="/home/{{$home->id}}/edit" target="_blank">Edit</a></td>
				</tr>
				@endforeach
				@else
				<tr>
					<td colspan="4">This Account has no home listings</td>
				</tr>
				@endif
			</tbody>
		</table>


	<form action="{{ URL::route('admin-customer-gift-home', ['id'=>$account->id]) }}" id="theform" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<input type="hidden" name="community-id" id="community-id">
	<input type="hidden" name="account-id" id="account-id" value="{{$account->id}}">
		<table class="table table-bordered table-hover table-striped dataTable">
			<thead>
				<tr>
					<th class="salesteam">Gift Free Home Listing</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
					    <div class="input-group fuckit" style="width: 100%;">
					      <input type="text" id="community-name" name="community-name" class="form-control" style="width: 100%!important;" placeholder="In What Community?">
					      <span class="input-group-btn">
					        <button onclick="viewCommunity();" style="margin-top:-4px;width:100%;" class="btn btn-default" type="button">View Community</button>
					      </span>
					    </div>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="space-number" placeholder="Space Number" class="form-control pull-left" style="width: 40%;">
						<button class="btn btn-success pull-right" style="width: 20%;">Gift Free Home</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>




	</div>
</div>
@stop

@section('scripts')
    <!-- Date Picker script -->
    <script type="text/javascript" src="/js/adm/mhs.ppp.js"></script>
    <script src="{{ URL::route('welcome') }}/js/typeahead.bundle.js"></script>
       <script type="text/javascript">

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

    </script>
@stop