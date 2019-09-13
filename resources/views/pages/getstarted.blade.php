@extends('layouts.page')

@section('page-title')
Pick a Service to Get Started
@stop

@php
 $page_header = "Get Started";
  $meta_description = "MHS America is offering more than one way to promote. Start by letting us know what type of service you are looking for?";
@endphp

@section('page-content')
<br><br><br>
<center>
<a class="btn btn-primary" style="padding: 20px;width: 80%;margin: 10px auto;" href="getstarted/community">Promote a Community</a>
<a class="btn btn-primary" style="padding: 20px;width: 80%;margin: 10px auto;" href="getstarted/home">List a Home</a>
<a class="btn btn-primary" style="padding: 20px;width: 80%;margin: 10px auto;" href="getstarted/Professional" disabled>Start Professional Profile</a>

</center>
@stop
