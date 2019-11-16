@section('title')
    {{ !empty($option['meta_title']) ? $option['meta_title'] : '' }}
@endsection

@section('description'){{ !empty($option['meta_description']) ? $option['meta_description'] : '' }}@endsection

@extends('layouts.app')

@section('content')
    @include('homepage.slider')
    <!-- Main Container -->
    <div class="main-wrapper">

        @include('homepage._features')

        @include('homepage._special')

        @include('homepage._why_us')

        @include('homepage._services')

        @include('homepage._partners')

    </div>
    <!-- /Main Container -->
@endsection