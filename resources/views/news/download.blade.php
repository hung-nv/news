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
<div class="section posturls box-sidebar" data-itemid="{{ $article->id }}" data-itemtype="post">
    <div class="container clearfix">
        <div class="maincontent">
            <h1 class="post-title">
                <a href="{{ $article->download }}">
                    {{ $article->name }}
                </a>
            </h1>

            <div class="message down-title">Bạn có thể tải về tập tin thích hợp cho bạn tại các liên kết dưới dây.</div>
            <ul class="post-links">
                @foreach($article->articleDownloads as $download)
                    <li>
                        <a class="btn btn-link clearfix btn-track file-doc" title="{{ $download->label }}" href="{{ $download->url }}" data-download-url="{{ $download->url }}">
                            <span class="link-title">{{ $download->label }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="overview textview">
                {!! $article->description !!}
            </div>


            <div class="relatedposts clearfix">
                <div class="title">Tham khảo thêm</div>
                <ul class="list-items">
                    @foreach($relatedArticles as $related)
                        <li>
                            <a title="{{ $related->name }}" href="{{ $related->download }}">
                                <span class="name">{{ $related->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>

        </div>
        <div class="sidebar" style="height: 935px;">
            <-- qc -->
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/download.js') }}"></script>
@endsection