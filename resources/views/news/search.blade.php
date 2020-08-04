@section('title')
    {{ isset($search) ? 'Bạn đang tìm kiếm: ' . $search : $option['meta_title'] }}
@endsection

@extends('layouts.app')

@section('content')
    <div id="content" class="site-content no-sidebar">
        <div class="container-fluid">
            <div class="row">
                <header class="page-header">
                    <div class="container">
                        <h1 class="entry-title page-title">{{ 'Tìm kiếm: ' . $search }}</h1></div>
                </header>
                <div class="container dv-content">
                    <div id="primary" class="content-area col-md-9">
                        <main id="main" class="site-main" role="main">
                            <div class="hrm-breadcrums">
                                <div id="crumbs">
                                    <span>
                                        <a class="crumbs-home" href="/">Trang chủ</a>
                                    </span>
                                    <span class="delimiter">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                    <span class="current">Tìm kiếm</span></div>
                            </div>

                            <div class="list-blog clearfix">
                                <div class="post-listing archive-box">
                                    @if($articles->total())
                                        @foreach($articles as $article)
                                            <article class="item-list">
                                                <div class="post-thumbnail">
                                                    <a href="{{ $article->url }}"
                                                       title="{{ $article->name }}">
                                                        <img src="/img/400_280{{ $article->image }}"
                                                             class="attachment-blog-thumbnail size-blog-thumbnail wp-post-image"
                                                             alt="{{ $article->name }}"> </a>
                                                </div>
                                                <div class="entry">
                                                    <h2 class="post-box-title">
                                                        <a href="{{ $article->url }}" title="{{ $article->name }}">
                                                            {{ $article->name }}
                                                        </a>
                                                    </h2>
                                                    <p class="post-meta">
                                                    </p>
                                                    <p>{{ $article->description }}</p>
                                                    <a class="more-link" href="{{ $article->url }}"
                                                       title="{{ $article->name }}">
                                                        Xem tiếp »
                                                    </a>
                                                </div>
                                                <div class="clear"></div>
                                            </article>
                                        @endforeach
                                    @else
                                        <p class="text-center">Không có kết quả phù hợp.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="hrm-pagenavi">
                                {{ $articles->links() }}
                            </div>
                        </main>
                    </div>
                    @include('partials._aside')
                </div>
            </div>
        </div><!-- #content -->
    </div>
@endsection