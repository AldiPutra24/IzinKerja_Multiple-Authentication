<?php

use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\PaymentAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'account'],function(){

    Route::group(['middleware' => 'guest'],function(){
        Route::get('login',[LoginController::class, 'index'])->name('account.login');
        Route::get('register',[LoginController::class, 'register'])->name('account.register');
        Route::post('process-register',[LoginController::class, 'processRegister'])->name('account.processRegister');
        Route::post('authenticate',[LoginController::class, 'authenticate'])->name('account.authenticate');
    });

    Route::group(['middleware' => 'auth'],function(){
        Route::get('logout',[LoginController::class, 'logout'])->name('account.logout');
        Route::get('dashboard',[DashboardController::class, 'index'])->name('account.dashboard');

        // Upload bukti transfer
        Route::get('payment/upload', [PaymentController::class, 'create'])->name('account.payment.upload');
        Route::post('payment/upload', [PaymentController::class, 'store'])->name('account.payment.store');
    });
});

Route::group(['prefix' => 'admin'],function(){

    Route::group(['middleware' => 'admin.guest'],function(){
        Route::get('login',[AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('authenticate',[AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'],function(){
        Route::get('dashboard',[AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout',[AdminLoginController::class, 'logout'])->name('admin.logout');

        // Manajemen bukti transfer
        Route::get('payments', [PaymentAdminController::class, 'index'])->name('admin.payments');
        Route::put('payment/{id}/update-status', [PaymentAdminController::class, 'updateStatus'])->name('admin.payment.updateStatus');
    });
});
