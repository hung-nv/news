<div class="form-body">
    <?php $homepage_post_id = !empty($option['homepage_post_id']) ? $option['homepage_post_id'] : old('homepage_post_id') ?>
    <div class="form-group hidden">
        <label class="col-md-2 control-label">Set Homepage</label>
        <div class="col-md-5">
            <select class="form-control" name="homepage_post_id">
                <option value="">Select Landing Page...</option>
                @if(isset($pages) && $pages)
                    @foreach($pages as $page)
                        <option value="{{ $page['id'] }}"
                                @if($homepage_post_id == $page['id']) selected @endif>{{ $page['name'] }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>

    <?php $mainMenuId = isset($option['main_menu_id']) ? $option['main_menu_id'] : old('main_menu_id') ?>
    <div class="form-group">
        <label class="col-md-2 control-label">Main Menu</label>
        <div class="col-md-5">
            <select class="form-control" name="main_menu_id">
                <option value="">Select Menu...</option>
                @foreach($menus as $mainMenu)
                    <option value="{{ $mainMenu->id }}"
                            @if($mainMenu->id == $mainMenuId) selected @endif>{{ $mainMenu->name }}</option>
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
        <label class="col-md-2 control-label">Hotline</label>
        <div class="col-md-5">
            <input name="hotline" class="form-control"
                   value="{{ isset($option['hotline']) ? $option['hotline'] : old('hotline') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Email</label>
        <div class="col-md-5">
            <input type="email" name="email" class="form-control"
                   value="{{ isset($option['email']) ? $option['email'] : old('email') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Footer Text</label>
        <div class="col-md-5">
        <textarea name="footer_text" class="ckeditor form-control" data-error-container="#editor2_error"
                  rows="5">{{ isset($option['footer_text']) ? $option['footer_text'] : old('footer_text') }}</textarea>
            <div id="editor2_error"></div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Fanpage Url</label>
        <div class="col-md-5">
            <input name="fanpage" class="form-control"
                   value="{{ isset($option['fanpage']) ? $option['fanpage'] : old('fanpage') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Google Analytic ID</label>
        <div class="col-md-5">
            <input name="google_analytics_id" class="form-control"
                   value="{{ isset($option['google_analytics_id']) ? $option['google_analytics_id'] : old('google_analytics_id') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Private Script</label>
        <div class="col-md-5">
            <textarea name="private_script"
                      class="form-control">{{ isset($option['private_script']) ? $option['private_script'] : old('private_script') }}</textarea>
        </div>
    </div>
</div>