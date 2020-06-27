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
                                    @if(!empty($category))
                                        <span><a href="{{ route('article.list', ['slug' => $category->slug]) }}">{{ $category->name }}</a></span>
                                        <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                                    @endif
                                    <span class="current">{{ $article->name }}</span>
                                </div>
                            </div>
                            <div class="entry-content">
                                {{ $article->description }}
                                {!! $article->content !!}
                            </div>
                            <footer class="entry-footer">
                                <span class="cat-links">
                                    Đăng trong
                                @foreach($article->category as $itemParent)
                                    <a href="{{ route('article.list', ['slug' => $itemParent->slug]) }}" rel="category tag">{{ $itemParent->name }}</a>
                                @endforeach
                                </span>
                            </footer>

                            <nav class="navigation post-navigation" role="navigation" aria-label="Bài viết">
                                <h2 class="screen-reader-text">Điều hướng bài viết</h2>
                                <div class="nav-links">
                                    <div class="nav-previous">
                                        <a href="https://eduwork.edu.vn/nhung-loi-ich-cua-viec-hoc-van-bang-2-cao-dang-dieu-duong/" rel="prev">Những Lợi Ích Của Việc Học Văn Bằng 2 Cao Đẳng Điều Dưỡng</a>
                                    </div>
                                    <div class="nav-next">
                                        <a href="https://eduwork.edu.vn/giai-dap-thac-mac-ve-thoi-gian-hoc-van-bang-2-la-bao-lau/" rel="next">Giải Đáp Thắc Mắc Về Thời Gian Học Văn Bằng 2 Là Bao Lâu</a>
                                    </div>
                                </div>
                            </nav>

                            @if(!empty($relatedArticles))
                            <div class="related-post">
                                <div class="related-title-block">
                                    <h3 class="related-title">Các bài viết liên quan</h3>
                                </div>
                                <div class="show-related">
                                    <div class="row">
                                        <ul class="related clearfix clear">
                                            @foreach($relatedArticles as $itemRelated)
                                            <li class="item-related col-xs-6">
                                                <div class="item-inner clearfix">
                                                    <a href="{{ $itemRelated->url }}" title="{{ $itemRelated->name }}">
                                                        <h3>{{ $itemRelated->name }}</h3>
                                                        <div class="thumb">
                                                            <img src="/img/80_80{{ $itemRelated->image }}" class="attachment-recent-thumbnail size-recent-thumbnail wp-post-image" alt="{{ $itemRelated->name }}" >
                                                        </div>
                                                        <div class="description">{{ $itemRelated->description }}</div>
                                                    </a>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </main>
                    </div>
                    @include('partials._aside')
                </div>
            </div>
        </div>
    </div>
@endsection