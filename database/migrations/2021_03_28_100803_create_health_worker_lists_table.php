<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthWorkerListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_worker_lists', function (Blueprint $table) {
            $table->id('User_Id');
            $table->string('HealthAssistant_Name');
            $table->date('dob');
            $table->string('Gender');
            $table->string('Contact_nbr');
            $table->string('Email_Address');
            $table->string('address');
            $table->string('Vaccination_Area');
            $table->text('file')->nullable();
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
        Schema::dropIfExists('health_worker_lists');
    }
}
