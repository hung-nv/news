@section('title')
    {{ !empty($option['meta_title']) ? $option['meta_title'] : '' }}
@endsection

@section('description')
    {{ !empty($option['meta_description']) ? $option['meta_description'] : '' }}
@endsection

@extends('layouts.app')

@section('content')
{{--    @include('homepage.slider')--}}

    <div class="theme-page">
        <div class="clearfix">
            @include('homepage._services')

            @include('homepage._why_us')

            @include('homepage._about_us')

{{--            @include('homepage._recent_article')--}}

            @include('homepage._mission')

            @include('homepage._projects')
        </div>
    </div>
    <!-- /Main Container -->
@endsection
