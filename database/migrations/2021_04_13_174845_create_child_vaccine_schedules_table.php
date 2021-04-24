<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildVaccineSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_vaccine_schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('cv_id');
            $table->integer('patient_id');
            $table->string('eligible_d')->nullable();
            $table->string('fst_d')->nullable();
            $table->string('snd_d')->nullable();
            $table->string('trd_d')->nullable();
            $table->string('fth_d')->nullable();
            $table->string('fifth_d')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('child_vaccine_schedules');
    }
}
