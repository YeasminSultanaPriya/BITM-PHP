<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FullNameController;
use App\Http\Controllers\CalculatorController;

//Route::get('/',function (){
//    return(view('welcome'));
//});

//Route::get('/bitm',[StudentController:: class,'index']);
Route::get('/about',[HomeController:: class,'about']);
Route::get('/students',[HomeController:: class,'students'])->name('students');
Route::get('/student-details/{id}',[StudentController:: class,'student_details'])->name('student-details');
Route::get('/full-name',[FullNameController:: class,'index'])->name('full-name');
Route::post('/get-full-name',[FullNameController:: class,'getFullName'])->name('get-full-name');
Route::get('/calculator',[CalculatorController:: class,'calculator'])->name('calculator');
Route::post('/get-result',[CalculatorController:: class,'getResult'])->name('get-result');

Route::get('/masterOne',[HomeController::class,'in']);
Route::get('/',[HomeController::class,'home'])->name('home');

