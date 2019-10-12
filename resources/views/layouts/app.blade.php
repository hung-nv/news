<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="robots" content="all">
    <title>@yield('title')</title>

    <!-- Styles -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Bootstrap RTL
      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.css"> -->

    <!-- Font Awesome 4.1.0 -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Avendor Icons Font -->
    <link href="{{ asset('css/avendor-font-styles.css') }}" rel="stylesheet">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/revolutionslider/settings.css') }}" media="screen"/>

    <!-- Animate CSS -->
    <link href="{{ asset('css/themecss/animate.css') }}" rel="stylesheet">

    <!-- Lightbox CSS -->
    <link href="{{ asset('css/themecss/lightbox.css') }}" rel="stylesheet">

    <!-- OWL Carousel -->
    <link href="{{ asset('css/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl-carousel/owl.transitions.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('css/avendor.css') }}" rel="stylesheet">

    <!-- Color CSS -->
    <link href="{{ asset('css/colors/color-default.css') }}" rel="stylesheet" title="style1">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,100,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{ asset('ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{ asset('ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{ asset('ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('ico/apple-touch-icon-57-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ 'ico/favicon.png' }}">


    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <meta property="og:title" content="@yield('og_title')"/>
    <meta property="og:description" content="@yield('og_description')"/>
    <meta property="og:image" content="@yield('og_image')"/>

    @if(!empty($option['private_script']))
        {!! $option['private_script'] !!}
    @endif
</head>
<body class="bg-pattern1" data-spy="scroll" data-target=".navbar">
<div id="preloader"></div>

<!-- Page Main Wrapper -->
<div class="page-wrapper" id="page-top">

    @include('layouts.header')

    @include('layouts.slider')

    @yield('content')

    @include('layouts.footer')
</div>


<!-- Back To Top -->
<a href="#page-top" class="scrollup smooth-scroll"><span class="fa fa-angle-up"></span></a>
<!-- /Back To Top -->


<!-- Javascripts
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/themejs/jquery.countdown.js') }}"></script>

<!-- Preloader -->
<script src="{{ asset('js/themejs/jquery.queryloader2.min.js') }}" type="text/javascript"></script>

<!-- Smooth Scroll -->
<script src="{{ asset('js/themejs/SmoothScroll.js') }}" type="text/javascript"></script>

<!-- Stick On Scroll -->
<script src="{{ asset('js/themejs/jquery.stickOnScroll.js') }}" type="text/javascript"></script>

<!-- Scrolling Smooth to section - requires jQuery Easing plugin -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="{{ asset('js/revolutionslider/jquery.themepunch.plugins.min.js') }}"></script>
<script src="{{ asset('js/revolutionslider/jquery.themepunch.revolution.min.js') }}"></script>

<!-- LivIcons -->
<script src="{{ asset('js/livicons/livicons-1.3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/livicons/raphael-min.js') }}" type="text/javascript"></script>

<!-- Portfolio -->
<script src="{{ asset('js/themejs/jquery.isotope.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/themejs/jquery.colio.min.js') }}" type="text/javascript"></script>

<!-- Parallax -->
<script src="{{ asset('js/themejs/jquery.stellar.min.js') }}" type="text/javascript"></script>

<!-- Carousel -->
<script src="{{ asset('js/owl-carousel/owl.carousel.js') }}" type="text/javascript"></script>

<!-- Counters -->
<script src="{{ asset('js/themejs/jquery.countTo.js') }}" type="text/javascript"></script>

<!-- Lightbox -->
<script src="{{ asset('js/themejs/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>

<!-- Tooltips -->
<script src="{{ asset('js/themejs/jQuery.Opie.Tooltip.min.js') }}" type="text/javascript"></script>

<!-- Animation Viewport -->
<script src="{{ asset('js/themejs/jquery.waypoints.min.js') }}" type="text/javascript"></script>

<!-- Pie Chart -->
<script src="{{ asset('js/themejs/jquery.easypiechart.min.js') }}" type="text/javascript"></script>

<!-- Google Maps -->
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>

<!-- Load Scripts -->
<script src="{{ asset('js/themejs/application.js') }}"></script>
</body>
</html>