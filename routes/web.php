<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/howtofindus', function () {
    return view('howtofindus');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/catalog', [App\Http\Controllers\producty::class, 'product']);

Route::get('/catalog/filter/{id}', [App\Http\Controllers\producty::class, 'filter']);

Route::get('/about', [App\Http\Controllers\about::class, 'slider']);