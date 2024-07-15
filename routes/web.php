<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('welcome');
});




// Routes for user management
Route::prefix('admin')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');         // Display all users
    Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');   // Show create form
    Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');       // Store new user
    Route::get('/users/{user}', [UserController::class, 'show'])->name('admin.users.show');     // Show single user
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');   // Show edit form
    Route::put('/users/{user}', [UserController::class, 'update'])->name('admin.users.update');   // Update user
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy'); // Delete user
});









