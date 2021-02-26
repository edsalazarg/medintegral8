<?php

namespace Database\Factories;

use App\Models\Surgeries;
use Illuminate\Database\Eloquent\Factories\Factory;

class SurgeriesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Surgeries::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'surgery' => $this->faker->sentence,
            'date' => $this->faker->date()
        ];
    }
}
