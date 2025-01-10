<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/home');
});

Route::get('/login', function () {
    return view('layouts/login');
});

