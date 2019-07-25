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

Route::get('/', function () {
    return view('public.index');
})->name('trangchu');
Route::group(['namespace' => 'frontend'], function() {
	Route::get('lienhe','PageController@lienhe')->name('lienhe');
	Route::get('gioithieu','PageController@gioithieu')->name('gioithieu');
	Route::get('hotro','PageController@hotro')->name('hotro');
	Route::get('thongtinnguoidung/{id}/{slug}', 'PageController@thongtin')->name('thongtin');
});

Route::group(['prefix' => 'timban','namespace' => 'frontend'], function() {
    Route::get('/gioitinh/{slug}', 'TimbanController@gioitinh')->name('gioitinh');
    Route::get('/muctieu/{slug}', 'TimbanController@muctieu')->name('muctieu');
    Route::get('/honnhan/{slug}', 'TimbanController@honnhan')->name('honnhan');
});

Auth::routes();

