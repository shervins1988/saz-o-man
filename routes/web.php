<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('api')->group(function (){

    Route::get('/categories', 'Backend\CategoryController@apiIndex');
    Route::post('/categories/attribute', 'Backend\CategoryController@apiIndexAttribute');


});

Route::prefix('backend')->group(function (){

    Route::get('/panel', 'Backend\PanelController@index')->name('backend.panel');
    Route::get('/section', 'Backend\PanelController@index')->name('section.header');

    Route::resource('categories-menu', 'Backend\CategoryController');
    Route::get('/categories-menu/{id}/settings','Backend\CategoryController@indexSetting')->name('categories-menu.indexSetting');
    Route::post('/categories-menu/{id}/settings','Backend\CategoryController@saveSetting');
    Route::resource('attributes-group', 'Backend\AttributGroupController');
    Route::resource('attributes-value', 'Backend\AttributeValueController');
    Route::resource('products', 'Backend\ProductController');
    Route::resource('brands', 'Backend\BrandController');
    Route::resource('photos', 'Backend\PhotoController');
    Route::post('photos/upload','Backend\PhotoController@upload')->name('photos.upload');

});
Route::get('/', function () {
    return view('welcome');
});

