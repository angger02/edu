
<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home'); // nanti buat file home.blade.php
});

// About
Route::get('/about', function () {
    return view('about');
});

// Group untuk Program
Route::prefix('program')->group(function () {
    // /program
    Route::get('/', function () {
        return view('program');
    });

    // /program/{id} → parameter
    Route::get('/{id}', function ($id) {
        return view('program-detail', ['id' => $id]);
    });
});

// Our Team
Route::get('/team', function () {
    return view('team');
});

// Contact Us
Route::get('/contact', function () {
    return view('contact');
});

// Redirect dari /old-contact → /contact
Route::get('/old-contact', function () {
    return redirect('/contact');
});

// Fallback (jika route tidak ditemukan)
Route::fallback(function () {
    return view('404');
});
