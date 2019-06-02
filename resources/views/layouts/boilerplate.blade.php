<!DOCTYPE html>
<html lang="en" ng-app="twilight">
<head>
  <meta charset="utf-8">
  <title>MHS America</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @if(isset($meta_description))
  <meta name="description" content="{{ $meta_description }}">
  @else
  <meta name="description" content="The leading search engine for finding mobile homes and vacant spaces as well as services and contractors.">
  @endif
  <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords.', ' : '' }}mobile home spaces, mobile homes for sale, manufactured housing, mobile home search engine, search for mobile homes, MHS America, MHS, Mobile Home Spaces Across America">
  <meta name="author" content="MHS America">
  <meta name="application-name" content="MHS America">
  <meta name="formtoken" content="{{ csrf_token() }}">
  

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	@yield('incls-head-early')
  <!-- <link href='//fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'> -->
  <!-- <link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'> -->
  <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
  <link href="{{ URL::route('welcome') }}/css/app.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
  <![endif]-->
  <!--[if gte IE 9]
  <style type="text/css">
    #header-wrapper {
      filter: none;
    }
  </style>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::route('welcome') }}/img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::route('welcome') }}/img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::route('welcome') }}/img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="{{ URL::route('welcome') }}/img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="{{ URL::route('welcome') }}/img/favicon.png">

  @yield('incls-head')
  <script type="text/javascript" src="{{ URL::route('welcome') }}/js/angular.min.js"></script>
  <script type="text/javascript" src="{{ URL::route('welcome') }}/js/angular-route.min.js"></script>
</head>
<body @yield('attrs-body')>
	@yield('body')

  <script type="text/javascript" src="{{ URL::route('welcome') }}/js/jquery.min.js"></script>
  <script type="text/javascript" src="{{ URL::route('welcome') }}/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{ URL::route('welcome') }}/js/mhs.js"></script>
  <script type="text/javascript" src="{{ URL::route('welcome') }}/js/mhs.angular.js"></script>
  @yield('incls-body')
  <!-- <script type="text/javascript" src="/js/app.js"></script> -->
</body>
</html>
