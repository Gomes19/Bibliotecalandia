<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserbibliotecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userbibliotecas', function (Blueprint $table) {
            $table->id();
            $table->integer('acesso');
            $table->unsignedBigInteger('id_biblioteca');
            $table->foreign('id_biblioteca')->references('id')->on('bibliotecas')->onDelete('CASCADE')->onUpdate('CASCADE');
            
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
          

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
        Schema::dropIfExists('userbibliotecas');
    }
}
