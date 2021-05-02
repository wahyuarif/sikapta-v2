<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('ui.welcome');
});

// Auth Route
// ------------------------
Route::get('/', 'AuthController@index')->name('auth.index');
Route::post('/login', 'AuthController@login')->name('auth.login');
Route::get('/registrasi', 'AuthController@registrasi')->name('auth.registrasi');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');
Route::post('/auth/store', 'AuthController@store')->name('auth.store');
// ------------------------

// Syarat Route

Route::group(['middleware' => 'otentikasi'], function(){
    Route::resource('syarat' ,'SyaratController', ['only' => [
        'index','store'
    ]]);
});

// -----------------

Route::get('/pengajuan', function () {
    return view('ui.pengajuan');
});
Route::get('/pengajuan_ok', function () {
    return view('ui.popup_pengajuan');
});

Route::get('/pengajuan_detail', function () {
    return view('ui.popup_pengajuan_detailed');
});

Route::get('/pengajuan_table', function () {
    return view('ui.pengajuan_table');
});

Route::get('/tes', function () {
    return view('ui.tes');
});
Route::get('/login', function () {
    return view('ui.login');
});
