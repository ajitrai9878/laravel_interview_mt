<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CustomAuth\LoginController;
use App\Http\Controllers\common\CommonController;
use App\Http\Controllers\CustomAuth\PasswordController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Middleware\CustomCheck;
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


Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('contact-us', [FrontendController::class, 'contactUs'])->name('contactUs');
Route::post('contact-us/save', [FrontendController::class, 'contactUsSave'])->name('contactUsSave');

Route::middleware([CustomCheck::class])->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::post('cms/update', [AdminController::class, 'cmsUpdate'])->name('cmsUpdate');
    Route::get('password/reset', [PasswordController::class, 'password'])->name('password.reset');
    Route::post('password/update', [PasswordController::class, 'passwordUpdate'])->name('password.update');
});

//custom Auth
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('admin', [LoginController::class, 'index'])->name('login');
Route::post('adminLogin', [LoginController::class, 'adminLogin'])->name('adminLogin');

//logout
Route::get('log-out', [CommonController::class, 'logout'])->name('log-out');

