<?php

namespace Database\Factories;

use App\Models\DescriptionModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DescriptionModelFactory extends Factory
{
    protected $model = DescriptionModel::class;

    public function definition()
    {
        return [
			'model' => $this->faker->name,
			'description' => $this->faker->name,
        ];
    }
}
