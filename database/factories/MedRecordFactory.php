<?php

namespace Database\Factories;

use App\Models\Allergies;
use App\Models\MedRecord;
use App\Models\Surgeries;
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
            'pregnancies' => $this->faker->numberBetween(0, 4),
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (MedRecord $medRecord) {

        })->afterCreating(function (MedRecord $medRecord) {
            $medRecord->surgeries()->save(Surgeries::factory()->make());
            $medRecord->allergies()->save(Allergies::factory()->make());
        });
    }


}
