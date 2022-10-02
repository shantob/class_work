<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('student/store', [StudentController::class, 'store'])->name('student.store');
Route::get('student/index', [StudentController::class, 'index'])->name('student.index');
Route::get('student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::patch('student/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('student/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');


// product................

Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
