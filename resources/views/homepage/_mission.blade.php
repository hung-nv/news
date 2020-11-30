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
                <img class="lazyload" data-src="{{ asset('images/samples/960x750/image_03.jpg') }}" alt="">
            </a>
        </div>
        <div class="column column-1-3 green">
            <div class="row padding-left-right-70 margin-top-20">
                <h2>Liên hệ ngay: <a href="tel:0981645689">{{ $option['hotline'] }}</a></h2>
                <p class="description margin-top-20">Hoặc để lại thông tin liên hệ để được tư vấn miễn phí</p>
                <form class="contact-form margin-top-10" id="contact-form" method="post" action="contact_form/contact_form.php">
                    <div class="row flex-box">
                        <fieldset style="width: 100%">
                            <label>Họ tên</label>
                            <input class="text-input" name="name" type="text" value="">
                            <label>Email</label>
                            <input class="text-input" name="email" type="text" value="">
                            <label>Số điện thoại</label>
                            <input class="text-input" name="phone" type="text" value="">
                        </fieldset>
                    </div>
                    <div class="row margin-top-30">
                        <div class="column column-1-1">
                            <input type="hidden" name="action" value="contact_form">
                            <div class="row margin-top-15 padding-bottom-16 align-center">
                                <a class="more submit-contact-form" href="#" title="Send message">Gửi thông tin</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
