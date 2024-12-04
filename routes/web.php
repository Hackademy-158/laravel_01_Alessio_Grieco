<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/servizi', function () {
    return view('servizi');
});

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
});