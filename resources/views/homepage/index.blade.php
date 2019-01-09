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
    </div>
@endsection