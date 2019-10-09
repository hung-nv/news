@section('title')
    {{ !empty($option['meta_title']) ? $option['meta_title'] : '' }}
@endsection

@section('description')
    {{ !empty($option['meta_description']) ? $option['meta_description'] : '' }}
@endsection

@extends('layouts.app')

@section('content')
    <!-- Main Container -->
    <div class="main-wrapper">

        <!-- Container -->
        <div class="container">
            <div class="white-space space-big"></div>

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox vertical animation fadeInLeft">
                        <div class="iconbox-wrapper center-block color-default circle border iconbox-3x">
                            <span class="livicon" data-n="pencil" data-s="64" data-color="#F7505A" data-hovercolor="#F7505A" data-op="1" data-onparent="true"></span>
                        </div>
                        <div class="iconbox-content">
                            <h4>Giải pháp tối ưu</h4>
                            <p>Quisque sagittis lacus eu lorem sodales, id <a href="#">vulputate velit</a> adipiscing. Aenean adipiscing, sem sit amet mollis aliquet.</p>
                        </div>
                    </div>
                    <div class="white-space space-small"></div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox vertical animation fadeInLeft delay1">
                        <div class="iconbox-wrapper center-block color-default circle border iconbox-3x">
                            <span class="livicon" data-n="rocket" data-s="64" data-color="#F7505A" data-hovercolor="#F7505A" data-op="1" data-onparent="true"></span>
                        </div>
                        <div class="iconbox-content">
                            <h4>Tư vấn chuyên nghiệp</h4>
                            <p>Quisque sagittis lacus eu lorem sodales, id <a href="#">vulputate velit</a> adipiscing. Aenean adipiscing, sem sit amet mollis aliquet.</p>
                        </div>
                    </div>
                    <div class="white-space space-small"></div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox vertical animation fadeInRight">
                        <div class="iconbox-wrapper center-block color-default circle border iconbox-3x">
                            <span class="livicon" data-n="responsive" data-s="64" data-color="#F7505A" data-hovercolor="#F7505A" data-op="1" data-onparent="true"></span>
                        </div>
                        <div class="iconbox-content">
                            <h4>Thấu hiểu khách hàng</h4>
                            <p>Quisque sagittis lacus eu lorem sodales, id <a href="#">vulputate velit</a> adipiscing. Aenean adipiscing, sem sit amet mollis aliquet.</p>
                        </div>
                    </div>
                    <div class="white-space space-small"></div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox vertical animation fadeInRight delay1">
                        <div class="iconbox-wrapper center-block color-default circle border iconbox-3x">
                            <span class="livicon" data-n="settings" data-s="64" data-color="#F7505A" data-hovercolor="#F7505A" data-op="1" data-onparent="true"></span>
                        </div>
                        <div class="iconbox-content">
                            <h4>Chi phí hợp lý</h4>
                            <p>Quisque sagittis lacus eu lorem sodales, id <a href="#">vulputate velit</a> adipiscing. Aenean adipiscing, sem sit amet mollis aliquet.</p>
                        </div>
                    </div>
                    <div class="white-space space-small"></div>
                </div>
            </div>

            <div class="white-space space-medium"></div>
        </div>
        <!-- /Container -->

        @include('homepage._special')

        @include('homepage._why_us')

        @include('homepage._services')

        <!-- Container -->
        <div class="container">
            <div class="white-space space-big"></div>

            <div class="row">
                <div class="col-md-12 columns">
                    <!-- Carousel -->
                    <div class="carousel-box" >
                        <div class="carousel carousel-simple" data-carousel-autoplay="6000" data-carousel-items="5" data-carousel-nav="false" data-carousel-pagination="false"  data-carousel-speed="1000">
                            <div class="carousel-item">
                                <img src="img/demo/logos/1.png" class="img-transparency" alt="Brand 1">
                            </div>
                            <div class="carousel-item">
                                <img src="img/demo/logos/2.png" class="img-transparency" alt="Brand 2">
                            </div>
                            <div class="carousel-item">
                                <img src="img/demo/logos/3.png" class="img-transparency" alt="Brand 3">
                            </div>
                            <div class="carousel-item">
                                <img src="img/demo/logos/4.png" class="img-transparency" alt="Brand 4">
                            </div>
                            <div class="carousel-item">
                                <img src="img/demo/logos/5.png" class="img-transparency" alt="Brand 5">
                            </div>
                            <div class="carousel-item">
                                <img src="img/demo/logos/6.png" class="img-transparency" alt="Brand 6">
                            </div>
                            <div class="carousel-item">
                                <img src="img/demo/logos/1.png" class="img-transparency" alt="Brand 7">
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel -->
                </div>
            </div>

            <div class="white-space space-big"></div>
        </div>
        <!-- /Container -->

    </div>
    <!-- /Main Container -->
@endsection