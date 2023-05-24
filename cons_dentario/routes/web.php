<?php

use Illuminate\Support\Facades\Route;
//php artisan serve

Route::get('/', function () {
    return view('index');
});
