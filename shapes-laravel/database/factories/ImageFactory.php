<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition()
    {
        return [
			'image' => $this->faker->name,
			'product_id' => $this->faker->name,
        ];
    }
}
