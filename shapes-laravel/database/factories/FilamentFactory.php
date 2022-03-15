<?php

namespace Database\Factories;

use App\Models\Filament;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FilamentFactory extends Factory
{
    protected $model = Filament::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'price' => $this->faker->name,
        ];
    }
}
