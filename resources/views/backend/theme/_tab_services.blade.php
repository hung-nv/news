<div class="form-body">
    <div class="form-group">
        <label class="col-md-2 control-label">Heading</label>
        <div class="col-md-5">
            <input name="services_heading" class="form-control"
                   value="{{ isset($option['services_heading']) ? $option['services_heading'] : old('services_heading') }}"/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <h3 class="form-section">
                <span class="badge badge-info">1</span>
            </h3>
            <div class="form-group">
                <label class="col-md-3 control-label">Title</label>
                <div class="col-md-9">
                    <input name="services_title_1" type="text" class="form-control"
                           value="{{ isset($option['services_title_1']) ? $option['services_title_1'] : old('services_title_1') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Description</label>
                <div class="col-md-9">
                    <textarea name="services_description_1" class="form-control"
                              rows="5">{{ isset($option['services_description_1']) ? $option['services_description_1'] : old('services_description_1') }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Image</label>
                <div class="col-md-9">
                    @if(isset($option['services_image_1']) && $option['services_image_1'])
                        <input type="hidden" name="old_services_image_1" id="old_services_image_1" data-id=""
                               value="{{ $option['services_image_1'] }}">
                    @endif
                    <input id="services_image_1" name="services_image_1" type="file" data-show-upload="false">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <h3 class="form-section">
                <span class="badge badge-info">2</span>
            </h3>
            <div class="form-group">
                <label class="col-md-3 control-label">Title</label>
                <div class="col-md-9">
                    <input name="services_title_2" type="text" class="form-control"
                           value="{{ isset($option['services_title_2']) ? $option['services_title_2'] : old('services_title_2') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Description</label>
                <div class="col-md-9">
                    <textarea name="services_description_2" class="form-control"
                              rows="5">{{ isset($option['services_description_2']) ? $option['services_description_2'] : old('services_description_2') }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Image</label>
                <div class="col-md-9">
                    @if(isset($option['services_image_2']) && $option['services_image_2'])
                        <input type="hidden" name="old_services_image_2" id="old_services_image_2" data-id=""
                               value="{{ $option['services_image_2'] }}">
                    @endif
                    <input id="services_image_2" name="services_image_2" type="file" data-show-upload="false">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <h3 class="form-section">
                <span class="badge badge-info">3</span>
            </h3>
            <div class="form-group">
                <label class="col-md-3 control-label">Title</label>
                <div class="col-md-9">
                    <input name="services_title_3" type="text" class="form-control"
                           value="{{ isset($option['services_title_3']) ? $option['services_title_3'] : old('services_title_3') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Description</label>
                <div class="col-md-9">
                    <textarea name="services_description_3" class="form-control"
                              rows="5">{{ isset($option['services_description_3']) ? $option['services_description_3'] : old('services_description_3') }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Image</label>
                <div class="col-md-9">
                    @if(isset($option['services_image_3']) && $option['services_image_3'])
                        <input type="hidden" name="old_services_image_2" id="old_services_image_3" data-id=""
                               value="{{ $option['services_image_3'] }}">
                    @endif
                    <input id="services_image_3" name="services_image_3" type="file" data-show-upload="false">
                </div>
            </div>
        </div>
    </div>

</div>
