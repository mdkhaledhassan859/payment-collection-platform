<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::post('/bill-payment', [PaymentController::class, 'pay']);
