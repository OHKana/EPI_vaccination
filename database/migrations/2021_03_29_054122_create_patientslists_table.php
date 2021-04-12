<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientslistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientslists', function (Blueprint $table) {
            $table->id('Registration_No');
            $table->string('patients_Name');
            $table->string('fathers_Name');
            $table->string('mothers_Namme');
            $table->date('dob');
            $table->string('gender');
            $table->string('contact_Nbr');
            $table->string('address');
            $table->string('vaccination_Area');
            $table->date('regDate');
            $table->string('category');
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
        Schema::dropIfExists('patientslists');
    }
}
