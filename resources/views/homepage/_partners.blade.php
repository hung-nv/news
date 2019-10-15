<!-- Container -->
<div class="container">
    <div class="white-space space-small"></div>

    <div class="row">
        <div class="col-md-12 columns">
            <!-- Carousel -->
            <div class="carousel-box">
                <div class="carousel carousel-simple" data-carousel-autoplay="6000" data-carousel-items="5"
                     data-carousel-nav="false" data-carousel-pagination="false" data-carousel-speed="1000">
                    @if(!empty($partners))
                        @foreach($partners as $partner)
                            <div class="carousel-item">
                                <img src="{{ $partner->image }}" class="img-transparency" alt="{{ $partner->name }}">
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <!-- /Carousel -->
        </div>
    </div>

    <div class="white-space space-small"></div>
</div>
<!-- /Container -->