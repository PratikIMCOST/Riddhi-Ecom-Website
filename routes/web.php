<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\ProfileController;

// Static Pages Routes
Route::get('/', [StaticPageController::class, 'index'])->name('home');
Route::get('/shop', [StaticPageController::class, 'shop'])->name('shop');
Route::get('/collection', [StaticPageController::class, 'collection'])->name('collection');
Route::get('/magazine', [StaticPageController::class, 'magazine'])->name('magazine');
Route::get('/contact', [StaticPageController::class, 'contact'])->name('contact');
Route::get('/about', [StaticPageController::class, 'about'])->name('about');
Route::get('/faq', [StaticPageController::class, 'faq'])->name('faq');
Route::get('/wishlist', [StaticPageController::class, 'wishlist'])->name('wishlist');
Route::get('/account', [StaticPageController::class, 'account'])->name('account');
Route::get('/cart', [StaticPageController::class, 'cart'])->name('cart');
Route::get('/checkout', [StaticPageController::class, 'checkout'])->name('checkout');
Route::get('/single-product', [StaticPageController::class, 'singleProduct'])->name('single-product');
Route::get('/single-blog', [StaticPageController::class, 'singleBlog'])->name('single-blog');

// Dashboard and Auth Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication Routes (Login, Register)
require __DIR__.'/auth.php';

use App\Http\Controllers\ProductController;

Route::get('/admin/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/admin/products', [ProductController::class, 'store'])->name('products.store');    

