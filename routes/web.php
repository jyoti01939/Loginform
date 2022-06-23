<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('create',[ProductController::class,'index'])->name('create.product');
Route::post('create',[ProductController::class,'create'])->name('create.product');
Route::get('edit/{id}',[ProductController::class,'edit'])->name('edit.product');
Route::post('edit/{id}',[ProductController::class,'update'])->name('edit.product');
Route::get('view/{id}',[ProductController::class,'view'])->name('view.product');
Route::get('delete/{id}',[ProductController::class,'delete'])->name('delete.product');
