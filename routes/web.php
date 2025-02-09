<?php

use App\Http\Controllers\BrowseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/browse', [BrowseController::class, 'index'])->name('browse');
    Route::prefix('/browse')->group(function () {
        Route::get('/series', [BrowseController::class, 'series'])->name('series');
        Route::get('/movies', [BrowseController::class, 'movies'])->name('movies');
        Route::get('/mylist', [BrowseController::class, 'mylist'])->name('mylist');
    });
});


Route::view('/account', 'account')->middleware(['auth'])->name('account');
