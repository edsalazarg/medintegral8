<?php

namespace Database\Factories;

use App\Models\Allergies;
use Illuminate\Database\Eloquent\Factories\Factory;

class AllergiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Allergies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'allergy' => $this->faker->sentence
        ];
    }
}
