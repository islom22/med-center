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
            $table->integer('phone');
            $table->string('name'); 
            $table->string('surname');
            $table->string('region_id');
            $table->string('city_id');
            $table->integer('status')->default('0');
            $table->integer('role')->default('0');
            $table->timestamps();

              
            $table->string('diagnos_main')->nullable();
            $table->string('diagnos_eye')->nullable();
            $table->string('diagnos_cardiolog')->nullable();
            $table->string('diagnos_xray')->nullable();
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
