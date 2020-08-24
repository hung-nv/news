
<!doctype html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <title>@yield('title')</title>

    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="/"/>
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:site_name" content="@yield('title')"/>
    <meta property="og:image" content="@yield('og_image')"/>
    <link rel='stylesheet' href='{{ asset('css/bootstrap.min.css?ver=5.3.4') }}'
          type='text/css' media='all'/>

    <link rel='stylesheet' href='{{ asset('libs/font-awesome-v5.9.0/css/all.min.css') }}'
          type='text/css' media='all'/>

    <link rel='stylesheet' href='{{ asset('css/style.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('css/app.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('css/animations.min.css?ver=2.8.2') }}' type='text/css' media='all'/>

    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=vietnamese&#038;ver=5.3.4'
          type='text/css' media='all'/>

    <link rel="stylesheet" href="{{ asset('libs/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/owlcarousel/assets/owl.theme.default.min.css') }}">

    <link rel="shortcut icon" href="https://eduwork.edu.vn/wp-content/uploads/2018/09/Logo-cho-web.png"/>
</head>
<body class="home page-template page site_fullwidth">
<div id="mainApp" class="site">
    @include('layouts.header')

    @yield('content')

    @include('partials._popup_customer')

    @include('partials._modal_confirm_crawl')

    <template v-if="isLoading">
        <div class="loading">Loading&#8230;</div>
    </template>
</div>

@include('layouts.footer')

<div id="topcontrol" class="icon-up-open" title="Scroll To Top">
    <i class="fa fa-angle-up"></i>
</div>

@if(!empty($option['hotline']))
    <div class="hotline">
        <div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon" >
            <div class="phonering-alo-ph-circle"></div>
            <div class="phonering-alo-ph-circle-fill"></div>
            <div class="phonering-alo-ph-img-circle">
                <a href="tel:{{ $option['hotline'] }}" class="pps-btn-img " title="Liên hệ">
                    <img src="https://i.imgur.com/v8TniL3.png" alt="Liên hệ" width="50"
                         onmouseover="this.src='https://i.imgur.com/v8TniL3.png';"
                         onmouseout="this.src='https://i.imgur.com/v8TniL3.png';">
                </a>
            </div>
        </div>
        <div class="mobile-hotline" id="mobile-hotline">
            <a href="tel:{{ $option['hotline'] }}" title="tel:{{ $option['hotline'] }}">
                <span class="text-hotline">{{ $option['hotline'] }}</span>
            </a>
        </div>
    </div>
@endif

<script type='text/javascript' src="{{ asset('libs/jquery.min.js') }}"></script>
<script type='text/javascript' src='{{ asset('libs/jquery-migrate.min.js') }}'></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script type='text/javascript' src='{{ asset('js/navigation_skip-link-focus-fix.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/bootstrap.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/lightslider.min.js?ver=2.1') }}'></script>
<script type='text/javascript' src='{{ asset('libs/fancybox/dist/jquery.fancybox.min.js?ver=3.5.7') }}'></script>
<script type='text/javascript' src='{{ asset('libs/owlcarousel/owl.carousel.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/custom.js') }}'></script>
<script src="{{ asset('/js/themes.js') }}"></script>
</body>
</html>
