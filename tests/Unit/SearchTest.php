<?php

namespace Tests\Unit;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SearchTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_searching_product()
    {
        Product::factory()->create(['name' => 'asdf']);
        $response = $this->call('GET', '/search', ["search" => "asdf"]);
        $response->assertSee('asdf');
    }
    public function test_searching_product_fail()
    {
        Product::factory()->create(['name' => 'asdf']);
        $response = $this->call('GET', '/search', ["search" => 2]);
        $response->assertDontSee('asdf');
    }
}
