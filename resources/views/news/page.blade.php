@section('title')
    {{ !empty($page->meta_title) ? $page->meta_title : $page->name }}
@endsection

@section('description')
    {{ !empty($pagee->meta_description) ? $page->meta_description : $page->description }}
@endsection

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="column1">
            <div class="entry-content">
                <h1>{{ $page->name }}</h1>
                <p class="datetime">
                    <img src="/img/10/images/icons8-time-50.png" />
                    <span class="sptime">{{ $page->created_at }}</span>
                </p>
                <div class="entry-post">
                    {!! $page->content !!}
                </div>

                @if (isset($newArticles) && $newArticles)
                    <div class="other">
                        <h2>Tin mới nhất</h2>
                        <div class="other-tren">
                            <div class="other-tren-left">
                                @for($i = 0; $i < 2; $i++)
                                    @if (isset( $newArticles[ $i ] ) && $newArticles[ $i ])
                                        <div class="other-row">
                                            <a href="{{ $newArticles[$i]->url }}" class="other-row-img">
                                                <img src="/img/154_102{{ $newArticles[$i]->image }}">
                                            </a>
                                            <h4>
                                                <a href="{{ $newArticles[$i]->url }}">
                                                    {{ $newArticles[$i]->name }}
                                                </a>
                                            </h4>
                                            <p>{{ $newArticles[$i]->description }}</p>
                                            <div class="clear"></div>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                            <div class="other-tren-right">
                                <img src="{{ asset('images/banner_5.jpg') }}" />
                            </div>
                            <div class="clear"></div>
                        </div>

                        @if (count( $newArticles ) > 2)
                            <ul>
                                @for ($i = 2; $i < 11; $i ++)
                                    @if (isset( $newArticles[ $i ] ) && $newArticles[ $i ])
                                        <li>
                                            <a href="{{ $newArticles[$i]->url }}">
                                                {{ $newArticles[$i]->name }}
                                            </a>
                                            <span>&nbsp;({{ $newArticles[$i]->created_at }})</span>
                                        </li>
                                    @endif
                                @endfor
                            </ul>
                        @endif
                    </div>
                @endif
            </div>
        </div>
        <div class="column2">
            @include('partials._sidebar')
        </div>
    </div>

    @include('partials._horizontalArticles')
@endsection