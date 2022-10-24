<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\FrontController;



Route::get('/',[FrontController::class,'home'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index']) ->name('dashboard');
    Route::get('/add-product',[ProductController::class,'addProduct'])->name('add-product');
    Route::post('/new-product',[ProductController::class,'newProduct'])->name('new-product');
    Route::get('/manage-product',[ProductController::class,'manageProduct'])->name('manage-product');
    Route::get('/edit-product/{id}',[ProductController::class,'edit'])->name('edit-product');
    Route::post('/update-product/',[ProductController::class,'update'])->name('update-product');
    Route::get('/delete-product/{id}',[ProductController::class,'deleteProduct'])->name('delete-product');


});





