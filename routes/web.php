<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/listings', function () {
    // Return a view for listings page
    return view('listings');
});

Route::get('/create-listing', function () {
    // Return a view to create a new listing
    return view('create-listing');
});

Route::post('/store-listing', [ListingController::class, 'store'])->name('listings.store');
Route::get('/listings', [ListingController::class, 'index']);


