<?php

use Illuminate\Routing\RouteBinding;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'home', 301);

Route::get('/crud', 'CrudController@index');
Route::get('/crud/create', 'CrudController@create');
Route::get('/tambah', 'CrudController@create');

Route::match(['get', 'post'], '/home/{any}', function ($any) {
    return 'hellow dari tutorial mulai dari null ' . $any;
});
