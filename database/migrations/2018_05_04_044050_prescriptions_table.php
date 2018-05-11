<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrescriptionsTable extends Migration
{

    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor')->unsigned();
            $table->integer('patient')->unsigned();
            $table->string('symptoms');
            $table->date('date');
            $table->time('time');
            $table->string('active')->default('1');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
}
