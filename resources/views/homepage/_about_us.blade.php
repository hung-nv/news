@if(!empty($option['about_us_heading']) && !empty($option['about_us_description']))
    <div class="row page-margin-top-section padding-bottom-100">
        <div class="column column-1-2">
            <h2 class="box-header">{{ $option['about_us_heading'] }}</h2>
{{--            <p class="description align-center">Exceptional level of cleaning services.</p>--}}
            <p class="padding-0 margin-top-27 padding-left-right-35">
                {!! nl2br(e($option['about_us_description'])) !!}
            </p>
            @if(!empty($option['about_us_url']))
                <div class="align-center page-margin-top padding-bottom-16">
                    <a class="more" href="{{ $option['about_us_url'] }}" title="Xem thêm về chúng tôi">Xem thêm</a>
                </div>
            @endif
        </div>
        <div class="column column-1-4">
            <a href="{{ asset('images/samples/image_02.jpg') }}" class="prettyPhoto cm-preload"
               title="Gutter Cleaning">
                <img src='{{ asset('images/samples/image_02.jpg') }}' alt='img'>
            </a>
        </div>
        <div class="column column-1-4">
            <div class="row">
                <a href="{{ asset('images/samples/480x320/image_03.jpg') }}" class="prettyPhoto cm-preload"
                   title="House Cleaning">
                    <img src='{{ asset('images/samples/480x320/image_03.jpg') }}' alt='img'>
                </a>
            </div>
            <div class="row margin-top-30">
                <a href="{{ asset('images/samples/480x320/image_05.jpg') }}" class="prettyPhoto cm-preload"
                   title="After Renovation Cleaning">
                    <img src='{{ asset('images/samples/480x320/image_05.jpg') }}' alt='img'>
                </a>
            </div>
        </div>
    </div>
@endif
