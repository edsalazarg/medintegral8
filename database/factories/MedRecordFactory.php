<?php

namespace Database\Factories;

use App\Models\MedRecord;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedRecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MedRecord::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'blood_group' => $this->faker->regexify('[A-Z.+-]'),
            'diabetes' => $this->faker->randomElement([0,1]),
            'hypertension' => $this->faker->randomElement([0,1]),
            'epilepsy' => $this->faker->randomElement([0,1]),
            'asthma' => $this->faker->randomElement([0,1]),
        ];
    }


}
