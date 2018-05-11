<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocPrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_prescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor');
            $table->integer('patient');
            $table->integer('pharmacist');
            $table->string('drug');
            $table->string('dosage');
            $table->string('prescription')->nullable();
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
        Schema::dropIfExists('doc_prescriptions');
    }
}
