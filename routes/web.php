<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.index'); // Ensure this view exists
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function () {
    return redirect()->route('dashboard');
});

// Group all RoomController routes under 'auth' and 'verified' middleware
Route::middleware(['auth', 'verified'])->controller(RoomController::class)->group(function () {
    Route::get('/room/list', 'index')->name('rooms.list');
    // Add more RoomController routes here if needed
});

require __DIR__.'/auth.php';
