<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'about' => $this->faker->sentence,
            'price' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'product_image' => $this->faker->imageUrl(),
            'cat' => $this->faker-> randomElement(['Supermarket', 'Fashion', 'Health & Beauty', 'Phones & Tablets', 'Home & Office', 'Books', 'Electronics']),
        ];
    }
}
