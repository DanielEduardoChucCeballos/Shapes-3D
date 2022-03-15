<?php

namespace Database\Factories;

use App\Models\Finish;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FinishFactory extends Factory
{
    protected $model = Finish::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'price' => $this->faker->name,
        ];
    }
}
