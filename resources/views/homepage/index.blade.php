@section('title')
    {{ !empty($option['meta_title']) ? $option['meta_title'] : '' }}
@endsection

@section('description')
    {{ !empty($option['meta_description']) ? $option['meta_description'] : '' }}
@endsection


@extends('layouts.app')

@section('content')
    <div id="content" class="site-content no-sidebar">
    <div class="container-fluid">
        <div class="row">
            <div  class="content-area trang-chu ">
                <main id="main" class="site-main">
                    <div class="home-slides clear clearfix ">
                        <ul class="home-slide">
                            @if(!empty($option['banner_image_1']))
                                <li class="item">
                                    <a href="#" title="">
                                        <img src="{{ $option['banner_image_1'] }}" alt="">
                                    </a>
                                </li>
                            @endif
                            @if(!empty($option['banner_image_2']))
                                <li class="item">
                                    <a href="#" title="">
                                        <img src="{{ $option['banner_image_2'] }}" alt="">
                                    </a>
                                </li>
                            @endif
                            @if(!empty($option['banner_image_3']))
                                <li class="item">
                                    <a href="#" title="">
                                        <img src="{{ $option['banner_image_3'] }}" alt="">
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="wg-home-content">
                    </div>

                    @include('homepage.partials._about_us')

                    @include('homepage.partials._why_us')

                    @include('homepage.partials._services')

                    @include('homepage.partials._courses')

                    @include('homepage.partials._new_article')

                </main>
            </div>
            <div class="clearfix clear"></div>
        </div>
    </div>
</div>
@endsection