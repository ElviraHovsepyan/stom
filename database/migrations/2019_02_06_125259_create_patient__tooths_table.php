<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientToothsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient__tooths', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->integer('tooth_id');
            $table->string('value_1')->nullable();
            $table->string('value_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient__tooths');
    }
}
