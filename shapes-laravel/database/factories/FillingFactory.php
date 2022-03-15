<?php

namespace Database\Factories;

use App\Models\Filling;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FillingFactory extends Factory
{
    protected $model = Filling::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'price' => $this->faker->name,
        ];
    }
}
