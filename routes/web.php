<?php

use App\Http\Controllers\producty;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BasketttController;


// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/howtofindus', function () {
    return view('howtofindus');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/catalog', [App\Http\Controllers\producty::class, 'product']);

Route::get('/catalog/filter/{id}', [producty::class, 'filter']);

Route::get('/catalog/sort/{id}/{jik}', [App\Http\Controllers\producty::class, 'product']);

Route::get('/', [App\Http\Controllers\about::class, 'slider']);

Route::get('/catalog/productpage/{id}',[App\Http\Controllers\productpage::class, 'onelist']);

Route::get('/basket',[BasketttController::class, 'baskets'])->name('bskt');

Route::get('/basket/{id?}',[BasketttController::class, 'productsbasket']);

Route::get('/basket/{id?}/delete',[BasketttController::class, 'deletebasket']);