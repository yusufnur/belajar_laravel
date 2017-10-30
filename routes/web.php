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

Route::get('percakapan', function () {
    return view('percakapan');
});

Route::get('kontak', function () {
    return view('kontak');
});

Route::post('percakapan/kirim', function () {
    return view('percakapan_kirim');
});

Route::get('template', function () {   
	return view('coba1');
});

Route::get('coba1', function () {
	return view('coba1');
});

Route::get('coba2', function () {
	return view('coba2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
