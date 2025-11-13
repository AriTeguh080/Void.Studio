<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Removed duplicate dashboard route

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user/profile', [ProfileController::class, 'edit'])->name('user.profile');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

// Routes untuk user
Route::middleware(['auth', 'checkrole:user'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::post('/favorite/{article}', [UserController::class, 'addFavorite'])->name('favorite.add');
    Route::get('/favorites', [UserController::class, 'favorites'])->name('favorites');
});

// Routes untuk admin
Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::put('/admin/article/{article}/update', [AdminController::class, 'updateArticle'])->name('admin.updateArticle');
    Route::post('/admin/article/create', [AdminController::class, 'createArticle'])->name('admin.createArticle');
});

Route::get('/voidline', function () {
    return view('voidline');
});

Route::get('/abysswhisper', function () {
    return view('abysswhisper');
});

Route::get('/eternalfade', function () {
    return view('eternalfade');
});

Route::get('/nocturne', function () {
    return view('nocturne');
});
