@section('title')
    {{ isset($article->meta_title) ? $article->meta_title : $article->name }}
@endsection

@section('description')
    {{ isset($article->meta_description) ? $article->meta_description : $article->description }}
@endsection

@section('og_image', 'img/400'.$article->image)

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