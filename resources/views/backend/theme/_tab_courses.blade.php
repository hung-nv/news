<div class="form-body">
    <div class="form-group">
        <label class="col-md-2 control-label">Heading</label>
        <div class="col-md-5">
            <input name="courses_heading" class="form-control"
                   value="{{ isset($option['courses_heading']) ? $option['courses_heading'] : old('courses_heading') }}"/>
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
                    <input name="courses_title_1" type="text" class="form-control"
                           value="{{ isset($option['courses_title_1']) ? $option['courses_title_1'] : old('courses_title_1') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">URL</label>
                <div class="col-md-9">
                    <input name="courses_url_1" type="text" class="form-control"
                           value="{{ isset($option['courses_url_1']) ? $option['courses_url_1'] : old('courses_url_1') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Image</label>
                <div class="col-md-9">
                    @if(isset($option['courses_image_1']) && $option['courses_image_1'])
                        <input type="hidden" name="old_courses_image_1" id="old_courses_image_1" data-id=""
                               value="{{ $option['courses_image_1'] }}">
                    @endif
                    <input id="courses_image_1" name="courses_image_1" type="file" data-show-upload="false">
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
                    <input name="courses_title_2" type="text" class="form-control"
                           value="{{ isset($option['courses_title_2']) ? $option['courses_title_2'] : old('courses_title_2') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">URL</label>
                <div class="col-md-9">
                    <input name="courses_url_2" type="text" class="form-control"
                           value="{{ isset($option['courses_url_2']) ? $option['courses_url_2'] : old('courses_url_2') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Image</label>
                <div class="col-md-9">
                    @if(isset($option['courses_image_2']) && $option['courses_image_2'])
                        <input type="hidden" name="old_courses_image_2" id="old_courses_image_2" data-id=""
                               value="{{ $option['courses_image_2'] }}">
                    @endif
                    <input id="courses_image_2" name="courses_image_2" type="file" data-show-upload="false">
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
                    <input name="courses_title_3" type="text" class="form-control"
                           value="{{ isset($option['courses_title_3']) ? $option['courses_title_3'] : old('courses_title_3') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">URL</label>
                <div class="col-md-9">
                    <input name="courses_url_3" type="text" class="form-control"
                           value="{{ isset($option['courses_url_3']) ? $option['courses_url_3'] : old('courses_url_3') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Image</label>
                <div class="col-md-9">
                    @if(isset($option['courses_image_3']) && $option['courses_image_3'])
                        <input type="hidden" name="old_courses_image_3" id="old_courses_image_3" data-id=""
                               value="{{ $option['courses_image_3'] }}">
                    @endif
                    <input id="courses_image_3" name="courses_image_3" type="file" data-show-upload="false">
                </div>
            </div>
        </div>
    </div>

</div>
