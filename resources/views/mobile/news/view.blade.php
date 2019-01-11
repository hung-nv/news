@section('title')
    {{ isset($article->meta_title) ? $article->meta_title : $article->name }}
@endsection

@section('description')
    {{ isset($article->meta_description) ? $article->meta_description : $article->description }}
@endsection

@section('activeText')
    {{ $article->name }}
@endsection

@extends('mobile.layouts.appMobile')

@section('content')
    <div class="entry-content">
        <h1>{{ $article->name }}</h1>
        <p class="datetime">
            <img src="/img/10/images/icons8-time-50.png"/>
            <span class="sptime">{{ $article->created_at }}</span>
        </p>
        @if (!empty($advertising[config('const.advertising.300_250')]))
            <div class="advertising">
                {!! $advertising[config('const.advertising.300_250')] !!}
            </div>
        @endif
        <div class="description">
            {{ $article->description }}
        </div>

        @if (isset($newArticles) && $newArticles->count())
            <ul class="related">
                @foreach ($newArticles as $itemNewArticle)
                    <li><a href="{{ $itemNewArticle->url }}">{{ $itemNewArticle->name }}</a></li>
                @endforeach
            </ul>
        @endif

        @if (!empty($advertising[config('const.advertising.auto_link')]))
            <div class="advertising">
                {!! $advertising[config('const.advertising.auto_link')] !!}
            </div>
        @endif

        <div class="entry-post">
            {!! $article->content !!}
        </div>

        @if (!empty($advertising[config('const.advertising.300_250')]))
            <div class="advertising">
                {!! $advertising[config('const.advertising.300_250')] !!}
            </div>
        @endif

        @if (isset($relatedArticles) && $relatedArticles->count())
            <div class="box-private">
                <div class="cate-head" style="margin-bottom: 0;">
                    <h2>Bài viết liên quan</h2>
                </div>

                <ul class="box-moi">
                    @foreach ($relatedArticles as $i)
                        <li>
                            <a href="{{ $i->url }}">{{ $i->name }}</a>
                        </li>
                    @endforeach
                </ul>

                <div class="clear"></div>
            </div>
        @endif

        @if (!empty($advertising[config('const.advertising.300_250')]))
            <div class="advertising">
                {!! $advertising[config('const.advertising.300_250')] !!}
            </div>
        @endif

        @include('mobile.news._hotArticles')
    </div>
@endsection
