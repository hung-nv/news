<div class="form-body">
    <?php $mainMenuId = !empty($option['main_menu_id']) ? $option['main_menu_id'] : old('main_menu_id') ?>
    <div class="form-group">
        <label class="col-md-2 control-label">Main Menu</label>
        <div class="col-md-3">
            <select class="form-control" name="main_menu_id">
                <option value="">Select Menu...</option>
                @foreach($menus as $mainMenu)
                    <option value="{{ $mainMenu->id }}"
                            @if($mainMenu->id == $mainMenuId) selected @endif>{{ $mainMenu->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <?php $bottomMenuId = !empty($option['footer_menu_id']) ? $option['footer_menu_id'] : old('footer_menu_id') ?>
    <div class="form-group">
        <label class="col-md-2 control-label">Footer Menu</label>
        <div class="col-md-3">
            <select class="form-control" name="footer_menu_id">
                <option value="">Select Menu...</option>
                @foreach($menus as $subMenu)
                    <option value="{{ $subMenu->id }}"
                            @if($subMenu->id == $bottomMenuId) selected @endif>{{ $subMenu->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Company Logo</label>
        <div class="col-md-5">
            @if(isset($option['company_logo']) && $option['company_logo'])
                <input type="hidden" name="old_company_logo" id="old_company_logo" data-id=""
                       value="{{ $option['company_logo'] }}">
            @endif
            <input id="company_logo" name="company_logo" type="file" data-show-upload="false">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Favico</label>
        <div class="col-md-5">
            @if(isset($option['favico']) && $option['favico'])
                <input type="hidden" name="old_favico" id="old_favico" data-id=""
                       value="{{ isset($option) ? $option['favico'] : '' }}">
            @endif
            <input id="favico" name="favico" type="file" data-show-upload="false">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Footer text</label>
        <div class="col-md-10">
            <textarea name="footer_text" class="ckeditor form-control" rows="2"
                      data-error-container="#editor2_error">{{ !empty($option['footer_text']) ? $option['footer_text'] : old('footer_text') }}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Private Script</label>
        <div class="col-md-10">
            <textarea name="private_script" class="form-control" rows="8">{{ !empty($option['private_script']) ? $option['private_script'] : old('private_script') }}</textarea>
        </div>
    </div>
</div>