<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('location',50);
            $table->enum('transfer', ['CUCEI', 'IMSS', 'ISSTE', 'SMM', 'CRM', 'PRIVADO', 'SE NIEGA']);
            $table->string('notes', 500);
            $table->integer('blood_pressure');
            $table->integer('heart_rate');
            $table->integer('rheumatoid_factor');
            $table->integer('temperature');
            $table->integer('sat_o2');
            $table->integer('glucose');
            $table->integer('insulin');
            $table->integer('skin_thickness');
            $table->float('bmi');
            $table->float('dpf');
            $table->integer('glasgow');
            $table->string('neurologic', 200)->default('None');
            $table->string('head', 200)->default('None');
            $table->string('neck', 200)->default('None');
            $table->string('cardiopulmonary', 200)->default('None');
            $table->string('abdomen', 200)->default('None');
            $table->string('extremities', 200)->default('None');
            $table->string('diagnosis', 200)->default('None');
            $table->string('condition', 200)->default('None');
            $table->string('treatment', 200)->default('None');
            $table->string('forecast', 200)->default('None');
            $table->foreignId('patient_id')->constrained('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
