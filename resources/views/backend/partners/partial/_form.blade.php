<div class="form-body">

    <div class="form-group">
        <label class="control-label col-md-3">Name</label>
        <div class="col-md-4">
            <input type="text" name="name" class="form-control"
                   value="{{ isset($data) ? $data['name'] : old('name') }}" required/>
        </div>
    </div>

    <div class="form-group" v-show="adType == '2'">
        <label class="control-label col-md-3">Image</label>

        <div class="col-md-4">
            @if(isset($data) && $data['image'])
                <input type="hidden" name="old_image" id="old-image" data-id="{{ $data['id'] }}"
                       value="{{ $data['image'] }}">
            @endif
            <input id="image" name="image" type="file" data-show-upload="false">
        </div>
    </div>
</div>