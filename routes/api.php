<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SmsController;

Route::post('/email', [EmailController::class, 'sendEmail'])->name('send-email');
Route::post('/sms', [SmsController::class, 'sendSms'])->name('send-sms');
