<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PemesananController;
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
    //route ticket
    Route::get('/tickets', [TicketController::class, 'index'])->name('tickets');
    Route::get('/create-tickets', [TicketController::class, 'add'])->name('tickets.add');
    Route::post('/create-tickets', [TicketController::class, 'create'])->name('tickets.create');
    Route::get('/tickets/{id}', [TicketController::class, 'edit'])->name('tickets.edit');
    Route::post('/tickets', [TicketController::class, 'update'])->name('tickets.update');
    Route::get('/tickets-delete/{id}', [TicketController::class, 'destroy'])->name('tickets.destroy');
    //route transaksi
    Route::get('/transaksi', [PemesananController::class, 'index'])->name('transaksi');
    Route::get('/transaksi/update', [PemesananController::class, 'update'])->name('transaksi.update');
});
 
Route::get('/home', function () {
    return view('home');    
})->name('home');
Route::get('/lineup', function () {
    return view('lineup');    
})->name('lineup');
Route::get('/schedule', function () {
return view('schedule');    
})->name('schedule');
Route::get('/about', function () {
    return view('about');    
})->name('about');
Route::get('/faq', function () {
    return view('faq');    
})->name('faq');

require __DIR__ . '/auth.php';
