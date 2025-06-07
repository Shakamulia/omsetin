<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/prices', [productController::class, 'index'])->name('prices');
Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');
Route::get('/help', function () {
    return view('pages.help');
})->name('help');
Route::get('/omsetin-stok', function () {
    return view('pages.omsetin-stok');
})->name('omsetin-stok');

