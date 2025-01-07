<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ForumController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;


Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
});

Route::middleware('auth')->group(function () {



    Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
    Route::get('/forum/{thread}', [ThreadController::class, 'show'])->name('forum.show');
    Route::post('/forum', [ForumController::class, 'store'])->name('forum.store');
    Route::post('/forum/{thread}/post', [ThreadController::class, 'storePost'])->name('thread.storePost');
});

Route::get('/', function () {
    return view('welcome');
})->name('home');
