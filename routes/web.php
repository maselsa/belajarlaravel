<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\OrdersController;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create',[App\Http\Controllers\SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa',[App\Http\Controllers\SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'show'])->name('siswa.show');
Route::get('/siswa/{id}/edit', [App\Http\Controllers\SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'destroy'])->name('siswa.destroy');
Route::resource('/category', \App\Http\Controllers\CategoryController::class);
Route::resource('/articles', App\Http\Controllers\ArticleController::class);

Route::resource('mobil', MobilController::class);

Route::resource('suppliers', SuppliersController::class);
Route::resource('products', ProductsController::class);
Route::resource('customers', CustomersController::class);
Route::resource('orders', OrdersController::class);

