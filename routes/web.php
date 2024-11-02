<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{
    AuthController,
    HomeController,
    AlbumController,
};

Route::redirect('/', '/auth/login');
Route::controller(AuthController::class)->group(function() {
    
}); 

Route::controller(AuthController::class)->group(function () {
    Route::get('auth/login', 'showLoginForm')->name('login')->middleware('guest');
    Route::post('auth/login', 'postLogin')->name('postLogin');
    Route::post('logout', 'logout')->name('logout');
    Route::get('auth/register', 'showRegistrationForm')->name('register.form');
    Route::post('auth/register', 'register')->name('register');
});
