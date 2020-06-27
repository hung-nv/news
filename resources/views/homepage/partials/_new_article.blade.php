@if(!empty($newArticles))
<div class="tin-tuc-moi container">
    <h2 class="titledv"><span>TIN TỨC MỚI NHẤT</span></h2>
    <div class="noi-dung">
        @foreach($newArticles as $itemNewArticle)
            <div class="post-thumb col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="post-thumb1">
                    <a class="left_box" href="{{ $itemNewArticle->url }}" title="{{ $itemNewArticle->name }}">
                        <img src="/img/400_280{{ $itemNewArticle->image }}" class="attachment-blog-thumbnail size-blog-thumbnail wp-post-image" alt="{{ $itemNewArticle->name }}" />
                    </a>
                    <div class="right_box">
                        <div class="title_posts">
                            <h2>
                                <a href="{{ $itemNewArticle->url }}" title="{{ $itemNewArticle->name }}">
                                    {{ str_limit($itemNewArticle->name, $limit = 60, $end = '...') }}
                                </a>
                            </h2>
                        </div>
                        <div class="descriptions">
                            <span>{{ $itemNewArticle->created_at }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endif