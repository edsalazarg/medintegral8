<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('firstName', 100);
            $table->string('lastName', 100);
            $table->string('email',50);
            $table->string('department', 50);
            $table->unsignedTinyInteger('age');
            $table->string('position', 50);
            $table->string('telephone', 15);
            $table->string('emergency_contact', 15);
            $table->enum('site', ['CUCEI', 'PREPA#12', 'VOCA', 'POLITECNICO', 'CDU', 'EXTERIOR']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
