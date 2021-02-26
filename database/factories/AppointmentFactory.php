<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'location' => $this->faker->country,
            'transfer' => $this->faker->randomElement(['CUCEI', 'IMSS', 'ISSTE', 'SMM', 'CRM', 'PRIVADO', 'SE NIEGA']),
            'notes' => $this->faker->paragraph(),
            'blood_pressure' => $this->faker->randomNumber(2),
            'heart_rate' => $this->faker->randomNumber(2),
            'rheumatoid_factor' => $this->faker->randomNumber(2),
            'temperature' => $this->faker->randomNumber(2),
            'sat_o2' => $this->faker->randomNumber(2),
            'glucose' => $this->faker->randomNumber(2),
            'glasgow' => $this->faker->randomNumber(2),
            'neurologic' => $this->faker->sentence(10),
            'head' => $this->faker->sentence(10),
            'neck' => $this->faker->sentence(10),
            'cardiopulmonary' => $this->faker->sentence(10),
            'abdomen' => $this->faker->sentence(10),
            'extremities' => $this->faker->sentence(10),
            'diagnosis' => $this->faker->sentence(10),
            'condition' => $this->faker->sentence(10),
            'treatment' => $this->faker->sentence(10),
            'forecast' => $this->faker->sentence(10),
        ];
    }

//Appointment::factory()->make(['patient_id'=>2])->save()
}
