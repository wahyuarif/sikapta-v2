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
Route::get('/pengajuan_syarat', function () {
    return view('ui.pengajuan_ta_syarat');
});

Route::get('/timeline', function () {
    return view('ui.timeline');
});

Route::get('/progresbar', function () {
    return view('ui.progresbar');
});