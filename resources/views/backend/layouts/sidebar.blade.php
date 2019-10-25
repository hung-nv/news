<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>

            <li class="heading">
                <h3 class="uppercase">Features</h3>
            </li>

            @if($sidebar)
                @foreach($sidebar as $iMenu)
                    <li class="nav-item @if(in_array($iMenu->route, explode('.', $routeName)) || $routeGroup == $iMenu->group) active open @endif">
                        <a class="nav-link nav-toggle"
                           @if(isset($iMenu->child) && $iMenu->child)
                           href="javascript:;"
                           @elseif(Route::has($iMenu->route))
                           href="{{ route($iMenu->route) }}"
                                @endif>
                            <i class="{{ $iMenu->icon }}"></i>
                            <span class="title">{{ $iMenu->label }}</span>
                            @if(in_array($iMenu->route, explode('.', $routeName)) || $routeGroup == $iMenu->group)
                                <span class="selected"></span>
                            @endif
                            <span class="arrow @if(in_array($iMenu->route, explode('.', $routeName)) || $routeGroup == $iMenu->group) open @endif"></span>
                        </a>

                        @if(isset($iMenu->child) && $iMenu->child)
                            <ul class="sub-menu">
                                @foreach($iMenu->child as $iSubMenu)
                                    <li class="nav-item @if($iSubMenu->route == $routeName) active open @endif">
                                        <a href="@if(Route::has($iSubMenu->route)) {{ route($iSubMenu->route) }} @endif"
                                           class="nav-link">
                                            @if($iSubMenu->icon)
                                                <i class="{{ $iSubMenu->icon }}"></i>
                                            @endif
                                            <span class="title">{{ $iSubMenu->label }}</span>
                                            @if($iSubMenu->route == $routeName)
                                                <span class="selected"></span>
                                            @endif
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            @endif

        </ul>
    </div>
</div>