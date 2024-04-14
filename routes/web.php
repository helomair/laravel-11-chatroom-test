<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return redirect()->route('rooms.index');
    // return view('welcome');
});


Route::middleware('guest')->group(function () {
    Route::get('/register', [UserController::class, 'create'])->name('register.create');
    Route::post('/register', [UserController::class, 'store'])->name('register.store');

    Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});

Route::middleware('auth')->group(function () {
    // Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::resource('/rooms', RoomController::class);
    Route::post('/message', [MessageController::class, 'store'])->name('message.store');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
