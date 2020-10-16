<?php

use Illuminate\Routing\RouteBinding;
use Illuminate\Support\Facades\Route;


Route::get('/crud', 'CrudController@index')->name('cr');
Route::get('/crud/create', 'CrudController@create')->name('cr.a');
Route::post('/crud', 'CrudController@store')->name('cr.s');

Route::match(['get', 'post'], '/home/{any}', function ($any) {
    return 'hellow dari tutorial mulai dari null ' . $any;
});
