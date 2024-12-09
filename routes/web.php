<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/shop', function () {
    return view('frontend.shop'); // Points to shop.blade.php
})->name('shop');


Route::get('/collection', function () {
    return view('frontend.collection'); // Points to collection.blade.php
})->name('collection');


Route::get('/magazine', function () {
    return view('frontend.magazine'); // Points to collection.blade.php
})->name('magazine');


Route::get('/contact', function () {
    return view('frontend.contact'); // Points to collection.blade.php
})->name('contact');


Route::get('/about', function () {
    return view('frontend.about'); // Points to collection.blade.php
})->name('about');

Route::get('/faq', function () {
    return view('frontend.faq'); // Points to collection.blade.php
})->name('faq');

Route::get('/wishlist', function () {
    return view('frontend.wishlist'); // Points to collection.blade.php
})->name('wishlist');

Route::get('/account', function () {
    return view('frontend.account'); // Points to collection.blade.php
})->name('account');

Route::get('/cart', function () {
    return view('frontend.cart'); // Points to collection.blade.php
})->name('cart');

Route::get('/checkout', function () {
    return view('frontend.checkout'); // Points to collection.blade.php
})->name('checkout');


Route::get('/single-product', function () {
    return view('frontend.single-product'); // Points to collection.blade.php
})->name('single-product');


Route::get('/single-blog', function () {
    return view('frontend.single-blog'); // Points to collection.blade.php
})->name('single-blog');