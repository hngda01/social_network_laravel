<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('name');            
            $table->timestamps();
            $table->foreign('id_user')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
        Schema::create('privacy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');            
            $table->timestamps();
        });
        Schema::create('diary', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('title');   
            $table->integer('id_category')->unsigned(); 
            $table->string('content');
            $table->string('image');
            $table->integer('id_privacy')->unsigned();     
            $table->timestamps();
            $table->foreign('id_user')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('id_category')
            ->references('id')
            ->on('category')
            ->onDelete('cascade');
            $table->foreign('id_privacy')
            ->references('id')
            ->on('privacy')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
        Schema::dropIfExists('privacy');
        Schema::dropIfExists('diary');
    }
}
