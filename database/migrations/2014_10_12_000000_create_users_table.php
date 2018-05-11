<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->integer('userType')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->string('email')->unique();
            $table->string('cellphone')->unique()->nullable();
            $table->string('gender');
            $table->string('password');
            $table->string('active')->default('1');
            $table->string('userName');
            $table->date('lastLogin')->nullable();
            $table->foreign('userType')->references('id')->on('user_types');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->rememberToken();
            $table->timestamps();
        });
    }
   
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
