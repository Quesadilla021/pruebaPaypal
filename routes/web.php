<?php

use App\Http\Controllers\PaymentController;
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

    Route::get('/', [PaymentController::class, 'getInicio'])->name('inicio');
    Route::get('/paypal/pay', [PaymentController::class, 'payWithPayPal'])->name('paypalll');
    Route::get('/paypal/status', [PaymentController::class, 'payPalStatus'])->name('paypalllStatus');


