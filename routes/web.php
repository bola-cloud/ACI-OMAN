<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group([
    'prefix' => LaravelLocalization::setLocale(), // Set the language prefix correctly
    'middleware' => [
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ]
], function () {
    Route::get('/admin', [\App\Http\Controllers\Admin\Dashboard::class, 'index'])->name('dashboard');
});

Route::group([
    'prefix' => LaravelLocalization::setLocale(), // Set the language prefix correctly
], function () {
    Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index'])->name('home');
    Route::get('/contact', [\App\Http\Controllers\Front\ContactController::class, 'index'])->name('contact');
    Route::get('/about', [\App\Http\Controllers\Front\AboutController::class, 'index'])->name('about');
});
// Language switch route
Route::get('lang/{lang}', function ($lang) {
    // Store the selected language in session
    session(['locale' => $lang]);
    app()->setLocale($lang); // Set the locale explicitly
    return redirect()->back(); // Redirect back to the previous page
})->name('lang.switch');
