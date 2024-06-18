<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_emprestimos', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->default('0')->nullable();
            $table->string('processo')->default('0')->nullable();
            $table->string('bi')->default('0')->nullable();
            $table->string('genero')->nullable();
            $table->unsignedBigInteger('id_biblioteca');
            $table->timestamps();

            $table->foreign('id_biblioteca')->references('id')->on('bibliotecas')->onDelete('CASCADE')->onUpdate('CASCADE');
          


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_emprestimos');
    }
}
