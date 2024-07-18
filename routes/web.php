<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontControllr;

Route::prefix('admin')->group(function () {
    Route::get('login', [HomeController::class, 'login'])->name('login');
    Route::post('/login', [HomeController::class, 'authenticate']);
    Route::get('/index',[HomeController::class,'show'])->name('home.index');
    Route::get('/create', [HomeController::class, 'create'])->name('home.create');
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('home.edit');
    Route::delete('delete',[HomeController::class,'destory'])->name('delete');

   
});

Route::get('index',[FrontControllr::class, 'front'])->name('index');

