<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;


Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/add-blog', [BlogController::class,'addBlog'])->name('add-blog');
Route::post('/new-blog', [BlogController::class,'newBlog'])->name('new-blog');
Route::get('/manage-blog', [BlogController::class,'manageBlog'])->name('manage-blog');
Route::get('/delete-blog/{id}', [BlogController::class,'deleteBlog'])->name('delete-blog');
Route::get('/edit-blog/{id}', [BlogController::class,'editBlog'])->name('edit-blog');
Route::post('/update-blog/', [BlogController::class,'updateBlog'])->name('update-blog');
Route::get('/details-blog/{id}', [HomeController::class,'detailsBlog'])->name('details-blog');

