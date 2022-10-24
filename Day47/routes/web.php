<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogSubCategoryController;

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
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('/add-blog-category', [BlogCategoryController::class,'addCategory'])->name('add-blog-category');
    Route::post('/new-blog-category', [BlogCategoryController::class,'newCategory'])->name('new-blog-category');
    Route::get('/manage-blog-category', [BlogCategoryController::class,'manageCategory'])->name('manage-blog-category');
    Route::get('/edit-blog-category/{id}', [BlogCategoryController::class,'editCategory'])->name('edit-blog-category');
    Route::post('/update-blog-category/{id}', [BlogCategoryController::class,'updateCategory'])->name('update-blog-category');
    Route::get('/delete-blog-category/{id}', [BlogCategoryController::class,'deleteCategory'])->name('delete-blog-category');

    Route::resource('blog-sub-categories', BlogSubCategoryController::class);
});
