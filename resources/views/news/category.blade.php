@section('title')
    {{ isset($category->meta_title) ? $category->meta_title : $category->name }}
@endsection

@section('description')
    {{ isset($category->meta_description) ? $category->meta_description : $category->description }}
@endsection

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="column1">
            <h1 class="cate-title"><a href="{{ $category->url }}">{{ $category->name }}</a></h1>
            @if (count($category->childrens) > 0)
                <div class="subcate">
                    @foreach ($category->childrens as $subCategory)
                        <a class="active" href="{{ $subCategory->url }}">{{ $subCategory->name }}</a>
                    @endforeach
                </div>
            @endif
            <div class="clear"></div>
            @if(isset($articles) && $articles)
                @foreach ($articles as $i)
                    <div class="@if($loop->index % 2 == 0)cate-left clear @else cate-right @endif">
                        <div class="cate-slide-content">
                            <a href="{{ route('article.details', ['slug' => $i->slug]) }}" class="image-link">
                                <img src="/img/330_210{{ $i->image }}">
                            </a>

                            <div class="meta">
                                <span>{{ $i->created_at }}</span>
                            </div>

                            <h2><a href="{{ route('article.details', ['slug' => $i->slug]) }}">{{ $i->name }}</a></h2>

                            <div class="excerpt">
                                <p>{{ $i->description }}</p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                @endforeach
            @endif

            <div class="clear"></div>
            <div id="ptr">
                {{ $articles->links() }}
                <div class="clear"></div>
            </div>
        </div>
        <div class="column2">
            @include('partials._sidebar')
        </div>
    </div>

    @include('partials._horizontalArticles')
@endsection