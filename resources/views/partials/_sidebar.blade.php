<!-- Sidebar -->
<div class="col-sm-4 col-md-4 columns sidebar sidebar-right">
    <div class="white-space space-big"></div>

    <div class="sidebar-content">

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

    </div>

    <div class="white-space space-big"></div>
</div>
<!-- /Sidebar -->