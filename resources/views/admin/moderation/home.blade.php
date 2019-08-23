@extends('admin.layouts.master')

@section('sidemenu')
@include('admin.layouts.partial.side-moderation')
@stop

@section('content')
<div class="col-md-12">
    @if(count($reports) == 0)
	<div class="padding-y hidden-xs hidden-sm"></div><div class="padding-y hidden-xs hidden-sm"></div>
	<div class="padding-y"></div><div class="padding-y"></div>
	@if($showResolved)
	<h3 class="text-center padding-y"><em>No resolved reports were found.</em><br><small><a href="{{ URL::route('admin-moderation') }}">View New Reports</a></small></h3>
	@else
	<h3 class="text-center padding-y"><em>No unresolved reports were found.</em><br><small><a href="{{ URL::route('admin-moderation-resolved') }}">View Resolved Reports</a></small></h3>
	@endif
	<div class="padding-y"></div><div class="padding-y"></div>
	<div class="padding-y hidden-xs hidden-sm"></div><div class="padding-y hidden-xs hidden-sm"></div>
	@else
	<table class="table">
		<thead>
			<tr class="no-border-row">
				<th class="col-sm-1">Report ID</th>
				<th class="col-sm-3">Type / ID</th>
				<th class="col-sm-3">Culprit</th>
				<th class="col-sm-2">Reason</th>
				<th class="col-sm-1half">Date / Status</th>
				<th class="col-sm-1half">&nbsp;</th>
			</tr>
            <tr>
                <th></th>
				<th>Accuser</th>
				<th colspan="4">Reason Text</th>
			</tr>
		</thead>
		<tbody>
		@foreach($reports as $report)
		<?php
            $accusers = $report->accusers;
            $author = $report->author;
			$rascal = $report->rascal;
            $moderator = $report->moderator;
            $link = $report->viewLink();
		?>
			<tr>
				<td>{{ $report->id }}</td>
				<td><strong>{{ studly_case($report->type) }}</strong><br># {{ $report->link_id }}</td>
				<td>
					<p>
						@if(is_object($rascal))
						<strong><a href="{{ $rascal->profileLink() }}">{{ $rascal->getFullName() }}</a></strong><br>
						<small><em>{{ $rascal->email }}</em></small>
						@else
						<span class="text-muted"><em>Removed or banned</em></span>
						@endif
					</p>
				</td>
				<td>
					<p>
                        {{ Lang::get('global.report_reason')[$report->reason_id] }}
					</p>
				</td>
				<td>
					<abbr title="{{ $report->created_at }}">{{ $report->created_at->format('M d, Y') }}</abbr><br>
                    @if($report->resolved)
                    <strong><em>Resolved</em></strong>
                    @elseif(is_object($moderator))
                    <small><em>{{$moderator->getFullName()}}</em> works on it.</small>
                    @else
                    <strong><em>Open</em></strong>
                    @endif
				</td>
				<td class="text-right">
                    <div class="btn-group">
                    @if($link)
                        <a href="{{ $link }}" target="_blank" class="btn btn-sm btn-danger">View</a>
                    @endif
                    @if($report->resolved)
                        <a href="{{ URL::route('admin-moderation-resolve', array('report' => $report->id)) }}" onclick="return confirm('Reopen report?');" class="btn btn-sm btn-danger"><i title="Reopen" class="glyphicon glyphicon-flash"></i></a>
                    @else
                        @if($report->moderator_id == Auth::id())
                            <a href="{{ URL::route('admin-moderation-take', array('report' => $report->id)) }}" onclick="return confirm('Do you want to free up the report?');" class="btn btn-sm btn-warning"><i title="Free" class="glyphicon glyphicon-remove-sign"></i></a>
                        @else
                            <a href="{{ URL::route('admin-moderation-take', array('report' => $report->id)) }}" onclick="return confirm('Do you want to take over the report?');" class="btn btn-sm btn-warning"><i title="Working on it" class="glyphicon glyphicon-pushpin"></i></a>
                        @endif
                        <a href="{{ URL::route('admin-moderation-resolve', array('report' => $report->id)) }}" onclick="return confirm('Mark report as resolved?');" class="btn btn-sm btn-success"><i title="Resolved" class="glyphicon glyphicon-ok"></i></a>
                    @endif
                    </div>
				</td>
			</tr>
            @foreach($accusers as $acuser)
            <?php
                $author = $acuser->author;
            ?>
                <tr class="no-border-row">
                    <td></td>
                    <td>
                        @if(is_object($author))
						<a href="{{ URL::route('admin-browse-users-view', ['user_wt' => $author->id]) }}">{{ $author->getFullName() }}</a> 
						<small><em>{{ $author->email }}</em></small>
						@else
						<span class="text-muted"><em>Removed or banned</em></span>
						@endif
                    </td>
                    <td colspan="4">{{ $acuser->reason }}</td>
                </tr>
            @endforeach
		@endforeach
		</tbody>
	</table>
	<div>
		{{ $reports->links() }}
	</div>
	@endif
</div>
@stop