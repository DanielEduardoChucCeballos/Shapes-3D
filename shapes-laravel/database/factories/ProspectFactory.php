<?php

namespace Database\Factories;

use App\Models\Prospect;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProspectFactory extends Factory
{
    protected $model = Prospect::class;

    public function definition()
    {
        return [
			'detail_id' => $this->faker->name,
			'personal_information_id' => $this->faker->name,
			'description_model_id' => $this->faker->name,
        ];
    }
}
