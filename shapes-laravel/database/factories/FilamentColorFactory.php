<?php

namespace Database\Factories;

use App\Models\FilamentColor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FilamentColorFactory extends Factory
{
    protected $model = FilamentColor::class;

    public function definition()
    {
        return [
			'color_id' => $this->faker->name,
			'filament_id' => $this->faker->name,
        ];
    }
}
