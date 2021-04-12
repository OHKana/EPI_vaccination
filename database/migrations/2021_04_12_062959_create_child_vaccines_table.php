<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildVaccinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_vaccines', function (Blueprint $table) {
            $table->id();
            $table->string('V_Name');
            $table->string('disease');
            $table->string('N_of_dose');
            $table->string('Time_difference');
            $table->string('category');
            $table->string('starting_time');
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
        Schema::dropIfExists('child_vaccines');
    }
}
