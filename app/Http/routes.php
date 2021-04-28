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

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['otentikasi'])->name('welcome');

// Auth Route
// ------------------------
Route::get('/', 'AuthController@index')->name('auth.index');
Route::post('/login', 'AuthController@login')->name('auth.login');
Route::get('/registrasi', 'AuthController@registrasi')->name('auth.registrasi');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');
Route::post('/auth/store', 'AuthController@store')->name('auth.store');
// ------------------------

Route::resource('syarat', 'SyaratController', ['only' => [
    'create','store'
]]);

