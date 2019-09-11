@extends('layouts.boilerplate')
@section('incls-head-early')
  <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
  <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome/css/font-awesome.min.css">

@stop
@section('incls-head')
  <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/js/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/badges.css">
  <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/welcome.css">
  <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/cardscroller.css">
  <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/animate.css">
  
  <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/mhs.home.search-section.css">
  <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/mhs.home.for-everyone-promo.css">
  <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/mhs.home.latest-homes.css">
  <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/mhs.home.community-of-the-week.css">
  <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/mhs.home.products-promo.css">
  <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/mhs.home.mission-and-goals.css">
  <link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/mhs.home.states-section.css">
  <style type="text/css">
  .container {
    margin-right: 0!important;
    margin-left: 0!important;
    padding-left: 0!important;
    padding-right: 0!important;
    width: 100%!important;
  }
  .content,
  .divider {
    margin-right: auto!important;
    margin-left: auto!important;
    padding-left: 0!important;
    padding-right: 0!important;
    border: 0px solid #333!important;
    border-top: 0 none!important;
    width: 100%!important;
    background: #fcfcfc;/*#e6eef7;*/
  }
  .row {
    padding: 0;
    margin: 0;
    width: initial;
  }
  .nudge {
    width: 80%;
    margin: auto auto;
  }
  #header-wrapper {
    margin-bottom: 0px;
  }
  .products-promo-section, .states-banner, .map-section, .map-banner {
    background: #fff;
    width: calc(100% - 20px);
    margin: auto;
  }

  .for-everyone-promo-row {
    margin-bottom: 1in;
  }
  .mir {
    display: block!important;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 80px;
    background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
  }
  .mkr {
    height: 8vh;
    width: 8vh;
    border-radius: 4vh!important;
    position: absolute;
    bottom: 10px;
    left: calc(50vw - 4vh);
    z-index: 2;
    display: inline-flex!important;
    align-content: center;
    align-items: center;
    justify-content: center;
    -webkit-transition: all 0.5s linear;
    -moz-transition: all 0.5s linear;
    -o-transition: all 0.5s linear;
    transition: all 0.5s linear;
  }
  .mkr:after {
    font-family: FontAwesome;
    font-size: 4em;
    content: "\f078";
    color: #aeaeae;
    -webkit-transition: all 0.5s linear;
    -moz-transition: all 0.5s linear;
    -o-transition: all 0.5s linear;
    transition: all 0.5s linear;
  }
  .mkr:hover:after {
    color: #fff;
    -webkit-transition: all 0.5s linear;
    -moz-transition: all 0.5s linear;
    -o-transition: all 0.5s linear;
    transition: all 0.5s linear;
  }
  .mkr:hover {
    cursor: pointer;
    color: #fff;
    -webkit-transition: all 0.5s linear;
    -moz-transition: all 0.5s linear;
    -o-transition: all 0.5s linear;
    transition: all 0.5s linear;
  }

  .mission-and-goals-section {
    padding-top: 20vh!important;
    padding-bottom: 20vh;
  }
  #goalsbox {
    margin:0 ;
  }
  #promobanner {
    min-height: 40vh;
  }
@media only screen and (max-width: 767.98px) {
  .goal-imgs {
    max-width: initial;
  }
  .mission-and-goals-section {
    width: 100%;
  }
  .nudge {
    width: 100%;
    margin: auto auto;
  }
}


  </style>
@stop
@section('body')
<a name="top" id="top-anchor"></a>
@include('layouts.partial.header')
<div class="row divider blue hidden-xs" style="background: #005499;"></div>
@yield('content-above')
<div class="container content">

  <div class="row clearfix nudge white" style="background: #fff;width: 100%;">
    <div class="col-md-12 text-center" id="logo-wrapper" style="background: #fff;width: 100%;margin-top: 0px;">
      <p class="lead hidden-xs hidden-sm">Find mobile homes, vacant spaces,<br>and professional contractors...</p>
      <img src="{{ URL::route('welcome') }}./img/logo-2014-rooftop.png" id="logo" style="margin: 11px auto;">
      <p class="lead hidden-md hidden-lg" style="visibility:hidden">&quot;Mobile Home Spaces Across America&quot;</p>
    </div>
  </div>


  @include('layouts.partial.home-elements.search-section')
  @include('layouts.partial.errors')
  @include('layouts.partial.home-elements.for-everyone-promo')
  @include('layouts.partial.home-elements.latest-homes')
  @include('layouts.partial.home-elements.community-of-the-week')
  @include('layouts.partial.home-elements.products-promo')
  @include('layouts.partial.home-elements.mission-and-goals')
  @include('layouts.partial.home-elements.map-section')
    @include('layouts.partial.home-elements.connecting-section')
    @include('layouts.partial.home-elements.contact')
    @include('layouts.partial.home-elements.still-reading')

</div>

@yield('content-below')

@if(!isset($nofooter))
<div class="clearfix" id="footer-wrapper">
<div class="container">
  <div class="row flexrow clearfix">
    @if(isset($use_slim_footer))
    <div class="col-sm-12 column">
      @if(Route::currentRouteNamed('search'))
      <div class="footmodes" style="background: none;width: 100%;">
        <a class="btn btn-default mode0" data-action="mode" data-mode="0" style="float:right;width:calc(30vw - 4px);height:auto;"><i class="fas fa-users"></i><br> Communities</a>
        <a class="btn btn-default mode1" data-action="mode" data-mode="1" style="float:right;width:calc(30vw - 4px);height:auto;"><i class="fas fa-home"></i><br> Homes</a>
        <a class="btn btn-default mode2" data-action="mode" data-mode="2" style="float:right;width:calc(30vw - 4px);height:auto;"><i class="fas fa-sign"></i><br> Spaces</a>
      </div>
      <p class="text-muted text-center searchcopy">
        <small>Copyright &copy; {{ date('Y') }} MHS America. All rights reserved.</small>
      </p>
      @else
      <p class="text-muted text-center">
        <small>Copyright &copy; {{ date('Y') }} MHS America. All rights reserved.</small>
      </p>
      @endif
    </div>
    @else
    <div class="col-sm-4 col-md-2 column hidden-xs">
      <ul class="list-unstyled list-menu">
        <li>
          <a href="{{ URL::route('page', array('slug' => 'about')) }}">About MHS</a>
        </li>
        <li>
          <a href="{{ URL::route('page', array('slug' => 'contact')) }}">Contact</a>
        </li>
        <li>
          <a href="{{ URL::route('page', array('slug' => 'privacy')) }}">Privacy Policy</a>
        </li>
        <li>
          <a href="{{ URL::route('page', array('slug' => 'terms')) }}">Terms of Use</a>
        </li>
      </ul>
    </div>
    <div class="col-sm-8 col-md-6 column">
      <div class="row flexrow">
        <div class="col-sm-3" id="footerAvatarContainer">
          <img src="{!! Auth::check() ? $user->gravatar(100) : '//www.gravatar.com/avatar/?s=100&amp;f=y&amp;d=mm' !!}" class="img-responsive img-thumbnail pull-right" id="footerAvatar">
        </div>
        <div class="col-xs-12 col-sm-9">
          @if(Auth::check())
          <p class="lead">{{ ($user->first_name =='' || $user->last_name == '') ? $user->username : $user->first_name . ' ' . $user->last_name }}</p>
          <p>
            <a href="{{ URL::route('account') }}">Dashboard</a> - 
            @if($user->business == 1)
            <a href="{{ URL::route('account-business') }}">Business Center</a> - 
            @endif
            <a href="{{ URL::route('account-logout') }}">Logout</a>
          </p>
          @else
          <p>
            <a href="{{ URL::route('account-login') }}">Login</a> - 
            <a href="{{ URL::route('account-register') }}">Register</a>
          </p>
          @endif
        </div>
      </div>
    </div>
    <div class="col-sm-8 col-md-4 column">
          <p class="text-muted">
            <p class="visible-sm">&nbsp;</p>
            <small>Copyright &copy; {{ date('Y') }} Mobile Home Spaces Across America. All rights reserved.<br>
              <span class="visible-xs">
                <a href="{{ URL::route('page', ['slug' => 'privacy']) }}">Privacy Policy</a> | <a href="{{ URL::route('page', ['slug' => 'terms']) }}">Terms of Use</a>
              </span>
            </small>
          </p>
      <img src="{{ URL::route('welcome') }}/img/equal-housing-opportunity-logo-png-13.png" 
      style="margin:auto auto;max-width: 60px;margin-bottom: 0;margin-right: 0;">
    </div>
    @endif
  </div>
</div>
<div class="clearfix"></div>
</div>
@endif

@stop

@section('incls-body')

  <script type="text/javascript" src="{{ URL::route('welcome') }}/js/mhs.interface.js"></script>
  <script type="text/javascript" src="{{ URL::route('welcome') }}/js/jquery-jvectormap-1.2.2.min.js"></script>
  <script type="text/javascript" src="{{ URL::route('welcome') }}/js/maps/jquery.vmap.usa.js"></script>
  <script type="text/javascript" src="{{ URL::route('welcome') }}/js/gdp-data.js"></script>
  <script type="text/javascript" src="{{ URL::route('welcome') }}/js/rokocb.js"></script>


  <script type="text/javascript">
    $('#map').vectorMap({
      map: 'usa_en',
      backgroundColor: 'transparent',
      zoomOnScroll: false,
      enableZoom: false,
      regionStyle: {
        initial: {fill: '#7f8efe', stroke: '#cccccc', 'stroke-width': 1},
        hover: {fill: '#2233aa'},
        selected: {fill: '#00b7ea'}
      },
      onRegionClick: function(element, code, region)
        {
          $('body').append($('<form>').attr('method',"GET").attr('id','link-'+code).attr('action','{{ URL::route('welcome') }}/explore/' + code + '/'));
          $('#link-'+code).append($("#srcinput")).submit();
        }
    });

    function changeHomes()
    {
      $(".mhs-slideshow-loader").show();
      $(".mhs-slideshow").css({"min-height": $(".mhs-slideshow").outerHeight()+"px" });
      $("#slide-0, #slide-1, #slide-2, #slide-3").fadeOut(800, function(){

        setTimeout(reloadSlides, 100);

      });

    }
    function reloadSlides() {
      $(".mhs-slideshow-loader").fadeOut(500);
      $("#slide-0, #slide-1, #slide-2, #slide-3").fadeIn(800);
    }


    function animateCSS(element, animationName, callback) {
        const node = document.querySelector(element)
        node.classList.add('animated', animationName)

        function handleAnimationEnd() {
            node.classList.remove('animated', animationName)
            node.removeEventListener('animationend', handleAnimationEnd)

            if (typeof callback === 'function') callback()
        }

        node.addEventListener('animationend', handleAnimationEnd)
    }


    $(".clickycard").on('click', function(event){
        event.stopPropagation();
        event.stopImmediatePropagation();
        window.location = $(this).attr("href")
    });

    function resizeBackdrop() {
      //var offset = $('#header-wrapper').height() + $('#logo-wrapper').height() + 45;
      var offset = 200;//209;
      $('#great-welcome').outerHeight($(window).height() - offset + 'px');
    }

    $(window).on('resize', function(event) {
      resizeBackdrop();
    });
    $(function() {
      resizeBackdrop();
    });

    /**
    var noy = false;
    $("#statebanner").inViewport(function(px){
        if(px && noy) {
          noy = false;
          animateCSS('.statebanner', 'zoomIn', function(){
            //$("#statebanner").addClass("")
          });
          $("#statebanner").inViewport = undefined  ;
        }
    });

    var nox = false;
    $("#promobanner").inViewport(function(px){
        if(px && nox) {
          nox = false;
          animateCSS('#promobanner', 'zoomInRight', function(){
            //$("#statebanner").addClass("")
          });
          $("#promobanner").inViewport = undefined  ;
        }
    });

    var noz = false;
    $("#goalsbox").inViewport(function(px){
        if(px && noz) {
          noz = false;
          animateCSS('#goalsbox', 'fadeIn', function(){
            //$("#statebanner").addClass("")
          });
          $("#goalsbox").inViewport = undefined ;
        }
    });
  **/



    $(".mkr").on('click', function(event){
        event.stopPropagation();
        event.stopImmediatePropagation();
        w = document.getElementById("great-welcome").getBoundingClientRect();
        window.scroll({
          top: w.bottom,
          left: 0,
          behavior: 'smooth'
        });
    });

  </script>
@stop

