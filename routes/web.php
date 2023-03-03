<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::get('/catalog', [App\Http\Controllers\producty::class, 'pruduct']);

Route::get('/catalog/filter/{id}', [product::class, 'filter']);
Route::get('/catalog/sort/{name}/sort', [product::class, 'pruduct']);
Route::get('/about', [App\Http\Controllers\about::class, 'slider']);