<?php

use App\Http\Controllers\BrowseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/browse', [BrowseController::class, 'index'])->name('browse');
    Route::prefix('/browse')->group(function () {
        Route::get('/series', [BrowseController::class, 'index'])->name('series');
        Route::get('/movies', [BrowseController::class, 'index'])->name('movies');
        Route::get('/latest', [BrowseController::class, 'index'])->name('latest');
        Route::get('/mylist', [BrowseController::class, 'index'])->name('mylist');
        Route::get('/lang', [BrowseController::class, 'index'])->name('lang');
    });
});


Route::view('/account', 'account')->middleware(['auth'])->name('account');
