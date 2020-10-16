<?php

use Illuminate\Routing\RouteBinding;
use Illuminate\Support\Facades\Route;


Route::get('/crud', 'CrudController@index')->name('cr');
Route::get('/crud/create', 'CrudController@create')->name('cr.a');
Route::post('/crud', 'CrudController@store')->name('cr.s');
Route::delete('/crud/{id}', 'CrudController@destroy')->name('cr.d');
Route::get('/crud/{id}/edit', 'CrudController@edit')->name('cr.e');
Route::patch('/crud/{id}', 'CrudController@update')->name('cr.u');

Route::match(['get', 'post'], '/home/{any}', function ($any) {
    return 'hellow dari tutorial mulai dari null ' . $any;
});
