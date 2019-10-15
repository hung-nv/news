@section('title', '404 Not found')

@section('description', '404 Not found')

@extends('layouts.app')

@section('content')
    <!-- Main Wrapper Header -->
    <div class="main-wrapper-header fancy-header dark-header parallax parallax-404" data-stellar-background-ratio="0.4">

        <div class="bg-overlay bg-overlay-dark bg-color-default"></div>

        <div class="container">

            <div class="row">
                <div class="col-sm-12 columns">
                    <div class="page-title">
                        <h2>Error 404 Page</h2>
                    </div>
                    <div class="breadcrumbs-wrapper">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Error 404 Page</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Main Wrapper Header -->

    <!-- Main Container -->
    <div class="main-wrapper">

        <!-- Container -->
        <div class="container">
            <div class="white-space space-big"></div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="iconbox-wrapper circle bg-color-default color-white iconbox-3x aligncenter">
                        <i class="icon gfx-danger-death-delete-destroy-skull-stream"></i>
                    </div>

                    <h1 class="text-center">Trang bạn tìm kiếm không tồn tại</h1>
                    <p class="lead text-center">Chúng tôi rất tiếc, trang bạn tìm kiếm không tồn tại. Vui lòng xem thêm <a href="/">tại đây</a></p>
                    <div class="white-space space-xsmall"></div>
                    <div class="text-center"><a class="btn btn-primary btn-lg">Hoặc trở lại trang trước đó</a></div>
                </div>
            </div>

            <div class="white-space space-big"></div>
        </div>
        <!-- /Container -->

    </div>
    <!-- /Main Container -->
@endsection