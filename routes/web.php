<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group.
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pemerintahan', function () {
    return view('pemerintahan');
});

Route::get('/potensi', function () {
    return view('potensi');
});

Route::get('/peta-gis', function () {
    return view('peta');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kontak', function () {
    return view('kontak');
});