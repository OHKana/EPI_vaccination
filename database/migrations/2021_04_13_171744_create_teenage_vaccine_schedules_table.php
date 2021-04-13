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
            $table->integer('V_id');
            $table->string('eligible_date');
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