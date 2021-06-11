<?php

namespace Database\Factories;

use App\Models\Allergies;
use App\Models\Appointment;
use App\Models\MedRecord;
use App\Models\Patient;
use App\Models\PsychQuestionnaire;
use App\Models\Surgeries;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName,
            'email' => $this->faker->email,
            'department' => $this->faker->company,
            'age' => $this->faker->randomNumber(2),
            'position' => $this->faker->jobTitle,
            'telephone' => $this->faker->e164PhoneNumber,
            'emergency_contact' => $this->faker->e164PhoneNumber,
            'site' => $this->faker->randomElement(['CUCEI', 'PREPA#12', 'VOCA', 'POLITECNICO', 'CDU', 'EXTERIOR'])
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Patient $patient) {

        })->afterCreating(function (Patient $patient) {
            $patient->medrecord()->save(MedRecord::factory()->make());
            $patient->medrecord->surgeries()->save(Surgeries::factory()->make());
            $patient->medrecord->allergies()->save(Allergies::factory()->make());
            $patient->medrecord->surgeries()->save(Surgeries::factory()->make());
            $patient->medrecord->allergies()->save(Allergies::factory()->make());
            $patient->appointment()->save(Appointment::factory()->make());
            $patient->psychquestionnaires()->save(PsychQuestionnaire::factory()->make());
        });
    }
}
