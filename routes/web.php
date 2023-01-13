<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\common\CommonController;
use App\Http\Controllers\User\UserController;
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


Route::group(['middleware' => ['prevent-back-history']], static function () {

    Auth::routes();
    Route::get('/', [CommonController::class, 'index'])->name('index');
    Route::get('/home', [CommonController::class, 'dashboard'])->name('home');
    //logout
    Route::get('log-out', [CommonController::class, 'logout'])->name('log-out');


    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::group(['middleware' => ['auth', 'role-check:admin']], static function () {
            Route::get('/', [AdminController::class, 'index'])->name('home');
            Route::get('dashboard', [AdminController::class, 'index'])->name('index');
            Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
                Route::post('/store', [CategoryController::class, 'store'])->name('store');
                Route::get('/destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy');
            });
        });
    });

    Route::group(['prefix' => '', 'as' => 'user.'], function () {
        Route::group(['middleware' => ['auth', 'role-check:users']], static function () {
            Route::get('/', [UserController::class, 'index'])->name('home');
            Route::get('dashboard', [UserController::class, 'index'])->name('index');
        });
    });
});
