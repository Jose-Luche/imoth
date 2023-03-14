<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;

Route::get('/view', [ClientsController::class, 'viewCl'])->name('client.view');
Route::get('/add', [ClientsController::class, 'addCl'])->name('client.add');

Route::post('/store', [ClientsController::class, 'storeCl'])->name('client.store');
Route::get('/edit/{id}', [ClientsController::class, 'editCl'])->name('client.edit');

Route::post('/update/{id}', [ClientsController::class, 'updateCl'])->name('client.update');
