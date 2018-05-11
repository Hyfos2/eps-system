<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user')->unsigned();
            $table->integer('specialisation')->unsigned();
            $table->string('address');
            $table->string('consultation');
            $table->string('active')->default('1');
         // $table->string('cellphone')->unique();
            $table->foreign('user')->references('id')->on('users');
            $table->foreign('specialisation')->references('id')->on('doctor_specialisations');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
