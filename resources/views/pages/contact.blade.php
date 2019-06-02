@extends('layouts.master')
@use-slim-footer

@section('page-title')
Contact Us
@stop

@section('incls-head')
<link rel="stylesheet" type="text/css" href="/css/static-footer.css">
<link rel="stylesheet" type="text/css" href="/css/contact.css">
@stop

@section('content')
<div class="row">
        <div class="col-mid-4">
            <form id="formobj" class="form">
            <div class="panel panel-default get-in-touch">
                <div class="tab-content">
					<div class="tab-pane active" id="noteform">
						<h3 class="text-center">
							Get in Touch</h3>
				        <div class="form-group">
				            <input type="text" class="form-control" id="txtnm" placeholder="Name" required>
				        </div>
				        <div class="form-group">
				            <input type="email" class="form-control" id="txtem" placeholder="Email" required>
				        </div>
				        <div class="form-group">
				            <textarea class="form-control" id="txtbdy" rows="3" placeholder="Message" required></textarea>
				        </div>
				        <button type="submit" class="btn btn-danger btn-sm btn-block" role="button">Send a note</button>
					</div>
					<div class="tab-pane" id="details">
						<h3 class="text-center">
				            Contact Details</h3>
						<address>
							<strong>MHS America</strong><br>
							34428 Yucaipa Blvd Ste E-102<br>
							Yucaipa, CA 92399<br>
							Phone: (805) 419-5998
						</address>
						<hr>
					</div>
					<div class="tab-pane" id="thanks">
						<h2 class="text-center">
				            Message sent <i class="fa fa"></i></h2>
						<hr>
						<p class="text-center">
							We've received your message. We appreciate customer feedback and take it into serious consideration. If you've raised a question or concern, someone will give you an answer as soon as possible, typically within 24 hours.
							<br>&nbsp;<br>
							<i>Thank you.</i>
						</p>
					</div>
					<div class="tab-pane" id="failed">
						<h2 class="text-center">
				            Error</h2>
						<hr>
						<p class="text-center">
							There was an issue sending the message. Please try again later or contact us by another means if this problem persists.
							<br>&nbsp;<br>
							<i>Sorry for the inconvenience.</i>
						</p>
					</div>
				</div>
				<div class="panel-footer text-center">
					<a href="#" id="morelink">More information</a>
					<ul class="nav nav-tabs hidden">
						<li class="active"><a id="noteformlink" href="#noteform" data-toggle="tab"></a></li>
						<li><a id="detailslink" href="#details" data-toggle="tab"></a></li>
						<li><a id="thankslink" href="#thanks" data-toggle="tab"></a></li>
						<li><a id="failedlink" href="#failed" data-toggle="tab"></a></li>
					</ul>
				</div>
            </div>
            </form>
        </div>
    </div>
@stop

@section('incls-body')
<script type="text/javascript" src="/js/TweenLite.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(document).mousemove(function(e){
		TweenLite.to($('body'),0.5, 
		{css:{
			'background-position':parseInt(event.pageX/8) + "px "+parseInt(event.pageY/12)+"px, "+parseInt(event.pageX/15)+"px "+parseInt(event.pageY/15)+"px, "+parseInt(event.pageX/30)+"px "+parseInt(event.pageY/30)+"px"
		}});
	});
	$('#morelink').click(function(event){
		event.preventDefault();
		if($('#details').hasClass('active')){
			$('#noteformlink').tab('show');
			$(this).text("More information");
		}else{
			$('#detailslink').tab('show');
			$(this).text("Send a note");
		}

	});
	$('#formobj').submit(function() {
		event.preventDefault();
		pony.fetch('/octavia/contact', {name: $('#txtnm').val(), email: $('#txtem').val(), message: $.trim($('#txtbdy').val())}, function(data) {
			$('#thankslink').tab('show');
			$('#txtnm').val('');
			$('#txtem').val('');
			$('#txtbdy').val('');
		},
		function() {
			$('#failedlink').tab('show');
		},
		function() {
			$('#failedlink').tab('show');
		});
	});
});
</script>
@stop