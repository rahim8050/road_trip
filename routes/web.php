<?php

use App\Http\Controllers\VerifyEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/login', [LogInController::class, 'login'])->name('login');

Route::get('/signup', [SignupController::class, 'signup'])->name('signup');

Route::get('/verifyEmail', [VerifyEmail::class, 'verifyEmail'])->name('verifyEmail');
