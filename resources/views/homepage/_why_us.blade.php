@if(!empty($option['why_us_heading']))
    <div class="container" id="why-us">
        <div class="white-space space-big"></div>

        <div class="row">
            <div class="col-sm-6 columns">
                @if(!empty($option['why_us_image']))
                    <img src="{{ asset($option['why_us_image']) }}" width="100%" height="auto"/>
                @else
                    <img src="{{ asset('img/banner/why_1.jpg') }}" width="100%" height="auto"/>
            @endif
            <!-- /Testimonials Carousel -->

                <div class="white-space space-big"></div>
            </div>
            <div class="col-sm-6 columns">
                <h4 class="fancy-title animation fadeInRight"><span>{{ $option['why_us_heading'] }}</span></h4>
                <!-- Accordion -->
                <div class="accordion panel-group" id="accordion">

                    @if(!empty($option['why_us_title_1']) && $option['why_us_description_1'])
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed-icon" data-toggle="collapse"
                                       data-parent="#accordion" href="#collapseOne">
                                        <span class="icon gfx-star-4 iconleft"></span>
                                        {{ $option['why_us_title_1'] }}
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>{!! nl2br(e($option['why_us_description_1'])) !!}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(!empty($option['why_us_title_2']) && $option['why_us_description_2'])
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed-icon collapsed"
                                       data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        <span class="icon gfx-feather iconleft"></span>
                                        {{ $option['why_us_title_2'] }}
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>{!! nl2br(e($option['why_us_description_2'])) !!}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(!empty($option['why_us_title_3']) && $option['why_us_description_3'])
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed-icon collapsed"
                                       data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseThree">
                                        <span class="icon gfx-rocket-1 iconleft"></span>
                                        {{ $option['why_us_title_3'] }}
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>{!! nl2br(e($option['why_us_description_3'])) !!}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
                <!-- /Accordion -->
                <div class="white-space space-big"></div>
            </div>
        </div>

    </div>
    <!-- /Container -->
@endif