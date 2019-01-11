<div id="menutop">
    <div class="container">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <div class="menu-inner">
                <ul>
                    <li class="home @if(empty($slug)) active @endif"><a href="/">Trang chủ</a></li>
                    @if(!empty($mainMenu))
                        @foreach($mainMenu as $itemMainMenu)
                            <li @if(isset($slug) && $slug == $itemMainMenu['slug'])class="active"@endif>
                                <a href="{{ $itemMainMenu['url'] }}">
                                    {{ $itemMainMenu['name'] }}
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>

            <div class="search-inner">
                <form action="{{ route('article.search') }}" method="get">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Tìm kiếm..." name='txtSearch'
                               value="{{ old('txtSearch') }}"
                               required/>
                        <span class="input-group-btn">
                        <button class="btn btn-warning btn-flat" type="submit">Go!</button>
                    </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="logo">
    <div class="logo-left col-md-3">
        <a href="/">
            @if(!empty($option['company_logo']))
                <img src="{{ $option['company_logo'] }}"/>
            @endif
        </a>
    </div>

    <div class="col-md-9 logo-right">
        <div class="ads">
            @if(!empty($advertising[config('const.advertising.728_90')]))
                {!! $advertising[config('const.advertising.728_90')] !!}
            @else
                <img src="{{ asset('images/728x90.jpeg') }}"/>
            @endif
        </div>
    </div>
    <div class="clear"></div>
</div>