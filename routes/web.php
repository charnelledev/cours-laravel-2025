<?php

use App\http\Controllers\productController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[productController::class,'index']);

Route::get('/product/create' ,function ()
{
    return view('pages.products.create')->name('product.create');
});