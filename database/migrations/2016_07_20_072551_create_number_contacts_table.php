<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumberContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('contacts_id')->nullable();
            $table->unsignedInteger('number');
            $table->string('name');
            $table->timestamps();
            $table->foreign('contacts_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
        });





         Schema::create('conversations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('conversation_id')->nullable();
            $table->unsignedInteger('to_number');
            $table->text('message');
            $table->string('check');
            $table->timestamps();
            $table->foreign('conversation_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contacts');
        Schema::drop('conversations');
    }
}
