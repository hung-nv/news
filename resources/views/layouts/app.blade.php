<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!--meta-->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2"/>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>

    <meta property="og:title" content="@yield('og_title')"/>
    <meta property="og:description" content="@yield('og_description')"/>
    <meta property="og:image" content="@yield('og_image')"/>


    <!--slider revolution-->
    <link rel="stylesheet" type="text/css" href="{{ asset('rs-plugin/css/settings.css') }}">
    <!--style-->
    <link href='//fonts.googleapis.com/css?family=Raleway:300,400,500&amp;subset=latin-ext' rel='stylesheet'
          type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin-ext' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/superfish.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.qtip.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/odometer-theme-default.css') }}">
    <!--fonts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/features/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/social/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <style>
        /*.caroufredsel-wrapper {*/
        /*    min-height: 500px;*/
        /*}*/
    </style>
</head>
<body>
<div class="site-container">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
</div>
<a href="#top" class="scroll-top animated-element template-arrow-vertical-3" title="Scroll to top"></a>
<div class="background-overlay"></div>
<!--js-->
<script type="text/javascript" src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.4.1.min.js') }}"></script>
<!--slider revolution-->
<script>(function () {
        window.lazySizesConfig = window.lazySizesConfig || {};
        window.lazySizesConfig.loadHidden = true;
        window.lazySizesConfig.loadMode = 1;
        window.lazySizesConfig.expand = 10;
        window.lazySizesConfig.expFactor = 1.5;
    })();
</script>
<script src="{{ asset('libs/lazysizes.min.js') }}" async></script>
<script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.ba-bbq.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui-1.12.1.custom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.ui.touch-punch.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.touchSwipe.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.transit.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.timeago.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.hint.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.costCalculator.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.qtip.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.blockUI.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/odometer.min.js') }}"></script>
</body>
</html>
