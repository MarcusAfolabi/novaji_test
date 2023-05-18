<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/', [ProductController::class, 'store'])->name('products.store');
    Route::get('/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});

Route::group(['prefix' => 'product-categories'], function () {
    Route::get('/', [ProductCategoryController::class, 'index'])->name('product_categories.index');
    Route::get('/create', [ProductCategoryController::class, 'create'])->name('product_categories.create');
    Route::post('/', [ProductCategoryController::class, 'store'])->name('product_categories.store');
    Route::get('/{productCategory}', [ProductCategoryController::class, 'show'])->name('product_categories.show');
    Route::get('/{productCategory}/edit', [ProductCategoryController::class, 'edit'])->name('product_categories.edit');
    Route::put('/{productCategory}', [ProductCategoryController::class, 'update'])->name('product_categories.update');
    Route::delete('/{productCategory}', [ProductCategoryController::class, 'destroy'])->name('product_categories.destroy');
});