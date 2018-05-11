<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
   
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor')->unsigned();
            $table->integer('user')->unsigned();
            $table->date('dob');
            $table->string('nationalId');
            $table->string('address');
            $table->string('active')->default('1');
            $table->string('currentMedication');
            $table->string('allergies')->nullable();
          //  $table->string('complianceIssues')->nullable();
            $table->string('inheritableDisease')->nullable();
            $table->string('presentComplaint');// also known as pc
            $table->string('associatedSymptoms')->nullable();
            $table->string('timeCourse')->nullable();
            $table->string('relievingFactors')->nullable();
            $table->string('severity')->nullable();
            $table->string('smokingHistory')->nullable();
            $table->string('alcoholHistory')->nullable();
            $table->string('recreationalDrug')->nullable();
            $table->string('occupation')->nullable();
            $table->foreign('user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
