<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentsController;

Route::get('/view', [AgentsController::class, 'viewAg'])->name('ag.view');
Route::get('/add', [AgentsController::class, 'addAg'])->name('ag.add');

Route::post('/store', [AgentsController::class, 'storeAg'])->name('ag.store');
Route::get('/edit/{id}', [AgentsController::class, 'editAg'])->name('ag.edit');

Route::post('/update/{id}', [AgentsController::class, 'updateAg'])->name('ag.update');
