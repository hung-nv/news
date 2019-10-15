@if(!empty($option['services_heading']) && !empty($option['services_description']))
    <div class="parallax parallax-background13" data-stellar-background-ratio="0.4" id="services">
        <div class="bg-overlay bg-overlay-dark"></div>

        <div class="container">
            <div class="white-space space-big"></div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="fancy-title text-center color-white animation fadeInUp">
                        <span>{{ $option['services_heading'] }}</span></h3>
                    <p class="lead text-center color-white">{{ $option['services_description'] }}</p>
                    <div class="white-space space-small"></div>
                </div>
            </div>

            <div class="row">
                @if(!empty($option['services_title_1']) && !empty($option['services_description_1']))
                    <div class="col-sm-4">
                        <h5 class="fancy-title color-white animation fadeInLeft">
                            <span>{{ $option['services_title_1'] }}</span></h5>
                        <p class="color-white">{{ $option['services_description_1'] }}</p>
                        <div class="white-space space-small"></div>
                    </div>
                @endif
                @if(!empty($option['services_title_2']) && !empty($option['services_description_2']))
                    <div class="col-sm-4">
                        <h5 class="fancy-title color-white animation fadeInUp">
                            <span>{{ $option['services_title_2'] }}</span></h5>
                        <p class="color-white">{{ $option['services_description_2'] }}</p>
                        <div class="white-space space-small"></div>
                    </div>
                @endif
                @if(!empty($option['services_title_3']) && !empty($option['services_description_3']))
                    <div class="col-sm-4">
                        <h5 class="fancy-title color-white animation fadeInRight">
                            <span>{{ $option['services_title_3'] }}</span></h5>
                        <p class="color-white">{{ $option['services_description_3'] }}</p>
                        <div class="white-space space-small"></div>
                    </div>
                @endif
            </div>

            <div class="row">
                @if(!empty($option['services_title_4']) && !empty($option['services_description_4']))
                    <div class="col-sm-4">
                        <h5 class="fancy-title color-white animation fadeInLeft">
                            <span>{{ $option['services_title_4'] }}</span></h5>
                        <p class="color-white">{{ $option['services_description_4'] }}</p>
                        <div class="white-space space-small"></div>
                    </div>
                @endif
                @if(!empty($option['services_title_5']) && !empty($option['services_description_5']))
                    <div class="col-sm-4">
                        <h5 class="fancy-title color-white animation fadeInUp">
                            <span>{{ $option['services_title_5'] }}</span></h5>
                        <p class="color-white">{{ $option['services_description_5'] }}</p>
                        <div class="white-space space-small"></div>
                    </div>
                @endif
                @if(!empty($option['services_title_6']) && !empty($option['services_description_6']))
                    <div class="col-sm-4">
                        <h5 class="fancy-title color-white animation fadeInRight">
                            <span>{{ $option['services_title_6'] }}</span></h5>
                        <p class="color-white">{{ $option['services_description_6'] }}</p>
                        <div class="white-space space-small"></div>
                    </div>
                @endif
            </div>

            <div class="white-space space-medium"></div>
        </div>

    </div>
@endif