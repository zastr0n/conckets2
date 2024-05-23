<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //route user
    Route::get('/users', [UsersController::class, 'index'])->name('users');
    Route::get('/create-users', [UsersController::class, 'add'])->name('users.add');
    Route::post('/create-users', [UsersController::class, 'create'])->name('users.create');
    Route::get('/users/{id}', [UsersController::class, 'edit'])->name('users.edit');
    Route::post('/users', [UsersController::class, 'update'])->name('users.update');
    Route::get('/users-delete/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
});

require __DIR__ . '/auth.php';
