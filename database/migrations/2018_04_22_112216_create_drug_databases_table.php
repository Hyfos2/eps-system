<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrugDatabasesTable extends Migration
{
    
    public function up()
    {
        Schema::create('drug_databases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pharmacist')->unsigned();
            $table->string('illness');
            $table->string('sns'); //sns = signs and symptoms
            $table->string('treatment');
            $table->string('active')->default('1');
            $table->string('dose');
            $table->string('fd'); // frequency daily
            $table->foreign('pharmacist')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('drug_databases');
    }
}
