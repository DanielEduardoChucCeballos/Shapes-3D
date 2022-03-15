<?php

namespace Database\Factories;

use App\Models\PersonalInformation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PersonalInformationFactory extends Factory
{
    protected $model = PersonalInformation::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'lastname' => $this->faker->name,
			'business' => $this->faker->name,
			'address' => $this->faker->name,
			'email' => $this->faker->name,
			'phone' => $this->faker->name,
        ];
    }
}
