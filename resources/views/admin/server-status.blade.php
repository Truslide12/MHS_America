@extends('admin.layouts.master')

@section('stylesheets')
	<style type="text/css">
		.stats_box li {float:none;display:table;}
	</style>
@stop

@section('sidemenu')
@include('admin.layouts.partial.side-dashboard')
@stop

@section('content')
<div class="row">
	<div class="col-md-4">
		<div class="text-center">
			<ul class="stats_box">
				<li>
					<h4 class="text-left">
						<samp>{{ $server->name() }}</samp><br>
						<small>Config: {{ $server->flavor->id }}</small>
					</h4>
				</li>
				<li>
					<div class="sparkline"><i class="fa fa-2x fa-tasks"></i></div>
					<div class="stat_text">
						<strong style="margin-bottom:5px">Server State</strong>
						<span class="percent text-green" style="position:static;float:none;"> {{ App\Models\Server::status($server->status) }}</span> 
					</div>
				</li>
				<li>
					<div class="sparkline"><i class="fa fa-2x fa-laptop"></i></div>
					<div class="stat_text">
						<strong>165</strong> Daily Visits
						<span class="percent up"> <i class="fa fa-caret-up"></i> +23%</span> 
					</div>
				</li>
			</ul>
		</div>
		<hr>
		<div class="text-center">
			<a class="quick-btn" href="#">
				<i class="fa fa-refresh fa-2x"></i>
				<span>Reboot</span> 
			</a>
			<a class="quick-btn" href="#">
				<i class="fa fa-bolt fa-2x"></i>
				<span>Rescue</span> 
			</a>
		</div>
	</div>
	<div class="col-md-6">
		<h3>Server Load <small>{{ $serverload }}% - 14 processes</small></h3>
		<div class="progress xs">
			<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="{{ $serverload }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $serverload }}%">
				<span class="sr-only">{{ $serverload }}% server load</span> 
			</div>
		</div><!-- /.progress -->
		<br>
		<div class="row">
			<div class="col-md-6">
				<h4>Memory <small>20%</small></h4>
				<div class="progress md">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
						<span class="sr-only">20% RAM</span> 
					</div>
				</div><!-- /.progress -->
			</div>
			<div class="col-md-6">
				<h4>Disk <small>{{ $disk->addUnits($disk->totalSpace(true) - $disk->freeSpace(true) ) }} used</small></h4>
				<div class="progress md">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ round(100 - ($disk->freeSpace(true)/$disk->totalSpace(true) * 100), 0) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round(100 - ($disk->freeSpace(true)/$disk->totalSpace(true) * 100), 1) }}%">
						<span class="sr-only">{{ round(100 - ($disk->freeSpace(true)/$disk->totalSpace(true) * 100), 1) }}% space used</span> 
					</div>
				</div><!-- /.progress -->
			</div>
		</div>
		<h5>NGINX <small>{{ $nginxmem }}%</small></h5>
		<div class="row">
			<div class="col-sm-6">
				<div class="progress xs" style="margin:0.5em 0 0">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ round($nginxmem) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $nginxmem }}%">
						<span class="sr-only">{{ $nginxmem }}% RAM</span> 
					</div>
				</div><!-- /.progress -->
			</div>
			<div class="col-sm-6">
				<span class="text-green">Running</span>
			</div>
		</div>
		
		<h5>MySQL <small>15%</small></h5>
		<div class="row">
			<div class="col-sm-6">
				<div class="progress xs" style="margin:0.5em 0 0">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
						<span class="sr-only">15% RAM</span> 
					</div>
				</div><!-- /.progress -->
			</div>
			<div class="col-sm-6">
				<span class="text-green">Running</span> <span class="text-muted">[243MB disk]</span>
			</div>
		</div>

		<h5>PHP <small>{{ $phpmem }}%</small></h5>
		<div class="row">
			<div class="col-sm-6">
				<div class="progress xs" style="margin:0.5em 0 0">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ round($phpmem) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $phpmem }}%">
						<span class="sr-only">{{ $phpmem }}% RAM</span> 
					</div>
				</div><!-- /.progress -->
			</div>
			<div class="col-sm-6">
				<span class="text-green">Running</span>
			</div>
		</div>
	</div>
</div>
@stop