@section('title')
    {{ !empty($option['meta_title']) ? $option['meta_title'] : '' }}
@endsection

@section('description')
    {{ !empty($option['meta_description']) ? $option['meta_description'] : '' }}
@endsection

@extends('mobile.layouts.appMobile')

@section('content')
    @if(!empty($widgetCategory))
        @foreach($widgetCategory as $itemWidget)
            <div class="home-rows clear">
                <div class="home-head">
                    <a href="{{ $itemWidget['category']->url }}">{{ $itemWidget['category']->name }} » </a>
                    @if (count($itemWidget['category']->childrens) > 0)
                        <ul>
                            @foreach ($itemWidget['category']->childrens as $childCategory)
                                <li><a href="{{ $childCategory->url }}">{{ $childCategory->name }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="clear"></div>
                </div>

                <div class="cate-left">
                    <div class="cate-slide-content">
                        <a href="{{ $itemWidget['articles'][0]->url }}" class="image-link">
                            <img src="{{ $itemWidget['articles'][0]->image }}">
                        </a>

                        <div class="meta">
                            <span>{{ $itemWidget['articles'][0]->created_at }}</span>
                        </div>

                        <h2>
                            <a href="{{ $itemWidget['articles'][0]->url }}">{{ $itemWidget['articles'][0]->name }}</a>
                        </h2>

                        <div class="excerpt">
                            <p>{{ $itemWidget['articles'][0]->description }}</p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="clear"></div>
                <ul class="cate-right">
                    @foreach ($itemWidget['articles'] as $article)
                        @if($loop->index > 0)
                            <li>
                                <a class="cate-right-img" href="{{ $article->url }}">
                                    <img src="/img/60{{ $article->image }}">
                                </a>
                                <div class="cate-right-more">
                                    <span class="datetime">{{ $article->created_at }}</span>
                                    <a href="{{ $article->url }}">
                                        {{ $article->name }}
                                    </a>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>


            @if ($loop->first && !empty($ads300))
                <div class="ads" style="margin-left: -25px !important; margin-right: -25px !important;">
                    <!-- ADS 300 -->
                </div>
            @endif
        @endforeach
    @endif
    <div class="clear"></div>
@endsection