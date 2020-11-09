<?php

use Illuminate\Support\Facades\Route;

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
    return view('fingerprint.index');
});

// route device
Route::get('/device', 'Demo\DemofpController@get_device')->name('device.ui');
Route::get('/device/add', 'Demo\DemofpController@get_device_create')->name('device.create.ui');
Route::post('device/add', 'Demo\CreateDeviceController@create_device')->name('device.create');

// route user
Route::get('/user', 'Demo\DemofpController@get_user')->name('user.ui');
Route::get('/user/add', 'Demo\DemofpController@get_user_create')->name('user.create.ui');
Route::post('/user/add','Demo\CreateCustomerController@create_user')->name('user.create');

