<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsychQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psych_questionnaires', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('self_employed', ["NA","No","Si"]);
            $table->enum('family_history', ["No", "Si"]);
            $table->enum('treatment', ["No","Si"]);
            $table->enum('work_interfere', ["NA","Nunca","Frecuentemente","Raramente","Algunas veces"]);
            $table->unsignedInteger('no_employees');
            $table->enum('remote_work', ["No","Si"]);
            $table->enum('tech_company', ["No","Si"]);
            $table->enum('benefits', ["Si","No se", "No"]);
            $table->enum('care_options', ["Si","No estoy seguro", "No"]);
            $table->enum('wellness_program', ["Si","No se", "No"]);
            $table->enum('seek_help', ["Si","No se", "No"]);
            $table->enum('anonymity', ["Si","No se", "No"]);
            $table->enum('leave', ["No se","Muy dificil", "Algo Dificl", "Algo Facil", "Muy facil"]);
            $table->enum('mentalhealthconsequence', ["Si","A lo mejor", "No"]);
            $table->enum('physhealthconsequence', ["Si","A lo mejor", "No"]);
            $table->enum('coworkers', ["Si","Algunos de ellos", "No"]);
            $table->enum('supervisor', ["Si","Algunos de ellos", "No"]);
            $table->enum('mentalhealthinterview', ["Si","A lo mejor", "No"]);
            $table->enum('physhealthinterview', ["Si","A lo mejor", "No"]);
            $table->enum('mentalvsphysical', ["Si","No se", "No"]);
            $table->enum('obs_consequence', ["No", "Si"]);
            $table->foreignId('patient_id')->unique()->constrained('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psych_questionnaires');
    }
}
