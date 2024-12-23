<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;

// Route for the home page (index)
Route::get('/', [StaticPageController::class, 'index'])->name('home');

// Routes for other static pages
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
