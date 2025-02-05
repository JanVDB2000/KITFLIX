<?php

use App\Http\Controllers\BrowseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Redirect automatisch naar de standaardtaal als er geen taal in de URL staat
Route::get('/', function () {
    $defaultLang = Config::get('languages.default', 'nl');
    return redirect("/$defaultLang");
});
// Dynamische routes met taalprefix en middleware
Route::middleware([SetLocale::class])->group(function () {
    Route::prefix('{locale}/')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/browse', [BrowseController::class, 'index'])->name('browse');
    });
});
