<header class="header clearfix">
    <div class="container">
        <div class="header-logo">
            <div class="logo">
                <a href="/" title="Trang chủ">
                    <img src="{{ asset('/images/logo.png') }}" height="100%" />
                </a>
            </div>
            <div class="topnav"></div>
            <a class="toggle menu"></a>
            <a class="toggle search"></a>
        </div>
    </div>
</header>
<nav class="mainNav">
    <div class="container">
        <ul class="navbar clearfix">
            <li class="item all"><a href="/"> <img src="{{ asset('images/menu.png') }}"/> <span>Tất cả danh mục</span>
                </a>
                <div class="box-tabs">
                    @if(!empty($mainMenu))
                        <ul class="navigation">
                            @foreach($mainMenu as $itemMainMenu)
                                <li class="item">
                                    <a href="{{ $itemMainMenu['url'] }}"><span>{{ $itemMainMenu['name'] }}</span> </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</nav>