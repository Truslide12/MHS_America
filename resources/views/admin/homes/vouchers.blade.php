@extends('admin.content')


@section('stylesheets')
    <!-- Date Picker stylesheet -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="/css/admin-ppp.css">

    <style type="text/css">
    	.faded {
    		opacity: 0.2;
    	}
    	.vtables {
    		display: none;
    	}
    </style>

@stop


@section('content')

<div class="row">
	<div class="col-md-12" style="position: relative;padding-bottom: 48px; ">
		<h1>Home Listing Vouchers</h1>
		<div style="position: absolute;top:0;right: 5px;"">
			<span class="wholabel techteam" style="">Tech. Team</span>
			<span class="wholabel salesteam" style="">Sales Team</span>
			<span class="wholabel supportteam" style="">Support Team</span>
		</div>
	</div>

	<div class="col-md-12" style="margin: 22px 0px;">

		@if($errors->count() > 0 || Session::has('success') )
			@include('layouts.partial.errors')
		@endif

		<div>
			<div class="supportteam" style="width: 18%;display: inline-flex;justify-content: center;align-content: center;align-items: center;height: 30px;font-size: 1.55em;font-weight: bold;cursor: pointer;" onclick="setVoucherMode('available');">Available</div>
			<div class="salesteam" style="width: 18%;display: inline-flex;justify-content: center;align-content: center;align-items: center;height: 30px;font-size: 1.55em;font-weight: bold;cursor: pointer;" onclick="setVoucherMode('pending');">Pending</div>
			<div class="techteam" style="width: 18%;display: inline-flex;justify-content: center;align-content: center;align-items: center;height: 30px;font-size: 1.55em;font-weight: bold;cursor: pointer;" onclick="setVoucherMode('invalid');">Invalid</div>
			<div class="silverteam" style="width: 18%;display: inline-flex;justify-content: center;align-content: center;align-items: center;height: 30px;font-size: 1.55em;font-weight: bold;cursor: pointer;" onclick="setVoucherMode('claimed');">Claimed</div>
			<div class="yellowteam" style="width: 18%;display: inline-flex;justify-content: center;align-content: center;align-items: center;height: 30px;font-size: 1.55em;font-weight: bold;cursor: pointer;" onclick="setVoucherMode('new');">Create New</div>
		</div>

@if( count($vouchers->available) > 0 || 1==1 )
		<table class="table table-bordered table-hover table-striped dataTable vtables" id="vtable-available" style="border-top:0;font-size: 1.5em;">
			<thead>
				<tr>
					<th class="supportteam" colspan="4" style="text-align: center;padding-top: 44px;">Available Vouchers</th>
				</tr>
				<tr>
					<td>Code</td>
					<td>Term</td>
					<td>Expires</td>
					<td>Assign</td>
				</tr>
			</thead>
			<tbody>
				@if( count($vouchers->available) <= 0 )
				<tr>
					<td colspan="6" style="text-align: center;">No Vouchers Available.</td>
				</tr>
				@else
				@foreach($vouchers->available as $voucher)
				<tr>
					<td>{{$voucher->code}}</td>
					<td>{{$voucher->product_term}} Days</td>
					<td>{{date("m-d-Y", strtotime($voucher->expires_at))}}</td>
					@if( $voucher->is_open )
					<td class="salesteam"><a href="{{ URL::route('admin-homes-voucher', ['id' => $voucher->code])}}"><i class="fa fa-ticket"></i> Give This Voucher</a></td>
					@else
					<td class="supportteam"><a href="{{ URL::route('admin-homes-voucher', ['id' => $voucher->code])}}"><i class="fa fa-user"></i> Assign This Voucher</a></td>
					@endif
				</tr>
				@endforeach
				@endif
			</tbody>
		</table>
@endif
@if( count($vouchers->pending) > 0 || 1==1)
		<table class="table table-bordered table-hover table-striped dataTable vtables" id="vtable-pending" style="border-top:0;font-size: 1.5em;">
			<thead>
				<tr>
					<th class="salesteam" colspan="4" style="text-align: center;padding-top: 44px;">Pending Vouchers</th>
				</tr>
				<tr>
					<td>Code</td>
					<td>Term</td>
					<td>Expires</td>
					<td>Assigned to</td>
				</tr>
			</thead>
			<tbody>
				@if( count($vouchers->pending) <= 0 )
				<tr>
					<td colspan="6" style="text-align: center;">No Pending Vouchers.</td>
				</tr>
				@else
				@foreach($vouchers->pending as $voucher)
				<tr>
					<td>{{$voucher->code}}</td>
					<td>{{$voucher->product_term}} Days</td>
					<td>{{date("m-d-Y", strtotime($voucher->expires_at))}}</td>
					<td><a href="{{ URL::route('admin-homes-voucher', ['id' => $voucher->code])}}">@if($voucher->company) <i class="fa fa-user"></i> {{$voucher->company->title}} @else <div class="text-muted"><i class="fa fa-ticket"></i> Given Out</div> @endif</a></td>
				</tr>
				@endforeach
				@endif
			</tbody>
		</table>
@endif
@if( count($vouchers->invalid) > 0 || 1==1)
		<table class="table table-bordered table-hover table-striped dataTable vtables" id="vtable-invalid" style="border-top:0;font-size: 1.5em;">
			<thead>
				<tr>
					<th class="techteam" colspan="4" style="text-align: center;padding-top: 44px;">Invalid Vouchers
					<a href="{{ URL::route('admin-homes-vouchers-prune', ['status'=>'invalid']) }}" class="btn btn-danger pull-right">Prune Invalid</a>
					</th>
				</tr>
				<tr>
					<td>Code</td>
					<td>Term</td>
					<td>Expired on</td>
					<td>Assigned to</td>
				</tr>
			</thead>
			<tbody>
				@if( count($vouchers->invalid) <= 0 )
				<tr>
					<td colspan="6" style="text-align: center;">No Invalid Vouchers.</td>
				</tr>
				@else
				@foreach($vouchers->invalid as $voucher)
				<tr>
					<td>{{$voucher->code}}</td>
					<td>{{$voucher->product_term}} Days</td>
					<td>{{date("m-d-Y", strtotime($voucher->expires_at))}}</td>
					<td><a href="{{ URL::route('admin-homes-voucher', ['id' => $voucher->code])}}">@if($voucher->company) <i class="fa fa-user"></i> {{$voucher->company->title}} @else <div class="text-muted"><i class="fa fa-ticket"></i> Given Out</div> @endif</a></td>
				</tr>
				@endforeach
				@endif
			</tbody>
		</table>
@endif
@if( count($vouchers->claimed) > 0 || 1==1)
		<table class="table table-bordered table-hover table-striped dataTable vtables" id="vtable-claimed" style="border-top:0;font-size: 1.5em;">
			<thead>
				<tr>
					<th class="silverteam" colspan="4" style="text-align: center;padding-top: 44px;">Claimed Vouchers
					<a href="{{ URL::route('admin-homes-vouchers-prune', ['status'=>'claimed']) }}" class="btn btn-danger pull-right">Prune Claimed</a>
					</th>
				</tr>
				<tr>
					<td>Code</td>
					<td>Term</td>
					<td>Claimed</td>
					<td>Assigned to</td>
				</tr>
			</thead>
			<tbody>
				@if( count($vouchers->claimed) <= 0 )
				<tr>
					<td colspan="6" style="text-align: center;">No Claimed Vouchers.</td>
				</tr>
				@else
				@foreach($vouchers->claimed as $voucher)
				<tr>
					<td>{{$voucher->code}}</td>
					<td>{{$voucher->product_term}} Days</td>
					<td>{{date("m-d-Y", strtotime($voucher->updated_at))}}</td>
					<td><a href="{{ URL::route('admin-homes-voucher', ['id' => $voucher->code]) }}">@if($voucher->company) <i class="fa fa-user"></i> {{$voucher->company->title}} @else <div class="text-muted"><i class="fa fa-ticket"></i> Given Out</div> @endif</a></td>
				</tr>
				@endforeach
				@endif
			</tbody>
		</table>
@endif


		<form action="{{ URL::route('admin-homes-vouchers-post') }}" method="post">
		{{ csrf_field() }}
		<table class="table table-bordered table-hover table-striped dataTable vtables" id="vtable-new" style="border-top:0;font-size: 1.5em;">
			<thead>
				<tr>
					<th class="yellowteam" colspan="5" style="text-align: center;padding-top: 44px;">Generate New Vouchers</th>
				</tr>
				<tr>
					<td nowrap>Distribution</td>
					<td nowrap>Quantity</td>
					<td nowrap>Listing Term</td>
					<td nowrap>Expires</td>
					<td></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input type="hidden" name="voucher_type" value="1">
						<select name="voucher_open" class="form-control">
							<option value="0">Assigned to customers</option>
							<option value="1">Given out manually</option>
						</select>
					</td>
					<td>
						<div class="input-group date" name="voucher_units" id="unitsbox" >
				            <input type="number" step="1" name="voucher_units" id="units" value="1" min="1" max="10" class="form-control">
				            <span class="input-group-addon">
				            Qty.
				            </span>
				        </div>
					</td>
					<td>
						<div class="input-group">
				            <input type="number" step="1" name="voucher_term" id="term" value="180" max="180" min="7" class="form-control">
				            <span class="input-group-addon">
				            Days
				            </span>
				        </div>
					</td>
					<td>
						<div class="input-group date" id="datetimepicker1">
				            <input type="text" name="voucher_exp_date" id="exp_date" class="form-control">
				            <span class="input-group-addon">
				            <span class="glyphicon glyphicon-calendar"></span>
				            </span>
				        </div>
					</td>
					<td>
						<button class="btn btn-success">Generate</button>
					</td>
				</tr>
			</tbody>
		</table>
		</form>
	</div>

</div>

@stop

@section('scripts')

<script type="text/javascript" src="/js/moment.min.js"></script>
<script type="text/javascript" src="/js/bootstrap-datetimepicker.js"></script>

<script type="text/javascript">

function setVoucherMode(mode) {

	$(".vtables").hide();

	switch ( mode ) {
		case "available": 	$("#vtable-available").show(); 	break;
		case "pending": 	$("#vtable-pending").show(); 	break;
		case "invalid": 	$("#vtable-invalid").show(); 	break;
		case "new": 		$("#vtable-new").show(); 		break;
		case "claimed": 	$("#vtable-claimed").show(); 	break;
		default: 			$("#vtable-available").show(); 	break;
	}

}

var urlParams = new URLSearchParams(window.location.search);
if( urlParams.has('view') ) {
   setVoucherMode(urlParams.get('view'));
} else {
	@if($errors->count() > 0 || Session::has('success') )
	setVoucherMode('new');
	@else
	   setVoucherMode('available');
	@endif	
}




function update_data(timeframe) {
	window.location = window.location.toString().split("?")[0] +"?timeframe="+timeframe;
}

				var n = new Date();
				var d = new Date();
				$('#datetimepicker1').datetimepicker({
					format: 'MM/DD/YYYY',
					minDate: n,
					/*maxDate: d.setDate(d.getDate() + 90)*/    			
				});
</script>
@stop