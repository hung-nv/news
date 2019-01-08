<?php

Route::get('/administrator', function () {
    return view('backend.auth.login');
});

Route::group(['namespace' => 'Frontend'], function () {
    // route homepage.
    Route::get('/', ['as' => 'homepage', 'uses' => 'HomepageController@index']);
    // route post details.
    Route::get(config('const.prefix.article') . '/{slug}', [
        'as' => 'article.details',
        'uses' => 'ArticleController@details'
    ]);
    // route list articles.
    Route::get(config('const.prefix.category') . '/{slug}', [
        'as' => 'article.list',
        'uses' => 'ArticleController@index'
    ]);
    // route page details.
    Route::get(config('const.prefix.page') . '/{slug}', [
        'as' => 'article.page',
        'uses' => 'ArticleController@page'
    ]);
    // route search articles.
    Route::get('search', ['as' => 'article.search', 'uses' => 'ArticleController@search']);
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

        // route resource page.
        Route::resource('page', 'PageController', ['except' => ['show']]);
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

/**
 * Resize image.
 */
Route::get('img/{w}/{h}/{src}', function ($w, $h, $src) {
    $imagePath = public_path() . '/' . $src;

    $img = Image::cache(function ($image) use ($w, $h, $imagePath) {
        return $image->make($imagePath)->resize($w, $h);
    });

    return Response::make($img, 200, ['Content-Type' => 'image/jpeg']);
})->where('src', '[A-Za-z0-9\/\.\-\_]+');