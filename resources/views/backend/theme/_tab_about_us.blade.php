<div class="form-body">
    <div class="form-group">
        <label class="col-md-2 control-label">Heading</label>
        <div class="col-md-5">
            <input name="about_us_heading" class="form-control"
                   value="{{ isset($option['about_us_heading']) ? $option['about_us_heading'] : old('about_us_heading') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Content</label>
        <div class="col-md-5">
            <textarea name="about_us_content" class="ckeditor form-control" data-error-container="#editor2_error"
                      rows="5">{{ isset($option['about_us_content']) ? $option['about_us_content'] : old('about_us_content') }}</textarea>
            <div id="editor2_error"></div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Image</label>
        <div class="col-md-5">
            @if(isset($option['about_us_image']) && $option['about_us_image'])
                <input type="hidden" name="old_about_us_image" id="old_about_us_image" data-id=""
                       value="{{ $option['about_us_image'] }}">
            @endif
            <input id="about_us_image" name="about_us_image" type="file" data-show-upload="false">
        </div>
    </div>
</div>
