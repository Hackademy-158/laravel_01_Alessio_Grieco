<?php

use Illuminate\Support\Facades\Route;

// Init Server
Route::get('/', function () {
    return redirect('/homepage');
});

// Navbar Routes
Route::get('/homepage', function () {
    return view('homepage');
})->name('home');

Route::get('/intrattenimento', function () {
    return view('intrattenimento');
})->name('entertainment');

Route::get('/accessori', function () {
    return view('accessori');
})->name('accessories');

Route::get('/supporto', function () {
    return view('supporto');
})->name('support');