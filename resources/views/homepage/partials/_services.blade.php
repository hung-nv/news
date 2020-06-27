@if(!empty($option['services_heading']))
<div class="dich_vu">
    <div class="container">
        <h2 class="titledv"><span>{{ $option['services_heading'] }}</span></h2>
        <div class="content_dichvu">
            @if(!empty($option['services_title_1']) && !empty($option['services_description_1']) && !empty($option['services_image_1']))
                <div class="col-md-4 col-xs-12 col-sm-4 noidung2">
                    <a href="{{ $option['services_url_1'] }}" title="{{ $option['services_title_1'] }}">
                        <img src="/img/300{{ $option['services_image_1'] }}" class="imger">
                    </a>
                    <h3 class="title_conent">
                        <a href="{{ $option['services_url_1'] }}" title="{{ $option['services_title_1'] }}">
                            {{ $option['services_title_1'] }}
                        </a>
                    </h3>
                    <p class="des_dichvu">
                        {{ $option['services_description_1'] }}
                    </p>
                </div>
            @endif

            @if(!empty($option['services_title_2']) && !empty($option['services_description_2']) && !empty($option['services_image_2']))
                <div class="col-md-4 col-xs-12 col-sm-4 noidung2">
                    <a href="{{ $option['services_url_2'] }}" title="{{ $option['services_title_2'] }}">
                        <img src="/img/300{{ $option['services_image_2'] }}" class="imger">
                    </a>
                    <h3 class="title_conent">
                        <a href="{{ $option['services_url_2'] }}" title="{{ $option['services_title_2'] }}">
                            {{ $option['services_title_2'] }}
                        </a>
                    </h3>
                    <p class="des_dichvu">
                        {{ $option['services_description_2'] }}
                    </p>
                </div>
            @endif

            @if(!empty($option['services_title_3']) && !empty($option['services_description_3']) && !empty($option['services_image_3']))
                <div class="col-md-4 col-xs-12 col-sm-4 noidung2">
                    <a href="{{ $option['services_url_3'] }}" title="{{ $option['services_title_3'] }}">
                        <img src="/img/300{{ $option['services_image_3'] }}" class="imger">
                    </a>
                    <h3 class="title_conent">
                        <a href="{{ $option['services_url_3'] }}" title="{{ $option['services_title_3'] }}">
                            {{ $option['services_title_3'] }}
                        </a>
                    </h3>
                    <p class="des_dichvu">
                        {{ $option['services_description_3'] }}
                    </p>
                </div>
            @endif
        </div>
    </div>
</div>
@endif