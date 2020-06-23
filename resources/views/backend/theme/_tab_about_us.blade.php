<div class="form-body">
    <div class="form-group">
        <label class="col-md-2 control-label">Heading</label>
        <div class="col-md-5">
            <input name="why_us_heading" class="form-control"
                   value="{{ isset($option['why_us_heading']) ? $option['why_us_heading'] : old('why_us_heading') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Content</label>
        <div class="col-md-5">
            <textarea name="why_us_content" class="form-control"
                      rows="10">{{ isset($option['why_us_content']) ? $option['why_us_content'] : old('why_us_content') }}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Image</label>
        <div class="col-md-5">
            @if(isset($option['why_us_image']) && $option['why_us_image'])
                <input type="hidden" name="old_why_us_image" id="old_why_us_image" data-id=""
                       value="{{ $option['why_us_image'] }}">
            @endif
            <input id="why_us_image" name="why_us_image" type="file" data-show-upload="false">
        </div>
    </div>
</div>
