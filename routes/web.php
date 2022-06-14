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
    return view('welcome');
});

Route::get('/register-user', 'UserController@create');
Route::post('user/create', 'UserController@store')->name('stripe.post');

Route::get('user/delete/{id}', 'Admin\UserController@delete');
Route::get('user/edit/{id}', 'Admin\UserController@edit');
Route::get('user/add', 'Admin\UserController@create');
Route::post('user/store', 'Admin\UserController@store');
Route::post('/user/updatemultirecode', 'Admin\UserController@updatemultirecode'); //
Route::get('/user/change-status/{id}', 'Admin\UserController@changeVerified'); //
Route::post('user/password', 'Admin\UserController@set_password');
Route::get('user', 'Admin\UserController@index');

// Route::get("user", [UserController::class, 'create']);

// Route::post("user/create", [UserController::class, 'store']);
