<?php

namespace Tests\Feature;

use App\Http\Controllers\CurrencyExchangeController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CurrencyExchangeControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_currency()
    {
        $response = $this->postJson('/api/store-currency', ['currency_name' => 'EUR']);

        $response->assertStatus(200)
            ->assertJson(['name' => 'EUR']);
    }
}
