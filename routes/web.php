<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;




//Backend
//master
Route::get('/',[MasterController::class,'master'])->name('backend.master');
//product
Route::get('/product',[ProductController::class,'product'])->name('backend.product');
//category
Route::get('/category',[CategoryController::class,'category'])->name('backend.category');
//customer
Route::get('/customer',[CustomerController::class,'customer'])->name('backend.customer');
//order
Route::get('/order',[OrderController::class,'order'])->name('backend.order');


