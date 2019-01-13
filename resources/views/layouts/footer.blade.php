<div id="footer">
    <div class="container">
        <div class="row">
            <div class="menu-bottom">
                <div class="company">
                    <h6>Về chúng tôi</h6>
                    @if(!empty($option['company_description']))
                        <p>{{ $option['company_description'] }}</p>
                    @endif
                    @if(!empty($option['email']))
                        <p>Liên hệ chúng tôi: {{ $option['email'] }}</p>
                    @endif
                </div>

                @if(!empty($footerMenu))
                    @foreach($footerMenu as $itemFooterMenu)
                        <ul>
                            <li><h6><a href="{{ $itemFooterMenu['url'] }}">{{ $itemFooterMenu['name'] }}</a></h6></li>
                            @if(!empty($itemFooterMenu['child']))
                                @foreach($itemFooterMenu['child'] as $itemChild)
                                    <li><h6><a href="{{ $itemChild['url'] }}">{{ $itemChild['name'] }}</a></h6></li>
                                @endforeach
                            @endif
                        </ul>
                    @endforeach
                @endif
                <div class="clear"></div>
            </div>
            <div class="copyright">
                <span class="sp-copyright">
                    @Copyright by GocTeen
                </span>
            </div>
        </div>
    </div>
</div>