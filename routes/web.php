<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
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
