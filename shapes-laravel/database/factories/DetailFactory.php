<?php

namespace Database\Factories;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DetailFactory extends Factory
{
    protected $model = Detail::class;

    public function definition()
    {
        return [
			'height' => $this->faker->name,
			'length' => $this->faker->name,
			'width' => $this->faker->name,
			'price' => $this->faker->name,
			'filament_color_id' => $this->faker->name,
			'filling_id' => $this->faker->name,
			'finish_id' => $this->faker->name,
        ];
    }
}
