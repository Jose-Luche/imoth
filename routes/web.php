<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

Route::prefix('users')->middleware('auth')->group(base_path('routes/web/user.php'));
Route::prefix('clients')->middleware('auth')->group(base_path('routes/web/client.php'));
Route::prefix('agents')->middleware('auth')->group(base_path('routes/web/agent.php'));
