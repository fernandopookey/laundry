<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aldi', function () {
    return view('welcome aldi');
});
