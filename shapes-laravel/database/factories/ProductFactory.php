<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'slug' => $this->faker->name,
			'description' => $this->faker->name,
			'price' => $this->faker->name,
			'quantity' => $this->faker->name,
			'status' => $this->faker->name,
			'category_id' => $this->faker->name,
        ];
    }
}
