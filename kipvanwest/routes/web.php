<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/hallo', function () {
    return 'Hallo Laravel!';
});
