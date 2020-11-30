<div class="revolution-slider-container">
    <div class="revolution-slider" data-version="5.4.5" style="display: none;">
        <ul>
            @if(!empty($option['banner_image_1']))
                <li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
                    <img data-lazyload="{{ asset($option['banner_image_1']) }}" src="{{ asset($option['banner_image_1']) }}" alt="slidebg1" data-bgfit="cover">
                    @if(!empty($option['banner_1_line_1']))
                        <div class="tp-caption"
                             data-frames='[{"delay":500,"speed":1500,"from":"y:-40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                             data-x="center"
                             data-y="['211', '197', '120', '148']"
                        >
                            <h4>{{ mb_strtoupper($option['banner_1_line_1']) }}</h4>
                        </div>
                    @endif
                    @if(!empty($option['banner_1_line_2']))
                        <div class="tp-caption"
                             data-frames='[{"delay":900,"speed":2000,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                             data-x="center"
                             data-y="['273', '253', '160', '190']"
                        >
                            <h2>
                                {{ mb_strtoupper($option['banner_1_line_2']) }}
                            </h2>
                        </div>
                    @endif
                    @if(!empty($option['banner_1_line_3']))
                        <div class="tp-caption"
                             data-frames='[{"delay":1100,"speed":2000,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                             data-x="center"
                             data-y="['345', '308', '196', '220']"
                        >
                            <h2 class="slider-subtitle">
                                <strong>{{ mb_strtoupper($option['banner_1_line_3']) }}</strong>
                            </h2>
                        </div>
                    @endif
                    @if(!empty($option['banner_1_button_label']) && !empty($option['banner_1_button_link']))
                        <div class="tp-caption"
                             data-frames='[{"delay":1500,"speed":1500,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                             data-x="center"
                             data-y="['476', '418', '264', '283']"
                        >
                            <div class="align-center">
                                <a class="more" href="{{ $option['banner_1_button_link'] }}" title="{{ $option['banner_1_button_label'] }}">
                                    {{ $option['banner_1_button_label'] }}
                                </a>
                            </div>
                        </div>
                    @endif
                </li>
            @endif
        <!-- SLIDE 2 -->
            @if(!empty($option['banner_image_2']))
                <li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
                    <!-- MAIN IMAGE -->
                    <img data-lazyload="{{ asset($option['banner_image_2']) }}" src="{{ asset($option['banner_image_2']) }}" alt="slidebg2" data-bgfit="cover">
                    <!-- LAYERS -->
                    <!-- LAYER 01 -->
                    <div class="tp-caption customin customout"
                         data-frames='[{"delay":500,"speed":1500,"from":"y:-40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                         data-x="center"
                         data-y="['211', '197', '120', '148']"
                    >
                        <h4>Reliable and Stable Crews</h4>
                    </div>
                    <!-- LAYER 02 -->
                    <div class="tp-caption customin customout"
                         data-frames='[{"delay":900,"speed":2000,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                         data-x="center"
                         data-y="['273', '253', '160', '190']"
                    >
                        <h2><a href="?page=service_calculator" title="Estimate Total Costs">OUR TEAM IS OUR MOST</a>
                        </h2>
                    </div>
                    <!-- LAYER 03 -->
                    <div class="tp-caption customin customout"
                         data-frames='[{"delay":1100,"speed":2000,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                         data-x="center"
                         data-y="['345', '308', '196', '220']"
                    >
                        <h2 class="slider-subtitle"><strong>VALUABLE RESOURCE</strong></h2>
                    </div>
                    <!-- LAYER 04 -->
                    <div class="tp-caption customin customout"
                         data-frames='[{"delay":1500,"speed":1500,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                         data-x="center"
                         data-y="['476', '418', '264', '283']"
                    >
                        <div class="align-center">
                            <a class="more" href="?page=service_calculator" title="Service calculator">Service
                                calculator</a>
                        </div>
                    </div>
                    <!-- / -->
                </li>
            @endif
        </ul>
    </div>
</div>
