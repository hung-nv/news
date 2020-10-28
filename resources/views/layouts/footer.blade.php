<div class="row dark-gray footer-row full-width padding-top-61 padding-bottom-36">
    <div class="row row-4-4">
        <div class="column column-1-3">
            @if(!empty($option['company_name']))
                <h6>{{ $option['company_name'] }}</h6>
            @endif
            @if(!empty($option['company_description']))
                <p class="margin-top-23">
                    {!! nl2br(e($option['company_description'])) !!}
                </p>
            @endif
        </div>
        <div class="column column-1-3">
            <h6>OUR SERVICES</h6>
            <ul class="list margin-top-31">
                <li class="template-arrow-horizontal-2"><a href="?page=service_commercial_cleaning"
                                                           title="Commercial Cleaning">Commercial Cleaning</a></li>
                <li class="template-arrow-horizontal-2"><a href="?page=service_house_cleaning"
                                                           title="House Cleaning">House Cleaning</a></li>
                <li class="template-arrow-horizontal-2"><a href="?page=service_move_in_out"
                                                           title="Move In Out Service">Move In Out Service</a></li>
                <li class="template-arrow-horizontal-2"><a href="?page=service_post_renovation"
                                                           title="Post Renovation">Post Renovation</a></li>
                <li class="template-arrow-horizontal-2"><a href="?page=service_window_cleaning"
                                                           title="Window Cleaning">Window Cleaning</a></li>
                <li class="template-arrow-horizontal-2"><a href="?page=service_green_spaces_maintenance"
                                                           title="Green Spaces Maintenance">Green Spaces
                        Maintenance</a></li>
                <li class="template-arrow-horizontal-2">Novum Elementum</li>
                <li class="template-arrow-horizontal-2">Sicilium Polon</li>
            </ul>
        </div>
        <div class="column column-1-3">
            <h6>Thông tin liên hệ</h6>
            <ul class="contact-data margin-top-20">
                @if(!empty($option['main_office']))
                    <li class="template-location">
                        <div class="value">{{ $option['main_office'] }}</div>
                    </li>
                @endif
                @if(!empty($option['hotline']))
                    <li class="template-mobile">
                        <div class="value"><a href="tel:{{ $option['hotline'] }}">{{ $option['hotline'] }}</a></div>
                    </li>
                @endif
                @if(!empty($option['email']))
                    <li class="template-email">
                        <div class="value"><a href="mailto:{{ $option['email'] }}">{{ $option['email'] }}</a></div>
                    </li>
                @endif
                <li class="template-clock">
                    <div class="value">Tất cả các ngày trong tuần</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row align-center padding-top-30">
            <span class="copyright">© Copyright 2020 <a
                    href="#"
                    title="" target="_blank">Cleanmate</a></span>
    </div>
</div>
