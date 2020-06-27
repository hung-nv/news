@extends('layouts.app')

@section('content')
    <div id="content" class="site-content no-sidebar">
        <div class="container-fluid">
            <div class="row">
                <header class="page-header">
                    <div class="container">
                        <h1 class="entry-title page-title">{{ $category->name }}</h1></div>
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
                                    <span class="current">{{ $category->name }}</span></div>
                            </div>

                            <div class="list-blog clearfix">
                                <div class="post-listing archive-box">
                                    @if(!empty($articles))
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
                                    @endif
                                </div>
                            </div>
                            <div class="hrm-pagenavi">
                                {{ $articles->links() }}
                            </div>
{{--                            <div class="hrm-pagenavi">--}}
{{--                                <ul class="page-numbers">--}}
{{--                                    <li><span aria-current="page" class="page-numbers current">1</span></li>--}}
{{--                                    <li><a class="page-numbers"--}}
{{--                                           href="https://eduwork.edu.vn/tin-tuc-eduwork/page/2/">2</a></li>--}}
{{--                                    <li><a class="next page-numbers"--}}
{{--                                           href="https://eduwork.edu.vn/tin-tuc-eduwork/page/2/">→</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </main>
                    </div>
                    @include('partials._aside')
                </div>
            </div>
        </div><!-- #content -->
    </div>
@endsection