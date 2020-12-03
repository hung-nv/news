@section('title')
    {{ isset($category->meta_title) ? $category->meta_title : $category->name }}
@endsection

@section('description')
    {{ isset($category->meta_description) ? $category->meta_description : $category->description }}
@endsection

@extends('layouts.app')

@section('content')
    <div class="theme-page padding-bottom-100">
        <div class="row gray full-width page-header vertical-align-table">
            <div class="row">
                <div class="page-header-left">
                    <h1>BLOG SMALL IMAGE</h1>
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
                                Blog Small Image
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <div class="row page-margin-top-section">
                <div class="column column-3-4">
                    <ul class="blog small clearfix">
                        <li>
                            <a href="?page=post" title="10 ways to save more &amp; waste less" class="post-image">
                                <div class="post-date" style="display: block;">
                                    <div class="month">AUG</div>
                                    <h4>22</h4>
                                </div>
                                <img src="images/samples/480x320/image_04.jpg" alt="" style="display: block;">
                            </a>
                            <div class="post-content">
                                <h3><a href="?page=post">10 ways to save more &amp; waste less</a></h3>
                                <div class="post-content-details-container clearfix">
                                    <ul class="post-content-details">
                                        <li>August 22, 2017</li>
                                        <li>in <a href="?page=category&amp;cat=commercial_cleaning" title="Commercial Cleaning">Commercial Cleaning</a></li>
                                        <li>by <a href="?page=team_paige_morgan" title="Paige Morgan">Paige Morgan</a></li>
                                    </ul>
                                </div>
                                <p>Donec lacus neque luctus ut tortor eu pharetra congue lectus. Vivamus lobortis diam sed dolor feugiat, ut finibus risus vehicula vitae lectus ac elit auctor consequat. Nullam semper turpis quis turpis ornare sed aliquam risus venenatis... <a href="?page=post" title="Read more">Read more</a></p>
                                <div class="post-content-details-container clearfix">
                                    <ul class="post-content-details">
                                        <li class="template-display"><a href="?page=post">350</a></li>
                                        <li class="template-comment"><a href="?page=post#comments-list" title="5 comments">5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="pagination margin-top-70">
                        <li class="left">
                            <a href="#" title="" class="template-arrow-horizontal-3">&nbsp;</a>
                        </li>
                        <li class="selected">
                            <a href="#" title="">
                                1
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                2
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                3
                            </a>
                        </li>
                        <li class="right">
                            <a href="#" title="" class="template-arrow-horizontal-3">&nbsp;</a>
                        </li>
                    </ul>
                </div>
                <div class="column column-1-4 cm-smart-column" style="height: 2487px;">
                    <div class="cm-smart-column-wrapper" style="position: static; bottom: auto; top: auto; width: auto;">
                        <ul class="categories clearfix">
                            <li><a href="?page=category&amp;cat=house_cleaning" title="House Cleaning">House Cleaning<span>5</span></a></li>
                            <li><a href="?page=category&amp;cat=post_renovation" title="Post Renovation">Post Renovation<span>2</span></a></li>
                            <li><a href="?page=category&amp;cat=green_spaces_maintenance" title="Green Spaces Maintenance">Green Spaces Maintenance<span>2</span></a></li>
                            <li><a href="?page=category&amp;cat=move_in_out_service" title="Move In Out Service">Move In Out Service<span>4</span></a></li>
                            <li><a href="?page=category&amp;cat=commercial_cleaning" title="Commercial Cleaning">Commercial Cleaning<span>1</span></a></li>
                            <li><a href="?page=category&amp;cat=window_cleaning" title="Window Cleaning">Window Cleaning<span>12</span></a></li>
                        </ul>

                        @include('partials._popular_articles')

                        @include('partials._most_tags')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
