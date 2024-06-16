<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CurrencyExchangeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



// routes/api.php


Route::post('/store-currency', [CurrencyExchangeController::class, 'storeCurrency']);
Route::get('/update-exchange-rates', [CurrencyExchangeController::class, 'updateExchangeRatesDaily']);
Route::get('/exchange-rates-by-date', [CurrencyExchangeController::class, 'getExchangeRatesByDate']);
