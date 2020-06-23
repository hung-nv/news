<div class="form-body">
    <div class="form-group">
        <label class="col-md-2 control-label">Heading</label>
        <div class="col-md-5">
            <input name="why_us_heading" class="form-control"
                   value="{{ isset($option['why_us_heading']) ? $option['why_us_heading'] : old('why_us_heading') }}"/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3 class="form-section">
                <span class="badge badge-info">1</span>
            </h3>
            <div class="form-group">
                <label class="col-md-3 control-label">Icon</label>
                <div class="col-md-9">
                    <input name="why_us_icon_1" type="text" class="form-control icon-picker"
                           value="{{ isset($option['why_us_icon_1']) ? $option['why_us_icon_1'] : old('why_us_icon_1') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Title</label>
                <div class="col-md-9">
                    <input name="why_us_title_1" type="text" class="form-control"
                           value="{{ isset($option['why_us_title_1']) ? $option['why_us_title_1'] : old('why_us_title_1') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Description</label>
                <div class="col-md-9">
                    <textarea name="why_us_description_1" class="form-control"
                              rows="5">{{ isset($option['why_us_description_1']) ? $option['why_us_description_1'] : old('why_us_description_1') }}</textarea>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h3 class="form-section">
                <span class="badge badge-info">2</span>
            </h3>
            <div class="form-group">
                <label class="col-md-3 control-label">Icon</label>
                <div class="col-md-9">
                    <input name="why_us_icon_2" type="text" class="form-control icon-picker"
                           value="{{ isset($option['why_us_icon_2']) ? $option['why_us_icon_2'] : old('why_us_icon_2') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Title</label>
                <div class="col-md-9">
                    <input name="why_us_title_2" type="text" class="form-control"
                           value="{{ isset($option['why_us_title_2']) ? $option['why_us_title_2'] : old('why_us_title_2') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Description</label>
                <div class="col-md-9">
                    <textarea name="why_us_description_2" class="form-control"
                              rows="5">{{ isset($option['why_us_description_2']) ? $option['why_us_description_2'] : old('why_us_description_2') }}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 class="form-section">
                <span class="badge badge-info">3</span>
            </h3>
            <div class="form-group">
                <label class="col-md-3 control-label">Icon</label>
                <div class="col-md-9">
                    <input name="why_us_icon_3" type="text" class="form-control icon-picker"
                           value="{{ isset($option['why_us_icon_3']) ? $option['why_us_icon_3'] : old('why_us_icon_3') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Title</label>
                <div class="col-md-9">
                    <input name="why_us_title_4" type="text" class="form-control"
                           value="{{ isset($option['why_us_title_3']) ? $option['why_us_title_3'] : old('why_us_title_3') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Description</label>
                <div class="col-md-9">
                    <textarea name="why_us_description_3" class="form-control"
                              rows="5">{{ isset($option['why_us_description_3']) ? $option['why_us_description_3'] : old('why_us_description_3') }}</textarea>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h3 class="form-section">
                <span class="badge badge-info">4</span>
            </h3>
            <div class="form-group">
                <label class="col-md-3 control-label">Icon</label>
                <div class="col-md-9">
                    <input name="why_us_icon_4" type="text" class="form-control icon-picker"
                           value="{{ isset($option['why_us_icon_4']) ? $option['why_us_icon_4'] : old('why_us_icon_4') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Title</label>
                <div class="col-md-9">
                    <input name="why_us_title_5" type="text" class="form-control"
                           value="{{ isset($option['why_us_title_4']) ? $option['why_us_title_4'] : old('why_us_title_4') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Description</label>
                <div class="col-md-9">
                    <textarea name="why_us_description_4" class="form-control"
                              rows="5">{{ isset($option['why_us_description_4']) ? $option['why_us_description_4'] : old('why_us_description_4') }}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>
