@if(!empty($option['services_heading']) && !empty($option['services_description']))
    <div class="row margin-top-89">
        <div class="row">
            <h2 class="box-header">{{ $option['services_heading'] }}</h2>
            <p class="description align-center">
                {{ $option['services_description'] }}
            </p>
            <div class="carousel-container margin-top-65 clearfix">
                <ul class="services-list services-icons horizontal-carousel gray clearfix">
                    @if(!empty($option['services_title_1']) && !empty($option['services_icon_1']) && !empty($option['services_description_1']))
                        <li class="column column-1-3">
                            <a href="#" title="{{ $option['services_title_1'] }}">
                                <span class="service-icon {{ $option['services_icon_1'] }}"></span>
                            </a>
                            <h4><a href="#"
                                   title="{{ $option['services_title_1'] }}">{{ $option['services_title_1'] }}</a>
                            </h4>
                            <p>{{ $option['services_description_1'] }}</p>
                            <div class="align-center margin-top-42 padding-bottom-16">
                                <a class="more" href="#" title="Đọc thêm về {{ $option['services_title_1'] }}">
                                    Đọc thêm
                                </a>
                            </div>
                        </li>
                    @endif
                    @if(!empty($option['services_title_2']) && !empty($option['services_icon_2']) && !empty($option['services_description_2']))
                        <li class="column column-1-3">
                            <a href="#" title="{{ $option['services_title_2'] }}">
                                <span class="service-icon {{ $option['services_icon_2'] }}"></span>
                            </a>
                            <h4>
                                <a href="?page=service_post_renovation" title="{{ $option['services_title_2'] }}">
                                    {{ $option['services_title_2'] }}
                                </a>
                            </h4>
                            <p>{{ $option['services_description_2'] }}</p>
                            <div class="align-center margin-top-42 padding-bottom-16">
                                <a class="more" href="#" title="Đọc thêm về {{ $option['services_title_2'] }}">
                                    Đọc thêm
                                </a>
                            </div>
                        </li>
                    @endif
                    @if(!empty($option['services_title_3']) && !empty($option['services_icon_3']) && !empty($option['services_description_3']))
                        <li class="column column-1-3">
                            <a href="#" title="{{ $option['services_title_3'] }}">
                                <span class="service-icon {{ $option['services_icon_3'] }}"></span>
                            </a>
                            <h4>
                                <a href="?page=service_post_renovation" title="{{ $option['services_title_3'] }}">
                                    {{ $option['services_title_3'] }}
                                </a>
                            </h4>
                            <p>{{ $option['services_description_3'] }}</p>
                            <div class="align-center margin-top-42 padding-bottom-16">
                                <a class="more" href="#" title="Đọc thêm về {{ $option['services_title_3'] }}">
                                    Đọc thêm
                                </a>
                            </div>
                        </li>
                    @endif

                    @if(!empty($option['services_title_4']) && !empty($option['services_icon_4']) && !empty($option['services_description_4']))
                        <li class="column column-1-3">
                            <a href="#" title="{{ $option['services_title_4'] }}">
                                <span class="service-icon {{ $option['services_icon_4'] }}"></span>
                            </a>
                            <h4>
                                <a href="?page=service_post_renovation" title="{{ $option['services_title_4'] }}">
                                    {{ $option['services_title_4'] }}
                                </a>
                            </h4>
                            <p>{{ $option['services_description_4'] }}</p>
                            <div class="align-center margin-top-42 padding-bottom-16">
                                <a class="more" href="#" title="Đọc thêm về {{ $option['services_title_4'] }}">
                                    Đọc thêm
                                </a>
                            </div>
                        </li>
                    @endif

                    @if(!empty($option['services_title_5']) && !empty($option['services_icon_5']) && !empty($option['services_description_5']))
                        <li class="column column-1-3">
                            <a href="#" title="{{ $option['services_title_5'] }}">
                                <span class="service-icon {{ $option['services_icon_5'] }}"></span>
                            </a>
                            <h4>
                                <a href="?page=service_post_renovation" title="{{ $option['services_title_5'] }}">
                                    {{ $option['services_title_5'] }}
                                </a>
                            </h4>
                            <p>{{ $option['services_description_5'] }}</p>
                            <div class="align-center margin-top-42 padding-bottom-16">
                                <a class="more" href="#" title="Đọc thêm về {{ $option['services_title_5'] }}">
                                    Đọc thêm
                                </a>
                            </div>
                        </li>
                    @endif

                    @if(!empty($option['services_title_6']) && !empty($option['services_icon_6']) && !empty($option['services_description_6']))
                        <li class="column column-1-3">
                            <a href="#" title="{{ $option['services_title_6'] }}">
                                <span class="service-icon {{ $option['services_icon_6'] }}"></span>
                            </a>
                            <h4>
                                <a href="?page=service_post_renovation" title="{{ $option['services_title_6'] }}">
                                    {{ $option['services_title_6'] }}
                                </a>
                            </h4>
                            <p>{{ $option['services_description_6'] }}</p>
                            <div class="align-center margin-top-42 padding-bottom-16">
                                <a class="more" href="#" title="Đọc thêm về {{ $option['services_title_6'] }}">
                                    Đọc thêm
                                </a>
                            </div>
                        </li>
                    @endif
                </ul>
                <div class="cm-carousel-pagination"></div>
            </div>
        </div>
    </div>
@endif
