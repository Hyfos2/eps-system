<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmacistsTable extends Migration
{
   
    public function up()
    {
        Schema::create('pharmacists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user')->unsigned();
            $table->string('address');
            $table->string('pharmacyName');
            $table->string('active')->default('1');
            //$table->string('cellphone')->unique();
            $table->foreign('user')->references('id')->on('users');   
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pharmacists');
    }
}
