<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\ExchangeRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyExchangeController extends Controller
{
    public function storeCurrency(Request $request)
    {
        $request->validate([
            'currency_name' => 'required|string|unique:currencies,name',
        ]);

        $currency = Currency::create([
            'name' => $request->input('currency_name'),
        ]);

        return response()->json($currency, 201);
    }

    public function updateExchangeRatesDaily()
    {
        $apiKey = config('services.exchange_rates.api_key');
        $response = Http::withOptions(['verify' => false])->get("https://v6.exchangerate-api.com/v6/{$apiKey}/latest/USD");

        if ($response->ok()) {
            $exchangeRates = $response->json()['conversion_rates'];

            foreach ($exchangeRates as $currency => $rate) {
                $currencyModel = Currency::firstOrCreate(['name' => $currency]);

                $exchangeRate = new ExchangeRate();
                $exchangeRate->currency_id = $currencyModel->id;
                $exchangeRate->rate = $rate;
                $exchangeRate->save();
            }
        }
    }

    public function getExchangeRatesByDate(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $date = $request->input('date');
        $exchangeRates = ExchangeRate::whereDate('created_at', $date)->get();

        return response()->json($exchangeRates);
    }
}
