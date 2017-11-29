<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('title');  
            $table->integer('priority');
            $table->string('address');  
            $table->string("start_date"); 
            $table->string("end_date"); 
            $table->string('content');
            $table->string('image');    
            $table->timestamps();
            $table->foreign('id_user')
            ->references('id')->on('users')
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
        Schema::dropIfExists('events');
    }
}
