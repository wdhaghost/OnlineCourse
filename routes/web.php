<?php

use App\Http\Controllers\CourseController;
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


Route::get('/',[CourseController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/add',[CourseController::class,'create'])->middleware(['auth', 'verified'])->name('addcourseform');
Route::post('/add',[CourseController::class,'store'])->middleware(['auth', 'verified'])->name('storecourse');

Route::get('/edit/{id}',[CourseController::class,'edit'])->middleware(['auth', 'verified'])->name('editcourse');
require __DIR__.'/auth.php';
