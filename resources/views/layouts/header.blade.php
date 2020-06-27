<div class="menu-responsive-overlay"></div>
<header id="masthead" class="site-header">
    <div class="topbar hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6 info">
                    <div class="info_head">
                        TƯ VẤN MIỄN PHÍ
                        @if(!empty($option['hotline']))
                            <i class="fa fa-phone"></i>
                            <a class="value" href="tel:{{ $option['hotline'] }}" rel="nofollow">{{ $option['hotline'] }}</a>
                        @endif
                        @if(!empty($option['email']))
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:{{ $option['email'] }}" rel="nofollow"> {{ $option['email'] }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-main">
        <div class="container">
            <div class="row">
                <div class="menu-icon hidden-lg hidden-md">
                    <div class="menu-open">
                        <div class="pull-right">
                            <div class="icon-click">
                                <i class="fa fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-btns-wrap">
                    <a id="header-search-button-mb" href="#" role="button"><i class="fa fa-search"></i>
                    </a>
                </div>
                <div class="site-branding">
                    <a class="logo-link" href="/" rel="home" title="{{ !empty($option['site_heading']) ? $option['site_heading'] : '' }}">
                        <h1 class="entry-title ">
                            <img class="img-responsive" src="https://eduwork.edu.vn/wp-content/uploads/2018/09/Logo-cho-web.png" alt="{{ !empty($option['site_heading']) ? $option['site_heading'] : '' }}">
                        </h1>
                    </a>
                </div>
                <div class="search-menu">
                    <form role="search" method="get" class="search-form" action="https://eduwork.edu.vn/">
                        <label class="ip-form">
                            <span class="screen-reader-text">Search</span>
                            <input type="search" class="search-field"
                                   placeholder="Bạn cần tìm gì?"
                                   value="" name="s"
                                   title="Search for:" />
                        </label>
                        <input type="submit" class="search-submit" value="Search" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-responsive hidden-lg">
        <div class="menu-close">
            <i class="fa fa-bars"></i>
            <span>Menu</span>
            <span class="icon-close"></span>
        </div>
        <div class="menu-main-menu-container">
            <ul id="menu-main-menu" class="menu">
                <li><a href="/">Trang chủ</a></li>
                @if(!empty($mainMenu))
                    @foreach($mainMenu as $itemMainMenu)
                        <li @if(!empty($itemMainMenu['child'])) class="menu-item-has-children" @endif>
                            <a href="{{ $itemMainMenu['url'] }}" aria-current="page">{{ $itemMainMenu['name'] }}</a>
                            @if(!empty($itemMainMenu['child']))
                                <ul class="sub-menu">
                                    @foreach($itemMainMenu['child'] as $itemChild)
                                        <li><a href="{{ $itemChild['url'] }}">{{ $itemChild['name'] }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
    <div class="hrm-search-background">
        <div id="hrm-search-wrap-mob">
            <div class="hrm-search-close-wp">
                <span class="hrm-search-close"></span>
            </div>
            <div class="hrm-drop-down-search" aria-labelledby="hrm-header-search-button">
                <form role="search" method="get" class="search-form" action="">
                    <label class="ip-form">
                        <span class="screen-reader-text">Search</span>
                        <input type="search" class="search-field"
                               placeholder="Bạn cần tìm gì?"
                               value="" name="s"
                               title="Search for:" />
                    </label>
                    <input type="submit" class="search-submit" value="Search" />
                </form>
                <div id="hrm-aj-search-mob"></div>
            </div>
        </div>
    </div>
    <nav id="site-navigation" class="main-navigation">
        <div class="container">
            <div class="site-branding">
                <a class="logo-link" href="/" rel="home" title="{{ !empty($option['site_heading']) ? $option['site_heading'] : '' }}">
                    <h1 class="entry-title ">
                        <img class="img-responsive" src="https://eduwork.edu.vn/wp-content/uploads/2018/09/Logo-cho-web.png" alt="{{ !empty($option['site_heading']) ? $option['site_heading'] : '' }}">
                        <strong>{{ !empty($option['site_heading']) ? $option['site_heading'] : '' }}</strong>
                    </h1>
                </a>
            </div>
            <div class="row">
                <div class="main-navigation-inner clearfix hidden-sm hidden-xs">
                    <div class="menu-main-menu-container">
                        <ul id="primary-menu" class="menu">
                            <li><a href="/">Trang chủ</a></li>
                            @if(!empty($mainMenu))
                                @foreach($mainMenu as $itemMainMenu)
                                    <li @if(!empty($itemMainMenu['child'])) class="menu-item-has-children" @endif>
                                        <a href="{{ $itemMainMenu['url'] }}" aria-current="page">{{ $itemMainMenu['name'] }}</a>
                                        @if(!empty($itemMainMenu['child']))
                                            <ul class="sub-menu">
                                                @foreach($itemMainMenu['child'] as $itemChild)
                                                    <li><a href="{{ $itemChild['url'] }}">{{ $itemChild['name'] }}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav><!-- #site-navigation -->
</header>