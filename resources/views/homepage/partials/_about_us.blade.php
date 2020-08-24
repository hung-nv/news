<div class="mavach">
    <div class="container">
        <div class="van-ban col-md-7 col-xs-6 col-sm-6 ">
            <h3>
                <span style="color: #ff6600;">Giới thiệu</span>
                @if(!empty($option['about_us_heading']))
                    {{ $option['about_us_heading'] }}
                @endif
            </h3>
            @if(!empty($option['about_us_content']))
                {!! $option['about_us_content'] !!}
            @endif
            <div class="nutbam">
                <a class="fancybox" href="#" data-toggle="modal" data-target="#modal-contact">Click để liên hệ ngay</a>
            </div>
        </div>
        <div class="block-video-youtube col-md-5 col-xs-6 col-sm-6">
            @if(!empty($option['about_us_image']))
                <img src="{{ $option['about_us_image'] }}" />
            @endif
        </div>
    </div>
</div>
