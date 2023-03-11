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



//админ
Route::get('/admin', [App\Http\Controllers\admin::class, 'admin'])->name('admin'); //страница админа с редактированием данных
//админ-товар
Route::get('/admin/product', [App\Http\Controllers\admin::class, 'form']); //Форма создания товара
Route::post('/admin/product/create', [App\Http\Controllers\admin::class, 'maketovar'])->name('makeprod'); // Отправка данных товара в базу данных
Route::get('/admin/product/delete/{id}', [App\Http\Controllers\admin::class, 'proddel']); //Удаление продукта из базы данных

//админ-категория

Route::get('/admin/category', function () {
    return view('makecategory');
}); //Форма создания категории

Route::post('/admin/category/create', [App\Http\Controllers\admin::class, 'makecategory'])->name('makecategory'); // Отправка данных категории в базу данных
Route::get('/admin/category/delete/{id}', [App\Http\Controllers\admin::class, 'categoriesdel']); //Удаление категории из базы данных
