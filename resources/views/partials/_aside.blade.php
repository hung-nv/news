<aside id="secondary" class="widget-area col-md-3">
    <div id="nav_menu-3" class="widget-odd widget-first widget-1 widget widget_nav_menu">
        <div class="widget-top"><h3 class="widget-title">Dịch vụ</h3></div>
        <div class="menu-chuyen-muc-dich-vu-container">
            @if(!empty($sidebarMenu))
                <ul id="menu-chuyen-muc-dich-vu" class="menu">
                    @foreach($sidebarMenu as $itemSidebarMenu)
                        <li class="menu-item">
                            <a href="{{ $itemSidebarMenu['url'] }}">{{ $itemSidebarMenu['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    @if(!empty($newArticles))
        <div id="hrm-home_post_cat-widget-5"
             class="widget-even widget-2 widget hrm-home_post_cat-widget">
            <div class="post_block_wrap">
                <div class="td-block-title-wrap">
                    <h4 class="block-title">
                        <a href="#">
                            <span class="td-pulldown-size">Tin tức mới nhất</span>
                        </a>
                    </h4>
                </div>
                <div class="td_block_inner">
                    <div class="hrm-block-row clearfix">
                        @foreach($newArticles as $itemNewArticle)
                            <div class="block-item col-md-3 col-xs-6">
                                <div class="post-block-style clearfix">
                                    <div class="post-thumb">
                                        <a href="{{ $itemNewArticle->url }}" rel="bookmark" title="{{ $itemNewArticle->name }}">
                                            <img src="/img/400_280{{ $itemNewArticle->image}}"
                                                 class="attachment-blog-thumbnail size-blog-thumbnail wp-post-image"
                                                 alt="{{ $itemNewArticle->name }}">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title title-medium">
                                            <a href="{{ $itemNewArticle->url }}" rel="bookmark"
                                               title="{{ $itemNewArticle->name }}">
                                                {{ $itemNewArticle->name }}
                                            </a>
                                        </h4>
                                        <div class="post-meta">
                                        <span class="post-date">
                                            <i class="fa fa-clock-o"></i>{{ $itemNewArticle->created_at }}
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
</aside>