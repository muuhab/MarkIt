<?php

namespace Tests\Unit;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_homepage_render_correctly()
    {
        $this->withoutExceptionHandling();
        $product=Product::factory()->create(['name'=>'iphone']);
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Supermarket','iphone');
    }
    
}
