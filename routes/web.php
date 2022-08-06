<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    AdminController,
    UserController
};

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});


Route::get('/', function () {
    return view('welcome');
});
