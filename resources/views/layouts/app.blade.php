<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <title>@yield('title')</title>

    <link href="{{ asset('/css/vndoc.min.css') }}" rel="stylesheet"/>
</head>
<body class="theme quiz viewquiz">

@include('layouts.header')

@yield('content')

@include('layouts.footer')


<script src='{{ asset('/js/vndoc.min.js') }}'></script>

@yield('scripts')
</body>
</html>
