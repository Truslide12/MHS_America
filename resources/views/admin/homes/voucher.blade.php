@extends('admin.content')


@section('stylesheets')
    <!-- Date Picker stylesheet -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="/css/admin-ppp.css">

    <style type="text/css">
    	.faded {
    		opacity: 0.2;
    	}
.twitter-typeahead {
  display: block !important;
  font-size: 1em;
}
.tt-dropdown-menu {
  width: 100%;
  margin: 34px 10px 0 0;
  padding: 8px 0;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
}
.tt-suggestion {
  padding: 5px 15px;
  line-height: 1 !important;
}
.tt-suggestion.tt-cursor {
  color: #fff;
  background-color: #39f;
  cursor: pointer;
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

<form autocomplete="off" method="post" action="{{ URL::route('admin-homes-voucher-post', ['id'=>$voucher->code]) }}">
{{ csrf_field() }}
	<div class="col-md-12" style="margin: 22px 0px;">


				@if($errors->count() > 0 || Session::has('success') )
					@include('layouts.partial.errors')
				@endif

		<div>
			<div class="supportteam" style="width: 18%;display: inline-flex;justify-content: center;align-content: center;align-items: center;height: 30px;font-size: 1.55em;font-weight: bold;cursor: pointer;" onclick="loadVoucherMode('available');">Available</div>
			<div class="salesteam" style="width: 18%;display: inline-flex;justify-content: center;align-content: center;align-items: center;height: 30px;font-size: 1.55em;font-weight: bold;cursor: pointer;" onclick="loadVoucherMode('pending');">Pending</div>
			<div class="techteam" style="width: 18%;display: inline-flex;justify-content: center;align-content: center;align-items: center;height: 30px;font-size: 1.55em;font-weight: bold;cursor: pointer;" onclick="loadVoucherMode('invalid');">Invalid</div>
			<div class="silverteam" style="width: 18%;display: inline-flex;justify-content: center;align-content: center;align-items: center;height: 30px;font-size: 1.55em;font-weight: bold;cursor: pointer;" onclick="loadVoucherMode('claimed');">Claimed</div>
			<div class="yellowteam" style="width: 18%;display: inline-flex;justify-content: center;align-content: center;align-items: center;height: 30px;font-size: 1.55em;font-weight: bold;cursor: pointer;" onclick="loadVoucherMode('new');">Create New</div>
		</div>

		<table class="table table-bordered table-hover table-striped dataTable" style="border-top:0;font-size: 1.5em;">
			<thead>
				<tr>
					<th class="supportteam" colspan="4">Available Vouchers</th>
				</tr>
				<tr>
					<td>Product</td>
					<td>Code</td>
					<td>Term</td>
					<td>Expires</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><select class="form-control" disabled><option>Home Listings</option></select></td>
					<td><input type="" name="" class="form-control" value="{{$voucher->code}}" disabled></td>
					<td><input type="" name="" class="form-control" value="{{$voucher->product_term}}" disabled></td>
					<td><input type="" name="" class="form-control" value="{{$voucher->expires_at}}" disabled></td>
				</tr>
				<tr>
					<td>Assign to:</td>
					<td colspan="3">
						@if( $voucher->is_open )
				        <input type="text" name="" class="form-control" value="Please mention receipient in notes" disabled>
				        @elseif($voucher->company_id)
				        <input type="text" name="" class="form-control" value="{{$voucher->company()->first()->title}}" disabled>
				        @else
						<div class="input-group" style="width: 100%;">
							<span class="input-group-addon">
				            Customer
				            </span>
				            <input type="text" step="1" name="" id="customer" value="@if($voucher->company_id) {{$voucher->company()->firstOrFail()->title}} @else  @endif" class="form-control" autocomplete="off">
				            <span class="input-group-addon">
				            View
				            </span>
				        </div>
				        @endif
					</td>
				</tr>
				<tr>
					<th class="supportteam" colspan="4">Notes</th>
				</tr>
				<tr>
					<th colspan="4">
						<textarea name="voucher_notes" class="form-control" rows="10">{{ $voucher->notes }}</textarea>
					</th>
				</tr>
				<tr>
					<th colspan="4">
						<input type="hidden" name="voucher_code" id="voucher_code" value="{{ $voucher->code }}">
						<input type="hidden" name="voucher_customer" id="voucher_customer" @if($voucher->company_id) value="{{ $voucher->company_id }}" @endif>
						<button class="btn btn-success pull-right">Save Voucher</button>
					</th>
				</tr>
			</tbody>
		</table>


	</div>
</form>
</div>

@stop

@section('scripts')

<script type="text/javascript" src="/js/moment.min.js"></script>
<script type="text/javascript" src="/js/bootstrap-datetimepicker.js"></script>
<script src="{{ URL::route('welcome') }}/js/typeahead.bundle.js"></script>

<script type="text/javascript">

function loadVoucherMode(mode) {

	window.location = "/luna/homes/vouchers?view="+mode;

}

			pony['bloodhound'] = new Bloodhound({
				name: 'companies',
				remote: '{{ URL::route('welcome') }}/derpy/companies?query=%QUERY',
				datumTokenizer: function(d) {
					return Bloodhound.tokenizers.whitespace(d.name);
				},
				queryTokenizer: Bloodhound.tokenizers.whitespace
			});

			pony.bloodhound.initialize();

			$('#customer').typeahead(null, {
				valueKey: function(item){ return item.title},
				displayKey: 'result',
				display: function(item){ return '<b>'+item.title+'</b> – <span>'+item.city+', '+item.state+' ('+item.zip_code+')</span>'},

				source: pony.bloodhound.ttAdapter(),
			});

			$("#customer").on('typeahead:selected', function (event, datum, name) {
			    $(this).typeahead("val", datum.title);
			    $("#voucher_customer").val(datum.id);
			});

</script>
@stop