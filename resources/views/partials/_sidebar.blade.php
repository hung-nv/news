<!-- Sidebar -->
<div class="col-sm-4 col-md-3 columns sidebar sidebar-right">
    <div class="white-space space-medium"></div>

    <div class="sidebar-content">

        <div class="sidebar-widget">
            <!-- Search Form -->
            <form class="form-inline" role="form">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><span class="fa fa-search"></span></button>
                        </span>
                        <input class="form-control" type="search" placeholder="Tìm kiếm">
                    </div>
                </div>
            </form>
            <!-- Search Form -->
        </div>

        <div class="sidebar-widget">
            <h4 class="title-widget fancy-title"><span>Chuyên mục</span></h4>
            @if(!empty($sidebarMenu))
                <ul class="fa-ul widget-list">
                    @foreach($sidebarMenu as $itemSidebarMenu)
                        <li><a href="{{ $itemSidebarMenu['url'] }}">
                                <span class="fa-li fa  fa-angle-right"></span>{{ $itemSidebarMenu['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div class="sidebar-widget">
            <h4 class="title-widget fancy-title"><span>Bài viết mới nhất</span></h4>
            @if(!empty($newArticles))
                <ul class="widget-list new-articles">
                    @foreach($newArticles as $itemNewArticle)
                        <li>
                            <div class="new-article-thumbnail">
                                <a href="{{ $itemNewArticle->url }}">
                                    <img width="60" height="50" src="{{ $itemNewArticle->image }}" alt="blog">
                                </a>
                            </div>
                            <div class="new-article-content">
                                <time datetime="2015-04-04T15:06:28+00:00">{{ $itemNewArticle->created_at }}</time>
                                <h4>
                                    <a href="{{ $itemNewArticle->url }}">{{ $itemNewArticle->name }}</a>
                                </h4>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

    </div>

    <div class="white-space space-medium"></div>
</div>
<!-- /Sidebar -->