@extends('layouts.master')
@fix-navbar
@use-navbar-divider

@section('incls-head-early')
<meta name="_token" content="{{ csrf_token() }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/bootstrap-datetimepicker.css">
<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
@stop

@section('content')
{{ csrf_field() }}
<div class="row white">
	<div class="col-md-12">
		<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="btn btn-default pull-right visible-xs visible-sm">Back to profile</a>
		<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="btn btn-default pull-right push-down hidden-xs hidden-sm">Back to profile</a>
		<h3>Profile Manager</h3>
		<h4>
			<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}">{{ $profile->title }}</a> <small><i class="fa fa-chevron-right"></i></small> 
			<a href="{{ URL::route('editor-homes', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}">Homes</a> <small><i class="fa fa-chevron-right"></i></small> 
			<span id="home-name">{{ $home->title }}</span>
		</h4>
		<hr>
	</div>
</div>
<div class="row white"  id="app-container" style="min-height:500px;position:relative;">
	<div class="col-md-3" id="app-nav" style="display: none;">
		<ul class="list-process visible-xs">
			<li class="active">Info</li><li>Photos</li><li>Ads</li><li>Finish</li>
		</ul>
		<ul id="list-process" class="list-process hidden-xs">
      <li id="app-intro" class="active menu-head">
        <div>
          <div class="ico_box"><i class="fa fa-pencil-square-o"></i></div>
          <div>Profile Information</div>
        </div>
      </li>
      <li class="disabled" style="pointer-events: none;">
        <div>
          <div class="ico_box"><i class="fa  fa-user"></i></div>
          <div>Home ID:</div>
          <div style="padding-left: 10px;" id="id-field"></div>
        </div>
      </li>
      <li class="disabled" style="pointer-events: none;">
        <div>
          <div class="ico_box"><i class="fa fa-exclamation-circle"></i></div>
          <div>Status:</div>
          <div style="padding-left: 10px;" id="status-field"></div>
        </div>
      </li>
      @if(1==2)
      <li id="home-payment" class="disabled">
        <div>
          <div class="ico_box"><i class="fa fa-tag"></i></div>
          <div>Payment Information</div>
          <div style="padding-left: 10px;" id="count-payment"></div>
        </div>
      </li>
      @endif
      <li id="home-review" class="disabled">
        <div>
          <div class="ico_box"><i class="fa fa-check"></i></div>
          <div>Overview</div>
          <div style="padding-left: 10px;" id="count-review"></div>
        </div>
      </li>
			<li id="home-intro" class="active menu-head margin-t">
        <div>
          <div class="ico_box"><i class="fa fa-pencil-square-o"></i></div>
          <div>Home Information</div>
        </div>
      </li>
      <li id="home-info" class="disabled">
        <div>
          <div class="ico_box"><i class="fa fa-info"></i></div>
          <div>General information</div>
          <div style="padding-left: 10px;" id="count-info"></div>
        </div>
      </li>
      <li id="home-opts" class="disabled">
        <div>
          <div class="ico_box"><i class="fa fa-gears"></i></div>
          <div>Home Features</div>
          <div style="padding-left: 10px;" id="count-opts"></div>
        </div>
      </li>
			<li id="home-specs" class="disabled">
        <div>
          <div class="ico_box"><i class="fa fa-pencil"></i></div>
          <div>Build Information</div>
          <div style="padding-left: 10px;" id="count-specs"></div>
        </div>
      </li>
      <li id="home-loc" class="disabled">
        <div>
          <div class="ico_box"><i class="fa fa-map-marker"></i></div>
          <div>Location Information</div>
          <div style="padding-left: 10px;" id="count-loc"></div>
        </div>
      </li>
      <li id="home-adinfo" class="disabled">
        <div>
          <div class="ico_box"><i class="fa fa-info"></i></div>
          <div>Ad Information</div>
          <div style="padding-left: 10px;" id="count-adinfo"></div>
        </div>
      </li>
      <li id="home-photos" class="disabled">
        <div>
          <div class="ico_box"><i class="fa fa-photo"></i></div>
          <div>Upload photos</div>
          <div style="padding-left: 10px;" id="count-photos"></div>
        </div>
      </li>
		</ul>



    

<div style="width: 100%;margin-left: 5px;display: none;">
  <div class="progress" style="margin-bottom: 0px;">
    <div id="completion_progress" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
    </div>
  </div>
</div>

<div id="save_status"></div>


	</div>
	<div class="col-md-offset-1 col-md-10" id="form-container" style="height:100%;overflow: auto;">

	</div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-default" id="modal-confirm">Confirm</button>
      	<button type="button" class="btn btn-default" id="modal-deny">Deny</button>
        <button type="button" class="btn btn-default" id="modal-close" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@stop

@section('incls-body')
<style type="text/css">
	.photo-button{border:2px dashed #428bca;background:#efefef;display:inline-block;width:150px;height:150px;}
	.photo-button:hover,.photo-button:focus{border-color:#2a6496;}
	.photo-button .fa{font-size:200%;width:20px;height:20px;margin:65px;}
	.photo-button:hover .fa,.photo-button:focus .fa,.photo-button .fa.hover{display:none;}
	.photo-button:hover .fa.hover,.photo-button:focus .fa.hover{display:inline-block;}

	.list-process{list-style:none;margin-right:-10px;padding:0;font-size:120%;line-height:1.75em;}
	.list-process li{padding:0 10px;}
  .list-process li.disabled{ color: silver;pointer-events: none; }
	.list-process li.active{margin-right:-3px;border-right:3px solid #0099ff;font-weight:bold;}
	.list-process li small{color:#777777;font-size:68%;}
	.list-process li:hover{margin-right:-3px;border-right:3px solid #00EEff;background:#f7f9fc;cursor:pointer;}
	@media (max-width: 959px) {
		#homeForm .text-right {text-align: left;}
		#homeTypeLabel{line-height:3em;}
		#homeForm .form-group {margin-top:0 !important;padding-top:0 !important;}
		#homeForm .form-group > .col-sm-2, #homeForm .form-group > .col-sm-5 {margin-top:15px !important;padding-top:0 !important;}
		.list-process li{display:inline-block;width:24%;}
		.list-process li{margin-bottom:-3px;border-bottom:3px solid #999999;}
		.list-process li.active{margin-right:0;border-bottom:3px solid #0099ff;border-right:none;}
		.list-process li small{display:none;}
	}
  .nopad { padding: 0!important; }
    .modal-content { margin-top: 20%; }
    .modal-header .close { float: right; }

.list-process li {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.list-process li .ico_box {
  border: 0px solid black;
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 30px;
  height: 30px;
  float: left;
}

.list-process li div {
  background: none;
  padding: 0px;
  float: left;
}

.list-process li .ico_box i {
  margin: auto auto;
}

.menu-head,
.menu-head:hover {
border: 0px solid red!important;
background: #337ab7!important;
border-color: #337ab7!important;
color:snow!important;
pointer-events: none!important;
font-weight: normal!important;
}

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@-o-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  height: 20px;
  margin-bottom: 20px;
  overflow: hidden;
  background-color: #f5f5f5;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
          box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}
.progress-bar {
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #fff;
  text-align: center;
  background-color: #337ab7;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
          box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
  -webkit-transition: width .6s ease;
       -o-transition: width .6s ease;
          transition: width .6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  -webkit-background-size: 40px 40px;
          background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
       -o-animation: progress-bar-stripes 2s linear infinite;
          animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}

.tooltip.in {
  opacity: 1!important;
}

  /* Tooltip */
  .test + .tooltip > .tooltip-inner {
background: rgb(106,134,185);
background: linear-gradient(0deg, rgba(106,134,185,1) 2%, rgba(101,134,186,1) 100%);
      border-radius: 5px !important;
      color: #FFFFFF; 
      border: 0px solid green; 
      padding: 5px;
      font-size: 1.15em;
      opacity: 1 !important;
      width: 10vw;
  }
  /* Tooltip on top */
  .test + .tooltip.top > .tooltip-arrow, 
  .test + .tooltip.bottom > .tooltip-arrow, 
  .test + .tooltip.left > .tooltip-arrow, 
  .test + .tooltip.right > .tooltip-arrow {
      border-right: 5px solid rgba(106,134,185,1) ;
  }
    .activeslot { 
    font-weight: bold;
    background-color: #fff!important;
  }
</style>


<script type="text/javascript" src="{{ URL::route('welcome') }}/js/moment.min.js"></script>
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/bootstrap-transition.js"></script>
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/bootstrap-collapse.js"></script>
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/croppic.min.js"></script>
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/mhs.editor.photos.js"></script>
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/HomeEditorIO.js"></script>
<script>
var Editor = new HomeEditorIO({{ ( ! empty($home->id) ? $home->id : 'null' ) }});

@if ( ! empty($home->id) )
  load_app(0)
@else
  shortCutPony("home-intro");
@endif

/*
wh = $(window).height();
fh = $("#footer-wrapper").height();
hh = $("#header-wrapper").outerHeight();
ah = Math.max(0, $("#app-container").height()+50);
ph = wh-(fh+hh);
uh = Math.max(ph, ah);
if(uh == ph) { uh = wh-hh; }
$("#app-container").height(uh);
console.log(wh,fh,hh,(wh-(fh+hh)));
*/
function load_app(s) {


  $("#app-nav, #form-container").css("visibility", "hidden");
  $("#form-container").removeClass("col-md-offset-1 col-md-10");
  $("#form-container").addClass("col-md-9");
  if ( s == 0 ) {
    //
  } else {
    Editor.MoveNext();
  }
  $("#app-nav, #form-container").css({"visibility": "visible", "display":"initial", "opacity": 0}).animate({
    opacity: 1
  }, 1000);

}

function showhelper(id){
  switch(id) {
    case "wizard":
      $("#helper-w").show();
    break;
    case "opts-step":
      $("#helper-e").show();
    break;
    case "onepage":
      $("#helper-o").show();
    break;
  }
}
function hidehelper(id){
  switch(id) {
    case "wizard":
      $("#helper-w").hide();
    break;
    case "opts-step":
      $("#helper-e").hide();
    break;
    case "onepage":
      $("#helper-o").hide();
    break;
  }
}

function newPony(ponyName)
{
  //ui
    window.scrollTo(0, 0);
  setProgress(getProgress()+25);
  $('#myModal').modal('hide');

  $( "#list-process > li:not(.menu-head)" ).each(function( index ) {
    $( this ).removeClass("active");
    if(this.id==ponyName){
      $(this).removeClass("disabled");
    	$(this).addClass("active");
    }
  });


  $('#form-container').html("<center><img src='{{ URL::route('welcome') }}/img/loading.gif'><br>Loading..</center>");
  init = null;
  pony.fetch('forms/'+ponyName, {}, function(data) {

    //$('#form-container').hide().html(data).fadeIn("slow");
    $('#form-container').html(data);
    $('[data-toggle="tooltip"]').tooltip();

    if (typeof init == 'function') { 
      console.log("exe loaded init");
      init(); 
    } else { console.log("no instr loaded"); }
    if ( ponyName == "home-finish") { /*build_review();*/ }
  }, function(){
    $('#form-container').hide().html("Error: Failed to load data..").show();//.fadeIn("slow");
  });
}

function shortCutPony(ponyName)
{
  //Update Step..
  //ui
  window.scrollTo(0, 0);
  $('#myModal').modal('hide');
  $( "#list-process > li:not(.menu-head)" ).each(function( index ) {
    $( this ).removeClass("active");
    if(this.id==ponyName){
      $(this).removeClass("disabled");
      $(this).addClass("active");
    }
  });
  init = null;
  //$('#form-container').html("<center><img src='{{ URL::route('welcome') }}/img/loading.gif'><br>Loading..</center>");
  pony.fetch('forms/'+ponyName, {}, function(data) {
    $('#form-container').hide().html(data).show();//.fadeIn("slow");
    if (typeof init == 'function') { 
      console.log("exe loaded init");
      init(); 
    } else { console.log("no instr loaded"); }
    //console.log("ree", data)
    $('[data-toggle="tooltip"]').tooltip();


  }, function(){
    $('#form-container').hide().html("Error: Failed to load data..").show();//.fadeIn("slow");
  });
}

$(window).bind('beforeunload', function(){
  return 'Changes you have made may not be saved';
});



function holdYourHorses(){
	//
}

  $( "#list-process > li" ).each(function( index ) {
	pony.bind('click', '#'+this.id+'', function(){shortCutPony(''+this.id+'')});
  });

$("#snazzy_title").blur(function(){
    $("#home-name").html(this.value);
});

function setProgress(val){
	$('#completion_progress').attr('aria-valuenow', val).css('width',val+"%");
}

function getProgress(){
	return parseFloat($('#completion_progress').attr('aria-valuenow'));
}

//pony.bind('click', '#opts-step', function(){newPony("home-intro")});






</script>
@stop