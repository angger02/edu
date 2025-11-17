
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/program-detail', function () {
    return view('program-detail');
})->name('program.detail');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::fallback(function () {
    return view('404');
});

Route::get('/program/{id}', fn($id) => view('program-detail', ['id' => $id]))->name('program.detail');

