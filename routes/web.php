<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ReportController;
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

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('mobil')->group(function () {
        Route::get('index',[MobilController::class,'index'])->name('mobil_index');
        Route::post('add',[MobilController::class,'add'])->name('mobil_add');
        Route::get('delete/{id}',[MobilController::class,'delete'])->name('mobil_delete');
        Route::get('edit/{id}',[MobilController::class,'edit'])->name('mobil_edit');
        Route::post('update/{id}',[MobilController::class,'update'])->name('mobil_update');

        Route::get('optionlist',[MobilController::class,'optionlist'])->name('mobil_optionlist');

    });

    Route::prefix('penjualan')->group(function () {
        Route::get('index',[PenjualanController::class,'index'])->name('penjualan_index');
        Route::post('add',[PenjualanController::class,'add'])->name('penjualan_add');
        // Route::get('delete/{id}',[PenjualanController::class,'delete'])->name('penjualan_delete');
        // Route::get('edit/{id}',[PenjualanController::class,'edit'])->name('penjualan_edit');
        // Route::post('update/{id}',[PenjualanController::class,'update'])->name('penjualan_update');
    });

    Route::prefix('report')->group(function (){
        Route::get('today',[ReportController::class,'today'])->name('report_today');

    });
});
