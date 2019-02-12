<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('t_09_00')->nullable();
            $table->string('t_09_30')->nullable();
            $table->string('t_10_00')->nullable();
            $table->string('t_10_30')->nullable();
            $table->string('t_11_00')->nullable();
            $table->string('t_11_30')->nullable();
            $table->string('t_12_00')->nullable();
            $table->string('t_12_30')->nullable();
            $table->string('t_13_00')->nullable();
            $table->string('t_13_30')->nullable();
            $table->string('t_14_00')->nullable();
            $table->string('t_14_30')->nullable();
            $table->string('t_15_00')->nullable();
            $table->string('t_15_30')->nullable();
            $table->string('t_16_00')->nullable();
            $table->string('t_16_30')->nullable();
            $table->string('t_17_00')->nullable();
            $table->string('t_17_30')->nullable();
            $table->string('t_18_00')->nullable();
            $table->string('t_18_30')->nullable();
            $table->string('t_19_00')->nullable();
            $table->string('t_19_30')->nullable();
            $table->string('t_20_00')->nullable();
            $table->string('t_20_30')->nullable();
            $table->string('t_21_00')->nullable();
            $table->string('t_21_30')->nullable();
            $table->string('t_22_00')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
