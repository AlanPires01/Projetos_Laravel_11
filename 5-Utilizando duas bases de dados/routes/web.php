<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;




Route::get('/',[UserController::class,'index'])->name('user.index');
Route::get('/products',[ProductController::class,'index'])->name('product.index');