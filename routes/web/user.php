<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;

//User Routes
Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
Route::get('/add', [UserController::class, 'UserAdd'])->name('user.add');

Route::post('/store', [UserController::class, 'UserStore'])->name('user.store');
Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('user.edit');

Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('user.update');
