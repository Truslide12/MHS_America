@extends('admin.content')

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/admin-ppp.css">
    <style type="text/css">
    	.faded {
    		opacity: 0.2;
    	}
    </style>
<div class="row">
	<div class="col-md-12" style="position: relative;padding-bottom: 48px; ">
		<h1>Home Listing Dashboard</h1>
		<div style="position: absolute;top:0;right: 5px;"">
			<span class="wholabel techteam" style="">Tech. Team</span>
			<span class="wholabel salesteam" style="">Sales Team</span>
			<span class="wholabel supportteam" style="">Support Team</span>
		</div>
	</div>
	<div class="col-md-12" style="margin-bottom: 22px;">
		<div class="supportteam clearfix" style="padding: 8px;display: flex;align-content: space-between;justify-content: center;align-items: center;">
			<span style="flex: 1;font-size: 1.2em;font-weight: bold;">Metrics &amp; Goals Overview</span>
			<select onchange="update_data(this.value);" class="form-control" style="flex: 1;width: 200px;">
				<option value="day" @if(Input::get('timeframe') == 'day') selected @endif>Today</option>
				<option value="week" @if(Input::get('timeframe') == 'week') selected @endif>This Week</option>
				<option value="month" @if(Input::get('timeframe') == 'month') selected @endif>This Month</option>
				<option value="year" @if(Input::get('timeframe') == 'year') selected @endif>This Year</option>
				<option value="all-time" @if(Input::get('timeframe') == 'all-time') selected @endif>All Time</option>
			</select>	
		</div>
	</div>
	<div class="col-md-4">
		<div class="supportteam" style="border-radius: 10px;padding: 20px;display: flex;align-content: center;justify-content: center;align-items: center;flex-direction: column;">
			<span style="font-size: 8em;">{{count($homes)}}</span>
			<span style="text-transform: capitalize;font-weight: bold;">Homes listed today</span>
		</div>
	</div>
	<div class="col-md-8">

		<div class="@if($goals->units > count($homes) ) techteam @else salesteam @endif" style="border-radius: 8px;padding: 10px;display: flex;justify-content: flex-start;align-content: center;margin-bottom: 8px;">
			<p style="padding: 0;margin: 0px;font-size: 1.25em;">{{count($homes)}} Home Listings sold @if($goals->type == "today") today @else this {{$goals->type}}@endif. (Goal {{$goals->units}})</p>
		</div>

		<div class="@if($goals->revenue > (count($homes) * 39.99) ) techteam @else salesteam @endif" style="border-radius: 8px;padding: 10px;display: flex;justify-content: flex-start;align-content: center;margin-bottom: 8px;">
			<p style="padding: 0;margin: 0px;font-size: 1.25em;">${{count($homes) * 39.99}} in Home Listing revenue. (Goal ${{$goals->revenue}})</p>
		</div>

		<div class="@if($goals->active > $total_homes ) techteam @else salesteam @endif" style="border-radius: 8px;padding: 10px;display: flex;justify-content: flex-start;align-content: center;margin-bottom: 8px;">
			<p style="padding: 0;margin: 0px;font-size: 1.25em;">{{ $total_homes }} Home Listings active. (Goal {{$goals->active}})</p>
		</div>

		<div class="@if($goals->views > $homes_views ) techteam @else salesteam @endif" style="border-radius: 8px;padding: 10px;display: flex;justify-content: flex-start;align-content: center;margin-bottom: 8px;">
			<p style="padding: 0;margin: 0px;font-size: 1.25em;">{{ $homes_views }} Home Listing views today. (Goal {{$goals->views}})</p>
		</div>

	</div>

	<div class="col-md-12" style="margin: 22px 0px;">


		<table class="table table-bordered table-hover table-striped dataTable" style="border-top:0;font-size: 1.5em;">
			<thead>
				<tr>
					<th class="salesteam" colspan="7">New Homes Today</th>
				</tr>
				<tr>
					<td>ID</td>
					<td>Customer</td>
					<td>Community</td>
					<td>Space</td>
					<td>Created</td>
					<td style="text-align: center;"><i class="fa fa-credit-card" title="Paid"></i></td>
				</tr>
			</thead>
			<tbody>
				@if( count($homes) <= 0 )
				<tr>
					<td colspan="6" style="text-align: center;">No new Home Listings today.</td>
				</tr>
				@else
				@foreach($homes as $home)
				<tr>
					<td>{{$home->id}}</td>
					<td><a target='_blank' href="{{ URL::route('admin-customer-edit', ['id'=> $home->company->id]) }}">{{$home->company->title}}</a></td>
					<td><a target='_blank' href="{{ URL::route('admin-customer-edit', ['id'=> $home->company->id]) }}">{{$home->profile->title}}</a></td>
					<td><a target='_blank' href="{{ URL::route('home', ['id'=> $home->id]) }}">{{$home->space_number}}</a></td>
					<td>{{$home->created_at->format("m/d/Y")}}</td>
					<td style="text-align: center;"><i class="fa @if($home->receipt) fa-check @else fa-minus faded @endif"></i></td>
				</tr>
				@endforeach
				@endif
			</tbody>
		</table>

	</div>

</div>

<script type="text/javascript">

function update_data(timeframe) {
	window.location = window.location.toString().split("?")[0] +"?timeframe="+timeframe;
}

</script>
@stop