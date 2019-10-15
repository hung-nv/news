@section('title')
    {{ isset($category->meta_title) ? $category->meta_title : $category->name }}
@endsection

@section('description')
    {{ isset($category->meta_description) ? $category->meta_description : $category->description }}
@endsection

@extends('layouts.app')

@section('content')
    @include('partials._breadcrumbs', ['name' => $category->name])

    <!-- Main Container -->
    <div class="main-wrapper wrap-category">

        <!-- Container -->
        <div class="container content-with-sidebar">

            <div class="row">

                <div class="col-sm-8 col-md-8 columns">
                    <div class="white-space space-big"></div>

                    <!-- /Blog Content -->
                    <div class="row">
                        <div class="col-sm-12">

                        @if(isset($articles) && $articles)
                            @foreach ($articles as $i)
                                <!-- blog post -->
                                    <div class="blog-post post-format-image">

                                        <div class="blog-post-content">
                                            <div class="post-media">
                                                <img src="{{ $i->image }}" width="100%" height="auto"
                                                     alt="{{ $i->name }}">
                                            </div>
                                            <div class="post-info">
                                                <h3 class="post-title">
                                                    <a href="{{ route('article.details', ['slug' => $i->slug]) }}">
                                                        {{ $i->name }}
                                                    </a>
                                                </h3>
                                                <ul class="list-inline post-meta-info">
                                                    <li class="meta-date">{{ $i->created_at }}</li>
                                                </ul>
                                            </div>
                                            <div class="post-content">
                                                <p>{{ nl2br(e($i->description)) }}</p>
                                            </div>
                                            <a class="btn btn-primary btn-sm" href="{{ route('article.details', ['slug' => $i->slug]) }}">
                                                Xem thêm...
                                                <i class="fa iconright fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <!-- /blog post -->
                            @endforeach
                        @endif

                        </div>
                    </div>
                    <!-- /Blog Content -->

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                {{ $articles->links() }}
                            </div>
                        </div>
                    </div>
                    <!-- /Pagination -->

                    <div class="white-space space-big"></div>
                </div>


                @include('partials._sidebar')

            </div>

        </div>
        <!-- /Container -->

    </div>
    <!-- /Main Container -->
@endsection