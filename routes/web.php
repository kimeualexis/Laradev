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
    return view('welcome');
});


Route::get('/messages', function () {
    return view('users.messages');
});


Route::get('/compose', function () {
    return view('users.compose');
});


Route::get('/readmessage', function () {
    return view('users.readmessage');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('/updateprofile', 'UsersController@update')->name('update profile');
