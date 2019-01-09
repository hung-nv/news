@if(isset($newArticles) && $newArticles)
    <div class="box-doc-1">
        <h2>Bài viết mới nhất</h2>
        <ul>
            @foreach($newArticles as $itemNewArticle)
                <li>
                    <a href="{{ $itemNewArticle->url }}">
                        {{ $itemNewArticle->name }}
                        <span class="time">({{ $itemNewArticle->created_at }})</span>
                    </a>
                    <div class="clear"></div>
                </li>
            @endforeach
        </ul>
    </div>
@endif

@if(!empty($topInWeek))
    <div class="sao">
        <h2>Bài viết nổi bật trong tuần</h2>
        <div class="sao_tren">
            <a href="{{ $topInWeek[0]['url'] }}">
                <img src="/img/300{{ $topInWeek[0]['image'] }}"/>
            </a>
            <p><a href="{{ $topInWeek[0]['url'] }}">{{ $topInWeek[0]['name'] }}</a></p>
        </div>
        <ul>
            @foreach($topInWeek as $itemTop)
                @if($loop->index > 0)
                    <li @if($loop->index % 2 == 0) class="sao_right" @else class="sao_left clear" @endif>
                        <a class="imgsao-duoi" href="{{ $itemTop->url }}">
                            <img src="/img/143_110{{ $itemTop->image }}"/>
                        </a>
                        <p><a href="{{ $itemTop->url }}">{{ $itemTop->name }}</a></p>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endif