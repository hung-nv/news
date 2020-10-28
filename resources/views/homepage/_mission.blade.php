@if(!empty($option['mission_heading']) && !empty($option['mission_description']))
    <div class="row full-width padding-top-59 padding-bottom-60 align-center">
        <h3><span class="button-label">{{ $option['mission_heading'] }}</span></h3>
    </div>
    <div class="row full-width gray flex-box">
        <div class="column column-1-3 padding-bottom-96">
            <div class="row padding-left-right-70 margin-top-89">
                @if(!empty($option['mission_title']))
                    <h4>{{ $option['mission_title'] }}</h4>
                @endif
                @php
                    $missions = explode(PHP_EOL, $option['mission_description'])
                @endphp
                <ul class="list margin-top-20">
                    @foreach($missions as $mission)
                    <li class="template-tick-1">
                        {{ $mission }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="column column-1-3 background-3">
            <a class="flex-hide" href="?page=project_gutter_cleaning" title="Gutter Cleaning">
                <img src="{{ asset('images/samples/960x750/image_03.jpg') }}" alt="">
            </a>
        </div>
        <div class="column column-1-3 padding-bottom-100 green">
            <div class="row padding-left-right-70 margin-top-89">
                <h2>Liên hệ ngay: <a href="tel:0981645689">0981 645 689</a></h2>
                <p class="description margin-top-20">Need a special cleaning service? We are happy to fulfill
                    every request in order to exceed your expectations.</p>
                <div class="page-margin-top padding-bottom-16">
                    <a class="more" href="?page=contact" title="Contact form">Contact form</a>
                </div>
            </div>
        </div>
    </div>
@endif
