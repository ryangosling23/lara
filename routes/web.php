<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/howtofindus', function () {
    return view('howtofindus');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/catalog', [App\Http\Controllers\producty::class, 'product']);

Route::get('/catalog/filter/{id}', [App\Http\Controllers\producty::class, 'filter']);

Route::get('/catalog/sort/{id}/{jik}', [App\Http\Controllers\producty::class, 'product']);

Route::get('/', [App\Http\Controllers\about::class, 'slider']);

Route::get('/catalog/productpage/{id}',[App\Http\Controllers\productpage::class, 'onelist']);

Route::get('/basket',[App\Http\Controllers\basketcontroller::class, 'basket']);

