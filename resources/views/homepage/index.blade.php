@section('title')
    {{ !empty($option['meta_title']) ? $option['meta_title'] : '' }}
@endsection

@section('description')
    {{ !empty($option['meta_description']) ? $option['meta_description'] : '' }}
@endsection

@extends('layouts.app')

@section('content')
    <div class="row">
        @include('homepage._topArticles')

        @include('partials._horizontalArticles')

        <div class="column1">
            @if (!empty($widgetCategory))
                @foreach($widgetCategory as $itemWidget)
                    <h1 class="cate-title"><a href="/">{{ $itemWidget['category']->name }}</a></h1>
                    <div class="clear"></div>
                    @if(isset($itemWidget['articles']) && $itemWidget['articles'])
                        @foreach ($itemWidget['articles'] as $i)
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
                @endforeach
            @endif
        </div>
        <div class="column2">
            @include('partials._sidebar')
        </div>
    </div>
@endsection