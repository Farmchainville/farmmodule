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


Route::get('/', 'HomeController@index');

Route::get('qrcode', function () {
    $image = \QrCode::format('png')
        ->color(75, 112, 58)
        ->merge('dashboard/images/farmville.png', 0.2, true)
        ->size(500)->errorCorrection('H')
        ->generate('http://mvp.farmchainville.io');
    return response($image)->header('Content-type','image/png');
});

Auth::routes();


Route::group(['middleware' => ['auth']], function() {

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/farm/qrcode/{id}', 'FarmController@get_qrcode')->name('farmqrcode');

Route::get('/manage/farm', 'FarmController@farm')->name('manage_farm');
Route::get('/manage/lots', 'FarmController@lots')->name('manage_lot');
Route::get('/manage/inventory', 'FarmController@inventory')->name('manage_inventory');

Route::get('/manage/staff', 'StaffController@index')->name('manage_staff');
Route::get('/security/password', 'StaffController@password');


Route::post('/create/farm', 'FarmController@create_farm')->name('create_farm');
Route::post('/edit/farm', 'FarmController@edit_farm')->name('edit_farm');
Route::post('/create/lots', 'FarmController@create_lots')->name('create_lots');
Route::post('/create/inventory', 'FarmController@create_inventory')->name('create_inventory');
Route::post('/create/category', 'FarmController@create_icategory')->name('create_category');

Route::get('/local_govt', 'FarmController@get_lga')->name('getlga');
Route::get('/farminfo', 'FarmController@get_farm')->name('getfarm');
Route::get('/lotinfo', 'FarmController@get_lot')->name('getlot');

Route::post('/security/password/change', 'StaffController@update_password')->name('change_password');




});