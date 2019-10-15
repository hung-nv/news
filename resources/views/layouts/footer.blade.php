<!-- Footer Container -->
<div class="footer-wrapper">

    <!-- Footer Bottom Container -->
    <div class="footer-bottom">

        <!-- Container -->
        <div class="container">

            <div class="row">
                @if(!empty($footerMenu))
                    <div class="col-md-12 col-sm-12 columns">
                        <div class="menu-footer">
                            <ul class="list-inline">
                                <li><a href="/">Trang chủ</a></li>
                                @foreach($footerMenu as $itemFooterMenu)
                                    <li><a href="{{ $itemFooterMenu['url'] }}">{{ $itemFooterMenu['name'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <div class="col-md-12 col-sm-12 columns">
                    @if(!empty($option['company_name']))
                        <p class="company-name text-center">{{ $option['company_name'] }}</p>
                    @endif
                    @if(!empty($option['company_description']))
                        <p class="company-description text-center">{{ $option['company_description'] }}</p>
                    @endif
                    @if(!empty($option['main_office']))
                        <p class="text-center">
                            @if(!empty($option['main_office']))
                                <i class="fa fa-map-marker"></i> {{ $option['main_office'] }}<br/>
                            @endif
                            @if(!empty($option['hotline']))
                                <i class="fa fa-phone"></i> {{ $option['hotline'] }} <br/>
                            @endif
                            @if(!empty($option['email']))
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:{{ $option['email'] }}">{{ $option['email'] }}</a>
                            @endif
                        </p>
                    @endif
                </div>
                <div class="col-md-12 col-sm-12 columns">
                    <div class="copyright">
                        <p>Copyright © 2019 - hungnv234@gmail.com</p>
                    </div>
                </div>
                <!-- /Copyright -->
            </div>

        </div>
        <!-- /Container -->

    </div>
    <!-- /Footer Bottom Container -->

</div>
<!-- /Footer Container -->