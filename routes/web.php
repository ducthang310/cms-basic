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

//Route::get('/', function () {
//    return view('welcome');
//});


Auth::routes();

Route::group(['prefix' => '/'], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::match(['post', 'get'], '/home', 'Admin\DashboardController@index')->name('home');
        Route::match(['post', 'get'], '/', 'Admin\DashboardController@index')->name('admin_dashboard');
        Route::match(['post', 'get'], '/forms', 'Admin\DashboardController@forms')->name('admin_forms');
        Route::match(['post', 'get'], '/tabs', 'Admin\DashboardController@tabs')->name('admin_tabs');
        Route::match(['post', 'get'], '/tables', 'Admin\DashboardController@tables')->name('admin_tables');
        Route::match(['post', 'get'], '/collection', 'Admin\DashboardController@collection')->name('admin_collection');
        Route::match(['post', 'get'], '/cards', 'Admin\DashboardController@cards')->name('admin_cards');
        Route::match(['post', 'get'], '/sliders', 'Admin\DashboardController@sliders')->name('admin_sliders');
        Route::match(['post', 'get'], '/images', 'Admin\DashboardController@images')->name('admin_images');
    });
});

