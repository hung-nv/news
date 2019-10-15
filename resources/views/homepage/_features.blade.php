<!-- Container -->
<div class="container">
    <div class="white-space space-big"></div>

    <div class="row">
        @if(!empty($option['feature_title_1']) && !empty($option['feature_ico_1']) && !empty($option['feature_description_1']))
            <div class="col-md-3 col-sm-6">
                <div class="iconbox vertical animation fadeInLeft">
                    <div class="iconbox-wrapper center-block color-default circle border iconbox-3x">
                        <span class="livicon" data-n="{{ $option['feature_ico_1'] }}" data-s="64" data-color="#F7505A"
                              data-hovercolor="#F7505A"
                              data-op="1" data-onparent="true"></span>
                    </div>
                    <div class="iconbox-content">
                        <h4>{{ $option['feature_title_1'] }}</h4>
                        <p>{!! nl2br(e($option['feature_description_1'])) !!}</p>
                    </div>
                </div>
                <div class="white-space space-small"></div>
            </div>
        @endif
        @if(!empty($option['feature_title_2']) && !empty($option['feature_ico_2']) && !empty($option['feature_description_2']))
            <div class="col-md-3 col-sm-6">
                <div class="iconbox vertical animation fadeInLeft delay1">
                    <div class="iconbox-wrapper center-block color-default circle border iconbox-3x">
                    <span class="livicon" data-n="{{ $option['feature_ico_2'] }}" data-s="64" data-color="#F7505A"
                          data-hovercolor="#F7505A"
                          data-op="1" data-onparent="true"></span>
                    </div>
                    <div class="iconbox-content">
                        <h4>{{ $option['feature_title_2'] }}</h4>
                        <p>{!! nl2br(e($option['feature_description_2'])) !!}</p>
                    </div>
                </div>
                <div class="white-space space-small"></div>
            </div>
        @endif
        @if(!empty($option['feature_title_3']) && !empty($option['feature_ico_3']) && !empty($option['feature_description_3']))
            <div class="col-md-3 col-sm-6">
                <div class="iconbox vertical animation fadeInRight">
                    <div class="iconbox-wrapper center-block color-default circle border iconbox-3x">
                    <span class="livicon" data-n="{{ $option['feature_ico_3'] }}" data-s="64" data-color="#F7505A"
                          data-hovercolor="#F7505A"
                          data-op="1" data-onparent="true"></span>
                    </div>
                    <div class="iconbox-content">
                        <h4>{{ $option['feature_title_3'] }}</h4>
                        <p>{!! nl2br(e($option['feature_description_3'])) !!}</p>
                    </div>
                </div>
                <div class="white-space space-small"></div>
            </div>
        @endif
        @if(!empty($option['feature_title_4']) && !empty($option['feature_ico_4']) && !empty($option['feature_description_4']))
            <div class="col-md-3 col-sm-6">
                <div class="iconbox vertical animation fadeInRight delay1">
                    <div class="iconbox-wrapper center-block color-default circle border iconbox-3x">
                    <span class="livicon" data-n="{{ $option['feature_ico_4'] }}" data-s="64" data-color="#F7505A" data-hovercolor="#F7505A"
                          data-op="1" data-onparent="true"></span>
                    </div>
                    <div class="iconbox-content">
                        <h4>{{ $option['feature_title_4'] }}</h4>
                        <p>{!! nl2br(e($option['feature_description_4'])) !!}</p>
                    </div>
                </div>
                <div class="white-space space-small"></div>
            </div>
        @endif
    </div>

    <div class="white-space space-medium"></div>
</div>
<!-- /Container -->