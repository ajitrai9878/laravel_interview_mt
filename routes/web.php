<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\common\CommonController;
use App\Http\Middleware\CustomCheck;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', [CommonController::class, 'index'])->name('index');

Route::middleware([CustomCheck::class])->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
});

//logout
Route::get('log-out', [CommonController::class, 'logout'])->name('log-out');


