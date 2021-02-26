<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('med_records', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('blood_group', 10);
            $table->boolean('diabetes');
            $table->boolean('hypertension');
            $table->boolean('epilepsy');
            $table->boolean('asthma');
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
        Schema::dropIfExists('med_records');
    }
}
