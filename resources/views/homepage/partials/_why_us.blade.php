@if(!empty($option['why_us_heading']))
    <div class="cau_hoi">
        <div class=" container  ">
            <h2 class="tieu_de_cau_hoi">
                <span>{{ $option['why_us_heading'] }}</span>
            </h2>
            <div class="noi-dung ">
                @if(!empty($option['why_us_title_1']) && !empty($option['why_us_description_1']) && !empty($option['why_us_icon_1']))
                    <div class="col-md-3 col-xs-3 col-sm-3 noidung2">
                        <h2 class="hrm_noi_dung12">{{ $option['why_us_title_1'] }}</h2>
                        <p class="icon-why"><i class="{{ $option['why_us_icon_1'] }}"></i></p>
                        <p class="unique_noi_dung111">{{ $option['why_us_description_1'] }}</p>
                    </div>
                @endif

                @if(!empty($option['why_us_title_2']) && !empty($option['why_us_description_2']) && !empty($option['why_us_icon_2']))
                    <div class="col-md-3 col-xs-3 col-sm-3 noidung2">
                        <h2 class="hrm_noi_dung12">{{ $option['why_us_title_2'] }}</h2>
                        <p class="icon-why"><i class="{{ $option['why_us_icon_2'] }}"></i></p>
                        <p class="unique_noi_dung111">{{ $option['why_us_description_2'] }}</p>
                    </div>
                @endif

                @if(!empty($option['why_us_title_3']) && !empty($option['why_us_description_3']) && !empty($option['why_us_icon_3']))
                    <div class="col-md-3 col-xs-3 col-sm-3 noidung2">
                        <h2 class="hrm_noi_dung12">{{ $option['why_us_title_3'] }}</h2>
                        <p class="icon-why"><i class="{{ $option['why_us_icon_3'] }}"></i></p>
                        <p class="unique_noi_dung111">{{ $option['why_us_description_3'] }}</p>
                    </div>
                @endif

                @if(!empty($option['why_us_title_4']) && !empty($option['why_us_description_4']) && !empty($option['why_us_icon_4']))
                    <div class="col-md-3 col-xs-3 col-sm-3 noidung2">
                        <h2 class="hrm_noi_dung12">{{ $option['why_us_title_4'] }}</h2>
                        <p class="icon-why"><i class="{{ $option['why_us_icon_4'] }}"></i></p>
                        <p class="unique_noi_dung111">{{ $option['why_us_description_4'] }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif