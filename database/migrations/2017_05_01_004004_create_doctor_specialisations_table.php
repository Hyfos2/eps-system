<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorSpecialisationsTable extends Migration
{

    public function up()
    {
        Schema::create('doctor_specialisations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('specialisation')->unique();
            $table->string('active')->default('1');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('doctor_specialisations');
    }
}
