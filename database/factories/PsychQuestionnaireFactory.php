<?php

namespace Database\Factories;

use App\Models\PsychQuestionnaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class PsychQuestionnaireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PsychQuestionnaire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'self_employed' => $this->faker->randomElement(["NA","No","Si"]),
            'family_history' => $this->faker->randomElement(["No", "Si"]),
            'work_interfere' => $this->faker->randomElement(["NA","Nunca","Frecuentemente","Raramente","Algunas veces"]),
            'no_employees' => $this->faker->randomElement(['6-25', 'Mas de 1000' ,'26-100', '100-500', '1-5', '500-1000']),
            'remote_work' => $this->faker->randomElement(["No","Si"]),
            'tech_company' => $this->faker->randomElement(["No","Si"]),
            'benefits' => $this->faker->randomElement(["Si","No se", "No"]),
            'care_options' => $this->faker->randomElement(["Si","No estoy seguro", "No"]),
            'wellness_program' => $this->faker->randomElement(["Si","No se", "No"]),
            'seek_help' => $this->faker->randomElement(["Si","No se", "No"]),
            'anonymity' => $this->faker->randomElement(["Si","No se", "No"]),
            'leave' => $this->faker->randomElement(["No se","Muy dificil", "Algo Dificl", "Algo Facil", "Muy facil"]),
            'mentalhealthconsequence' => $this->faker->randomElement(["Si","A lo mejor", "No"]),
            'physhealthconsequence' => $this->faker->randomElement(["Si","A lo mejor", "No"]),
            'coworkers' => $this->faker->randomElement(["Si","Algunos de ellos", "No"]),
            'supervisor' => $this->faker->randomElement(["Si","Algunos de ellos", "No"]),
            'mentalhealthinterview' => $this->faker->randomElement(["Si","A lo mejor", "No"]),
            'physhealthinterview' => $this->faker->randomElement(["Si","A lo mejor", "No"]),
            'mentalvsphysical' => $this->faker->randomElement(["Si","No se", "No"]),
            'obs_consequence' => $this->faker->randomElement(["No", "Si"])
        ];
    }
}
