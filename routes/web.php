<?php

use Illuminate\Routing\RouteBinding;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'home', 301);
Route::view('home', 'index');

Route::match(['get', 'post'], '/home/{any}', function ($any) {
    return 'hellow dari tutorial mulai dari null ' . $any;
});
