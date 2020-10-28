@if(!empty($option['why_us_heading']))
    <div class="row full-width gray flex-box page-margin-top-section">
        <div class="column column-1-2 background-1">
            <a class="flex-hide" href="?page=project_garden_maintenance" title="Garden Maintenance">
                @if(!empty($option['why_us_image']))
                    <img src="{{ asset($option['why_us_image']) }}"/>
                @else
                    <img src="{{ asset('images/samples/image_01.jpg') }}">
                @endif
            </a>
        </div>
        <div class="column column-1-2 padding-bottom-96">
            <div class="row padding-left-right-100">
                <h2 class="box-header align-left margin-top-89">{{ $option['why_us_heading'] }}</h2>
                <p class="description">Cleanmate opperates in Ottawa and provides a variety of cleaning
                    services. Choose us because of our reputation for excellence.</p>
                <div class="row page-margin-top">
                    <ol class="features-list">
                        @if(!empty($option['why_us_title_1']) && $option['why_us_description_1'])
                            <li class="column column-1-2">
                                <span class="list-number">1</span>
                                <h4>{{ $option['why_us_title_1'] }}</h4>
                                <p>
                                    {!! nl2br(e($option['why_us_description_1'])) !!}
                                </p>
                            </li>
                        @endif
                        @if(!empty($option['why_us_title_2']) && $option['why_us_description_2'])
                            <li class="column column-1-2">
                                <span class="list-number">2</span>
                                <h4>{{ $option['why_us_title_2'] }}</h4>
                                <p>
                                    {!! nl2br(e($option['why_us_description_2'])) !!}
                                </p>
                            </li>
                        @endif
                    </ol>
                </div>
                <div class="row page-margin-top">
                    <ol class="features-list">
                        @if(!empty($option['why_us_title_3']) && $option['why_us_description_3'])
                            <li class="column column-1-2">
                                <span class="list-number">3</span>
                                <h4>{{ $option['why_us_title_3'] }}</h4>
                                <p>
                                    {!! nl2br(e($option['why_us_description_3'])) !!}
                                </p>
                            </li>
                        @endif
                        @if(!empty($option['why_us_title_4']) && $option['why_us_description_4'])
                            <li class="column column-1-2">
                                <span class="list-number">4</span>
                                <h4>{{ $option['why_us_title_4'] }}</h4>
                                <p>
                                    {!! nl2br(e($option['why_us_description_4'])) !!}
                                </p>
                            </li>
                        @endif
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endif
