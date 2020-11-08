<div class="col-md-9">
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" v-model="postName" required/>
    </div>

    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control" :value="postSlug"/>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"
                  rows="4">{{ isset($page) ? $page['description'] : old('description') }}</textarea>
    </div>

    <div class="form-group last">
        <label>Content</label>
        <textarea class="ckeditor form-control" name="content" rows="6"
                  data-error-container="#editor2_error">{{ isset($page) ? $page['content'] : old('content') }}</textarea>
        <div id="editor2_error"></div>
    </div>
</div>

@php($status = isset($page) ? $page['status'] : (old('status') ? old('status') : 1))

<div class="col-md-3">
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label>Status</label>
                <select class="form-control" name="status">
                    <option value="1" @if($status == 1) selected @endif>Approved</option>
                    <option value="0" @if($status == 0) selected @endif>No</option>
                </select>
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-warning"
                        style="margin-top: 23px;">Submit
                </button>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="panel-group accordion" id="accordion1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1">
                            Select Category
                        </a>
                    </h4>
                </div>
                <div id="collapse_1" class="panel-collapse in">
                    <div class="panel-body">
                        <div class="mt-checkbox-list">
                            {!! $templateCategory !!}
                        </div>
                        <div id="form_2_services_error"></div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2">
                            SEO
                        </a>
                    </h4>
                </div>
                <div id="collapse_2" class="panel-collapse collapse">
                    <div class="panel-body" style="height:200px; overflow-y:auto;">
                        <div class="form-group">
                            <label>Meta title</label>
                            <input type="text" name="meta_title" class="form-control"
                                   value="{{ isset($page) ? $page['meta_title'] : old('meta_title') }}"/>
                        </div>

                        <div class="form-group">
                            <label>Meta description</label>
                            <textarea type="text" name="meta_description"
                                      class="form-control">{{ isset($page) ? $page['meta_description'] : old('meta_description') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Image</label>
        @if(isset($page) && $page['image'])
            <input type="hidden" name="old_image" id="old-image" data-id="{{ $page['id'] }}"
                   value="{{ $page['image'] }}">
        @endif
        <input id="image" name="image" type="file" data-show-upload="false">
    </div>
</div>

