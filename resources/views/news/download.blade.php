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
                <li>
                    <a class="btn btn-link clearfix btn-track file-doc" title="Tải file định dạng .DOC" href="/url?postid=136610&amp;urlid=124741" data-downurl="http://s1.vndoc.com/data/file/2020/05/11/ngu-van-8-bai-viet-so-7-van-nghi-luan-hay-noi-khong-voi-cac-te-nan.doc">
                        <span class="link-title">Tải file định dạng .DOC</span>
                        <span class="link-size">213,5 KB</span>
                        <span class="link-date">11/05/2020 5:10:45 CH</span>
                    </a>
                </li>
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
                                <span class="icon">
                                    <img class="lazy loaded" src="{{ asset('/images/doc.png') }}" alt="{{ $related->name }}" data-was-processed="true">
                                </span>
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