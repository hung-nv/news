<!-- Parallax -->
<div class="parallax parallax-background14" data-stellar-background-ratio="0.4">
    <div class="bg-overlay bg-overlay-dark"></div>
    <div class="white-space space-big"></div>
    <div class="container">
        <div class="row">
            @if(!empty($option['special_ico_1']) && !empty($option['special_title_1']) && !empty($option['special_description_1']))
                <div class="col-md-3 col-sm-6">
                    <h2 class="text-center color-white animation zoomIn"><i
                                class="icon {{ $option['special_ico_1'] }}"></i></h2>
                    <h2 class="counter text-center color-white" data-from="0" data-to="{{ $option['special_title_1'] }}"
                        data-speed="3000"
                        data-refresh-interval="50"></h2>
                    <h4 class="text-center color-white">{{ $option['special_description_1'] }}</h4>
                    <div class="white-space space-big"></div>
                </div>
            @endif
            @if(!empty($option['special_ico_2']) && !empty($option['special_title_2']) && !empty($option['special_description_2']))
                <div class="col-md-3 col-sm-6">
                    <h2 class="text-center color-white animation zoomIn"><i
                                class="icon {{ $option['special_ico_2'] }}"></i></h2>
                    <h2 class="counter text-center color-white" data-from="0" data-to="{{ $option['special_title_2'] }}"
                        data-speed="2000"
                        data-refresh-interval="50"></h2>
                    <h4 class="text-center color-white">{{ $option['special_description_2'] }}</h4>
                    <div class="white-space space-big"></div>
                </div>
            @endif
            @if(!empty($option['special_ico_3']) && !empty($option['special_title_3']) && !empty($option['special_description_3']))
                <div class="col-md-3 col-sm-6">
                    <h2 class="text-center color-white animation zoomIn"><i
                                class="icon {{ $option['special_ico_3'] }}"></i></h2>
                    <h2 class="counter text-center color-white" data-from="0" data-to="{{ $option['special_title_3'] }}"
                        data-speed="4000"
                        data-refresh-interval="50"></h2>
                    <h4 class="text-center color-white">{{ $option['special_description_3'] }}</h4>
                    <div class="white-space space-big"></div>
                </div>
            @endif
            @if(!empty($option['special_ico_4']) && !empty($option['special_title_4']) && !empty($option['special_description_4']))
                <div class="col-md-3 col-sm-6">
                    <h2 class="text-center color-white animation zoomIn"><i
                                class="icon {{ $option['special_ico_4'] }}"></i></h2>
                    <h2 class="counter text-center color-white" data-from="0" data-to="{{ $option['special_title_4'] }}"
                        data-speed="4000"
                        data-refresh-interval="50"></h2>
                    <h4 class="text-center color-white">{{ $option['special_description_4'] }}</h4>
                    <div class="white-space space-big"></div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- /Parallax -->