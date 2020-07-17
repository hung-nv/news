@section('title')
    {{ isset($article->meta_title) ? $article->meta_title : $article->name }}
@endsection

@section('description')
    {{ isset($article->meta_description) ? $article->meta_description : $article->description }}
@endsection

@extends('layouts.app')

@section('content')
    <div id="content" class="site-content no-sidebar">
        <div class="container-fluid">
            <div class="row">
                <header class="page-header">
                    <div class="container">
                        <h1 class="entry-title page-title">{{ $article->name }}</h1></div>
                </header>
                <div class="container dv-content">
                    <div id="primary" class="content-area col-md-9">
                        <main id="main" class="site-main">
                            <div class="hrm-breadcrums">
                                <div id="crumbs">
                                    <span ><a class="crumbs-home" href="/">Trang chủ</a></span>
                                    <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                                    <span class="current">{{ $article->name }}</span>
                                </div>
                            </div>
                            <div class="entry-content">
                                {!! $article->content !!}
                            </div>
                        </main>
                    </div>
                    @include('partials._aside')
                </div>
            </div>
        </div>
    </div>
@endsection