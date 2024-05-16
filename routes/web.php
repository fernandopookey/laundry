<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fau', function () {
    return view('fau');
});

Route::get('/wulan', function () {
    return view('welcome');
});
