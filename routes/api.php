<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'], function () {
    // delete advertising image.
    Route::post('advertising/delete-image', 'ApiAdvertisingController@deleteImage');
    // delete partner image.
    Route::post('partner/delete-image', 'ApiPartnerController@deleteImage');
    // delete category image.
    Route::post('category/delete-image', 'ApiCategoryController@deleteImage');
    // delete post image.
    Route::post('post/delete-image', 'ApiPostController@deleteImage');
    // add posts group.
    Route::post('post/add-group', 'ApiPostController@addGroup');
    // remove posts group.
    Route::post('post/remove-group', 'ApiPostController@removeGroup');
    // delete landing page data image.
    Route::post('landing/delete-image', 'ApiPostController@deleteImageLanding');
    // create menu.
    Route::post('create-menu', 'ApiMenuController@createMenuGroup');
    // delete menu group.
    Route::post('delete-menu-group', 'ApiMenuController@deleteMenuGroup');
    // add category to menu.
    Route::post('add-category', 'ApiMenuController@addCategory');
    // add page to menu.
    Route::post('add-page', 'ApiMenuController@addPage');
    // add custom to menu.
    Route::post('add-custom', 'ApiMenuController@addCustom');
    // get menu by group to reload after change menu.
    Route::get('get-menu/{idGroup}', 'ApiMenuController@getTemplateMenuByGroup');
    // get list menu group to reload after create menu group.
    Route::get('get-list-menu', 'ApiMenuController@getListMenu');
    // delete menu.
    Route::post('delete-menu', 'ApiMenuController@deleteMenu');
    // update sort.
    Route::post('update-sort', 'ApiMenuController@sort');
    // delete file setting.
    Route::post('delete-file-setting', 'ApiOptionController@deleteFile');
});
