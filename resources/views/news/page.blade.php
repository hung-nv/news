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
    <div class="theme-page">
        <div class="row gray full-width page-header vertical-align-table">
            <div class="row">
                <div class="page-header-left">
                    <h1>{{ $article->name }}</h1>
                </div>
                <div class="page-header-right">
                    <div class="bread-crumb-container">
                        <ul class="bread-crumb">
                            <li>
                                <a title="Trang chủ" href="/">
                                    Trang chủ
                                </a>
                            </li>
                            <li class="separator">
                                /
                            </li>
                            <li>
                                {{ $article->name }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <div class="row page-margin-top padding-bottom-66">
                {!! $article->content !!}
            </div>
        </div>
    </div>
@endsection
