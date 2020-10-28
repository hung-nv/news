<div class="form-body">
    <div class="form-group">
        <label class="col-md-2 control-label">Heading</label>
        <div class="col-md-5">
            <input name="mission_heading" class="form-control"
                   value="{{ isset($option['mission_heading']) ? $option['mission_heading'] : old('mission_heading') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Mission title</label>
        <div class="col-md-5">
            <input name="mission_title" class="form-control"
                   value="{{ isset($option['mission_title']) ? $option['mission_title'] : old('mission_title') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Description</label>
        <div class="col-md-5">
        <textarea name="mission_description" class="form-control"
                  rows="6">{{ isset($option['mission_description']) ? $option['mission_description'] : old('mission_description') }}</textarea>
        </div>
    </div>
</div>
