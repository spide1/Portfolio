<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/admin', [AdminController::class, 'home'])->name('home.login');
Route::get('/admin/create', [AdminController::class, 'create'])->name('home.create');
Route::get('/admin/index', [AdminController::class, 'index'])->name('home.index');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('home.edit');
Route::post('/upload', [AdminController::class, 'upload'])->name('home.view');
Route::put('/update/{id}', [AdminController::class, 'update'])->name('update');


Route::get('/home/login', [HomeController::class, 'login'])->name('home.login');
Route::post('/home/login', [HomeController::class, 'authenticate'])->name('home.authenticate');