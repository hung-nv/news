@section('title')
    {{ isset($article->meta_title) ? $article->meta_title : $article->name }}
@endsection

@section('description')
    {{ isset($article->meta_description) ? $article->meta_description : $article->description }}
@endsection

@section('og_title', isset($article->meta_title) ? $article->meta_title : $article->name)
@section('og_description', isset($article->meta_description) ? $article->meta_description : $article->description)
@section('og_image', 'img/400'.$article->image)

@extends('layouts.app')

@section('content')
    @include('partials._breadcrumbs', ['name' => $article->name, 'heading' => $option['meta_title']])

    <!-- Main Container -->
    <div class="main-wrapper wrap-category">

        <!-- Container -->
        <div class="container content-with-sidebar">

            <div class="row">

                <div class="col-sm-8 col-md-9 columns">
                    <div class="white-space space-medium"></div>

                    <!-- /Blog Content -->
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- blog post -->
                            <div class="blog-post post-format-image">
                                <div class="blog-post-content">
                                    <div class="post-info">
                                        <h3 class="post-title">
                                            <a href="{{ $article->url }}"> {{ $article->name }} </a>
                                        </h3>
                                        <ul class="list-inline post-meta-info">
                                            <li class="meta-date">{{ $article->created_at }}</li>
                                        </ul>
                                    </div>
                                    <div class="post-summary"><b>{{ nl2br(e($article->description)) }}</b></div>

                                    <div class="post-content">
                                        <p>{!! $article->content !!}</p>
                                    </div>
                                </div>

                            </div>
                            <!-- /blog post -->

                        </div>
                    </div>
                    <!-- /Blog Content -->

                    <div class="related-post-title">
                        <h3>Bài viết liên quan</h3>
                    </div>

                    <div class="row">
                        @if(!empty($relatedArticles))
                            @foreach($relatedArticles as $itemRelated)
                                <div class="related-post-item col-md-4 col-sm-6">
                                    <div class="entry-featured">
                                        <a href="#">
                                            <img width="100%" src="{{ $itemRelated->image }}" alt="blog">
                                        </a>
                                    </div>
                                    <h4 class="post-title">
                                        <a href="{{ $itemRelated->url }}">{{ $itemRelated->name }}</a>
                                    </h4>
                                    <div class="related-meta">
                                        <span class="meta-date">
                                                {{ $itemRelated->created_at }}
                                        </span>
                                    </div>
                                    <div class="related-summary">
                                        {{ $itemRelated->description }}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="white-space space-medium"></div>
                </div>


                @include('partials._sidebar')

            </div>
        </div>
        <!-- /Container -->

    </div>
    <!-- /Main Container -->
@endsection