<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;

Route::get('/', function () {
    return view('index');
});


Route::get('/prodi/{slug}', [ProdiController::class, 'show'])->name('prodi.show');

// AE Informasi
Route::get('/ae-informasi', function () { return view('guest.informasi.index'); })->name('informasi.index');
Route::get('/ae-informasi/detail', function () { return view('guest.informasi.show'); })->name('informasi.show');

// AE Pustaka (Library)
Route::get('/library', function () { return view('guest.library.index'); })->name('library.index');
Route::get('/library/detail', function () { return view('guest.library.show'); })->name('library.show');
