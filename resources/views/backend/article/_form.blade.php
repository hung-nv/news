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
                  rows="4">{{ isset($post) ? $post['description'] : old('description') }}</textarea>
    </div>

    <h3 class="form-section margin-top-40">Downloads</h3>
    <button type="button" class="btn btn-warning" v-on:click="addItem">Add item</button>

    <div id="content-download" class="margin-top-20">
        @foreach($postDownload as $download)
            <div class="row content-download-inner">
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Label</label>
                        <input type="text" name="label[]" class="form-control" value="{{ $download['label'] }}"/>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label>Url Download</label>
                        <div class="input-group">
                            <input type="url" name="url[]" class="form-control" value="{{ $download['url'] }}"/>
                            <span class="input-group-btn">
                                <button class="btn btn-danger" style="margin-left: 10px;" id="remove-item">Remove</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@php($status = isset($post) ? $post['status'] : (old('status') ? old('status') : 1))
<div class="col-md-3">
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <?php $status = isset($post) ? $post['status'] : (old('status') ? old('status') : 1) ?>
                <label>Status</label>
                <select class="form-control" name="status">
                    <option value="0" @if($status === 0) selected @endif>No</option>
                    <option value="1" @if($status === 1) selected @endif>Approved</option>
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
        <label>Select Category</label>
        <div class="mt-checkbox-list"
             data-error-container="#form_2_services_error">
            {!! $templateCategory !!}
        </div>
        <div id="form_2_services_error"></div>
    </div>

    <div class="form-group hidden">
        <label>Keywords</label>
        <input type="text" name="meta_keywords" class="form-control"
               value="{{ isset($post) ? $post['meta_keywords'] : old('meta_keywords') }}"/>
    </div>

    <div class="form-group hidden">
        <label>Meta title</label>
        <input type="text" name="meta_title" class="form-control"
               value="{{ isset($post) ? $post['meta_title'] : old('meta_title') }}"/>
    </div>

    <div class="form-group hidden">
        <label>Meta description</label>
        <input type="text" name="meta_description" class="form-control"
               value="{{ isset($post) ? $post['meta_description'] : old('meta_description') }}"/>
    </div>

    <div class="form-group">
        <label>Image</label>
        @if(isset($post) && $post['image'])
            <input type="hidden" name="old_image" id="old-image" data-id="{{ $post['id'] }}"
                   value="{{ isset($post) ? $post['image'] : '' }}">
        @endif
        <input id="image" name="image" type="file" data-show-upload="false" @if(empty($post['image'])) required @endif style="left: 0;">
    </div>
</div>