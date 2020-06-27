@if(!empty($option['courses_heading']))
<div class="khoahoc">
    <div class="deco hidden-xs"></div>
    <div class="container">
        <h2 class="titledv"><span>{{ $option['courses_heading'] }}</span></h2>
        <div class="content">
            <div class="divkh col-md-7 col-xs-12">
                @if(!empty($option['courses_title_1']) && !empty($option['courses_image_1']))
                    <div class="khoahoc-item col-sm-4 col-xs-12">
                        <a href="{{ $option['courses_url_1'] }}" target="_blank">
                            <p class="img-khoahoc" style="background-image: url({{ '/img/200' . $option['courses_image_1'] }});">
                            </p>
                        </a>
                        <h3 class="title_kh">{{ $option['courses_title_1'] }}</h3>
                        <a href="{{ $option['courses_url_1'] }}" target="_blank" class="lg_readmore">xem thêm <i class="fa fa-angle-right"></i></a>
                    </div>
                @endif

                @if(!empty($option['courses_title_2']) && !empty($option['courses_image_2']))
                    <div class="khoahoc-item col-sm-4 col-xs-12">
                        <a href="{{ $option['courses_url_2'] }}" target="_blank">
                            <p class="img-khoahoc" style="background-image: url({{ '/img/200' . $option['courses_image_2'] }});">
                            </p>
                        </a>
                        <h3 class="title_kh">{{ $option['courses_title_2'] }}</h3>
                        <a href="{{ $option['courses_url_2'] }}" target="_blank" class="lg_readmore">xem thêm <i class="fa fa-angle-right"></i></a>
                    </div>
                @endif

                @if(!empty($option['courses_title_3']) && !empty($option['courses_image_3']))
                    <div class="khoahoc-item col-sm-4 col-xs-12">
                        <a href="{{ $option['courses_url_3'] }}" target="_blank">
                            <p class="img-khoahoc" style="background-image: url({{ '/img/200' . $option['courses_image_3'] }});">
                            </p>
                        </a>
                        <h3 class="title_kh">{{ $option['courses_title_3'] }}</h3>
                        <a href="{{ $option['courses_url_3'] }}" target="_blank" class="lg_readmore">xem thêm <i class="fa fa-angle-right"></i></a>
                    </div>
                @endif
            </div>
            <div class="col-md-5 hidden-xs">
            </div>
        </div>
    </div>
</div>
@endif