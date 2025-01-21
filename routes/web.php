<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\customerProductController;
use App\Http\Controllers\cutomerOrderController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('CraftsNepal/index');
// });
Route::resource('/',UserProductController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/', function () {
    //     return view('admin.index');
    // })->name('admin.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/cart', [cartcontroller::class, 'cartPage'])->name('cart.page');
Route::post('/cart/add', [cartController::class, 'addToCart'])->name('cart.add');
Route::patch('/cart/{id}/update', [CartController::class, 'update'])->name('cart.update');

Route::delete('/cart/remove/{id}', [cartController::class, 'remove'])->name('cart.remove');

Route::get('/checkout', [cartController::class, 'checkout'])->name('cart.checkout');
Route::post('/order/place', [cartController::class, 'placeOrder'])->name('order.place');
Route::resource('userproduct',customerProductController::class);
Route::resource('userorder',cutomerOrderController::class);
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('admin/file', FileController::class);
    Route::resource('/productCategory', ProductCategoryController::class);
    Route::resource('product',productController::class);
});

require __DIR__ . '/auth.php';
