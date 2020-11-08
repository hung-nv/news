<div class="header-container sticky">
    <!--<div class="header-container sticky">-->
    <div class="header clearfix">
        <div class="menu-container first-menu clearfix">
            <nav>
                @if(!empty($mainMenu))
                    <ul class="sf-menu">
                        <li><a href="/" title="Trang chủ">TRANG CHỦ</a></li>
                        @foreach($mainMenu as $itemMainMenu)
                            <li>
                                <a href="{{ $itemMainMenu['url'] }}" title="{{ $itemMainMenu['name'] }}">
                                    {{ mb_strtoupper($itemMainMenu['name']) }}
                                </a>
                                @if(!empty($itemMainMenu['child']))
                                    <ul>
                                        @foreach($itemMainMenu['child'] as $itemChild)
                                            <li>
                                                <a href="{{ $itemChild['url'] }}" title="{{ $itemChild['name'] }}">
                                                    {{ $itemChild['name'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </nav>
            <div class="mobile-menu-container">
                <nav>
                    @if(!empty($mobileMenu))
                        <ul class="mobile-menu collapsible-mobile-submenus">
                            <li><a class="template-arrow-vertical-3" href="#">&nbsp;</a></li>
                            <li><a href="/" title="Trang chủ">TRANG CHỦ</a></li>
                            @foreach($mobileMenu as $itemMobileMenu)
                                <li>
                                    <a href="{{ $itemMobileMenu['url'] }}" title="{{ $itemMobileMenu['name'] }}">
                                        {{ mb_strtoupper($itemMobileMenu['name']) }}
                                    </a>
                                    @if(!empty($itemMobileMenu['child']))
                                        <a href="#" class="template-arrow-menu"></a>
                                        <ul>
                                            @foreach($itemMobileMenu['child'] as $itemMobileChild)
                                                <li>
                                                    <a href="{{ $itemMobileChild['url'] }}"
                                                       title="{{ $itemMobileChild['name'] }}">
                                                        {{ $itemMobileChild['name'] }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </nav>
            </div>
        </div>
        <div class="logo">
            <h1>
                <a href="?page=home" title="iClean">
                    <img src="{{ asset('images/logo.png') }}" srcset="images/logo_retina.png 2x" class="primary-logo"
                         alt="logo">
                    <img src="{{ asset('images/logo_transparent.png') }}" srcset="images/logo_transparent_retina.png 2x"
                         class="secondary-logo" alt="logo">
                    <span class="logo-text">iClean</span>
                </a>
            </h1>
            <div class="logo-clone">
                <h1>
                    <a href="?page=home" title="iClean">
                        <img src="{{ asset('images/logo.png') }}" srcset="images/logo_retina.png 2x"
                             class="primary-logo"
                             alt="logo">
                        <img src="{{ asset('images/logo_transparent.png') }}"
                             srcset="images/logo_transparent_retina.png 2x"
                             class="secondary-logo" alt="logo">
                        <span class="logo-text">iClean</span>
                    </a>
                </h1>
            </div>
        </div>
        <a href="#" class="mobile-menu-switch">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </a>
        <div class="menu-container clearfix second-menu">
            <nav>
                @if(!empty($sidebarMenu))
                    <ul class="sf-menu">
                        @foreach($sidebarMenu as $itemRightMenu)
                            <li>
                                <a href="{{ $itemRightMenu['url'] }}" title="{{ $itemRightMenu['name'] }}">
                                    {{ mb_strtoupper($itemRightMenu['name']) }}
                                </a>
                                @if(!empty($itemRightMenu['child']))
                                    <ul>
                                        @foreach($itemRightMenu['child'] as $itemRightChild)
                                            <li>
                                                <a href="{{ $itemRightChild['url'] }}"
                                                   title="{{ $itemRightChild['name'] }}">
                                                    {{ $itemRightChild['name'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </nav>
        </div>
        <div class="header-icons-container hide-on-mobiles">
            <a class="template-search" href="#" title="Search"></a>
            <form class="search">
                <input type="text" name="s" placeholder="Tìm kiếm..." class="search-input hint">
                <fieldset class="search-submit-container">
                    <span class="template-search"></span>
                    <input type="submit" class="search-submit" value="">
                </fieldset>
                <input type="hidden" name="page" value="search">
            </form>
        </div>
    </div>
</div><!-- Slider Revolution -->
