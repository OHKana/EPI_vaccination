<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeenageVaccineSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teenage_vaccine_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('V_d_Name');
            $table->string('Schedule')->nullable();
            $table->string('eligible_date')->nullable();
            $table->string('V_rcv_date')->nullable();
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
        Schema::dropIfExists('teenage_vaccine_schedules');
    }
}
