<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Template Corcel</title>

    <link rel="stylesheet" href="/css/all.css"/>
    <link rel="stylesheet" href="/css/app.css"/>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="/vendors/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="/vendors/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="/vendors/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
  </head>

  <body>

    @include('partials.menu_header_submenu')

    @yield('content')

    @include('partials.menu_footer')

    <div id="preloader"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdf0HAC3k9Lc_hSPGIYCxsYPmm_S7Y6tY&callback=initMap" async defer></script>
    <script src="/js/all.js"> </script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="/vendors/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="/vendors/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="/vendors/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="/vendors/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
  </body>
</html>
