<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\publicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [publicController::class, 'index'])->name('home');
Route::get('/products/{id}' , [publicController::class, 'show'])->name('products.show');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/admin/products/{id}', [ProductController::class, 'show'])->name('admin.products.show');
    Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
    Route::post('/admin/products/{id}/restore', [ProductController::class, 'restore'])->name('admin.products.restore');
    Route::resources(['admin/categories' => CategoryController::class]);
    Route::post('/admin/categories/{id}/restore', [CategoryController::class, 'restore'])->name('admin.categories.restore');
});

require __DIR__ . '/auth.php';
