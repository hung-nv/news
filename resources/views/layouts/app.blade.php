<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="robots" content="all">
    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9491879653600025",
            enable_page_level_ads: true
        });
    </script>
</head>
<body>
    @include('layouts.header')

    <div class="wrapper container">
        @yield('content')
    </div>

    @include('layouts.footer')
</body>
</html>