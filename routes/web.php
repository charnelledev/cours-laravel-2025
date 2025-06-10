<?php

use App\http\Controllers\productController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[productController::class,'index'])->name('products.index');
Route::get('/products/create', [productController::class, 'create'])->name('products.create');
Route::post('/products/store', [productController::class, 'store'])->name('products.store');

// Route::get('/product/create' ,function ()
// {
//     return view('pages.products.create')->name('product.create');
// });