<div class="form-body">
    <div class="form-group">
        <label class="col-md-2 control-label">Heading</label>
        <div class="col-md-5">
            <input name="about_us_heading" class="form-control"
                   value="{{ isset($option['about_us_heading']) ? $option['about_us_heading'] : old('about_us_heading') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">URL Details</label>
        <div class="col-md-5">
            <input name="about_us_url" class="form-control"
                   value="{{ isset($option['about_us_url']) ? $option['about_us_url'] :  old('about_us_url') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Description</label>
        <div class="col-md-5">
        <textarea name="about_us_description" class="form-control"
                  rows="6">{{ isset($option['about_us_description']) ? $option['about_us_description'] : old('about_us_description') }}</textarea>
        </div>
    </div>
</div>
