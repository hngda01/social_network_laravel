<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("user_info",function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('date_of_birth'); 
            $table->string('school');
            $table->string('address');
            $table->string('hobby');                    
            $table->timestamps();
            $table->foreign('id_user')
            ->references('id')
            ->on('users')
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
        Shema::dropIfExists('user_info');
    }
}
