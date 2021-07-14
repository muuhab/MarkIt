<?php

namespace Tests\Unit;

use App\Http\Controllers\ProductsController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_showing_product()
    {   
        // $this->withoutExceptionHandling();
        $product=Product::factory()->create();
        $shows=(new ProductsController())->show($product->id);
        $this->assertNotEmpty($shows);
    }

    // public function test_deleting_product()
    // {
    //     $user=User::factory()->create();
    //     $this->actingAs($user);
    //     $product=Auth()->user()->product->factory()->create();
    //     (new ProductsController())->destroy($product->id);
    //     $this->assertDatabaseMissing('products',['id'=>$product->id]);

    // }

   
}
