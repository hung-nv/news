@if(count($newArticles) > 0)
    <div class="main_top">
        <div class="main_top_left">
            <div class="main_top_left_news">
                <a href="{{ $newArticles[0]->url }}">
                    <img src="img/500_430{{ $newArticles[0]->image }}"/>
                </a>
                <h3>
                    <a href="{{ $newArticles[0]->url }}">{{ $newArticles[0]->name }}</a>
                </h3>
            </div>
        </div>
        <div class="main_top_right">
            @foreach($newArticles as $itemNewArticle)
                @if($loop->index > 0)
                    <div class="main_top_right_news">
                        <a href="{{ $itemNewArticle->url }}">
                            <img src="img/245_212{{ $itemNewArticle->image }}"/>
                        </a>
                        <h3>
                            <a href="{{ $itemNewArticle->url }}">{{ $itemNewArticle->name }}</a>
                        </h3>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endif