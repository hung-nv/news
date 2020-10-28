<div class="form-body">
    <div class="row">
        <div class="col-md-4">
            <h3 class="form-section">
                <span class="badge badge-info">Slider 1</span>
            </h3>
            <div class="row">
                <div class="form-group">
                    <label class="col-md-3 control-label">Image</label>
                    <div class="col-md-9">
                        @if(isset($option['banner_image_1']) && $option['banner_image_1'])
                            <input type="hidden" name="old_banner_image_1" id="old_banner_image_1" data-id=""
                                   value="{{ !empty($option['banner_image_1']) ? $option['banner_image_1'] : '' }}">
                        @endif
                        <input id="banner_image_1" name="banner_image_1" type="file" data-show-upload="false">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Line 1</label>
                    <div class="col-md-9">
                        <input name="banner_1_line_1" type="text" class="form-control"
                               value="{{ isset($option['banner_1_line_1']) ? $option['banner_1_line_1'] : old('banner_1_line_1') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Line 2</label>
                    <div class="col-md-9">
                        <input name="banner_1_line_2" type="text" class="form-control"
                               value="{{ isset($option['banner_1_line_2']) ? $option['banner_1_line_2'] : old('banner_1_line_2') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Line 3</label>
                    <div class="col-md-9">
                        <input name="banner_1_line_3" type="text" class="form-control"
                               value="{{ isset($option['banner_1_line_3']) ? $option['banner_1_line_3'] : old('banner_1_line_3') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Button Label</label>
                    <div class="col-md-9">
                        <input name="banner_1_button_label" type="text" class="form-control"
                               value="{{ isset($option['banner_1_button_label']) ? $option['banner_1_button_label'] : old('banner_1_button_label') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Button Link</label>
                    <div class="col-md-9">
                        <input name="banner_1_button_link" type="text" class="form-control"
                               value="{{ isset($option['banner_1_button_link']) ? $option['banner_1_button_link'] : old('banner_1_button_link') }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <h3 class="form-section">
                <span class="badge badge-info">Slider 2</span>
            </h3>
            <div class="row">
                <div class="form-group">
                    <label class="col-md-3 control-label">Image</label>
                    <div class="col-md-9">
                        @if(isset($option['banner_image_2']) && $option['banner_image_2'])
                            <input type="hidden" name="old_banner_image_2" id="old_banner_image_2" data-id=""
                                   value="{{ !empty($option['banner_image_2']) ? $option['banner_image_2'] : '' }}">
                        @endif
                        <input id="banner_image_2" name="banner_image_2" type="file" data-show-upload="false">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Line 1</label>
                    <div class="col-md-9">
                        <input name="banner_2_line_1" type="text" class="form-control"
                               value="{{ isset($option['banner_2_line_1']) ? $option['banner_2_line_1'] : old('banner_2_line_1') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Line 2</label>
                    <div class="col-md-9">
                        <input name="banner_2_line_2" type="text" class="form-control"
                               value="{{ isset($option['banner_2_line_2']) ? $option['banner_2_line_2'] : old('banner_2_line_2') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Line 3</label>
                    <div class="col-md-9">
                        <input name="banner_2_line_3" type="text" class="form-control"
                               value="{{ isset($option['banner_2_line_3']) ? $option['banner_2_line_3'] : old('banner_2_line_3') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Button Label</label>
                    <div class="col-md-9">
                        <input name="banner_2_button_label" type="text" class="form-control"
                               value="{{ isset($option['banner_2_button_label']) ? $option['banner_2_button_label'] : old('banner_2_button_label') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Button Link</label>
                    <div class="col-md-9">
                        <input name="banner_2_button_link" type="text" class="form-control"
                               value="{{ isset($option['banner_2_button_link']) ? $option['banner_2_button_link'] : old('banner_2_button_link') }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <h3 class="form-section">
                <span class="badge badge-info">Slider 3</span>
            </h3>
            <div class="row">
                <div class="form-group">
                    <label class="col-md-3 control-label">Image</label>
                    <div class="col-md-9">
                        @if(isset($option['banner_image_3']) && $option['banner_image_3'])
                            <input type="hidden" name="old_banner_image_3" id="old_banner_image_3" data-id=""
                                   value="{{ !empty($option['banner_image_3']) ? $option['banner_image_3'] : '' }}">
                        @endif
                        <input id="banner_image_3" name="banner_image_3" type="file" data-show-upload="false">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Line 1</label>
                    <div class="col-md-9">
                        <input name="banner_3_line_1" type="text" class="form-control"
                               value="{{ isset($option['banner_3_line_1']) ? $option['banner_3_line_1'] : old('banner_3_line_1') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Line 2</label>
                    <div class="col-md-9">
                        <input name="banner_3_line_2" type="text" class="form-control"
                               value="{{ isset($option['banner_3_line_2']) ? $option['banner_3_line_2'] : old('banner_3_line_2') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Line 3</label>
                    <div class="col-md-9">
                        <input name="banner_3_line_3" type="text" class="form-control"
                               value="{{ isset($option['banner_3_line_3']) ? $option['banner_3_line_3'] : old('banner_3_line_3') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Button Label</label>
                    <div class="col-md-9">
                        <input name="banner_3_button_label" type="text" class="form-control"
                               value="{{ isset($option['banner_3_button_label']) ? $option['banner_3_button_label'] : old('banner_3_button_label') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Button Link</label>
                    <div class="col-md-9">
                        <input name="banner_3_button_link" type="text" class="form-control"
                               value="{{ isset($option['banner_3_button_link']) ? $option['banner_3_button_link'] : old('banner_3_button_link') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
