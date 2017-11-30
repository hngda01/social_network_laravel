<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotification extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_diary')->unsigned();
            $table->string('noti');
            $table->integer('seen');
            $table->timestamps();
            $table->foreign('id_user')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');  
            $table->foreign('id_diary')
            ->references('id')
            ->on('diary')
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
        Schema::dropIfExists('notification');
    }
}
