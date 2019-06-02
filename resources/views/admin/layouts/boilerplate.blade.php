<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>{{ $title ? $title.' :: MHS Admin' : 'MHS Admin' }}</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/metis/assets/lib/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/metis/assets/lib/font-awesome/css/font-awesome.min.css">
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="/metis/assets/css/main.min.css">
    <!-- Metis Theme stylesheet -->
    <link rel="stylesheet" href="/metis/assets/css/theme.css">
    <style type="text/css">
      .subitem > a {
        padding-left: 35px!important;
      }
      .subactive > a {
        color: gold!important;
      }
      #content, .outer, .inner {
        min-height: 750px!important;
      }
      .centerit {
        text-align: center;
      }
      .unclaimed {
        background: #f9f9f9!important;
      }
      .free {
        background: #fdffe8!important;
      }
      .paid {
        background: #c7f9e2!important;
      }
      .premium {
        background: #e8fdff!important;
      }
    </style>

    @yield('stylesheets')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/metis/assets/lib/html5shiv/html5shiv.js"></script>
        <script src="/metis/assets/lib/respond/respond.min.js"></script>
        <![endif]-->

    <!--Modernizr 2.7.2-->
    <script src="/metis/assets/lib/modernizr/modernizr.min.js"></script>
    <script src="/js/mhs.js"></script>
  </head>
  <body class="fixed" style="min-height: 100%;">
    @yield('body')

    <!--jQuery 2.1.0 -->
    <script src="/metis/assets/lib/jquery/jquery.min.js"></script>
    <!--Bootstrap -->
    <script src="/metis/assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- Screenfull -->
    <script src="/metis/assets/lib/screenfull/screenfull.js"></script>
    <!-- Metis core scripts -->
    <script src="/metis/assets/js/main.min.js"></script>
    
    <script src="/js/adm/mhs.actions.js"></script>
    @yield('scripts')
  </body>
</html>