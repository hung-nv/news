<?php

Route::get('/administrator', function () {
    return view('backend.auth.login');
});

Route::group(['namespace' => 'Frontend'], function () {
    // route homepage.
    Route::get('/', ['as' => 'homepage', 'uses' => 'HomepageController@index']);
    // route post details.
    Route::get(config('const.prefix.download') . '/{slug}', [
        'as' => 'article.download',
        'uses' => 'ArticleController@download'
    ]);

});

Route::group(['prefix' => 'administrator', 'namespace' => 'Backend'], function () {
    // route login.
    Route::get('login', ['as' => 'login', 'uses' => 'LoginController@getLogin']);
    // route login.
    Route::post('login', ['as' => 'login', 'uses' => 'LoginController@postLogin']);
    // route logout.
    Route::get('logout', ['as' => 'logout', 'uses' => 'LoginController@getLogout']);
});

Route::group(['prefix' => 'administrator', 'middleware' => 'auth', 'namespace' => 'Backend'], function () {
    Route::group(['middleware' => 'checkrole:1|2'], function () {
        Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'AdminSiteController@index']);

        // route edit account.
        Route::get('user/update-account', ['as' => 'user.updateAccount', 'uses' => 'UserController@updateAccount']);

        // route update account.
        Route::put('user/update-account', ['as' => 'user.putUpdateAccount', 'uses' => 'UserController@account']);

        // route resource post.
        Route::resource('post', 'ArticleController');

        // route resource category.
        Route::resource('category', 'CategoryController');

//        Route::resource('advertising', 'AdvertisingController');

//        Route::resource('partner', 'PartnerController');

        // route resource page.
//        Route::resource('page', 'PageController', ['except' => ['show']]);
    });

    Route::group(['middleware' => 'checkrole:1'], function () {
        // route resource menu system.
        Route::resource('menuSystem', 'MenuSystemController', ['except' => ['show']]);

        // route resource user.
        Route::resource('user', 'UserController');

        // route resource setting.
        Route::resource('setting', 'SettingController', ['only' => ['index', 'store']]);

        // route setting menu.
        Route::get('menu', ['as' => 'setting.menu', 'uses' => 'SettingController@menu']);
    });
});

Route::get('img/{size}/{src}', function ($size, $src) {
    $imgPath = public_path() . '/' . $src;
    $sizes = explode('_', $size);
    if(count($sizes) > 1) {
        $w = $sizes[0];
        $h = $sizes[1];
        $img = Image::cache(function ($image) use ($w, $h, $imgPath) {
            return $image->make($imgPath)->fit($w, $h);
        });
    } else {
        $img = Image::cache(function ($image) use ($size, $imgPath) {
            return $image->make($imgPath)->resize($size, null, function ($constraint) {
                $constraint->aspectRatio();
            });
        });
    }
    return Response::make($img, 200, ['Content-Type' => 'image/jpeg']);
})->where(['src' => '[A-Za-z0-9\/\.\-\_]+', 'size' => '[0-9\_]+']);