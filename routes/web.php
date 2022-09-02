<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    AdminController,
    UserController
};

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.home');

    /**
     * Routes Admin
     */
    Route::resource('/admins', AdminController::class);
    Route::put('/admins/{id}/update-image', [AdminController::class, 'uploadFile'])->name('admins.update.image');
    Route::get('/admins/{id}/image', [AdminController::class, 'changeImage'])->name('admins.change.image');

    /**
     * Routes Users
     */
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{id}', [UserController::class , 'destroy'])->name('users.destroy');
    Route::put('/users/{id}/update-image', [UserController::class, 'uploadFile'])->name('users.update.image');
    Route::get('/users/{id}/image', [UserController::class, 'changeImage'])->name('users.change.image');
});


Route::get('/', function () {
    return view('welcome');
});
