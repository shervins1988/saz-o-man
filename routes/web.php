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

Route::prefix('backend')->group(function (){

    Route::get('/panel', 'Backend\PanelController@index')->name('backend.panel');
    Route::get('/section', 'Backend\PanelController@index')->name('section.header');

    Route::resource('categories-menu', 'Backend\CategoryController');
    Route::resource('attributes-group', 'Backend\AttributGroupController');
    Route::resource('attributes-value', 'Backend\AttributeValueController');
    Route::resource('brands', 'Backend\BrandController');
    Route::resource('photos', 'Backend\PhotoController');
    Route::post('photos/upload','Backend\PhotoController@upload')->name('photos.upload');

});
Route::get('/', function () {
    return view('welcome');
});

