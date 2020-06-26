<div class="form-body">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="form-group">
                    <label class="col-md-3 control-label">Image 1</label>
                    <div class="col-md-9">
                        @if(isset($option['banner_image_1']) && $option['banner_image_1'])
                            <input type="hidden" name="old_banner_image_1" id="old_banner_image_1" data-id=""
                                   value="{{ !empty($option['banner_image_1']) ? $option['banner_image_1'] : '' }}">
                        @endif
                        <input id="banner_image_1" name="banner_image_1" type="file" data-show-upload="false">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="form-group">
                    <label class="col-md-3 control-label">Image 2</label>
                    <div class="col-md-9">
                        @if(isset($option['banner_image_2']) && $option['banner_image_2'])
                            <input type="hidden" name="old_banner_image_2" id="old_banner_image_2" data-id=""
                                   value="{{ !empty($option['banner_image_2']) ? $option['banner_image_2'] : '' }}">
                        @endif
                        <input id="banner_image_2" name="banner_image_2" type="file" data-show-upload="false">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="form-group">
                    <label class="col-md-3 control-label">Image 3</label>
                    <div class="col-md-9">
                        @if(isset($option['banner_image_3']) && $option['banner_image_3'])
                            <input type="hidden" name="old_banner_image_3" id="old_banner_image_3" data-id=""
                                   value="{{ !empty($option['banner_image_3']) ? $option['banner_image_3'] : '' }}">
                        @endif
                        <input id="banner_image_3" name="banner_image_3" type="file" data-show-upload="false">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
