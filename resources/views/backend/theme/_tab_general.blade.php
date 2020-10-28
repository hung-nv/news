<div class="form-body">
    <div class="form-group">
        <label class="col-md-2 control-label">Site Heading</label>
        <div class="col-md-5">
            <input name="site_heading" class="form-control"
                   value="{{ isset($option['site_heading']) ? $option['site_heading'] : old('site_heading') }}"/>
        </div>
    </div>

    <?php $homepage_post_id = isset($option['homepage_post_id']) ? $option['homepage_post_id'] : old('homepage_post_id') ?>
    <div class="form-group">
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
        <label class="col-md-2 control-label">Main Left Menu</label>
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

    <?php $sidebarMenuId = isset($option['sidebar_menu_id']) ? $option['sidebar_menu_id'] : old('sidebar_menu_id') ?>
    <div class="form-group">
        <label class="col-md-2 control-label">Main Right Menu</label>
        <div class="col-md-5">
            <select class="form-control" name="sidebar_menu_id">
                <option value="">Select Menu...</option>
                @foreach($menus as $subMenu)
                    <option value="{{ $subMenu->id }}"
                            @if($subMenu->id == $sidebarMenuId) selected @endif>{{ $subMenu->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <?php $mobileMenuId = isset($option['mobile_menu_id']) ? $option['mobile_menu_id'] : old('mobile_menu_id') ?>
    <div class="form-group">
        <label class="col-md-2 control-label">Mobile Menu</label>
        <div class="col-md-5">
            <select class="form-control" name="mobile_menu_id">
                <option value="">Select Menu...</option>
                @foreach($menus as $subMenu)
                    <option value="{{ $subMenu->id }}"
                            @if($subMenu->id == $mobileMenuId) selected @endif>{{ $subMenu->name }}</option>
                @endforeach
            </select>
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
        <label class="col-md-2 control-label">Address</label>
        <div class="col-md-5">
            <input name="main_office" class="form-control"
                   value="{{ isset($option['main_office']) ? $option['main_office'] : old('main_office') }}"/>
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
        <label class="col-md-2 control-label">Company Name</label>
        <div class="col-md-5">
            <input name="company_name" class="form-control"
                   value="{{ isset($option['company_name']) ? $option['company_name'] :  old('company_name') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Company Description</label>
        <div class="col-md-5">
        <textarea name="company_description" class="form-control"
                  rows="4">{{ isset($option['company_description']) ? $option['company_description'] : old('company_description') }}</textarea>
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
</div>
