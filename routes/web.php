<?php

use Illuminate\Routing\RouteBinding;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/login', 301);
Route::redirect('/home', '/crud', 301);

//Route::get('/login', 'otentikasi\AuthController@login')->name('login');
//Route::post('/login/auth', 'otentikasi\AuthController@Auth')->name('Auth');
//Route::get('/logout', 'otentikasi\AuthController@logout')->name('logout');

//laravel login
Auth::routes();

//middleware buatan cutom atau buatan sendiri
Route::group(['middleware' => ['CekLoginMiddleware']], function () {
});

//middleware laravel
Route::group(['middleware' => ['auth']], function () {

    Route::get('/crud', 'CrudController@index')->name('cr');
    Route::get('/crud/create', 'CrudController@create')->name('cr.a');
    Route::post('/crud', 'CrudController@store')->name('cr.s');
    Route::delete('/crud/{id}', 'CrudController@destroy')->name('cr.d');
    Route::get('/crud/{id}/edit', 'CrudController@edit')->name('cr.e');
    Route::patch('/crud/{id}', 'CrudController@update')->name('cr.u');

    //konfigurasi
    Route::get('/konfirmasi', 'SetupController@index')->name('konfir');
    Route::post('/konfirmasi/kirim', 'SetupController@store')->name('kon.kir');
    Route::get('/konfirmasi/edit/{id}', 'SetupController@edit')->name('kon.ed');
    Route::patch('/konfirmasi/update/{id}', 'SetupController@update');
});

Route::get('/karyawan', 'MasterData\KaryawanController@index');

Route::match(['get', 'post'], '/home/{any}', function ($any) {
    return 'hellow dari tutorial mulai dari null ' . $any;
});
