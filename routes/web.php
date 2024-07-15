<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'home'])->name('home.login');
Route::get('/admin/create', [AdminController::class, 'create'])->name('home.view');
Route::get('/admin/index', [AdminController::class, 'index'])->name('home.view');
Route::post('/upload', [AdminController::class, 'upload'])->name('home.view');

Route::get('/home/login', [HomeController::class, 'login'])->name('home.login');
Route::post('/home/login', [HomeController::class, 'authenticate'])->name('home.authenticate');