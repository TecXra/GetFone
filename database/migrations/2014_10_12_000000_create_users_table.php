<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('username');
            $table->string('email')->unique();
            $table->unsignedInteger('number')->unique();
            $table->string('password', 60);
            $table->string('confirmation_code'); 
            $table->string('verification_code')->nullable();
            $table->tinyInteger('vc_validity')->nullable();
            $table->string('token')->nullable();           
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
        Schema::drop('users');
    }

}
